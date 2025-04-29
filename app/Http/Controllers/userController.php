<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;
use App\Models\customer_222086;
use App\Models\tiket_222086;
use App\Models\keranjang_222086;


class userController extends Controller
{
    public function konser(){
        $dataKonser = Konser_222086::whereHas('tiket')->get();
        return view('user.konser.index', compact('dataKonser'));
    }
    public function detailKonser($id){
        $dataKonser = tiket_222086::where('konser_id_222086', $id)->first();
        return view('user.konser.detail', compact('dataKonser'));
    }

    public function storeKeranjang(Request $request){
        $data = $request->all();
        keranjang_222086::insert([
            'customer_id_222086' =>  $data['customer_id_222086'],
            'tiket_id_222086' =>  $data['tiket_id_222086'],
            'jumlah_222086' => $data['jumlah'],
            'type_222086' => $data['type_222086'],
        ]);

        return redirect("/cart");
    }

    public function checkoutKonser(){
        return view('user.cart.checkout');
    }
    public function cart(){
        $datacart=keranjang_222086::where('customer_id_222086', 1)->get();
        return view('user.cart.index', compact('datacart'));
    }
    public function delete(Request $request){
        $idcart=$request->idcart;
        $cart=keranjang_222086::where('id',$idcart)->first();
        $cart->delete();
        return redirect('/cart');
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
