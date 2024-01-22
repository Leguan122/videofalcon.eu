<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Layouts.head')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>

        @vite('resources/css/app.css')

        @vite('resources/js/menu.js')

        <title>Falcon video production</title>
    </head>
    <body class="bg-stone-900 font-nunito">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZCFSXNB"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <header>
            <div class="w-full h-16">
                {{--            <h1 class="text-center">Site under construction</h1>--}}
                @include('Layouts.menu')
            </div>
        </header>
    <div class=" min-h-[calc(100vh-20px)] ">
        <div class="my-2 sm:my-20">
            <h1 class="text-white text-center text-4xl"> O mne </h1>
        </div>
        <div class="mx-2 sm:mx-40 bg-stone-800 overflow-hidden ">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-36 w-full object-cover md:h-full md:h-100" src="{{ url('Image/profilovka.webp') }}" alt="Profilová fotka">
                </div>
                <div class="p-8">
{{--                    <div class="uppercase tracking-wide text-sm text-white font-semibold">O mne</div>--}}
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
