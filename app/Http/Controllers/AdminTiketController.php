<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket_222086;
use App\Models\konser_222086;


class AdminTiketController extends Controller
{
    public function tambahTiket(){
        $konser = konser_222086::all();
        return view('admin.tiket.tambah', compact('konser'));
    }

    public function tiket(){
        $dataTiket=tiket_222086::all();
        return view('admin.tiket.index', compact('dataTiket'));
    }
    public function prosesTambahTiket(Request $request){
        tiket_222086::create(
        [
            'konser_id_222086'=>$request->konser_id,
            'vip_222086'=>$request->vip,
            'reguler_222086'=>$request->reguler,
            'quota_vip_222086'=>$request->quotaVip,
            'quota_reguler_222086'=>$request->quotaReguler,
        ]
        );
        return redirect('/admin/tiket');
    }

    public function delete(Request $request){
        $idTiket=$request->idTiket;
        $tiket=tiket_222086::where('id',$idTiket)->first();
        $tiket->delete();
        return redirect('/admin/tiket');
    }

    public function editTiket(Request $request){
        $idTiket=$request->idTiket;
        $tiket=tiket_222086::where('id',$idTiket)->first();
        $konser=konser_222086::all();
        return view('admin.tiket.edit',compact('tiket','konser'));
    }

    public function prosesEditTiket(Request $request){
        $idTiket=$request->idTiket;
        $tiket=tiket_222086::where('id',$idTiket)->first();
        $tiket->konser_id_222086=$request->konser_id;
        $tiket->vip_222086=$request->vip;
        $tiket->reguler_222086=$request->reguler;
        $tiket->quota_vip_222086=$request->quotaVip;
        $tiket->quota_reguler_222086=$request->quotaReguler;
        $tiket->save();
        return redirect('/admin/tiket');
    }

    
}
