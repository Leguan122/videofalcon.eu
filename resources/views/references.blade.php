<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Falcon video production. Vytvorím Vám svadobný klip, svadobné video, prípadne reklamu. Mesto kde žijem je Banská Bystrica. Na tejto stránke sú moje referencie">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon.png') }}">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Nunito&display=swap' rel='stylesheet'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>

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


    <div class="md:m-8 py-8 w-full-[16] min-h-screen bg-stone-800  rounded-lg">
        <div class="w-full h-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 place-items-center">
            @foreach($videos as $video)
                <div class="bg-black rounded-lg m-4 shadow-sm shadow-white hover:shadow-md hover:shadow-white duration-150 hover:scale-105">
                    <button id="{{$video[0]}}" class="show_video">
                        <img src="{{ url('Image/JankaMartin.webp') }}" alt="=Uvodný obrázok videa: {{$video[1]}}" class="rounded-lg">
                        <p class="text-white text-center">{{$video[1]}}</p>
                </button>
                </div>
            @endforeach
            {{--                            <iframe width="560" height="315" src="https://youtu.be/LJwszlzvErU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>--}}
        </div>
    </div>

    <div id="popup" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-full grid place-items-center">
        <div class="w-9/12 h-5/6">
            <iframe id="youtube" class="w-full h-full" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

        <footer>
            <div class="w-full max-h-20">
                {{--            <h1 class="text-center">Site under construction</h1>--}}
                @include('Layouts.footer')
            </div>
        </footer>
    </body>


</html>
