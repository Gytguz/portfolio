<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


// // Guest Routes
// Route::middleware(['guest'])->group(function () {

    // Pages
    Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
    Route::get('/shop', [ShopController::class, 'shopPage'])->name('shopPage');
    Route::get('/shop/product/{id}', [ShopController::class, 'productPage'])->name('productPage');
    Route::get('/register', [UserController::class, 'registerPage'])->name('registerPage');
    Route::get('/login', [UserController::class, 'loginPage'])->name('loginPage');
    Route::post('/users/register', [UserController::class, 'registerStore'])->name('registerStore');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
    Route::get('/users/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

    
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboardPage');
    });
    
// });
