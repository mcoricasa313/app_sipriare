<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>




        @stack('modals')

        @livewireScripts

    </body>
    <nav class="bg-red border-b border-gray-100" style="background-color:white;color:gray">
    <br>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex grid grid-cols-3 gap-4">
            <div class="...">
            <img src="{{asset('imagenes/peruprimero.JPG')}}" style="width:80%">
            </div>
            <div class="...">
            CONSULTA SOBRE TRÁMITES Y REQUISITOS
            <br>
            <span class="mt-2 text-sm text-gray-500">
            Plataforma de Atención al Ciudadano
            </span>
            <br>
            <span class="mt-2 text-sm text-gray-500">
            Jr. Zorritos 1203-Lima-Perú-C.P.:15082
            </span>
            </div>
            <div class="...">
            CENTRAL DE CONSULTAS
            <br>
            615-7900
            <br>
            Lunes a viernes de 8:30 a.m. a 5:00 p.m.
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-right">
        <hr>
            Sistema Inteligente de Priorizacion, Asignacion y Repuestas v.1.0.0 Beta
        </div>
    </nav>
</html>
