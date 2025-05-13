<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer_222086 extends Authenticatable
{
    use Notifiable;

    // Menentukan nama tabel yang digunakan
    protected $table = 'customer_222086';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'nama_222086',
        'email_222086',
        'jenisKelamin_222086',
        'tanggalLahir_222086',
        'alamat_222086',
        'password_222086',
        'role_222086',
    ];

    // Kolom yang disembunyikan dari array/json
    protected $hidden = [
        'password_222086',
        'remember_token',
    ];

    /**
     * Override fungsi yang menentukan kolom password yang digunakan Auth.
     */
    public function getAuthPassword()
    {
        return $this->password_222086;
    }

    /**
     * Override fungsi yang menentukan kolom identifier (email) untuk login.
     */
    public function getAuthIdentifierName()
    {
        return 'email_222086';
    }

    /**
     * Laravel akan memanggil method ini saat login untuk mengambil username/email.
     */
    public function username()
    {
        return 'email_222086';
    }
}
