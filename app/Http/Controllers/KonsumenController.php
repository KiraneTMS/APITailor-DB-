<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class KonsumenController extends Controller
{
    //
    function login(Request $req)
    {
        $konsumen = Konsumen::where(['email'=>$req->email])->first();
        if(!$konsumen || Hash::check($req->password, $konsumen->password))
        {
            return "wrong login";
        }
        else{
            $req->session()->put('konsumen', $konsumen['konsumen']);
            return redirect('/');
        }
    }
}
