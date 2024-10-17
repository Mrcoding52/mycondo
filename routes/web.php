<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\propertiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/page', [propertiesController::class, 'index'])->name('acceuil');

Route::get('/services', function () {
    return view('properties.services');
})->name('services');

Route::get('/a-propos', function () {
    return view('properties.about');
})->name('about');



Route::get('/publier-une-propriete', [propertiesController::class, 'create'])->name('property.create');




//Authentification Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
