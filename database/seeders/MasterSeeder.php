<?php

namespace Database\Seeders;

use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => '11',
                'nama' => 'PENGDA ACEH',
                'alamat_sekretariat' => 'Jl. Mujahidin No.32, Kecamatan Kuta Alam, Lambaro Skep, Banda Aceh, Nanggroe Aceh Darussalam',
                'latlng' => [
                    'lat' => null,
                    'lng' => null
                ],
                'email' => 'mp.pengda.aceh@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '11.01',
                        'nama' => 'CABANG ACEH TENGGARA',
                        'alamat_sekretariat' => 'Desa pinding, BAMBEL, KUTACANE, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.acehtenggara@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => []
                    ],
                    [
                        'kode' => '11.02',
                        'nama' => 'CABANG ACEH BESAR',
                        'alamat_sekretariat' => 'Jln. Rama setia Lr. Tgk. Mansur No.169	Meuraxa	Lampaseh Aceh, Banda Aceh, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.acehbesar@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => []
                    ],
                    [
                        'kode' => '11.03',
                        'nama' => 'CABANG NAGAN RAYA',
                        'alamat_sekretariat' => 'Rameune Sport Jl. Nasional Meulaboh Tapaktuan, Kuala Simpang Peut, Suka Makmue, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.naganraya@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '11.03.001',
                                'nama' => 'KOLAT NAGAN RAYA',
                                'alamat_sekretariat' => 'Jl. Nasional Simpang Peut Kecamatan Kuala Kabupaten Nagan Raya, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                                'wilayah' => null,
                            ],
                        ]
                    ],
                    [
                        'kode' => '11.04',
                        'nama' => 'CABANG KOTA BANDA ACEH',
                        'alamat_sekretariat' => 'Gelanggang Mahasiswa USK lt.1, Syiah Kuala, Banda Aceh, Darussalam,	Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.kotabandaaceh@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '11.04.001',
                                'nama' => 'KOLAT UKM USK',
                                'alamat_sekretariat' => 'Universitas, Jalan Syekh Abdul Rauf No.1, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57087030,
                                    'lng' => 95.36698760,
                                ],
                            ],
                            [
                                'kode' => '11.04.002',
                                'nama' => 'KOLAT KEBUGARAN',
                                'alamat_sekretariat' => 'Universitas, Jalan Syekh Abdul Rauf No.1, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57087030,
                                    'lng' => 95.36698760,
                                ],
                            ],
                            [
                                'kode' => '11.04.003',
                                'nama' => 'KOLAT MIRLA',
                                'alamat_sekretariat' => 'H9XX+H3G, Miruek Lamreudeup, Baitussalam, Aceh Besar Regency, Aceh 23373, Indonesia',
                                'latlng' => [
                                    'lat' => 5.59894060,
                                    'lng' => 95.39770860,
                                ],
                            ],
                            [
                                'kode' => '11.04.004',
                                'nama' => 'KOLAT SMAN 13',
                                'alamat_sekretariat' => 'H8F7+3C2, Gampong Pande, Kuta Raja, Banda Aceh City, Aceh, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57262520,
                                    'lng' => 95.31351790,
                                ],
                            ],
                            [
                                'kode' => '11.04.005',
                                'nama' => 'KOLAT DARUSSALAM',
                                'alamat_sekretariat' => 'jln kopelma Darussalam Gelanggang Mahasiswa Unsyiah , Syiah Kuala, , kopelma darussalam, Banda Aceh, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.04.006',
                                'nama' => 'KOLAT KODAM ISKANDAR MUDA (IM)',
                                'alamat_sekretariat' => 'Jl. Mujahidin No. 32, Kuta Alam, , Lambaro Skep, Banda Aceh, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                        ]
                    ],
                    [
                        'kode' => '11.05',
                        'nama' => 'CABANG KOTA LHOKSEUMAWE',
                        'alamat_sekretariat' => 'Lr. LHOK PEUNTEUT DUSUN DAMAI PULO KITON, KOTA JUANG, BIREUEN, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.kotalhokseumawe@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '11.05.001',
                                'nama' => 'KOLAT POLITEKNIK LHOKSEUMAWE',
                                'alamat_sekretariat' => 'Ruang Serbaguna Politeknik Lhokseumawe, Blang mangat, , Buket Rata, Lhokseumawe, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.002',
                                'nama' => 'KOLAT PIDIE',
                                'alamat_sekretariat' => 'kantor Depak kota sigli, Kota sigli, , Kuala pidie, Sigli, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.003',
                                'nama' => 'KOLAT TAPAKTUAN',
                                'alamat_sekretariat' => 'Jalan Gajah Putih ujung pasir samping kodim 0107 aceh Selatan, Tapaktuan, , Lhok bengkuang timur Tapaktuan , Tapaktuan Aceh Selatan, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.004',
                                'nama' => 'KOLAT SMAN 2 LHOKSEUMAWE',
                                'alamat_sekretariat' => 'Jalan stadion Mon geudong, Banda sakti, , Mon geudong, Kota Lhokseumawe, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.005',
                                'nama' => 'KOLAT KABUPATEN BENER MERIAH',
                                'alamat_sekretariat' => 'Jl. Simpang tiga Redelong, Kecamatan Bukit, , Kampung Babusalam, Kabuoaten Bener Meriah, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.006',
                                'nama' => 'KOLAT ACEH UTARA',
                                'alamat_sekretariat' => 'Jl. Medan - b. Ac\\u00e8h no. 2 bayu, Syamtalira bayu, , -, Ac\\u00e8h utara, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '11.05.007',
                                'nama' => 'KOLAT BIREUEN',
                                'alamat_sekretariat' => 'Jl. LHOK PEUNTEUT DUSUN DAMAI , KOTA JUANG , , PULO KITON , BIREUEN , Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ]
                        ]
                    ]
                ]
            ],
            [
                'kode' => '12',
                'nama' => 'PENGDA SUMATERA UTARA',
                'wilayah' => '12',
                'alamat_sekretariat' => 'Jl.Putri Hijau no.1 Gedung Graha Merah Putih Lantai 5, Medan barat, Kesawan, Sumatera Utara',
                'latlng' => [
                    'lat' => null,
                    'lng' => null
                ],
                'email' => 'mp.pengda.sumut@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '12.01',
                        'nama' => 'CABANG TAPANULI TENGAH',
                        'alamat_sekretariat' => 'Jl. Batu harimo Sibuluan, Pandan, Tapanuli Tengah, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tapanulitengah@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.01.001',
                                'nama' => 'KOLAT SMA MATAULI',
                                'alamat_sekretariat' => 'Sma matauli pandan, Pandan, , Pandan, Pandan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '12.01.002',
                                'nama' => 'KOLAT TUGU IKAN SIBULUAN',
                                'alamat_sekretariat' => 'Sibuluan Nauli, PANDAN SIBULUAN NAULI, TAPANULI TENGAH, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '12.01.003',
                                'nama' => 'KOLAT BATU HARIMO',
                                'alamat_sekretariat' => 'Jln. Padangsidimpuan, Lingk.III Batu Harimau PANDAN Sibuluan Indah, TAPANULI TENGAH, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.02',
                        'nama' => 'CABANG TAPANULI UTARA',
                        'alamat_sekretariat' => 'Jl. Dr. Ferdinand Lumbantobing Gang Melati 23, Hutaroruan XI, Tarutung, Tapanuli Utara, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tapanuliutara@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.02.001',
                                'nama' => 'KOLAT SMAS PGRI SIBORONGBORONG',
                                'alamat_sekretariat' => 'Jl. Siswa No.15 Siborongborong, Siborongborong, , Siborongborong I, Siborongborong, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.02.002',
                                'nama' => 'KOLAT SMAS PGRI 20',
                                'alamat_sekretariat' => 'Jl. Siswa No. 15 Siborongborong Siborongborong, Kelurahan Pasar Siborongboronh, Tapanuli Utara, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.03',
                        'nama' => 'CABANG TAPANULI SELATAN',
                        'alamat_sekretariat' => 'Jl. Merdeka no 219 Pasar Sipirok, Tapanuli Selatan, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tapanuliselatan@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => []
                    ],
                    [
                        'kode' => '12.04',
                        'nama' => 'CABANG LANGKAT',
                        'alamat_sekretariat' => 'Jl. Proklamasi SMAN 1 Stabat Kuala Bingai, Stabat, Langkat, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.langkat@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.04.001',
                                'nama' => 'KOLAT BRANDAN CITY',
                                'alamat_sekretariat' => 'Jln.Tanjung pura Gang Sekolah , Babalan, , Pelawi Utara, PKL.Brandan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.04.002',
                                'nama' => 'KOLAT JENTERA HINAI',
                                'alamat_sekretariat' => 'Jl tamatan dsn 1 Desa Batu melenggang Ke. Hinai, Hinai, , Batu melenggang, Tanjung Pura, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.04.003',
                                'nama' => 'KOLAT TPI LANGKAT',
                                'alamat_sekretariat' => 'Jl. Batang serangan, Batang serangan, , Karya jadi, Stabat, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.04.004',
                                'nama' => 'KOLAT TPI SAWIT SEBERANG',
                                'alamat_sekretariat' => 'Jln sempurna no 100 , sawit seberang, Sawit seberang, , Sawit seberang, Medan , Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.05',
                        'nama' => 'CABANG TANAH KARO',
                        'alamat_sekretariat' => 'Jl. Veteran Lorong Serasi no.66, Kel. Gundaling Ii, Berastagi, Karokota Kabanjahe, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tanahkaro@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.05.001',
                                'nama' => 'KOLAT TIGA PANAH',
                                'alamat_sekretariat' => 'Jalan besar Tiga panah. Kecamatan tiga panah. Kabupaten karo ( samping bank semut)  Kecamatan tiga panah  Desa tiga panah, Kota kecamatan tiga panah  Sumatera Utara',
                                'latlng' => [
                                    'lat' => 3.0759761,
                                    'lng' => 98.5269474
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.06',
                        'nama' => 'CABANG DELI SERDANG',
                        'alamat_sekretariat' => 'Jl. Psr V Barat LPP Medan Estate Percut Sei Tuan, Deli Serdang, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.deliserdang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.06.001',
                                'nama' => 'KOLAT UNIVERSITAS MEDAN AREA',
                                'alamat_sekretariat' => 'Jalan Kolam No. 1 (Gedung Stadion Mini Kampus 1 UMA, Lt. 2), Percut Sei Tuan, , Desa Medan Estate, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.06.002',
                                'nama' => 'KOLAT PANDAWA NEGERI 8',
                                'alamat_sekretariat' => 'Jln perhubungan desa Seirotan 0, Percut sei tuan, , Desa Seirotan, Deli Serdang, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.06.003',
                                'nama' => 'KOLAT PANDAWA YPI BATANG KUIS',
                                'alamat_sekretariat' => 'Jl mesjid jamik No 12, Batang Kuis, , Batang kuis, Deli Serdang, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.06.004',
                                'nama' => 'KOLAT MTS. S. AL-JIHAD MEDAN',
                                'alamat_sekretariat' => 'Jl. Bhayangkara gg. Mesjid, Medan Tembung, , Indra Kasih, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.06.005',
                                'nama' => 'KOLAT SMA TARUNA PBD MEDAN',
                                'alamat_sekretariat' => 'Jl. Bilal Ujung no. 3, Medan Timur, , Pulo Brayan Darat, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.06.006',
                                'nama' => 'KOLAT PAB SAMPALI',
                                'alamat_sekretariat' => 'Jalan pasar hitam desa sampali, Percut Sei tuan, , Sampali, Sampali, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.07',
                        'nama' => 'CABANG SIMALUNGUN',
                        'alamat_sekretariat' => 'Jl. Asahan KM13 Desa Senio, Gunung Malela, Simalungun, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.simalungun@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.07.001',
                                'nama' => 'KOLAT SENIO',
                                'alamat_sekretariat' => 'Jl.asahan km13 desa senio , Gunung malela, , Senio, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '12.07.002',
                                'nama' => 'KOLAT BAH JOGA',
                                'alamat_sekretariat' => 'Jl.asahan km13 desa senio , Gunung malela, , Senio, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '12.07.003',
                                'nama' => 'KOLAT BAH JAMBI',
                                'alamat_sekretariat' => 'Jl.Besar Madrasah Al ikhlas bah jambi, Jawa maraja bah jambi, , Bah jambi, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.08',
                        'nama' => 'CABANG ASAHAN',
                        'alamat_sekretariat' => 'Jl. Nusa Indah Dusun III, Desa Tanjung Alam, Sei Dadap, Kisaran, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.asahan@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '12.08.001',
                                'nama' => 'KOLAT PANTAI NAGA',
                                'alamat_sekretariat' => 'Jalan Nusa indah, Sei Dadap , , Desa , Tanjung alam, , Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.08.002',
                                'nama' => 'KOLAT PINANGGRIPAN',
                                'alamat_sekretariat' => 'Pinanggripan dusun 3, Air batu, , Pinanggripan, Asahan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '12.08.003',
                                'nama' => 'KOLAT DIRGA ALAM',
                                'alamat_sekretariat' => 'DUSUN III DESA TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '12.08.004',
                                'nama' => 'KOLAT SD NEGERI',
                                'alamat_sekretariat' => 'JLN NUSA INDAH DUSUN III TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '12.08.005',
                                'nama' => 'KOLAT KEBUGARAN PANTAI NAGA',
                                'alamat_sekretariat' => 'JLN. NUSA INDAH TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '12.08.006',
                                'nama' => 'KOLAT DISDIK',
                                'alamat_sekretariat' => 'JL. Jend. Ahmad Yani Km.1.3 Kisaran, Kota Kisaran Timur, , Kisaran Naga, Kisaran, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.09',
                        'nama' => 'CABANG KOTA MEDAN',
                        "alamat_sekretariat" => "Jalan Pelajar Timur, Kompleks Griya Unimed No. 47, Binjai, Medan Denai, Medan, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotamedan@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => []
                    ],
                    [
                        'kode' => '12.10',
                        'nama' => 'CABANG KOTA SIBOLGA',
                        "alamat_sekretariat" => "Jl. Balam No. 36 Aek Manis, Sibolga Selatan, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotasibolga@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                "kode" => "12.10.001",
                                "nama" => "KOLAT DARUR RACHMAD",
                                "alamat_sekretariat" => "Jl. Aso-Aso No.17\tSIBOLGA SAMBAS\tPancuran Kerambil, SIBOLGA KOTA, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.10.002",
                                "nama" => "KOLAT SMPN 6 SIBOLGA",
                                "alamat_sekretariat" => "Jl. FL Tobing No.10\tSibolga Utara\tHuta Tonga Tonga, SIBOLGA KOTA, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.11',
                        'nama' => 'CABANG KOTA BINJAI',
                        "alamat_sekretariat" => "Jl. Gunung Bendahara no.2 Binjai Estate, Binjai Selatan, Kota Binjai, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotabinjai@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                "kode" => "12.11.001",
                                "nama" => "KOLAT YASPEN DHARMA BAKTI",
                                "alamat_sekretariat" => "Jl.masjid raya\n, Kec.selesai, , Kel.pekan selesai, Selesai, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.11.002",
                                "nama" => "KOLAT SMAN 1 BINJAI",
                                "alamat_sekretariat" => "Jl.wr mongonsidi no.10, Binjai kota, , Kelurahan satria, Kota Binjai , Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.11.003",
                                "nama" => "KOLAT SMAN 5 BINJAI",
                                "alamat_sekretariat" => "JL. SAMANHUDI NO.162 , Binjai selatan , , Binjai estate, Kota binjai, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.11.004",
                                "nama" => "KOLAT SMPN 9 BINJAI",
                                "alamat_sekretariat" => "Jln.Gunung Bendahara,Puji Dadi,Kec Binjai Selatan.,Kota Binjai Sumatra Utara 20727, Binjai Selatan, , Puji Dadi, Binjai Selatan, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.11.005",
                                "nama" => "KOLAT SMPN 13 BINJAI",
                                "alamat_sekretariat" => "JL. LETJEND JAMIN GINTING NO. 407, Binjai selatan, , Tanah seribu, BINJAI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '12.13',
                        'nama' => 'CABANG KOTA GUNUNGSITOLI',
                        "alamat_sekretariat" => "Jl. Ahmad Yani No. 23, Pasar, Gunungsitoli, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotagunungsitoli@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "12.13.001",
                                "nama" => "KOLAT UNDREBOLI",
                                "alamat_sekretariat" => "UNDREBOLI, GUNUNGSITOLI, , DESA LELEWENU NIKO'OTANO, GUNUNGSITOLI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.13.002",
                                "nama" => "KOLAT XAVERIUS",
                                "alamat_sekretariat" => "SMA XAVERIUS, Jl. Nilam No. 7, GUNUNGSITOLI, , ILIR, GUNUNGSITOLI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.13.003",
                                "nama" => "KOLAT KELELAWAR",
                                "alamat_sekretariat" => "YAYASAN PERGURUAN PEMBDA NIAS Jl. Pelita No. 9, Gunungsitoli, , Ilir, Gunungsitoli, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.13.004",
                                "nama" => "KOLAT UNDREBOLI",
                                "alamat_sekretariat" => "Jl. Fondrako Km. 3,5, Gunungsitoli, , Desa Lelewenu Niko'otano, Gunungsitoli, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "12.13.005",
                                "nama" => "KOLAT SMP SWASTA BUNGA MAWAR",
                                "alamat_sekretariat" => "SMP Swasta Bunga Mawar Jl. Nilam No. 3\tGunungsitoli Ilir, Gunungsitoli, Sumatera Utara",
                                "latlng" => [
                                    "lat" => 1.2843559,
                                    "lng" => 97.6215491,
                                ]
                            ]
                        ]
                    ],
                ]
            ],
            [
                'kode' => '13',
                'nama' => 'PENGDA SUMATERA SELATAN',
                "alamat_sekretariat" => "Kedamaian 2 blok gg no 7, Kalidoni, Bukit Sangkal, Palembang, Sumatera Selatan",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.sumsel@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '13.01',
                        'nama' => 'CABANG BANYUASIN',
                        "alamat_sekretariat" => "Jl. Tegal Binangun lr. Dukabangun Rt.008 RW.03 No.384, Plaju Darat, Plaju, Palembang, Sumatera Selatan",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.banyuasin@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "13.01.001",
                                "nama" => "KOLAT TALANG KERAMAT",
                                "alamat_sekretariat" => "jl.kebun jeruk rt 10 RW 04 lr gotong royong 2 no 14 kelurahan talang keramat kecamatan talang kelapa kabupaten Banyuasin, Talang kelapa, , Talang keramat, Banyuasin, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "13.01.002",
                                "nama" => "KOLAT TANJUNG LAGO",
                                "alamat_sekretariat" => "JL. Bangun sari No.53, TANJUNG LAGO , , Bangun sari, TANJUNG LAGO , Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "13.01.003",
                                "nama" => "KOLAT VILLA BHAYANGKARA",
                                "alamat_sekretariat" => "Jl.keramat panjang RT 50, Talang kelapa, , Talang keramat, Banyuasin, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "13.01.004",
                                "nama" => "KOLAT TEGAL BINANGUN",
                                "alamat_sekretariat" => "Jalan tegal binangun lorong suka bangun rt08 rw 03no384., Plaju, , Plaju Darat, Palembang, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '13.02',
                        'nama' => 'CABANG KOTA PALEMBANG',
                        'wilayah' => '16.71',
                        "alamat_sekretariat" => "Komplek Palem Permata Lestari Blok B No.6 Jl Ponorogo Sukabangun 2, Sukajaya, Sukarami, Palembang, Sumatera Selatan",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotapalembang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => []
                    ]
                ]
            ],
            [
                'kode' => '14',
                'nama' => 'PENGDA LAMPUNG',
                "alamat_sekretariat" => "Bandar Lampung",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.lampung@merpatiputih.id',
                'password' => '12345678',
                'cabang' => []
            ],
            [
                'kode' => '15',
                'nama' => 'PENGDA DKI JAKARTA',
                "alamat_sekretariat" => "Komplek Taman Permata Indah 1 Blok PO No. 7A, Penjaringan, Pejagalan, Jakarta Utara, DKI Jakarta",
                "latlng" => [
                    "lat" => -6.14181690,
                    "lng" => 106.78072810,
                ],
                'email' => 'mp.pengda.dkijakarta@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '15.01',
                        'nama' => 'CABANG JAKARTA PUSAT',
                        "alamat_sekretariat" => "Jl. Rajawali Selatan XIV No. 7, Jakarta Pusat",
                        "latlng" => [
                            "lat" => -6.1865991,
                            "lng" => 106.8359585,
                        ],
                        'email' => 'mp.jakartapusat@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "15.01.001",
                                "nama" => "KOLAT KEMENTERIAN KEUANGAN",
                                "alamat_sekretariat" => "Gedung Sutikno Slamet, Jl. Dr. Wahidin Raya No.1, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710, Indonesia",
                                "latlng" => [
                                    "lat" => -6.172832,
                                    "lng" => 106.838972,
                                ]
                            ],
                            [
                                "kode" => "15.01.002",
                                "nama" => "KOLAT KEMENDIKBUD",
                                "alamat_sekretariat" => "Gedung ItJen Jl Jend Sudirman no. 1",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.003",
                                "nama" => "KOLAT SMKN 1 JAKARTA",
                                "alamat_sekretariat" => "Jl. Budi Utomo No.7",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.004",
                                "nama" => "KOLAT SMPN 79",
                                "alamat_sekretariat" => "Jl. Galindra No.8, RW.8, Kb. Kosong, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10630",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.005",
                                "nama" => "KOLAT TAMANSISWA",
                                "alamat_sekretariat" => "Jl. Garuda No 25",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.006",
                                "nama" => "KOLAT SMKN 21 JAKARTA",
                                "alamat_sekretariat" => "Jl kemayoran gempol",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.007",
                                "nama" => "KOLAT BPJS",
                                "alamat_sekretariat" => "Plasa Jamsostek",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.008",
                                "nama" => "KOLAT SMPN 4",
                                "alamat_sekretariat" => "Jl. Perwira no. 10",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.009",
                                "nama" => "KOLAT RPTRA KEJORA",
                                "alamat_sekretariat" => "Jl. Taman Pembangunan 2 Rt9 RW2",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.010",
                                "nama" => "KOLAT SMP 100",
                                "alamat_sekretariat" => "Jl. Smp 122",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.011",
                                "nama" => "KOLAT AL KHAIRIYAH",
                                "alamat_sekretariat" => "Jl. Mampang Prapatan IV No.74, RT.10RW.2",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.012",
                                "nama" => "KOLAT SMPN 39 JAKARTA",
                                "alamat_sekretariat" => "Jl gajah mada 3-5",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.013",
                                "nama" => "KOLAT SMPN 22 JAKARTA",
                                "alamat_sekretariat" => "2, Jl. Jemb. Batu No.74, RT.2RW.5, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1383714,
                                    "lng" => 106.8160685,
                                ]
                            ],
                            [
                                "kode" => "15.01.014",
                                "nama" => "KOLAT KAMPUNG JAWA",
                                "alamat_sekretariat" => "JALAN KAMPUNG JAWA KEBON SAYUR",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.015",
                                "nama" => "KOLAT MTSN 1 JAKARTA",
                                "alamat_sekretariat" => "6, Jl. Bangka IX B No.26, RT.12RW.10, Pela Mampang, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12720, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2538029,
                                    "lng" => 106.8221523,
                                ]
                            ],
                            [
                                "kode" => "15.01.016",
                                "nama" => "KOLAT SMAN 25 JAKARTA",
                                "alamat_sekretariat" => "Jalan A.M Sangaji No. 22-24 Petojo Utara Gambir RT.2RW.5 2 5, RT.2RW.5, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1676321,
                                    "lng" => 106.8135251,
                                ]
                            ],
                            [
                                "kode" => "15.01.017",
                                "nama" => "KOLAT RSCM",
                                "alamat_sekretariat" => "Jl. Pangeran Diponegoro No.71, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1965079,
                                    "lng" => 106.8471194,
                                ]
                            ],
                            [
                                "kode" => "15.01.018",
                                "nama" => "KOLAT UNIVERSITAS INDONESIA",
                                "alamat_sekretariat" => "Pondok Cina, Beji, Depok City, West Java 16424, Indonesia",
                                "latlng" => [
                                    "lat" => -6.3606229,
                                    "lng" => 106.8272343,
                                ]
                            ],
                            [
                                "kode" => "15.01.019",
                                "nama" => "KOLAT KARTINI",
                                "alamat_sekretariat" => "Jl. Kalibaru Timur V No.1, RT.1RW.9, Utan Panjang, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1682528,
                                    "lng" => 106.8492936,
                                ]
                            ],
                            [
                                "kode" => "15.01.020",
                                "nama" => "KOLAT SMA 4",
                                "alamat_sekretariat" => "Jl. Batu III No.3, RT.7RW.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1787063,
                                    "lng" => 106.8354983,
                                ]
                            ],
                            [
                                "kode" => "15.01.021",
                                "nama" => "KOLAT SMK JP 01",
                                "alamat_sekretariat" => "1, Jl. Abdul Muis No.44, RT.1RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1755573,
                                    "lng" => 106.8201441,
                                ]
                            ],
                            [
                                "kode" => "15.01.022",
                                "nama" => "KOLAT SMPN 47",
                                "alamat_sekretariat" => "Rawasari Timur Dalam No.6, RT.16RW.2, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1830273,
                                    "lng" => 106.8721153,
                                ]
                            ],
                            [
                                "kode" => "15.01.024",
                                "nama" => "KOLAT SMPN 201 JAKARTA",
                                "alamat_sekretariat" => "Jl.Kayu Besar Dalam 2 RT 02RW.11 CENGKARENG \tCengkareng Kapuk, Jakarta Barat, DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.01.025",
                                "nama" => "KOLAT SMP HARAPAN JAYA",
                                "alamat_sekretariat" => "Jalan Daan Mogot KM 13 JLN PELITA C4 No.7\tCENGKARENG TIMUR \tCengkareng , Jakarta Barat, DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '15.02',
                        'nama' => 'CABANG JAKARTA UTARA',
                        "alamat_sekretariat" => "SMP Negeri 261 Jakarta Jl Muara Angke RT 009021, PENJARINGAN\tPLUIT, JAKARTA UTARA, DKI Jakarta",
                        "latlng" => [
                            "lat" => -6.1093573,
                            "lng" => 106.7700947,
                        ],
                        'email' => 'mp.jakartautara@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "15.02.001",
                                "nama" => "KOLAT SDN PLUIT 03",
                                "alamat_sekretariat" => "Jalan Komplek Nelayan, RT.11RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.002",
                                "nama" => "KOLAT SDN PLUIT 03",
                                "alamat_sekretariat" => "Jalan Komplek Nelayan, RT.11RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.003",
                                "nama" => "KOLAT SDN PLUIT 01",
                                "alamat_sekretariat" => "Jl. Pluit Selatan I No.1, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.004",
                                "nama" => "KOLAT SMAN 40",
                                "alamat_sekretariat" => "Jl. Budi Mulia no. 8a",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.005",
                                "nama" => "KOLAT SMK REMAJA PLUIT",
                                "alamat_sekretariat" => "Jl. Pluit Selatan I No.1, RT.1RW.6, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.006",
                                "nama" => "KOLAT BIRO KLASIFIKASI INDONESIA ( BKI )",
                                "alamat_sekretariat" => "Jl.Yos Sudarso no.38 -40 Priok Jakarta Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.007",
                                "nama" => "KOLAT M.O.M (Master of the Master)",
                                "alamat_sekretariat" => "Komplek Taman Permata indah 1 blok PO no 7a",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.008",
                                "nama" => "KOLAT SMPN 287 JAKARTA TIMUR",
                                "alamat_sekretariat" => "Jl. Sarbini 1",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.009",
                                "nama" => "KOLAT SMPN 42 JAKARTA",
                                "alamat_sekretariat" => "Raya 004 002, Jl. Pademangan III No.2, RT.2RW.2, Pademangan Tim., Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14410, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1363599,
                                    "lng" => 106.8431803,
                                ]
                            ],
                            [
                                "kode" => "15.02.010",
                                "nama" => "KOLAT SMPN 275 JAKARTA",
                                "alamat_sekretariat" => "Jl. Jengki Cipinang Asem No.41, RT.9RW.9, Kb. Pala, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13650, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2596684,
                                    "lng" => 106.8773676,
                                ]
                            ],
                            [
                                "kode" => "15.02.011",
                                "nama" => "KOLAT SDN 03 PENJARINGAN",
                                "alamat_sekretariat" => "Jl. Pluit Selatan Raya No.105, RT.16RW.17, Penjaringan, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14440, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1248024,
                                    "lng" => 106.8027555,
                                ]
                            ],
                            [
                                "kode" => "15.02.012",
                                "nama" => "KOLAT MP HUTAMA KARYA",
                                "alamat_sekretariat" => "HK Tower, Jl. Letjen M.T. Haryono No.Kav. 8, RT.12RW.11, Cawang, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13340, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2454771,
                                    "lng" => 106.8732563,
                                ]
                            ],
                            [
                                "kode" => "15.02.013",
                                "nama" => "KOLAT SMPN 244 JAKARTA",
                                "alamat_sekretariat" => "Jl. Bakti VI No.28, RT.4RW.9, Cilincing, Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1101572,
                                    "lng" => 106.9380925,
                                ]
                            ],
                            [
                                "kode" => "15.02.014",
                                "nama" => "KOLAT PLUIT",
                                "alamat_sekretariat" => "Jl pluit sakti no.35  ruko sentra bisnis pluit",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.02.015",
                                "nama" => "KOLAT SMPN 261 JAKARTA",
                                "alamat_sekretariat" => "11, Jl. Muara Angke No.9, RT.11RW.21, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1092813,
                                    "lng" => 106.7706997,
                                ]
                            ],
                            [
                                "kode" => "15.02.016",
                                "nama" => "KOLAT SMPN 21 JAKARTA",
                                "alamat_sekretariat" => "13, Jl. Bandengan Utara Raya No.80, RT.9RW.16, Penjaringan, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14440, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1331778,
                                    "lng" => 106.7963156,
                                ]
                            ],
                            [
                                "kode" => "15.02.017",
                                "nama" => "KOLAT SDN CILINCING 02",
                                "alamat_sekretariat" => "12, Jl. Cilincing Bakti No.21, RT.4RW.9, Cilincing, Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.108924,
                                    "lng" => 106.9386764,
                                ]
                            ],
                            [
                                "kode" => "15.02.018",
                                "nama" => "KOLAT SMPN 34 JAKARTA",
                                "alamat_sekretariat" => "VR9W+H52, Jl. Pademangan IV, RT.4RW.10, Pademangan Tim., Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14410, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1311091,
                                    "lng" => 106.8453774,
                                ]
                            ],
                            [
                                "kode" => "15.02.019",
                                "nama" => "KOLAT SMPN 29",
                                "alamat_sekretariat" => "13, Jl. Bumi E No.21, RT.13RW.2, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2405884,
                                    "lng" => 106.7896333,
                                ]
                            ],
                            [
                                "kode" => "15.02.020",
                                "nama" => "KOLAT SMPN 122 JAKARTA UTARA",
                                "alamat_sekretariat" => "1, Jl. SMPN 122 No.3, RT.1RW.3, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1384789,
                                    "lng" => 106.7633517,
                                ]
                            ],
                            [
                                "kode" => "15.02.021",
                                "nama" => "KOLAT RPTRA SUNGAI BAMBU",
                                "alamat_sekretariat" => "10, Jl. Jati Raya, RT.10RW.6, Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14330, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1303164,
                                    "lng" => 106.8907977,
                                ]
                            ],
                            [
                                "kode" => "15.02.022",
                                "nama" => "KOLAT SMPN 82 JAKARTA",
                                "alamat_sekretariat" => "RQRF+MCV, Jl. Raya Daan Mogot, RT.6RW.4, Jelambar, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1582628,
                                    "lng" => 106.7735458,
                                ]
                            ],
                            [
                                "kode" => "15.02.023",
                                "nama" => "KOLAT SMKN 56 JAKARTA UTARA",
                                "alamat_sekretariat" => "Jl. Pluit Timur Raya No.1, RT.10RW.9, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450\n2,7 km",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '15.03',
                        'nama' => 'CABANG JAKARTA BARAT',
                        "alamat_sekretariat" => "Universitas Bina Nusantara	(Ruangan Sekretariat Organisasi Kemahasiswaan (SOK), Loker Merpati Putih) Jl. KH. Syahdan No. 9 Kemanggisan, Palmerah, Jakarta Barat - DKI Jakarta – 11480",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.jakartabarat@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "15.03.001",
                                "nama" => "KOLAT PADEPOKAN JOGLO",
                                "alamat_sekretariat" => "Komplek DKI Blok O no.2 joglo, RT.13/RW.4, Joglo, Kembangan, RT.13/RW.4, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia",
                                "latlng" => [
                                    "lat" => -6.22283610,
                                    "lng" => 106.73376030,
                                ]
                            ],
                            [
                                "kode" => "15.03.002",
                                "nama" => "KOLAT PAM JAYA",
                                "alamat_sekretariat" => "PAM JAYA Jl. Penjernihan 2 Pejompongan Jakarta Pusat",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.003",
                                "nama" => "KOLAT PNM",
                                "alamat_sekretariat" => "Menara PNM  Jl.Kuningan Mulia Setia Budi Jakarta Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.004",
                                "nama" => "KOLAT SMAN 28 KAB TANGERANG",
                                "alamat_sekretariat" => "Jl. Raya Cisauk-Legok No.33a, Suradita, Kec. Cisauk, Kabupaten Tangerang",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.005",
                                "nama" => "KOLAT MERCEDES BENZ",
                                "alamat_sekretariat" => "Jalan Raya mercedes benz",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.006",
                                "nama" => "KOLAT RAWA CERIA",
                                "alamat_sekretariat" => "1, Jl. Kp. Rw. Sawah No.16, RT.1/RW.1, Kp. Rw., Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10550, Indonesia",
                                "latlng" => [
                                    "lat" => -6.17840900,
                                    "lng" => 106.85252350,
                                ]
                            ],
                            [
                                "kode" => "15.03.007",
                                "nama" => "KOLAT UNIVERSITAS BOROBUDUR",
                                "alamat_sekretariat" => null,
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.008",
                                "nama" => "KOLAT BINUS",
                                "alamat_sekretariat" => "Jl. Kyai H. Syahdan No.9, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480, Indonesia",
                                "latlng" => [
                                    "lat" => -6.20023520,
                                    "lng" => 106.78546330,
                                ]
                            ],
                            [
                                "kode" => "15.03.009",
                                "nama" => "KOLAT GRAHA TAJUR ASRI (GTA)",
                                "alamat_sekretariat" => "Perumahan Graha Tajur Asri B3/31, Ciledug, Tajur	Tangerang, Banten",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.010",
                                "nama" => "KOLAT BANGUN REKSA INDAH (BRI)",
                                "alamat_sekretariat" => "Komplek Barata, Jl. Barata Karya VI No. 419, RT 07 RW 07	Karang Tengah 	Karang Tengah, Kota Tangerang, Banten",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.011",
                                "nama" => "KOLAT TAKEDA",
                                "alamat_sekretariat" => "Jl mawar 12, Pamulang	Kedaung, Tangerang Selatan, Banten",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.012",
                                "nama" => "KOLAT INTERCON",
                                "alamat_sekretariat" => "Jl. Meruya Ilir Raya No.14, RT.2/RW.11, North Meruya, Kembangan, West Jakarta City, Jakarta 11620	Kembangan	Meruya Utara	Jakarta Barat	DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.013",
                                "nama" => "KOLAT SANGGAR BUDAYA",
                                "alamat_sekretariat" => "Jln. Palmerah Utara No. 80 Rt. 001/006	Palmerah	Selipi, Jakarta Barat, DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.03.014",
                                "nama" => "KOLAT QONITA ISLAMIC SCHOOL",
                                "alamat_sekretariat" => "Jl. Griya Serpong Asri Rt.01/Rw.01	Cisauk	Suradita, Kabupaten Tangerang, Banten",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '15.04',
                        'nama' => 'CABANG JAKARTA SELATAN',
                        "alamat_sekretariat" => "Jl. KH. Muhasyim VII No.8, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia",
                        "latlng" => [
                            "lat" => -6.29045610,
                            "lng" => 106.79061400,
                        ],
                        'email' => 'mp.jakartaselatan@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "15.04.001",
                                "nama" => "KOLAT BULUNGAN",
                                "alamat_sekretariat" => "Jl. Bulungan No.1, RT.11/RW.7, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130, Indonesia",
                                "latlng" => [
                                    "lat" => -6.24196020,
                                    "lng" => 106.79639280,
                                ]
                            ],
                            [
                                "kode" => "15.04.002",
                                "nama" => "KOLAT DOLANAN",
                                "alamat_sekretariat" => "Jl. Tanah Kusir III no. 64, RT 04/09, 12240",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.04.003",
                                "nama" => "KOLAT GOR CILANDAK",
                                "alamat_sekretariat" => "Jl. KH. Muhasyim VII No.8, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia",
                                "latlng" => [
                                    "lat" => -6.29045610,
                                    "lng" => 106.79061400,
                                ]
                            ],
                            [
                                "kode" => "15.04.004",
                                "nama" => "KOLAT MASJID ASSALAAM",
                                "alamat_sekretariat" => "Jl. Mandar X. Sektor 3A Bintaro",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.04.005",
                                "nama" => "KOLAT KARTUN TEBET",
                                "alamat_sekretariat" => "11, Jl. Tebet Dalam IV No.7A, RT.11/RW.1, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810, Indonesia",
                                "latlng" => [
                                    "lat" => -6.22881342,
                                    "lng" => 106.84984848,
                                ]
                            ],
                            [
                                "kode" => "15.04.006",
                                "nama" => "KOLAT SMPN 19",
                                "alamat_sekretariat" => "Blok E, Jl. Bumi No.21, RT.13/RW.2, Gunung, Kebayoran Baru, South Jakarta City, Jakarta 12120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.23983680,
                                    "lng" => 106.78959050,
                                ]
                            ],
                            [
                                "kode" => "15.04.007",
                                "nama" => "KOLAT SMPIT AL HIKMAH",
                                "alamat_sekretariat" => "HQ8V+GCW, Cipayung Jaya, Cipayung, Depok City, West Java 16437, Indonesia",
                                "latlng" => [
                                    "lat" => -6.43363680,
                                    "lng" => 106.79356410,
                                ]
                            ],
                            [
                                "kode" => "15.04.008",
                                "nama" => "KOLAT SMAN 82",
                                "alamat_sekretariat" => "Jl. Daha 2 No.15A, RT.1/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110, Indonesia",
                                "latlng" => [
                                    "lat" => -6.23146120,
                                    "lng" => 106.79964900,
                                ]
                            ],
                            [
                                "kode" => "15.04.009",
                                "nama" => "KOLAT PERMATA DEPOK",
                                "alamat_sekretariat" => "Lap. Olah Raga Nilam",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.04.010",
                                "nama" => "KOLAT TELAGA MAS",
                                "alamat_sekretariat" => "Jl. Duta Mas VII blok BB1 no. 27",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "15.04.011",
                                "nama" => "KOLAT BALIK 2 MPJS",
                                "alamat_sekretariat" => "Jl. Bulungan No.1, RT.11/RW.7, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130, Indonesia",
                                "latlng" => [
                                    "lat" => -6.24196020,
                                    "lng" => 106.79639280,
                                ]
                            ],
                            [
                                "kode" => "15.04.012",
                                "nama" => "KOLAT SMA PANGUDI LUHUR",
                                "alamat_sekretariat" => "PRW4+9GX, Jl. Brawijaya IV, RT.5/RW.3, Pulo, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160, Indonesia",
                                "latlng" => [
                                    "lat" => -6.25402050,
                                    "lng" => 106.80637300,
                                ]
                            ],
                            [
                                "kode" => "15.04.013",
                                "nama" => "KOLAT SDN NIAGA EKASARI",
                                "alamat_sekretariat" => "Jl. Perdagangan IV No.32, RT.7/RW.7, Bintaro, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12330, Indonesia",
                                "latlng" => [
                                    "lat" => -6.27701000,
                                    "lng" => 106.76567180,
                                ]
                            ],
                        ]
                    ],
                    [
                        'kode' => '15.05',
                        'nama' => 'CABANG JAKARTA TIMUR',
                        "alamat_sekretariat" => "Jl. Sawo Dalam II No. 32 RT. 06 RW 10, Kel. Baru, Kec. Pasar Rebo, Kota Jakarta Timur, DKI Jakarta",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.jakartatimur@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            ['kode' => '15.05.001', 'nama' => 'KOLAT PEMBINA', 'alamat_sekretariat' => 'Jalan puskesmas, GG pembina III 	Kecamatan Pasar Rebo, Kelurahan Baru , Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.002', 'nama' => 'KOLAT BLOK E', 'alamat_sekretariat' => 'Blok E 1 No.11', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.003', 'nama' => 'KOLAT GUNADHARMA', 'alamat_sekretariat' => 'Universitas Gunadarma, Kampus E, Jl. Komjen.Pol.M.Jasin No.9', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.004', 'nama' => 'KOLAT SMPN 103', 'alamat_sekretariat' => 'Jl.Baret Biru 3 dalam NO.78C RT006/03', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.005', 'nama' => 'KOLAT BUKAKA', 'alamat_sekretariat' => 'PT Bukaka Teknik Utama Jl. Raya Narogong No 19', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.006', 'nama' => 'KOLAT SMAN 104', 'alamat_sekretariat' => 'Jl. H. Taiman barat', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.007', 'nama' => 'KOLAT BARU', 'alamat_sekretariat' => 'Jl. Sawo Dalem ii No. 32 Rt. 006 Rw. 10 Kelurahan Baru', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.008', 'nama' => 'KOLAT MUSTIKA BRAJA', 'alamat_sekretariat' => 'Warung Biru Lapangan Asem Nirbaya', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.009', 'nama' => 'KOLAT RAY ( REMAJA AHMAD YANI )', 'alamat_sekretariat' => 'Jalan Gd.Nanggala Komplek KOPASSUS Cijantung', 'latlng' => ['lat' => -631639690, 'lat' => 10685412170]],
                            ['kode' => '15.05.010', 'nama' => 'KOLAT LIA PRAMUKA', 'alamat_sekretariat' => 'Jl. Pramuka No.Kavling 30, RT.11/RW.5, Utan Kayu Utara, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13120, Indonesia', 'latlng' => ['lat' => -619257150, 'lat' => 10686899640]],
                            ['kode' => '15.05.011', 'nama' => 'KOLAT BAPORLEM', 'alamat_sekretariat' => 'Jl. Pulogadung no.12', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.012', 'nama' => 'KOLAT DISELATAN', 'alamat_sekretariat' => 'Jl. Kobang Diklat 1, Cijantung Jakarta Timur, Pasar Rebo	Kelurahan Baru, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.013', 'nama' => 'KOLAT STEI JAKARTA', 'alamat_sekretariat' => 'Garmak STEI Indonesia, Jl. Kayu Jati Raya No.11A, RT. 7, RW. 3, Pulo Gadung, Rawamangun	Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => -619074010, 'lat' => 10688391000]],
                            ['kode' => '15.05.014', 'nama' => 'KOLAT CAHAYA TIMUR', 'alamat_sekretariat' => 'jl bakti 2 rt 04/09 no 21	pasar rebo, baru, jakarta timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.015', 'nama' => 'KOLAT IKIP JAKARTA', 'alamat_sekretariat' => 'Jl. Porselen 2 No.1, Pulo Gadung, Kayu Putih, Jakarta Timur', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.016', 'nama' => 'KOLAT SDN 01 DUKUH', 'alamat_sekretariat' => 'Jl. Pertengahan Gg. Kramat I Rt3 Rw3 No. 27A, Cijantung Jakarta Timur, Pasar Rebo	Cijantung, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.017', 'nama' => 'KOLAT VINUS', 'alamat_sekretariat' => 'Jl. Kerja bakti 44 Kampung Makasar	Makasar, Makasar, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.018', 'nama' => 'KOLAT SMAN 62 JAKARTA', 'alamat_sekretariat' => 'Jl. Raya bogor	Kramat jati, Kp. Tengah, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.019', 'nama' => 'KOLAT SMAN 54 JAKARTA', 'alamat_sekretariat' => 'SMAN 54. Komplek pendidikan rawa bunga Jl. Jatinegara Timur IV, jakarta timur, Jatinegara , Bidaracina, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.020', 'nama' => 'KOLAT IDJON DJANBI', 'alamat_sekretariat' => 'Jln Merpati no 20 RT 02/05 Ciherang Sukatani, Tapos, Sukatani, Depok, Jawa Barat', 'latlng' => ['lat' => -639936690, 'lat' => 10688794110]],
                            ['kode' => '15.05.021', 'nama' => 'KOLAT MILITER 201/JAYA YUDA', 'alamat_sekretariat' => 'Jl. Raya Bogor KM 38 Asrama Yonif Mekanis 201/JY, Pasar Rebo, Pekayon, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => -635549320, 'lat' => 10686300420]],
                            ['kode' => '15.05.022', 'nama' => 'KOLAT AMPERA', 'alamat_sekretariat' => 'Jl. Panjang No.39, RT.6/RW.4, Cipedak	Jagakarsa	Cipedak, Jakarta Selatan, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.023', 'nama' => 'KOLAT SMAN 88 JAKARTA', 'alamat_sekretariat' => 'Jl. Sawo Indah	Kecamatan Pasar Rebo	Kelurahan Baru, Jakarta Timur, DKI Jakarta', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '15.05.024', 'nama' => 'KOLAT KOMANDA', 'alamat_sekretariat' => 'Jl. Beli Mekar 2 RT 06 RW 06, Pekayon, Pasar Rebo, Jakarta Timur', 'latlng' => ['lat' => null, 'lat' => null]]
                        ]
                    ]
                ]
            ],
            [
                'kode' => '16',
                'nama' => 'PENGDA JAWA BARAT',
                "alamat_sekretariat" => "Jl.Mantarena No 6, Panaragan, Panaragan, Kota Bogor, Jawa Barat",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.jabar@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '16.01',
                        'nama' => 'CABANG BOGOR',
                        "alamat_sekretariat" => "Puri Nirwana 3, Jl. Anggur 9 No. 1, Karadenan, Cibinong, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.bogor@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.01.001','nama' => 'KOLAT BUDINIAH','alamat_sekretariat' => 'JL. Golf Jagorawi No.2 karanggan 16810 	gunung putri, karanggan, kabupaten bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.002','nama' => 'KOLAT GARDA PAKSI WANAGERANG','alamat_sekretariat' => 'Jl.Pancasila 4 KM 9 nmr rmh 22, kp Parung Tanjung DESA CICADAS, Gunung Putri, Cicadas, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.003','nama' => 'KOLAT KAB BOGOR','alamat_sekretariat' => 'Kabupaten Bogor','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.004','nama' => 'KOLAT KEDEP','alamat_sekretariat' => 'Jalan telajung udik ko kedep, Gunung putri, Tlajung udik, Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.005','nama' => 'KOLAT KODIM 0621 KAB. BOGOR','alamat_sekretariat' => 'Kodim 021 Kab. Bogor, jl. Tegar Beriman	Cibinong, Sukahati, Cibinong , Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.006','nama' => 'KOLAT NIRWANA','alamat_sekretariat' => 'Jl. Puri nirwana 3	Cibinong	Karadenan, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.007','nama' => 'KOLAT PONPES DARUSSALAM KOPOSARI','alamat_sekretariat' => 'Jl. Alt. Cibubur - Cileungsi blok Koposari KP. Kaum RT 02/02, Cileungsi, Cileungsi, Kab. Bogor ,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.008','nama' => 'KOLAT PT. ASKI','alamat_sekretariat' => 'Jl. Mayor Oking Jayaatmaja KM 2,2 No.1 kel. Karangasem Barat	Citeureup, Karangasem Barat, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.009','nama' => 'KOLAT SMPN 1 GUNUNG PUTRI','alamat_sekretariat' => 'Jl.melati  	Gunung Putri, Wanaherang, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.010','nama' => 'KOLAT SUSU BENDERA','alamat_sekretariat' => 'Jl.raya bogor KM.5 pasar rebo jakarta timur 13760, Pasar Rebo, Kelurahan gedong, Jakarta timur','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.01.011','nama' => 'KOLAT WANAHERANG','alamat_sekretariat' => 'Jl.pancasila 4 km 9	Gunung Putri, Cicadas, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => -6.41411770,'lat' => 106.94218020]]
                        ]
                    ],
                    [
                        'kode' => '16.02',
                        'nama' => 'CABANG SUKABUMI',
                        "alamat_sekretariat" => "Jl. RA. Kosasih No. 497, Subang Jaya, Cikole, Sukabumi, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.sukabumi@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.02.001','nama' => 'KOLAT KEBON PEDES','alamat_sekretariat' => 'Jln. Bojong galing Km.10 ','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.02.002','nama' => 'KOLAT KEBONPEDES','alamat_sekretariat' => 'Jln.bojong galing km.7kp.babakan ranji RT01/RW09, Kebonpedes, Desa Kebonpedes, Sukabumi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.02.003','nama' => 'KOLAT MA DARULMUTAALIMIEN','alamat_sekretariat' => 'Jl.cikaret, Sukaraja, Sukamekar, Sukabumi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.02.004','nama' => 'KOLAT MITUNG','alamat_sekretariat' => 'Jalan Gotong Royong No. 21 RT. 007 RW. 02	Pasar Rebo, Cijantung, Jakarta Timur, DKI Jakarta','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.02.005','nama' => 'KOLAT SMKN 1 SUKALARANG','alamat_sekretariat' => 'Jl. Raya Sukabumi - CIanjur KM.12 No.55, Cimangkok, Kec. Sukalarang, Kabupaten Sukabumi, Jawa Barat 43191, Indonesia','latlng' => ['lat' => -6.88064390,'lat' => 107.01639990]],
                            ['kode' => '16.02.006','nama' => 'KOLAT SUKARAJA','alamat_sekretariat' => null,'latlng' => ['lat' => null,'lat' => null]],
                        ]
                    ],
                    [
                        'kode' => '16.03',
                        'nama' => 'CABANG BANDUNG',
                        "alamat_sekretariat" => "Komp. Perumahan Griya Purwa Asri Blok F no 7 RT 07/02, Desa Cimekar, Cileunyi, Bandung, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.bandung@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.03.001','nama' => 'KOLAT ALMASOEM','alamat_sekretariat' => 'Jln. Raya Ciapcing no.22 Jatinangor Sumedang 45363','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.002','nama' => 'KOLAT ASDP','alamat_sekretariat' => 'Komp.Griya Purwa Asri	Kecamatan cinunuk	Cibiru hilir	Kabupaten Bandung	Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.003','nama' => 'KOLAT BANJARWANGI GARUT','alamat_sekretariat' => 'Jl. Wangunjaya, Banjarwangi, Wangunjaya, Garut, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.004','nama' => 'KOLAT CILEUNYI WETAN','alamat_sekretariat' => 'Jl aljawami no 27 rt 04 Rw 09, Kecamatan cileunyi, Cileunyi, Kabupaten bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.005','nama' => 'KOLAT GRIYA PURWA ASRI (GPA)','alamat_sekretariat' => 'Griya Purwa Asri Blok C10','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.006','nama' => 'KOLAT MANGLAYANG REGENCY','alamat_sekretariat' => 'Komp Griya purwa Asri Blok f, Cileunyu	Cinunuk, Kab.Bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.007','nama' => 'KOLAT RS MATA CICENDO','alamat_sekretariat' => 'Jl.Cicendo No.4 Bandung 40117','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.008','nama' => 'KOLAT SMAN 1 CICALENGKA','alamat_sekretariat' => 'Jl. H. Darham Cikopo No.42, Tenjolaya, Kec. Cicalengka, Kabupaten Bandung, Jawa Barat 40395, Indonesia','latlng' => ['lat' => -6.98368060,'lat' => 107.84181100]],
                            ['kode' => '16.03.009','nama' => 'KOLAT SMAN 27 BANDUNG','alamat_sekretariat' => 'Jl.Utsman Bin Affan No. 1, gede bage, Rancanumpang, Bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.010','nama' => 'KOLAT TEGAL MEKAR','alamat_sekretariat' => 'Jl.cangkuang no 17 rt 3 rw 12 desa cangkuang kec.rancaekek, kab.bandung, Rancaekek, Cangkuang, Kab.bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.011','nama' => 'KOLAT TELKOM UNIVERISTY','alamat_sekretariat' => 'Jl. Telekomunikasi No. 1, Terusan Buah Batu, Bandung, Jawa Barat, Bojongsoang, Lengkong Bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.03.012','nama' => 'KOLAT UNIVERSITAS WINAYA MUKTI','alamat_sekretariat' => 'Komplek Griya Purwa Asri blok C no 10	Cileunyi, Cimekar, Kabupaten Bandung, Jawa Barat','latlng' => ['lat' => -6.93862420,'lat' => 107.73763430]]
                        ]
                    ],
                    [
                        'kode' => '16.04',
                        'nama' => 'CABANG KUNINGAN',
                        "alamat_sekretariat" => "Jln. Tjut Nyak Dien No. 36A, Cijoho, Kuningan, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kuningan@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.04.001','nama' => 'KOLAT CIKASO','alamat_sekretariat' => 'Jl. Raya Cikaso Rt. 17 Rw.02 No.767 kampung pahing Desa Cikaso kec. Kramatmulya Kab kuningan 45553','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.04.002','nama' => 'KOLAT SMA NEGERI 1 KADUGEDE','alamat_sekretariat' => 'Jl. Syech Manglayang No.65, Babatan, Kec. Kadugede, Kabupaten Kuningan, Jawa Barat 45561, Indonesia','latlng' => ['lat' => -7.00485750,'lat' => 108.45061750]],
                            ['kode' => '16.04.003','nama' => 'Kolat UKM UNIKU','alamat_sekretariat' => 'Universitas Kuningan kampus 1. Jl. Cut Nyak Dhien No.36A, Cijoho, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45513, Kuningan, Cijoho, Kuningan, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                        ]
                    ],
                    [
                        'kode' => '16.05',
                        'nama' => 'CABANG CIREBON',
                        "alamat_sekretariat" => "Lap. Parkir Timur Komp. Olahraga Bima Cirebon",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.cirebon@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.05.001', 'nama' => 'KOLAT BHINNEKA JATIBARANG', 'alamat_sekretariat' => 'Jl. Raya Mayor Dasuki Blok Rengas Rt.028 Rw.04 Jatibarang Indramayu', 'latlng' => ['lat' => null, 'lat' => null]],
                        ]
                    ],
                    [
                        'kode' => '16.06',
                        'nama' => 'CABANG MAJALENGKA',
                        "alamat_sekretariat" => "Villa Ar Rafi blok mulyasari, ciranjeng, cingambul, Majalengka, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.majalengka@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.06.001','nama' => 'KOLAT CIRANJENG','alamat_sekretariat' => 'Villa ar-raffi no.1 ciranjeng','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.06.002','nama' => 'KOLAT MTSN 5 MAJALENGKA','alamat_sekretariat' => 'Jl. Jenderal Sudirman No.33, Talagakulon, Kec. Talaga, Kabupaten Majalengka, Jawa Barat 45463, Indonesia','latlng' => ['lat' => -6.98325170,'lat' => 108.30451660]],
                            ['kode' => '16.06.003','nama' => 'KOLAT SMK BIT (BANGKIT INDONESIA TALAGA)','alamat_sekretariat' => 'Jl.Ganeas no 1,ganeas talaga Majalengka, Talaga,Ganeas,Majalengka,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.06.004','nama' => 'KOLAT SMP SMK DARUSSALAM','alamat_sekretariat' => 'Sindanghurip , Cingambul ,Maniis ,Majalengka ,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.06.005','nama' => 'KOLAT SMPN 1 CIKIJING','alamat_sekretariat' => 'Jl. Sukanagara No.01, Cikijing, Kec. Cikijing, Kabupaten Majalengka, Jawa Barat 45466, Cikijing, Cikijing, Majalengka, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.06.006','nama' => 'KOLAT STYMA (STIKES YPIB MAJALENGKA)','alamat_sekretariat' => 'STIKES Ypib Majalengka, Majalengka wetan, Majalengka, Majalengka wetan, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.06.007','nama' => 'KOLAT SUKAHAJI','alamat_sekretariat' => 'Jl. Sukahaji, Sukahaji, Beledug, Majalengka, Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.07',
                        'nama' => 'CABANG SUMEDANG',
                        "alamat_sekretariat" => "Perum Cipameungpeuk Green Residence Blok E1 RW 10 Lingkungan Genting Pacing, Cipameungpeuk, Sumedang Selatan, Sumedang, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.sumedang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.07.001', 'nama' => 'KOLAT AR-RIFQI', 'alamat_sekretariat' => 'Komplek bumi panyileukan Jl Lembang Buleud Gg.Pesantren RT05 RW 09 Kel.Cipadung Kidul Kec.panyileukan Kota Bandung 40614, Panyileukan, Cipadung Kidul, Bandung, Jawa Barat', 'latlng' => ['lat' => null, 'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.08',
                        'nama' => 'CABANG INDRAMAYU',
                        "alamat_sekretariat" => "Jl. Alamanda Putih Blok C2 No.15, Margadadi, Indramayu, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.indramayu@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.08.001','nama' => 'KOLAT ANJATAN', 'alamat_sekretariat' => 'RT. 004 RW. 001 DUSUN LEMPUYANG 	ANJATAN 	INDRAMAYU, INDRAMAYU, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.002','nama' => 'KOLAT BAPOR RU6', 'alamat_sekretariat' => 'Gor Bumi Patra	Indramayu, Singajaya, Indramayu, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.003','nama' => 'KOLAT PABEAN KENCANA', 'alamat_sekretariat' => 'Jln. Jambal 2 no 178 Perumnas Pabean Kencana	Indramayu, Pabean Udik, Indramayu, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.004','nama' => 'KOLAT SMAN 1 INDRAMAYU', 'alamat_sekretariat' => 'Jl. Soekarno Hatta no 2	Indramayu, Pekandangan	Indramayu, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.005','nama' => 'KOLAT SMK WIDYA UTAMA INDRAMAYU', 'alamat_sekretariat' => 'Lemahmekar, Indramayu, Indramayu Regency, West Java 45212','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.006','nama' => 'KOLAT SMKN 2 INDRAMAYU (DAMAY)', 'alamat_sekretariat' => 'Jl. Raya Pabean Udik No.15, Pabeanudik, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45219 Indramayu Pabeanudik, Indramayu, Jawa Barat', 'latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.08.007','nama' => 'KOLAT SUDIMAMPIR', 'alamat_sekretariat' => 'Jl.sudimampir lor , Balongan, DS.sudimampir, Indramayu , Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.09',
                        'nama' => 'CABANG SUBANG',
                        "alamat_sekretariat" => "CQF9+P8R, Pasirkareumbi, Subang, Subang Regency, West Java 41211, Indonesia",
                        "latlng" => [
                            "lat" => -6.57562810,
                            "lng" => 107.76827010,
                        ],
                        'email' => 'mp.subang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.09.001','nama' => 'KOLAT COMPRENG SUBANG','alamat_sekretariat' => 'RT 08 RW 03 Suka, Mulya, Compreng, Suka Dana, Subang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.09.002','nama' => 'KOLAT DINAS PERTANIAN SUBANG','alamat_sekretariat' => 'Jl. Aipda KS Tubun No.7 , Subang, Cigadung	Subang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.09.003','nama' => 'KOLAT NEPAM PAMNUKAN','alamat_sekretariat' => 'JL. EYANG TIRTAPRAJA NO. 83, Pamanukan, Pamanukan Kota, Pamanukan, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.09.004','nama' => 'KOLAT PAMANUKAN','alamat_sekretariat' => 'Dusun Baru RT 002/006 Pamanukan, Mulyasari, Subang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.09.005','nama' => 'KOLAT UMUM SUBANG','alamat_sekretariat' => 'Jl.mayor dedeng s RT 16/06 no 23','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.10',
                        'nama' => 'CABANG PURWAKARTA',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.purwakarta@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.10.001', 'nama' => 'KOLAT PRESTASI/HIPAKAD', 'alamat_sekretariat' => 'Jl. Seroja ini No. 8, Purwakarta, Nagrikaler, Purwakarta, Jawa Barat', 'latlng' => ['lat' => null, 'lat' => null]],
                            ['kode' => '16.10.002', 'nama' => 'KOLAT SDN 3 NAGRIKALER', 'alamat_sekretariat' => 'Jl. Veteran No.106, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41115, Indonesia', 'latlng' => ['lat' => -6.53106190, 'lat' => 107.44633300]]
                        ]
                    ],
                    [
                        'kode' => '16.11',
                        'nama' => 'CABANG KARAWANG',
                        "alamat_sekretariat" => "Jl. Seroja No. 8 Rt: 043/005, Nagrikaler, Purwakarta, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.karawang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.11.001','nama' => 'KOLAT AL IRSYAD KARAWANG','alamat_sekretariat' => 'Jl. RH Jaja Abdullah No.02, Karawang Kulon	Karawang Barat, Karawang Kulon, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.002','nama' => 'KOLAT AMSAR','alamat_sekretariat' => 'Perum Rawanas Indah RT 001 RW 018 Jomin Barat, Kotabaru	Jomin Barat, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.003','nama' => 'KOLAT CIKAMPEK','alamat_sekretariat' => 'HCXV+H59, Jl. Jend. Ahmad Yani, Cikampek Sel., Kec. Cikampek, Karawang, Jawa Barat 41373, Indonesia','latlng' => ['lat' => -6.40108510,'lat' => 107.44299530]],
                            ['kode' => '16.11.004','nama' => 'KOLAT CITRA KEBUN MAS','alamat_sekretariat' => 'Perum CKM BLOK R15/6 Jalan jeruk 8, Majalaya Bengle, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.005','nama' => 'KOLAT GRIYA MAS LESTARI (GML)','alamat_sekretariat' => 'Perum Griya Mas Lestari, Kondangjaya Karawang	Karawang Timur	Kondangjaya, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.006','nama' => 'KOLAT KARAWANG JAYA','alamat_sekretariat' => 'Dsn. Kaliurip RT.  06 RW. 02 desa duren klari	Kecamatan klari	Duren, Karawang timur, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.007','nama' => 'KOLAT KARAWANG TIMUR','alamat_sekretariat' => 'JL. Raya Surotokunto, Adiarsa Timur	Karawang Timur, Adiarsa Timur, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.008','nama' => 'KOLAT KEBUGARAN KARAWANG','alamat_sekretariat' => 'Kantor Kecamatan Karawang Timur Jl, Surotokunto, Adiarsa Karawang, Karawang Timur Adiarsa, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.009','nama' => 'KOLAT KOSAMBI','alamat_sekretariat' => 'perumahan delta kondang indah blok D3 no 03, klari	karawang, karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.010','nama' => 'KOLAT MIFTAHUL FALAH KARAWANG','alamat_sekretariat' => 'Krajan II RT 005/002, Kondangjaya	Karawang Timur, Kondangjaya, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.011','nama' => 'KOLAT NURUL IHSAN KARABA 2','alamat_sekretariat' => 'Perumahan Delta Kondang Indah Blok D1 No. 3, 	Klari	Klari, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.012','nama' => 'KOLAT NURUL IMAM KARAWANG','alamat_sekretariat' => 'Nurul Imam Islamic School Jl. Manunggal XIX, Pasirjengkol 	MAJALAYA PASIRJENGKOL, KARAWANG, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.013','nama' => 'KOLAT SDIT Ahsanu Amala','alamat_sekretariat' => 'Kp. Sukamurni, Karawang Wetan, Karawang	Karawang Timur	Karawang Wetan, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.11.014','nama' => 'KOLAT SMAN 1 MAJALAYA','alamat_sekretariat' => 'Jl. Perum. Citra kebun mas Bengke kecamatan Majalaya Karawang 41371, Majalaya 	Bengle, Karawang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.12',
                        'nama' => 'CABANG BEKASI',
                        "alamat_sekretariat" => "Jl.Komodo I Blok B4 No.75 (Perumahan Cikarang Baru), JayaMukti, Cikarang Pusat, Bekasi,	Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.bekasi@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.12.001','nama' => 'KOLAT ANSORI','alamat_sekretariat' => 'Jl lohan 10, Serang baru,Sukasari,Bekasi,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.002','nama' => 'KOLAT BAITUL HUFAADZ','alamat_sekretariat' => 'Jln. Ciherang Timur 1A Blok II/27 RT02/09	Cikarang Utara , Simpangan, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.003','nama' => 'KOLAT BOTANICAL GARDEN','alamat_sekretariat' => 'Jl.komodo 1 no.75, Cikarang pusat, Jayamukti, Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.004','nama' => 'KOLAT BUMI CITRA LESTARI (BCL)','alamat_sekretariat' => 'PERUM BUMI CITRA LESTARI, JL. FLAMBOYAN 1 BLOK D2/ 27 DESA WALUYA KECAMATAN CIKARANG UTARA KABUPATEN BEKASI 17534, CIKARANG UTARA WALUYA, KABUPATEN BEKASI, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.005','nama' => 'KOLAT BUMI KAHURIPAN INDAH (BKI)','alamat_sekretariat' => 'Perumahan bumi kahuripan indah blok c 19 no 17 desa sukamanah kec sukatani kab bekasi, Sukatani	Sukamanah, Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.006','nama' => 'KOLAT CAHAYA ALAM FOUNDATION','alamat_sekretariat' => 'ASRAMA YATIM YAYASAN CAHAYA ALAM, Perumahan mutiara bekasi jaya, blok f3/10 ,rt.02.rw.09, Cibarusah, Sindangmulya, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.007','nama' => 'KOLAT CIJINGGA','alamat_sekretariat' => 'Jl.Cijingga I, Perumahan Pesona Cijingga, Cikarang Selatan, Serang, Kabupaten Bekasi','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.008','nama' => 'KOLAT EZZAT EL FATIR','alamat_sekretariat' => 'Jl. Raya Lemahabang no.54, Cikarang Utara, Tanjungsari, Kab. Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.009','nama' => 'KOLAT GRIYA ASRI 2','alamat_sekretariat' => 'Lapangan Griya Asri 2 RT 007 Rw 041	Tambun Selatan 	Sumberjaya, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.010','nama' => 'KOLAT MEGA REGENCY (MERCY)','alamat_sekretariat' => 'Mega Regency Blok F	Serang baru, Sukaragam, Kab bekasi','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.011','nama' => 'KOLAT MEKARSARI','alamat_sekretariat' => 'Jln mangun jaya	Tambun selantan, Mekarsari, Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.012','nama' => 'KOLAT NURUL ILMI','alamat_sekretariat' => 'SDIT Nurul Ilmi, Perum Mutiara Bekasi Jaya, Serang baru, Sukaragam, Kab bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.013','nama' => 'KOLAT PAGUPON','alamat_sekretariat' => 'Jl. Komodo I B4/74','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.014','nama' => 'KOLAT PASIRAYA','alamat_sekretariat' => 'PERUM TELAGA PASIRAYA BLOK B4 NO 8 JL.LOHAN 3 SUKASARI, SERANG BARU, SUKASARI, BEKASI, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.015','nama' => 'KOLAT PENDOPO ASRI','alamat_sekretariat' => 'Jln MELATI 7, TAMBUN SELATAN	SUMBER JAYA, BEKASI, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.016','nama' => 'KOLAT PILAR GADING MAS','alamat_sekretariat' => 'JL SUNAN GN JATI BLOK E2 35 PILAR GADING MAS	SUKATANI, SUKARUKUN, KABUPATEN BEKASI, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.017','nama' => 'KOLAT SAC (SEKOLAH ALAM CIKEAS)','alamat_sekretariat' => 'Komplek Puri Cikeas, Jl Letda Natsir, Cikeas, Gunung Putri, Bogor, Gunung Putri, Cikeas Udik, Kabupaten Bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.018','nama' => 'KOLAT SD MIDORI','alamat_sekretariat' => 'Jl. Ciantra RT07/04, Cikarang Selatan, Ciantra, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.019','nama' => 'KOLAT SDI INSAN CENDIKIA','alamat_sekretariat' => 'SDI Insan Cendikia, Kamp Cipalahlar, Serang Baru, Sukaragam, Kab Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.020','nama' => 'KOLAT SDIT AL BARKAH','alamat_sekretariat' => 'Jl. Imam Bonjol no 1, Cikarang Timur, Lemahabang, Kab. Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.021','nama' => 'KOLAT SDIT AL KAUTSAR','alamat_sekretariat' => 'Jl. Komodo 1F, Cikarang Pusat, Serta Jaya, Cikarang Baru, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.022','nama' => 'KOLAT SMK ANANDA MITRA INDUSTRI DELTAMAS','alamat_sekretariat' => 'Jl. Deltamas Boulevar no.01, Hegarmukti Cikarang Pusat, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.023','nama' => 'KOLAT SMK GLOBAL MULIA','alamat_sekretariat' => 'Jl. Komodo 1 No.75, Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat 17530, Cikarang Pusat Jayamukti, Cikarang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.024','nama' => 'KOLAT SMK MITRA INDUSTRI','alamat_sekretariat' => 'Jl.kawasan industri mm2100, Cikarang Barat, Danau indah, Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.025','nama' => 'KOLAT SMK TALENTA BANGSA','alamat_sekretariat' => 'Jl. Tambelang Kp. Blokang Rt. 02/03, Sukatani Sukahurip, Kab. Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.026','nama' => 'KOLAT SMPIT PERMATA HATI','alamat_sekretariat' => 'Jl. Komodo 1 No.75, Jayamukti, Kecamatan Cikarang Pusat, Cikarang	Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.027','nama' => 'KOLAT TAMAN CIKARANG INDAH 1','alamat_sekretariat' => 'Taman Cikarang Indah, Cikarang Selatan, Ciantra, Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.12.028','nama' => 'KOLAT TROPIKANA','alamat_sekretariat' => 'Jl.Komodo 1 No. 75, Cikarang Pusat, Jayamukti, Kabupaten Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.13',
                        'nama' => 'CABANG BANDUNG BARAT',
                        "alamat_sekretariat" => "Jl.Terusan SMP No.17 Rt.02 Rw.03, Desa Batujajar Barat, Batujajar, Bandung Barat, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.bandungbarat@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.13.001','nama' => 'KOLAT MAHARDHIKA','alamat_sekretariat' => 'Jl. Terusan SMP No.17, RT.02/RW.03, Batujajar Bar., Kec. Batujajar, Kabupaten Bandung Barat, Jawa Barat 40561	Kecematan Batujajar	Batujajar Barat, Bandung Barat, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.13.002','nama' => 'KOLAT SMAN 1 BATUJAJAR','alamat_sekretariat' => 'Jl. Terusan SMP No.17 Rt 02 Rw 03	Kecamatan Batujajar	Batujajar barat, Kabupaten Bandung Barat, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.13.003','nama' => 'KOLAT SMK CENDEKIA','alamat_sekretariat' => 'Jl.citunjung Batujajar timur, Batujajar,Batujajar timur,Bandung,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.13.004','nama' => 'KOLAT SMPN 1 BATUJAJAR','alamat_sekretariat' => 'Jl. SMP No.12, Batujajar Bar., Kec. Batujajar, Kabupaten Bandung Barat, Jawa Barat 40561, Batujajar ,Batujajar barat,Bandung barat,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.13.005','nama' => 'KOLAT SMPN 1 CIHAMPELAS','alamat_sekretariat' => 'Jl. Terusan SMP No, 17.RT. 02/RW.03 Batujajar Bar., Kec. Batujajar, Kabupaten bandung barat Jawa Barat Kecamatan Batujajar, Batujajar	Bandung, Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],

                    [
                        'kode' => '16.14',
                        'nama' => 'CABANG KOTA BOGOR',
                        "alamat_sekretariat" => "Jl. Abesin No. 1A, Bogor tengah, Cibogor, Bogor, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotabogor@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.14.001','nama' => 'KOLAT INSTITUT PERTANIAN BOGOR','alamat_sekretariat' => 'Jl. Raya Dramaga KEL No.KM 9, RT.03/RW.01, Babakan, Kec. Dramaga, Kabupaten Bogor, Jawa Barat 16680, Indonesia','latlng' => ['lat' => -6.56164430,'lat' => 106.73136930]],
                            ['kode' => '16.14.002','nama' => 'KOLAT SDN KAWUNG LUWUK','alamat_sekretariat' => 'Jln kresna 2no 20	Bogor utara	Bantarjati, Kota bogor, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.14.003','nama' => 'KOLAT WIJAYA KUSUMA BOGOR','alamat_sekretariat' => 'Jl. Kabandungan Rt.001 Rw.05 Taman Sari Bogor','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.15',
                        'nama' => 'CABANG KOTA BANDUNG',
                        "alamat_sekretariat" => "Jl. Belitung 2A, Sumur Bandung, 	Merdeka, Bandung, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotabandung@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.15.001', 'nama' => 'KOLAT GUDANG UTARA', 'alamat_sekretariat' => 'Jl. Gudang Utara No. 27', 'latlng' => ['lat' => null, 'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.16',
                        'nama' => 'CABANG KOTA BEKASI',
                        "alamat_sekretariat" => "Kampus Universitas Krisnadwipayana, Jl. Jatiwaringin Raya, Jati Cempaka, Pondok Gede, Kota Bekasi, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotabekasi@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.16.001','nama' => 'KOLAT DARUL KIROM','alamat_sekretariat' => 'Jl. Raden sangiang senopati 	Jatisampurna, Jatiraden	Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.002','nama' => 'KOLAT GLOSMAN KOTA BEKASI','alamat_sekretariat' => 'Jl. Nilam II No.126, RT.002/RW.010	Jatisampurna Jatiraden, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.003','nama' => 'KOLAT JATI MURNI','alamat_sekretariat' => 'Jln raya Jatiwaringin pondok gede Bekasi','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.004','nama' => 'KOLAT JATI SAMPURNA 2','alamat_sekretariat' => 'Kompleks Perum Wahana Pondok Gede, RT.002/RW.001, Jatiranggon, Kec. Jatisampurna, Kota Bks, Jawa Barat 17432','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.005','nama' => 'KOLAT JATIRAHAYU','alamat_sekretariat' => 'Komplek Wisma Kusuma Indah Jl Kusuma 13 Blok C62 RT 004/005 Kel. Jatirahayu. Kec. Pondok Melati. Kota Bekasi 	Jatirahayu	Pondok Melati, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.006','nama' => 'KOLAT KARANG TARUNA JATIRANGGA','alamat_sekretariat' => 'Jl. Masjid At-Taqwa GG.bumur II RT.02 RW.01','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.007','nama' => 'KOLAT MTSN 29 BEKASI','alamat_sekretariat' => 'Jl. Makmur Rt005/03 No. 50, Cilangkap, Kec. Cipayung, Kota Jakarta Timur Prov. D.K.I. Jakarta, Kec.cipayung	Kel.cilangkap, Jakarta timur, DKI Jakarta','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.008','nama' => 'KOLAT PONDOK PEKAYON INDAH','alamat_sekretariat' => 'Pondok Pekayon Indah Blok DD 45 no 1 , Bekasi-Selatan,Pekayon Jaya,Bekasi,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.009','nama' => 'KOLAT SD ALAM ROBBANI','alamat_sekretariat' => 'Havila Residence, RT.002/RW.010 ,jatiraden,kec jatisampurna kota bekasi	Kecamatan jatisampurna	Jatiraden	Kota bekasi	Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.010','nama' => 'KOLAT SDN 06 PEKAYON JAYA KOTA BEKASI','alamat_sekretariat' => 'Jl Pekayon no 34 Pekayon jaya bkas selatan kota Bekasi 	Bekasi selatan	Pekayon jaya, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.011','nama' => 'KOLAT SDN JATIRANGGA','alamat_sekretariat' => 'Jalan Lurah Namat No. 49, Kelurahan No.RT.001, RT.001/RW.006, Jatirangga, Kec. Jatisampurna, Kota Bks, Jawa Barat 17434	Jatisampurna 	Jatirangga 	Jalan Lurah Namat No. 49, Kelurahan No.RT.001, RT.001/RW.006, Jatirangga, Kec. Jatisampurna, Kota Bks, Jawa Barat 17434','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.012','nama' => 'KOLAT SMAN 13 KOTA BEKASI','alamat_sekretariat' => 'Perum Bumi Bekasi Baru Jl Pariwisata Raya No 70 	Rawalumbu	Pengasinan, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.013','nama' => 'KOLAT SMAN 7 KOTA BEKASI','alamat_sekretariat' => 'Jl. Lingkar tata kota no. 107 Rt. 12 Rw. 15 Jatisampurna kec. Jatisampurna kota bekasi, Jatisampurna	Jatisampurna, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.014','nama' => 'KOLAT SMKN 70 KOTA BEKASI','alamat_sekretariat' => 'Jl kav DKI Jakarta 	Pondok kelapa, Duren sawit, Jl kav DKI Jakarta, DKI Jakarta','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.015','nama' => 'KOLAT SMPN 28 KOTA BEKASI','alamat_sekretariat' => 'Sekolah SMP N 28 Kota Bekasi, Jln Kranggan 	Jatisampurna	Jatisampurna, Kota Bekasi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.016','nama' => 'KOLAT TAMAN CIKAS BEKASI','alamat_sekretariat' => 'Taman Cikas RT 04	Pekayon, Pekayon Jaya, Bekasi Selatan, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.017','nama' => 'KOLAT TAMAN KOTA BEKASI','alamat_sekretariat' => 'Jl. Veteran, Rt 06 Rw 06, kelurahan Margajaya, Bekasi Selatan, Kota Bekasi','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.018','nama' => 'KOLAT UNIVERSITAS KRISNADWIPAYANA','alamat_sekretariat' => 'Kampus universitas Krisnadwipayana, Jatiwaringin,Jatiwaringin,Kota bekasi,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.16.019','nama' => 'KOLAT WINUS','alamat_sekretariat' => 'jl Jl. Tri Satya Perum Bumi Bekasi BAru No.47, RT.001/RW.008, Kec, Kec. Rawalumbu, Kota Bks, Jawa Barat 17116','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.17',
                        'nama' => 'CABANG KOTA DEPOK',
                        "alamat_sekretariat" => "Perum Depok Utara Jln. Wortel No. 2, Beji, Depok, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotadepok@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.17.001','nama' => 'KOLAT BAYU AJI','alamat_sekretariat' => 'Balai RW 09 Perumahan Sawangan Permai','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.002','nama' => 'KOLAT DEPOK UTARA','alamat_sekretariat' => 'Jl. Beluntas no. 125, Beji,Beji,Depok,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.003','nama' => 'KOLAT JAGAT MUSTIKA','alamat_sekretariat' => 'Perumahan Bukit Serpong Indah Blok K','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.004','nama' => 'KOLAT MEGAWESI CINERE','alamat_sekretariat' => 'Jl. Sasak Raya RT.01/08, Limo, Depok , Limo,Limo,Depok,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.005','nama' => 'KOLAT MUSTIKA BADRANAYA SUKMAJAYA','alamat_sekretariat' => 'Perumahan Pondok Sukmajaya Permai Blok C.4 No.9 Depok 16312	SUKMAJAYA, SUKMAJAYA	DEPOK, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.006','nama' => 'KOLAT MUSTIKA DHARMA DEPINDA 1','alamat_sekretariat' => 'Jl. Margonda Perum. Depok Indah I','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.007','nama' => 'KOLAT MUTIARA 35','alamat_sekretariat' => 'SMA 35, Jl. Mutiara Karet Tengsin, Tanah Abang	Karet Tengsin, Jakarta Pusat, DKI Jakarta','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.008','nama' => 'KOLAT PANDAWA','alamat_sekretariat' => 'Balai Rakyat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.009','nama' => 'KOLAT PERJUANGAN','alamat_sekretariat' => 'Jl. kramat burung No. 32, Pancoranmas,Rangkapanjaya,Depok,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.17.010','nama' => 'KOLAT TAMAN MENTOS','alamat_sekretariat' => 'Jl.Nurus SKHI No.108 RT.002 RW 05 Tapos	TAPOS	TAPOS, KOTA DEPOK, Jawa Barat','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '16.18',
                        'nama' => 'CABANG KOTA CIMAHI',
                        "alamat_sekretariat" => "Jl. Kolonel Masturi No. 106, Kota Cimahi, Cipageran, Cimahi Utara, Cimahi, Jawa Barat",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotacimahi@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '16.18.001','nama' => 'KOLAT ASIH PUTERA','alamat_sekretariat' => 'Jl. Daeng Moh. Ardiwinata no 199, Cimahi Utara ,Cibabat,Cimahi,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.002','nama' => 'KOLAT DAR AL-FIKRI','alamat_sekretariat' => 'Jalan Kalpataru, No. 30A, Perumahan Bumi Asri, Kel. Gempolsari , Bandung Kulon,Gempolsari ,Bandung ,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.003','nama' => 'KOLAT GANI ARTA','alamat_sekretariat' => 'Kp. Pos Kidul Padalarang, Padalaramg, Kertamulya, Padalarang, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.004','nama' => 'KOLAT IKIP SILIWANGI','alamat_sekretariat' => 'Jl. Terusan Jend. Sudirman, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521, Indonesia','latlng' => ['lat' => -6.88760560,'lat' => 107.52993570]],
                            ['kode' => '16.18.005','nama' => 'KOLAT MERPATI','alamat_sekretariat' => 'Jl. Raya Sinar Mukti, Batujajar Bar., Kec. Batujajar, Kabupaten Bandung Barat, Jawa Barat 40561, Batujajar,Batujajar Barat,Bandung barat,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.006','nama' => 'KOLAT MISBAHUNNUR','alamat_sekretariat' => 'Jl. Kolonel masturi, Cipageran,Cipageran,Cimahi utara,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.007','nama' => 'KOLAT MUARA','alamat_sekretariat' => 'Jln muara barat III no 14 RT 04 RW 01 Kel kebon lega, Bojong loa kidul,Kebon lega,Bandung,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.008','nama' => 'KOLAT SMAN 2 CIMAHI','alamat_sekretariat' => 'Jl.Sriwijaya IX No.45A, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40524, Cimahi tengah, Setiamanah, Cimahi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.009','nama' => 'KOLAT SMAN 4 CIMAHI','alamat_sekretariat' => 'Jl. Kihapit Barat No.323, Leuwigajah, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40532','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.010','nama' => 'KOLAT SMKN 2 CIMAHI','alamat_sekretariat' => 'Jalan Kamarung No.69, RT.2/RW.5, Citeureup, Cimahi Utara, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512, Indonesia','latlng' => ['lat' => -6.85167780,'lat' => 107.55108090]],
                            ['kode' => '16.18.011','nama' => 'KOLAT SMKN 3 CIMAHI','alamat_sekretariat' => 'Jl. Permana Tim. No.2, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512, Indonesia','latlng' => ['lat' => -6.85980500,'lat' => 107.55671750]],
                            ['kode' => '16.18.012','nama' => 'KOLAT SMP NEGERI 8 CIMAHI','alamat_sekretariat' => 'Jl. Kihapit Barat No.320, Leuwigajah, Cimahi Selatan, Leuwigajah, Kota Cimahi, Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.013','nama' => 'KOLAT UNIVERSITAS PASUNDAN','alamat_sekretariat' => 'Jl. Dr. Setiabudhi no 193, Bandung, Sukasari,Gegerkalong,Bandung,Jawa Barat','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '16.18.014','nama' => 'KOLAT UNJANI','alamat_sekretariat' => 'Jl. Terusan Jend. Sudirman','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ]
                ]
            ],
            [
                'kode' => '17',
                'nama' => 'PENGDA JAWA TENGAH',
                "alamat_sekretariat" => "Jl. Sawunggaling VII No 11, Banyumanik, Semarang, Jawa Tengah",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.jateng@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '17.01',
                        'nama' => 'CABANG CILACAP',
                        "alamat_sekretariat" => "Jl. Urip Sumoharjo no.3, Mertasinga, Cilacap Utara, Cilacap, Jawa Tengah",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.cilacap@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '17.01.001','nama' => 'KOLAT KARANGPUCUNG','alamat_sekretariat' => 'Jl. H. Ismail SDIT Miftahul Huda 520 Ciporos 	Karangpucung 	Ciporos, Cilacap, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.01.002','nama' => 'KOLAT MERTASINGA','alamat_sekretariat' => 'Jl Urip Sumoharjo no 3, Cilacap utara, , Mertasinga, Cilacap, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.01.003','nama' => 'KOLAT PADEPOKAN MAOS','alamat_sekretariat' => 'Jl. Dokteran No. 43 RT 04 RW 03, Maos	Klapagada, Cilacap, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.01.004','nama' => 'KOLAT SMP ISLAM CITEPUS','alamat_sekretariat' => 'SMP Islam Citepus, Jl. Raya Citepus Bojongsari	Jeruklegi	Citepus, Cilacap, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '17.02',
                        'nama' => 'CABANG BANYUMAS',
                        "alamat_sekretariat" => "Jln. Sumur Kidem No. 26, Pucung Rungkat, Teluk, Purwokerto Selatan, Purwokerto, Jawa Tengah",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.banyumas@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '17.02.001','nama' => 'KOLAT AL IRSYAD AL ISLAMIYYAH PURWOKERTO','alamat_sekretariat' => 'Jl. Raga Semangsang Sokanegara','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.002','nama' => 'KOLAT BANK MANDIRI PURWOKERTO','alamat_sekretariat' => 'Jl. Jend. Sudirman No. 61A','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.003','nama' => 'KOLAT JATILAWANG','alamat_sekretariat' => 'Jalan Raya Jatilawang','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.004','nama' => 'KOLAT KEBUGARAN GOR SATRIA','alamat_sekretariat' => 'Jl. Prof. Dr. Suharso No. 8','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.005','nama' => 'KOLAT MAN 1 BANYUMAS','alamat_sekretariat' => 'Jl. Senopati No. 1','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.006','nama' => 'KOLAT PADEPOKAN MP BANYUMAS','alamat_sekretariat' => 'Jl. Sumur Kidem No. 26, Puncung Rungkat, Teluk, Purwokerto Selatan, Purwokerto, Jawa Tangah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.007','nama' => 'KOLAT RAWALO','alamat_sekretariat' => 'Jl. Pawiatan No. 1','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.008','nama' => 'KOLAT SD IT TOP KIDS SOKARAJA','alamat_sekretariat' => 'Jl. Krida Mandala Dusun I','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.009','nama' => 'KOLAT SMAN 1 AJIBARANG','alamat_sekretariat' => 'Jl. Pancurendang','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.010','nama' => 'KOLAT SMAN 1 BANYUMAS','alamat_sekretariat' => 'Jl. Pramuka No. 13  Banyumas','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.011','nama' => 'KOLAT SMAN 1 BATURRADEN','alamat_sekretariat' => 'Jl. Raya Rempoah Timur No. 786','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.012','nama' => 'KOLAT SMAN 1 PURWOKERTO','alamat_sekretariat' => 'Jl. Jend. Gatot Subroto No. 73','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.013','nama' => 'KOLAT SMAN 1 SUMPIUH','alamat_sekretariat' => 'Jl. Raya Barat No. 95 Pesantren','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.014','nama' => 'KOLAT SMAN 2 PURWOKERTO','alamat_sekretariat' => 'Jl. Jend. Gatot Subroto No. 69','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.015','nama' => 'KOLAT SMAN 4 PURWOKERTO','alamat_sekretariat' => 'Dusun I, Karangsalam Kidul','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.016','nama' => 'KOLAT SMAN 4 PURWOKERTO','alamat_sekretariat' => 'Jl. Overste Isdiman No. 9','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.017','nama' => 'KOLAT SMAN 5 PURWOKERTO','alamat_sekretariat' => 'Jl. Gereja No. 20 Karangjengkol','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.018','nama' => 'KOLAT SMAN PATIKRAJA','alamat_sekretariat' => 'Jl. Adipura No. 3, Banyumas','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.019','nama' => 'KOLAT SMK GIRIPURO','alamat_sekretariat' => 'Kebokura','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.020','nama' => 'KOLAT SMK YP3I POLTEK BANYUMAS','alamat_sekretariat' => 'Jalan Raya Banyumas Kalibagor No.  12','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.021','nama' => 'KOLAT SMKN 1 KEBASEN','alamat_sekretariat' => 'Jl. Raya Bentul','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.022','nama' => 'KOLAT SMKN 1 PURWOKERTO','alamat_sekretariat' => 'Jl. DR. Soeparno No. 29','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.023','nama' => 'KOLAT SMKN 2 PURWOKERTO','alamat_sekretariat' => 'Jl. Jend. Gatot Subroto No. 81','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.024','nama' => 'KOLAT SMPN 1 CILONGOK','alamat_sekretariat' => 'Jl. Raya Pernasidi','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.025','nama' => 'KOLAT SMPN 1 KEMBARAN','alamat_sekretariat' => 'Kembaran 2, Banyumas','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.026','nama' => 'KOLAT SMPN 1 KEMRANJEN','alamat_sekretariat' => 'Simpangwijahan, Karangjati','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.027','nama' => 'KOLAT SMPN 1 PURWOKERTO','alamat_sekretariat' => 'Jl.  Jend. Sudirman No. 181','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.028','nama' => 'KOLAT SMPN 1 TAMBAK','alamat_sekretariat' => 'Jl. Watu Agung','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.029','nama' => 'KOLAT SMPN 2 KARANGLEWAS','alamat_sekretariat' => 'Dusun I, Pangebatan','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.030','nama' => 'KOLAT SMPN 2 KEDUNGBANTENG','alamat_sekretariat' => 'Jl. Dusun III','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.031','nama' => 'KOLAT SMPN 3 PURWOKERTO','alamat_sekretariat' => 'Jl. Gereja No. 15','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.032','nama' => 'KOLAT SMPN 4 PURWOKERTO','alamat_sekretariat' => 'Jl. Kertawibawa No. 575','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.033','nama' => 'KOLAT SMPN 9 PURWOKERTO','alamat_sekretariat' => 'Jl. Jatisari No. 25','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.034','nama' => 'KOLAT TELKOM PURWOKERTO','alamat_sekretariat' => 'Jl. DI Panjaitan No. 128','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.035','nama' => 'KOLAT UMUM AJIBARANG','alamat_sekretariat' => 'Jl. Raya Ajibarang Bumiayu No. 2','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.036','nama' => 'KOLAT UNIVERSITAS AMIKOM PURWOKERTO','alamat_sekretariat' => 'Jl. Letjen Pol Soemarno','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.037','nama' => 'KOLAT UNIVERSITAS JEND SOEDIRMAN (UNSOED)','alamat_sekretariat' => 'Jl. HR Bunyamin','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.038','nama' => 'KOLAT UNIVERSITAS WIJAYA KUSUMA BANYUMAS','alamat_sekretariat' => 'Jl. Raya Beji No. 25','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.039','nama' => 'KOLAT UNWIKU','alamat_sekretariat' => 'Jl. Raya Beji Karangsalam No.25, Kedungbanteng, , Karangsalam Kidul, BANYUMAS, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.02.040','nama' => 'KOLAT WANGON','alamat_sekretariat' => 'Jl. Pejarakan','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '17.03',
                        'nama' => 'CABANG PURBALINGGA',
                        "alamat_sekretariat" => "Kelurahan Mewek RT 003 RW 003, Kalimanah, Purbalingga, Jawa Tengah",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.purbalingga@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '17.03.001','nama' => 'KOLAT BINANGUN','alamat_sekretariat' => 'Jalan Raya Binangun, Binangun RT 2 RW 2, Mrebet, Purbalingga Mrebet Binangun, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.002','nama' => 'KOLAT GANESHA','alamat_sekretariat' => 'Jalan Raya Mt Haryono 	Purbalingga, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.003','nama' => 'KOLAT JS (JIRAYA SPORT)','alamat_sekretariat' => 'Jl Purbalingga pemalang	Bojongsari, Brobot, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.004','nama' => 'KOLAT KARANGGEDANG','alamat_sekretariat' => 'Kr gedang rt 01/02	Kr anyar	Kr gedang, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.005','nama' => 'KOLAT KARANGSENTUL','alamat_sekretariat' => 'Perum GPA Blok T no 20	Padamara Bojanegara, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.006','nama' => 'KOLAT KEBUGARAN KARANGANYAR','alamat_sekretariat' => 'Jln.raya Karanganyar RT 01/02,Karanganyar Purbalingga,53354, Karanganyar, , Karanganyar, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.007','nama' => 'KOLAT MERDEN','alamat_sekretariat' => 'Jl wiryamenggala rt 02 rw 03 merden, Kaligondang, , Penaruban, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.008','nama' => 'KOLAT PONDOK PESANTREN TAHFIDZUL QURAN AL-FATAH PURBALINGGA','alamat_sekretariat' => 'Jl. Rawakeong Rt 05 Rw 03. Ds Lamuk., Kejobong, Lamuk, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.009','nama' => 'KOLAT REMBANG','alamat_sekretariat' => 'Marifatun Mahmudah, Karangmoncol, , Tamansari, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.010','nama' => 'KOLAT RUPAKPICIS','alamat_sekretariat' => 'Jl raya rupak picis	Kalimanah Klapa sawit, PURBALINGGA, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.011','nama' => 'KOLAT SDN 1 GUNUNGKARANG','alamat_sekretariat' => 'Jl. Raya Gunungkarang RT.04 RW.01	Bobotsari	Gunungkarang Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.012','nama' => 'KOLAT SMAN 1 BOBOTSARI','alamat_sekretariat' => 'Jl. Majapura , Bobotsari, majapura, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.013','nama' => 'KOLAT SMAN 1 KARANGREJA','alamat_sekretariat' => 'Jl.karangreja-bobotsari	Karangreja	Karangreja, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.014','nama' => 'KOLAT SMAN 1 KUTASARI','alamat_sekretariat' => 'Kutasari 	Karang cegak	Jawa tengah , Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.015','nama' => 'KOLAT SMAN 1 PADAMARA','alamat_sekretariat' => 'Jl raya Padamara	Padamara Padamara, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.016','nama' => 'KOLAT SMAN 1 PURBALINGGA','alamat_sekretariat' => 'JL. MT. Haryono, Dusun 1, Purbalingga Kulon	Purbalingga	Purbalingga kulon, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.017','nama' => 'KOLAT SMAN 1 PURBALINGGA','alamat_sekretariat' => 'Jalan Raya Mt Haryono purbalingga, Purbalingga	Purbalingga, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.018','nama' => 'KOLAT SMAN 2 PURBALINGGA','alamat_sekretariat' => 'Kalikajar 24	Kaligondang	Kalikajar, PURBALINGGA, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.019','nama' => 'KOLAT SMK YPT 1 PURBALINGGA','alamat_sekretariat' => 'Jl. Raya Mayjen Sungkono No.Km.3 selabaya	kalimanah, selabaya, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.020','nama' => 'KOLAT SMK YPT 2 PURBALINGGA','alamat_sekretariat' => 'Jl.May Jend Sungkono KM 03 Kalimanah Purbalingga-Jawa Tengah , Kalimanah, , Kalimanah, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.021','nama' => 'KOLAT SMKN 1 KARANGJAMBU','alamat_sekretariat' => 'Jalan raya smp negeri 1 karangjambu 	Karangjambu	Karangjambu Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.022','nama' => 'KOLAT SMKN 1 KUTASARI','alamat_sekretariat' => 'Jl. Raya tobong	Kutasari	Kutasari, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.023','nama' => 'KOLAT SMKN 1 PURBALINGGA','alamat_sekretariat' => 'Jl. Mayjend Sungkono no 53	Kalimanah Kalimanah, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.024','nama' => 'KOLAT SMKN 2 PURBALINGGA','alamat_sekretariat' => 'JL. Raya Selaganggeng, Mrebet, Dusun 1, Selaganggeng, Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53352	Mrebet	Selaganggeng, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.025','nama' => 'KOLAT SMKN JATENG PURBALINGGA','alamat_sekretariat' => 'Jl. Letnan Sudani RT 4 RW 1	Purbalingga	Purbalingga Lor, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.026','nama' => 'KOLAT SMPN 2 KUTASARI','alamat_sekretariat' => 'Kutasari	Kutasari, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.027','nama' => 'KOLAT SMPN 3 KARANGREJA','alamat_sekretariat' => 'Jl.Raya Pemalang Purbalingga	Karangreja	Tlahab Kidul, PURBALINGGA, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.03.028','nama' => 'KOLAT SMPN 3 KUTASARI','alamat_sekretariat' => 'Jl.raya kr.jengkol ,kr.jengkol kutasari Kutasari, Karangjengkol, Purbalingga, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '17.04',
                        'nama' => 'CABANG BANJARNEGARA',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.banjarnegara@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [],
                    ],
                    [
                        'kode' => '17.05',
                        'nama' => 'CABANG KEBUMEN',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kebumen@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '17.05.001','nama' => 'KOLAT DISDIKPORA','alamat_sekretariat' => 'Jl. Pemuda Gg. Tanjung 3 No.14 RT 02 RW 01 Bojong Panjer Kebumen	Kebumen	Panjer	Kebumen	Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.05.002','nama' => 'KOLAT GOMBONG','alamat_sekretariat' => 'Jln.PURING.   Dk.KARANGJATI','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.05.003','nama' => 'KOLAT SMPN 1 PETANAHAN','alamat_sekretariat' => 'Jl. Laut No. 16 Munggu Petanahan Kebumen','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '17.06',
                        'nama' => 'CABANG PURWOREJO',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.purworejo@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            ['kode' => '17.06.001','nama' => 'KOLAT KEBUGARAN LOKANANTA','alamat_sekretariat' => 'Jalan A. Yani no. 379, Laweyan, , Kerten, Surakarta, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.002','nama' => 'KOLAT SD NEGERI ROWOBAYEM','alamat_sekretariat' => 'Jalan Tentara Pelajar km 02, Kemiri, , Rowobayem , Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.003','nama' => 'KOLAT SDN WANGUNREJO','alamat_sekretariat' => 'Desa Wangunrejo, Banyuurip, , Wangunrejo, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.004','nama' => 'KOLAT SMAN 1 PURWOREJO','alamat_sekretariat' => 'Jl. Tentara Pelajar No.55, Sibung, Purworejo, , Pangenjurutengah, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.005','nama' => 'KOLAT SMAN 10 PURWOREJO','alamat_sekretariat' => 'Jalan Kalikotes Pituruh, Pituruh, , Kalikotes, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.006','nama' => 'KOLAT SMAN 7 PURWOREJO','alamat_sekretariat' => 'Jalan Ki Mangunsarkoro No. 4 , Purworejo, , Pangenjurutengah, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.007','nama' => 'KOLAT SMK NURUSSALAF KEMIRI','alamat_sekretariat' => 'Jl. Kemiri-Pakisan Km. 01 , Kemiri, , Kemirilor, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.008','nama' => 'KOLAT SMKN 3 PURWOREJO','alamat_sekretariat' => 'Jl Kartini no.5 Purworejo, Purworejo, , Sindurjan, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.009','nama' => 'KOLAT SMPN 1 PURWOREJO','alamat_sekretariat' => 'Jl. Jenderal Sudirman No.8, Ngupasan, Purworejo, , Pangenjurutengah, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.010','nama' => 'KOLAT SMPN 13 PURWOREJO','alamat_sekretariat' => 'Jl. Tentara Pelajar No. 02, Kutoarjo, , Kutoarjo, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.011','nama' => 'KOLAT SMPN 2 PURWOREJO','alamat_sekretariat' => 'Jl. A. Yani No.6, Plaosan, Purworejo, , Purworejo, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.012','nama' => 'KOLAT SMPN 23 PURWOREJO','alamat_sekretariat' => 'Jln. Gajah Mada, Bayan, , Besole, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.013','nama' => 'KOLAT SMPN 26 PURWOREJO','alamat_sekretariat' => 'Jalan Yogyakarta Km. 05 RT )5 / RW 02 Popongan, Banyuurip, , Popongan, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.014','nama' => 'KOLAT SMPN 32','alamat_sekretariat' => 'Desa Karangduwur, Karangduwur, , Kemiri, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.015','nama' => 'KOLAT SMPN 33 PURWOREJO','alamat_sekretariat' => 'Jl. Tentara Pelajar No.92, Banyuurip, , Kledung Kradenan, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]],
                            ['kode' => '17.06.016','nama' => 'KOLAT SMPN 41 PURWOREJO','alamat_sekretariat' => 'Jl Pituruh-Wonosido km 4 , Kemiri, , Kaliglagah, Purworejo, Jawa Tengah','latlng' => ['lat' => null,'lat' => null]]
                        ]
                    ],
                    [
                        'kode' => '17.07',
                        'nama' => 'CABANG WONOSOBO',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.wonosobo@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.08',
                        'nama' => 'CABANG MAGELANG',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.magelang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.09',
                        'nama' => 'CABANG KLATEN',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.klaten@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.10',
                        'nama' => 'CABANG KARTASURA',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kartasura@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.11',
                        'nama' => 'CABANG WONOGIRI',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.wonogiri@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.12',
                        'nama' => 'CABANG BLORA',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.blora@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.13',
                        'nama' => 'CABANG SEMARANG',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.semarang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.14',
                        'nama' => 'CABANG TEMANGGUNG',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.temanggung@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.15',
                        'nama' => 'CABANG PEKALONGAN',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.pekalongan@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.16',
                        'nama' => 'CABANG TEGAL',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.tegal@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.17',
                        'nama' => 'CABANG BREBES',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.brebes@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.18',
                        'nama' => 'CABANG KOTA SURAKARTA',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotasurakarta@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '17.19',
                        'nama' => 'CABANG KOTA SEMARANG',
                        "alamat_sekretariat" => "",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotasemarang@merpatiputih.id',
                        'password' => '12345678',
                    ]
                ]
            ],
            [
                'kode' => '18',
                'nama' => 'PENGDA DI YOGYAKARTA',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.diy@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '19',
                'nama' => 'PENGDA JAWA TIMUR',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.jatim@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '20',
                'nama' => 'PENGDA BANTEN',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.banten@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '21',
                'nama' => 'PENGDA BALI',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.bali@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '22',
                'nama' => 'PENGDA NUSA TENGGARA BARAT',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.ntb@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '23',
                'nama' => 'PENGDA KALIMANTAN TIMUR',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.ntt@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '00',
                'nama' => 'PENGDA NON PENGDA',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.nonpengda@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '01',
                'nama' => 'PENGDA CABANG KHUSUS',
                "alamat_sekretariat" => "",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.cabsus@merpatiputih.id',
                'password' => '12345678',
            ],
        ];

        foreach($data as $item) {
            $pengda = MDaerah::create([
                'kode' => $item['kode'],
                'nama' => $item['nama'],
                'alamat_sekretariat' => $item['alamat_sekretariat'],
                'latlng' => $item['latlng'],
                'email' => $item['email'],
                'password' => $item['password'],
            ]);

            if (isset($item['cabang'])) {
                foreach ($item['cabang'] as $cabang) {
                    $pengcab = MCabang::create([
                        'daerah_id' => $pengda->id,
                        'kode' => $cabang['kode'],
                        'nama' => $cabang['nama'],
                        'alamat_sekretariat' => $cabang['alamat_sekretariat'],
                        'latlng' => $cabang['latlng'],
                        'email' => $cabang['email'],
                        'password' => $cabang['password'],
                    ]);

                    if (isset($cabang['kolat'])) {
                        foreach ((array) $cabang['kolat'] as $kolat) {
                            MKolat::create([
                                'daerah_id' => $pengda->id,
                                'cabang_id' => $pengcab->id,
                                'kode' => $kolat['kode'],
                                'nama' => $kolat['nama'],
                                'alamat_sekretariat' => $kolat['alamat_sekretariat'],
                                'latlng' => $kolat['latlng'],
                            ]);
                        }
                    }
                }
            }
        }
    }
}
