<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="mx-auto max-w-screen-lg px-4 md:px-6 py-2.5 bg-white h-60">
        <span class=" text-xl font-bold font-sans my-2">Tagihan Listrik</span>
        <div class="mb-4">
            <span class="text-sm text-gray-400">Nomor Meter/Id Pel <button data-popover-target="information-pulsa" data-popover-placement="bottom-end" type="button"><i class="fa-solid fa-circle-info"></i></button></span>
            <div data-popover id="information-pulsa" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-400 rounded-lg shadow-sm opacity-0 w-72">
                <div class="p-3 space-y-2">
                    <p>Masukkan Nomor yang ada pada kartu</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukkan No. Meter/Id Pel</label>
        </div>
        <div class="mt-4 pt-3">
            <div class="">
                <div class="font-medium text-white  ">
                    <a href="/checkout-tagihan">
                        <Button class="bg-orange-400 p-3 mt-2 rounded-xl w-48 float-right">
                            Lihat Tagihan
                        </Button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>