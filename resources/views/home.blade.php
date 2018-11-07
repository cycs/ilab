@extends('layouts.app')
@section('styleApp')
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
@endsection
@section('header')
    <!-- HAMBURGER -->
    <div class="hamb">
        <div id="bar1" class="hamb__bar--big"></div>
        <div id="bar2" class="hamb__bar--small"></div>
        <div id="bar3" class="hamb__bar"></div>
    </div>
    <nav class="nav hide">
        <ul class="nav__list">
            <li class="nav__el">
                <a class="nav__link" href="#">Potager</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tâches</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Nouvelle culture</a>
            </li>
            <li class="nav__el">
                <a class="nav__link" href="#">Tutos et conseils</a>
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
