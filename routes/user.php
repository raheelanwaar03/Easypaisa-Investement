<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth', 'user')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');


});

