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
                <li><a class="js-scrollTo" href="#dwl_app">Télécharger l'application</a></li>
            </ul>
        </nav>
        <div class="button__header">
            <a href="#" class="logo"><img src="{{ asset('svg/logo_aplat.svg') }}"></a>
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
        </div>
    </header>

    <main>
        <section class="landing">
            <h2 class="title__big">Les potagers</br>collectifs.</h2>
        </section>


        <section id="concept" class="concept">
            <div class="col--small">
            <h3 class="title__small">Potagez ensemble !</h3>

            <p>Edenia développe une nouvelle approche de potagers collectifs via des bornes interactives. Nous nous associons à votre commune afin de vous proposer un potager collectif, local et participatif. </p>

            <p>Avant tout, une recherche de terrain est nécessaire pour trouver l’emplacement idéal. Elle se base sur des critères comme l’exposition au soleil et la qualité du sol.</p>

            <p>Ces potagers sont destinés à cultiver des légumes, des plantes, des fruits dans une optique de respect de l’environnement et de développement durable. Ceux-ci se basent sur un système exclusivement écologique: sans pesticide, ni engrais chimique, ni organisme génétiquement modifié.</p>
            </div>
            <div class="concept--el col--small">
                <h3 class="title__small">Les objectifs</h3>
                    <ul>
                        <li>Cultiver des produits sains et frais que vous consommerez.</li>
                        <li>Favoriser les échanges et le savoir.</li>
                        <li>Donner la possibilité aux personnes ne disposant pas de potager de passer du temps libre à jardiner.</li>
                        <li>Dynamiser la vie au sein de votre commune en renforcant les liens sociaux.</li>
                    </ul>
            </div>
        </section>

        <section class="philosophie clear col--small">
            <h3 class="title__small">7 points clés</h3>
            <p>En prenant part à ce projet, vous vous engagez à respecter le fonctionnement d’Edenia pour le bien du potager mais également pour celui des autres membres.</p>
        </section>

        <div class="slider">
            <div class="slider__el active">
                <p>Le potager est destiné à jardiner dans une optique écologique de respect de l’environnement et de développement durable. Aucun pesticide, engrais chimique ou OGM n’est autorisé. Il est néanmoins autorisé d’utiliser des techniques préventives
                    respectant l’agriculture biologique.</p>
            </div>
            <div class="slider__el">
                <p>Le potager est une propriété privée. Les membres disposent donc d’une carte de membre donnant accès au potager via la borne interactive. L’entièreté du potager appartient à l’ensemble des collaborateurs même s’il est structuré en parcelles
                    distinctes.
                </p>
            </div>
            <div class="slider__el">
                <p>Durant la première année, un formateur de la société accompagne les membres dans le développement du potager pour les mener petit à petit vers une indépendance. Il supervise également la gestion des finances.</p>
            </div>
            <div class="slider__el">
                <p>Une cotisation mensuelle de 15€ est demandée à chaque collaborateur afin de profiter du potager et de ses récoltes. Ce montant finance le matériel disponible au potager, les graines à semer et l’accompagnement apporté au cours de la
                    première année. Tous les cotisants ont leur mot à dire sur la gestion du pot commun.
                </p>
            </div>
            <div class="slider__el">
                <p>Les récoltes se basent sur un système de confiance. Chacun cueille ce qui lui est nécessaire pour un partage équitable. L’éventuel surplus est vendu aux épiceries et fermes locales.</p>
            </div>
            <div class="slider__el">
                <p>L’entretien du potager se fait avec les outils mis à disposition dans un abri. Un espace de compostage est prévu dans l’intention de réutiliser les déchets verts. Pour l'arrosage, une citerne est alimentée avec un système de récupération
                    d’eau de pluie. Cette eau est utilisée de façon parcimonieuse. De plus, les membres sont invités à utiliser des techniques permettant au sol de rester humide (recouvrement en mousse ou en paille).</p>
            </div>
            <div class="slider__el">
                <p>Tous les trois mois, une réunion est organisée dans le but de discuter de points essentiels tels que le développement du potager ou les projets à venir. Il est souhaitable de participer à la vie du potager au minimum une fois par mois.</p>
            </div>

            <div class="slider__el--controls">
                <a class="prev">
                    <svg fill="#fff" viewBox="0 0 22 21" xmlns="http://www.w3.org/2000/svg">
                        <path d="m10.338 20.785l-10.154-10.24 10.154-10.239 2.8402 2.8166-5.3778 5.4229h14.175v4h-14.175l5.3778 5.4229-2.8402 2.8166z" clip-rule="evenodd" fill-rule="evenodd"/>
                    </svg>
                </a>

                <a class="next">
                    <svg fill="#fff" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                        <path d="m12.209 0.020264l10.154 10.239-10.154 10.24-2.8402-2.8166 5.3778-5.4229h-14.175v-4h14.175l-5.3778-5.4229 2.8402-2.8166z" clip-rule="evenodd" fill-rule="evenodd"/>
                    </svg>
                </a>

                <span class="slider__el--projectNumbers"><span class="number">1</span> / 7</span>
            </div>
        </div>

        <section class="borne col--small">
            <h3 class="title__small">L'utilité de la borne</h3>
            <p>Les membres jardinent pour leur plaisir mais la borne les guide de façon optimale.</p>
            <p>Pour organiser l’espace et la production, le potager est divisé en parcelles de mêmes dimensions. La borne affiche une représentation du potager qui illustre son état et les tâches à réaliser. Par exemple, l’arrosage ou la période de récolte.</p>
            <p>En fonction des paramètres propres à l’emplacement et des plantations actuelles, elle propose une liste de graines adaptée et intéressante pour les prochaines cultures. </p>
            <p>Enfin, elle propose une série de tutoriels et de conseils spécifiques à chaque semence.</p>
            <p>Enfin, elle propose une série de «trucs et astuces» spécifiques à chaque semence. Toute cette organisation permet de maintenir l’équilibre et l’harmonie du potager.</p>
        </section>

        <section id="potager" class="carte clear">
            <h3 class="title__small">Où trouver un potager Edenia&nbsp;?</h3>
            <div id="myMap" class="myMap"></div>
        </section>

        <section id="membre" class="membre col--small">
            <h3 class="title__small">Comment devenir membre Edenia&nbsp;?</h3>
            <p>Complétez ce formulaire pour devenir membre d’Edenia. Cette inscription vous donnera accès à votre carte de membre.</p>

            <form id="contact-form" class="form col--small" action="#" method="POST" role="form">
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

        <section id="conctact" class="contact col--small">
            <h3 class="title__small">Contacter Edenia</h3>
            <ul>
                <li class="contact__el">Par téléphone: <a href="tel:01234567890">01234 567 890</a></li>
                <li class="contact__el">Par email: <a href="mailto:edenia@dedenia.com">edenia@dedenia.com</a></li>
            </ul>

        </section>

        <section id="dwl_app" class="dwl_app col--small">
            <h3 class="title__small">Télécharger l'application</h3>
            <p>Téléchargez l’application ! Elle permet de visualiser l’état de votre potager en temps réel et vous avez accès facilement à votre carte de membre. Vous pouvez également avoir accès au solde du pot commun ou consulter l’agenda des réunions.</p>
            <div class="button">
            <button class="btn_edenia">Edenia app</button>
            </div>
        </section>
    </main>

    <footer>
        <ul class="footer">
            <li class="footer__el"><a href="https://medium.com/@louiselepoivre/les-liens-dedenia-b1c4d3abe3c4?fbclid=IwAR37JdefMQARDfehQEG9HoilcREOROsvtNl_-J9ahYtxzl2LrfF3RY2ehQ8">À propos</a></li>
            <li class="footer__el">Made for <a href="http://dwm.re/" target="_blank">DWM</a></li>
        </ul>
    </footer>


@endsection

@section('bingmap_script')
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM' async defer></script>
    <script src="{{ asset('js/bingmap.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/site.js') }}"></script>
@endsection