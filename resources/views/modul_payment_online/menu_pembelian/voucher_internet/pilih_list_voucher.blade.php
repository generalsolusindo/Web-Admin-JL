<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.toString().replace(/[^,\d]/g, ''),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? (rupiah ? 'Rp' + rupiah : '') : rupiah;
        }
    </script>
</head>

<body>
    <nav class="fixed w-full z-40">
        @include('modul_payment_online.navbar.navbar_payment_online')
        @include('modul_payment_online.navbar.sub_navbar')
    </nav>
    @include('modul_payment_online.carousel_payment_online')
    <div class="mx-auto max-w-screen-lg px-4 md:px-6 py-2.5"">
        <span class="px-3 text-xl font-bold font-sans my-2">{{ $vouchers['kategori'] }}</span>
        <div class="px-3 mt-4">
            <ul class="flex flex-wrap text-sm font-medium sm:justify-start xs:justify-around">
                @foreach ($vouchers['produk'] as $voucher)
                    @if ($voucher[3] === 'VOUCHER')
                        <li class="my-2 mr-1.5 lg:mr-1.5 xs:mr-2">
                            @php
                                $kategori = $voucher[1];
                                $harga = $voucher[2];
                            @endphp
                            <button onclick="myClickButton('<?php echo $kategori;?>', '<?php echo $harga;?>')">
                                <div class="text-center h-auto w-36 lg:w-52 md:w-40 sm:w-40 xs:w-36 lg:py-4 lg:px-4 md:py-7 sm:py-9 xs:py-9 rounded-lg border-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200 cursor-pointer"
                                    >
                                    <span class="text-xs lg:text-xs md:text-xs xs:text-xs">{{ $voucher[0] }}</span>
                                    <p class="font-normal">{{ $voucher[1] }}</p>
                                    <p class="text-sm font-medium">
                                        <script>
                                            document.write(formatRupiah("<?php echo $voucher[2]; ?>"));
                                        </script>
                                    </p>
                                </div>
                            </button>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
        <div class="mt-4 border-t-2 pt-3">
            <div class="grid grid-cols-2">
                <div class="lg:text-base xs:text-sm">
                    <span class="font-medium">Harga</span>
                    <div id="harga-voucher">-</div>
                </div>
                <div class="font-medium text-white  ">
                    <a href="/checkout-voucher-internet">
                        <Button
                            class="bg-orange-400 p-3 mt-2 md:mt-2 sm:mt-2 xs:mt-0 rounded-xl w-48 md:w-48 sm:w-48 xs:w-32  float-right">
                            Bayar
                        </Button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t-4 mt-10">
        @include('landing_page.footer')
    </div>
    <script type="text/javascript" src="{{asset('storage/js/modul_payment_online/myClickButton.js')}}"></script>
</body>

</html>
