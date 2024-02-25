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
        Schema::create('anggota_sertifikat_peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut', 4)->nullable();
            $table->foreignId('sertifikat_id')->nullable()->constrained('anggota_sertifikat')->nullOnDelete();
            $table->foreignId('anggota_id')->nullable()->constrained('anggota')->nullOnDelete();
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('phone', 32)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('pekerjaan', 32)->nullable();
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->default('WNI')->nullable();
            $table->string('pengda')->nullable();
            $table->string('pengcab')->nullable();
            $table->string('kolat')->nullable();
            $table->string('tingkatan')->nullable();
            $table->string('status_pelatih')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_sertifikat_peserta');
    }
};
