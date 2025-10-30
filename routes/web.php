<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pengumuman', [App\Http\Controllers\HomeController::class, 'pengumuman'])->name('pengumuman');
