<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BestWorksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FastAreaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MsgyouController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// FrontendController part start
Route::get('/', [FrontendController::class, 'frontend'])->name('frontend');
Route::post('/msgyou', [FrontendController::class, 'msgyou'])->name('msgyou');
Route::get('/msgindex', [MsgyouController::class, 'msgindex'])->name('msgindex');
// FrontendController part end

// banckend part start
// section one

// BannerController part
Route::resource('/banner_part', BannerController::class);
// BannerController part
// section two

// AboutController part
Route::resource('/about', AboutController::class);
// AboutController part
// section three

// PortfolioController part
Route::resource('/solution', SolutionController::class);
// PortfolioController part
// section four

// BestWorksController part
Route::resource('/best_works', BestWorksController::class);
// Route::get('/single_work/{id}', [BestWorksController::class, 'single_work'])->name('single_work');
// BestWorksController part
// section five

// BestWorksController part
Route::resource('/fast_area', FastAreaController::class);
// BestWorksController part
// section six

// TestimonialController part
Route::resource('/testimonial', TestimonialController::class);
// TestimonialController part
// section seven

// InformationController part
Route::resource('/info', ContactController::class);
// InformationController part
// section seven

// InformationController part
// Route::resource('/msgyou', MsgyouController::class);
// InformationController part

// banckend part end


// ProfileController part start
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile_photo', [ProfileController::class, 'profile_photo'])->name('profile_photo');
Route::post('/cover_photo', [ProfileController::class, 'cover_photo'])->name('cover_photo');
Route::post('/pass_Cng', [ProfileController::class, 'pass_Cng'])->name('pass_Cng');

// ProfileController part end


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





