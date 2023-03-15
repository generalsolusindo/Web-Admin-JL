<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListrikTokenPLNController extends Controller
{
    public function index()
    {
        $tokenListrik = [
            [
                'nama_token' => 'PLN 5',
                'harga_token' => '6170',
            ],
            [
                'nama_token' => 'PLN 10',
                'harga_token' => '11220',
            ],
            [
                'nama_token' => 'PLN 15',
                'harga_token' => '16270',
            ],
            [
                'nama_token' => 'PLN 20',
                'harga_token' => '20170',
            ],
            [
                'nama_token' => 'PLN 50',
                'harga_token' => '50470',
            ],
            [
                'nama_token' => 'PLN 100',
                'harga_token' => '100970',
            ],
            [
                'nama_token' => 'PLN 200',
                'harga_token' => '201970',
            ],
            [
                'nama_token' => 'PLN 500',
                'harga_token' => '504970',
            ],
            [
                'nama_token' => 'PLN 1000',
                'harga_token' => '1009970',
            ],     
        ];
        return view('/modul_payment_online/menu_pembelian/token_listrik/menu_token_listrik', [
            'data' => $tokenListrik
        ]);
    }
}
