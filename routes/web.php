<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;


// Guest Routes
Route::middleware(['guest'])->group(function () {

    // Pages
    Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
    Route::get('/shop', [ShopController::class, 'shopPage'])->name('shopPage');
    Route::get('/shop/product/{id}', [ShopController::class, 'productPage'])->name('productPage');
    // Route::get('/contact', [PagesController::class, 'contactPage'])->name('contactPage');
    
});
