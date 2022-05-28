<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');




Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin', App\Http\Controllers\AdminController::class);
Route::resource('/car', App\Http\Controllers\DashboardController::class);
Route::resource('/profile', App\Http\Controllers\ProfileController::class);
Route::resource('/analytics', App\Http\Controllers\AnalitikaController::class);


// Oglasi Dashboard
Route::get('/svi-oglasi', [App\Http\Controllers\OglasiDashboardController::class, 'index'])->name('svi-oglasi');

Route::get('/izmijeni-oglas/{id}', [App\Http\Controllers\OglasiDashboardController::class, 'edit'])->name('izmijeni-oglas');

Route::patch('/izmijeni-oglas/{id}/update', [App\Http\Controllers\OglasiDashboardController::class, 'update'])->name('izmijeni-oglas-update');

Route::delete('/izmijeni-oglas/{id}/destroy', [App\Http\Controllers\OglasiDashboardController::class, 'destroy'])->name('izmijeni-oglas-destroy');



// Route za logout
// U blade fajlu sam napisao u a button-u href="{{route('logout')}}
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


