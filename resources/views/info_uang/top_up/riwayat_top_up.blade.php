<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <divnk rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <title>Document</title>
</head>

<body class="bg-gray-200">
    <nav class="fixed w-full z-40">
        @include('info_uang.navbar.navbar_top_up')
    </nav>
    <div class="pt-16">
        <div
            class="justify-between mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-sm sm:max-w-screen-xs xs:max-w-screen-xs">
            <div>
                <div class="bg-white py-3 text-center">
                    <span class="font-medium text-lg md:text-lg sm:text-base xs:text-sm">Riwayat Top Up Saldo</span>
                </div>
                <div class="sticky top-10">
                    <div class="sticky mb-5 flex flex-col lg:flex-row border-b-0 pl-0 overflow-x-scroll lg:overscroll-none hide-scroll-bar text-sm md:text-sm sm:text-xs xs:text-xs"
                        role="tablist" data-te-nav-ref>
                        <div class="flex flex-nowrap w-full">
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#all-top-up"
                                    class="bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#all-top-up" data-te-nav-active role="tab"
                                    aria-controls="all-top-up" aria-selected="true">all</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#berhasil"
                                    class="bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap "
                                    data-te-toggle="pill" data-te-target="#berhasil" role="tab"
                                    aria-controls="berhasil" aria-selected="false">Berhasil</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#sedang-proses"
                                    class="bg-white focus:border-transparen my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                                    data-te-toggle="pill" data-te-target="#sedang-proses" role="tab"
                                    aria-controls="sedang-proses" aria-selected="false"><span
                                        class="block sm:hidden xs:hidden">Sedang</span> diproses</a>
                            </div>
                            <div role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#gagal"
                                    class="bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap "
                                    data-te-toggle="pill" data-te-target="#gagal" role="tab" aria-controls="gagal"
                                    aria-selected="false">Gagal</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-6">
                        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="all-top-up" role="tabpanel" aria-labelledby="all-top-up" data-te-tab-active>
                            @include('info_uang.top_up.all_top_up')
                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="berhasil" role="tabpanel" aria-labelledby="berhasil">
                            @include('info_uang.top_up.berhasil_top_up')
                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="sedang-proses" role="tabpanel" aria-labelledby="sedang-proses">
                            @include('info_uang.top_up.proses_top_up')
                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="gagal" role="tabpanel" aria-labelledby="gagal">
                            @include('info_uang.top_up.gagal_top_up')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        @include('landing_page.footer')
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
