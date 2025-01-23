@extends('layouts.app')

@section('content')
<style>
    .iq-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/pages/01.html');
        background-size: cover;
        padding: 50px 0;
    }

    .iq-breadcrumb .title {
        font-size: 3rem;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .breadcrumb {
        background: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-item {
        color: white;
        font-size: 1.2rem;
    }

    .breadcrumb-item::before {
        content: '/';
        color: white;
        padding: 0 10px;
    }

    .card-style-grid {
        padding: 20px;
    }

    .iq-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .iq-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .block-images {
        position: relative;
        overflow: hidden;
    }

    .block-images .img-box {
        overflow: hidden;
        border-radius: 15px;
    }

    .block-images img {
        transition: transform 0.5s;
    }

    .block-images:hover img {
        transform: scale(1.1);
    }

    .card-description {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 15px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .block-images:hover .card-description {
        opacity: 1;
    }

    .iq-button a {
        background: white;
        color: black;
        padding: 10px;
        border-radius: 50%;
        transition: background 0.3s;
    }

    .iq-button a:hover {
        background: #ff5722;
        color: white;
    }

    .movie-time {
        color: #ff5722;
        font-weight: bold;
    }
</style>

<div class="iq-breadcrumb" style="background-image: url(../assets/images/pages/01.html);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center">
                    <h2 class="title">WikiFilm</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">Accueil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--bread-crumb-->

<section class="continue-watching-block section-padding-top">
    <div class="card-style-grid">
        <div class="row align-items-center mb-4">
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

        </div>
        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
            @forelse ($films as $film)
            <div class="col mb-4">
                <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                        <div class="img-box w-100">
                            <a href="{{ route('films.show-film', $film) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                            <img src="{{ asset($film->image_url) }}" alt="movie-card"
                                class="img-fluid object-cover w-100 d-block border-0">
                        </div>
                        <div class="card-description with-transition">
                            <div class="cart-content">
                                <div class="content-left">
                                    <h5 class="iq-title text-capitalize">
                                        <a href="">{{ $film->titre }}</a>
                                    </h5>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <span class="movie-time-text font-normal">{{$film->durre}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
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
                        <div class="block-social-info align-items-center">
                            <div class="iq-button">
                                <a href="{{ route('films.show-film', $film) }}"
                                    class="btn text-uppercase position-relative rounded-circle">
                                    <i class="fa-solid fa-play ms-0"></i>
                                </a>
                            </div>
                        </div>
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

    <section class="overflow-hidden">
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
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">Nos Acteurs</h5>
            <a href="{{ route('acteurs.index') }}" class="btn btn-primary btn-sm text-white text-decoration-none">Voir
                Tous</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($acteurs as $acteur)
            <div class="col">
                <div class="card shadow-sm border-0 h-100">
                    <div class="position-relative">
                        <img src="{{ $acteur->photo_url ?? asset('assets/images/default-actor.jpg') }}" alt="{{ $acteur->nom }}"
                            class="card-img-top rounded-top img-fluid object-cover" style="height: 250px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-2">
                            {{ $acteur->nationalite ?? 'Inconnu' }}
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title mb-2">
                            <a href="{{ route('acteurs.show-acteur', $acteur->id) }}"
                                class="text-dark text-decoration-none fw-bold">
                                {{ $acteur->prenom }} {{ $acteur->nom }}
                            </a>
                        </h6>
                        <small class="text-muted d-block mb-2">
                            Né le : {{ \Carbon\Carbon::parse($acteur->date_naissance)->format('d M Y') }}
                        </small>
                        <p class="card-text font-size-14 text-secondary mb-3">
                            {{ Str::limit($acteur->biographie, 60, '...') }}
                        </p>
                        <a href="{{ route('acteurs.show-acteur', $acteur->id) }}" class="btn btn-outline-primary btn-sm">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</section>
<footer class="footer footer-default">
    <div class="container-fluid">
        <div class="footer-content py-4">
            <div class="row">
                <!-- Logo et Contact -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="footer-logo mb-3">
                        <a class="navbar-brand" href="/">
                            <img class="img-fluid logo" src="assets/images/logo.png" alt="CinéStream">
                        </a>
                    </div>
                    <p class="mb-2">Email: contact@cinestream.fr</p>
                    <p class="mb-0">Téléphone: 01 23 45 67 89</p>
                </div>

                <!-- Liens Rapides -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-3">Liens Utiles</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/films">Films</a>
                        </li>
                        <li class="mb-2">
                            <a href="/acteurs">Acteurs</a>
                        </li>
                        <li class="mb-2">
                            <a href="/contact">Contact</a>
                        </li>
                        <li>
                            <a href="/a-propos">À propos</a>
                        </li>
                    </ul>
                </div>

                <!-- Réseaux Sociaux -->
                <div class="col-md-4">
                    <h4 class="mb-3">Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom border-top py-3">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2025 CinéStream. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
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