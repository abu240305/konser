<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function pembelianTiket(){
        return view('admin.pembelianTiket.index');
    }
    public function detailPembelianTiket(){
        return view('admin.pembelianTiket.detail');
    }

    public function ulasan(){
        return view('admin.ulasan.index');
    }
}

