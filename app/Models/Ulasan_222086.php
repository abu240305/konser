<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan_222086 extends Model
{
    use HasFactory;

    protected $table = 'ulasan_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'Konser_id_222086',
        'User_id_222086',
        'ulasan_222086',
        'tanggal_222086',
    ];
}
