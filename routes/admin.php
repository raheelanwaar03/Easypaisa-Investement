<?php

use Illuminate\Support\Facades\Route;



Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard',[AdminDashboard::class,'index'])->name('Dashboard');

});
