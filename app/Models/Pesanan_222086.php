<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan_222086 extends Model
{
    use HasFactory;

    protected $table = 'pesanan_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'customer_id_222086',
        'total_222086',
        'tanggal_222086',
    ];
}
