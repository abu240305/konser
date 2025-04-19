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
            $table->string('konser_id_222086');
            $table->string('vip_222086')->nullable();
            $table->string('reguler_222086')->nullable();
            $table->string('quota_vip_222086')->nullable();
            $table->string('quota_reguler_222086')->nullable();
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
