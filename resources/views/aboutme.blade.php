<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Falcon video production. Vytvorím Vám svadobný klip, svadobné video, prípadne reklamu. Mesto kde žijem je Banská Bystrica. Na tejto stránke sa dozviete viac o mne.">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon.png') }}">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>


        <link rel="shortcut icon" href="{{ url('favicoawdn.ico') }}" type="image/x-icon">

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
                        Volám sa Milan Jánoš a mám 28 rokov. Som kameraman a tejto profesii sa venujem už 9 rokov.
                        Začal som na strednej odbornej škole s odborom grafik digitálnych médií. Popri VŠ na žurnalistike
                        som začal filmovať svadby, birmovky, 1.sväté
                        prijímania a iné akcie. Na VŠ som bol aktívny v školskej telvevízii Unica.
                        Postupne som začal pracovať pre Tv Lux, v ktorej pracujem doteraz.
                        Som zamestnaný ako kameraman a strihač.
                        Vďaka tomu som natočil a zostrihal niekoľko desiatok dokumentov. Nie vždy točím sám,
                        niekedy točíme spolu s manželkou.
                        Veľmi nás táto práca baví a napĺňa. Preto budeme veľmi radi, ak si nás vyberiete,
                        vďaka čomu
                        môžeme zachytiť vašu
                        špeciálnu udalosť, presne podľa vašich predstáv.                     </p>
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
