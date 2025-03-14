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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->decimal('profit_sparepart', 10, 2);
            $table->decimal('profit_service', 10, 2);
            $table->decimal('fee_teknisi', 10, 2);
            $table->decimal('fee_toko', 10, 2);
            $table->decimal('plus_minus', 10, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
