<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganOVOController extends Controller
{
    public function index()
    {
        $ovo = [
            [
                'nama_ovo' => 'OVO 10',
                'harga_ovo' => '9200',
            ],
            [
                'nama_ovo' => 'OVO 15',
                'harga_ovo' => '14250',
            ],
            [
                'nama_ovo' => 'OVO 20',
                'harga_ovo' => '19300',
            ],
            [
                'nama_ovo' => 'OVO 25',
                'harga_ovo' => '24350',
            ],
            [
                'nama_ovo' => 'OVO 30',
                'harga_ovo' => '29400',
            ],
            [
                'nama_ovo' => 'OVO 40',
                'harga_ovo' => '39500',
            ],
            [
                'nama_ovo' => 'OVO 50',
                'harga_ovo' => '49600',
            ],
            [
                'nama_ovo' => 'OVO 60',
                'harga_ovo' => '59700',
            ],
            [
                'nama_ovo' => 'OVO 75',
                'harga_ovo' => '74850',
            ],
            [
                'nama_ovo' => 'OVO 85',
                'harga_ovo' => '84950',
            ],
            [
                'nama_ovo' => 'OVO 100',
                'harga_ovo' => '100.100',
            ],
            [
                'nama_ovo' => 'OVO 150',
                'harga_ovo' => '150600',
            ],
            [
                'nama_ovo' => 'OVO 200',
                'harga_ovo' => '201100',
            ],
            [
                'nama_ovo' => 'OVO 250',
                'harga_ovo' => '251.600',
            ],            
        ];
        return view('/modul_payment_online/menu_pembelian/keuangan/detail_ovo', [
            'data' => $ovo
        ]);
    }
}
