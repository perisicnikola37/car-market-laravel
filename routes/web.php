<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnalitikaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KorisniciDashboardController;
use App\Http\Controllers\OglasiDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::auth();

Route::group(['middleware' => 'isadmin'], function () {
    Route::resource('/analitika', AnalitikaController::class);
    Route::get('/svi-korisnici', [KorisniciDashboardController::class, 'index'])->name('svi-korisnici');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'redirect');
    Route::get('/naslovna', 'index')->name('dashboard');
    Route::resource('/car', DashboardController::class);
    Route::get('/oglas/{slug}', 'show')->name('slug');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/dodaj-oglas', AdminController::class)->middleware('limit');

Route::resource('/profil', ProfileController::class);

Route::get('/profil-podesavanja', [ProfileController::class, 'index2'])->name('profil-podesavanja');

Route::controller(KorisniciDashboardController::class)->group(function () {
    Route::delete('/izbriši-korisnika/{id}', 'destroy')->name('izbriši-korisnika');
    Route::get('/prikaži-korisnika/{id}', 'show')->name('prikaži-korisnika');
});

Route::controller(OglasiDashboardController::class)->group(function () {
    Route::get('/svi-oglasi', 'index')->name('svi-oglasi');
    Route::get('/izmijeni-oglas/{slug}', 'edit')->name('izmijeni-oglas');
    Route::patch('/izmijeni-oglas/{id}/update', 'update')->name('izmijeni-oglas-update');
    Route::delete('/izmijeni-oglas/{id}', 'destroy')->name('izmijeni-oglas-destroy');
});

Route::get('/logout', [LoginController::class, 'logout']);
