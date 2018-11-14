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
    <a class="btn__return" href="{{ route('maladie') }}">retour</a>
    <div class="container">
        <div class="maladie">
            <h2 class="title title--big">{{$illness->name}}</h2>
        </div>
    </div>
    <p>{{$illness->description}}</p>
    <p>{{$illness->cause}}</p>
    <p>{{$illness->consequence}}</p>
    <p>{{$illness->treatment}}</p>
    <p>{{$illness->prevention}}</p>
@endsection