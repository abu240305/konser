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
        Schema::create('ulasan_222086', function (Blueprint $table) {
            $table->id();
            $table->string('konser_id_222086');
            $table->string('customer_id_222086');
            $table->string('ulasan_222086');
            $table->date('tanggal_222086');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan_222086');
    }
};
