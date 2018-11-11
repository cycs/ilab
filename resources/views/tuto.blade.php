@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'tutoBody')

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
    <div class="container">
        <h2 class="title title--big title__plantation">Les bonnes pratiques</h2>
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
                    <a class="btn__tuto" href="{{ route('info', ['id' => $seed->id]) }}">En savoir +</a>
                </li>
            @endforeach
        </ul>
    </div>
    <a class="btn--light tuto__link" href="{{ route('maladie') }}">Découvrir et traiter les maladies</a>
@endsection
@section('scripts')
    <script src="{{ asset('js/tuto.js') }}"></script>
@endsection