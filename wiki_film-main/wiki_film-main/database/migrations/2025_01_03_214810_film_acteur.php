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
        
    Schema::create('film_acteur', function (Blueprint $table) {
        $table->id(); // Optionnel
        $table->foreignId('film_id')->constrained('films')->onDelete('cascade');
        $table->foreignId('acteur_id')->constrained('acteurs')->onDelete('cascade');
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
