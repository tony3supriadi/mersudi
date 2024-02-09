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
        Schema::create('m_kolat', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 4)->unique();
            $table->string('nama');
            $table->text('alamat_sekretariat')->nullable();
            $table->json('latlng')->nullable();
            $table->enum('status', [0, 1, 2])->default(1)->nullable();
            $table->longText('keterangan')->nullable();
            $table->foreignId('daerah_id')->nullable()->constrained('m_daerah')->cascadeOnDelete();
            $table->foreignId('cabang_id')->nullable()->constrained('m_cabang')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kolat');
    }
};
