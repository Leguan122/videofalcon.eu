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
    <div class="my-2 sm:my-20">
        <h1 class="text-white text-center text-4xl"> Video referencie</h1>
    </div>
    <div class="min-h-screen">
        <div class="w-full h-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 place-items-center">
            @foreach($videos as $video)
                <div class="relative bg-black rounded-lg m-4 shadow-sm shadow-white ">
                    <button id="{{$video[0]}}" class="show_video">
{{--                        <img src="{{ $video[2] ?? url('Image/Thumbs/KatkaMichal.webp') }}" alt="=Uvodný obrázok videa: {{$video[1]}}" class="rounded-lg">--}}
                        <div class=" overflow-hidden">
                            <img src="{{asset('Image/Thumbs').'/'. ($video[2] ?? 'KatkaMichal').'.webp'}}" alt="=Uvodný obrázok videa: {{$video[1]}}" class="hover:scale-105  duration-150">
                        </div>
                        <p class="text-white text-center">{{$video[1]}}</p>
                        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72"><path fill="#ea5a47" d="M63.874 21.906a7.31 7.31 0 0 0-5.144-5.177C54.193 15.505 36 15.505 36 15.505s-18.193 0-22.73 1.224a7.31 7.31 0 0 0-5.144 5.177C6.91 26.472 6.91 36 6.91 36s0 9.528 1.216 14.095a7.31 7.31 0 0 0 5.144 5.177C17.807 56.495 36 56.495 36 56.495s18.193 0 22.73-1.223a7.31 7.31 0 0 0 5.144-5.177C65.09 45.528 65.09 36 65.09 36s0-9.528-1.216-14.094"/><path fill="#fff" d="M30.05 44.65L45.256 36L30.05 27.35Z"/><g fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"><path d="M63.874 21.906a7.31 7.31 0 0 0-5.144-5.177C54.193 15.505 36 15.505 36 15.505s-18.193 0-22.73 1.224a7.31 7.31 0 0 0-5.144 5.177C6.91 26.472 6.91 36 6.91 36s0 9.528 1.216 14.095a7.31 7.31 0 0 0 5.144 5.177C17.807 56.495 36 56.495 36 56.495s18.193 0 22.73-1.223a7.31 7.31 0 0 0 5.144-5.177C65.09 45.528 65.09 36 65.09 36s0-9.528-1.216-14.094"/><path stroke-linecap="round" stroke-linejoin="round" d="M30.05 44.65L45.256 36L30.05 27.35Z"/></g></svg>
                        </div>
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
