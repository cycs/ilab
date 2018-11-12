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
            <a href="#" class="logo"><img src="{{ asset('svg/logo_aplat.svg') }}"></a>
            <button type="button" class="toggle-nav button__menu"><img src="{{ asset('svg/menu.svg') }}"></button>
        </div>
    </header>

    <main>
        <section class="landing">
            <h2>Les potagers</br>collectifs.</h2>
        </section>


        <section id="concept" class="concept">
            <div class="potager_ensemble col--small">
            <h3>Potagez ensemble !</h3>

            <p>Edenia développe une nouvelle approche de potagers collectifs via des bornes interactives. Nous nous associons à votre commune afin de vous proposer un potager collectif, local et participatif. </p>

            <p>Avant tout, une recherche de terrain est nécessaire pour trouver l’emplacement idéal. Elle se base sur des critères comme l’exposition au soleil et la qualité du sol.</p>

            <p>Ces potagers sont destinés à cultiver des légumes, des plantes, des fruits dans une optique de respect de l’environnement et de développement durable. Ceux-ci se basent sur un système exclusivement écologique: sans pesticide, ni engrais chimique, ni organisme génétiquement modifié.</p>
            </div>
            <div class="objectifs col--small">
                <h3>Les objectifs</h3>
                    <ul>
                        <li>Cultiver des produits sains et frais que vous consommerez.</li>
                        <li>Favoriser les échanges et le savoir.</li>
                        <li>Donner la possibilité aux personnes ne disposant pas de potager de passer du temps libre à jardiner.</li>
                        <li>Dynamiser la vie au sein de votre commune en renforcant les liens sociaux.</li>
                    </ul>
            </div>
        </section>

        <section class="philosophie clear col--small">
            <h3>7 points clés</h3>
            <p>En prenant part à ce projet, vous vous engagez à respecter le fonctionnement d’Edenia pour le bien du potager mais également pour celui des autres membres.</p>


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

        <section class="borne col--small">
            <h3>L'utilité de la borne</h3>
            <p>Les membres jardinent pour leur plaisir mais la borne les guide de façon optimale.</p>
            <p>Pour organiser l’espace et la production, le potager est divisé en parcelles de mêmes dimensions. La borne affiche une représentation du potager qui illustre son état et les tâches à réaliser. Par exemple, l’arrosage ou la période de récolte.</p>
            <p>En fonction des paramètres propres à l’emplacement et des plantations actuelles, elle propose une liste de graines adaptée et intéressante pour les prochaines cultures. </p>
            <p>Enfin, elle propose une série de tutoriels et de conseils spécifiques à chaque semence.</p>
            <p>Enfin, elle propose une série de «trucs et astuces» spécifiques à chaque semence.Toute cette organisation permet de maintenir l’équilibre et l’harmonie du potager.</p>
        </section>

        <section id="potager" class="carte clear">
            <h3>Où trouver un potager Edenia ?</h3>
            <div id="myMap" class="myMap"></div>
        </section>

        <section id="membre" class="membre col--small">
            <h3 class="title__section">Comment devenir membre Edenia&nbsp;?</h3>
            <p>Complétez ce formulaire pour devenir membre d’Edenia. Cette inscription vous donnera accès à votre carte de membre.</p>

            <form id="contact-form" class="form" action="#" method="POST" role="form">
                <div class="form-group">
                    <label class="form-label" for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Prénom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Prénom" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="adress">Adresse</label>
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresse" tabindex="3" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="4" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="tel">Téléphone</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Téléphone" tabindex="5" required>
                </div>


                <div class="button">
                    <button type="submit" class="btn btn-start-order">Ok</button>
                </div>
            </form>

        </section>

        <section id="dwl_app" class="dwl_app col--small">
            <h3>Télécharger l'application</h3>
            <p>Téléchargez l’application ! Elle permet de visualiser l’état de votre potager en temps réel et vous avez accès facilement à votre carte de membre. Vous pouvez également avoir accès au solde du pot commun ou consulter l’agenda des réunions.</p>
            <div class="button">
            <button class="btn_edenia">Edenia app</button>
            </div>
        </section>
    </main>

    <footer>
        <ul>
            <li><a href="#" target="_blank">À propos</a></li>
            <li>Made for <a href="http://dwm.re/" target="_blank">DWM</a></li>
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