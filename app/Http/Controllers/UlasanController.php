<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulasan_222086;

class UlasanController extends Controller
{
    public function ulasan(){
        $dataUlasan = ulasan_222086::all();
        return view('admin.ulasan.index',compact('dataUlasan'));
    }
}
