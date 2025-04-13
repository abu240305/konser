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
    public function qris(){
        return view('user.cart.qris');
    }
    public function tiket(){
        return view('user.tiket.index');
    }
    public function struk(){
        return view('user.struk.index');
    }
    public function sukses(){
        return view('user.cart.sukses');
    }
    public function ulasan(){
        return view('user.ulasan.index');
    }
    public function customer(){
        return view('user.customer.index');
    }
    public function customeredit(){
        return view('user.customer.editProfile');
    }

}
