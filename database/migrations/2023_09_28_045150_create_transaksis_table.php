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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nama_pemesan')->references('id')->on('pemesanans');
            $table->integer('total_harga');
            $table->enum('status',['belum bayar','proses','selesai']);
            $table->string('deadline');
            $table->foreignId('nama_penjoki')->references('id')->on('penjokis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
