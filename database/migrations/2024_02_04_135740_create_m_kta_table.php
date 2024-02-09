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
        Schema::create('m_kta', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 4);
            $table->string('nama');
            $table->double('harga', 16, 0)->nullable();
            $table->longText('background')->nullable();
            $table->text('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kta');
    }
};
