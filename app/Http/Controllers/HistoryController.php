<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistoryController extends Controller
{
    //
    function show()
    {
        $result = DB::table('pesanans')
        ->join('konsumens', 'pesanans.id_konsumen', '=', 'konsumens.id_konsumen')
        ->join('detail_pesanans', 'pesanans.id_detail_pesanan', '=', 'detail_pesanans.id_detail_pesanan')
        ->join('penjahit', 'pesanans.id_penjahit', '=', 'penjahit.id_penjahit')
        ->get();
        // dd($result);
        return view('history', compact('result'));
    }
}
