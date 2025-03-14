<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function user(){
        return view('admin.user.index');
    }

    public function konser(){
        return view('admin.konser.index');
    }
    public function tambahKonser(){
        return view('admin.konser.tambah');
    }

    public function tiket(){
        return view('admin.tiket.index');
    }
    public function tambahTiket(){
        return view('admin.tiket.tambah');
    }

    public function pembelianTiket(){
        return view('admin.pembelianTiket.index');
    }

    public function ulasan(){
        return view('admin.ulasan.index');
    }
}

