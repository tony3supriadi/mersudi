<?php

namespace Database\Seeders;

use App\Models\MSignature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $signatures = [
            [
                'nama' => 'Ir. Nehemia Budi Satyawan',
                'jabatan' => 'Ahli Waris',
                'signature' => 'image',
                'aktif' => true,
            ],
            [
                'nama' => 'Mayjen TNI Mohamad Hasan',
                'jabatan' => 'Katua Umum',
                'signature' => 'image',
                'aktif' => true,
            ],
        ];

        foreach ($signatures as $signature)
        {
            MSignature::create($signature);
        }
    }
}
