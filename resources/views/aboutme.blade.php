<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Falcon video production. Vytvorím Vám svadobný klip, svadobné video, prípadne reklamu. Mesto kde žijem je Banská Bystrica. Na tejto stránke sa dozviete viac o mne.">

        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        @vite('resources/css/app.css')

        @vite('resources/js/menu.js')

        <title>Falcon video production</title>
    </head>


    <body class="bg-stone-900 font-nunito">
        <header>
            <div class="w-full h-16 absolute">
                {{--            <h1 class="text-center">Site under construction</h1>--}}
                @include('Layouts.menu')
            </div>
        </header>

    <div class=" min-h-[calc(100vh-24px)] grid place-items-center">
        <div class="max-w-md mx-auto bg-stone-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-24">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ url('Image/profilovka.webp') }}" alt="Profile photo">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-white font-semibold">O mne</div>
                    <p class="mt-2 text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam nisi tellus, vitae facilisis erat sollicitudin vel. Duis id eleifend sem. Maecenas ut hendrerit augue. Fusce eu ex ut nulla vehicula scelerisque ut ac libero. Pellentesque congue vehicula lacus. Donec dolor nisi, lacinia eu velit commodo, fringilla sagittis est. Fusce posuere laoreet enim ac placerat. In pulvinar mollis massa sodales eleifend. In suscipit dolor diam, vel malesuada quam malesuada id. Mauris ut dolor ac sapien semper mollis. Suspendisse lacus purus, condimentum et libero sit amet, commodo suscipit tellus. Nunc consequat lacus ac augue dignissim, eu lacinia justo congue. Duis ac erat ipsum. Sed ut orci nulla.
                    </p>
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
