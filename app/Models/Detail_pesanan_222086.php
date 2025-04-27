<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan_222086 extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'pesanan_id_222086',
        'tiket_id_222086',
        'jumlah_222086',
        'type_222086',
    ]; 

    public function pesanan(){
        return $this->hasOne('App\Models\Pesanan_222086','id','pesanan_id_222086');
    }

    public function tiket(){
        return $this->hasOne('App\Models\Tiket_222086','id','tiket_id_222086');
    }
}