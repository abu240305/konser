<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser_222086;
use Illuminate\Support\Facades\Storage;



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
        $pathGambar = $request->file('foto')->store('images','public');
        konser_222086::create(
        [
            'nama_konser_222086'=>$request->nama_konser,
            'tempat_222086'=>$request->tempat,
            'tanggal_222086'=>$request->tanggal,
            'jam_222086'=>$request->jam,
            'deskripsi_222086'=>$request->deskripsi,
            'foto_222086'=>basename($pathGambar),
        ]
        );
        

        return redirect('/admin/konser');
    }


    public function delete(Request $request){
        $idKonser=$request->idKonser;
        $konser=konser_222086::where('id',$idKonser)->first();
        Storage::delete('public/images/'.$konser->foto_222086);
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
        if($request->foto){
            Storage::delete('public/images/'.$konser->foto_222086);

            $pathGambar = $request->file('foto')->store('images','public');
            $konser->foto_222086=basename($pathGambar);
        }

        $konser->save();
        return redirect('/admin/konser');
    }
}
