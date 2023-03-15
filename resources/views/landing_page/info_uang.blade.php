<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juallagi</title>
</head>

<body>
    <div class="py-2 px-4 border-b-4">
        <div class="grid grid-cols-2 gap-2">
            <div class="ml-3">
                <span class="text-base md:text-base sm:text-sm xs:text-xs font-medium">Jumlah Saldo</span>
            </div>
            <div class="flex md:py-0 sm:py-3">
                <span class="text-xs font-normal">Rp</span>
                <span class="font-semibold md:text-base sm:text-sm">100.000</span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-3 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 mx-4 my-3">
        <div class="grid grid-rows-2 ml-2">
            <div class="my-1">
                    <div class="flex md:flex">
                        <div class="ml-1 mr-1.5 text-blue-juallagi">
                            <p class="text-3xl md:text-3xl sm:text-2xl "><i class="fa-solid fa-wallet"></i></p>
                        </div>
                        <a href="/top-up-saldo" class="mt-1.5 md:mt-1 sm:ml-1 sm:mt-1 hover:text-blue-juallagi"><span class="text-sm sm:text-sm xs:text-xs font-medium">Top Up Saldo</span></a>
                    </div>
            </div>
            <div class="my-1">
                <a href="" @disabled(true)>
                    <div class="flex">
                        <div class="ml-1 mr-1.5 text-blue-juallagi">
                            <p class="text-3xl md:text-3xl sm:text-2xl"><i class="fa-solid fa-money-bills"></i></p>
                        </div>
                        <div>
                            <div class="flex -mb-2">
                                <span class="text-xs font-normal mr-0.5">Rp</span>
                                <span class="font-semibold md:text-base sm:text-sm">50.000</span>
                            </div>
                            <span class="text-xs font-medium">Komisi</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="grid grid-rows-2 lg:ml-0 md:ml-2 sm:ml-2">
            <div class="my-1 sm:my-0">
                <a href="" @disabled(true)>
                    <div class="flex">
                        <div class="ml-1 mr-1.5 text-blue-juallagi">
                            <p class="text-3xl  md:text-3xl sm:text-2xl"> <i class="fa-solid fa-circle-check"></i></p>
                        </div>
                        <div class=" sm:ml-1">
                            <div class="flex -mb-2">
                                <span class="text-xs font-normal mr-0.5">Rp</span>
                                <span class="font-semibold md:text-base sm:text-sm">50.000</span>
                            </div>
                            <span class="text-xs font-medium text-orange-400">Aktivasi</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-1">
                <a href="" @disabled(true)>
                    <div class="flex">
                        <div class="ml-1 mr-1.5 text-blue-juallagi">
                            <p class="text-3xl md:text-3xl sm:text-2xl"><i class="fa-solid fa-qrcode"></i></p>
                        </div>
                        <div class="sm:ml-1">
                            <div class=" flex -mb-2">
                                <span class="text-xs font-normal mr-0.5">Rp</span>
                                <span class="font-semibold md:text-base sm:text-sm">50.000</span>
                            </div>
                            <span class="text-xs font-medium ">Merchant Qris</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</body>

</html>