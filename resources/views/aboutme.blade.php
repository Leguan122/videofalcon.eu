<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Falcon</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="icon" href="{{ url('Image/favicon.webp') }}">
    </head>
    <header>
        <div class="min-w-full max-h-36 absolute">
{{--            <h1 class="text-center">Site under construction</h1>--}}
            @include('Layouts.menu')
        </div>
    </header>

    <body>

    <div class="min-w-max min-h-screen bg-stone-900 grid place-items-center">
        <div class="max-w-md mx-auto bg-stone-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-24">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://scontent.fbts10-1.fna.fbcdn.net/v/t39.30808-6/243296131_4718820091475311_1175966634603051494_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_ohc=QMFIPX2aHiwAX89Lgav&tn=JsM3Gb2Q2bcBYSG0&_nc_ht=scontent.fbts10-1.fna&oh=00_AfCd_BAVbf2k1lWO8W66isrMYYBmbAIvjp5GrpuQTIQCuw&oe=6385AC16" alt="Modern building architecture">
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

    </body>
</html>
