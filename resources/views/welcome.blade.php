<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <video class="hidden sm:block w-full " autoplay preload="true">
        <source src="{{ url('Video/Intro.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
{{--    <div>--}}
{{--        <iframe class="hidden sm:block w-full h-screen"  src="https://www.youtube.com/embed/3R4NcDzF1NQ?controls=0autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>--}}
{{--    </div>--}}

    <div class="md:m-8 py-8 w-full-[16] min-h-screen bg-stone-800  rounded-lg">
        <div class="w-full h-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 place-items-center">
            @foreach($videos as $video)
                <div class="bg-black rounded-lg m-4 shadow-md shadow-white hover:shadow-xl hover:shadow-white duration-150 hover:scale-110">
{{--                    <iframe class="" src="{{$video->url}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                    <button id="{{$video[0]}}" class="show_video">
                        <img src="{{ url('Image/JankaMartin.webp') }}">
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
