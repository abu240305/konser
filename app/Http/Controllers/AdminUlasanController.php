<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUlasanController extends Controller
{
    public function ulasan(){
        return view('admin.ulasan.index');
    }
}
