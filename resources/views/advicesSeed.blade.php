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
            <h2 class="title title--big">{{$name}}</h2>
        </div>
        <div class="slider">
            <button id="prev" class="slider__btn"><</button>
            <ul class="slider__list">
                @foreach(explode('%', $seed) as $info)
                    <li class="slider__el">
                        <h2 class="title title--small">Conseils</h2>
                        <p class="text text--big">{{$info}}</p>
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