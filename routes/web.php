<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;;

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

// route user
Route::get('/admin/user',[AdminController::class,'user']);

// route konser
Route::get('/admin/konser',[AdminController::class,'konser']);
Route::get('/admin/konser/tambahkonser',[AdminController::class,'tambahKonser']);
Route::post('/admin/konser/tambahkonser/proses',[AdminController::class,'prosesTambahKonser']);
Route::post('/admin/konser/edit',[AdminController::class,'editKonser']);
Route::post('/admin/konser/edit/proses',[AdminController::class,'prosesEditKonser']);
Route::post('/admin/konser/delete',[AdminController::class,'delete']);

// route tiket
Route::get('/admin/tiket',[AdminController::class,'tiket']);
Route::get('/admin/tiket/tambahtiket',[AdminController::class,'tambahTiket']);

// route pembelian
Route::get('/admin/pembelian',[AdminController::class,'PembelianTiket']);

// route ulasan
Route::get('/admin/ulasan',[AdminController::class,'ulasan']);
Route::get('/register',[AdminController::class,'register']);
Route::get('/login',[AdminController::class,'login']);




// user
Route::get('user',[userController::class,'user']);
Route::get('/konser',[userController::class,'konser']);
Route::get('/card',[userController::class,'cart']);

