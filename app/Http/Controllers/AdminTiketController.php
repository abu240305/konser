<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket_222086;
use App\Models\konser_222086;


class AdminTiketController extends Controller
{
    public function tiket(){
        return view('admin.tiket.index');
    }
    
    public function tambahTiket(){
        return view('admin.tiket.tambah');
    }
    
    public function editTiket(){
        return view('admin.tiket.edit');
    }
    
}
