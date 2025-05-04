<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminKonserController;
use App\Http\Controllers\AdminCostomerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminTiketController;
use App\Http\Controllers\AdminUlasanController;
use App\Http\Controllers\AuthController;
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
Route::get('/admin/customer',[AdminCostomerController::class,'customer']);

// route register dan login
Route::get('/register',[AuthController::class,'register']);
Route::post('/register/proses',[AuthController::class,'prosesRegister']);
Route::get('/login',[AuthController::class,'login']);
Route::post('/login/proses',[AuthController::class,'prosesLogin']);
Route::get('/logout',[AuthController::class,'logout']);

// route konser
Route::get('/admin/konser',[AdminKonserController::class,'konser']);
Route::get('/admin/konser/tambahkonser',[AdminKonserController::class,'tambahKonser']);
Route::post('/admin/konser/tambahkonser/proses',[AdminKonserController::class,'prosesTambahKonser']);
Route::post('/admin/konser/edit',[AdminKonserController::class,'editKonser']);
Route::post('/admin/konser/edit/proses',[AdminKonserController::class,'prosesEditKonser']);
Route::post('/admin/konser/delete',[AdminKonserController::class,'delete']);

// route tiket
Route::get('/admin/tiket',[AdminTiketController::class,'tiket']);
Route::get('/admin/tiket/tambahtiket',[AdminTiketController::class,'tambahTiket']);
Route::post('/admin/tiket/tambahtiket/proses',[AdminTiketController::class,'prosesTambahTiket']);
Route::post('/admin/tiket/edit',[AdminTiketController::class,'editTiket']);
Route::post('/admin/tiket/edit/proses',[AdminTiketController::class,'prosesEditTiket']);
Route::post('/admin/tiket/delete',[AdminTiketController::class,'delete']);

// route pembelian
Route::get('/admin/pembelian',[AdminController::class,'PembelianTiket']);
Route::get('/admin/pembelian/detail/{id}',[AdminController::class,'detailPembelianTiket']);

// route ulasan
Route::get('/admin/ulasan',[AdminUlasanController::class,'ulasan']);

//akhir admin


// awal user
Route::get('/',[userController::class,'konser']);
Route::get('/detail/{id}',[userController::class,'detailKonser']);
Route::get('/checkout',[userController::class,'checkoutKonser']);
Route::get('/cart',[userController::class,'cart']);
Route::get('/cart/delete/{id}',[userController::class,'delete'])->name('cart.delete');
Route::get('/tiket',[userController::class,'tiket']);
Route::get('/struk',[userController::class,'struk']);
Route::get('/ulasan',[userController::class,'ulasan']);
Route::post('/qris',[userController::class,'qris']);
Route::post('/selesai',[userController::class,'sukses']);
Route::get('/customer',[userController::class,'customer']);
Route::get('/customer/edit',[userController::class,'customeredit']);

Route::post('/storeKeranjang', [userController::class, 'storeKeranjang'])->name('store.keranjang');

Route::get('/ulasan/{id}', [userController::class, 'tambahUlasan'])->name('ulasan.tambah');
Route::post('/ulasan/proses', [userController::class, 'prosesUlasan'])->name('ulasan.proses');




