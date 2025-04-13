<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;



class AdminKonserController extends Controller
{
    public function konser(){
        return view('admin.konser.index');
    }

    public function tambahKonser(){
        return view('admin.konser.tambah');
    }

    public function editKonser(){
        return view('admin.konser.edit');
    }

}
