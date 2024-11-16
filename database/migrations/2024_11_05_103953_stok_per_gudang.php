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
        Schema::create('stok_per_gudang', function (Blueprint $table) {
            $table->id('idStok');
            $table->unsignedBigInteger('idGudang')->index()->nullable();
            $table->unsignedBigInteger('idBarang')->index()->nullable();
            $table->integer('jumlahStok');
            $table->timestamps();

            $table->foreign('idBarang')->references('idBarang')->on('barang');
            $table->foreign('idGudang')->references('idGudang')->on('gudang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_per_gudang');
    }
};
