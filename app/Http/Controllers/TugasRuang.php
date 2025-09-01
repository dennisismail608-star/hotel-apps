<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TugasRuang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Tugas()
    {
        return view('Tugas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kubus()
    {
        return view('kubus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function balok(Request $request)
    {
        return view('balok');
    }

    /**
     * Display the specified resource.
     */
    public function limas(Request $request)
    {
        return view('limas');
    }

    public function tabung(Request $request)
    {
        return view('tabung');
    }

    public function bola(Request $request)
    {
        return view('bola');
    }


    public function storeKubus(Request $request)
    {
        $s1 = $request->s1;

        $jumlah = $s1 * $s1 * $s1;
        $jumlah2 = 6 * ($s1 * $s1);
        return view('kubus', compact('jumlah', 'jumlah2'));
    }

    public function storeBalok(Request $request)
    {
        $p = $request->panjang;
        $l = $request->lebar;
        $t = $request->tinggi;

        $jumlah = $p * $l * $t;
        $jumlah2 = 2 * ($p * $l + $p * $t + $l * $t);
        return view('kubus', compact('jumlah', 'jumlah2'));
    }

    public function storeLimas(Request $request)
    {
        $l = $request->luas;
        $t = $request->tinggi;

        $jumlah = 2 * ($l * $l) * $t;
        return view('limas', compact('jumlah'));
    }

    public function storeTabung(Request $request)
    {
        $r = $request->ruas;
        $t = $request->tinggi;

        $jumlah = pi() * ($r * $r) * $t;
        $jumlah2 = 2 * pi() * $r * ($r + $t);
        return view('tabung', compact('jumlah', 'jumlah2'));
    }

    public function storeBola(Request $request)
    {
        $r = $request->ruas;

        $jumlah = (4 / 3) * pi() * ($r * $r * $r);
        $jumlah2 = 4 * pi() * ($r * $r);
        return view('bola', compact('jumlah', 'jumlah2'));
    }
}
