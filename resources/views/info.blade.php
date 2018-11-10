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
        <ul class="nav__list">
            <li class="nav__el">
                <a class="nav__link" href="{{ route('home') }}">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('tuto') }}">Trucs et astuces</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">7 points clés</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Déconnexion</a>
            </li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="container container--center">
        <div class="info">
            <div class="col col--left">
                <img class="info__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="legume Edenia" />
                <h2 class="title title--cap">Maladies & parasites</h2>
                <h3 class="title title--small title--light">
                    @foreach($seed->illnesses as $illness)
                        {{$illness->name}}
                        <!-- Pas de virgule au dernier élément -->
                        @if($illness->id !== $seed->illnesses[count($seed->illnesses)-1]->id )
                        ,
                        @endif
                    @endforeach
                </h3>
                <a class="info__link btn__tuto" href="#">En pratique</a>
                <a class="info__link btn__tuto" href="#">Les bons tuyaux</a>
            </div>
            <div class="col col--right">
                <h2 class="title title--big">{{ $seed->name }}</h2>
                <p class="text text--italic">{{ $seed->latin_name }}</p>
                <p class="text">{{ $seed->variety }}</p>
                <ul class="info__list">
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/soleil.png') }}" alt="icon de soleil" />
                        <h3 class="title title--small">Ensoleillement</h3>
                        <h3 class="title title--small title--light">{{ $seed->exposure }}</h3>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/arrosoir.png') }}" alt="icon d'arrosoir" />
                        <h3 class="title title--small">Arrosage</h3>
                        <h3 class="title title--small title--light">{{ $seed->water }}</h3>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/engrais.png') }}" alt="icon de graines" />
                        <h3 class="title title--small">Engrais</h3>
                        <h3 class="title title--small title--light">{{ $seed->fertilizer }}</h3>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/feuille.png') }}" alt="icon de feuilles" />
                        <h3 class="title title--small">Plantation</h3>
                        <h3 class="title title--small title--light">{{ $start_plant }} - {{ $end_plant }} </h3>
                    </li>
                    <li class="info__el">
                        <img class="info__img--small" src="{{ asset('img/icon/panier.png') }}" alt="icon de panier" />
                        <h3 class="title title--small">Récolte</h3>
                        <h3 class="title title--small title--light">{{ $start_harvest }} - {{ $end_harvest }} </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection