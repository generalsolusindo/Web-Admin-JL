<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="pt-24 lg:pt-24 md:pt-32 sm:pt-24 xs:pt-24">
        <div class="items-center mx-auto max-w-screen-lg px-4 md:px-6 py-4 ">
            <div id="indicators-carousel" class="relative h-80 lg:h-80 md:h-60 sm:h-60 xs:h-32 bg-black " data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden h-80 lg:h-80 md:h-60 sm:h-60 xs:h-32">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{asset('storage/images/carousel/carousel1.jpeg')}}" class=" w-full block">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('storage/images/carousel/carousel2.jpeg')}}" class="block w-full">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('storage/images/carousel/carousel1.jpeg')}}" class="block w-full">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('storage/images/carousel/carousel2.jpeg')}}" class="block w-full">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('storage/images/carousel/carousel1.jpeg')}}" class="block w-full">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none text-white font-bold">
                        <i class="fa-solid fa-chevron-left"></i>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none text-white font-bold">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>

</body>

</html>