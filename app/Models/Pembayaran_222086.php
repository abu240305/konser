<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran_222086 extends Model
{
    use HasFactory;

    protected $table = 'pembayaran_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'pesanan_id_222086',
        'tanggal_222086',
    ];
}
