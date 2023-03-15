<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body class="bg-gray-200 relative">
    <!-- Header -->
    <!-- use fixed to fix the navbar -->
    @include('landing_page.navbar')
    <div class="mx-auto my-auto ">
        <div class=" bg-white pb-5 pt-32 lg:pt-28 md:pt-16 sm:pt-16 xs:pt-16">
            <div class="container mx-auto pt-7">
                <div class="grid grid-cols-3 gap-3 h-auto md:grid-cols-3 sm:grid-cols-3 xs:grid-cols-1">
                        <!-- carousel -->
                            @include('landing_page.carousel')
                    <!-- Info Terbaru -->
                    <div class="text-xs text-white sm:pr-2">
                        @include('landing_page.info_terbaru')
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto my-3 pb-3">
            <!-- Kategori -->
            <div class="grid grid-cols-3 gap-3 h-auto md:grid-cols-3 sm:grid-cols-3 xs:grid-cols-1">
                <div class="col-span-2 bg-white flex p-4 rounded">
                    @include('landing_page.payment_online')
                </div>
                <div class="bg-white rounded w-full">
                    @include('landing_page.info_uang')
                </div>
            </div>
        </div>
    </div>
    @include('landing_page.e_merchant_promo')
    @include('landing_page.e_merchant')
    @include('landing_page.footer')

    <a href="#" class="fixed bottom-5 right-5 w-10 h-10 bg-orange-400 rounded-full flex">
        <span class="m-auto text-xl text-white"><i class="fa-solid fa-arrow-up"></i></span>
    </a>
</body>

</html>