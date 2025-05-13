<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer_222086;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user= [
            [
                'nama_222086' => 'Admin',
                'email_222086' => 'admin@gmail.com',
                'jenisKelamin_222086' => 'L',
                'tanggalLahir_222086' => '1990-01-01',
                'alamat_222086' => 'Jl. Admin No.1',
                'password_222086' => Hash::make('123456'),
                'role_222086' => 'admin',
            ],
            [
                'nama_222086' => 'User 1',
                'email_222086' => 'user1@gmail.com',
                'jenisKelamin_222086' => 'P',
                'tanggalLahir_222086' => '1995-02-15',
                'alamat_222086' => 'Jl. User1 No.2',
                'password_222086' => Hash::make('123456'),
                'role_222086' => 'user',
            ],
            [
                'nama_222086' => 'User 2',
                'email_222086' => 'user2@gmail.com',
                'jenisKelamin_222086' => 'L',
                'tanggalLahir_222086' => '1998-06-20',
                'alamat_222086' => 'Jl. User2 No.3',
                'password_222086' => Hash::make('123456'),
                'role_222086' => 'user',
            ],
        ];
        

        foreach ($user as $key => $value) {
            Customer_222086::create($value);
        }
    }
}