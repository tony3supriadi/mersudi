<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggota_has_kta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->nullable()->constrained('anggota')->nullOnDelete();
            $table->foreignId('kta_id')->nullable()->constrained('m_kta')->nullOnDelete();
            $table->foreignId('signature_id')->nullable()->constrained('m_signature')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete(); // validator
            $table->double('harga', 16, 0)->nullable();
            $table->double('harga_cetak', 16, 0)->nullable();
            $table->double('harga_kirim', 16, 0)->nullable();
            $table->double('harga_total', 16, 0)->nullable();
            $table->date('tanggal_berlaku')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status', [0, 1, 2])->nullable(); // [0: Validasi, 1: Aktif, 2: Ditolak]
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
        Schema::dropIfExists('anggota_has_kta');
    }
};
