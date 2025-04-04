<?php

use App\Http\Controllers\Configuraciones\ConfigController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('products', ProductController::class);
    Route::get('adminpanel', [ConfigController::class, 'adminpanel'])->name('adminpanel');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
