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
    <a class="btn__return" href="{{ route('maladie') }}">retour</a>
    <div class="container">
        <div class="maladie">
            <h2 class="title title--big">{{$illness->name}}</h2>
        </div>
        <div class="slider">
            <button id="prev" class="slider__btn"><</button>
            <ul class="slider__list">
                <li class="slider__el active">
                    <h3 class="title bold">Description</h3>
                    <p class="text text--big text__slider">{{$illness->description}}</p>
                </li>
                <li class="slider__el">
                    <h3 class="title bold">Cause</h3>
                    <p class="text text--big text__slider">{{$illness->cause}}</p>
                </li>
                <li class="slider__el">
                    <h3 class="title bold">Conséquences</h3>
                    <p class="text text--big text__slider">{{$illness->consequence}}</p>
                </li>
                @foreach(explode('%', $illness->treatment) as $treatment)
                <li class="slider__el">
                    <h3 class="title bold">Traitement</h3>

                    <p class="text text--big text__slider">{{$treatment}}</p>

                </li>
                @endforeach
                @foreach(explode('%', $illness->prevention) as $prevention)
                <li class="slider__el">
                    <h3 class="title bold">Prévention</h3>
                    <p class="text text--big text__slider">{{$prevention}}</p>
                </li>
                @endforeach
            </ul>
            <button id="next" class="slider__btn slider__btn--right">></button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection