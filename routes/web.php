<?php

use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::prefix('seller')->name('seller.')->middleware(['auth',EnsureAdmin::class])->group(function(){
    Route::get('dashboard', function () {
        return Inertia::render('Seller/Dashboard');
    })->name('dashboard');
});

Route::prefix('buyer')->name('buyer.')->middleware(['auth'])->group(function() {
    Route::get('dashboard', function () {
        return Inertia::render('Buyer/Dashboard');
    })->name('dashboard');
});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
