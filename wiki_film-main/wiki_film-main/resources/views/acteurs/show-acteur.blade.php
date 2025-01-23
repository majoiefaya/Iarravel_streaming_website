@extends('layouts.app')

@section('content')
<div class="iq-breadcrumb" style="background-image: url(../assets/images/pages/01.html);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">WikiFilm</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item">Acteurs</li> 
                              <li class="breadcrumb-item active">Details Acteur</li>
                          </ol>
                      </nav>
                  </div>
              </div> 
         </div>
      </div>
<div class="actor-profile">
    <div class="container-fluid py-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="{{ asset($acteur->photo_url) }}" 
                         alt="{{ $acteur->nom }} {{ $acteur->prenom }}" 
                         class="img-fluid rounded-3 shadow-lg" 
                         style="width: 100%; height: 400px; object-fit: cover;">
                    
                    <!-- Actions buttons -->
                    @auth
                    <div class="position-absolute top-0 end-0 m-3">
                        <div class="btn-group">
                            <a href="{{ route('acteurs.edit-acteur', $acteur) }}" 
                               class="btn btn-light btn-sm rounded-pill me-2">
                                <i class="fas fa-edit me-2"></i>Modifier
                            </a>
                            <form action="{{ route('acteurs.destroy', $acteur) }}" 
                                  method="POST" 
                                  class="d-inline"
                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet acteur ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm rounded-pill">
                                    <i class="fas fa-trash-alt me-2"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="actor-info bg-gradient-dark rounded-3 shadow-sm p-4">
                    <h1 class="display-5 text-white mb-3">{{ $acteur->nom }} {{ $acteur->prenom }}</h1>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="info-item mb-3">
                                <h6 class="text-muted mb-2">
                                    <i class="far fa-calendar-alt me-2"></i>Date de naissance
                                </h6>
                                <p class="fs-5 text-white">{{ \Carbon\Carbon::parse($acteur->date_naissance)->format('d/m/Y') }}</p>
                            </div>
                            <div class="info-item mb-3">
                                <h6 class="text-muted mb-2">
                                    <i class="fas fa-flag me-2"></i>Nationalité
                                </h6>
                                <p class="fs-5 text-white">{{ $acteur->nationalite }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item mb-3">
                                <h6 class="text-muted mb-2">
                                    <i class="far fa-clock me-2"></i>Début de carrière
                                </h6>
                                <p class="fs-5 text-white">{{ \Carbon\Carbon::parse($acteur->date_debut_carriere)->format('Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Biographie -->
                    <div class="biography mb-4">
                        <h3 class="h4 text-white mb-3">
                            <i class="fas fa-book me-2"></i>Biographie
                        </h3>
                        <p class="lead text-light">{{ $acteur->biographie }}</p>
                    </div>

                    <!-- Récompenses -->
                    <div class="awards mb-4">
                        <h3 class="h4 text-white mb-3">
                            <i class="fas fa-trophy me-2"></i>Récompenses
                        </h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-success fs-6">{{  $acteur->recompenses }}</span>
                        </div>
                    </div>

                    <!-- Genres préférés -->
                    <div class="genres">
                        <h3 class="h4 text-white mb-3">
                            <i class="fas fa-film me-2"></i>Genres préférés
                        </h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary fs-6">{{  $acteur->genres_preferes }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filmographie -->
        @if($acteur->films && count($acteur->films) > 0)
        <div class="filmography bg-gradient-dark rounded-3 shadow-sm p-4">
            <h2 class="h3 text-white mb-4">
                <i class="fas fa-video me-2"></i>Filmographie
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach($acteur->films as $film)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm bg-dark text-white">
                        <img src="{{ asset($film->image_url) }}" 
                             class="card-img-top" 
                             alt="{{ $film->titre }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $film->titre }}</h5>
                            <p class="card-text text-muted">
                                {{ \Carbon\Carbon::parse($film->date_sortie)->format('Y') }}
                            </p>
                            <a href="{{ route('films.show-film', $film) }}" 
                               class="btn btn-outline-light btn-sm">
                                Voir le film
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<style>
.actor-profile {
    background: linear-gradient(135deg, #2c2c2c, #1c1c1c);
    color: #fff;
}

.actor-info, .filmography {
    background: rgba(0, 0, 0, 0.85);
}

.info-item h6 {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge {
    padding: 0.5rem 1rem;
}

.card {
    transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
    background-color: #333;
}
</style>
@endsection
