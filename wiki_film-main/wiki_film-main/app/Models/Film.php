<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'duree', 'date_sortie', 'realisateur', 
        'genre', 'langue_originale', 'pays_production', 'sous_titres_disponibles', 
        'date_ajout', 'affiche_url', 'bande_annonce_url', 'classification','image_url'
    ];

    protected $casts = [
        'sous_titres_disponibles' => 'array',
    ];

    // public function acteurs()
    // {
    //     return $this->belongsToMany(Acteur::class);
    // }

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class, 'film_acteur');
    }
}

