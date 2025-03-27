<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;
use App\Models\tiket;

class AdminTiketController extends Controller
{
    public function tambahTiket(){
        $konser = Konser::all();
        return view('admin.tiket.tambah', compact('konser'));
    }

    public function tiket(){
        $dataTiket=tiket::all();
        $konser=Konser::all();
        return view('admin.tiket.index', compact('dataTiket','konser'));
    }
    public function prosesTambahTiket(Request $request){
        tiket::create(
        [
            'konser_id'=>$request->konser_id,
            'harga'=>$request->harga,
            'quota'=>$request->quota,
            'type'=>$request->type,
        ]
        );
        return redirect('/admin/tiket');
    }

    public function delete(Request $request){
        $idTiket=$request->idTiket;
        $tiket=tiket::where('id',$idTiket)->first();
        $tiket->delete();
        return redirect('/admin/tiket');
    }

    public function editTiket(Request $request){
        $idTiket=$request->idTiket;
        $tiket=tiket::where('id',$idTiket)->first();
        $konser=Konser::all();
        return view('admin.tiket.edit',compact('tiket','konser'));
    }

    public function prosesEditTiket(Request $request){
        $idTiket=$request->idTiket;
        $tiket=Tiket::where('id',$idTiket)->first();
        $tiket->konser_id=$request->konser_id;
        $tiket->harga=$request->harga;
        $tiket->quota=$request->quota;
        $tiket->type=$request->type;
        $tiket->save();
        return redirect('/admin/tiket');
    }

    
}
