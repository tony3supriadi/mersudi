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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->unsignedBigInteger('nomor_urut_registrasi')->unique(); // ex 1
            $table->string('nomor_urut_anggota', 16)->unique(); // ex 0000001 -> bisa request
            $table->string('nia', 16)->nullable(); // ex: 12.021.0000001
            $table->string('nik', 32)->nullable();
            $table->string('scan_ktp')->nullable();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->default('Laki-laki')->nullable();
            $table->string('tempat_lahir', 64)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('photo')->nullable();
            $table->string('email', 128)->nullable();
            $table->string('phone', 32)->nullable();
            $table->string('provinsi_id', 16)->nullable();
            $table->string('kabupaten_id', 16)->nullable();
            $table->string('kecamatan_id', 16)->nullable();
            $table->string('desa_id', 16)->nullable();
            $table->string('alamat')->nullable();
            $table->string('kodepos', 8)->nullable();
            $table->json('latlng')->nullable();
            $table->string('pekerjaan', 32)->nullable();
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->default('WNI')->nullable();
            $table->foreignId('daerah_id')->nullable()->constrained('m_daerah');
            $table->foreignId('cabang_id')->nullable()->constrained('m_cabang');
            $table->foreignId('kolat_id')->nullable()->constrained('m_kolat');
            $table->foreignId('tingkatan_id')->nullable()->constrained('m_tingkatan');
            $table->date('tanggal_bergabung')->nullable();
            $table->enum('status', [0, 1, 2, 3])->default(3); // [0: Validasi, 1: Aktif, 2: Ditolak, 3: Uncomplete]
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
        Schema::dropIfExists('anggota');
    }
};
