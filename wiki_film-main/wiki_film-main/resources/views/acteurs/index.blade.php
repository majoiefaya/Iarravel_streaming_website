@extends('layouts.app')

@section('content')
<div class="iq-breadcrumb" style="background-image: url(assets/images/pages/01.html);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center">
                    <h2 class="title">Liste des Acteurs</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Acteurs</a></li>
                        <li class="breadcrumb-item active">Liste des Acteurs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div> <!--bread-crumb-->

<main class="main-content">
        <div class="cast-tabs mt-5">
            <div class="container-fluid">
                <div class="content-details trending-info g-border iq-rtl-direction">
            <!-- En-tête avec recherche et bouton d'ajout -->
            <div class="row mb-4 align-items-center">
                <div class="col-md-8">
                    <form action="{{ route('acteurs.index') }}" method="GET" class="d-flex gap-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Rechercher un acteur..." 
                                value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('acteurs.create-acteur') }}" class="btn btn-primary text-uppercase">
                        <i class="fas fa-plus me-2"></i>Ajouter un acteur
                    </a>
                </div>
            </div>

            <!-- Grille des acteurs -->
            <div id="cast-1" class="tab-pane active show">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4" id="actorGrid">
                    @foreach ($acteurs as $acteur)
                    <div class="col actor-card">
                        <div class="card h-100 position-relative">
                            <div class="position-relative">
                                <img src="{{ asset($acteur->photo_url) }}" 
                                     class="card-img-top" 
                                     alt="{{ $acteur->nom }} {{ $acteur->prenom }}"
                                     style="height: 300px; object-fit: cover;">
                                
                                <!-- Options overlay -->
                                 @auth
                                <div class="card-actions position-absolute top-0 end-0 m-2">
                                    <div class="dropdown">
                                        <button class="btn btn-dark btn-sm rounded-circle" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('acteurs.edit-acteur', $acteur) }}">
                                                    <i class="fas fa-edit me-2"></i>Modifier
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('acteurs.destroy', $acteur) }}" method="POST" 
                                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet acteur ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fas fa-trash-alt me-2"></i>Supprimer
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endauth
                            </div>

                            <div class="card-body">
                                <h5 class="card-title mb-2">
                                    <a href="{{ route('acteurs.show-acteur', $acteur) }}" 
                                       class="text-decoration-none">
                                        {{ $acteur->nom }} {{ $acteur->prenom }}
                                    </a>
                                </h5>
                                <p class="card-text text-muted">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    {{ \Carbon\Carbon::parse($acteur->date_naissance)->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('acteurs.show-acteur', $acteur) }}" 
                                   class="btn btn-outline-primary btn-sm w-100">
                                    Voir le profil
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterActors() {
    const input = document.getElementById('search');
    const filter = input.value.toLowerCase();
    const grid = document.getElementById('actorGrid');
    const cards = grid.getElementsByClassName('actor-card');

    Array.from(cards).forEach(card => {
        const title = card.querySelector('.card-title').textContent;
        if (title.toLowerCase().includes(filter)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
@endsection

<style>
.card {
    transition: transform 0.2s ease-in-out;
    border: none;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
}

.card:hover {
    transform: translateY(-5px);
}

.card-actions .btn {
    opacity: 0.8;
}

.card-actions .btn:hover {
    opacity: 1;
}

.search-box .input-group {
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.search-box .form-control {
    border-right: none;
}

.search-box .input-group-text {
    background: white;
    border-left: none;
}
</style>