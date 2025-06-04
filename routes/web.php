<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\propertiesController;
use App\Http\Controllers\servicesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

// Route::get('/', function () {
//     return view('welcome');
// });

//Routes for services

Route::get('/services', [servicesController::class, 'index'])->name('services');


Route::get('/service.{id}', [servicesController::class, 'show'])->name('service.show');
    

Route::get('/a-propos', function () {
    return view('properties.about');
})->name('about');


//Routes for properties

Route::get('/', [propertiesController::class, 'index'])->name('acceuil');

Route::get('/proprietes', [propertiesController::class, 'viewProperty'])->name('property.view');

Route::get('/co-proprietes/{id}', [propertiesController::class, 'coPropertyView'])->name('coproperty.view');

Route::get('/proprietes/{id}', [propertiesController::class, 'show'])->name('property.show');

Route::get('/recherche', [propertiesController::class, 'search'])->name('property.search');

Route::get('/properties/type/{id}', [propertiesController::class, 'showByType'])->name('property.showByType');

Route::get('/properties/status/{id}', [propertiesController::class, 'showByStatus'])->name('property.showByStatus');

Route::get('/properties/adresse/{adresse}', [propertiesController::class, 'showByLocation'])->name('property.showByLocation');

Route::get('/properties/type/{type_id}/status/{status_id}', [propertiesController::class, 'filterPropertyByTypeAndStatus'])->name('property.filterByTypeAndStatus');





//Authentification Routes

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

        
    Route::get('/ajouter-un-service', [servicesController::class, 'create'])->name('service.create');

    Route::post('/ajouter-service', [servicesController::class, 'store'])->name('service.store');

    Route::get('/service/{id}/edit', [servicesController::class, 'edit'])->name('service.edit');

    Route::put('/service/{id}', [servicesController::class, 'update'])->name('service.update');

    Route::delete('/service/{services}', [servicesController::class, 'destroy'])->name('service.destroy');

    //Routes for properties

    Route::get('/generate-qrcode/{address}', function ($address) {
        $url = url("localhost:8000/properties/adresse?address={$address}");
        $qrCode = QrCode::size(200)->generate($url);
    
        // Enregistrer le QR code sur le disque
        $path = "qrcodes/{$address}.png";
        Storage::put($path, $qrCode);
    
        // Renvoyer l'URL de l'image enregistrée
        return response()->json(['url' => Storage::url($path)]);
    });
<<<<<<< HEAD

=======
//
>>>>>>> ef4c22462ca54af1a2d1e0cac7592c8e2157283f
    Route::get('/publier-une-propriete', [propertiesController::class, 'create'])->name('property.create');


    Route::get('/communes/{id_dep}', [propertiesController::class, 'getCommunes'])->name('adresses.communes');

    Route::get('/arrondissements/{id_com}', [propertiesController::class, 'getArrondissements'])->name('adresses.arrondissements');

    Route::get('/modifier-une-propriete/{id}', [propertiesController::class, 'edit'])->name('property.edit');

    Route::put('/modifier-une-propriete/{id}', [propertiesController::class, 'update'])->name('property.update');

    Route::delete('/supprimer-une-propriete/{id}', [propertiesController::class, 'destroy'])->name('property.destroy');

    Route::post('/ajouter-propriete', [propertiesController::class, 'store'])->name('property.store');

    Route::get('/publier-une-propriete', [propertiesController::class, 'create'])->name('property.create');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
