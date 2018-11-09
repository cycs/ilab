@extends('layouts.app')
@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection

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
                <a class="nav__link" href="{{ route('home') }}">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tâches</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('plantation') }}">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="{{ route('tuto') }}">Trucs et astuces</a>
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
    <div class="meteo__container"></div>
    <div class="potager">
        <div class="container">
            <ul class="potager__list">
                <!--php pour mettre les légumes qu'il faut + les liens vers les bons légumes OK bon next step, récupérer les parcelle 1 à 9 pour en afficher le contenu quand on clique sur le lien-->
                @for($i=0; $i<9; $i++)
                    <li class="potager__el"><a class="potager__link" href="">{{$seeds[$i]->name}}</a></li>
                @endfor
            </ul>
            <button id="potBtn" class="btn__planter">Planter</button> <!--grisé si pas d'espace dispo-->
        </div>
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
@endsection