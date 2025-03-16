<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function user(){
        return view('admin.user.index');
    }

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

    public function tiket(){
        return view('admin.tiket.index');
    }
    public function tambahTiket(){
        return view('admin.tiket.tambah');
    }

    public function pembelianTiket(){
        return view('admin.pembelianTiket.index');
    }

    public function ulasan(){
        return view('admin.ulasan.index');
    }


    public function register(){
        return view('form.register');
    }
    public function login(){
        return view('form.login');
    }
    
}

