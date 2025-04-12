<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;



class AdminKonserController extends Controller
{
    public function konser(){
        $dataKonser=konser_222086::all();
        return view('admin.konser.index', compact('dataKonser'));
    }

    public function tambahKonser(){
        return view('admin.konser.tambah');
    }

    public function prosesTambahKonser(Request $request){
        konser_222086::create(
        [
            'nama_konser_222086'=>$request->nama_konser,
            'tempat_222086'=>$request->tempat,
            'tanggal_222086'=>$request->tanggal,
            'jam_222086'=>$request->jam,
            'deskripsi_222086'=>$request->deskripsi,
            'foto_222086'=>$request->foto,
        ]
        );
        return redirect('/admin/konser');
    }

    public function delete(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser_222086::where('id',$idKonser)->first();
        $konser->delete();
        return redirect('/admin/konser');
    }

    public function editKonser(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser_222086::where('id',$idKonser)->first();
        return view('admin.konser.edit',compact('konser'));
    }

    public function prosesEditKonser(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser_222086::where('id',$idKonser)->first();
        $konser->nama_konser_222086=$request->nama_konser;
        $konser->tempat_222086=$request->tempat;
        $konser->tanggal_222086=$request->tanggal;
        $konser->jam_222086=$request->jam;
        $konser->deskripsi_222086=$request->deskripsi;
        $konser->foto_222086=$request->foto;
        $konser->save();
        return redirect('/admin/konser');
    }
}
