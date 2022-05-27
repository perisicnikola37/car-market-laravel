<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');




Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin', App\Http\Controllers\AdminController::class);
Route::resource('car', App\Http\Controllers\DashboardController::class);

// Route za logout
// U blade fajlu sam napisao u a button-u href="{{route('logout')}}
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


