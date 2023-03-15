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
        <span class="px-3 text-md font-medium uppercase">Games</span>
        <div class="px-3 my-3">
            <ul class="flex flex-wrap text-sm font-medium sm:justify-start xs:justify-around">
                @foreach ($games['produk'] as $game)
                    @if ($game[0] === 'VOUCHER-GAME')
                        <li class="mr-1 my-2">
                            @php
                                $detailKategori = $game[1];
                            @endphp
                            <a href="{{ url('DetailGameVoucher', $detailKategori) }}">
                                <div
                                    class="text-center p-1 h-32 w-40 lg:w-40 md:w-40 sm:w-36 xs:w-32 border-2 border-gray-200 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                                    @foreach ($images as $img)
                                        @if ($img[0] === $game[1])
                                            <img src="{{ $img[1] }}" alt=""
                                                class="h-12 p-1 lg:h-12 md:h-12 sm:h-10 xs:h-10 mx-auto justify-center">
                                            <div class="pt-3">
                                                <p class="text-sm font-medium uppercase">{{ $game[1] }}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>
