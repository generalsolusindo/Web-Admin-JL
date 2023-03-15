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
        <span class="px-3 text-md font-medium uppercase">Paket XL </span>
        <div class="px-3 my-3">
            <ul class="flex flex-wrap text-sm font-medium">
                <li class="my-2 mr-6 lg:mr-6 xs:mr-2.5">
                    <a href="/pilih-voucher">
                        <div class="text-center h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-40 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <div class="pt-8 px-3 ">
                                <p class="text-sm font-medium text-md uppercase">v. xtra combo flex</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-6 lg:mr-6 xs:mr-2.5">
                    <a href="">
                        <div class="text-center  h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-40 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <div class="pt-8 px-3 ">
                                <p class="text-sm font-medium text-md uppercase">inject voucher XL</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-6 lg:mr-6 xs:mr-2.5">
                    <a href="">
                        <div class="text-center  h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-40 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <div class="pt-8 px-3 ">
                                <p class="text-sm font-medium text-md uppercase">v. xl combolite</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-6 lg:mr-6 xs:mr-2.5">
                    <a href="">
                        <div class="text-center  h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-40 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <div class="pt-8 px-3 ">
                                <p class="text-sm font-medium text-md uppercase">v. xl hodrod spesial</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="my-2 mr-6 lg:mr-6 xs:mr-2.5">
                    <a href="">
                        <div class="text-center  h-28 w-36 lg:w-36 md:w-36 sm:w-40 xs:w-40 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <div class="pt-8 px-3 ">
                                <p class="text-sm font-medium text-md uppercase">v. xl hodrod mini</p>
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
