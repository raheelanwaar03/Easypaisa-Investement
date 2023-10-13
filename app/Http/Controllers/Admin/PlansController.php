<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function add()
    {
        return view('admin.plans.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'investment' => 'required',
            'duration' => 'required',
            'total_profit' => 'required',
        ]);

        $plan = new Plans();
        $plan->name = $validated['name'];
        $plan->investment = $validated['investment'];
        $plan->duration = $validated['duration'];
        $plan->total_profit = $validated['total_profit'];
        $plan->save();
        return redirect()->back()->with('success','Plan added successfully');
    }

}
