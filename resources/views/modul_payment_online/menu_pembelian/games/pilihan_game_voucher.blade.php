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
        function simpanVariable(kategori, harga){
            var kategori2 = kategori
            document.getElementById("demo").innerHTML = kategori;
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
            <ul class="flex flex-wrap text-sm font-medium lg:justify-start xs:justify-around">
                @foreach ($voucher['produk'] as $vouchers)
                    @php
                        $jenis = $vouchers[0];
                        $kategori = $vouchers[1];
                        $harga = $vouchers[2];
                    @endphp
                    <li class="m-2 xs:m-1 pl-1">
                        <button onclick="myClickButton('<?php echo $kategori; ?>', '<?php echo $harga; ?>')">
                            <div
                                class="text-center h-auto lg:w-40 sm:w-36 xs:w-32 p-4 rounded-lg border-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200" >
                                <span>{{ $vouchers[0] }}</span>
                                <p class="text-sm font-normal pt-2">
                                    <script>
                                        document.write(formatRupiah("<?php echo $vouchers[2]; ?>"));
                                    </script>
                                </p>
                            </div>
                        </button>
                    </li>
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
    <p id="demo"></p>
    <div class="border-t-4 mt-10">
        @include('landing_page.footer')
    </div>
    <script>
        function myClickButton(kategori, harga) {
            var harga = formatRupiah(harga);
            document.getElementById('harga-voucher').innerHTML = harga
        }
    </script>

</body>

</html>
