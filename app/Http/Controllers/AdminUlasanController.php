<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan_222086;

class AdminUlasanController extends Controller
{
    public function ulasan(){
        $dataUlasan = Ulasan_222086::all();

        // dd($dataUlasan);
        return view('admin.ulasan.index', compact('dataUlasan'));
    }
}
