<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/combos', [HomeController::class, 'combos'])->name('combos');
Route::get('/inshole', [HomeController::class, 'inshole'])->name('inshole');