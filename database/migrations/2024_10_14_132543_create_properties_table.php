<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('titre');
            $table->string('statut');
            $table->string('type');
            $table->string('nChambre');
            $table->string('nDouche');
            $table->string('telephone');
            $table->string('nGarage')->nullable();
            $table->string('nPicsine')->nullable();
            $table->string('co-property')->nullable();
            $table->string('co-location')->nullable();
            $table->double('price');
            $table->string('adresse');
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
