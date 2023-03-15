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
        <span class=" text-xl font-bold font-sans my-2">ID Game</span>
        <div class="mb-4">
            <span class="text-sm text-gray-400">Masukkan ID Game<button data-popover-target="information-pulsa"
                    data-popover-placement="bottom-end" type="button"><i
                        class="fa-solid fa-circle-info"></i></button></span>
            <div data-popover id="information-pulsa" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-400 rounded-lg shadow-sm opacity-0 w-72">
                <div class="p-3 space-y-2">
                    <p>Masukkan ID Game</p>
                </div>
            </div>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="floating_email" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Masukkan ID Game</label>
        </div>
        <div class="">
            <ul id="beli-topup-game" class="flex flex-wrap text-sm font-medium ">
                @foreach ($topup['produk'] as $topups)
                    @php
                        $kategori = $topups[1];
                        $harga = $topups[2];
                        $jenis = $topups[0];
                    @endphp
                    <li class="m-2 xs:m-1 pl-1">
                        <button onclick="myClickButton('<?php echo $kategori; ?>', '<?php echo $harga; ?>')">
                            <div
                                class="text-center h-auto w-40 p-4 rounded-lg border-2 hover:border-orange-juallagi_gelap transition ease-in-out hover:scale-105 delay-150 duration-200">
                                <span
                                    class="text-base lg:text-base md:text-base sm:text-sm xs:text-sm">{{ $topups[0] }}</span>
                                <p class="text-xs font-normal pt-2">
                                    <script>
                                        document.write(formatRupiah("<?php echo $topups[2]; ?>"));
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
                    <a href="/checkout-top-up-game">
                        <Button
                            class="bg-orange-400 p-3 mt-2  md:mt-2 sm:mt-2 xs:mt-0 rounded-xl w-48 md:w-48 sm:w-48 xs:w-32 float-right">
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
    <script type="text/javascript" src="{{ asset('storage/js/modul_payment_online/myClickButton.js') }}"></script>
    <script>
        $("#beli-topup-game").on('click', 'li', function() {
            $("#beli-pulsa li.active").removeClass("active");
            // adding classname 'active' to current click li 
            $(this).addClass("active");
        });
    </script>
</body>

</html>
