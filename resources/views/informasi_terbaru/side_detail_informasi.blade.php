<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="max-w-xs lg:max-w-xs sm:w-full h-full lg:h-full md:h-full sm:h-full xs:h-full rounded shadow border-2 border-gray-200 bg-white mr-4 mx-4 sm:my-3 xs:my-3">
        @for ($i = 0; $i < 5; $i++)
        <a href="" class="">
            <div class="border-b-2 m-3 hover:bg-orange-juallagi_cerah rounded transition delay-150 duration-150">
                <div class="grid grid-cols-2  px-1 py-3 md:py-3 sm:py-2 xs:py-1">
                    <img src="{{ asset('storage/images/info_update/info_update1.jpeg') }}" alt="" class="rounded border-2 md:pt-0 sm:mt-2 xs:mt-3">
                    <div class="ml-2">
                        <div class="">
                            <span class="text-xs md:text-xs sm:text-[11px] xs:text-[11px] font-medium leading-none tracking-tight">
                                Lorem ipsum dolor sit
                            </span>
                            <p class="text-justify text-xs md:text-xs sm:text-[11px] xs:text-[11px] leading-tight tracking-tight">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                    </div>
                </div>
            </div>
        </a>
        @endfor
    </div>
</body>

</html>