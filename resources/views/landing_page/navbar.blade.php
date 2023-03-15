<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="w-full bg-orange-juallagi_gelap text-white fixed z-40">
        <div class="block lg:block md:hidden sm:hidden xs:hidden">
            <div class="container mx-auto py-1">
                <!-- Navbar Top -->
                <div class="grid grid-cols-2">
                    <div id="column-1" class="text-xs">
                        <ul class="flex">
                            <a href="">
                                <li class="pr-2 mr-2 border-r-2">Seller Center</li>
                            </a>
                            <li class="pr-2 mr-2 border-r-2">Download</li>
                            <li class="pr-2 mr-2 inline-flex">Ikuti kami di
                                <ul class="flex">
                                    <li class="pl-1">
                                        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                    </li>
                                    <li class="pl-1">
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="pl-1">
                                        <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="column-2" class="text-xs">
                        <ul class="flex justify-end">
                            <li class=""> <i class="fa-regular fa-bell"></i>
                                <span class="pr-3">Notifikasi</span>
                            </li>
                            <li class=""><i class="fa-regular fa-circle-question"></i><span
                                    class="px-1">Bantuan</span>
                            </li>
                            <li class="px-2">
                                <button id="language-dropdown" data-dropdown-toggle="data-dropdown"
                                    data-dropdown-placement="right-start" type="button" class=""><i
                                        class="fa-solid fa-globe pr-1"></i>Bahasa Indonesia <i
                                        class="fa-sharp fa-solid fa-angle-down pl-1"></i></button>
                                <div id="data-dropdown" class="hidden bg-white divide-y divide-gray-100 shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="language-dropdown">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Bahasa
                                                Indonesia</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">English</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="pl-8 pr-2 border-r-2 font-semibold"><a href="">Daftar</a></li>
                            <li class="pl-2 font-semibold"><a href="">Log In</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Navbar middle -->
                <div class="grid grid-cols-6 pt-4">
                    <div class="order-1 mt-1">
                        <a href="/"
                            class="text-xl font-semibold whitespace-nowrap order-1"><span>Juallagi</span></a>
                    </div>
                    <div class="col-start-2 col-end-6 relative flex order-2">
                        <input type="text"
                            class="h-10 w-full focus:outline-none text-sm text-gray-900 rounded px-5 pr-10"
                            placeholder="Search...">
                        <button type="submit"
                            class="block absolute w-16 h-8 rounded top-1 right-1 bg-orange-400 hover:bg-orange-juallagi_gelap">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="order-3 ml-9 mt-3">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
                <div class="justify-center flex text-xs text-white py-2">
                    <ul class="flex">
                        <li class="pr-4">
                            <span>Kategori A</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori B</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori C</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori D</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori E</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori F</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori G</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori H</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori I</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori J</span>
                        </li>
                        <li class="pr-4">
                            <span>Kategori K</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- responsive --}}
        <div class="block lg:hidden">
            <div class="max-w-screen-xl sm:max-w-screen-sm xs:max-w-screen-xs mx-auto py-4">
                <!-- Navbar middle -->
                <div class="grid grid-cols-2">
                    <div>
                        <a href="/" class="text-xl font-semibold whitespace-nowrap"><span>Juallagi</span></a>
                    </div>
                    <div class="flex justify-end">
                        <div class="ml-5 mt-1">
                            <i class="fa-regular fa-bell"></i>
                        </div>
                        <div class="ml-5 mt-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="ml-8 mt-1">
                            <button data-collapse-toggle="navbar-responsive" type="button">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:w-auto" id="navbar-responsive">
                    <div class="my-2">
                        <div class="relative mt-3 md:hidden">
                            <div class="w-full relative flex order-2">
                                <input type="text"
                                    class="h-10 w-full focus:outline-none text-sm text-gray-900 rounded px-5 pr-10"
                                    placeholder="Search...">
                                <button type="submit"
                                    class="block absolute w-16 h-8 rounded top-1 right-1 bg-orange-400 hover:bg-orange-juallagi_gelap">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sm:text-sm xs:text-xs">
                        <div class="text-orange-juallagi_gelap font-medium text-center py-3 rounded-lg">
                            <ul class="flex flex-wrap">
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori A</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori B</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori C</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori D</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori E</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg my-2 mx-2">
                                    <span>Kategori F</span>
                                </li>
                            </ul>
                        </div>
                        <div class="text-orange-juallagi_gelap font-medium text-center py-3 rounded-lg">
                            <ul class="flex justify-between">
                                <li class="bg-white py-2 text-center px-2 rounded-lg"><i
                                        class="fa-regular fa-circle-question"></i><span class="px-1">Bantuan</span>
                                </li>
                                <li class="bg-white py-2 text-center px-2 rounded-lg">
                                    <button id="language-dropdown" data-dropdown-toggle="navresp-dropdown"
                                        data-dropdown-placement="bottom" type="button" class=""><i
                                            class="fa-solid fa-globe pr-1"></i>Bahasa Indonesia <i
                                            class="fa-sharp fa-solid fa-angle-down pl-1"></i></button>
                                    <div id="navresp-dropdown"
                                        class="hidden bg-white divide-y divide-gray-100 shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="language-dropdown">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Bahasa
                                                    Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100">English</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white text-orange-juallagi_gelap font-medium text-center py-3 rounded-lg">
                            <span class="">Download Aplikasi Juallagi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>