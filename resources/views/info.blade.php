@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'infoBody')

@section('header')
    <!-- HAMBURGER -->
    <div class="hamb">
        <div id="bar1" class="hamb__bar--big"></div>
        <div id="bar2" class="hamb__bar--small"></div>
        <div id="bar3" class="hamb__bar"></div>
    </div>
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__el">
                <a class="nav__link" href="{{ route('home') }}">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tâches</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('tuto') }}">Trucs et astuces</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Vos envies</a>
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
                <img class="info__img" src="{{ asset('img/legumes/persil.png') }}" alt="legume Edenia" />
                <h2 class="title title--cap">Maladies & parasites</h2>
                <h3 class="title title--small title--light">Limaces, Mildiou, Oïdium, Pucerons.</h3>
            </div>
            <div class="col col--right">
                <h2 class="title title--big">Persil</h2>
                <p class="text text--italic">Petroselinum crispum</p>
                <p class="text">Persil commun</p>
                <ul class="info__list">
                    <li class="info__el">
                        <h3 class="title title--small">Ensoleillement</h3>
                        <h3 class="title title--small title--light">Ensoleillé ombré</h3>
                    </li>
                    <li class="info__el">
                        <h3 class="title title--small">Arrosage</h3>
                        <h3 class="title title--small title--light">Abondant</h3>
                    </li>
                    <li class="info__el">
                        <h3 class="title title--small">Engrais</h3>
                        <h3 class="title title--small title--light">Aucun</h3>
                    </li>
                    <li class="info__el">
                        <h3 class="title title--small">Plantation</h3>
                        <h3 class="title title--small title--light">Mai - septembre </h3>
                    </li>
                    <li class="info__el">
                        <h3 class="title title--small">Récolte</h3>
                        <h3 class="title title--small title--light">Juin - octobre</h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection