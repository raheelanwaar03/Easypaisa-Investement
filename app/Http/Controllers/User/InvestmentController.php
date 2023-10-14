<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User\BuyPlan;
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

    public function storePlan(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required',
            'trxID' => 'required',
            'name' => 'required',
        ]);


        $user_plan = new BuyPlan();
        $user_plan->user_id = auth()->user()->id;
        $user_plan->name = $validated['name'];
        $user_plan->number = $validated['number'];
        $user_plan->trxId = $validated['trxId'];
        $user_plan->save();
        return redirect()->back()->with('success','Your request has been submitted successfully');

    }

}
