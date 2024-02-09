<?php

namespace Database\Seeders;

use App\Models\MTingkatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MTingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'T1',
                'nama' => 'TUNAS 1',
            ],
            [
                'kode' => 'T2',
                'nama' => 'TUNAS 2',
            ],
            [
                'kode' => 'T3',
                'nama' => 'TUNAS 3',
            ],
            [
                'kode' => 'T4',
                'nama' => 'TUNAS 4',
            ],
            [
                'kode' => 'T5',
                'nama' => 'TUNAS 5',
            ],
            [
                'kode' => 'T6',
                'nama' => 'TUNAS 6',
            ],
            [
                'kode' => 'D1',
                'nama' => 'DASAR 1',
            ],
            [
                'kode' => 'D2',
                'nama' => 'DASAR 2',
            ],
            [
                'kode' => 'B1',
                'nama' => 'BALIK 1',
            ],
            [
                'kode' => 'B2',
                'nama' => 'BALIK 2',
            ],
            [
                'kode' => 'K1',
                'nama' => 'KOMBINASI 1',
            ],
            [
                'kode' => 'K2',
                'nama' => 'KOMBINASI 2',
            ],
            [
                'kode' => 'KH1',
                'nama' => 'KHUSUS 1',
            ],
            [
                'kode' => 'KH2',
                'nama' => 'KHUSUS 2',
            ],
            [
                'kode' => 'KH3',
                'nama' => 'KHUSUS 3',
            ],
            [
                'kode' => 'K',
                'nama' => 'KESEGARAN',
            ],
            [
                'kode' => 'I1',
                'nama' => 'INTI 1',
            ],
            [
                'kode' => 'I2',
                'nama' => 'INTI 2',
            ],
            [
                'kode' => 'KBG',
                'nama' => 'KEBUGARAN'
            ]
        ];

        foreach ($data as $item) {
            MTingkatan::create($item);
        }
    }
}
