<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-200">
    @include('Informasi_terbaru.navbar_informasi')
    <div class="pt-16 pb-5">
        <div class="flex lg:flex-row md:flex-row sm:flex-col xs:flex-col justify-between mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-xl sm:max-w-screen-sm xs:max-w-screen-xs py-2.5">
            <div class="detail-informasi-container mx-4">
                <div class="w-full rounded shadow border-2 border-gray-200 bg-white py-4 ">
                    <div id="detail_informasi_container">
                        <div class="p-3 max-w-xl mx-auto">
                            <img src="{{ asset('storage/images/info_update/info_update1.jpeg') }}" alt="">
                        </div>
                        <!-- Judul -->
                        <div class="border-t-2 my-2 py-3 px-12 text-lg font-semibold lg:text-lg md:text-md sm:text-xs xs:text-xs">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
                        </div>
                        <!-- Deskripsi -->
                        <div class="pb-3 px-12 text-sm lg:text-sm md:text-xs sm:text-[11px] xs:text-[11px]">
                            <span class="font-semibold uppercase">Deskripsi</span>
                            <p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- Syarat dan Ketentuan -->
                        <div class="pb-3 px-12 text-sm lg:text-sm md:text-xs sm:text-[11px] xs:text-[11px]">
                            <span class="font-semibold uppercase">Syarat dan Ketentuan</span>
                            <ul class="pt-3 pl-4 text-justify list-decimal leading-6">
                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto <span id="dots">...</span> </li>
                                <div id="more-text" class="hidden">
                                    <li class="">beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</li>
                                    <li>dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</li>
                                    <li>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</li>
                                    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto </li>
                                    <li>beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</li>
                                    <li>dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</li>
                                    <li>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</li>
                                </div>
                            </ul>
                        </div>
                        <div class="py-3 justify-center flex border-t-2 lg:text-base md:text-xs sm:text-[11px] xs:text-[11px]">
                            <button id="btn-readmore" onclick="readmoreFunction()" >
                                Show More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @include('informasi_terbaru.side_detail_informasi')
        </div>
    </div>
    @include('landing_page.footer')
    <script>
        function readmoreFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more-text");
            var btnText = document.getElementById("btn-readmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>

</html>