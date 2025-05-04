<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konser_222086 extends Model
{
    use HasFactory;
    protected $table = 'konser_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'nama_konser_222086',
        'tempat_222086',
        'tanggal_222086',
        'jam_222086',
        'deskripsi_222086',
        'foto_222086',
    ];


    public function tiket(){
        return $this->hasOne(Tiket_222086::class, 'konser_id_222086', 'id');
    }
    public function ulasan()
    {
        return $this->hasMany(ulasan_222086::class, 'konser_id_222086', 'id'); // disesuaikan dengan DB Anda
    }


}
