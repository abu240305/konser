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
        Schema::create('tiket_222086', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konser_id_222086')->constrained('konser_222086')->onDelete('cascade');
            $table->string('harga_222086');
            $table->string('quota_222086');
            $table->string('type_222086');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_222086');
    }
};
