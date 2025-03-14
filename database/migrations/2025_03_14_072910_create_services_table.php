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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_faktur')->unique();
            $table->string('kode_teknisi');
            $table->string('nama_pelanggan');
            $table->string('type_barang');
            $table->string('jenis_service');
            $table->decimal('biaya_service', 10, 2);
            $table->decimal('biaya_sparepart', 10, 2);
            $table->string('kode_toko');
            $table->string('status_tebus');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
