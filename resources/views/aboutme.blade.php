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
    </head>
    <header>
        <div class="w-full max-h-36">
            <h1 class="text-center">Site under construction</h1>
            @include('Layouts.menu')
        </div>
    </header>

    <body class="">
        <div class="w-full min-h-screen max-h-screen bg-stone-900">
            <iframe class="w-full h-3/6" ></iframe>
        </div >
    </body>
</html>
