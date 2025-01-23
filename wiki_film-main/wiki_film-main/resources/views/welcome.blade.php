<!doctype html>
<html lang="en" data-bs-theme="dark">


<!-- Mirrored from templates.iqonic.design/streamit-dist/frontend/html/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jan 2025 20:34:22 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WIKIFILM</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
  <!-- font-awesome css -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
  <!-- Iconly css -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/iconly/css/style.css') }}" />
  <!-- Animate css -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.min.css') }}" />
  <!-- Streamit Design System Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/streamit.min848f.css?v=5.2.1') }}" />
  <!-- Custom Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.min848f.css?v=5.2.1') }}" />
  <!-- Rtl Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/rtl.min848f.css?v=5.2.1') }}" />
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&amp;display=swap"
    rel="stylesheet">

</head>

<body class=" custom-header-relative ">
  <span class="screen-darken"></span>
  <!-- loader Start -->
  <!-- loader Start -->
  <div class="loader simple-loader">
    <div class="loader-body">
      <img src="assets/images/logo.png" alt="loader" class="img-fluid " width="300">
    </div>
  </div>
  <!-- loader END --> <!-- loader END -->
  <main class="main-content">
    <!--Nav Start-->
    <!--Nav Start-->
    <header class="header-center-home header-default header-sticky">
      <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
        <div class="container-fluid navbar-inner">
          <div class="d-flex align-items-center justify-content-between w-100 landing-header">
            <div class="d-flex gap-3 gap-xl-0 align-items-center">
              <div>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main"
                  aria-controls="navbar_main"
                  class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn">
                  <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                  </svg>
                </button>
              </div>
              <!--Logo -->
              <div class="logo-default">
                <a class="navbar-brand text-primary" href="index.html">
                  <img src="assets/images/logo.png" alt="imdb logo" class="img-fluid logo  ">
                </a>
              </div>

            </div>
            <nav id="navbar_main"
              class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mega-menu-content py-xl-0">
              <div class="container-fluid p-lg-0">
                <div class="offcanvas-header px-0">
                  <div class="navbar-brand ms-3">
                    <!--Logo -->
                    <div class="logo-default">
                      <a class="navbar-brand text-primary" href="index.html">
                        <img src="assets/images/logo.png" alt="imdb logo" class="img-fluid logo  ">
                      </a>
                    </div>
                  </div>
                  <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" role="button" aria-expanded="false"
                      aria-controls="homePages">
                      <span class="item-name">Accueil</span>
                      <span class="menu-icon">
                        <span class="toggle-menu">
                          <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                          <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                        </span>
                      </span>
                    </a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('films.index') }}" role="button" aria-expanded="false"
                      aria-controls="homePages">
                      <span class="item-name">Films</span>

                    </a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('acteurs.index') }}" role="button" aria-expanded="false"
                      aria-controls="homePages">
                      <span class="item-name">Acteurs</span>

                    </a>

                  </li>


                </ul>
              </div>
              <!-- container-fluid.// -->
            </nav>
            <div class="right-panel">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-btn">
                  <span class="navbar-toggler-icon"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0">
                  <li class="nav-item dropdown iq-responsive-menu">
                    <div class="search-box">
                      <a href="#" class="nav-link p-0" id="search-drop" data-bs-toggle="dropdown">
                        <div class="btn-icon btn-sm rounded-pill btn-action">
                          <span class="btn-inner">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round">
                              </circle>
                              <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round">
                              </path>
                            </svg>
                          </span>
                        </div>
                      </a>
                      <ul class="dropdown-menu p-0 dropdown-search m-0 iq-search-bar" style="width: 20rem;">
                        <li class="p-0">
                          <div class="form-group input-group mb-0">
                            <input type="text" class="form-control border-0" placeholder="Search...">
                            <button type="submit" class="search-submit">
                              <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round">
                                </circle>
                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round">
                                </path>
                              </svg>
                            </button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('login') }}"
                      class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                      Connexion
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('register') }}"
                      class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                      Inscription
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!--Nav End-->
    <!--Nav End-->
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
    <!-- Wrapper End--> <!-- Library Bundle Script -->
    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    <!-- Lodash Utility -->
    <script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
    <!-- countdown Script -->
    <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fslightbox.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/swiperSlider/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/utility.js') }}"></script>
    <script src="{{ asset('assets/js/setting.js') }}"></script>
    <script src="{{ asset('assets/js/setting-init.js') }}" defer></script>
    <script src="{{ asset('assets/js/streamit.js') }}" defer></script>
    <script src="{{ asset('assets/js/swiper.js') }}" defer></script>
</body>


<!-- Mirrored from templates.iqonic.design/streamit-dist/frontend/html/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jan 2025 20:34:33 GMT -->

</html>