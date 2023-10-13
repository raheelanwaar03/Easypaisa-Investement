<?php

use App\Http\Controllers\user\InvestmentController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth', 'user','status')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');
    Route::get('Widthraw/Amount',[UserDashboardController::class,'widthraw'])->name('Widthraw.Amount');
    Route::post('Store/Widthraw',[UserDashboardController::class,'storeWidthraw'])->name('Store.Widthraw');
    Route::get('Widthraw/History',[UserDashboardController::class,'history'])->name('Widthraw.History');
    Route::get('Team/Members',[UserDashboardController::class,'team'])->name('Team.Members');
    Route::get('Invest',[InvestmentController::class,'index'])->name('Investment.Plans');


});
