<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function pending()
    {
        $users = User::where('status','pending')->get();
        return view('admin.user.pending',compact('users'));
    }

    public function makeApprove($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        $referral = $user->referral;
        // giving referral bouns

        $user = User::where('email',$referral)->first();
        $user->balance += 50;
        $user->save();
        return redirect()->back()->with('success','user have been approved successfully');
    }

    public function approved()
    {
        $users = User::where('status','approved')->get();
        return view('admin.user.approved',compact('users'));
    }

    public function makeReject($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success','User has been rejected successfully');
    }

    public function rejected()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.user.rejected',compact('users'));
    }

    public function makePending($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success','User has been Pending now');
    }

}
