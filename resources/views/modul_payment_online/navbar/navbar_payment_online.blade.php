<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <nav class="bg-orange-juallagi_gelap border-gray-200 text-white">
        <div
            class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5 lg:flex md:flex sm:hidden xs:hidden">
            
            <div class="flex">
                <button onclick="history.back()" class="text-white mr-4"><i class="fa-solid fa-angle-left"></i></button>
                <a href="/" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Juallagi</span>
                </a>
            </div>
            <div class="flex items-center">
                <a href="/riwayat-pembelian" class="mr-6 text-sm font-medium"><i class="fa-solid fa-clipboard-list"></i>
                    Riwayat Pesanan</a>
                <a href="" class="mr-6 text-sm font-medium"><i class="fa-solid fa-clipboard-list"></i> Lihat
                    Pesanan</a>
                <a href="#" class="pr-3 text-sm font-medium hover:underline border-r-2">Login</a>
                <a href="#" class="pl-3 text-sm font-medium hover:underline">Register</a>
            </div>
        </div>
        {{-- Responsive --}}
        <div class="hidden sm:hidden xs:block">
            <div class="max-w-screen-xl sm:max-w-screen-sm xs:max-w-screen-xs mx-auto py-4">
                <div class="grid grid-cols-2">
                    <div class="flex">
                        <button onclick="history.back()" class="text-white mr-4"><i class="fa-solid fa-angle-left"></i></button>
                        <a href="/" class="flex items-center">
                            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Juallagi</span>
                        </a>
                    </div>
                    <div class="flex justify-end">
                        <div class="ml-8 mt-1">
                            <a href="/riwayat-pembelian"><i class="fa-solid fa-clipboard-list"></i></a>
                        </div>
                        <div class="ml-6 mt-1">
                            <button data-collapse-toggle="navbar-payment" type="button">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="navbar-payment" class="hidden w-full items-center bg-white mt-4 rounded py-3">
                    <div class="flex mx-auto justify-center text-sm font-medium text-orange-juallagi_gelap">
                        <a href="" class="mx-4">Login</a>
                        <a href="" class="mx-4">Register</a>
                    </div>
                </div>
            </div>
    </nav>
</body>

</html>
