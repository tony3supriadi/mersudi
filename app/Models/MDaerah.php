<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class MDaerah extends Model
{
    use HasFactory;

    protected $table = "m_daerah";
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'nama',
        'alamat_sekretariat',
        'latlng',
        'status',
        'keterangan',
        'user_id',
        'email',
        'password'
    ];

    protected $casts = [
        'kode' => 'string',
        'latlng' => 'json'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $user = User::create([
                'name' => $model->nama,
                'email' => $model->email,
                'password' => bcrypt($model->password),
                'email_verified_at' => now()
            ]);
            $role = Role::firstOrCreate(['name' => 'Pengda']);
            $user->assignRole([$role->id]);

            $model->user_id = $user->id;

            $model = Arr::except($model, ['email', 'password']);
        });

        static::updating(function ($model) {
            DB::table('m_daerah_log')->insert([
                'user_id' => auth()->user()->id,
                'data_id' => $model->id,
                'konten' => json_encode($model->getDirty()),
                'aksi' => 'update',
                'keterangan' => 'Update Data'
            ]);
        });

        static::deleting(function ($model) {
            DB::table('m_daerah_log')
                ->where('data_id', $model->id)
                ->delete();
        });

        static::deleted(function ($model) {
            User::find($model->user_id)->delete();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah', 'kode');
    }

    public function cabang()
    {
        return $this->hasMany(MCabang::class, 'daerah_id', 'id');
    }

    public function kolat()
    {
        return $this->hasMany(MKolat::class, 'daerah_id', 'id');
    }
}
