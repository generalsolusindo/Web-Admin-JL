<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferPulsaController extends Controller
{
    public function index()
    {
        $pulsa = [
            [
                'nominal_pulsa' => '5000',
                'harga_pulsa' => '5720',
            ],
            [
                'nominal_pulsa' => '10000',
                'harga_pulsa' => '10880',
            ],
            [
                'nominal_pulsa' => '15000',
                'harga_pulsa' => '15640',
            ],
            [
                'nominal_pulsa' => '20000',
                'harga_pulsa' => '20170',
            ],
            [
                'nominal_pulsa' => '25000',
                'harga_pulsa' => '25200',
            ],
            [
                'nominal_pulsa' => '30000',
                'harga_pulsa' => '30320',
            ],
            [
                'nominal_pulsa' => '40000',
                'harga_pulsa' => '40530',
            ],
            [
                'nominal_pulsa' => '50000',
                'harga_pulsa' => '49410',
            ],
            [
                'nominal_pulsa' => '60000',
                'harga_pulsa' => '58960',
            ],
            [
                'nominal_pulsa' => '70000',
                'harga_pulsa' => '69340',
            ],
            [
                'nominal_pulsa' => '80000',
                'harga_pulsa' => '78950',
            ],
            [
                'nominal_pulsa' => '90000',
                'harga_pulsa' => '88600',
            ],
            [
                'nominal_pulsa' => '100000',
                'harga_pulsa' => '98710',
            ],
            [
                'nominal_pulsa' => '150000',
                'harga_pulsa' => '148410',
            ],
            [
                'nominal_pulsa' => '200000',
                'harga_pulsa' => '197710',
            ],            
        ];
        // dd($pulsa);
        // $pulsa = array($pulsa);
        return view('/modul_payment_online/menu_pembelian/pulsa_paket/transfer_pulsa', [
            'data' => $pulsa
        ]);
    }
}
