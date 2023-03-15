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
        <div class="my-2">
            <span class=" text-xl font-bold font-sans ">Pilih Voucher Game</span>
        </div>
        <div class="">
            <ul id="beli-voucher-game" class="flex flex-wrap text-sm font-medium lg:justify-start xs:justify-around">
                @foreach ($voucher['produk'] as $vouchers)
                    @php
                        $jenis = $vouchers[0];
                        $kategori = $vouchers[1];
                        $harga = $vouchers[2];
                    @endphp
                    <li class="m-2 xs:m-1 pl-1">
                        <div
                            class="text-center h-auto lg:w-40 sm:w-36 xs:w-32 p-4 rounded-lg border-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                            <span>{{ $vouchers[0] }}</span>
                            <p class="text-sm font-normal pt-2">
                                <script>
                                    document.write(formatRupiah("<?php echo $vouchers[2]; ?>"));
                                </script>
                            </p>
                        </div>
                    </li>
                    @endforeach
            </ul>
        </div>
        <div class="mt-4 border-t-2 pt-3">
            <div class="grid grid-cols-2">
                <div class="lg:text-base xs:text-sm">
                    <span class="font-medium">Harga</span>
                    <p>Rp. Nominal Harga</p>
                </div>
                <div class="font-medium text-white  ">
                    <a href="/checkout-voucher-game">
                        <Button
                            class="bg-orange-400 p-3 mt-2md:mt-2 sm:mt-2 xs:mt-0 rounded-xl w-48 md:w-48 sm:w-48 xs:w-32 float-right">
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
    <style>
        .active {
            border-color: orange;
            box-shadow: 2px orange
        }
    </style>
    <script>
        $("#beli-voucher-game").on('click', 'li', function() {
            $("#beli-pulsa li.active").removeClass("active");
            // adding classname 'active' to current click li 
            $(this).addClass("active");
        });
    </script>
</body>

</html>
