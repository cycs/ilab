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
    <div class="container">
        <div class="maladie maladie--left">
            <h2 class="title title--big">Notre philosophie</h2>
        </div>
        <div class="slider">
            <button id="prev" class="slider__btn"><</button>
            <ul class="slider__list">
                <li class="slider__el active">
                    <p class="text">
                        <span class="bold">1. </span>En prenant part à ce projet, vous vous engagez à respecter le fonctionnement d'Edenia pour le bien du potager mais également pour celui des autres membres.
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">2. </span>Le potager est destiné à jardiner dans une optique écologique de respect de l’environnement et de développement durable. Aucun pesticide, engrais chimique ou OGM n’est autorisé. Il est néanmoins autorisé d’utiliser des techniques préventives respectant l’agriculture biologique.
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">3. </span>Le potager est une propriété privée. Les membres disposent donc d’une carte de membre donnant accès au potager via la borne interactive. L’entièreté du potager appartient à l’ensemble des collaborateurs même s’il est structuré en parcelles distinctes.
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">4. </span>Durant la première année, un formateur de la société accompagne les membres dans le développement du potager pour les mener petit à petit vers une indépendance. Il supervise également la gestion des finances.
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">5. </span>Une cotisation mensuelle de 15€ est demandée à chaque collaborateur afin de profiter du potager et de ses récoltes. Ce montant finance le matériel disponible au potager, les graines à semer et l’accompagnement apporté au cours de la première
                        année. Tous les cotisants ont leur mot à dire sur la gestion du pot commun.

                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">6. </span>Les récoltes se basent sur un système de confiance. Chacun cueille ce qui lui est nécessaire pour un partage équitable. L’éventuel surplus est vendu aux épiceries et fermes locales.
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">7. </span>L’entretien du potager se fait avec les outils mis à disposition dans un abri. Un espace de compostage est prévu dans l’intention de réutiliser les déchets verts. Pour l'arrosage, une citerne est alimentée avec un système de récupération d’eau de pluie. Cette eau est utilisée de façon parcimonieuse. De plus, les membres sont invités à utiliser des techniques permettant au sol de rester humide (recouvrement en mousse ou en paille).
                    </p>
                </li>
                <li class="slider__el">
                    <p class="text">
                        <span class="bold">8. </span>Tous les trois mois, une réunion est organisée dans le but de discuter de points essentiels tels que le développement du potager ou les projets à venir. Il est souhaitable de participer à la vie du potager au minimum une fois par mois.
                    </p>
                </li>
            </ul>
            <button id="next" class="slider__btn slider__btn--right">></button>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection