<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                }
                .ex4 {
                    outline: thick ridge dodgerblue;
                    border-style: outset;
                }
                .h1 {
                    font-size: 120px;
                    text-shadow: 4px 4px 4px #000000;
                }

                .h2
                {
                    font-size: 55px;
                    text-shadow: 3px 3px 4px #000000;
                }
                

  
            

    </style>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased bg-white">
     
               
            


        <!-- Page Content -->
        @livewire('includes.navbar')
        <main class="container my-5">
            {{ $slot }}
        @livewire('includes.footer')
        </main>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
