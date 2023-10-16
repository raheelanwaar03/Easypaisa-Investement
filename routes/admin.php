<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\PlansController;
use Illuminate\Support\Facades\Route;



Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('Pending/Users',[AdminDashboardController::class,'pending'])->name('Pending.Users');
    Route::get('Approved/Users',[AdminDashboardController::class,'approved'])->name('Approved.Users');
    Route::get('Rejected/Users',[AdminDashboardController::class,'rejected'])->name('Rejected.Users');
    Route::get('Make/User/Approve/{id}',[AdminDashboardController::class,'makeApprove'])->name('Make.User.Approve');
    Route::get('Make/User/Reject/{id}',[AdminDashboardController::class,'makeReject'])->name('Make.User.Reject');
    Route::get('Make/User/Pending/{id}',[AdminDashboardController::class,'makePending'])->name('Make.User.Pending');
    Route::get('Add/Plans',[PlansController::class,'add'])->name('Add.Plans');
    Route::get('All/Plans',[PlansController::class,'all'])->name('All.Plans');
    Route::get('Edit/Plan/{id}',[PlansController::class,'edit'])->name('Edit.Plan');
    Route::post('Update/Plan/{id}',[PlansController::class,'update'])->name('Update.Plan');
    Route::post('Store/Plans',[PlansController::class,'store'])->name('Store.Plans');

});
