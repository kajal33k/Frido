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
    Route::get('/blogs', [HomeController::class, 'blogs'])->name('pages.blogs');
    Route::get('/store-locator', [HomeController::class, 'storeLocator'])->name('pages.store-locator');
    Route::get('/become-a-retailer', [HomeController::class, 'becomeARetailer'])->name('pages.become_a_retailer');
    Route::get('/faqs', [HomeController::class, 'faqs'])->name('pages.faqs');
    Route::get('/terms', [HomeController::class, 'terms'])->name('pages.terms');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('pages.privacy-policy');
    Route::get('/return-refund-cancellation-policy', [HomeController::class, 'returnRefundCancellationPolicy'])->name('pages.return_refund_cancellation_policy');

    // Blog and Details
    Route::get('/blogdetails', [HomeController::class, 'blogdetails'])->name('pages.blogdetails');

    // Product Pages
    Route::get('/cusion', [HomeController::class, 'cusion'])->name('pages.cusion');
    Route::get('/pillow', [HomeController::class, 'pillow'])->name('pages.pillow');
});


Route::prefix('products')->group(function () {
    Route::get('/product', [HomeController::class, 'product'])->name('products.product');
});