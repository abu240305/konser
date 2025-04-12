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
        Schema::create('pesanan_222086', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id_222086')->constrained('customer_222086')->onDelete('cascade');
            $table->string('total_222086');
            $table->date('tanggal_222086');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_222086');
    }
};
