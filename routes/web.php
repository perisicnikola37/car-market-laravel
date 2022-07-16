<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::auth();

Route::group(['middleware' => 'isadmin'], function() {
Route::resource('/analitika', App\Http\Controllers\AnalitikaController::class);
// Korisnici Dashboard
Route::get('/svi-korisnici', [App\Http\Controllers\KorisniciDashboardController::class, 'index'])->name('svi-korisnici');
});

Route::controller(DashboardController::class)->group(function() {
// Redirect na /naslovna
Route::get('/', [DashboardController::class, 'redirect']);
Route::get('/naslovna', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::resource('/car', App\Http\Controllers\DashboardController::class);
Route::get('/oglas/{slug}', [App\Http\Controllers\DashboardController::class, 'show'])->name('slug');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dodaj-oglas', App\Http\Controllers\AdminController::class)->middleware('limit');

Route::resource('/profil', App\Http\Controllers\ProfileController::class);

Route::get('/profil-podesavanja', [App\Http\Controllers\ProfileController::class, 'index2'])->name('profil-podesavanja');

Route::controller(KorisniciDashboardController::class)->group(function() {
// Za brisanje korisnika
Route::delete('/izbriši-korisnika/{id}', [App\Http\Controllers\KorisniciDashboardController::class, 'destroy'])->name('izbriši-korisnika');
// Za prikazivanje korisnika
Route::get('/prikaži-korisnika/{id}', [App\Http\Controllers\KorisniciDashboardController::class, 'show'])->name('prikaži-korisnika');
});

Route::controller(OglasiDashboardController::class)->group(function() {
// Oglasi Dashboard
Route::get('/svi-oglasi', [App\Http\Controllers\OglasiDashboardController::class, 'index'])->name('svi-oglasi');
Route::get('/izmijeni-oglas/{slug}', [App\Http\Controllers\OglasiDashboardController::class, 'edit'])->name('izmijeni-oglas');
// Prije bez slug-a
// Route::get('/izmijeni-oglas/{id}', [App\Http\Controllers\OglasiDashboardController::class, 'edit'])->name('izmijeni-oglas');
Route::patch('/izmijeni-oglas/{id}/update', [App\Http\Controllers\OglasiDashboardController::class, 'update'])->name('izmijeni-oglas-update');
Route::delete('/izmijeni-oglas/{id}', [App\Http\Controllers\OglasiDashboardController::class, 'destroy'])->name('izmijeni-oglas-destroy');
});

// Route za logout
Route::get('/logout', [LoginController::class, 'logout']);


