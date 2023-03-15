<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaPulsaIM3Controller extends Controller
{
    public function index()
    {
        $pulsa = [
            [
                'nominal_pulsa' => '5000',
                'harga_pulsa' => '5890',
            ],
            [
                'nominal_pulsa' => '10000',
                'harga_pulsa' => '10800',
            ],
            [
                'nominal_pulsa' => '12000',
                'harga_pulsa' => '12050',
            ],
            [
                'nominal_pulsa' => '15000',
                'harga_pulsa' => '15100',
            ],
            [
                'nominal_pulsa' => '20000',
                'harga_pulsa' => '20050',
            ],
            [
                'nominal_pulsa' => '25000',
                'harga_pulsa' => '25030',
            ],
            [
                'nominal_pulsa' => '30000',
                'harga_pulsa' => '29900',
            ],
            [
                'nominal_pulsa' => '50000',
                'harga_pulsa' => '49650',
            ],
            [
                'nominal_pulsa' => '60000',
                'harga_pulsa' => '59540',
            ],
            [
                'nominal_pulsa' => '80000',
                'harga_pulsa' => '79080',
            ],
            [
                'nominal_pulsa' => '50000',
                'harga_pulsa' => '49650',
            ],
            [
                'nominal_pulsa' => '100000',
                'harga_pulsa' => '98230',
            ],
            [
                'nominal_pulsa' => '250000',
                'harga_pulsa' => '242510',
            ],
            [
                'nominal_pulsa' => '500000',
                'harga_pulsa' => '482480',
            ],
            [
                'nominal_pulsa' => '1000000',
                'harga_pulsa' => '994850',
            ],            
        ];
        return view('/modul_payment_online/menu_pembelian/pulsa_paket/beli_pulsa', [
            'data' => $pulsa
        ]);
    }
}
