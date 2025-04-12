<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket_222086 extends Model
{
    use HasFactory;

    protected $table = 'tiket_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'konser_id_222086',
        'harga_222086',
        'quota_222086',
        'type_222086',
    ];
}
