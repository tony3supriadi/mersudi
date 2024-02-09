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
        Schema::create('m_cabang_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_id')->constrained('m_cabang')->cascadeOnDelete();
            $table->json('konten')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('aksi', ['create', 'update', 'delete'])->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_cabang_log');
    }
};
