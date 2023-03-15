<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body class="bg-gray-200">
    <nav class="fixed w-full z-40">
        @include('modul_payment_online.navbar.navbar_payment_online')
        @include('modul_payment_online.navbar.sub_navbar')
    </nav>
    @include('modul_payment_online.carousel_payment_online')

    <div class="mx-auto max-w-screen-lg px-4 md:px-6 py-2.5">
        <ul class="bg-transparant mb-5 flex list-none flex-col flex-wrap border-b-0 pl-0 md:flex-row sm:flex-row xs:flex-row"
            role="tablist" data-te-nav-ref>
            <li role="presentation" class="flex-grow basis-0 text-center bg-white">
                <a href="#tabs-uang-elektronik"
                    class="block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-uang-elektronik" data-te-nav-active role="tab"
                    aria-controls="tabs-uang-elektronik" aria-selected="true">Uang Elektronik</a>
            </li>
            <li role="presentation"
                class="flex-grow basis-0 text-center bg-white lg:block md:block sm:hidden xs:hidden">
                <a href="#tabs-transfer-bank"
                    class="focus:border-transparen block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-transfer-bank" role="tab"
                    aria-controls="tabs-transfer-bank" aria-selected="false">Transfer Bank (Soon)</a>
            </li>
            <li role="presentation"
                class="flex-grow basis-0 text-center bg-white lg:block md:hidden sm:hidden xs:hidden">
                <a href="#tabs-tarik-tunai"
                    class="focus:border-transparen block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-tarik-tunai" role="tab"
                    aria-controls="tabs-tarik-tunai" aria-selected="false">Tarik Tunai (Soon)</a>
            </li>
            <li role="presentation" class="flex-grow basis-0 text-center bg-white lg:block md:hidden xs:hidden">
                <a href="#tabs-bayar-elektro"
                    class="focus:border-transparen block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-bayar-elektro" role="tab"
                    aria-controls="tabs-bayar-elektro" aria-selected="false">Bayar Elektro (Soon)</a>
            </li>
            <li role="presentation" class="sm:flex-grow basis-0 text-center bg-white lg:hidden md:block">
                <div class="cursor-pointer focus:border-transparen block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500"
                    data-te-dropdown-ref>
                    <a class=""
                        href="#" type="button" id="dropdownlainnya-pulsa" data-te-dropdown-toggle-ref
                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                        Lainnya
                    </a>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg font-medium [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownlainnya-pulsa" data-te-dropdown-menu-ref>
                        <li>
                            <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm  text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline"
                                href="#" data-te-dropdown-item-ref>Bayar Elektro (Soon) </a>
                        </li>
                        <li>
                            <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm  text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 "
                                href="#" data-te-dropdown-item-ref>Tarik Tunai (Soon)</a>
                        </li>
                        <li>
                            <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm  text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 md:hidden sm:block"
                                href="#" data-te-dropdown-item-ref>Transfer Bank (Soon)</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="mb-6">
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-uang-elektronik" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>
                @include('modul_payment_online.menu_pembelian.keuangan.uang_elektronik')
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-transfer-bank" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                Soon
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-tarik-tunai" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                Soon
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-bayar-elektro" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                Soon
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-lainnya" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                Soon
            </div>
        </div>
    </div>
    <div class="mt-10">
        @include('landing_page.footer')
    </div>
</body>

</html>
