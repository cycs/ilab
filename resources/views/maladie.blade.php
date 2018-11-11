@extends('layouts.app')

@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

@section('homeBody', 'maladieBody')

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
        <div class="maladie">
            <a class="maladie__btn" href="{{ route('tuto') }}">retour</a>
            <h2 class="title title--big">Les maladies</h2>
            <h3 class="title title--small title--light">Apprends-en plus sur les différentes maladies</h3>
        </div>
            <ul class="maladie__list">
            <li class="maladie__el"><a href="#">Le mildiou</a></li>
            <li class="maladie__el"><a href="#">Les pucerons</a></li>
            <li class="maladie__el"><a href="#">Les limaces</a></li>
            <li class="maladie__el"><a href="#">Les chenilles</a></li>
            <li class="maladie__el"><a href="#">L'oïdium</a></li>
        </ul>
    </div>


@endsection