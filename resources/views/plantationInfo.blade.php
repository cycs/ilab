@extends('layouts.app')
@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'infoBody')

@section('header')
    <!-- HAMBURGER -->
    <div class="menu">
        <div class="hamb">
            <span id="bar1" ></span>
            <span id="bar2" ></span>
            <span id="bar3" ></span>
        </div>
        <div class="cross">
            <span id="bar4" ></span>
            <span id="bar5" ></span>
        </div>
    </div>
    <nav class="nav">
        <div class="container container--center">
            <ul class="nav__list">
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('home') }}">Potager</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('seeds') }}">Plantations</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('envie') }}">Vos envies</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('tuto') }}">Les bonnes pratiques</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('chart') }}">Notre philosophie</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('logout') }}">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
        <div class="alert alert-success" role="alert">
{{ session('status') }}
                </div>
@endif

            You are logged in!
        </div>
    </div>
</div>
</div>
</div> -->

@endsection
@section('content')
    <a class="btn__return" href="{{ route('home') }}">retour</a>
    <div class="container container--center">
        <div class="info">
            <div class="info--left">
                <img class="info__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="legume Edenia" />
                <div class="info__btn info__btn--center">
                    <a class="info__link btn__tuto" href="{{ route('tutoSeed', ['id' => $seed->id]) }}">En pratique</a>
                    <a class="info__link btn__tuto" href="{{ route('advicesSeed', ['id' => $seed->id]) }}">Les bons tuyaux</a>
                </div>
            </div>
            <div class="info--right info--small">
                <h2 class="title title--big">{{$seed->name}}</h2>
                <div class="info__name">
                    <p class="text text--italic">{{$seed->latin_name}}</p>
                    <p class="text">{{$seed->variety}}</p>
                </div>
                <ul class="info__list">
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/arrosoir.png') }}" alt="icon d'arrosoir" />
                        <h3 class="title title--small">Arrosage</h3>
                        <p class="title title--small title--light">{{$seed->water}}</p>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/feuille.png') }}" alt="icon edenia" />
                        <h3 class="title title--small">Plantation</h3>
                        <p class="title title--small title--light">{{$plantation}}</p>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/panier.png') }}" alt="icon de panier" />
                        <h3 class="title title--small">Récolte</h3>
                        <p class="title title--small title--light">Vers le {{$harvest}}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection