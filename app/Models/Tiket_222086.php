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
        'vip_222086',
        'reguler_222086',
        'quota_vip_222086',
        'quota_reguler_222086',
    ];

    public function konser(){
        return $this->hasOne('App\Models\Konser_222086','id','konser_id_222086');
    }
}
