<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPembelianTiketController extends Controller
{
    public function pembelianTiket(){
        return view('admin.pembelianTiket.index');
    }

    public function detailPembelianTiket(){
        return view('admin.pembelianTiket.detail');
    }
}
