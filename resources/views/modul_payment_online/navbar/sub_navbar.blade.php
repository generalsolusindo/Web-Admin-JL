<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 pt-3 mx-auto md:px-6 sm:px-3 xs:px-2">
            <div class="flex items-center ml-2 justify-around">
                <ul
                    class="flex flex-row mt-0 space-x-12 lg:space-x-12 md:space-x-6 sm:space-x-4 xs:space-x-2 text-sm font-medium">
                    <li class="hover:border-b-2 border-black p-2 ">
                        <a href="/menu-pulsa-dan-paket-data" class="text-gray-900 dark:text-white"
                            aria-current="page">Pulsa & Paket Data</a>
                    </li>
                    <li class="block lg:block md:block sm:block xs:hidden hover:border-b-2 border-black p-2">
                        <a href="/voucher-internet" class="text-gray-900 dark:text-white">Voucher Internet</a>
                    </li>
                    <li class="block lg:block md:block sm:hidden xs:hidden hover:border-b-2 border-black p-2">
                        <a href="/voucher-games" class="text-gray-900 dark:text-white">Games</a>
                    </li>
                    <li class="block lg:block md:block sm:hidden xs:hidden hover:border-b-2 border-black p-2">
                        <a href="/token-listrik" class="text-gray-900 dark:text-white">Token Listrik</a>
                    </li>
                    <li class="block lg:block md:block sm:hidden xs:hidden hover:border-b-2 border-black p-2">
                        <a href="/keuangan" class="text-gray-900 dark:text-white">Keuangan</a>
                    </li>
                    <li class="hover:border-b-2 border-black p-2">
                        <div class="relative" data-te-dropdown-ref>
                            <a class=""
                                href="#" type="button" id="menulainnya-subnavbar" data-te-dropdown-toggle-ref
                                aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                Menu Lainnya
                            </a>
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                                aria-labelledby="menulainnya-subnavbar" data-te-dropdown-menu-ref>
                                <li>
                                    <a href="/voucher-internet" class="lg:hidden md:hidden sm:hidden xs:block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Voucher Internet</a>
                                </li>
                                <li>
                                    <a href="/voucher-games" class="lg:hidden md:hidden sm:block xs:block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Games</a>
                                </li>
                                <li>
                                    <a href="/token-listrik" class="block lg:hidden md:hidden sm:block xs:block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Token Listrik</a>
                                </li>
                                <li>
                                    <a href="/keuangan" class="block lg:hidden md:hidden sm:block xs:block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Keuangan</a>
                                </li>
                                <li>
                                    <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Wifi.Id</a>
                                </li>
                                <li>
                                    <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Promo Paket</a>
                                </li>
                                <li>
                                    <a @disabled(true) class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Logistic</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
