<?php

namespace Database\Seeders;

use App\Models\MKta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MKtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'P',
                'nama' => 'KTA Pelajar/Tunas 1-6',
                'harga' => 20000,
                'tingkatan' => [1, 2, 3, 4, 5, 6]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler (D1-D2)',
                'harga' => 30000,
                'tingkatan' => [7, 8]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler (B1-B2)',
                'harga' => 40000,
                'tingkatan' => [9, 10]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler (K1-K2)',
                'harga' => 50000,
                'tingkatan' => [11, 12]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler + Fisik BRIZI(KH1)',
                'harga' => 120000,
                'tingkatan' => [13]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler + Fisik BRIZI(KH2)',
                'harga' => 140000,
                'tingkatan' => [14]
            ],
            [
                'kode' => 'R',
                'nama' => 'KTA Reguler + Fisik BRIZI(KH3)',
                'harga' => 150000,
                'tingkatan' => [15]
            ],
            [
                'kode' => 'B',
                'nama' => 'KTA Kebugaran',
                'harga' => 150000 ,
                'tingkatan' => [19]
            ],
            [
                'kode' => 'X',
                'nama' => 'KTA Executive',
                'harga' => 300000,
                'tingkatan' => [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
            ],
            [
                'kode' => 'L',
                'nama' => 'KTA Lifetime (65 th keatas)',
                'harga' => 300000,
                'tingkatan' => [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
            ]
        ];

        foreach ($data as $item) {
            $kta = MKta::create([
                'kode' => $item['kode'],
                'nama' => $item['nama'],
                'harga' => $item['harga']
            ]);

            foreach ($item['tingkatan'] as $value) {
                DB::table('m_kta_has_tingkatan')
                    ->insert([
                        'kta_id' => $kta->id,
                        'tingkatan_id' => $value
                    ]);
            }
        }
    }
}
