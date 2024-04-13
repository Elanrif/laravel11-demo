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
     <div>
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
            <a href="{{ url('/') }}">
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
            </div>
            </div>
            </nav>
            </div>
        </header>
     </div>


    {{-- Main content --}}

    <div class="mt-5 container px-6 w-full">
      <div class="row text-white">
        <nav class="col-3 border border-danger d-flex gap-3 flex-column">
            <div class="d-flex flex-column gap-2">
            <section class="border border-primary p-2 bg-primary" style="min-height:15rem">section 1</section>
            <section class="border border-primary p-2 bg-secondary" style="min-height:10rem">section 2</section>
            </div>
        </nav>

        {{-- yield section --}}
        <main class="col-9 border border-white p-10" style="background-color : #87C7E1"> @yield('main')</main>
    </div>
    </div>


    {{-- footer --}}
    <footer class="container text-white mt-5 bg-secondary" style="height:12rem;">
      <div class="row pt-3 row-cols-3">
      <div>
       <h1 class="h4 font-bold"> [Nom site web]</h1>
       <div>button 1</div>
       <div>button 2</div>
       <div>button 3</div>
       <div>button ....</div>
      </div>
      <div>partie 2.</div>
      <div>partie 3.</div>
      </div>
    </div>
    </footer>
    </body>
</html>
