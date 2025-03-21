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
        Schema::create('master', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->decimal('modal', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->integer('stok_awal');
            $table->integer('stok_akhir')->nullable();
            $table->integer('penjualan')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
