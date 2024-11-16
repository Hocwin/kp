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
        Schema::create('pengambilan_barang_gudang', function (Blueprint $table) {
            $table->id('idPengambilanBarang');
            $table->unsignedBigInteger('idBarang')->index()->nullable();
            $table->string('namaBarang');
            $table->unsignedBigInteger('idGudang')->index()->nullable();
            $table->string('namaGudang');
            $table->string('lokasi');
            $table->string('namaSopir');
            $table->timestamp('tanggalPengambilan');

            $table->foreign('idBarang')->references('idBarang')->on('barang');
            $table->foreign('idGudang')->references('idGudang')->on('gudang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengambilan_barang_gudang');
    }
};
