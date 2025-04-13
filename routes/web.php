<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminKonserController;
use App\Http\Controllers\AdminCostomerController;
use App\Http\Controllers\AdminUlasanController;
use App\Http\Controllers\AdminPembelianTiketController;
use App\Http\Controllers\AdminTiketController;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// awal admin

Route::get('/admin',[AdminController::class,'dashboard']);

// route user
Route::get('/admin/customer',[AdminCostomerController::class,'customer']);
Route::get('/register',[AdminCostomerController::class,'register']);
Route::get('/login',[AdminCostomerController::class,'login']);

// route konser
Route::get('/admin/konser',[AdminKonserController::class,'konser']);
Route::get('/admin/konser/tambahkonser',[AdminKonserController::class,'tambahKonser']);
Route::get('/admin/konser/edit',[AdminKonserController::class,'editKonser']);

// route tiket
Route::get('/admin/tiket',[AdminTiketController::class,'tiket']);
Route::get('/admin/tiket/tambahtiket',[AdminTiketController::class,'tambahTiket']);;
Route::get('/admin/tiket/edit',[AdminTiketController::class,'editTiket']);


// route pembelian
Route::get('/admin/pembelian',[AdminPembelianTiketController::class,'PembelianTiket']);
Route::get('/admin/pembelian/detail',[AdminPembelianTiketController::class,'detailPembelianTiket']);

// route ulasan
Route::get('/admin/ulasan',[AdminUlasanController::class,'ulasan']);

//akhir admin


// awal user
Route::get('/',[userController::class,'konser']);
Route::get('/detail',[userController::class,'detailKonser']);
Route::get('/checkout',[userController::class,'checkoutKonser']);
Route::get('/cart',[userController::class,'cart']);
Route::get('/tiket',[userController::class,'tiket']);
Route::get('/struk',[userController::class,'struk']);
Route::get('/ulasan',[userController::class,'ulasan']);
Route::get('/qris',[userController::class,'qris']);
Route::get('/selesai',[userController::class,'sukses']);
Route::get('/customer',[userController::class,'customer']);
Route::get('/customer/edit',[userController::class,'customeredit']);


