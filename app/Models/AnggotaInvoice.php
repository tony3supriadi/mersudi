<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaInvoice extends Model
{
    use HasFactory;

    public const STATUS_UNPAID = 0;
    public const STATUS_PAID = 1;
    public const STATUS_VERIFY = 2;

    protected $table = 'anggota_invoices';
    protected $fillable = [
        'invoice_number',
        'anggota_id',
        'anggota_has_kta_id',
        'ketgori',
        'total',
        'bukti_pembayaran',
        'status'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    public function anggota_has_kta()
    {
        return $this->belongsTo(AnggotaHasKta::class, 'anggota_has_kta_id');
    }
}
