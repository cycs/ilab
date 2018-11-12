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
                    <a class="nav__link" href="{{ route('home') }}">Vos envies</a>
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
        <div class="graine">
            <h2 class="title title--big">Les plantations</h2>
        </div>
        <ul class="graine__list">
            @foreach($seeds as $seed)
                <li class="graine__el">
                    <h2 class="title">{{$seed->name}}</h2>
                    <img class="graine__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="légume-edenia" />
                    <p class="text text--italic">{{ $seed->variety }}</p>
                    <p class="text">Difficulté</p>
                    <a class="btn__tuto btn__tuto--center" href="{{ route('info', ['id' => $seed->id]) }}">En savoir +</a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection