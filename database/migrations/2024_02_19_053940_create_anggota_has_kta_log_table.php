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
        Schema::create('anggota_has_kta_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_has_kta_id')->constrained('anggota_has_kta')->cascadeOnDelete();
            $table->enum('status', [0, 1, 2])->default(0); // [0: Validasi, 1: Aktif, 2: Ditolak]
            $table->longText('keterangan')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_has_kta_log');
    }
};
