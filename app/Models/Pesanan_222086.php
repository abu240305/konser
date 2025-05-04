<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan_222086 extends Model
{
    use HasFactory;

    protected $table = 'pesanan_222086';

    protected $fillable = [
        'customer_id_222086',
        'total_222086',
        'tanggal_222086',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer_222086', 'customer_id_222086', 'id');
    }
}
