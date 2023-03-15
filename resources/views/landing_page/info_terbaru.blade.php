<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="">
        <div class="text-black mb-2 text-sm font-bold">
            <span class="">Informasi Terbaru</span>
        </div>
        <div class="pb-1">
            <div class="mb-1 h-auto rounded">
                <a href="#">
                    <img src="{{ asset('storage/images/info_update/info_update1.jpeg') }}" alt=""
                        class="h-32 w-full border border-black rounded p-1 lg:h-32 md:h-40 sm:w-full">
                </a>
            </div>
            <div class="h-auto rounded lg:block md:hidden sm:hidden xs:hidden">
                <a href="#">
                    <img src="{{ asset('storage/images/info_update/info_update2.jpeg') }}" alt=""
                        class="h-32 w-full border border-black rounded p-1 md:h-32 sm:w-full">
                </a>
            </div>
        </div>
        <a href="/informasi_terbaru" >
            <div class="w-full cursor-pointer text-white bg-black hover:bg-orange-juallagi_gelap p-2 text-xs rounded text-center font-medium ">
                Lihat Selengkapnya
            </div>
            
        </a>
    </div>
</body>

</html>
