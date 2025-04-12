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
            $table->foreignId('konser_id_222086')->constrained('konser_222086')->onDelete('cascade');
            $table->foreignId('customer_id_222086')->constrained('customer_222086')->onDelete('cascade');
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
