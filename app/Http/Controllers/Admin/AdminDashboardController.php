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

}
