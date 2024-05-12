<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{__('Programador Full-Stack, Gabriel Azevedo. Com conhecimento em PHP, Laravel, Linux, Docker.')}}">

    <title>Gabriel Azevedo</title>

    <link rel="shortcut icon" href="{{ asset('img/logo_twelve.png' )}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Swiper CSS -->
    @vite(['resources/css/swiper-bundle.min.css'])

    <!-- Swiper JS -->
    @vite(['resources/js/swiper-bundle.min.js'])

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="antialiased dark:bg-gray-500">

{{-- Cabeçalho --}}
<header>
    {{-- Navbar --}}
    <nav class="bg-[#171923] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
            <a href="#" class="block py-2 px-3 space-x-3 rtl:space-x-reverse mr-3.5">
                <img src="{{ asset('img/logo_twelve_square.png')}}" class="size-10 rounded-full shadow-sm hover:scale-125 duration-300 shadow-corLaravel" alt="Gabriel Azevedo logo" />
            </a>

            <span class="md:hidden text-white font-bold text-lg">Gabriel Azevedo</span>

            <button
                data-collapse-toggle="navbar-default"
                type="button"
                class="inline-flex items-center ml-3.5 p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg
                            md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
                            dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">

                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block sm:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col items-center p-4 sm:p-0 mt-4 border border-gray-100 rounded-lg sm:flex-row sm:space-x-8 rtl:space-x-reverse sm:mt-0 sm:border-0 dark:bg-gray-800 sm:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#Home" class="text-xl block py-2 px-3 text-white rounded hover:bg-corLaravel sm:hover:bg-transparent sm:border-0 sm:hover:text-corLaravel sm:p-0 dark:text-white sm:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white sm:dark:hover:bg-transparent">{{__('Início')}}</a>
                    </li>
                    <li>
                        <a href="#About" class="text-xl block py-2 px-3 text-white rounded hover:bg-corLaravel sm:hover:bg-transparent sm:border-0 sm:hover:text-corLaravel sm:p-0 dark:text-white sm:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white sm:dark:hover:bg-transparent">{{__('Sobre mim')}}</a>
                    </li>
                    <li>
                        <a href="#Skills" class="text-xl block py-2 px-3 text-white rounded hover:bg-corLaravel sm:hover:bg-transparent sm:border-0 sm:hover:text-corLaravel sm:p-0 dark:text-white sm:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white sm:dark:hover:bg-transparent">{{__('Habilidades')}}</a>
                    </li>
                    <li>
                        <a href="#Projects" class="text-xl block py-2 px-3 text-white rounded hover:bg-corLaravel sm:hover:bg-transparent sm:border-0 sm:hover:text-corLaravel sm:p-0 dark:text-white sm:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white sm:dark:hover:bg-transparent">{{__('Projetos')}}</a>
                    </li>
                    <li>
                        <a href="#Contact" class="text-xl block py-2 px-3 text-white rounded hover:bg-corLaravel sm:hover:bg-transparent sm:border-0 sm:hover:text-corLaravel sm:p-0 dark:text-white sm:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white sm:dark:hover:bg-transparent">{{__('Contato')}}</a>
                    </li>
                    <li>
                        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                    </li>
                    <li>
                        {{-- Translate --}}
                        <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                            <button type="button" data-dropdown-toggle="language-dropdown-menu" class="">
                                <svg class="size-10 hover:scale-125 duration-300 rounded-full me-3" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <circle style="fill:#00C85F;" cx="256" cy="256" r="256"/>
                                    <path style="fill:#FFF046;" d="M246.207,103.892L28.673,248.915c-5.241,3.495-5.241,11.196,0,14.69l217.534,145.022 c5.93,3.954,13.656,3.954,19.586,0l217.534-145.022c5.241-3.495,5.241-11.196,0-14.69L265.793,103.892 C259.863,99.938,252.137,99.938,246.207,103.892z"/>
                                    <circle style="fill:#4B82E1;" cx="256" cy="256" r="105.931"/>
                                    <path style="fill:#FFFFFF;" d="M165.515,201.127c-3.47,5.709-6.403,11.761-8.758,18.111c49.205-3.345,128.166,5.419,197.503,76.211 c2.472-6.151,4.404-12.57,5.692-19.229C292.095,211.143,216.738,199.457,165.515,201.127z"/>
                                            </svg>
                            </button>
                            <!-- Dropdown -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
                                <ul class="py-2 " role="none">
                                    <li>
                                        <a href="#" class="block px-4 pr-2 pt-2 text-sm text-gray-700 hover:text-white hover:bg-corLaravel dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white rounded-lg" role="menuitem">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="size-10 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full h-2 bg-corLaravel"></div>
        <div class="flex justify-center items-center w-full h-14 border-b-2 border-corLaravel bg-yellow-300 text-black font-extrabold text-2xl">
            <span class="dark:hidden animate-bounce">Atenção! Site em <span class="text-corLaravel">produção</span>!</span>
            <span class="dark:block hidden">MODO DARK EM CONSTRUÇÃO</span>
        </div>
    </nav>
</header>
{{-- End Cabeçalho --}}

<div class="container mx-auto"> {{-- Start Container --}}

    {{-- Home --}}
    <section id="Home">
        <div class="flex flex-col items-center justify-center pb-44 pt-96 p-y-6 lg:p-y-36 2xl:p-y-72">
            <h1 class=" font-extrabold text-4xl md:text-8xl"><span class="mudarCorLaravel">Gabriel</span> <span class="mudarCorLaravel">Azevedo</span></h1>
            <h2 class="font-semibold text-2xl md:text-4xl">Desenvolvedor <span style="color: #F33A2F">Full-Stack</span></h2>
            <div class="flex flex-row">
                <a target="_blank" href="https://github.com/azevedo2elve" class="flex items-center justify-center p-2 space-x-3 rtl:space-x-reverse">
                    <i class="fa-brands fa-github fa-4x corIcone mudarCorLaravel"></i>
                </a>
                <a target="_blank" href="https://linkedin.com/in/azevedo2elve" class="flex items-center justify-center p-2 space-x-3 rtl:space-x-reverse">
                    <i class="fa-brands fa-linkedin fa-4x mudarCorLinkedin"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="About">

        <div class="flex justify-center items-center pt-52">
            <div class="text-center basis-[75%]">
                <h1 class="font-bold text-4xl md:text-6xl">{{__('Sobre mim')}}</h1>
                <div class="flex lg:flex-row flex-col justify-center items-center">
                    <div class="">
                        <p class="font-medium md:text-2xl mt-5 text-justify">
                            <span class="font-bold">Programador PHP</span> com experiência em sistemas web e desenvolvimento de sites,
                            habilidades em <span class="font-bold">Laravel</span> e <span class="font-bold">Docker</span>. Ex-sargento do Exército Brasileiro, trazendo disciplina e
                            dedicação para o desenvolvimento e manutenção de sistemas. Conhecimentos em
                            PHP, Laravel, Docker, e Linux para entregar soluções eficientes e escaláveis.
                        </p>
                    </div>
                    <img src="{{ asset('img/gabriel_eb.png')}}" class="hidden md:block size-[300px] ml-16" alt="Gabriel Azevedo Exército Brasileiro" />
                </div>
            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section id="Skills">
        <div class="flex items-center justify-center pt-60">
            <div class="flex flex-col basis-[75%]">
                <h1 class="text-center font-bold text-4xl md:text-6xl">{{__('Habilidades')}}</h1>
                <div class="flex flex-col mt-5">

                    {{-- Skills --}}
                    <div class="grid grid-cols-2 gap-2 md:grid-cols-4">

                        {{-- PHP --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-php fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">PHP</p>
                            </div>
                        </div>

                        {{-- Laravel --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-laravel fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">Laravel</p>
                            </div>
                        </div>

                        {{-- Docker --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-docker fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">Docker</p>
                            </div>
                        </div>

                        {{-- Linux --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-linux fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">Linux</p>
                            </div>
                        </div>

                        {{-- HTML5 --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-html5 fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">HTML5</p>
                            </div>
                        </div>

                        {{-- CSS3 --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-css3 fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">CSS3</p>
                            </div>
                        </div>

                        {{-- JavaScript --}}
                        <div class="hover:bg-[#f4544b] hover:scale-125 duration-300
                                flex justify-center items-center bg-corLaravel rounded-2xl size-28 lg:size-40">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <i class="fa-brands fa-js fa-4x" style="color: #ffffff;"></i>
                                </div>
                                <p class="text-white mt-2 text-xl">JavaScript</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section id="Projects">

        <div class="pt-60">
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <div>
                        <h1 class="basis-2 font-bold text-4xl md:text-6xl">{{__('Projetos')}}</h1>
                    </div>
                </div>

                <div class="">
                    {{-- Slider card --}}
                    <div class="card__container swiper">
                        <div class="card__content bg-opacity-20 bg-[#171923] shadow-xl shadow-corLaravel p-5 mx-3 md:mx-36 lg:mx-72 xl:mx-[25rem] rounded-2xl overflow-hidden">
                            <div class="swiper-wrapper">

                                {{-- Card / Orçamento Pessoal --}}
                                <article class="overflow-hidden rounded-2xl swiper-slide">
                                    <div class="relative bg-corLaravel pt-[1.5rem] -m-[.75rem] rounded-2xl">
                                        <img src="{{ asset('img/orcamento_pessoal.png') }}" alt="img" class="my-0 mx-auto relative z-5 rounded-2xl h-full">
                                    </div>

                                    <div class="bg-[#122134] py-6 px-8 rounded-2xl text-center relative z-10">
                                        <h3 class="text-[#2A9DD1] text-xl mb-2">{{__('Orçamento Pessoal')}}</h3>
                                        <p class="text-xs font-medium text-white mb-[28px]">
                                            Projeto feito no curso de Desenvolvimento Web Completo, aplicando o conhecimento com JavaScript com DOM e layout com Bootstrap. Nessa aplicação para usar no chrome foi utilizado Local Storage.
                                        </p>

                                        <div class="flex items-center justify-center space-x-2">
                                            <a target="_blank" href="https://github.com/azevedo2elve/projeto-orcamento-pessoal" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-brands fa-github fa-xl"></i>
                                            </a>
                                            <a target="_blank" href="https://azevedo2elve.github.io/projeto-orcamento-pessoal/index.html" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-regular fa-window-maximize fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                                {{-- Card / Maps Alert --}}
                                <article class="overflow-hidden rounded-2xl swiper-slide">
                                    <div class="relative bg-corLaravel pt-[1.5rem] -m-[.75rem] rounded-2xl">
                                        <img src="{{ asset('img/maps_alert.png') }}" alt="img" class="my-0 mx-auto relative z-5 rounded-2xl h-full">
                                    </div>

                                    <div class="bg-[#122134] py-6 px-8 rounded-2xl text-center relative z-10">
                                        <h3 class="text-[#2A9DD1] text-xl mb-2">{{__('Maps Alert')}}</h3>
                                        <p class="text-xs font-medium text-white mb-[28px]">
                                            Um projetinho básico sem muito frontend, onde pega uma URL do Waze e faz todo cálculo de latitude e logitude e pega em um raio de 5Km todos os alertas que aparecem no mesmo.
                                        </p>

                                        <div class="flex items-center justify-center space-x-2">
                                            <a target="_blank" href="https://github.com/azevedo2elve/maps_alert" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-brands fa-github fa-xl"></i>
                                            </a>
                                            {{-- <a href="#Projects" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-regular fa-window-maximize fa-xl"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                </article>

                                {{-- Card --}}
                                <article class="overflow-hidden rounded-2xl swiper-slide">
                                    <div class="relative bg-corLaravel pt-[1.5rem] -m-[.75rem] rounded-2xl">
                                        <img src="{{ asset('img/no_project.jpg') }}" alt="img" class="my-0 mx-auto relative z-5 rounded-2xl h-full">
                                    </div>

                                    <div class="bg-[#122134] py-6 px-8 rounded-2xl text-center relative z-10">
                                        <h3 class="text-[#2A9DD1] text-xl mb-2">{{__('No Projects')}}</h3>
                                        <p class="font-medium text-white mb-[28px]">
                                            Site em produção e projetos a serem adicionados.
                                        </p>

                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="#Projects" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-brands fa-github fa-xl"></i>
                                            </a>
                                            <a href="#Projects" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-regular fa-window-maximize fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                                {{-- Card --}}
                                <article class="overflow-hidden rounded-2xl swiper-slide">
                                    <div class="relative bg-corLaravel pt-[1.5rem] -m-[.75rem] rounded-2xl">
                                        <img src="{{ asset('img/no_project.jpg') }}" alt="img" class="my-0 mx-auto relative z-5 rounded-2xl h-full">
                                    </div>

                                    <div class="bg-[#122134] py-6 px-8 rounded-2xl text-center relative z-10">
                                        <h3 class="text-[#2A9DD1] text-xl mb-2">{{__('No Projects')}}</h3>
                                        <p class="font-medium text-white mb-[28px]">
                                            Site em produção e projetos a serem adicionados.
                                        </p>

                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="#Projects" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-brands fa-github fa-xl"></i>
                                            </a>
                                            <a href="#Projects" class="text-[#6A4E21] hover:text-[#c1af93] bg-[#FAA828] py-3 px-6 rounded-md font-bold hover:bg-[#7f643d]">
                                                <i class="fa-regular fa-window-maximize fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div> {{-- End Container --}}

{{-- Rodapé --}}
<footer class="bg-[#171923]">

    <div class="w-full h-2 bg-corLaravel"></div>
    {{-- Contact --}}
    <section id="Contact">

        <div class="flex flex-col md:flex-row items-center justify-center p-10">

            {{-- Contato --}}
            <div class="flex flex-col justify-center mb-10 md:mr-10">
                <div class="flex justify-center flex-row">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5515995141997&text=Ol%C3%A1,%20vim%20pelo%20seu%20portif%C3%B3lio!" class="flex items-center justify-center p-2 space-x-3 rtl:space-x-reverse">
                        <i class="fa-brands fa-whatsapp fa-4x text-white hover:text-corWhats"></i>
                    </a>
                    <a target="_blank" href="https://linkedin.com/in/azevedo2elve" class="flex items-center justify-center p-2 space-x-3 rtl:space-x-reverse">
                        <i class="fa-brands fa-linkedin fa-4x text-white hover:text-corLinkedin"></i>
                    </a>
                </div>

                <div class="flex flex-col text-center">
                    <h2 class="font-bold text-xl text-white">+55 (51) 9 9514-1997</h2>
                    <h2 class="font-bold text-xl text-white">azevedogabriel@gmail.com</h2>
                </div>
            </div>

            {{-- Contate-me --}}
            <div class="flex justify-between">
                <form class="flex flex-col shadow-lg shadow-corLaravel rounded-2xl w-64 sm:w-96">
                    <div class="flex justify-center items-center bg-corLaravel w-auto h-[100px] rounded-2xl mb-[-2rem]">
                        <h1 class="mt-[-2rem] text-2xl text-white">{{__('Fale comigo')}}</h1>
                    </div>

                    <div class="flex flex-col bg-[#122134] px-8 py-6 rounded-2xl w-auto">
                        <div class="flex flex-col">
                            <div class="flex flex-col">
                                {{-- Nome --}}
                                <label for="website-admin"
                                       class="block mb-2 text-sm font-medium text-white dark:text-white">
                                    {{__('Nome')}}
                                </label>
                                <div class="flex">
                                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-[#FAA828] rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                  <i class="fa-solid fa-user"></i>
                                                </span>
                                    <input type="text" id="website-admin"
                                           class="rounded-none rounded-e-lg bg-[#e8d4b7] text-black focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="{{__('Nome')}}">
                                </div>

                                {{-- Email --}}
                                <label for="email-address-icon"
                                       class="block mt-2 mb-2 text-sm font-medium text-white dark:text-white">
                                    {{__('Email')}}
                                </label>
                                <div class="flex">
                                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-[#FAA828] rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                  <i class="fa-solid fa-envelope"></i>
                                                </span>
                                    <input type="text" id="email-address-icon"
                                           class="rounded-none rounded-e-lg bg-[#e8d4b7] text-black focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="{{__('nome@email.com')}}">
                                </div>
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-white dark:text-white">
                                    {{__('Sua mensagem')}}
                                </label>
                                <textarea id="message" rows="4"
                                          class="block w-auto p-2.5 text-sm text-black bg-[#e8d4b7] rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Escreva uma mensagem..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="mt-2 text-[#6A4E21] bg-[#FAA828] hover:bg-[#7F643D] hover:text-[#c1af93] focus:ring-4 focus:outline-none focus:ring-[#FAA828] font-extrabold rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('Enviar')}}</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
</footer>
{{-- End Rodapé --}}

<script src="https://kit.fontawesome.com/c93c2d3a07.js" crossorigin="anonymous"></script>

</body>
</html>
