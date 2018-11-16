@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'homeBody')

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
                    <a class="nav__link" href="{{ route('maladie') }}">Les maladies</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('chart') }}">7 points clés</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('logout') }}">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <a class="btn__return" href="{{ route('home') }}">retour</a>
    <div class="container">
        <div class="maladie">
        <h2 class="title title--big title__plantation">Lancer une nouvelle culture</h2>
        <h3 class="title title--light">Choisissez un végétal parmi cette liste</h3>
        </div>
    </div>
    <div class="search__container search__container--lower"><!-- mettre le php -->
        <form method="get">
            <input class="search--input" type="text" placeholder="Recherche.." name="search"/>
            <button class="btn search__btn" type="submit">search</button>
        </form>
    </div>
    <div class="plantation">
        <ul class="plantation__list">
            @foreach($seeds as $seed)
                <li class="plantation__el" data-id="{{$seed->id}}">
                    <h2 class="title title--center">{{$seed->name}}</h2>
                    <img class="plantation__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="légume-edenia" />
                    <p class="text text--italic">{{$seed->variety}}</p>
                    <p class="text">Difficulté</p>
                </li>
            @endforeach
        </ul>
    </div>
    <form method="post" action="{{action('SeedsController@store')}}">
        @csrf
        <input type="text" value="1" class="hidden seedId" name="seedId">
        <button class="btn__planter">Planter</button>
    </form>
@endsection
@section('scripts')
    <script src="{{ asset('js/plantation.js') }}"></script>
@endsection