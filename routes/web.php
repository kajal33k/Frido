<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/inshole', [HomeController::class, 'inshole'])->name('inshole');

Route::prefix('collections')->group(function () {
    Route::get('/combos', [HomeController::class, 'combos'])->name('collections.combos');
    Route::get('/best-sellers', [HomeController::class, 'bestSellers'])->name('collections.best-sellers');
    Route::get('/new-launches', [HomeController::class, 'newLaunches'])->name('collections.new-launches');
    Route::get('/ultimate-combo', [HomeController::class, 'ultimateCombo'])->name('collections.ultimate-combo');
    Route::get('/office-combos', [HomeController::class, 'officeCombos'])->name('collections.office-combos');
    Route::get('/ergonomic-chairs', [HomeController::class, 'ergonomicChairs'])->name('collections.ergonomic-chairs');
});


Route::prefix('pages')->group(function () {
    Route::get('/about', [HomeController::class, 'about'])->name('pages.about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('pages.contact');
    Route::get('/faqs', [HomeController::class, 'faqs'])->name('pages.faqs');
    Route::get('/terms', [HomeController::class, 'terms'])->name('pages.terms');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('pages.privacy-policy');
});
