<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class Anggota extends Model
{
    use HasFactory;

    public const STATUS_VERIFY = "0";
    public const STATUS_ACTIVE = "1";
    public const STATUS_DENIED = "2";
    public const STATUS_UNCOMPLETE = "3";

    protected $table = 'anggota';
    protected $fillable = [
        'user_id',
        'nomor_urut_registrasi',
        'nomor_urut_anggota',
        'nia',
        'nik',
        'scan_ktp',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'photo',
        'email',
        'phone',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'desa_id',
        'alamat',
        'kodepos',
        'latlng',
        'pekerjaan',
        'kewarganegaraan',
        'daerah_id',
        'cabang_id',
        'kolat_id',
        'tingkatan_id',
        'tanggal_bergabung',
        'status',
        'keterangan'
    ];

    protected $appends = [
        'usia',
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'nomor_urut_registrasi' => 'integer',
        'nomor_anggota' => 'string',
        'provinsi_id' => 'string',
        'kabupaten_id' => 'string',
        'kecamatan_id' => 'string',
        'desa_id' => 'string',
        'tanggal_lahir' => 'date',
        'tanggal_bergabung' => 'date',
        'latlng' => 'json',
        'status' => 'string'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->email) {
                if ( ! User::where('email', $model->email)->exists() ) {
                    $user = User::create([
                        'name' => $model->nama_lengkap,
                        'email' => $model->email,
                        'phone' => $model->phone,
                        'password' => $model->password
                            ? bcrypt($model->password)
                            : bcrypt('12345678'),
                        'email_verified_at' => now(),
                    ]);

                    $role = Role::where('name', 'Anggota')->first();
                    $user->assignRole([$role->id]);

                    $model->user_id = $user->id;
                }
            }
        });

        static::created(function ($model) {
            DB::table('anggota_log')->insert([
                'anggota_id' => $model->id,
                'konten' => $model,
                'keterangan' => 'Pendaftaran anggota berhasil',
                'aksi' => 'create',
                'user_id' => auth()->user()->id
            ]);
        });

        static::updated(function ($model) {
            if ( $model->isClean('status') ) {
                DB::table('anggota_log')->insert([
                    'anggota_id' => $model->id,
                    'konten' => $model,
                    'keterangan' => 'Perubahan anggota berhasil',
                    'aksi' => 'update',
                    'user_id' => auth()->user()->id
                ]);
            }

            if ( $model->wasChanged('status') ) {
                DB::table('anggota_log_verify')->insert([
                    'anggota_id' => $model->id,
                    'status' => $model->status,
                    'keterangan' => $model->keterangan ?? 'Pendaftaran anggota berhasil',
                    'verified_by' => auth()->user()->id
                ]);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function daerah()
    {
        return $this->belongsTo(MDaerah::class, 'daerah_id');
    }

    public function cabang()
    {
        return $this->belongsTo(MCabang::class, 'cabang_id');
    }

    public function kolat()
    {
        return $this->belongsTo(MKolat::class, 'kolat_id');
    }

    public function tingkatan()
    {
        return $this->belongsTo(MTingkatan::class, 'tingkatan_id');
    }

    public function provinsi()
    {
        return $this->hasOne(Wilayah::class, 'kode', 'provinsi_id');
    }

    public function kabupaten()
    {
        return $this->hasOne(Wilayah::class, 'kode', 'kabupaten_id');
    }

    public function kecamatan()
    {
        return $this->hasOne(Wilayah::class, 'kode', 'kecamatan_id');
    }

    public function desa()
    {
        return $this->hasOne(Wilayah::class, 'kode', 'desa_id');
    }

    public function kta()
    {
        return $this->hasMany(AnggotaHasKta::class, 'anggota_id');
    }

    public function hasKta() {
        return $this->kta()->count();
    }

    public function getUsiaAttribute()
    {
        return $this->tanggal_lahir->diffInyears(now());
    }

    public function fullCompleteRegister()
    {
        return $this->whereNotNull('daerah_id')
            ->whereNotNull('cabang_id')
            ->whereNotNull('kolat_id')
            ->whereNotNull('tingkatan_id')
            ->whereNotNull('tanggal_bergabung')
            ->count() > 0;
    }

    public function getStatusName($badge = false)
    {
        if ($badge) {
            if ($this->status == Anggota::STATUS_VERIFY) {
                return '<span class="badge bg-label-warning">Verifikasi</span>';
            } else if ($this->status == Anggota::STATUS_ACTIVE) {
                return '<span class="badge bg-label-success">Aktif</span>';
            } else if ($this->status == Anggota::STATUS_DENIED) {
                return '<span class="badge bg-label-dark">Ditolak</span>';
            } else if ($this->status == Anggota::STATUS_UNCOMPLETE) {
                return '<span class="badge bg-label-secondary">Belum Lengkap</span>';
            }
        } else {
            if ($this->status == Anggota::STATUS_VERIFY) {
                return 'Verifikasi';
            } else if ($this->status == Anggota::STATUS_ACTIVE) {
                return 'Aktif';
            } else if ($this->status == Anggota::STATUS_DENIED) {
                return 'Ditolak';
            } else if ($this->status == Anggota::STATUS_UNCOMPLETE) {
                return 'Belum Lengkap';
            }
        }
    }
}
