<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Acteur;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $query = Film::with('acteurs');
    
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('titre', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('realisateur', 'LIKE', "%{$search}%")
                  ->orWhere('genre', 'LIKE', "%{$search}%");
            });
        }
        
        $films = $query->get();
        
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $acteurs = Acteur::all();
        return view('films.create-film', compact('acteurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'duree' => 'required|integer',
            'date_sortie' => 'required|date',
            'realisateur' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'langue_originale' => 'required|string|max:255',
            'pays_production' => 'required|string|max:255',
            'sous_titres_disponibles' => 'nullable|boolean',
            'date_ajout' => 'required|date',
            'affiche_url' => 'nullable|url',
            'bande_annonce_url' => 'nullable|url',
            'classification' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'acteurs' => 'array|nullable', // Ajout de la validation pour les acteurs
        ]);

        // Gestion de l'upload de la photo
        $photoUrl = null;
        if ($request->hasFile('image_url')) {
            $imageName = time() . '.' . $request->file('image_url')->extension();
            $request->file('image_url')->move(public_path('assets/images/films'), $imageName);
            $photoUrl = 'assets/images/films/' . $imageName;
        }

        $film = new Film([
            'titre' => $request->get('titre'),
            'description' => $request->get('description'),
            'duree' => $request->get('duree'),
            'date_sortie' => $request->get('date_sortie'),
            'realisateur' => $request->get('realisateur'),
            'image_url' => $photoUrl,
            'genre' => $request->get('genre'),
            'langue_originale' => $request->get('langue_originale'),
            'pays_production' => $request->get('pays_production'),
            'sous_titres_disponibles' => $request->get('sous_titres_disponibles'),
            'date_ajout' => $request->get('date_ajout'),
            'affiche_url' => $request->get('affiche_url'),
            'bande_annonce_url' => $request->get('bande_annonce_url'),
            'classification' => $request->get('classification')
        ]);
    
        $film->save();

        // Associer les acteurs sélectionnés au film
        if($request->has('acteurs')) {
            $film->acteurs()->attach($request->acteurs);
        }

        return redirect()->route('films.index')->with('success', 'Film créé avec succès.');
    }


    public function show(Film $film)
    {
        $film->load('acteurs');
        return view('films.show-film', compact('film'));
    }

    public function edit(Film $film)
    {
        $acteurs = Acteur::all();
        return view('films.edit-film', compact('film', 'acteurs'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'duree' => 'required|integer',
            'date_sortie' => 'required|date',
            'realisateur' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'langue_originale' => 'required|string|max:255',
            'pays_production' => 'required|string|max:255',
            'sous_titres_disponibles' => 'nullable|boolean',
            'date_ajout' => 'required|date',
            'affiche_url' => 'nullable|url',
            'bande_annonce_url' => 'nullable|url',
            'classification' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'acteurs' => 'array|nullable', // Ajout de la validation pour les acteurs
        ]);

        $data = $request->all();

        $photoUrl = null;
        if ($request->hasFile('image_url')) {
            $imageName = time() . '.' . $request->file('image_url')->extension();
            $request->file('image_url')->move(public_path('assets/images/films'), $imageName);
            $photoUrl = 'assets/images/films/' . $imageName;
            $data['image_url'] = $photoUrl;
        }

        $film->update($data);

        // Synchroniser les acteurs (cela supprime les anciennes relations et ajoute les nouvelles)
        if($request->has('acteurs')) {
            $film->acteurs()->sync($request->acteurs);
        } else {
            $film->acteurs()->detach(); // Supprime toutes les relations si aucun acteur n'est sélectionné
        }

        return redirect()->route('films.index')->with('success', 'Film mis à jour avec succès.');
    }
    
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Film supprimé avec succès');
    }
}