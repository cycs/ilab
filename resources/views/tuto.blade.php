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
@endsection

@section('content')
    <div class="container">
        <div class="maladie">
            <h2 class="title title--big title__plantation">Les bonnes pratiques</h2>
            <h3 class="title title--light">Choisissez un végétal parmi cette liste</h3>
        </div>
    </div>
    <div class="search__container search__container--lower"><!-- mettre le php -->
        <form>
            <input type="text" placeholder="search.." name="search" />
            <button class="btn search__btn" type="submit">search</button>
        </form>
    </div>
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