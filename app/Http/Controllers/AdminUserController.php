<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_222086;

class AdminUserController extends Controller
{
    public function user(){
        return view('admin.user.index');
    }

    public function register(){
        return view('form.register');
    }
    
    public function login(){
        return view('form.login');
    }
}
