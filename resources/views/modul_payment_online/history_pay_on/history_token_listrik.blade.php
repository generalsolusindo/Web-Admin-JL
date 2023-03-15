<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="">
        @for ($i = 0; $i < 3; $i++)
            <div class="bg-white font-medium px-12 md:px-12 sm:px-8 xs:px-4 py-4 text-sm h-44 sm:h-44 xs:h-44 my-3 ">
                <span class="">Token Listrik</span>
                <span class=" font-normal">1 Maret 2023</span>
                <span class="ml-2 bg-green-success px-2 py-1 rounded-lg text-xs text-white">Berhasil</span>
                <span class="ml-2 lg:ml-2 md:inline-block sm:hidden xs:hidden font-normal">INV-2023010300009/VII/009870</span>
                <div class="border-t-2 my-3 pt-2">
                    <div class="grid grid-cols-3">
                        <div class="col-start-1 col-end-3 border-r-2 border-gray-300">
                            <span class="text-md font-semibold">Pembelian Token Listrik</span>
                            <p class="mt-1 font-normal ">7894-561-2378-9</p>
                        </div>
                        <div class="ml-3 mt-3">
                            <span class="text-right text-sm font-normal">Harga</span>
                            <p class="">Rp.150.789</p>

                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:text-sm xs:text-xs flex mx-auto justify-end">
                    <!-- Button trigger modal -->
                    <a href="" data-te-toggle="modal" data-te-target="#Detail_transaksi_token_listrik" data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mr-2 bg-orange-juallagi_gelap p-2 rounded-lg text-white">Lihat Detail Transaksi</a>
                    <button class="bg-green-success text-center p-2 sm:w-auto xs:w-auto  text-white rounded-lg">
                        <span>Beli Lagi</span>
                    </button>
                </div>
            </div>
        @endfor
        

    </div>
    <!-- Modal Detail Transaksi -->
    <div data-te-modal-init
        class="fixed top-0 lg:top-0 md:top-0 sm:top-10 xs:top-10 sm:px-0 xs:px-7 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="Detail_transaksi_token_listrik" tabindex="-1" aria-labelledby="detail-transaksi" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-lg font-medium leading-normal text-neutral-800" id="detail-transaksi">
                        Detail Transaksi
                    </h5>
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                    <div class="border-b-2 pb-4 text-sm sm:text-sm xs:text-xs">
                        <div class="grid grid-cols-2">
                            <span class="font-normal">Invoice</span>
                            <span class="ml-2 font-medium">INV-2023010300009/VII/009870</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span class="font-normal">Status Transaksi</span>
                            <span
                                class="w-20 ml-2 font-medium bg-green-success px-3.5 py-1 rounded-lg text-white text-sm">Berhasil</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span class="font-normal">Tanggal Transaksi</span>
                            <span class="ml-2 font-medium">1 Maret 2023 15:00 WIB</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span class="font-normal">Kategori Produk</span>
                            <span class="ml-2 font-medium">Token Listrik </span>
                        </div>
                    </div>
                    <div class="py-2 text-sm sm:text-sm xs:text-xs">
                        <span class="font-semibold">Detail Pembayaran</span>
                        <div class="pt-2 grid grid-cols-2">
                            <span>Nomor</span>
                            <span class="ml-2 font-medium">7894-561-2378-9</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span>Layanan Pembelian</span>
                            <span class="ml-2 font-medium">Listrik 150.000</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span>Harga</span>
                            <span class="ml-2 font-medium">Rp150.000</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span>3 Digit Angka Unik</span>
                            <span class="ml-2 font-medium">789</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span>Metode Pembayaran</span>
                            <span class="ml-2 font-medium">Saldo</span>
                        </div>
                        <div class="pt-2 grid grid-cols-2">
                            <span>Total Pembayaran</span>
                            <span class="ml-2 font-medium">Rp150.789</span>
                        </div>
                    </div>
                    <div class="w-full mt-2">
                        <button
                            class="bg-green-500 hover:bg-green-success w-full p-2 font-semibold text-white text-md rounded-lg">
                            Beli Lagi
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
