<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_222086;

class AdminCostomerController extends Controller
{
    public function customer(){
        $dataCustomer = customer_222086::all();
        return view('admin.customer.index', compact('dataCustomer'));
    }

    public function register(){
        return view('form.register');
    }
    public function prosesRegister(Request $request){
        customer_222086::create(
            [
                'nama_222086'=>$request->nama,
                'email_222086'=>$request->email,
                'jenisKelamin_222086'=>$request->jenisKelamin,
                'tanggalLahir_222086'=>$request->tanggalLahir,
                'alamat_222086'=>$request->alamat,
                'password_222086'=>$request->password,
            ]
        );
        return redirect('/login');
    }
    
    public function login(){
        return view('form.login');
    }
    
}
