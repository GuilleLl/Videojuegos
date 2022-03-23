<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/adminlte/dist/img/Logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('vendor/adminlte/dist/img/Logo.png') }}">
</head>

<body class="bg-dark h-screen antialiased leading-none font-sans">
    <div class="flex flex-col">
        @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
            <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Inicio') }}</a>
            @else
            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Inicia Sesion') }}</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Registrate') }}</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="min-h-screen flex items-center justify-center flex-col px-5 mx-5">
            <h1 class="text-center text-white">Mejores Juegos de la Historia</h1>
            <div class="carousel slide carousel-fade px-5 mx-5" id="mi-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="carrusel1.jpg" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid" src="carrusel2.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="carrusel3.jpg" alt="">
                    </div>
                </div>
                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#mi-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>

                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" class="active" data-bs-target="#mi-carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
                    <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


            </div>
        </div>
    </div>
</body>

</html>