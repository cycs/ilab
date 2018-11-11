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
                    <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('tuto') }}">Trucs et astuces</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="{{ route('chart') }}">7 points clés</a>
                </li>
                <li class="nav__el">
                    <a class="nav__link" href="#">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div> -->



@endsection
@section('content')
    <div class="meteo__container">
        <div class="meteo__container--weather">
            <img src="{{ asset('img/icon/meteo.png') }}" alt="icon weather">
            <span class="meteo--temp bold"></span>
        </div>
        <div class="meteo__container--time">
            <span class="meteo--time bold"></span>
            <span class="meteo--date"></span>
        </div>
        <div class="meteo__container--howdry">
            <span class="meteo--howdry">Pluviométrie moyenne sur 7 jours</span>
            <span class="meteo--alert"></span>
        </div>
    </div>
    <div class="potager">
            <ul class="potager__list">
                @for($i=0; $i<9; $i++)
                    <li class="potager__el">
                        <a class="potager__link" href="">
                            <img src="{{ asset('img'.$seeds[$i]->grown_img_url) }}" alt="legume image">
                        </a></li>
                @endfor
            </ul>
            <button id="potBtn" class="btn__planter">Planter</button> <!--grisé si pas d'espace dispo-->
    </div>
    <div class="parcelle hide">
        <button id="parcelleClose" class="parcelle__btn btn__close">X</button>
        <ul class="parcelle__list">
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 1</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 2</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 3</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 4</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 5</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 6</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 7</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 8</a></li>
            <li class="parcelle__el"><a class="parcelle__link" href="{{ route('plantation') }}">parcelle 9</a></li>
        </ul>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/homeBorne.js') }}"></script>
    <script src="{{ asset('js/meteo.js') }}"></script>
@endsection