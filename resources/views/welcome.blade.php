<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Falcon video production. Vytvorím Vám svadobný klip, svadobné video, prípadne reklamu. Mesto kde žijem je Banská Bystrica. Na tejto stránke sú moje referencie">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon.png') }}">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        @vite('resources/css/app.css')

        @vite('resources/js/menu.js')

        <title>Falcon video production</title>
    </head>


    <body class="bg-stone-900 font-nunito">
    <header>
        <div class="min-w-full h-16 ">
            {{--            <h1 class="text-center">Site under construction</h1>--}}
            @include('Layouts.menu')
        </div>
    </header>

    <video class="hidden sm:block w-full min-h-screen" muted autoplay loop>
        <source src="{{ url('Video/Intro.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>


        <footer>
            <div class="w-full max-h-20">
                {{--            <h1 class="text-center">Site under construction</h1>--}}
                @include('Layouts.footer')
            </div>
        </footer>
    </body>


</html>
