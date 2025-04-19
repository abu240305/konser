<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\customer_222086;

class AuthController extends Controller
{
    public function register(){
        return view('form.register');
    }
    public function prosesRegister(Request $request){
        customer_222086::create(
            [
                'nama_222086'=>$request->nama_222086,
                'email_222086'=>$request->email_222086,
                'jenisKelamin_222086'=>$request->jenisKelamin_222086,
                'tanggalLahir_222086'=>$request->tanggalLahir_222086,
                'alamat_222086'=>$request->alamat_222086,
                'password_222086'=>hash::make($request->password_222086),
                'role_222086'=>'user'
            ]
        );
        return redirect('/login');
    }
    
    public function login(){
        return view('form.login');
    }
    public function prosesLogin(Request $request){
        $customer = customer_222086::where('email_222086', $request->email_222086)->first();
        if ($customer) {
            if (Hash::check($request->password_222086, $customer->password_222086)) {
                if($customer->role_222086 == 'admin'){
                    $request->session()->put('customer', $customer);
                    return redirect('/admin')->with('success', 'Login Berhasil');
                } else {
                    $request->session()->put('customer', $customer);
                    return redirect('/')->with('success', 'Login Berhasil');
                }
                return redirect('/')->with('success', 'Login Berhasil');
            } else {
                return redirect('/login')->with('error', 'Password Salah');
            }
        } else {
            return redirect('/login')->with('error', 'Email Tidak Ditemukan');
        }
    }
    

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return Redirect('/login');
    }
}
