<?php

namespace App\Http\Controllers;

use App\Models\Customer_222086;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index(){
        $user = Auth::guard('customer_222086')->user();

        if ($user) {
            return $user->role_222086 === 'admin'
                ? redirect()->intended('admin')
                : redirect()->intended('/');
        }

        return view('form.login');
    }
    // Proses login
    public function prosesLogin(Request $request){
        $request->validate([
            'email_222086' => 'required|email',
            'password_222086' => 'required',
        ]);

        $credentials = [
            'email_222086' => $request->input('email_222086'),
            'password' => $request->input('password_222086'),
        ];


        if (Auth::guard('customer_222086')->attempt($credentials)) {
            $user = Auth::guard('customer_222086')->user();

            return $user->role_222086 === 'admin'
                ? redirect()->intended('admin')->with('success', 'Login Berhasil')
                : redirect()->intended('/')->with('success', 'Login Berhasil');
        }

        return redirect('/login')->withErrors(['login_gagal' => 'Email atau password salah'])->withInput();
    }

    // Menampilkan halaman registrasi
    public function register()
    {
        return view('form.register');
    }

    // Proses registrasi
    public function prosesRegister(Request $request)
    {
        $request->validate([
            'nama_222086' => 'required',
            'email_222086' => 'required|email|unique:customer_222086,email_222086',
            'jenisKelamin_222086' => 'required',
            'tanggalLahir_222086' => 'required',
            'alamat_222086' => 'required',
            'password_222086' => 'required|min:6',
        ]);


        Customer_222086::create([
            'nama_222086' => $request->nama_222086,
            'email_222086' => $request->email_222086,
            'jenisKelamin_222086' => $request->jenisKelamin_222086,
            'tanggalLahir_222086' => $request->tanggalLahir_222086,
            'alamat_222086' => $request->alamat_222086,
            'password_222086' => Hash::make($request->password_222086),
            'role_222086' => 'user',
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::guard('customer_222086')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda berhasil logout');
    }
}
