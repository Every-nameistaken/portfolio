<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use Symfony\Contracts\Service\Test\ServiceLocatorTest;

Route::get('/', HomeController::class)->name('index');
Route::get('/about',AboutController::class)->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/resume', [EducationController::class, 'index'])->name('resume');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('/feedback', [ContactController::class, 'store'])->name('feedback');
Route::get('/login',function(){
    return view('login');
})->name('login');
Route::post('/account/login',LoginController::class)->name('login.account');
Route::post('/testimony',[ReviewController::class, 'store'])->name('testimony');

Route::middleware('auth')->group(function(){
    Route::post('/image/upload', [ProfileController::class, 'storeImg'])->name('about.img');
    Route::post('/index_img/upload', [ProfileController::class, 'storeIndex_Img'])->name('index.img');
    Route::post('/admin/profile', [ProfileController::class, 'store'])->name('profile');
    Route::post('/admin/educaton',[EducationController::class, 'store'])->name('education.store');
    Route::post('experience',[ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/admin', [ProfileController::class, 'index'])->name('admin.forms');
    Route::post('/create/service',[ServicesController::class, 'store'])->name('service.store');
    Route::get('/logout',[ProfileController::class, 'logout'])->name('logout');
});
