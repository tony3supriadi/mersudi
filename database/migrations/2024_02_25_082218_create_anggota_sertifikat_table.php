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
        Schema::create('anggota_sertifikat', function (Blueprint $table) {
            $table->id();
            $table->morphs('model');
            $table->string('judul_kegiatan');
            $table->string('nomor_sertifikat')->unique();
            $table->date('tanggal_pelaksanaan')->nullable();
            $table->string('background')->nullable();
            $table->json('signature')->nullable();
            $table->string('template')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_sertifikat');
    }
};
