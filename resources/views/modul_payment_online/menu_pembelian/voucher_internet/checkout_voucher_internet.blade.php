<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <nav class="fixed w-full z-40">
        @include('modul_payment_online.navbar.navbar_payment_online')
    </nav>
    <div class="pt-16">
        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col justify-between mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-sm sm:max-w-screen-xs xs:max-w-screen-xs py-2.5">
            <div class="w-full h-60 lg:h-52 md:h-full sm:h-full xs:h-full  bg-white border border-gray-300 rounded-lg shadow mr-4 lg:mb-0 md:mb-5 sm:mb-8 xs:mb-9">
                <div class="border-b-4">
                    <h5 class="px-12 lg:px-12 md:px-10 sm:px-8 xs:px-5 lg:text-xl md:text-lg sm:text-md xs:text-sm py-4 text-xl font-bold text-gray-900 ">Checkout</h5>
                </div>
                <div class="px-12 lg:px-12 md:px-10 sm:px-8 xs:px-5 xs:text-xs text-sm py-2">
                    <div class="grid grid-cols-2 leading-7">
                        <div>Jenis Layanan</div>
                        <div>Pembelian Voucher Internet</div>
                    </div>
                    <div class="grid grid-cols-2 leading-7">
                        <div>Provider</div>
                        <div>XL Axiata</div>
                    </div>
                    <div class="grid grid-cols-2 leading-7">
                        <div>Jenis Voucher</div>
                        <div>Voucher Xtra Combo Flex M 5GB 30 Hari</div>
                    </div>
                    <div class="grid grid-cols-2 leading-7">
                        <div>Nomor</div>
                        <div>081945691234</div>
                    </div>
                    <div class="grid grid-cols-2 leading-7">
                        <div>Nominal Pembelian</div>
                        <div><?php echo number_format(33840); ?></div>
                    </div>
                </div>
            </div>
            <div class="w-144 lg:w-144 md:w-full sm:w-full xs:w-full bg-white border border-gray-300 rounded-lg shadow pb-4">
                <div class="items-center justify-center">
                    <div class="border-b-4 text-center">
                        <h5 class="px-12 py-4 text-md font-semibold text-gray-900 ">Ringkasan Pembayaran</h5>
                    </div>
                    <div class="px-8 text-sm font-medium ">
                        <div class="grid grid-cols-2 py-2">
                            <span>
                                Total Pesanan
                            </span>
                            <span class="text-right">
                                <?php echo number_format(33840); ?>
                            </span>
                        </div>
                        <a href="" data-te-toggle="modal" data-te-target="#metode-pembayaran" data-te-ripple-init
                            data-te-ripple-color="light" class="w-full ">
                            <div class="my-2 w-full border-2 rounded p-3">
                                <span class="text-right">Metode Pembayaran</span>
                                <span class="float-right text-xs pt-1"><i class="fa-solid fa-chevron-right"></i></span>
                            </div>
                        </a>
                        {{-- lihat detail --}}
                        <div class="my-2 border-t-2 grid grid-cols-2 py-4">
                            <span class="text-md">
                                Total Pembayaran
                            </span>
                            <span class="text-right text-xl font-bold">
                                Rp<?php echo number_format(33840); ?>
                            </span>
                        </div>
                    </div>
                    <div class="px-8">
                        <a href="#" class="justify-center items-center my-5">
                            <button type="button" data-te-toggle="modal" data-te-target="#modal-bayar" data-te-ripple-init
                                data-te-ripple-color="light"
                                class="bg-orange-juallagi_gelap hover:bg-orange-400 items-center w-full py-2 rounded text-sm font-medium text-white">
                                Bayar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Metode Pembayaran-->
    <div data-te-modal-init
        class="fixed top-0 lg:top-0 md:top-0 sm:top-10 xs:top-10 sm:px-0 xs:px-10 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="metode-pembayaran" tabindex="-1" aria-labelledby="metode-pembayaranLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-lg font-medium leading-normal text-neutral-800" id="metode-pembayaranLabel">
                        Pilih Pembayaran
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
                    <div class="w-full hover:bg-orange-juallagi_cerah font-medium  border-2 p-2 rounded-lg px-5 my-2">
                        <div class="grid grid-cols-2 py-1">
                            <span>
                                Saldo
                            </span>
                            <span class="text-right">
                                Rp<?php echo number_format(100000); ?>
                            </span>
                        </div>
                    </div>      
                    <div class="w-full hover:bg-orange-juallagi_cerah font-medium  border-2 p-2 rounded-lg px-5 my-2">
                        Bank Mandiri
                    </div>
                    <div class="w-full hover:bg-orange-juallagi_cerah font-medium  border-2 p-2 rounded-lg px-5 my-2">
                        Bank BRI
                    </div>
                    <div class="w-full hover:bg-orange-juallagi_cerah font-medium  border-2 p-2 rounded-lg px-5 my-2">
                        Bank BCA
                    </div>
                </div>
                <div class="w-auto bg-green-success mx-3 my-2 p-2 rounded-lg font-medium text-white text-center">
                    Pilih
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Bayar-->
    <div data-te-modal-init
        class="fixed top-0 lg:top-0 md:top-0 sm:top-10 xs:top-10 sm:px-0 xs:px-10 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modal-bayar" tabindex="-1" aria-labelledby="voucher-diskonLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                    <div class="mx-auto justify-center bg-green-600 text-white p-2 rounded-full w-16 ">
                        <i class="fa-solid fa-check fa-3x"></i>

                    </div>
                    <p class="text-center text-xl font-semibold">Success</p>
                    <div class="text-center my-6 ">
                        <span>Silahkan cek detail pada Riwayat Pembelian untuk melihat Voucher Internet Anda</span>
                    </div>
                </div>
                <a href="/riwayat-pembelian">
                    <div class="w-auto bg-green-success mx-3 my-2 p-2 rounded-lg font-medium text-white text-center">
                        Cek Riwayat
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
