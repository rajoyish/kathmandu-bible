<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\AcademicProgram\AcademicProgramController;
use App\Http\Controllers\Advisors\AdvisorController;
use App\Http\Controllers\BoardMember\BoardMemberController;
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
    Route::get('statement-of-faith', 'statementOfFaith')->name('statement-of-faith');
});

Route::controller(AcademicProgramController::class)->group(function () {
    Route::get('academic-programs/certificate-in-theology-c-th', 'certificateInTheology')
        ->name('certificate-in-theology-c-th');
    Route::get('academic-programs/diploma-in-theology-dip-th', 'diplomaInTheology')
        ->name('diploma-in-theology-dip-th');
    Route::get('academic-programs/bachelor-of-theology-b-th', 'bachelorOfTheology')
        ->name('bachelor-of-theology-b-th');
    Route::get('academic-programs/m-a-in-christian-missions', 'mAInChristianMissions')
        ->name('m-a-in-christian-missions');
});

Route::get('advisors', AdvisorController::class)->name('advisors');
Route::get('board-members', BoardMemberController::class)->name('board-members');
