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

@endsection