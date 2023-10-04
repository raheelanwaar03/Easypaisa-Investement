<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('User/Dashboard',[UserDashboardController::class,'index'])->name('User.Dashboard');
