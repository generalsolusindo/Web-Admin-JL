<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body class="bg-gray-200">
    @include('landing_page.navbar')
    <div class="">
        <div class="justify-between mx-auto max-w-screen-xl pt-7 px-4 ">
            <div class="sticky top-0 pt-24 lg:pt-24 md:pt-16 sm:pt-12    xs:pt-12">
                <ul class="mb-5 flex list-none flex-col flex-wrap border-b-0 pl-0 lg:flex-row md:flex-row sm:flex-row xs:flex-row  sticky" role="tablist" data-te-nav-ref>
                    <li role="presentation" class="flex-grow basis-0 text-center">
                        <a href="#all-list-promo-merchant"
                            class="bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                            data-te-toggle="pill" data-te-target="#all-list-promo-merchant" data-te-nav-active
                            role="tab" aria-controls="all-list-promo-merchant" aria-selected="true">All</a>
                    </li>
                    <li role="presentation" class="flex-grow basis-0 text-center">
                        <a @disabled(true) href="#tabs-profile02"
                        class="bg-white focus:border-transparen my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap"
                        data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02"
                        aria-selected="false">Promo</a>
                    </li>
                    <li role="presentation" class="flex-grow basis-0 text-center">
                        <a @disabled(true) href="#tabs-messages02"
                            class="bg-white my-2 block border-x-0 border-t-0 border-b-4 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-50 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-juallagi_gelap data-[te-nav-active]:text-orange-juallagi_gelap "
                            data-te-toggle="pill" data-te-target="#tabs-messages02" role="tab"
                            aria-controls="tabs-messages02" aria-selected="false">Popular</a>
                    </li>
                </ul>
            </div>
            <div class="mb-6">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="all-list-promo-merchant" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>
                    @include('e_merchant/list_produk_promo')
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-messages02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                </div>
                
            </div>
        </div>
    </div>
    <div class="mt-10">
        @include('landing_page.footer')
    </div>
</body>

</html>
