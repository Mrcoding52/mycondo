<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\propertiesController;
use App\Http\Controllers\servicesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Routes for services

Route::get('/services', [servicesController::class, 'index'])->name('services');

Route::get('/ajouter-un-service', [servicesController::class, 'create'])->name('service.create');

Route::post('/ajouter-service', [servicesController::class, 'store'])->name('service.store');

Route::get('/service.{id}', [servicesController::class, 'show'])->name('service.show');
    
Route::get('/service/{id}/edit', [servicesController::class, 'edit'])->name('service.edit');

Route::put('/service/{id}', [servicesController::class, 'update'])->name('service.update');

Route::delete('/service/{services}', [servicesController::class, 'destroy'])->name('service.destroy');

Route::get('/a-propos', function () {
    return view('properties.about');
})->name('about');


//Routes for properties

Route::get('/', [propertiesController::class, 'index'])->name('acceuil');

Route::get('/proprietes', [propertiesController::class, 'viewProperty'])->name('property.view');

Route::get('/co-proprietes', [propertiesController::class, 'coPropertyView'])->name('coproperty.view');

Route::get('/proprietes.{id}', [propertiesController::class, 'show'])->name('property.show');

Route::get('/properties/type/{id}', [propertiesController::class, 'showByType'])->name('property.showByType');

Route::get('/properties/status/{id}', [propertiesController::class, 'showByStatus'])->name('property.showByStatus');

Route::get('/publier-une-propriete', [propertiesController::class, 'create'])->name('property.create');

Route::post('/ajouter-propriete', [propertiesController::class, 'store'])->name('property.store');



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
