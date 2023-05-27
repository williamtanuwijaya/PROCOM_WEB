<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produk extends Controller
{
    public function index(){
        $makanan = "Nasi";
        $minuman = "Teh";
        return view('produk.master', compact('makanan', 'minuman'));
    }
}
