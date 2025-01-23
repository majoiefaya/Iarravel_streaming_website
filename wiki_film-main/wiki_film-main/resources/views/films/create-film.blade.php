@extends('layouts.app')

@section('content')
<div class="iq-breadcrumb" style="background-image: url(../assets/images/pages/01.html);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">WikiFilm</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item">Films</li> 
                              <li class="breadcrumb-item active">Ajouter un Film</li>
                          </ol>
                      </nav>
                  </div>
              </div> 
         </div>
      </div>
<div class="container">
    <h2>Ajouter un Film</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Titre du Film</label>
            <input type="text" name="titre" class="form-control" value="{{ old('titre') }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label>Durée</label>
            <input type="text" name="duree" class="form-control" value="{{ old('duree') }}" required>
        </div>
        <div class="form-group">
            <label>Date de Sortie</label>
            <input type="date" name="date_sortie" class="form-control" value="{{ old('date_sortie') }}" required>
        </div>
        <div class="form-group">
            <label>Réalisateur</label>
            <input type="text" name="realisateur" class="form-control" value="{{ old('realisateur') }}" required>
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ old('genre') }}" required>
        </div>
        <div class="form-group">
            <label>Langue Originale</label>
            <input type="text" name="langue_originale" class="form-control" value="{{ old('langue_originale') }}" required>
        </div>
        <div class="form-group">
            <label>Pays de Production</label>
            <input type="text" name="pays_production" class="form-control" value="{{ old('pays_production') }}" required>
        </div>
        <div class="form-group mb-5">
            <label class="mb-2">Sous-titres Disponibles&nbsp;</label>
            <input type="checkbox" name="sous_titres_disponibles" value="1" {{ old('sous_titres_disponibles') ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label>Date d'Ajout</label>
            <input type="date" name="date_ajout" class="form-control" value="{{ old('date_ajout') }}" required>
        </div>
        <div class="form-group">
            <label>Affiche (URL)</label>
            <input type="text" name="affiche_url" class="form-control" value="{{ old('affiche_url') }}" required>
        </div>
        <div class="form-group">
            <label>Bande-Annonce (URL)</label>
            <input type="text" name="bande_annonce_url" class="form-control" value="{{ old('bande_annonce_url') }}" required>
        </div>
        <div class="form-group">
            <label>Classification</label>
            <input type="text" name="classification" class="form-control" value="{{ old('classification') }}" required>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image_url" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label>Acteurs</label>
            <select name="acteurs[]" multiple class="form-control">
                @foreach ($acteurs as $acteur)
                    <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
