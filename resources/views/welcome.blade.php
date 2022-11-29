<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        @vite('resources/css/app.css')

        @vite('resources/js/menu.js')

        <title>Falcon</title>
    </head>


    <body class="">
    <header>
        <div class="min-w-full max-h-20">
            {{--            <h1 class="text-center">Site under construction</h1>--}}
            @include('Layouts.menu')
        </div>
    </header>
    <div class="min-w-max min-h-screen bg-stone-900 grid place-items-center">
        <div class="min-w-full mx-12 bg-stone-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-24 sm:mx-2">
            <div class="md:flex">
                <div class="p-8">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @foreach($videos as $video)

                                <iframe class=" mt-1 ml-1" src="{{$video->url}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        @endforeach
{{--                            <iframe width="560" height="315" src="https://youtu.be/LJwszlzvErU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>--}}
                </div>
            </div>
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
