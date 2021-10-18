<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// visiting page
Route::view('/', 'welcome');

Auth::routes();
Route::get('/home', [Controller::class, 'index'])->name('home');


// Users -----------------------------------------------------------------------------------
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('user_dashboard');
});

// Admins ----------------------------------------------------------------------------------
Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin_dashboard');
});

// Doctors --------------------------------------------------------------------------------
Route::group(['prefix' => 'doctor',  'middleware' =>'doctor'], function()
{
    Route::get('/dashboard', [DoctorController::class,'dashboard'])->name('doctor_dashboard');
});

// Pages
Route::view('/privacy', [PageController::class,'privacy'])->name('privacy');
Route::view('/search', [PageController::class,'search'])->name('search');
Route::view('/terms', [PageController::class,'terms'])->name('terms');


// Admin
// Route::view('/admin/dashboard', 'admin/dashboard')->name('admin.dashboard');
Route::view('/admin/appointment-list', 'admin/appointment-list')->name('admin.appointment-list');
Route::view('/admin/doctor-list', 'admin/doctor-list')->name('admin.doctor-list');
