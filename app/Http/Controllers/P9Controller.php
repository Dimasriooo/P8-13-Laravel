<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class P9Controller extends Controller
{
    public function index () 
    {
        return view('P9/index');
    }

    public function bayar (Request $request)
    {
        $nama =                 $request->input('nama');
        $tgl =                  $request->input('tgl');
        $usia =                 $request->input('usia');
        $jk =                   $request->input('jk');
        return view('P9/hasil',
            ['nama'=>$nama, 'tgl'=>$tgl, 'usia'=>$usia, 'jk'=>$jk]);
    }
    
}