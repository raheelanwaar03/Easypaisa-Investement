<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\User\BuyPlan;
use App\Models\User\Wallet;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $plans = Plans::get();
        return view('user.invest.index',compact('plans'));
    }

    public function buyPlan($id)
    {
        $plan = Plans::find($id);
        return view('user.invest.buyPlan',compact('plan'));
    }

    public function storePlan(Request $request,$id)
    {
        $validated = $request->validate([
            'number' => 'required',
            'trxId' => 'required',
            'name' => 'required',
        ]);

        $plan = Plans::find($id);

        $user_plan = new BuyPlan();
        $user_plan->user_id = auth()->user()->id;
        $user_plan->plan_id = $plan->id;
        $user_plan->plan_name = $plan->name;
        $user_plan->plan_investment = $plan->investment;
        $user_plan->name = $validated['name'];
        $user_plan->number = $validated['number'];
        $user_plan->trxId = $validated['trxId'];
        $user_plan->save();
        return redirect()->back()->with('success','Your request has been submitted successfully');
    }

    public function activePlan()
    {
        $plans = BuyPlan::where('user_id',auth()->user()->id)->get();
        return view('user.invest.activePlan',compact('plans'));
    }

    public function dailyProfit()
    {
        $plans = BuyPlan::where('user_id',auth()->user()->id)->where('status','approved')->get();
        $investment = 0;
        foreach($plans as $plan)
        {
            $investment += $plan->plan_investment;
        }
        // 10 % commission of investment
        $profit = $investment * 10 / 100;

        $wallet = new Wallet();
        $wallet->user_id = auth()->user()->id;
        $wallet->wallet += $profit;
        $wallet->save();
        return redirect()->back()->with('success','you have got your 10% commission on your investment');
    }

    public function convert()
    {
        $user = User::where('id',auth()->user()->id)->first();
        $user->balance += wallet_balance();
        $user->save();

        $wallet = Wallet::where('user_id',auth()->user()->id)->first();
        $wallet->wallet = 0;
        $wallet->save();
        return redirect()->back()->with('success','your wallet balance has been moved to main wallet');
    }


}
