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
        <ul class="bg-transparant mb-5 flex list-none flex-col flex-wrap border-b-0 pl-0 md:flex-row sm:flex-row xs:flex-row" role="tablist" data-te-nav-ref>
            <li role="presentation" class="flex-grow  text-center bg-white">
                <a href="#tabs-pulsa"
                    class="block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm sm:text-sm xs:text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-pulsa" data-te-nav-active role="tab"
                    aria-controls="tabs-pulsa" aria-selected="true">Voucher Games</a>
            </li>
            <li role="presentation" class="flex-grow  text-center bg-white">
                <a href="#tabs-paket-data"
                    class="focus:border-transparen block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm sm:text-sm xs:text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                    data-te-toggle="pill" data-te-target="#tabs-paket-data" role="tab"
                    aria-controls="tabs-paket-data" aria-selected="false">Top Up Games</a>
            </li>
        </ul>
        <div class="mb-6">
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-pulsa" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>
                @include('modul_payment_online.menu_pembelian.games.voucher_games')

            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-paket-data" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                @include('modul_payment_online.menu_pembelian.games.top_up_games')
            </div>
        </div>
    </div>
        <div class="mt-10">
            @include('landing_page.footer')
        </div>
</body>

</html>
