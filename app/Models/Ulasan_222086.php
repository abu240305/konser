<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan_222086 extends Model
{
    use HasFactory;

    protected $table = 'ulasan_222086';

    protected $fillable = [
        'konser_id_222086',
        'customer_id_222086',
        'ulasan_222086',
        'tanggal_222086',
        'rating_222086',
    ];

    protected $casts = [
        'tanggal_222086' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer_222086::class, 'customer_id_222086');
    }

    public function konser()
    {
        return $this->belongsTo(Konser_222086::class, 'konser_id_222086', 'id');
    }
}
