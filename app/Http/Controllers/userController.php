<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return view('user.index');
    }
    public function konser(){
        return view('user.konser.index');
    }
    public function cart(){
        return view('user.card.index');
    }

}
