<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


// Guest Routes
Route::middleware(['guest'])->group(function () {

    // Pages
    Route::get('/', [PagesController::class, 'homePage'])->name('homePage');
    Route::get('/shop', [PagesController::class, 'shopPage'])->name('shopPage');
    Route::get('/contact', [PagesController::class, 'contactPage'])->name('contactPage');
    
});
