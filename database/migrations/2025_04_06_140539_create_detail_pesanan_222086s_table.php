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
        Schema::create('detail_pesanan_222086', function (Blueprint $table) {
            $table->id();
            $table->string('pesanan_id_222086');
            $table->string('tiket_id_222086');
            $table->string('jumlah_222086');
            $table->enum('type_222086', ['vip', 'reguler']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan_222086');
    }
};
