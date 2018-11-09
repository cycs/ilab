@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'tutoBody')

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
    <div class="container">
        <h2 class="title title--big title__plantation">Lancer une nouvelle culture</h2>
        <h3 class="title title--light">Choisissez un végétal parmi cette liste</h3>
    </div>
    <!-- champ de recherche -->
    <div class="plantation plantation--big">
        <ul class="plantation__list">
            @foreach($seeds as $seed)
                <li class="plantation__el">
                    <h2 class="title title--center">{{$seed->name}}</h2>
                    <img class="plantation__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="légume-edenia" />
                    <p class="text text--italic">{{ $seed->variety }}</p>
                    <p class="text">Difficulté</p>
                    <a class="btn__tuto" href="{{ route('info') }}?legume={{ $seed->name }}">En savoir +</a>
                </li>
            @endforeach
        </ul>
    </div>
    <a class="btn--light tuto__link" href="#">Découvrir et traiter les maladies</a>
@endsection
@section('scripts')
    <script src="{{ asset('js/tuto.js') }}"></script>
@endsection