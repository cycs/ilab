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
                    <a class="nav__link" href="{{ route('envie') }}">Vos envies</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('maladie') }}">Les maladies</a>
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
    <a class="btn__return" href="{{ route('home') }}">retour</a>
    <div class="container">
        <div class="maladie">
            <h2 class="title title--big title__plantation">Vos envies</h2>
            <h3 class="title title--light">suggérer un végétal parmi cette liste</h3>
        </div>
    </div>
    <div class="search__container search__container--lower"><!-- mettre le php -->
        <form>
            <input type="text" placeholder="search.." name="search" />
            <button class="btn search__btn" type="submit">search</button>
        </form>
    </div>
    <div class="plantation">
        <ul class="plantation__list">
            @foreach($seeds as $seed)
                <li class="plantation__el">
                    <div class="envies"><!-- mettre le nombre qui a déjà suggéré ce légume -->1</div>
                    <h2 class="title title--center">{{$seed->name}}</h2>
                    <img class="plantation__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="légume-edenia" />
                    <p class="text text--italic">{{$seed->name}}</p>
                    <p class="text">Difficulté</p>
                </li>
            @endforeach
        </ul>
    </div>
    <a class="btn__planter" href="#">Suggérer</a>
@endsection