<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    public function list(Request $request){
        $response = Http::withHeaders([
            'X-Token' => session('token')
          ])->get(config('delogic.base_api') . "/wil/get-kategori/GAME");

        $games = $response->json();
        // dd($games);
        $images = [["TOPUP GAME HAGO", "storage/images/games/hago.jpg" ], ["TOP UP GAME MOBILE LEGEND", "storage/images/games/ml.jpg" ], ["VOUCHER G.CHERRY CREDIT", "storage/images/games/cherry.jpg" ], ["VOUCHER G.PLAYSTATION NETWORK", "storage/images/games/ps.png" ],["TOP UP GAME ONE PUNCH MAN", "storage/images/games/one_puch_man.jpg" ],["VOUCHER G.INDOPLAY-ALLINONE", "storage/images/games/indoplay.jpg" ], ["TOP UP GAME HIGH DOMINO", "storage/images/games/hdomino.jpg" ], ["VOUCHER G.DIGICASH", "storage/images/games/digicash.png" ],  ["TOP UP GAME LOKAPALA", "storage/images/games/lokapala.png" ], ["VOUCHER G.RAZER GOLD PIN", "storage/images/games/razer.jpg" ], ["VOUCHER HAAGEN DAZS", "storage/images/games/ " ], ["TOP UP GAME MU-ORIGIN4", "storage/images/games/mu-origin.png" ], ["TOP UP GAME LIGHT OF THEL", "storage/images/games/lot.jpg" ], ["VOUCHER G.MYCARD", "storage/images/games/my-card.jpg" ], ["TOP UP GAME PUBG MOBILE", "storage/images/games/pubg.png" ], ["TOP UP GAME RAGNAROG-BBC", "storage/images/games/ragnarok.jpg" ], ["TOP UP MANGATOON", "storage/images/games/mangatoon.png" ],  ["TOP UP GAME MU-ORIGIN5", "storage/images/games/mu-origin.png" ], ["VOUCHER G.MOGPLAY", "storage/images/games/mogplay.png" ], ["TOP UP GAME.LAPLACE-M", "storage/images/games/laplace-m.png" ], ["VOUCHER G.STEAMWALLET", "storage/images/games/steamwallet.png"], ["VOUCHER G.BATTLENET USD", "storage/images/games/battlenet.png" ], ["VOUCHER G.AERIA", "storage/images/games/aeria.png" ], ["TOP UP GAME MU-ORIGIN2", "storage/images/games/mu-origin2.jpg" ], ["TOP UP TEXAS HOLDEM POKER", "storage/images/games/texas.png" ], ["TOPUP GAME ARENA-OF-VALOR", "storage/images/games/valorant.jpg" ], ["VOUCHER YOSHINOYA", "-" ], ["TOP UP GAME MU-ORIGIN3", "storage/images/games/mu-origin.png" ], ["VOUCHER G.IMVU", "storage/images/games/imvu.png" ], ["TOP UP GAME MU-ORIGIN8", "storage/images/games/mu-origin.png" ],
        ["TOP UP GAME LIFEAFTER-CR", "storage/images/games/lifeafter.png" ], ["VOUCHER G.MEGAXUS", "storage/images/games/megaxus.jpeg" ],
        ["VOUCHER G.LYTO", "storage/images/games/lyto.png" ], ["TOP UP GAME ROH - TOKEN", "-" ], ["TOP UP GAME BOYAA-GAPLEQQ", "storage/images/games/bo-gaple.png" ], ["TOP UP GAME MU-ORIGIN9", "storage/images/games/mu-origin.png" ],
        ["TOP UP GAME RAGNAROK-ZENY", "storage/images/games/ragnarok.jpg" ], ["TOP UP GAME CVG", "storage/images/games/cvg.png" ],
        ["VOUCHER GARENA SHELL", "storage/images/games/garena.png" ], ["VOUCHER G.TERACORD", "storage/images/games/teracord.jpg" ],
        ["TOP UP GAME FREE FIRE", "storage/images/games/ff.jpg" ],
        ["TOP UP GAME GENSHIN-IMPC", "storage/images/games/genshin.jpg" ],
        ["TOP UP GAME SPEED-DRIFTERS", "storage/images/games/speed-drifters.png" ], ["TOP UP GAME GEMSCOOL", "storage/images/games/gemscool.jpeg" ], ["VOUCHER G.ZYNGA", "storage/images/games/zynga.png" ], ["VOUCHER G.DOTA-ACC(GLOBAL)", "storage/images/games/dota.jpg" ], ["TOP UP GAME MU-ORIGIN11", "storage/images/games/mu-origin.png" ], ["TOP UP GAME MARVEL-SPRWAR", "storage/images/games/marvel.png" ],  ["VOUCHER G.UNIPIN-GC", "storage/images/games/unipin.png" ],
        ["TOP UP GAME MU-ORIGIN10", "storage/images/games/mu-origin.png" ],
        ["TOP UP GAME STARTPASS", "-" ], ["TOP UP GAME BOYAADOMINO-QQ", "storage/images/games/domino-qq.png" ],
        ["TOP UP GAME CALL OF DUTY", "storage/images/games/cod.png" ],
        ["TOP UP GAME AU2-MOBILE", "storage/images/games/au2.jpg" ],
        ["TOP UP GAME MU-ORIGIN7", "storage/images/games/mu-origin.png" ],
        ["TOP UP GAME POINT BLANK", "storage/images/games/pb.png" ],
        ["TOP UP GAME LORDS MOBILE", "storage/images/games/lordm.png" ],
        ["TOP UP GAME MU-ORIGIN6", "storage/images/games/mu-origin.png" ]];

        return view('/modul_payment_online/menu_pembelian/games/menu_games',  compact(
            ['games', 'images']
          ));
    }

    public function detailvoucher($detailKategori){
      // dd($detailKategori);
      $response = Http::withHeaders([
        'X-Token' => session('token')
      ])->get(config('delogic.base_api') . "/wil/get-product/VOUCHER-GAME/$detailKategori");

      $voucher = $response->json();
      // dd($voucher);
      return view('/modul_payment_online/menu_pembelian/games/pilihan_game_voucher',  compact(
        ['voucher']
      ));
    }

    public function detailtopup($detailKategori){
      $response = Http::withHeaders([
        'X-Token' => session('token')
      ])->get(config('delogic.base_api') . "/wil/get-product/TOPUP-GAME/$detailKategori");

      $topup = $response->json();
      
      return view('/modul_payment_online/menu_pembelian/games/pilihan_game_top_up',  compact(
        ['topup']
      ));
    }

    
}
