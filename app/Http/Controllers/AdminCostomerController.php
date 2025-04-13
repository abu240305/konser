<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_222086;

class AdminCostomerController extends Controller
{
    public function customer(){
        return view('admin.customer.index');
    }

    public function register(){
        return view('form.register');
    }
    
    public function login(){
        return view('form.login');
    }
    
}
