<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="fixed w-full z-40">
        @include('modul_payment_online.navbar.navbar_payment_online')
        @include('modul_payment_online.navbar.sub_navbar')
    </nav>
    @include('modul_payment_online.carousel_payment_online')
    <div class="mx-auto max-w-screen-lg px-4 md:px-6 py-2.5"">
        <span class="px-3 text-xl font-bold font-sans my-2">Voucher Xl Axiata</span>
        <div class="px-3 mt-4">
            <ul class="flex flex-wrap text-sm font-medium sm:justify-start xs:justify-around">
                @foreach ($vouchers['produk'] as $voucher)
                    @if ($voucher[0] === 'VOUCHER')
                        <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-2">
                            <div
                                class="text-center h-24 w-36 lg:w-40 md:w-40 sm:w-40 xs:w-36 lg:py-4 lg:px-4 md:py-7 sm:py-9 xs:py-9 rounded-lg border-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                                <span class="text-sm lg:text-sm md:text-sm xs:text-xs">{{ $voucher[1] }}</span>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="border-t-4 mt-10">
        @include('landing_page.footer')
    </div>
</body>

</html>
