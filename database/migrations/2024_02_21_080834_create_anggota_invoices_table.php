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
        Schema::create('anggota_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->foreignId('anggota_has_kta_id')->constrained('anggota_has_kta')->onDelete('cascade');
            // $table->foreignId('anggota_has_event_id')->constrained('anggota_has_kta')->onDelete('cascade');
            $table->enum('ketgori', ['kta', 'event'])->nullable();
            $table->double('total', 16, 0)->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status', [0, 1, 2])->default(0); // 0 = unpaid, 1 = paid, 2 = verify
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_invoices');
    }
};
