<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KeuanganController extends Controller
{
    public function list(Request $request)
    {
        $response = Http::withHeaders([
            'X-Token' => session('token')
        ])->get(config('delogic.base_api') . "/wil/get-kategori/EMONEY");

        $keuangan = $response->json();
        // dd($keuangan);
        $images = [
            ["SHOPEE PAY", "storage/images/uang_elektronik/shopeepay.png"], 
            ["BUKALAPAK", "storage/images/uang_elektronik/bukalapak.jpg"], 
            ["DANA", "storage/images/uang_elektronik/dana.png"], 
            ["GOPAY GOJEK", "storage/images/uang_elektronik/gopay.png"], 
            ["TCASH - LINK AJA", "storage/images/uang_elektronik/linkaja.png"], 
            ["GOPAY MERCHANT", "storage/images/uang_elektronik/gopay-merchant.jpg"],
            ["SHOPEE FOOD DRIVER", "storage/images/uang_elektronik/shopeefoof.jpg"], 
            ["GRAB PAY", "storage/images/uang_elektronik/grappay.jpg"], 
            ["OVO", "storage/images/uang_elektronik/ovo.png"]
        ];

        return view('/modul_payment_online/menu_pembelian/keuangan/menu_keuangan',  compact(
            ['keuangan', 'images']
        ));
    }

    public function detailkeuangan($idKategori, $detailKategori)
    {
        // dd($detailKategori);
        // $jenis = $detailKategori[0];
        // $kategori = $detailKategori[1]; 


        $response = Http::withHeaders([
            'X-Token' => session('token')
        ])->get(config('delogic.base_api') . "/wil/get-product/$idKategori/$detailKategori");
        // dd($response);

        $keuangan = $response->json();
        // dd($keuangan);
        return view('/modul_payment_online/menu_pembelian/keuangan/list_keuangan',  compact(
            ['keuangan']
        ));
    }

}
