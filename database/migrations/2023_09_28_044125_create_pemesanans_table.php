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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('name_lengkap');
            $table->string('email');
            $table->string('nomor_telepon_wa');
            $table->enum('kategory',['tugas','game']);
            $table->string('deskripsi_tugas')->nullable();
            $table->string('deadline_tugas')->nullable();
            $table->string('upload_file_tugas')->nullable();
            $table->enum('pilihan_game',['mobile legend','pubg','free fire'])->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
