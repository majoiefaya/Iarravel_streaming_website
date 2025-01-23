@extends('layouts.app')

@section('content')
<div class="iq-breadcrumb" style="background-image: url(assets/images/pages/01.html);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center">
                    <h2 class="title">Liste des Films</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Films</a></li>
                        <li class="breadcrumb-item active">Liste des Films</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div> <!--bread-crumb-->
<div class="section-padding">
    <div class="container-fluid">
        <!-- Barre de recherche et bouton d'ajout -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <form action="{{ route('films.index') }}" method="GET" class="d-flex gap-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Rechercher un film..." 
                               value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('films.create-film') }}" class="btn btn-primary text-uppercase">
                    <i class="fas fa-plus me-2"></i>Ajouter un film
                </a>
            </div>
        </div>

        <!-- Liste des films -->
        <div class="card-style-grid">
            <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                @forelse ($films as $film)
                <div class="col mb-4">
                    <div class="iq-card card-hover">
                        <div class="block-images position-relative w-100">
                            <div class="img-box w-100">
                                <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                <img src="{{ asset($film->image_url) }}" alt="movie-card"
                                    class="img-fluid object-cover w-100 d-block border-0">
                            </div>
                            <div class="card-description with-transition">
                                <div class="cart-content">
                                    <div class="content-left">
                                        <h5 class="iq-title text-capitalize">
                                            <a href="movie-detail.html">{{ $film->titre }}</a>
                                        </h5>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="movie-time-text font-normal">{{$film->durre}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <div class="block-social-info align-items-center">
                                <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                    <li class="share position-relative d-flex align-items-center text-center mb-0">
                                        <span class="w-100 h-100 d-inline-block bg-transparent">
                                            <a href="{{ route('films.edit-film', $film) }}" class="btn btn-link p-0 border-0">
                                                <i class="fas fa-edit"></i>
                                            </a>    
                                        </span>
                                    </li>
                                    <li class="share position-relative d-flex align-items-center text-center mb-0">
                                        <span class="w-100 h-100 d-inline-block bg-transparent">
                                            <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline" 
                                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce film ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 border-0 bg-transparent">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </span>
                                    </li>                                   
                                </ul>
                                <div class="iq-button">
                                    <a href="{{ route('films.show-film', $film) }}" class="btn text-uppercase position-relative rounded-circle">
                                        <i class="fa-solid fa-play ms-0"></i>
                                    </a>
                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>Aucun film trouvé</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection