<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VoucherInternetPaketController extends Controller
{
  public function index($kategori)
  {
    // dd($kategori);
    $response = Http::withHeaders([
      'X-Token' => session('token')
    ])->get(config('delogic.base_api') . "/wil/get-kategori/$kategori");

    $vouchers = $response->json();
    // dd($vouchers);

    return view('/modul_payment_online/menu_pembelian/voucher_internet/pilih_kategori', compact('vouchers'));;
  }

  public function detailvoucherinternet($idKategori, $detailKategori)
  {
    $response = Http::withHeaders([
      'X-Token' => session('token')
    ])->get(config('delogic.base_api') . "/wil/get-product/$idKategori/$detailKategori");

    $vouchers = $response->json();
    // dd($vouchers);

    return view('/modul_payment_online/menu_pembelian/voucher_internet/pilih_list_voucher',  compact(
      ['vouchers']
    ));
  }
}
