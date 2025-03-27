<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser;

class AdminKonserController extends Controller
{
    public function konser(){
        $dataKonser=konser::all();
        return view('admin.konser.index', compact('dataKonser'));
    }

    public function tambahKonser(){
        return view('admin.konser.tambah');
    }

    public function prosesTambahKonser(Request $request){
        konser::create(
        [
            'nama_konser'=>$request->nama_konser,
            'tempat'=>$request->tempat,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'deskripsi'=>$request->deskripsi,
            'foto'=>$request->foto,
        ]
        );
        return redirect('/admin/konser');
    }

    public function delete(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser::where('id',$idKonser)->first();
        $konser->delete();
        return redirect('/admin/konser');
    }

    public function editKonser(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser::where('id',$idKonser)->first();
        return view('admin.konser.edit',compact('konser'));
    }

    public function prosesEditKonser(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser::where('id',$idKonser)->first();
        $konser->nama_konser=$request->nama_konser;
        $konser->tempat=$request->tempat;
        $konser->tanggal=$request->tanggal;
        $konser->deskripsi=$request->deskripsi;
        $konser->foto=$request->foto;
        $konser->save();
        return redirect('/admin/konser');
    }
}
