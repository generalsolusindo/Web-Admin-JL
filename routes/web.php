<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\HargaPulsaIM3Controller;
use App\Http\Controllers\KeuanganOVOController;
use App\Http\Controllers\ListrikTokenPLNController;
use App\Http\Controllers\PaketDataIndosatController;
use App\Http\Controllers\TransferPulsaController;
use App\Http\Controllers\VoucherInternetPaketController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
// index
Route::get('/', function () {
    return view('home');
});
// =========== modul_payment_online ============ //
Route::get('/menu-pembelian', function () {
    return view('/modul_payment_online/menu_pembelian/menu_pembelian');
});

// Pulsa
Route::get('/menu-pulsa-dan-paket-data', function () {
    return view('/modul_payment_online/menu_pembelian/pulsa_paket/menu_pulsa_paket');
});
Route::get('/beli-pulsa', [HargaPulsaIM3Controller::class, 'index']);
Route::get('/transfer-pulsa', [TransferPulsaController::class,'index']);

// Paket-Data
Route::get('/paket-data', [PaketDataIndosatController::class,'index']);

// Voucher
Route::get('/voucher-internet', function () {
    return view('/modul_payment_online/menu_pembelian/voucher_internet/menu_voucher');
});
Route::get('voucherskategori/{kategori}', [VoucherInternetPaketController::class, 'index'])->name('voucherskategori');
Route::get('/detailVouchers/{idKategori}/{detailKategori}', [VoucherInternetPaketController::class, 'detailvoucherinternet'])->name('detailVouchers');
Route::get('/checkout-voucher-internet', function () {
    return view('/modul_payment_online/menu_pembelian/voucher_internet/checkout_voucher_internet');
});

// Games
Route::get('/voucher-games', [GamesController::class, 'list'])->name('game');
Route::get('DetailGameVoucher/{detailKategori}', [GamesController::class, 'detailvoucher'])->name('checkoutgame');
Route::get('DetailGameTopUp/{detailKategori}', [GamesController::class, 'detailtopup'])->name('checkoutgame-topup');
Route::get('/checkout-top-up-game', function () {
    return view('/modul_payment_online/menu_pembelian/games/checkout_topup_game');
});

// Token Listrik
Route::get('/token-listrik', [ListrikTokenPLNController::class, 'index']);
Route::get('/checkout-token', function () {
    return view('/modul_payment_online/menu_pembelian/token_listrik/checkout_token');
});
Route::get('/checkout-tagihan', function () {
    return view('/modul_payment_online/menu_pembelian/token_listrik/checkout_tagihan');
});

// Keuangan
Route::get('/keuangan', [KeuanganController::class, 'list'])->name('emoney');
Route::get('/detailKeuangan/{idKategori}/{detailKategori}', [KeuanganController::class, 'detailkeuangan'])->name('checkoutkeuangan');
Route::get('/detail-keuangan', [KeuanganOVOController::class,'index']);
Route::get('/checkout-keuangan', function () {
    return view('/modul_payment_online/menu_pembelian/keuangan/checkout_keuangan');
});




Route::get('/detail_pembayaran', function () {
    return view('/modul_payment_online/detail_checkout_online');
});
Route::get('/riwayat-pembelian', function () {
    return view('/modul_payment_online/history_pay_on/history_pay_on');
});

// =========== Info Uang =========== //
// Top Up Saldo
Route::get('/top-up-saldo', function () {
    return view('/info_uang/top_up/top_up_saldo');
});
// Riwayat Top Up
Route::get('/riwayat-saldo', function () {
    return view('/info_uang/top_up/riwayat_top_up');
});

// ========== informasi_terbaru ========== //
Route::get('/informasi_terbaru', function () {
    return view('/informasi_terbaru/halaman_informasi');
});
Route::get('/detail_informasi', function () {
    return view('/informasi_terbaru/detail_informasi');
});

// ========= merchant =========== //
// (promo list merchant)
Route::get('/list-promo-merchant', function () {
    return view('/e_merchant/promo_list_merchant');
});



// coba
Route::post('/prosesphp', function () {
    return view('proses');
});




