<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_222086 extends Model
{
    use HasFactory;

    protected $table = 'customer_222086'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'nama_222086',
        'email_222086',
        'jenisKelamin_222086',
        'tanggalLahir_222086',
        'alamat_222086',
        'password_222086',
    ];
}
