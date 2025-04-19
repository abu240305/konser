<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang_222086 extends Model
{
    use HasFactory;
    protected $table = 'keranjang_222086';

    protected $fillable = [
        'customer_id_222086',
        'tiket_id_222086',
        'jumlah',
        'type_222086'
    ];

    public function customer(){
        return $this->hasOne('App\Models\Customer_222086','id','customer_id_222086');
    }
    public function tiket(){
        return $this->hasOne('App\Models\Tiket_222086','id','tiket_id_222086');
    }
}
