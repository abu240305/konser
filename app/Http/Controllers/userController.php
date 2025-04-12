<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function konser(){
        return view('user.konser.index');
    }
    public function detailKonser(){
        return view('user.konser.detail');
    }
    public function checkoutKonser(){
        return view('user.cart.checkout');
    }
    public function cart(){
        return view('user.cart.index');
    }
    public function tiket(){
        return view('user.tiket.index');
    }
    public function struk(){
        return view('user.struk.index');
    }
    public function ulasan(){
        return view('user.ulasan.index');
    }

}
