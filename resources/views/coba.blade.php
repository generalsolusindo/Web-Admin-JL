<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-gray-200">
    @include('landing_page.navbar')
    <div class="pt-24">
        <div
            class="justify-between mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-sm sm:max-w-screen-xs xs:max-w-screen-xs pt-7">
            <div>
                <div class="bg-white py-3 text-center my-2">
                    <span class="font-medium text-lg">Riwayat Pembelian</span>
                </div>
                <div class="sticky top-0">
                    <div
                        class="mb-5 flex flex-col lg:flex-row border-b-0 pl-0 sticky overflow-x-scroll lg:overscroll-none hide-scroll-bar " role="tablist" data-te-nav-ref>
                        <div class="flex flex-nowrap w-full">
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#pulsa" class="h-[70px] bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#pulsa" data-te-nav-active
                                    role="tab" aria-controls="pulsa" aria-selected="true">Pulsa</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center ">
                                <a href="#paket-data"
                                    class="h-[70px] bg-white focus:border-transparen my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#paket-data" role="tab"
                                    aria-controls="paket-data" aria-selected="false">Paket Data</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#voucher-internet"
                                    class="h-[70px] bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap "
                                    data-te-toggle="pill" data-te-target="#voucher-internet" role="tab"
                                    aria-controls="voucher-internet" aria-selected="false">Voucher Internet</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#games"
                                    class="h-[70px] bg-white focus:border-transparen my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#games" role="tab"
                                    aria-controls="games" aria-selected="false">Games</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#token-listrik"
                                    class="h-[70px] bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap "
                                    data-te-toggle="pill" data-te-target="#token-listrik" role="tab"
                                    aria-controls="token-listrik" aria-selected="false">Token Listrik</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#keuangan"
                                    class="h-[70px] bg-white focus:border-transparen my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#keuangan" role="tab"
                                    aria-controls="keuangan" aria-selected="false">Keuangan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-6">
                    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="pulsa" role="tabpanel" aria-labelledby="pulsa" data-te-tab-active>
                        @include('modul_payment_online.history_pay_on.history_pulsa')
                    </div>
                    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="paket-data" role="tabpanel" aria-labelledby="paket-data">
                        @include('modul_payment_online.history_pay_on.history_paket')
                    </div>
                    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="voucher-internet" role="tabpanel" aria-labelledby="voucher-internet">
                        @include('modul_payment_online.history_pay_on.history_voucher_internet')
                    </div>
                    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="games" role="tabpanel" aria-labelledby="games">
                        @include('modul_payment_online.history_pay_on.history_games')
                    </div>
                    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="token-listrik" role="tabpanel" aria-labelledby="token-listrik">
                        @include('modul_payment_online.history_pay_on.history_token_listrik')
                    </div>
                    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="keuangan" role="tabpanel" aria-labelledby="keuangan">
                        @include('modul_payment_online.history_pay_on.history_keuangan')
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>

    </div>
    </div>
    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>

</body>

</html>
