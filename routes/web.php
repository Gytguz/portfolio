<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


// Guest Routes
Route::middleware(['guest'])->group(function () {

    // Pages
    Route::get('/', [PagesController::class, 'homePage']);
    Route::get('/contact', [PagesController::class, 'contactPage']);
    Route::get('/hello-world', [PagesController::class, 'helloWorldPage']);
    
});
