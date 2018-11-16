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
    <div class="container">
        <div class="maladie maladie--left">
            <div class="graine">
                <h2 class="title title--big">Les plantations</h2>
            </div>
        </div>
        <div class="search__container"><!-- mettre le php -->
            <form>
                <input type="text" placeholder="Recherche..." name="search" class="search--input"/>
                <button class="btn search__btn" type="submit">search</button>
            </form>
        </div>
        <div class="seeds">
            <ul class="graine__list">
            @foreach($seeds as $seed)
                    <li class="graine__el">
                        <h2 class="title">{{$seed->name}}</h2>
                        <img class="graine__img" src="{{ asset('img'.$seed->grown_img_url) }}" alt="légume-edenia" />
                        <p class="text text--italic">{{ $seed->variety }}</p>
                        <div class="difficult">
                            <p class="text difficult__txt">Difficulté</p>
                            <img class="difficult__img" src="{{ asset('img/icon/difficulte.png') }} " />
                            <img class="difficult__img" src="{{ asset('img/icon/difficulte.png') }} " />
                        </div>
                        <a class="btn__tuto btn__tuto--center" href="{{ route('info', ['id' => $seed->id]) }}">En savoir +</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('js/graines.js') }}"></script>
@endsection

@endsection