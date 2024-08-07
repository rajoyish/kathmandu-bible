<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\AcademicProgram\AcademicProgramController;
use App\Http\Controllers\Advisors\AdvisorController;
use App\Http\Controllers\BoardMember\BoardMemberController;
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Gallery\GalleryIndexController;
use App\Http\Controllers\Gallery\GalleryShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\PostByAuthorController;
use App\Http\Controllers\Post\PostIndexController;
use App\Http\Controllers\Post\PostShowController;
use App\Http\Controllers\SupportUs\SupportUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home.index');

Route::controller(AboutUsController::class)->group(function () {
    Route::get('introduction', 'introduction')->name('introduction');
    Route::get('vision-purpose-and-mission', 'visionPurposeAndMission')->name('vision-purpose-and-mission');
    Route::get('core-values', 'CoreValues')->name('core-values');
    Route::get('statement-of-faith', 'statementOfFaith')->name('statement-of-faith');
    Route::get('message-from-the-president', 'messageFromPresident')->name('message-from-president');
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

Route::get('galleries', GalleryIndexController::class)->name('galleries.index');
Route::get('galleries/{gallery:slug}', GalleryShowController::class)->name('galleries.show');
Route::get('support-us', SupportUsController::class)->name('support-us');

Route::get('posts', PostIndexController::class)->name('posts.index');
Route::get('post/{post:slug}', PostShowController::class)->name('post.show');
Route::get('{author:slug}/posts', PostByAuthorController::class)->name('author.posts');

Route::get('faculty', FacultyController::class)->name('faculty');
