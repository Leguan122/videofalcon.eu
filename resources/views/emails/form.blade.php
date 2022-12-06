<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    @vite('resources/js/menu.js')

    <title>Kontaktý formulár</title>
</head>


<body class="bg-stone-900">

<h1>Kontaktny formular</h1>

<h2>
    Autor: {{$request->name}}
</h2>

<div>
    <h3>Sprava:</h3>
    <p>
        {{$request->msg}}
    </p>
</div>

<div>
    <h4>
        Od:
    </h4>
    <p>
        {{$request->email}}
    </p>
</div>


<footer>
    <div class="w-full max-h-20">
        {{--            <h1 class="text-center">Site under construction</h1>--}}
        @include('Layouts.footer')
    </div>
</footer>
</body>


</html>
