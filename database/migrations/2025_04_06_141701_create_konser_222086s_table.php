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
        Schema::create('konser_222086', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konser_222086');
            $table->string('tempat_222086');
            $table->date('tanggal_222086');
            $table->time('jam_222086');
            $table->string('deskripsi_222086');
            $table->string('foto_222086');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konser_222086');
    }
};
