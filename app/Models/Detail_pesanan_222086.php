<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan_222086 extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'Pesanan_id_222086',
        'Tiket_id_222086',
        'jumlah_222086',
    ]; 
}
