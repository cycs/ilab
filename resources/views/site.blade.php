@extends('layouts.app')

@section('styleSite')
    <link href="{{ asset('css/site.css') }}"  rel="stylesheet">
    @endsection
@section('content')
    <header class="site__header">
        <nav>
            <ul>
                <li><a class="js-scrollTo" href="#concept">Concept</a></li>
                <li><a class="js-scrollTo" href="#potager">Trouver un potager</a></li>
                <li><a class="js-scrollTo" href="#membre">Devenir membre</a></li>
                <li><a class="js-scrollTo" href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="button__header">
            <a href="#" class="logo"><img src="{{ asset('svg/logo.svg') }}"></a>
            <a href="#" class="toggle-nav button__menu"><img src="{{ asset('svg/menu.svg') }}"></a>
        </div>
    </header>

    <main>
        <section class="landing">
            <h2>Les potagers collectifs.</h2>
        </section>


        <section id="concept" class="concept">
            <h3 class="title__section">Notre concept</h3>

            <p>Edenia développe une nouvelle approche de potagers collectifs via des bornes interactives. Cette société s’associe à votre commune afin de proposer aux habitants un potager collectif, local et participatif. Avant tout, une recherche de terrain
                est nécessaire pour trouver l’emplacement idéal. Elle se base sur des critères comme l’exposition au soleil et la qualité du sol.</p>

            <p>Ces potagers sont destinés à cultiver des légumes, des plantes, des fruits dans une optique de respect de l’environnement et de développement durable. Ceux-ci se basent sur un système exclusivement écologique: sans pesticide, ni engrais chimique,
                ni organisme génétiquement modifié.</p>

            <h3>Nos objectifs</h3>
            <ul>
                <li>Cultiver et consommer des produits sains et frais.</li>
                <li>Favoriser les échanges et le savoir.</li>
                <li>Donner la possibilité aux personnes ne disposant pas de potager de passer du temps libre à jardiner.</li>
                <li>Dynamiser la vie au sein de la commune.</li>
            </ul>
        </section>

        <section class="philosophie">
            <h3 class="title__section">Notre philosolie en 7 points clés</h3>
            <p>Chacun s’engage à respecter les principes d’Edenia pour le bien du potager mais également pour celui des autres membres.</p>


            <div class="slider">
                <div class="slide">
                    <p>Le potager est destiné à jardiner dans une optique écologique de respect de l’environnement et de développement durable. Aucun pesticide, engrais chimique ou OGM n’est autorisé. Il est néanmoins autorisé d’utiliser des techniques préventives
                        respectant l’agriculture biologique.</p>
                </div>
                <div class="slide">
                    <p>Le potager est une propriété privée. Les membres disposent donc d’une carte de membre donnant accès au potager via la borne interactive. L’entièreté du potager appartient à l’ensemble des collaborateurs même s’il est structuré en parcelles
                        distinctes.
                    </p>
                </div>
                <div class="slide">
                    <p>Durant la première année, un formateur de la société accompagne les membres dans le développement du potager pour les mener petit à petit vers une indépendance. Il supervise également la gestion des finances.</p>
                </div>
                <div class="slide">
                    <p>Une cotisation mensuelle de 15€ est demandée à chaque collaborateur afin de profiter du potager et de ses récoltes. Ce montant finance le matériel disponible au potager, les graines à semer et l’accompagnement apporté au cours de la
                        première année. Tous les cotisants ont leur mot à dire sur la gestion du pot commun.
                    </p>
                </div>
                <div class="slide">
                    <p>Les récoltes se basent sur un système de confiance. Chacun cueille ce qui lui est nécessaire pour un partage équitable. L’éventuel surplus est vendu aux épiceries et fermes locales.</p>
                </div>
                <div class="slide">
                    <p>L’entretien du potager se fait avec les outils mis à disposition dans un abri. Un espace de compostage est prévu dans l’intention de réutiliser les déchets verts. Pour l'arrosage, une citerne est alimentée avec un système de récupération
                        d’eau de pluie. Cette eau est utilisée de façon parcimonieuse. De plus, les membres sont invités à utiliser des techniques permettant au sol de rester humide (recouvrement en mousse ou en paille).</p>
                </div>
                <div class="slide">
                    <p>Tous les trois mois, une réunion est organisée dans le but de discuter de points essentiels tels que le développement du potager ou les projets à venir. Il est souhaitable de participer à la vie du potager au minimum une fois par mois.</p>
                </div>

                <div class="controls">
                    <img src="{{ asset('svg/prev.svg') }}" class="prev">
                    <img src="{{ asset('svg/next.svg') }}" class="next">
                    <span class="projectNumbers">1 / 7</span>
                </div>
            </div>

        </section>

        <section class="borne">
            <p>Il est grandement conseillé d’utiliser la borne. Les membres jardinent pour leur plaisir mais la borne les guide de façon optimale.</p>
            <p>Pour organiser l’espace et la production, le potager est divisé en parcelles de mêmes dimensions. La borne affiche une représentation du potager qui illustre son état et les tâches à réaliser. Par exemple, l’arrosage ou la période de récolte.</p>
            <p>En fonction des paramètres propres à l’emplacement et des plantations actuelles, elle propose une liste de graines adaptée et intéressante pour les prochaines cultures.</p>
            <p>Enfin, elle propose une série de tutoriels et de conseils spécifiques à chaque semence.</p>
            <p>Toute cette organisation permet de maintenir l’équilibre et l’harmonie du potager.</p>
        </section>

        <section id="potager" class="carte">
            <div id="myMap" class="myMap"></div>
        </section>

        <section id="membre" class="membre">
            <h3 class="title__section">Devenir membre</h3>
            <p>Complétez ce formulaire pour devenir membre d’Edenia. Cette inscription vous donnera accès à votre carte de membre.</p>
        </section>

        <section id="contact" class="contact">
            <p>Contacter le formateur:</p>
            <p>0032 (0) 498 23 29 21</p>
        </section>
    </main>

    <footer>
        <h3>A propos du workshop</h3>
        <ul>
            <li><a href="#" target="_blank">Semaine 1</a></li>
            <li><a href="#" target="_blank">Semaine 2</a></li>
            <li><a href="#" target="_blank">Semaine 3</a></li>
            <li><a href="#" target="_blank">Semaine 4</a></li>
            <li><a href="#" target="_blank">Making off</a></li>
        </ul>
        <h3>Participants</h3>
        <ul class="profil">
            <li><a href="http://manonmirguet.be/" target="_blank"><img src="{{ asset('img/photo_profile_manon.jpg') }}"></a></li>
            <li><a href="http://louiselepoivre.be/" target="_blank"><img src="{{ asset('img/photo_profile_louise.jpg') }}"></a></li>
            <li><a href="http://emiliehabets.be/" target="_blank"><img src="{{ asset('img/photo_profile_emilie.jpg') }}"></a></li>
            <li><a href="http://billy.marcotty.eu/" target="_blank"><img src="{{ asset('img/photo_profile_billy.jpg') }}"></a></li>
            <li><a href="http://christophersaenen.be/" target="_blank"><img src="{{ asset('img/photo_profile_chris.jpg') }}"></li>
        </ul>
    </footer>


@endsection

@section('bingmap_script')
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM' async defer></script>
    <script type="text/javascript">
       /* var map;

        function GetMap() {
            console.log("get map");
            map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
                center: new Microsoft.Maps.Location(41.264675, -96.041927),
                mapTypeId: Microsoft.Maps.MapTypeId.aerial,
                zoom: 10
            });

            console.log(map);

        }*/
    </script>
    <script src="{{ asset('js/bingmap.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/site.js') }}"></script>
@endsection