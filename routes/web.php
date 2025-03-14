<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('index');
// });


// admin

Route::get('/admin',[AdminController::class,'dashboard']);

Route::get('/admin/user',[AdminController::class,'user']);

Route::get('/admin/konser',[AdminController::class,'konser']);
Route::get('/admin/konser/tambahKonser',[AdminController::class,'tambahKonser']);

Route::get('/admin/tiket',[AdminController::class,'tiket']);
Route::get('/admin/tiket/tambahtiket',[AdminController::class,'tambahTiket']);

Route::get('/admin/pembelian',[AdminController::class,'PembelianTiket']);

Route::get('/admin/ulasan',[AdminController::class,'ulasan']);


// user
Route::get('/user',[userController::class,'user']);
Route::get('/user/konser',[userController::class,'konser']);

