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
        $konser=konser_222086::all();
        return view('admin.tiket.index', compact('dataTiket','konser'));
    }
    public function prosesTambahTiket(Request $request){
        tiket_222086::create(
        [
            'konser_id_222086'=>$request->konser_id,
            'harga_222086'=>$request->harga,
            'quota_222086'=>$request->quota,
            'type_222086'=>$request->type,
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
        $tiket->harga_222086=$request->harga;
        $tiket->quota_222086=$request->quota;
        $tiket->type_222086=$request->type;
        $tiket->save();
        return redirect('/admin/tiket');
    }

    
}
