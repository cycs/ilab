@extends('layouts.app')

@section('homeBody', 'homeBody')

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
                <a class="nav__link" href="#">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tâches</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tutos et conseils</a>
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
        <h2 class="title title--big">Lancer une nouvelle culture</h2>
        <h3 class="title">Choisissez un végétal parmi cette liste</h3>
    </div>
    <!-- champ de recherche -->
    <div class="plantation">
        <ul class="plantation__list">
            <li class="plantation__el">
                <h2 class="title">Persil</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/persil.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
            <li class="plantation__el">
                <h2 class="title">Choux-fleur</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/choufleur.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
            <li class="plantation__el">
                <h2 class="title">Potimarron</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/potimaron.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
            <li class="plantation__el">
                <h2 class="title">Tomate</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/tomate.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
            <li class="plantation__el">
                <h2 class="title">Epinard</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/epinard.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
            <li class="plantation__el">
                <h2 class="title">Fraise</h2>
                <img class="plantation__img" src="{{ asset('img/legumes/fraise.png') }}" alt="légume-edenia" />
                <p class="text--italic">Persil commun</p>
                <p class="text">Difficulté</p>
            </li>
        </ul>
    </div>
    <div class="container">
        <a class="btn--light plantation__link" href="#">Suggérer un nouveau végétal</a>
        <a class="btn__planter" href="#">Planter</a>
    </div>
@endsection