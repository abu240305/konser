<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;
use App\Models\customer_222086;
use App\Models\Detail_pesanan_222086;
use App\Models\tiket_222086;
use App\Models\keranjang_222086;
use App\Models\Pesanan_222086;
use App\Models\ulasan_222086;
use App\Models\pembayaran_222086;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function konser(){
        $dataKonser = Konser_222086::whereHas('tiket')->with('ulasan')->get();
        return view('user.konser.index', compact('dataKonser'));
    }

    public function detailKonser($id){
        $dataKonser = tiket_222086::where('konser_id_222086', $id)->first();
        return view('user.konser.detail', compact('dataKonser'));
    }

    public function storeKeranjang(Request $request){

        $customerId = Auth::guard('customer_222086')->user()->id;

        $data = $request->all();
        if ($data['type_222086'] == 'vip') {
            $tiket = tiket_222086::where('id', $data['tiket_id_222086'])->first();
            if ($tiket->quota_vip_222086 < $data['jumlah']) {
                return redirect()->back()->with('error', 'Jumlah tiket VIP tidak mencukupi.');
            }
        } elseif ($data['type_222086'] == 'reguler') {
            $tiket = tiket_222086::where('id', $data['tiket_id_222086'])->first();
            if ($tiket->quota_reguler_222086 < $data['jumlah']) {
                return redirect()->back()->with('error', 'Jumlah tiket Reguler tidak mencukupi.');
            }
        }
        
        keranjang_222086::insert([
            'customer_id_222086' =>  $customerId,
            'tiket_id_222086' =>  $data['tiket_id_222086'],
            'jumlah_222086' => $data['jumlah'],
            'type_222086' => $data['type_222086'],
        ]);

        return redirect("/cart");
    }

    public function cart(){
        $customerId = Auth::guard('customer_222086')->user()->id;
        $datacart=keranjang_222086::where('customer_id_222086', $customerId)->get();
        
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
        $customerId = Auth::guard('customer_222086')->user()->id;

        $dataTiket = Detail_pesanan_222086::whereHas('pesanan', function ($query) use ($customerId) {
            $query->where('customer_id_222086', $customerId);
        })->with(['tiket.konser', 'pesanan.customer'])->get();

        return view('user.tiket.index', compact('dataTiket'));
    }

    public function struk(){
        return view('user.struk.index');
    }
    public function sukses(Request $request){
        $customerId = Auth::guard('customer_222086')->user()->id;

        $pesanan = Pesanan_222086::create([
            'customer_id_222086' => $customerId,
            'total_222086' => $request->total,
            'tanggal_222086' => Carbon::now()
        ]);

        pembayaran_222086::create([
            'pesanan_id_222086' => $pesanan->id,
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

        foreach ($tiketsFromKeranjang as $tiket) {
            $tiketData = tiket_222086::find($tiket->tiket_id_222086);
            if ($tiketData) {
                if ($tiket->type_222086 == 'vip') {
                    $tiketData->quota_vip_222086 -= $tiket->jumlah_222086;
                } elseif ($tiket->type_222086 == 'reguler') {
                    $tiketData->quota_reguler_222086 -= $tiket->jumlah_222086;
                }
                $tiketData->save();
            }
        }
    
        keranjang_222086::whereIn('id', $idTiketsFromKeranjang)->delete();

        return view('user.cart.sukses');
    }

    public function ulasan(){
        $customerId = Auth::guard('customer_222086')->user()->id;
        $semuaDetailPesanan = Detail_pesanan_222086::with(['tiket.konser', 'ulasan'])
            ->whereHas('pesanan', function ($q) use ($customerId) {
                $q->where('customer_id_222086', $customerId);
            })
            ->whereHas('tiket.konser')
            ->get();

        $konserUnik = $semuaDetailPesanan->unique(function ($item) {
            return optional($item->tiket->konser)->id;
        });

        return view('user.ulasan.index', [
            'dataPesanan' => $konserUnik
        ]);
    }

    public function tambahUlasan($id){
        $detail = Detail_pesanan_222086::findOrFail($id);
        return view('user.ulasan.tambah', compact('detail'));
    }
    public function prosesUlasan(Request $request){
        $data = $request->validate([
            'konser_id_222086' => 'required',
            'ulasan_222086' => 'required',
            'rating_222086' => 'required',
            'tanggal_222086' => 'required|date',
        ]);

        $data['customer_id_222086'] = Auth::guard('customer_222086')->id(); 
        $data['tanggal_222086'] = now();  

        ulasan_222086::create($data);

        return redirect('/ulasan');
    }

    
        
    public function customer() {
        $dataCustomer = Auth::guard('customer_222086')->user();
        return view('user.customer.index', compact('dataCustomer'));
    }

    public function customeredit(){
        return view('user.customer.editProfile');
    }

}
