<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Pesanan_id',
        'Tiket_id',
        'jumlah',
    ]; 
}
