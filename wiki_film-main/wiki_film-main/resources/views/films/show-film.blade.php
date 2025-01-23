@extends('layouts.app')

@section('content')

<div class="iq-main-slider site-video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <video id="my-video" poster="{{ asset($film->image_url) }}"
                        class="video-js vjs-big-play-centered w-100" controls preload="auto" data-setup='{}'>
                        <source src="{{$film->bande_annonce_url}}" type="video/mp4" />
                        <source src="MY_VIDEO.html" type="video/webm" />
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<div class="details-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Movie Description Start-->
                <div class="trending-info mt-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-md-9 col-12 mb-auto">
                            <div class="d-block d-lg-flex align-items-center">
                                <h2 class="trending-text fw-bold texture-text text-uppercase my-0 fadeInLeft animated d-inline-block"
                                    data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                                    {{$film->titre}}
                                </h2>
                            </div>
                            <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                                <li class="trending-list"><a class="text-primary" href="view-all-movie.html">{{$film->genre}}</a></li>
                            </ul>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                <span class="badge bg-secondary">{{$film->classification}}</span>
                                <span class="ms-3 font-Weight-500 genres-info me-1">{{$film->duree}}</span>
                                <span class="trending-year trending-year-list font-Weight-500 genres-info">
                                    {{$film->date_sortie}}
                                </span>
                            </div>
                            <ul class="iq-blogtag list-unstyled d-flex flex-wrap align-items-center gap-3 p-0">
                                <li class="iq-tag-title text-primary mb-0">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    Tags:
                                </li>
                                <li><a class="title" href="view-all-movie.html">{{$film->genre}}</a><span class="text-secondary">,</span></li>
                            </ul>
                        </div>
                        <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                            <a data-fslightbox="html5-video" href="{{$film->bande_annonce_url}}"
                                class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                <img src="{{ asset($film->image_url) }}" class="attachment-medium-large size-medium-large wp-post-image"
                                    alt="" loading="lazy" />
                                <span class="content btn btn-transparant iq-button">
                                    <i class="fa fa-play me-2 text-white"></i>
                                    <span>Lien du trailer</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movie Description End --> <!-- Movie Source Start -->
                <div class="content-details trending-info">
                    <ul
                        class="iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center list-inline"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="pill"
                                href="#description-01" role="tab" aria-selected="true">
                                Description
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#source-01" role="tab"
                                aria-selected="false">
                                Sources
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description-01" class="tab-pane animated fadeInUp active show"
                            role="tabpanel">
                            <div class="description-content">
                                <p>
                                    {{$film->description}}
                                </p>
                            </div>
                        </div>
                        <div id="source-01" class="tab-pane animated fadeInUp" role="tabpanel">
                            <div class="source-list-content table-responsive">
                                <table class="table custom-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Lien
                                            </th>
                                            <th>
                                                Language
                                            </th>
                                            <th>
                                                Date Ajout
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Bande Annonce
                                            </td>
                                            <td>
                                                <div class="iq-button">
                                                    <a href="{{$film->bande_annonce_url}}"
                                                        class="btn text-uppercase position-relative">
                                                        <span class="button-text"> Jouer</span>
                                                        <i class="fa-solid fa-play"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                {{$film->date_sortie}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Affiche Originale
                                            </td>
                                            <td>
                                                <div class="iq-button">
                                                    <a href="{{$film->affiche_url}}"
                                                        class="btn text-uppercase position-relative">
                                                        <span class="button-text"> voir</span>
                                                        <i class="fa-solid fa-play"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                {{$film->date_sortie}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Movie Source End -->
            </div>
        </div>
    </div>
</div>

<div class="cast-tabs">
    <div class="container-fluid">
        <div class="content-details trending-info g-border iq-rtl-direction">
            <ul class="iq-custom-tab tab-bg-fill d-flex nav nav-pills mb-5 " role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="pill" href="#cast-1" role="tab" aria-selected="true">Acteurs</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="cast-1" class="tab-pane animated fadeInUp active show" role="tabpanel">
                    <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
                        data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
                        <ul class="list-inline swiper-wrapper">
                        @foreach ($film->acteurs as $acteur)
                            <li class="swiper-slide">
                                <div class="cast-images m-0 row align-items-center position-relative">
                                    <div class="col-4 img-box p-0">
                                        <img src="{{ asset($acteur->photo_url) }}" class="img-fluid" alt="image" loading="lazy">
                                    </div>
                                    <div class="col-8 block-description">
                                        <h6 class="iq-title">
                                            <a href="{{ route('acteurs.show-acteur', $acteur) }}" tabindex="0">{{$acteur->nom}}</a>
                                        </h6>
                                        <div class="video-time d-flex align-items-center my-2">
                                            <small class="text-white">{{$acteur->prenom}}</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
