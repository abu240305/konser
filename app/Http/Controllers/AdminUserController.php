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

    
}
