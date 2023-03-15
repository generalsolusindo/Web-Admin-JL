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

    <div class="mx-auto max-w-screen-lg px-4 lg:px-4 sm:px-2 xs:px-2 md:px-6 py-5 bg-white ">
        <span class="px-3 text-md font-medium uppercase">Provider</span>
        <div class="px-3 my-3">
            <ul class="flex flex-wrap text-sm font-medium sm:justify-start xs:justify-around">
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0878';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/xl.png') }}" alt=""
                                class="w-16 mx-auto justify-center mt-2">
                            <div class="pt-4 ">
                                <p class="text-sm font-medium text-md uppercase">XL-Axiata</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0831';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/axis.png') }}" alt=""
                                class="w-16 mx-auto my-2 justify-center">
                            <div class="pt-4 ">
                                <p class="text-sm font-medium text-md uppercase">axis</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0856';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/indosat.png') }}" alt=""
                                class="w-16 mx-auto my-3 justify-center">
                            <div class="pt-4 ">
                                <p class="text-sm font-medium text-md uppercase">im3 oredoo</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0811';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/telkomsel.png') }}" alt=""
                                class="w-28 mx-auto justify-center mt-2">
                            <div class="pt-4 ">
                                <p class="text-sm font-medium text-md uppercase">Telkomsel</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0891';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/three.png') }}" alt=""
                                class="w-9 mx-auto my-2 justify-center">
                            <div class="pt-4 ">
                                <p class="text-sm font-medium text-md uppercase">three</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-1">
                    @php
                        $kategori = '0882';
                    @endphp
                    <a href="{{ url('voucherskategori', $kategori) }}">
                        <div
                            class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-36 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <img src="{{ asset('storage/images/provider_internet/smartfren.jpg') }}" alt=""
                                class="w-16 mx-auto my-3 justify-center">
                            <div class="pt-3 ">
                                <p class="text-sm font-medium text-md uppercase">Smartfren</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mt-10">
        @include('landing_page.footer')
    </div>
</body>

</html>
