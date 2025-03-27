<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function user(){
        $dataUser=User::all();
        return view('admin.user.index', compact('dataUser'));
    }

    public function register(){
        return view('form.register');
    }
    public function prosesRegister(Request $request){
        User::create(
            [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'jenisKelamin'=>$request->jenisKelamin,
                'tanggalLahir'=>$request->tanggalLahir,
                'alamat'=>$request->alamat,
                'password'=>$request->password,
            ]
        );
        return redirect('/login');
    }
    
    public function login(){
        return view('form.login');
    }
}
