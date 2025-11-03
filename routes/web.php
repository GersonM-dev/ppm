<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pengumuman', [App\Http\Controllers\HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/pendaftaran', [App\Http\Controllers\HomeController::class, 'pendaftaran'])
    ->middleware('auth')
    ->name('pendaftaran');

Route::post('/pendaftaran', [App\Http\Controllers\HomeController::class, 'submitPendaftaran'])
    ->middleware('auth')
    ->name('pendaftaran.store');
