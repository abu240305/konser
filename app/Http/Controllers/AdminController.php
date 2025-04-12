<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran_222086;
use App\Models\customer_222086;
use App\Models\pesanan_222086;
use App\Models\tiket_222086;
use App\Models\konser_222086;
use App\Models\detail_pesanan_222086;



class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function pembelianTiket(){
        $dataPembelian = Pembayaran_222086::all();
        $customer = customer_222086::all();
        $pesanan = pesanan_222086::all();
        return view('admin.pembelianTiket.index' , compact('dataPembelian', 'customer', 'pesanan'));
    }

    public function detailPembelianTiket($id){
        $detailPesanan = detail_pesanan_222086::where('Pesanan_id_222086', $id)->get();
        $tiket = tiket_222086::all();
        $konser = konser_222086::all();
        return view('admin.pembelianTiket.detail', compact('detailPesanan', 'tiket', 'konser'));
    }

    
    
}

