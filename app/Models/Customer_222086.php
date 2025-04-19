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
        'role_222086',
    ];
    
    public function getAuthPassword()
    {
        return $this->password_222086;
    }

    // Menyesuaikan nama kolom email
    public function getAuthIdentifierName()
    {
        return 'email_222086'; // Kolom email custom
    }
}
