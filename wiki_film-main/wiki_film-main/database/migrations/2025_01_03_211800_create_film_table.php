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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->integer('duree');
            $table->date('date_sortie')->nullable();
            $table->string('realisateur')->nullable();
            $table->string('genre')->nullable();
            $table->string('langue_originale')->nullable();
            $table->string('pays_production')->nullable();
            $table->json('sous_titres_disponibles')->nullable();
            $table->date('date_ajout')->default(now());
            $table->string('affiche_url')->nullable();
            $table->string('bande_annonce_url')->nullable();
            $table->string('classification')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
