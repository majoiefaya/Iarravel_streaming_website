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
        Schema::create('acteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->text('biographie')->nullable();
            $table->string('photo_url')->nullable();
            $table->date('date_debut_carriere')->nullable();
            $table->json('recompenses')->nullable();
            $table->json('genres_preferes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_acteur');
    }
};
