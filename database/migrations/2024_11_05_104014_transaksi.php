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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('idTransaksi');
            $table->unsignedBigInteger('idPengguna')->index()->nullable();
            $table->string('namaPengguna');
            $table->enum('tipePembayaran', ['cash', 'tempo']);
            $table->timestamp('tanggalTransaksi');
            $table->enum('status', ['on proses', 'selesai'])->default('on proses');
            $table->timestamps();

            $table->foreign('idPengguna')->references('idPengguna')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
