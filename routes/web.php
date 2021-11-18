<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Doctors\DoctorController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

// Users routes
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('user.dashboard');
});

// admin routes
Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
});

// doctor routes
Route::group(['prefix' => 'doctor',  'middleware' => 'doctor'], function()
{
    Route::get('/dashboard', [DoctorController::class,'dashboard'])->name('doctor.dashboard');
});
