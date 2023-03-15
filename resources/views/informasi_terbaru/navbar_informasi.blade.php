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
    <nav class="bg-orange-juallagi_gelap border-gray-200 text-white fixed w-full z-40">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <div class="flex">
                <button onclick="history.back()" class="text-white mr-4"><i class="fa-solid fa-angle-left"></i></button>
                <a href="/" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Juallagi</span>
                </a>
            </div>
            <div class="flex items-center text-sm xs:text-xs">
                <a href="/informasi_terbaru" class="mr-6 xs:mr-2">
                    <span
                        class="self-center text-lg xs:text-sm font-semibold whitespace-nowrap text-white">Informasi</span>
                </a>
                <a href="#" class="pr-3 font-medium hover:underline border-r-2">Login</a>
                <a href="#" class="pl-3 font-medium hover:underline">Register</a>
            </div>
        </div>
    </nav>
</body>

</html>
