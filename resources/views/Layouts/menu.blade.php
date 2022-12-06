<div class="flex flex-row justify-between bg-modern-black h-full">
    <div class="flex items-center justify-center">
        <a href="/" class="">
            <img src="{{ url('Image/background16-9.webp') }}" class="hidden sm:block ml-3">
            <img src="{{ url('Image/logo.webp') }}" class="block sm:hidden ml-3">
{{--            <p class="absolute">esfsefsefse</p>--}}
        </a>
    </div>

    <div >
        <ul class="flex flex-row text-white h-full mr-3">
{{--            FACEBOOK--}}
            <li class="mx-2 flex items-center justify-center">
                <a href="https://www.facebook.com/falconmilanjanos" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M13.355 22v-9.123h3.062l.459-3.555h-3.52v-2.27c0-1.03.285-1.731 1.761-1.731L17 5.32V2.14A25.233 25.233 0 0 0 14.257 2c-2.715 0-4.573 1.657-4.573 4.7v2.622h-3.07v3.555h3.07V22h3.671Z"/></svg>
                </a>
            </li>

{{--            INSTAGRAM--}}
            <li class="mx-2 flex items-center justify-center whitespace-nowrap">
                <a href="https://www.instagram.com/falcon.video/?fbclid=IwAR30LWr717sS6JOAarFnOpNBYInG4FTQl2DV8ZbEhBZ4cAVIB2fRLNI3evQ" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"/></svg>
                </a>
            </li>

{{--            YOUTUBE--}}
            <li class="mx-2 flex items-center justify-center">
                <a href="https://www.youtube.com/channel/UCXom5i0sow5m7UvRb6HHvGg" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round"><path stroke-width="4" d="M11.064 10.414c5.543-.276 9.854-.414 12.934-.414s7.393.138 12.939.415a6 6 0 0 1 5.68 5.492c.254 3.034.381 5.706.381 8.017c0 2.339-.13 5.048-.39 8.128a6 6 0 0 1-5.587 5.483c-4.741.31-9.082.465-13.023.465c-3.94 0-8.28-.155-13.018-.465a6 6 0 0 1-5.587-5.48c-.263-3.103-.395-5.814-.395-8.131c0-2.29.129-4.963.385-8.02a6 6 0 0 1 5.68-5.49Z"/><path stroke-width="3.429" d="M21 19.61v8.796a.857.857 0 0 0 1.33.715l6.597-4.36a.857.857 0 0 0 .006-1.427l-6.598-4.436a.857.857 0 0 0-1.335.711Z"/></g></svg>
                </a>
            </li>
        </ul>
    </div>

    <div class="hidden sm:block">
        <ul class="flex flex-row text-white h-full mr-3">
            <li class="mx-2 flex items-center justify-center"><a href="/references" class="">Referencie</a></li>
            <li class="mx-2 flex items-center justify-center whitespace-nowrap"><a href="/aboutme" class="">O mne</a></li>
            <li class="mx-2 flex items-center justify-center"><a href="/contact">Kontakt</a></li>
        </ul>
    </div>

    <div class="block sm:hidden flex items-center justify-center mr-3">

        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">         <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="white" d="M20 17.5a1.5 1.5 0 0 1 .144 2.993L20 20.5H4a1.5 1.5 0 0 1-.144-2.993L4 17.5h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 0 1 0-3h16Zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 1 1 0-3h16Z"/></g></svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="hidden z-10 w-screen right-0 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 top-20 absolute">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="/references" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Referencie</a>
                </li>
                <li>
                    <a href="/aboutme" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">O mne</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kontakt</a>
                </li>

            </ul>
        </div>

    </div>

</div>
