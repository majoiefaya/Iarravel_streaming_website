<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom', 'date_naissance', 'nationalite', 'biographie', 
        'photo_url', 'date_debut_carriere', 'recompenses', 'genres_preferes',
    ];

    protected $casts = [
        'recompenses' => 'array',
        'genres_preferes' => 'array',
    ];

    // public function films()
    // {
    //     return $this->belongsToMany(Film::class);
    // }

    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_acteur');
    }

}
