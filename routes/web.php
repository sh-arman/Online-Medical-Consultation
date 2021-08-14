<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Pages Controller
Route::view('/index', 'page/index')->name('index');
Route::view('/privacy', 'page/privacy')->name('privacy');
Route::view('/search', 'page/search')->name('search');
Route::view('/terms', 'page/terms')->name('terms');


// Admin Controller
Route::view('/admin/dashboard', 'admin/dashboard')->name('admin.dashboard');
Route::view('/admin/appointment-list', 'admin/appointment-list')->name('admin.appointment-list');
Route::view('/admin/doctor-list', 'admin/doctor-list')->name('admin.doctor-list');
