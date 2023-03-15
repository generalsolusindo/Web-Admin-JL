<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="mx-auto max-w-screen-lg px-4 md:px-6 py-2.5 bg-white rounded-lg">
        <span class=" text-xl font-bold font-sans my-2">Beli Pulsa</span>
        <div class="mb-4">
            <span class="text-sm text-gray-400">Nomor Telepon <button data-popover-target="information-pulsa"
                    data-popover-placement="bottom-end" type="button"><i
                        class="fa-solid fa-circle-info"></i></button></span>
            <div data-popover id="information-pulsa" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-400 rounded-lg shadow-sm opacity-0 w-72">
                <div class="p-3 space-y-2">
                    <p>Masukkan Nomor Ponsel atau Nomor yang ingin diisikan</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="floating_email" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukkan
                Nomor Telepon</label>
        </div>
    </div>
    <div class="w-full border-t-4 mt-3">
        <div class="grid grid-cols-2 font-medium gap-8">
            <a href="/beli-pulsa">
                <div class="w-full mr-4 text-center h-12 p-3 rounded-lg bg-white hover:bg-orange-juallagi_gelap hover:text-white transition ease-in-out hover:scale-105 delay-150 duration-200">
                    <span>Beli Pulsa</span>
                </div>
            </a>
            <a href="/transfer-pulsa">
                <div class="w-full text-center h-12 p-3 rounded-lg bg-white hover:bg-orange-juallagi_gelap hover:text-white transition ease-in-out hover:scale-105 delay-150 duration-200">
                    <span>Transfer Pulsa</span>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
