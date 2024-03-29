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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->enum('status_pendaftaran', ['baru', 'diterima', 'dibatalkan', 'selesai'])->default('baru');
            $table->string('nama_institusi');
            $table->string('nama_penanggungjawab');
            $table->longText('alamat_institusi');
            $table->string('email_institusi');
            $table->string('nomor_institusi');
            $table->date('tanggal_kunjungan');
            $table->string('paket');
            $table->integer('jumlah_peserta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
