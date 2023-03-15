<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <div class="mx-auto max-w-screen-lg px-4 lg:px-4 sm:px-2 xs:px-2 md:px-6 py-5 bg-white ">
        <span class="px-3 text-md font-medium uppercase">Uang Elektronik</span>
        <div class="px-3 my-3">
            <ul class="flex flex-wrap text-sm font-medium">
                @foreach ($keuangan['produk'] as $emoney)
                        <li class="mr-2 my-2">
                            @php
                                $detailKategori = $emoney[0];
                                $idKategori = $emoney[1];

                            @endphp
                            <a href="/detailKeuangan/{{$detailKategori}}/{{$idKategori}}">
                                <div
                                    class="text-center h-28 w-40 lg:w-40 md:w-40 sm:w-36 xs:w-36 border-2 border-gray-200 pt-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                                    @foreach ($images as $img)
                                        @if ($img[0] === $emoney[1])
                                            <img src="{{$img[1]}}"
                                                alt=""
                                                class="h-16 p-1 lg:h-16 md:h-16 sm:h-12 xs:h-12 mx-auto justify-center">
                                            <div class="py-1 ">
                                                <p class="text-sm font-normmediumal uppercase">{{$emoney[1]}}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </a>
                        </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>

</html>
