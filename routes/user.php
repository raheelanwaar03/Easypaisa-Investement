<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth', 'user')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');
    Route::get('Widthraw/Amount',[UserDashboardController::class,'widthraw'])->name('Widthraw.Amount');
    Route::post('Store/Widthraw',[UserDashboardController::class,'storeWidthraw'])->name('Store.Widthraw');
    Route::get('Widthraw/History',[UserDashboardController::class,'history'])->name('Widthraw.History');


});

