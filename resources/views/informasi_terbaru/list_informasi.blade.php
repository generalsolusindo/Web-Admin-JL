<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <div class="pt-16">
        <div class="mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-md sm:max-w-screen-sm xs:max-w-screen-xs py-2.5">
            <div class="">
                <div class="flex flex-wrap">
                    @for ($i = 0; $i < 6; $i++)
                        <div
                            class="max-w-sm lg:w-full md:full sm:w-full rounded shadow border-2 border-gray-200 bg-white mr-4 lg:mr-4 md:mr-4 sm:mr-3 xs:mr-0 mb-4 transition ease-in-out delay-150 hover:scale-105 hover:shadow-lg duration-300">
                            <img src="{{ asset('storage/images/info_update/info_update1.jpeg') }}" class="h-48 lg:h-48 md:h-36 sm:h-32 xs:h-28 mx-auto justify-center pt-2"
                                alt="">
                            <div class="p-5">
                                <span class="text-black font-semibold text-sm">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit</span>
                                <p class="text-xs font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, </p>
                            </div>
                            <div class="py-3 border-t-2 px-4">
                                <a href="/detail_informasi" class="justify-center items-center mx-auto flex">
                                    <button type="button"
                                        class="bg-orange-juallagi_gelap hover:bg-orange-400 items-center w-full p-2 rounded text-sm font-medium text-white">
                                        Lihat Detail
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>

</html>
