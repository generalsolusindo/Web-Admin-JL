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
        @include('info_uang.navbar.navbar_top_up')
    </nav>
    <div class="pt-16">
        <div
            class="w-full flex lg:flex-row md:flex-col sm:flex-col xs:flex-col justify-between mx-auto max-w-screen-xl lg:max-w-screen-xl md:max-w-screen-sm sm:max-w-screen-xs xs:max-w-screen-xs py-2.5">
            <div
                class="h-full lg:h-full md:h-full sm:h-full xs:h-full xs:w-full  bg-white border border-gray-300 rounded-lg shadow mr-4 lg:mb-0 md:mb-5 sm:mb-8 xs:mb-9">
                <div class="border-b-4">
                    <h5
                        class="px-12 lg:px-12 md:px-10 sm:px-8 xs:px-5 lg:text-xl md:text-lg sm:text-md xs:text-sm py-4 text-xl font-bold text-gray-900">
                        Top Up Saldo</h5>
                </div>
                <div class="w-full px-12 lg:px-12 md:px-10 sm:px-8 xs:px-5 xs:text-xs text-sm py-2">
                    <span>Nominal</span>
                    <div class="relative flex w-full flex-nowrap items-stretch mt-2">
                        <span
                            class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-sm font-medium leading-[1.6] text-neutral-700 bg-gray-200"id="addon-wrapping">Rp</span>
                        <input type="number"
                            class="relative  m-0 block min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base lg:text-base sm:text-sm xs:text-xs font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:text-neutral-700 "
                            placeholder="Masukkan Nominal" required />
                    </div>
                    <div>
                        <ul class="flex flex-wrap">
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">25Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">50Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">100Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">200Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">300Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">500Rb</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="my-3 mx-1 lg:mt-4 lg:my-1 lg:mx-2 md:mt-3 md:my-1 md:mx-2 sm:my-1 sm:mt-4 xs:mt-2 xs:my-1 p-2 w-20 md:w-20 xs:w-16 bg-gray-200 rounded-full">1Jt</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="px-12 lg:px-12 md:px-10 sm:px-8 xs:px-5 lg:text-xl md:text-lg sm:text-md xs:text-sm py-4 text-xl font-bold text-gray-900 border-t-8">
                    <span class="font-medium text-sm">Pembayaran</span>
                    <div class="my-2 text-sm font-medium">
                        <div id="top-up-accordion">
                            <div class="rounded-lg border border-neutral-200 bg-white my-2">

                                <h2 class="mb-0" id="bank_mandiri">
                                    <button
                                        class="group relative flex w-full items-center rounded-lg border-0 bg-white py-2 px-5 text-left text-sm text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] "
                                        type="button" data-te-collapse-init data-te-collapse-collapsed
                                        data-te-target="#collapseBankMandiri" aria-expanded="false"
                                        aria-controls="collapseBankMandiri">
                                        Bank Mandiri
                                        <span
                                            class="ml-auto text-xs shrink-0 rotate-[90deg] fill-black transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseBankMandiri" class="!visible hidden" data-te-collapse-item
                                    aria-labelledby="bank_mandiri" data-te-parent="#top-up-accordion">
                                    <div class="py-4 px-5 font-normal">
                                        Transfer Pembayaran Ke Nomor Rekening :
                                        <p class="font-medium text-md">1410023488133</p>
                                        <span class="font-medium uppercase">(PT Berkah Digital Asia)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg border border-neutral-200 bg-white my-2">
                                <h2 class="mb-0" id="bank_BRI">
                                    <button
                                        class="group relative flex w-full items-center rounded-lg border-0 bg-white py-2 px-5 text-left text-sm text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] "
                                        type="button" data-te-collapse-init data-te-collapse-collapsed
                                        data-te-target="#collapseBankBRI" aria-expanded="false"
                                        aria-controls="collapseBankBRI">
                                        Bank BRI
                                        <span
                                            class="ml-auto text-xs shrink-0 rotate-[90deg] fill-black transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </button>
                                    
                                </h2>
                                <div id="collapseBankBRI" class="!visible hidden" data-te-collapse-item
                                    aria-labelledby="bank_BRI" data-te-parent="#top-up-accordion">
                                    <div class="py-4 px-5 font-normal">
                                        Transfer Pembayaran Ke Nomor Rekening :
                                        <p class="font-medium text-md">008601004068305</p>
                                        <span class="font-medium uppercase">(PT Berkah Digital Asia)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg border border-neutral-200 bg-white my-2">
                                <h2 class="mb-0" id="bank_BCA">
                                    <button
                                        class="group relative flex w-full items-center rounded-lg border-0 bg-white py-2 px-5 text-left text-sm text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] "
                                        type="button" data-te-collapse-init data-te-collapse-collapsed
                                        data-te-target="#collapseBankBCA" aria-expanded="false"
                                        aria-controls="collapseBankBCA" disabled>
                                        Bank BCA <span class="text-red-500 ml-3">(SOON)</span>
                                        <span
                                            class="ml-auto text-xs shrink-0 rotate-[90deg] fill-black transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseBankBCA" class="!visible hidden" data-te-collapse-item
                                    aria-labelledby="bank_BCA" data-te-parent="#top-up-accordion">
                                    <div class="py-4 px-5">
                                        <strong>This is the second item's accordion body.</strong> It is
                                        hidden by default, until the collapse plugin adds the appropriate
                                        classes that we use to style each element. These classes control
                                        the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can modify any of this with custom CSS or
                                        overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-144 lg:w-144 md:w-full sm:w-full xs:w-full h-[22rem] bg-white border border-gray-300 rounded-lg shadow pb-4">
                <div class="items-center justify-center">
                    <div class="border-b-4 text-center">
                        <h5 class="px-12 py-4 text-md font-bold text-gray-900 ">Ringkasan Top Up</h5>
                    </div>
                    <div class="px-8 text-sm font-normal text-gray-500 ">
                        <div class="grid grid-cols-2 pt-4">
                            <span>
                                Nomor Telephone
                            </span>
                            <span class="text-right">
                                085731544494
                            </span>
                        </div>
                        <div class="grid grid-cols-2 py-2">
                            <span>
                                Nominal Top Up
                            </span>
                            <span class="text-right">
                                Rp<?php echo number_format(50000); ?>
                            </span>
                        </div>
                        <a href="" data-te-toggle="modal" data-te-target="#metode-pembayaran"
                            data-te-ripple-init data-te-ripple-color="light" class="w-full ">
                            <div class="my-2 w-full border-2 rounded p-3">
                                <span class="text-right">Metode Pembayaran</span>
                                <span class="float-right text-xs pt-1"><i
                                        class="fa-solid fa-chevron-right"></i></span>
                            </div>
                        </a>
                        <div class="grid grid-cols-2">
                            <span>
                                Biaya Admin
                            </span>
                            <span class="text-right">
                                Rp<?php echo number_format(2500); ?>
                            </span>
                        </div>
                        <div class="my-2 border-t-2 grid grid-cols-2 py-4 text-black">
                            <span class="text-md font-medium">
                                Total Pembayaran
                            </span>
                            <span class="text-right text-xl font-bold">
                                Rp<?php echo number_format(52500); ?>
                            </span>
                        </div>

                    </div>
                    <div class="px-8">
                        <a href="#" class="justify-center items-center my-5">
                            <button type="button" data-te-toggle="modal" data-te-target="#modal-topup-saldo"
                                data-te-ripple-init data-te-ripple-color="light"
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
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
    <div class="mt-10">
        @include('landing_page.footer')
    </div>
    <!-- Modal Bayar-->
    <div data-te-modal-init
        class="fixed top-0 lg:top-0 md:top-0 sm:top-10 xs:top-10 sm:px-0 xs:px-10 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modal-topup-saldo" tabindex="-1" aria-labelledby="modal-topup-saldoLabel" aria-hidden="true">
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
                        <span>Silahkan cek detail pada Riwayat Top Up Anda</span>
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
