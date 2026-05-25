<?php

use App\Http\Controllers\ApunteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NucleoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/nt1', [NucleoController::class, 'nt1'])->name('nt1');
Route::get('/nt2', [NucleoController::class, 'nt2'])->name('nt2');
Route::get('/nt3', [NucleoController::class, 'nt3'])->name('nt3');
Route::get('/nt4', [NucleoController::class, 'nt4'])->name('nt4');
Route::get('/nt5', [NucleoController::class, 'nt5'])->name('nt5');

Route::resource('apuntes', ApunteController::class);