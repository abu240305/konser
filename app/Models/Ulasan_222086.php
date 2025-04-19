<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan_222086 extends Model
{
    use HasFactory;

    protected $table = 'ulasan_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'konser_id_222086',
        'customer_id_222086',
        'ulasan_222086',
        'tanggal_222086',
    ];

    public function customer(){
        return $this->hasOne('App\Models\Customer_222086','id','customer_id_222086');
    }
    public function konser(){
        return $this->hasOne('App\Models\Konser_222086','id','konser_id_222086');
    }
}
