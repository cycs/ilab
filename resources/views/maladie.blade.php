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
    <div class="container">
        <div class="maladie">
            <a class="btn__return" href="{{ route('home') }}">retour</a>
            <h2 class="title title--big">Les maladies</h2>
            <h3 class="title title--small title--light">Apprends-en plus sur les différentes maladies</h3>
        </div>
            <ul class="maladie__list">
                @foreach($illnesses as $illness)
                    <li class="maladie__el"><a href="{{ route('maladieInfo', ['id' => $illness->id]) }}">{{ $illness->name }}</a></li>
                @endforeach
            </ul>
    </div>


@endsection