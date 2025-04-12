<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_222086;

class AdminUserController extends Controller
{
    public function user(){
        $dataUser = customer_222086::all();
        return view('admin.user.index', compact('dataUser'));
    }

    public function register(){
        return view('form.register');
    }
    public function prosesRegister(Request $request){
        User::create(
            [
                'nama_222086'=>$request->nama_222086,
                'email_222086'=>$request->email_222086,
                'jenisKelamin_222086'=>$request->jenisKelamin_222086,
                'tanggalLahir_222086'=>$request->tanggalLahir_222086,
                'alamat_222086'=>$request->alamat_222086,
                'password_222086'=>$request->password_222086,
            ]
        );
        return redirect('/login');
    }
    
    public function login(){
        return view('form.login');
    }
}
