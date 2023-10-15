<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\PlansController;
use Illuminate\Support\Facades\Route;



Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('Pending/Users',[AdminDashboardController::class,'pending'])->name('Pending.Users');
    Route::get('Add/Plans',[PlansController::class,'add'])->name('Add.Plans');
    Route::post('Store/Plans',[PlansController::class,'store'])->name('Store.Plans');

});
