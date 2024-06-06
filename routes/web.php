<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/', 'indexSlider');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('introduction', 'introduction')->name('introduction');
    Route::get('vision-purpose-and-mission', 'visionPurposeAndMission')->name('vision-purpose-and-mission');
    Route::get('core-values', 'CoreValues')->name('core-values');
});
