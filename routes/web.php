<?php

use Illuminate\Support\Facades\Route;

// visiting page
Route::view('/', 'welcome');

Auth::routes();

// home page {main}
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Pages Controller
Route::view('/privacy', 'page/privacy')->name('privacy');
Route::view('/search', 'page/search')->name('search');
Route::view('/terms', 'page/terms')->name('terms');


// Admin Controller
Route::view('/admin/dashboard', 'admin/dashboard')->name('admin.dashboard');
Route::view('/admin/appointment-list', 'admin/appointment-list')->name('admin.appointment-list');
Route::view('/admin/doctor-list', 'admin/doctor-list')->name('admin.doctor-list');
