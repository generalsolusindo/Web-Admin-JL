<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketDataIndosatController extends Controller
{
    public function index()
    {
        $paket_data_freedom = [
            [
                'id' => 'ID1',
                'harga_pulsa' => '30590',
            ],
            [
                'id' => 'ID2',
                'harga_pulsa' => '49900',
            ],
            [
                'id' => 'ID3',
                'harga_pulsa' => '70570',
            ],
            [
                'id' => 'ID4',
                'harga_pulsa' => '90400',
            ],
            [
                'id' => 'ID5',
                'harga_pulsa' => '100800',
            ],
            [
                'id' => 'ID5',
                'harga_pulsa' => '150980',
            ],
            [
                'id' => 'ID6',
                'harga_pulsa' => '151960',
            ],
            [
                'id' => 'ID7',
                'harga_pulsa' => '70890',
            ],
            [
                'id' => 'ID8',
                'harga_pulsa' => '30390',
            ],
            [
                'id' => 'ID9',
                'harga_pulsa' => '91690',
            ],
        ];
        return view('/modul_payment_online/menu_pembelian/pulsa_paket/beli_paket_data', [
            'data' => $paket_data_freedom
        ]);
    }
}
