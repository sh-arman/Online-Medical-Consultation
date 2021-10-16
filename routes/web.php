<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// visiting page
Route::view('/', 'welcome');

Auth::routes();


// Users -----------------------------------------------------------------------------------
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', [UserController::class, 'index'])->name('home');
});

// Admins ----------------------------------------------------------------------------------
Route::group(['prefix' => 'admin',  'middleware' => 'auth','admin'], function()
{
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin_dashboard');
});

// Doctors --------------------------------------------------------------------------------
Route::group(['prefix' => 'doctor',  'middleware' => 'auth','doctor'], function()
{
    Route::get('/dashboard', [DoctorController::class,'dashboard'])->name('doctor_dashboard');
});

// Pages
Route::view('/privacy', 'page/privacy')->name('privacy');
Route::view('/search', 'page/search')->name('search');
Route::view('/terms', 'page/terms')->name('terms');


// Admin
Route::view('/admin/dashboard', 'admin/dashboard')->name('admin.dashboard');
Route::view('/admin/appointment-list', 'admin/appointment-list')->name('admin.appointment-list');
Route::view('/admin/doctor-list', 'admin/doctor-list')->name('admin.doctor-list');
