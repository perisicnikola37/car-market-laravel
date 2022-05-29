<?php

use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'isadmin'], function() {

Route::resource('/analitika', App\Http\Controllers\AnalitikaController::class);

// Korisnici Dashboard
Route::get('/svi-korisnici', [App\Http\Controllers\KorisniciDashboardController::class, 'index'])->name('svi-korisnici');

});


// Redirect na /naslovna
Route::get('/', 'App\Http\Controllers\DashboardController@redirect');

Route::get('/naslovna', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dodaj-oglas', App\Http\Controllers\AdminController::class);
Route::resource('/car', App\Http\Controllers\DashboardController::class);
Route::resource('/profil', App\Http\Controllers\ProfileController::class);



// Oglasi Dashboard
Route::get('/svi-oglasi', [App\Http\Controllers\OglasiDashboardController::class, 'index'])->name('svi-oglasi');



// Za brisanje korisnika
Route::delete('/izbriši-korisnika/{id}', [App\Http\Controllers\KorisniciDashboardController::class, 'destroy'])->name('izbriši-korisnika');


Route::get('/izmijeni-oglas/{slug}', [App\Http\Controllers\OglasiDashboardController::class, 'edit'])->name('izmijeni-oglas');


// Prije bez slug-a
// Route::get('/izmijeni-oglas/{id}', [App\Http\Controllers\OglasiDashboardController::class, 'edit'])->name('izmijeni-oglas');

Route::patch('/izmijeni-oglas/{id}/update', [App\Http\Controllers\OglasiDashboardController::class, 'update'])->name('izmijeni-oglas-update');


Route::delete('/izmijeni-oglas/{id}', [App\Http\Controllers\OglasiDashboardController::class, 'destroy'])->name('izmijeni-oglas-destroy');

Route::get('/oglas/{slug}', [App\Http\Controllers\DashboardController::class, 'show'])->name('slug');

// Route za logout
// U blade fajlu sam napisao u a button-u href="{{route('logout')}}
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


