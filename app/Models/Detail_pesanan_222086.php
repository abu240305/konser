<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan_222086 extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan_222086';

    protected $fillable = [
        'pesanan_id_222086',
        'tiket_id_222086',
        'jumlah_222086',
        'type_222086',
    ];

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan_222086', 'pesanan_id_222086', 'id'); // Sesuaikan relasi
    }

    public function tiket()
    {
        return $this->belongsTo('App\Models\Tiket_222086', 'tiket_id_222086', 'id'); // Sesuaikan relasi
    }
    public function ulasan(){
    return $this->hasOne(Ulasan_222086::class, 'konser_id_222086', 'tiket_id_222086');
    }
}
