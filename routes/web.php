<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/', 'indexSlider');
    Route::get('about-us/introduction', 'indexIntroduction')->name('about-us.introduction');
});
