<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    @vite('resources/css/app.css')

    @vite('resources/js/menu.js')

    @vite('resources/js/form.js')

    <title>Falcon video production</title>
</head>


<body class="bg-stone-900 font-nunito">
    <header >
        <div class="min-w-full h-16 absolute">
            {{--            <h1 class="text-center">Site under construction</h1>--}}
            @include('Layouts.menu')
        </div>
    </header>
    <div class="min-h-[calc(100vh-24px)]">
        <div class="flex flex-col py-20">
            <div class="mb-20">
                <h1 class="text-white text-center font-mono text-4xl"> Kontakt</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mb-20">
                <div class="flex flex-col items-center m-8 py-2 border-2 rounded">
                    <div class="">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M10 20h4v-1h-4Zm-3 3q-.825 0-1.412-.587Q5 21.825 5 21V3q0-.825.588-1.413Q6.175 1 7 1h10q.825 0 1.413.587Q19 2.175 19 3v18q0 .825-.587 1.413Q17.825 23 17 23Zm0-7h10V6H7Z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-center"> +421 xxx xxx xxx</p>
                    </div>
                </div>
                <div class="flex flex-col items-center mx-8 md:m-8 py-2 border-2 rounded">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M17 9h2V7h-2Zm0 4h2v-2h-2Zm0 4h2v-2h-2ZM1 21V11l7-5l7 5v10h-5v-6H6v6Zm16 0V10l-7-5.05V3h13v18Z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-center"> Tvoja adresa 1 , 999 99</p>
                    </div>
                </div>
                <div class="flex flex-col items-center m-8 py-2 border-2 rounded">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M12 22q-2.05 0-3.875-.788q-1.825-.787-3.187-2.15q-1.363-1.362-2.15-3.187Q2 14.05 2 12q0-2.075.788-3.887q.787-1.813 2.15-3.175Q6.3 3.575 8.125 2.787Q9.95 2 12 2q2.075 0 3.887.787q1.813.788 3.175 2.151q1.363 1.362 2.15 3.175Q22 9.925 22 12v1.45q0 1.475-1.012 2.512Q19.975 17 18.5 17q-.9 0-1.675-.4t-1.275-1.05q-.675.675-1.587 1.063Q13.05 17 12 17q-2.075 0-3.537-1.463Q7 14.075 7 12t1.463-3.538Q9.925 7 12 7t3.538 1.462Q17 9.925 17 12v1.45q0 .725.45 1.137q.45.413 1.05.413q.6 0 1.05-.413q.45-.412.45-1.137V12q0-3.275-2.363-5.638Q15.275 4 12 4Q8.725 4 6.362 6.362Q4 8.725 4 12t2.362 5.637Q8.725 20 12 20h5v2Zm0-7q1.25 0 2.125-.875T15 12q0-1.25-.875-2.125T12 9q-1.25 0-2.125.875T9 12q0 1.25.875 2.125T12 15Z"/></svg>                    </div>
                    <div>
                        <p class="text-white text-center"> example@example.com</p>
                    </div>
                </div>
            </div>

            <div class="w-11/12 bg-stone-800 rounded-lg place-self-center p-8">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <img class="h-48 w-full object-cover md:h-full md:w-48 pb-8 md:pb-0" src="{{ url('Image/profilovka.webp') }}" alt="Profile photo">
                    </div>
                    <div class="border-2 p-4">
                        <form id="msg-form" action="/contact" method="post">
                            @csrf
                            <div class="flex flex-col lg:flex-row justify-between">

                                <div class="flex flex-col w-full lg:w-2/5">
                                    <label id="warn_name" class="invisible text-red-600 text-sm break-keep" for="input_name"> *Meno nesmie byť prázdne</label>
                                    <input id="input_name" class="w-full p-1 rounded" type="text" name="name" placeholder="Meno *">
                                </div>

                                <div class="flex flex-col w-full lg:w-1/2">
                                    <label id="warn_email" class="invisible text-red-600 text-sm" for="input_email"> *Email nesmie byť prázdny</label>
                                    <input id="input_email" class="w-full p-1 rounded" type="email" name="email" placeholder="Email *">
                                </div>


                            </div>

                            <label id="warn_msg" class="invisible text-red-600 text-sm" for="input_msg"> *Správa nesmie byť prázdna</label>
                            <textarea id="input_msg" class="w-full h-24 mb-1 p-1 rounded" placeholder="Vaša správa *" name="msg"></textarea><br>


                            <button id="sendMsg" class="g-recaptcha bg-white p-1 rounded-lg hover:bg-slate-200" data-sitekey="6LfBjkkjAAAAALOq-MFLU6gwBA1BReKFJ8AAC9DG"
                                    data-callback='onSubmit'
                                    data-action='submit'
                                    data-error-callback='captchaError' >Odoslať </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer>
        <div class="w-full max-h-20 mt-auto">
            {{--            <h1 class="text-center">Site under construction</h1>--}}
            @include('Layouts.footer')
        </div>
    </footer>

</body>
</html>
