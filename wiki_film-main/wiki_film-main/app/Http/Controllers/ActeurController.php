<?php
namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;
class ActeurController extends Controller
{
    public function index(Request $request)
    {
        $query = Acteur::query();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('nom', 'LIKE', "%{$search}%")
                ->orWhere('prenom', 'LIKE', "%{$search}%");
            });
        }
        
        $acteurs = $query->get();
        
        return view('acteurs.index', compact('acteurs'));
    }

    
    public function create()
    {
        return view('acteurs.create-acteur');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'nationalite' => 'required|string|max:255',
            'biographie' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_debut_carriere' => 'required|date',
            'recompenses' => 'required|string',
            'genres_preferes' => 'required|string',
        ]);
    
        // Gestion de l'upload de la photo
        $photoUrl = null;
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/acteurs'), $imageName);
            $photoUrl = 'assets/images/acteurs/' . $imageName;
        }
    
        // Enregistrement de l'acteur
        $acteur = new Acteur([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'date_naissance' => $request->get('date_naissance'),
            'nationalite' => $request->get('nationalite'),
            'biographie' => $request->get('biographie'),
            'photo_url' => $photoUrl,
            'date_debut_carriere' => $request->get('date_debut_carriere'),
            'recompenses' => $request->get('recompenses'),
            'genres_preferes' => $request->get('genres_preferes'),
        ]);
    
        $acteur->save();
    
        return redirect()->route('acteurs.index')->with('success', 'Acteur créé avec succès.');
    }
    

    public function show(Acteur $acteur)
    {
        $acteur->load('films');
        return view('acteurs.show-acteur', compact('acteur'));
    }

    public function edit(Acteur $acteur)
    {
        return view('acteurs.edit-acteur', compact('acteur'));
    }

    public function update(Request $request, Acteur $acteur)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'nationalite' => 'required|string|max:255',
            'biographie' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_debut_carriere' => 'required|date',
            'recompenses' => 'required|string',
            'genres_preferes' => 'required|string',
        ]);

        $acteur->nom = $request->nom;
        $acteur->prenom = $request->prenom;
        $acteur->date_naissance = $request->date_naissance;
        $acteur->biographie = $request->biographie;
        $acteur->nationalite = $request->nationalite;
        $acteur->date_debut_carriere = $request->date_debut_carriere;
        $acteur->recompenses = $request->recompenses;
        $acteur->genres_preferes = $request->genres_preferes;
        // Gestion de l'upload de la photo
        $photoUrl = null;
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/acteurs'), $imageName);
            $photoUrl = 'assets/images/acteurs/' . $imageName;
        }

        $acteur->photo_url = $photoUrl;


        $acteur->save();
        return view('acteurs.edit-acteur', compact('acteur'));
    }

    public function destroy(Acteur $acteur)
    {
        $acteur->delete();
        return redirect()->route('acteurs.index')->with('success', 'Acteur supprimé avec succès');
    }
}