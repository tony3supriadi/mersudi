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
        Schema::create('m_kta_has_tingkatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kta_id')->constrained('m_kta')->cascadeOnDelete();
            $table->foreignId('tingkatan_id')->constrained('m_tingkatan')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kta_has_tingkatan');
    }
};
