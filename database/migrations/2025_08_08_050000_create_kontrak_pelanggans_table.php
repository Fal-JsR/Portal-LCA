<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kontrak_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instansi_id')->constrained()->onDelete('cascade');
            $table->string('form_pdf')->nullable();
            $table->string('kontrak_pdf')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kontrak_pelanggans');
    }
};
