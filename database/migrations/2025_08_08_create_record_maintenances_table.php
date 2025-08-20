<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('record_maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->foreignId('instansi_id')->constrained()->onDelete('cascade');
            $table->string('nama_perusahaan_tambahan')->nullable();
            $table->text('keluhan');
            $table->string('status');
            $table->text('keterangan_progress')->nullable();
            $table->string('kebutuhan_perangkat')->nullable();
            $table->enum('jenis', ['Kunjungan', 'Perbaikan']);
            $table->json('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('record_maintenances');
    }
};
