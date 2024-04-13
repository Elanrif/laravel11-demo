<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-body-secondary" style="background-image:url('https://www.logicieleducatif.fr/files/images/backgrounds/ciel_bulles001.jpg')">
    {{-- header --}}
     <div class="">
       {{--  <header class="w-full d-flex align-items-center justify-content-between px-3 py-2 bg-black text-white">
                       <nav>[NOM APPLICATION]</nav>
                       <nav class="d-flex gap-3 align-items-center justify-content-center">
                        <div>Lien 1</div>
                        <div>Lien 2</div>
                        <div>Lien 3</div>
                        <div>Lien4 ...</div>
                       </nav>
                        @if (Route::has('login'))
                            <nav class="-mx-3 d-flex flex-1 justify-end gap-3 flex-row-reverse">
                             
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="btn text-white btn-info"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-success"
                                    >
                                        Log in
                                    </a>
                                   
                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-primary"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header> --}}
        <header 
        style="background: linear-gradient(180deg, rgba(128, 128, 160, .7) 0, rgba(128, 128, 160, .6) 95%, rgba(128, 128, 240, 0) 100%);
                background-size: auto 100%;
                background-repeat: repeat-x;
                background-position: center;
                height:7rem;background-image:url('https://www.logicieleducatif.fr/files/images/backgrounds/banniere_01.png')">
           <div class="container">
            <a href="#">
            <div id="banniere-titre" class="text-center pt-2 mb-2">
            <img id="banniere-image" alt="LogicielEducatif" height="94" width="651" style="aspect-ratio: 651/94" data-cfsrc="https://www.logicieleducatif.fr/files/images/headers/banniere-3d-01.png" data-cfstyle="aspect-ratio: 651/94" src="https://www.logicieleducatif.fr/files/images/headers/banniere-3d-01.png">
            </div>
            </a>
            <nav class="d-flex justify-content-between align-items-center">
            <div class="d-none d-lg-block">
            <a class="btn btn-warning px-1 px-xl-2" href="#">Maternelle</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">CP</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">CE1</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">CE2</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">CM1</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">CM2</a>
            <a class="btn btn-warning px-1 px-xl-2" href="#">Collège</a>
            <a class="btn btn-success" href="#"><i class="fas fa-sheet-plastic"></i> Fiches</a>
            </div>
            <div>
            <div id="membre-options">
            <div class="d-none d-lg-block">
              @if (Route::has('login'))
                            <nav class="-mx-3 d-flex flex-1 justify-end gap-3 flex-row-reverse">
                             
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="btn text-white btn-info"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-success px-1 px-xl-2"
                                    >
                                    <i class="bi bi-person h5"></i>   Connexion
                                    </a>
                                   
                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-primary px-1 px-xl-2"
                                        >
                                     <i class="bi bi-person-add h5"></i>      Inscription
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
            </div>
            <button class="btn btn-secondary d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <i class="fas fa-bars"></i> Menu
            </button>
            </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link" href="https://www.logicieleducatif.fr/connexion"><i class="fas fa-user"></i> Connexion</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.logicieleducatif.fr/inscription"><i class="fas fa-user-plus"></i> Inscription</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.logicieleducatif.fr/fiches"><i class="fas fa-sheet-plastic"></i> Fiches</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Jeux par niveau
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/maternelle">Maternelle</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/cp">CP</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/ce1">CE1</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/ce2">CE2</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/cm1">CM1</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/cm2">CM2</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/niveau/college">Collège</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Mathématiques </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/calcul">Calcul</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/numeration">Numération</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/geometrie">Géométrie</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/problemes">Problèmes</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/grandeurs-et-mesures">Grandeurs et mesures</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Français </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/lecture-sons">Lecture (sons)</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/lecture-comprehension">Lecture (compréhension)</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/orthographe">Orthographe</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/conjugaison">Conjugaison</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/grammaire">Grammaire</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/confusions-de-sons">Confusions de sons</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/vocabulaire">Vocabulaire</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Éveil </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/logique">Logique</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/b2i">B2I</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/memoire-spatialisation">Mémoire et spatialisation</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/histoire">Histoire</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/geographie">Géographie</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/sciences">Sciences</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/anglais">Anglais</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/arts">Arts</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/musique">Musique</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/emc">EMC</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/langues">Langues</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/memory">Memory</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/sudokus">Sudokus</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/pendus">Pendus</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/puzzles">Puzzles</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/coloriages">Coloriages</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/sport">Sport</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/recreation">Récréation</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Thèmes </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/les-alphas">Les alphas</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/noel">Noël</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/halloween">Halloween</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/paques">Pâques</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/fete-des-meres">Fête des mères</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/fete-des-peres">Fêtes des pères</a></li>
            <li><a class="dropdown-item" href="https://www.logicieleducatif.fr/jeux/domaine/saint-valentin">Saint-Valentin</a></li>
            </ul>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            <div>
            </div>
            </div>
        </header>
     </div>


    {{-- Main --}}
       <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center gap-5"
       style="helkight:75%;">
             <div class="h1">page d'acceuil </div>
        <p>Bonjour , bienvenue dans la page d'acceuil !</p>
        <div>
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    veuillez cliquez
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Veuillez créer un compte pour commencer à apprendre
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    </div>
       </div>
    </body>
</html>
