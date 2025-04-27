<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;
use App\Models\customer_222086;
use App\Models\Detail_pesanan_222086;
use App\Models\tiket_222086;
use App\Models\keranjang_222086;
use App\Models\Pesanan_222086;
use Carbon\Carbon;

class userController extends Controller
{
    public function konser(){
        $dataKonser = konser_222086::all();
        return view('user.konser.index', compact('dataKonser'));
    }
    public function detailKonser($id){
        $dataKonser = tiket_222086::where('konser_id_222086', $id)->first();
        $dataCustomer = customer_222086::all();
        // dd($id);
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

    public function cart(){
        $datacart=keranjang_222086::where('customer_id_222086', 1)->get();
        
        return view('user.cart.index', compact('datacart'));
    }
    public function checkoutKonser(Request $request) {
        $request->validate([
            'id_tikets' => 'required'
        ]);
        $idTiketsFromKeranjang = $request->id_tikets;

        $tiketsFromKeranjang = keranjang_222086::whereIn('id', $idTiketsFromKeranjang)->get();

        return view('user.cart.checkout', compact('tiketsFromKeranjang', 'idTiketsFromKeranjang'));
    }    

    public function delete($id){
        $idcart=$id;
        $cart=keranjang_222086::where('id',$idcart)->first();
        $cart->delete();
        return redirect('/cart');
    }

    public function qris(Request $request){
        $total = $request->total;
        $idTiketsFromKeranjang = $request->id_tikets;
        return view('user.cart.qris', compact('total', 'idTiketsFromKeranjang'));
    }
    public function tiket(){
        return view('user.tiket.index');
    }
    public function struk(){
        return view('user.struk.index');
    }
    public function sukses(Request $request){

        $pesanan = Pesanan_222086::create([
            'customer_id_222086' => 1,
            'total_222086' => $request->total,
            'tanggal_222086' => Carbon::now()
        ]);

    
        $idTiketsFromKeranjang = $request->id_tikets;
        $tiketsFromKeranjang = keranjang_222086::whereIn('id', $idTiketsFromKeranjang)->get();
    
        foreach ($tiketsFromKeranjang as $tiket) {
            Detail_pesanan_222086::create([
                'pesanan_id_222086' => $pesanan->id,
                'tiket_id_222086' => $tiket->tiket_id_222086,
                'jumlah_222086' => $tiket->jumlah_222086,
                'type_222086' => $tiket->type_222086
            ]);
        }
    
        keranjang_222086::whereIn('id', $idTiketsFromKeranjang)->delete();

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
