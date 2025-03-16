<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_konser',
        'tempat',
        'tanggal',
        'jam',
        'deskripsi',
        'foto',
    ];
}
