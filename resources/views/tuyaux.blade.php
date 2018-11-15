@extends('layouts.app')
@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

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
    <h2 class="title title--big">En pratique</h2>
    <div class="slider">
        <h3 class="title">Comment pincer les tomates</h3>
        <div id="slide1" class="slide">
            <div class="col">
                <p class="text"><span>1.</span> Environ 1 mois après la plantation, identifier et conserver la ramification principale du plant de tomates.</p>
            </div>
        </div>
    </div>
@endsection