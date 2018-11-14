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
        <svg xmlns="http://www.w3.org/2000/svg" width="1092.99" height="634.57" viewBox="0 0 1092.99 634.57">
            <g id="parcelle">
                <g>
                    <g>
                        <path id="arrondi1" class="cls-1" d="M1073.75,594.13,1230,534.61S1174.7,532.24,1073.75,594.13Z" transform="translate(-137.51 -263.67)"/>
                        <path id="arrondi2" class="cls-1" d="M809.93,717.27,972.8,656S910.88,655.38,809.93,717.27Z" transform="translate(-137.51 -263.67)"/>
                        <g id="terre1">
                            <path class="cls-2" d="M679.49,419.32c9-5.67,93.32-57.46,157.49-60.23l390.91,175.13c-65.83,3.79-149.2,56.18-154.18,59.34Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-2" d="M836.88,359.6l389,174.25c-34.54,2.49-73.25,17.92-100.09,30.7a529.54,529.54,0,0,0-52.1,28.45L680.55,419.25a560.85,560.85,0,0,1,52-28.27c28.23-13.47,69.22-29.84,104.38-31.38m.2-1c-68.5,2.88-158.65,60.81-158.65,60.81l395.32,174.73s87.76-56.64,156.25-59.52l-392.92-176Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <polygon id="ombre-panneau1" class="cls-3" points="680.12 138.83 711.15 101.92 699.57 96.73 675.82 97.97 680.12 138.83"/>
                        <path id="ombre-panneau2" class="cls-3" d="M954.92,411.38,948.7,422a6.1,6.1,0,0,0,3.43,8.9L964,434.63l-13.8,28.92,6.64-3,21.42-19.8,33.11,4a6.09,6.09,0,0,0,5.91-2.83l1.32-2.11Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau3" class="cls-3" d="M1077.62,561.38l21.06-19.45,32.57,4a6,6,0,0,0,5.81-2.78l12.26-19.65a6,6,0,0,0-4.15-9.09L1085,504.84a6,6,0,0,0-6.12,2.89l-9.21,15.75a6,6,0,0,0,3.37,8.74l11.62,3.66L1071.1,564.3Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord1" class="cls-1" points="540.92 155.74 936.24 330.46 1092.49 270.94 1092.49 312.58 933.14 384.5 540.45 201.01 540.92 155.74"/>
                        <g id="terre2">
                            <path class="cls-2" d="M415.35,540.86c9.52-5.58,97.85-56.3,162-59.06L970.67,655.63c-66,3.84-155.61,57.93-160.77,61.08Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-2" d="M577.29,482.3l391.32,173c-34.66,2.54-75.07,18.41-103.35,31.56a603.18,603.18,0,0,0-55.4,29.33L416.45,540.8c5.94-3.46,27.14-15.52,54.15-27.7,29.27-13.21,71.51-29.25,106.69-30.8m.19-1c-68.49,2.89-163.22,59.63-163.22,59.63L809.93,717.27S904.31,658.9,972.8,656L577.48,481.29Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <path id="ombre-panneau6" class="cls-3" d="M828.07,669l21.42-19.79,33.11,4a6.11,6.11,0,0,0,5.91-2.83l12.47-20a6.1,6.1,0,0,0-4.22-9.25l-61.19-9.71a6.11,6.11,0,0,0-6.22,2.95l-9.37,16a6.09,6.09,0,0,0,3.43,8.89l11.82,3.73L821.43,672Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau4" class="cls-3" d="M573.67,481.51l-18.22,2.41-3.9-1.65-6.82,11.67a6.1,6.1,0,0,0,3.44,8.89L560,506.56l-13.79,28.92,6.63-3,21.42-19.79,33.11,4a6.1,6.1,0,0,0,5.92-2.82l8-12.91Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau5" class="cls-3" d="M671.84,610.93l21.41-19.8,33.12,4a6.09,6.09,0,0,0,5.91-2.83l12.46-20a6.09,6.09,0,0,0-4.22-9.25l-61.18-9.7a6.07,6.07,0,0,0-6.22,2.94l-9.37,16a6.1,6.1,0,0,0,3.43,8.9L679,585,665.2,613.9Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord2" class="cls-1" points="276.76 277.25 672.42 453.61 835.29 392.36 835.07 442.22 673.38 509.28 276.97 325.79 276.76 277.25"/>
                        <g id="terre3">
                            <path class="cls-2" d="M139.5,667.15c9-5.66,93.31-57.47,157.5-60.23L688.82,778.77c-65.92,3.9-152.38,60.52-157.5,63.91Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-2" d="M296.9,607.42l389.85,171c-34.61,2.6-74.15,19.21-101.72,33a555.5,555.5,0,0,0-53.76,30.72l-390.71-175a558.24,558.24,0,0,1,51.95-28.28c28.23-13.47,69.23-29.83,104.39-31.38m.19-1c-68.49,2.88-158.65,60.81-158.65,60.81l392.93,176s91.09-61.2,159.59-64.08L297.09,606.42Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <path id="ombre-panneau7" class="cls-3" d="M318,630.8l-35.14-2.25-4.54,2.86-4.11-.95-19.84,1.9-.09-.2-6.38,10.93a5.71,5.71,0,0,0,3.21,8.33l11.07,3.49L249.22,682l6.21-2.79,20.06-18.53,29.21.17a5.69,5.69,0,0,0,5.54-2.65l11.67-18.73A5.7,5.7,0,0,0,318,630.8Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau8" class="cls-3" d="M450,674l-18.95-9.25h0l-6.81,11.66a6.1,6.1,0,0,0,3.43,8.9L439.5,689l-13,28.92,5.19-1.94,22.09-20.83,33.11,4a6.09,6.09,0,0,0,5.92-2.83l2-3.21Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau9" class="cls-3" d="M528.72,816.44l22.84-28.05,41.36-.84a7.57,7.57,0,0,0,6.77-4.51l11.8-26.74a7.57,7.57,0,0,0-6.8-10.62l-76.83-1.2a7.57,7.57,0,0,0-7.12,4.7L512,770.5a7.56,7.56,0,0,0,5.77,10.32L533,783.33l-11.88,37.92Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord3" class="cls-1" points="0.94 403.56 393.86 579.58 553.45 515.5 553.01 565.14 393.19 634.07 0.5 450.58 0.94 403.56"/>
                        <path id="arrondi3" class="cls-1" d="M531.37,843.25,691,779.17S636.69,773.09,531.37,843.25Z" transform="translate(-137.51 -263.67)"/>
                        <path id="separation6" class="cls-4" d="M943.8,534.72c18.05-11.6,78.5-55.46,150.27-60.26" transform="translate(-137.51 -263.67)"/>
                        <path id="separation5" class="cls-4" d="M797.71,471.19S885.84,414,954.34,411.12" transform="translate(-137.51 -263.67)"/>
                        <path id="separation4" class="cls-4" d="M680.6,659.23s90.16-57.93,158.65-60.81" transform="translate(-137.51 -263.67)"/>
                        <path id="separation3" class="cls-4" d="M541.38,594.33s84.75-55.86,153.24-58.74" transform="translate(-137.51 -263.67)"/>
                        <path id="separation2" class="cls-4" d="M400.21,784.49c11.83-9.71,84.52-61.15,155.24-64.13" transform="translate(-137.51 -263.67)"/>
                        <path id="separation1" class="cls-4" d="M267.12,724.25s87.87-59.52,156.36-62.4" transform="translate(-137.51 -263.67)"/>
                    </g>
                    <g>
                        <path id="arrondi1-2" data-name="arrondi1" class="cls-4" d="M1073.75,594.13,1230,534.61S1174.7,532.24,1073.75,594.13Z" transform="translate(-137.51 -263.67)"/>
                        <path id="arrondi2-2" data-name="arrondi2" class="cls-4" d="M809.93,717.27,972.8,656S910.88,655.38,809.93,717.27Z" transform="translate(-137.51 -263.67)"/>
                        <g id="terre1-2" data-name="terre1">
                            <path class="cls-4" d="M679.49,419.32c9-5.67,93.32-57.46,157.49-60.23l390.91,175.13c-65.83,3.79-149.2,56.18-154.18,59.34Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-4" d="M836.88,359.6l389,174.25c-34.54,2.49-73.25,17.92-100.09,30.7a529.54,529.54,0,0,0-52.1,28.45L680.55,419.25a560.85,560.85,0,0,1,52-28.27c28.23-13.47,69.22-29.84,104.38-31.38m.2-1c-68.5,2.88-158.65,60.81-158.65,60.81l395.32,174.73s87.76-56.64,156.25-59.52l-392.92-176Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <polygon id="ombre-panneau1-2" data-name="ombre-panneau1" class="cls-4" points="680.12 138.83 711.15 101.92 699.57 96.73 675.82 97.97 680.12 138.83"/>
                        <path id="ombre-panneau2-2" data-name="ombre-panneau2" class="cls-4" d="M954.92,411.38,948.7,422a6.1,6.1,0,0,0,3.43,8.9L964,434.63l-13.8,28.92,6.64-3,21.42-19.8,33.11,4a6.09,6.09,0,0,0,5.91-2.83l1.32-2.11Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau3-2" data-name="ombre-panneau3" class="cls-4" d="M1077.62,561.38l21.06-19.45,32.57,4a6,6,0,0,0,5.81-2.78l12.26-19.65a6,6,0,0,0-4.15-9.09L1085,504.84a6,6,0,0,0-6.12,2.89l-9.21,15.75a6,6,0,0,0,3.37,8.74l11.62,3.66L1071.1,564.3Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord1-2" data-name="bord1" class="cls-4" points="540.92 155.74 936.24 330.46 1092.49 270.94 1092.49 312.58 933.14 384.5 540.45 201.01 540.92 155.74"/>
                        <g id="terre2-2" data-name="terre2">
                            <path class="cls-4" d="M415.35,540.86c9.52-5.58,97.85-56.3,162-59.06L970.67,655.63c-66,3.84-155.61,57.93-160.77,61.08Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-4" d="M577.29,482.3l391.32,173c-34.66,2.54-75.07,18.41-103.35,31.56a603.18,603.18,0,0,0-55.4,29.33L416.45,540.8c5.94-3.46,27.14-15.52,54.15-27.7,29.27-13.21,71.51-29.25,106.69-30.8m.19-1c-68.49,2.89-163.22,59.63-163.22,59.63L809.93,717.27S904.31,658.9,972.8,656L577.48,481.29Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <path id="ombre-panneau6-2" data-name="ombre-panneau6" class="cls-4" d="M828.07,669l21.42-19.79,33.11,4a6.11,6.11,0,0,0,5.91-2.83l12.47-20a6.1,6.1,0,0,0-4.22-9.25l-61.19-9.71a6.11,6.11,0,0,0-6.22,2.95l-9.37,16a6.09,6.09,0,0,0,3.43,8.89l11.82,3.73L821.43,672Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau4-2" data-name="ombre-panneau4" class="cls-4" d="M573.67,481.51l-18.22,2.41-3.9-1.65-6.82,11.67a6.1,6.1,0,0,0,3.44,8.89L560,506.56l-13.79,28.92,6.63-3,21.42-19.79,33.11,4a6.1,6.1,0,0,0,5.92-2.82l8-12.91Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau5-2" data-name="ombre-panneau5" class="cls-4" d="M671.84,610.93l21.41-19.8,33.12,4a6.09,6.09,0,0,0,5.91-2.83l12.46-20a6.09,6.09,0,0,0-4.22-9.25l-61.18-9.7a6.07,6.07,0,0,0-6.22,2.94l-9.37,16a6.1,6.1,0,0,0,3.43,8.9L679,585,665.2,613.9Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord2-2" data-name="bord2" class="cls-4" points="276.76 277.25 672.42 453.61 835.29 392.36 835.07 442.22 673.38 509.28 276.97 325.79 276.76 277.25"/>
                        <g id="terre3-2" data-name="terre3">
                            <path class="cls-4" d="M139.5,667.15c9-5.66,93.31-57.47,157.5-60.23L688.82,778.77c-65.92,3.9-152.38,60.52-157.5,63.91Z" transform="translate(-137.51 -263.67)"/>
                            <path class="cls-4" d="M296.9,607.42l389.85,171c-34.61,2.6-74.15,19.21-101.72,33a555.5,555.5,0,0,0-53.76,30.72l-390.71-175a558.24,558.24,0,0,1,51.95-28.28c28.23-13.47,69.23-29.83,104.39-31.38m.19-1c-68.49,2.88-158.65,60.81-158.65,60.81l392.93,176s91.09-61.2,159.59-64.08L297.09,606.42Z" transform="translate(-137.51 -263.67)"/>
                        </g>
                        <path id="ombre-panneau7-2" data-name="ombre-panneau7" class="cls-4" d="M318,630.8l-35.14-2.25-4.54,2.86-4.11-.95-19.84,1.9-.09-.2-6.38,10.93a5.71,5.71,0,0,0,3.21,8.33l11.07,3.49L249.22,682l6.21-2.79,20.06-18.53,29.21.17a5.69,5.69,0,0,0,5.54-2.65l11.67-18.73A5.7,5.7,0,0,0,318,630.8Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau8-2" data-name="ombre-panneau8" class="cls-4" d="M450,674l-18.95-9.25h0l-6.81,11.66a6.1,6.1,0,0,0,3.43,8.9L439.5,689l-13,28.92,5.19-1.94,22.09-20.83,33.11,4a6.09,6.09,0,0,0,5.92-2.83l2-3.21Z" transform="translate(-137.51 -263.67)"/>
                        <path id="ombre-panneau9-2" data-name="ombre-panneau9" class="cls-4" d="M528.72,816.44l22.84-28.05,41.36-.84a7.57,7.57,0,0,0,6.77-4.51l11.8-26.74a7.57,7.57,0,0,0-6.8-10.62l-76.83-1.2a7.57,7.57,0,0,0-7.12,4.7L512,770.5a7.56,7.56,0,0,0,5.77,10.32L533,783.33l-11.88,37.92Z" transform="translate(-137.51 -263.67)"/>
                        <polygon id="bord3-2" data-name="bord3" class="cls-4" points="0.94 403.56 393.86 579.58 553.45 515.5 553.01 565.14 393.19 634.07 0.5 450.58 0.94 403.56"/>
                        <path id="arrondi3-2" data-name="arrondi3" class="cls-4" d="M531.37,843.25,691,779.17S636.69,773.09,531.37,843.25Z" transform="translate(-137.51 -263.67)"/>
                        <path id="separation6-2" data-name="separation6" class="cls-4" d="M943.8,534.72c18.05-11.6,78.5-55.46,150.27-60.26" transform="translate(-137.51 -263.67)"/>
                        <path id="separation5-2" data-name="separation5" class="cls-4" d="M797.71,471.19S885.84,414,954.34,411.12" transform="translate(-137.51 -263.67)"/>
                        <path id="separation4-2" data-name="separation4" class="cls-4" d="M680.6,659.23s90.16-57.93,158.65-60.81" transform="translate(-137.51 -263.67)"/>
                        <path id="separation3-2" data-name="separation3" class="cls-4" d="M541.38,594.33s84.75-55.86,153.24-58.74" transform="translate(-137.51 -263.67)"/>
                        <path id="separation2-2" data-name="separation2" class="cls-4" d="M400.21,784.49c11.83-9.71,84.52-61.15,155.24-64.13" transform="translate(-137.51 -263.67)"/>
                        <path id="separation1-2" data-name="separation1" class="cls-4" d="M267.12,724.25s87.87-59.52,156.36-62.4" transform="translate(-137.51 -263.67)"/>
                    </g>
                </g>
            </g>
            <g id="panneaux">
                <path id="parcelle1" class="cls-5" d="M874.43,272.2a8.62,8.62,0,0,0-8.71-8.53l-101.7,1a8.62,8.62,0,0,0-8.54,8.71l.55,56a8.61,8.61,0,0,0,8.7,8.53l40.56-.39,9.85,64a34.58,34.58,0,0,1,3.62-.64c.32,0,.63-.05,1-.08l5.3-63.5,41.43-.4A8.62,8.62,0,0,0,875,328.2Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle3" class="cls-5" d="M1124.72,449a7.92,7.92,0,0,0-8-7.83l-93.39.91a7.92,7.92,0,0,0-7.84,8l.51,51.38a7.91,7.91,0,0,0,8,7.83l37.24-.36,8.52,55.34c1.65-.65,3.35-1.29,5.11-1.9l4.48-53.62,38-.37a7.92,7.92,0,0,0,7.84-8Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle2" class="cls-5" d="M1025.89,358.43l-90-22.42a7.87,7.87,0,0,0-9.53,5.74L914,391.32a7.86,7.86,0,0,0,5.73,9.53l35.91,8.94-5.47,53.76a46,46,0,0,1,5.74-2.65c.3-.12.6-.22.9-.32l16.28-46.44,36.67,9.13a7.87,7.87,0,0,0,9.54-5.73L1031.62,368A7.87,7.87,0,0,0,1025.89,358.43Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle6" class="cls-5" d="M897.17,566.87l-90-22.42a7.87,7.87,0,0,0-9.53,5.73l-12.34,49.57a7.87,7.87,0,0,0,5.73,9.54l35.9,8.94L821.43,672a47.5,47.5,0,0,1,5.74-2.66l.9-.32,16.28-46.44L881,631.71a7.87,7.87,0,0,0,9.54-5.74L902.9,576.4A7.87,7.87,0,0,0,897.17,566.87Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle4" class="cls-5" d="M600.16,407.72a8.91,8.91,0,0,0-9.63-8.12l-104.71,8.89a8.92,8.92,0,0,0-8.12,9.63l4.9,57.65a8.91,8.91,0,0,0,9.63,8.12l42.65-3.62,9.86,54.85.46.25a15.47,15.47,0,0,1,6.83-2.61l3.15-54.22L596.93,475a8.9,8.9,0,0,0,8.13-9.63Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle5" class="cls-5" d="M719.72,496.56a8.05,8.05,0,0,0-8.12-8l-95,.93a8.05,8.05,0,0,0-8,8.13l.51,52.29a8,8,0,0,0,8.13,8l37.87-.37,8.66,56.32q2.52-1,5.19-1.94l4.56-54.56,38.68-.38a8.05,8.05,0,0,0,8-8.13Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle7" class="cls-5" d="M304.09,583.81a8.34,8.34,0,0,0-9-7.65l-96.3,11.44a8.33,8.33,0,0,0-7.65,9l4.31,54a8.34,8.34,0,0,0,9,7.65l37.78-4.49,5.74,32.9a72.3,72.3,0,0,1,7.95-5.21l1.87-29.53,43-5.11a8.33,8.33,0,0,0,7.65-9Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle8" class="cls-5" d="M482.37,600.61a8.05,8.05,0,0,0-8.13-8l-95,.93a8.07,8.07,0,0,0-8,8.13l.52,52.29a8,8,0,0,0,8.13,8l37.87-.37,8.66,56.32c1.68-.66,3.4-1.31,5.19-1.94l4.56-54.56,38.68-.38a8,8,0,0,0,8-8.13Z" transform="translate(-137.51 -263.67)"/>
                <path id="parcelle9" class="cls-5" d="M580.7,706.58l-92.3-9.49a7.86,7.86,0,0,0-8.63,7l-5.23,50.82a7.86,7.86,0,0,0,7,8.62l36.81,3.79,2.18,54a46.9,46.9,0,0,1,5.3-3.43c.28-.16.57-.3.85-.45l9.57-48.27,37.59,3.87a7.87,7.87,0,0,0,8.63-7l5.23-50.82A7.87,7.87,0,0,0,580.7,706.58Z" transform="translate(-137.51 -263.67)"/>
            </g>
        </svg>

        <ul class="potager__list">
               {{-- @for($i=0; $i<9; $i++)
                    <li class="potager__el">
                        <a class="potager__link" href="">
                            <img src="{{ asset('img'.$seeds[$i]->grown_img_url) }}" alt="legume image">
                        </a>
                    </li>
                @endfor--}}
                    @foreach($parcels as $parcel)
                        {{--{{$parcel->name}}--}}
                        @foreach($parcel->parcels as $seed)
                            {{--<li>{{$seed->name}}</li>--}}
                            <li class="potager__el">
                                <a class="potager__link" href="{{ route('plantationInfo', ['id' => $seed->id, 'parcel' => $seed->pivot->parcel_id]) }}">
                                    <img class="potager__img potager__img--{{$seed->name}} " src="{{ asset('img'.$seed->grown_img_url) }}" alt="legume image">
                                </a>
                            </li>
                        @endforeach

                    @endforeach
            <li class="potager__el">
                <a class="potager__link" href="{{ route('plantation') }}">
                    <img class="potager__img" src="{{ asset('img/icon/cross.png') }}" alt="parcelle vide" />
                </a>
            </li>
            </ul>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/homeBorne.js') }}"></script>
    <script src="{{ asset('js/meteo.js') }}"></script>
@endsection