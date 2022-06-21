<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
{
    //
    function store(Request $req){

        // dd($req->all());


        DetailPesanan::create([
            'lingkar_dada' => $req->lingkar_dada,
            'lingkar_pinggang' => $req->lingkar_pinggang,
            'lingkar_pinggul' => $req->lingkar_pinggul,
            'panjang_baju' => $req->panjang_baju,
            'panjang_lengan' => $req->panjang_lengan,
            'panjang_celana' => $req->panjang_celana,
            'keterangan' => $req->keterangan,
        ]);
        $detail = DetailPesanan::where([
        'lingkar_dada' => $req->lingkar_dada,
        'lingkar_pinggang' => $req->lingkar_pinggang,
        'lingkar_pinggul' => $req->lingkar_pinggul,
        'panjang_baju' => $req->panjang_baju,
        'panjang_lengan' => $req->panjang_lengan,
        'panjang_celana' => $req->panjang_celana,
        'keterangan' => $req->keterangan,])
        ->first();

        Pesanan::create([
            'id_konsumen' => $req->id_konsumen,
            'id_penjahit' => 1,
            'id_detail_pesanan' => $detail->id_detail_pesanan,
        ]);

        // dd($detail);
        // dd($detail->id_detail_pesanan);

        return redirect('/');
    }
}
