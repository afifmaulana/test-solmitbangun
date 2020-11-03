<?php

namespace App\Http\Controllers\Kalkulator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('pages.kalkulator.kalkulator');
    }

    public function hasil(Request $request)
    {
        $operasi = $request->input('operasi');
        $bilangan1 = $request->input('bilangan1');
        $bilangan2 = $request->input('bilangan2');
        $hasil = 0;

        if($operasi == "tambah"){
            $hasil = $bilangan1 + $bilangan2;
        }elseif($operasi == "kurang"){
            $hasil = $bilangan1 - $bilangan2;
        }elseif($operasi == "bagi"){
            $hasil = $bilangan1 / $bilangan2;
        }elseif($operasi == "kali"){
            $hasil = $bilangan1 * $bilangan2;
        }else{
            $hasil = 0;
        }

        return redirect()->route('kalkulator.index')->with('info', 'Hasilnya adalah : ' .$hasil);
    }
}
