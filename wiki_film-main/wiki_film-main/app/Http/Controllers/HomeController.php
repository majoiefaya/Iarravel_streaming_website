<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Acteur;
class HomeController extends Controller
{
    public function index()
    {
        // Récupère tous les films depuis la base de données
        $films = Film::all();
        $acteurs = Acteur::all();
        // Retourne la vue 'welcome' avec les films
        return view('welcome', compact('films','acteurs'));
    }
}
