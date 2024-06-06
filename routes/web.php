<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/', 'indexSlider');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('about-us/introduction', 'introduction')->name('about-us.introduction');
});
