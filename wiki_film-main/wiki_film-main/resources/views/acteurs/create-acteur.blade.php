@extends('layouts.app')

@section('content')
<div class="iq-breadcrumb" style="background-image: url(../assets/images/pages/01.html);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">WikiFilm</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item">Acteur</li> 
                              <li class="breadcrumb-item active">Créer un Acteur</li>
                          </ol>
                      </nav>
                  </div>
              </div> 
         </div>
      </div>
    <div class="p-4 text-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('acteurs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5">
                <label class="mb-2">Nom&nbsp; <span class="text-danger">*</span></label>
                <input type="text" name="nom" value="{{ old('nom') }}" class="form-control" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Prénom&nbsp; <span class="text-danger">*</span></label>
                <input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Date de Naissance&nbsp; <span class="text-danger">*</span></label>
                <input type="date" name="date_naissance" value="{{ old('date_naissance') }}" class="form-control" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Nationalité&nbsp; <span class="text-danger">*</span></label>
                <input type="text" name="nationalite" value="{{ old('nationalite') }}" class="form-control" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Biographie&nbsp; <span class="text-danger">*</span></label>
                <textarea name="biographie" class="form-control" required="required">{{ old('biographie') }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control-file" required>
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Date de Début de Carrière&nbsp; <span class="text-danger">*</span></label>
                <input type="date" name="date_debut_carriere" value="{{ old('date_debut_carriere') }}" class="form-control" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Récompenses&nbsp; <span class="text-danger">*</span></label>
                <input type="text" name="recompenses" value="{{ old('recompenses') }}" class="form-control" placeholder="Séparez les récompenses par des virgules" required="required">
            </div>
            <div class="form-group mb-5">
                <label class="mb-2">Genres Préférés&nbsp; <span class="text-danger">*</span></label>
                <input type="text" name="genres_preferes" value="{{ old('genres_preferes') }}" class="form-control" placeholder="Séparez les genres par des virgules" required="required">
            </div>
            <div class="form-group">
                <div class="iq-button">
                    <button type="submit" class="btn text-uppercase position-relative">
                        <span class="button-text">Enregistrer</span>
                        <i class="fa-solid fa-play"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
