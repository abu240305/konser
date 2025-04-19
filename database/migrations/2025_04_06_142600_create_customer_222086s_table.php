<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_222086', function (Blueprint $table) {
            $table->id();
            $table->string('nama_222086');
            $table->string('email_222086')->unique();
            $table->string('jenisKelamin_222086');
            $table->date('tanggalLahir_222086');
            $table->string('alamat_222086');
            $table->string('password_222086');
            $table->enum('role_222086', ['admin', 'user']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_222086');
    }
};
