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
                'wilayah' => '11',
                'alamat_sekretariat' => 'Jl. Mujahidin No.32, Kecamatan Kuta Alam, Lambaro Skep, Banda Aceh, Nanggroe Aceh Darussalam',
                'latlng' => [
                    'lat' => null,
                    'lng' => null
                ],
                'email' => 'mp.pengda.aceh@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '001',
                        'nama' => 'CABANG ACEH TENGGARA',
                        'wilayah' => '11.02',
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
                        'kode' => '002',
                        'nama' => 'CABANG ACEH BESAR',
                        'wilayah' => '11.06',
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
                        'kode' => '003',
                        'nama' => 'CABANG NAGAN RAYA',
                        'wilayah' => '11.15',
                        'alamat_sekretariat' => 'Rameune Sport Jl. Nasional Meulaboh Tapaktuan, Kuala Simpang Peut, Suka Makmue, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.naganraya@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0311',
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
                        'kode' => '004',
                        'nama' => 'CABANG KOTA BANDA ACEH',
                        'wilayah' => '11.71',
                        'alamat_sekretariat' => 'Gelanggang Mahasiswa USK lt.1, Syiah Kuala, Banda Aceh, Darussalam,	Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.kotabandaaceh@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0411',
                                'nama' => 'KOLAT UKM USK',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Universitas, Jalan Syekh Abdul Rauf No.1, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57087030,
                                    'lng' => 95.36698760,
                                ],
                            ],
                            [
                                'kode' => '0412',
                                'nama' => 'KOLAT KEBUGARAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Universitas, Jalan Syekh Abdul Rauf No.1, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57087030,
                                    'lng' => 95.36698760,
                                ],
                            ],
                            [
                                'kode' => '0413',
                                'nama' => 'KOLAT MIRLA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'H9XX+H3G, Miruek Lamreudeup, Baitussalam, Aceh Besar Regency, Aceh 23373, Indonesia',
                                'latlng' => [
                                    'lat' => 5.59894060,
                                    'lng' => 95.39770860,
                                ],
                            ],
                            [
                                'kode' => '0414',
                                'nama' => 'KOLAT SMAN 13',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'H8F7+3C2, Gampong Pande, Kuta Raja, Banda Aceh City, Aceh, Indonesia',
                                'latlng' => [
                                    'lat' => 5.57262520,
                                    'lng' => 95.31351790,
                                ],
                            ],
                            [
                                'kode' => '0415',
                                'nama' => 'KOLAT DARUSSALAM',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'jln kopelma Darussalam Gelanggang Mahasiswa Unsyiah , Syiah Kuala, , kopelma darussalam, Banda Aceh, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0416',
                                'nama' => 'KOLAT KODAM ISKANDAR MUDA (IM)',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Mujahidin No. 32, Kuta Alam, , Lambaro Skep, Banda Aceh, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                        ]
                    ],
                    [
                        'kode' => '005',
                        'nama' => 'CABANG KOTA LHOKSEUMAWE',
                        'wilayah' => '11.73',
                        'alamat_sekretariat' => 'Lr. LHOK PEUNTEUT DUSUN DAMAI PULO KITON, KOTA JUANG, BIREUEN, Nanggroe Aceh Darussalam',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null,
                        ],
                        'email' => 'mp.kotalhokseumawe@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0501',
                                'nama' => 'KOLAT POLITEKNIK LHOKSEUMAWE',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Ruang Serbaguna Politeknik Lhokseumawe, Blang mangat, , Buket Rata, Lhokseumawe, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0502',
                                'nama' => 'KOLAT PIDIE',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'kantor Depak kota sigli, Kota sigli, , Kuala pidie, Sigli, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0503',
                                'nama' => 'KOLAT TAPAKTUAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan Gajah Putih ujung pasir samping kodim 0107 aceh Selatan, Tapaktuan, , Lhok bengkuang timur Tapaktuan , Tapaktuan Aceh Selatan, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0504',
                                'nama' => 'KOLAT SMAN 2 LHOKSEUMAWE',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan stadion Mon geudong, Banda sakti, , Mon geudong, Kota Lhokseumawe, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0505',
                                'nama' => 'KOLAT KABUPATEN BENER MERIAH',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Simpang tiga Redelong, Kecamatan Bukit, , Kampung Babusalam, Kabuoaten Bener Meriah, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0506',
                                'nama' => 'KOLAT ACEH UTARA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Medan - b. Ac\\u00e8h no. 2 bayu, Syamtalira bayu, , -, Ac\\u00e8h utara, Nanggroe Aceh Darussalam',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ],
                            ],
                            [
                                'kode' => '0507',
                                'nama' => 'KOLAT BIREUEN',
                                'wilayah' => null,
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
                        'kode' => '006',
                        'nama' => 'CABANG TAPANULI TENGAH',
                        'wilayah' => '12.01',
                        'alamat_sekretariat' => 'Jl. Batu harimo Sibuluan, Pandan, Tapanuli Tengah, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tapanulitengah@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0601',
                                'nama' => 'KOLAT SMA MATAULI',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Sma matauli pandan, Pandan, , Pandan, Pandan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '0602',
                                'nama' => 'KOLAT TUGU IKAN SIBULUAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Sibuluan Nauli, PANDAN SIBULUAN NAULI, TAPANULI TENGAH, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '0603',
                                'nama' => 'KOLAT BATU HARIMO',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jln. Padangsidimpuan, Lingk.III Batu Harimau PANDAN Sibuluan Indah, TAPANULI TENGAH, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ]
                        ]
                    ],
                    [
                        'kode' => '007',
                        'nama' => 'CABANG TAPANULI UTARA',
                        'wilayah' => '12.02',
                        'alamat_sekretariat' => 'Jl. Dr. Ferdinand Lumbantobing Gang Melati 23, Hutaroruan XI, Tarutung, Tapanuli Utara, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tapanuliutara@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0701',
                                'nama' => 'KOLAT SMAS PGRI SIBORONGBORONG',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Siswa No.15 Siborongborong, Siborongborong, , Siborongborong I, Siborongborong, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '0702',
                                'nama' => 'KOLAT SMAS PGRI 20',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Siswa No. 15 Siborongborong Siborongborong, Kelurahan Pasar Siborongboronh, Tapanuli Utara, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '008',
                        'nama' => 'CABANG TAPANULI SELATAN',
                        'wilayah' => '12.03',
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
                        'kode' => '009',
                        'nama' => 'CABANG LANGKAT',
                        'wilayah' => '12.05',
                        'alamat_sekretariat' => 'Jl. Proklamasi SMAN 1 Stabat Kuala Bingai, Stabat, Langkat, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.langkat@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '0901',
                                'nama' => 'KOLAT BRANDAN CITY',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jln.Tanjung pura Gang Sekolah , Babalan, , Pelawi Utara, PKL.Brandan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '0902',
                                'nama' => 'KOLAT JENTERA HINAI',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl tamatan dsn 1 Desa Batu melenggang Ke. Hinai, Hinai, , Batu melenggang, Tanjung Pura, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '0903',
                                'nama' => 'KOLAT TPI LANGKAT',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Batang serangan, Batang serangan, , Karya jadi, Stabat, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '0904',
                                'nama' => 'KOLAT TPI SAWIT SEBERANG',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jln sempurna no 100 , sawit seberang, Sawit seberang, , Sawit seberang, Medan , Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '010',
                        'nama' => 'CABANG TANAH KARO',
                        'wilayah' => '12.06',
                        'alamat_sekretariat' => 'Jl. Veteran Lorong Serasi no.66, Kel. Gundaling Ii, Berastagi, Karokota Kabanjahe, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.tanahkaro@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '1001',
                                'nama' => 'KOLAT TIGA PANAH',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan besar Tiga panah. Kecamatan tiga panah. Kabupaten karo ( samping bank semut)  Kecamatan tiga panah  Desa tiga panah, Kota kecamatan tiga panah  Sumatera Utara',
                                'latlng' => [
                                    'lat' => 3.0759761,
                                    'lng' => 98.5269474
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '011',
                        'nama' => 'CABANG DELI SERDANG',
                        'wilayah' => '12.07',
                        'alamat_sekretariat' => 'Jl. Psr V Barat LPP Medan Estate Percut Sei Tuan, Deli Serdang, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.deliserdang@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '1101',
                                'nama' => 'KOLAT UNIVERSITAS MEDAN AREA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan Kolam No. 1 (Gedung Stadion Mini Kampus 1 UMA, Lt. 2), Percut Sei Tuan, , Desa Medan Estate, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1102',
                                'nama' => 'KOLAT PANDAWA NEGERI 8',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jln perhubungan desa Seirotan 0, Percut sei tuan, , Desa Seirotan, Deli Serdang, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1103',
                                'nama' => 'KOLAT PANDAWA YPI BATANG KUIS',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl mesjid jamik No 12, Batang Kuis, , Batang kuis, Deli Serdang, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1104',
                                'nama' => 'KOLAT MTS. S. AL-JIHAD MEDAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Bhayangkara gg. Mesjid, Medan Tembung, , Indra Kasih, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1105',
                                'nama' => 'KOLAT SMA TARUNA PBD MEDAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl. Bilal Ujung no. 3, Medan Timur, , Pulo Brayan Darat, Medan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1106',
                                'nama' => 'KOLAT PAB SAMPALI',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan pasar hitam desa sampali, Percut Sei tuan, , Sampali, Sampali, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '012',
                        'nama' => 'CABANG SIMALUNGUN',
                        'wilayah' => '12.08',
                        'alamat_sekretariat' => 'Jl. Asahan KM13 Desa Senio, Gunung Malela, Simalungun, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.simalungun@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '1201',
                                'nama' => 'KOLAT SENIO',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl.asahan km13 desa senio , Gunung malela, , Senio, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '1202',
                                'nama' => 'KOLAT BAH JOGA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl.asahan km13 desa senio , Gunung malela, , Senio, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ],
                            ],
                            [
                                'kode' => '1203',
                                'nama' => 'KOLAT BAH JAMBI',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jl.Besar Madrasah Al ikhlas bah jambi, Jawa maraja bah jambi, , Bah jambi, Simalungun, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '013',
                        'nama' => 'CABANG ASAHAN',
                        'wilayah' => '12.09',
                        'alamat_sekretariat' => 'Jl. Nusa Indah Dusun III, Desa Tanjung Alam, Sei Dadap, Kisaran, Sumatera Utara',
                        'latlng' => [
                            'lat' => null,
                            'lng' => null
                        ],
                        'email' => 'mp.asahan@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '1301',
                                'nama' => 'KOLAT PANTAI NAGA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Jalan Nusa indah, Sei Dadap , , Desa , Tanjung alam, , Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1302',
                                'nama' => 'KOLAT PINANGGRIPAN',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'Pinanggripan dusun 3, Air batu, , Pinanggripan, Asahan, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null
                                ]
                            ],
                            [
                                'kode' => '1303',
                                'nama' => 'KOLAT DIRGA ALAM',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'DUSUN III DESA TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '1304',
                                'nama' => 'KOLAT SD NEGERI',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'JLN NUSA INDAH DUSUN III TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '1305',
                                'nama' => 'KOLAT KEBUGARAN PANTAI NAGA',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'JLN. NUSA INDAH TANJUNG ALAM, SEI DADAP, , DESA TANJUNG ALAM, ASAHAN, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ],
                            [
                                'kode' => '1306',
                                'nama' => 'KOLAT DISDIK',
                                'wilayah' => null,
                                'alamat_sekretariat' => 'JL. Jend. Ahmad Yani Km.1.3 Kisaran, Kota Kisaran Timur, , Kisaran Naga, Kisaran, Sumatera Utara',
                                'latlng' => [
                                    'lat' => null,
                                    'lng' => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '014',
                        'nama' => 'CABANG KOTA MEDAN',
                        'wilayah' => '12.71',
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
                        'kode' => '015',
                        'nama' => 'CABANG KOTA SIBOLGA',
                        'wilayah' => '12.73',
                        "alamat_sekretariat" => "Jl. Balam No. 36 Aek Manis, Sibolga Selatan, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotasibolga@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                "kode" => "1501",
                                "nama" => "KOLAT DARUR RACHMAD",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Aso-Aso No.17\tSIBOLGA SAMBAS\tPancuran Kerambil, SIBOLGA KOTA, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1502",
                                "nama" => "KOLAT SMPN 6 SIBOLGA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. FL Tobing No.10\tSibolga Utara\tHuta Tonga Tonga, SIBOLGA KOTA, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '016',
                        'nama' => 'CABANG KOTA BINJAI',
                        'wilayah' => '12.75',
                        "alamat_sekretariat" => "Jl. Gunung Bendahara no.2 Binjai Estate, Binjai Selatan, Kota Binjai, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotabinjai@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                "kode" => "1601",
                                "nama" => "KOLAT YASPEN DHARMA BAKTI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl.masjid raya\n, Kec.selesai, , Kel.pekan selesai, Selesai, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1602",
                                "nama" => "KOLAT SMAN 1 BINJAI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl.wr mongonsidi no.10, Binjai kota, , Kelurahan satria, Kota Binjai , Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1603",
                                "nama" => "KOLAT SMAN 5 BINJAI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "JL. SAMANHUDI NO.162 , Binjai selatan , , Binjai estate, Kota binjai, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1604",
                                "nama" => "KOLAT SMPN 9 BINJAI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jln.Gunung Bendahara,Puji Dadi,Kec Binjai Selatan.,Kota Binjai Sumatra Utara 20727, Binjai Selatan, , Puji Dadi, Binjai Selatan, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1605",
                                "nama" => "KOLAT SMPN 13 BINJAI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "JL. LETJEND JAMIN GINTING NO. 407, Binjai selatan, , Tanah seribu, BINJAI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '017',
                        'nama' => 'CABANG KOTA GUNUNGSITOLI',
                        'wilayah' => '12.78',
                        "alamat_sekretariat" => "Jl. Ahmad Yani No. 23, Pasar, Gunungsitoli, Sumatera Utara",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.kotagunungsitoli@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "1701",
                                "nama" => "KOLAT UNDREBOLI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "UNDREBOLI, GUNUNGSITOLI, , DESA LELEWENU NIKO'OTANO, GUNUNGSITOLI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1702",
                                "nama" => "KOLAT XAVERIUS",
                                "wilayah" => null,
                                "alamat_sekretariat" => "SMA XAVERIUS, Jl. Nilam No. 7, GUNUNGSITOLI, , ILIR, GUNUNGSITOLI, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1703",
                                "nama" => "KOLAT KELELAWAR",
                                "wilayah" => null,
                                "alamat_sekretariat" => "YAYASAN PERGURUAN PEMBDA NIAS Jl. Pelita No. 9, Gunungsitoli, , Ilir, Gunungsitoli, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1704",
                                "nama" => "KOLAT UNDREBOLI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Fondrako Km. 3,5, Gunungsitoli, , Desa Lelewenu Niko'otano, Gunungsitoli, Sumatera Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1705",
                                "nama" => "KOLAT SMP SWASTA BUNGA MAWAR",
                                "wilayah" => null,
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
                'kode' => '16',
                'nama' => 'PENGDA SUMATERA SELATAN',
                'wilayah' => '16',
                "alamat_sekretariat" => "Kedamaian 2 blok gg no 7, Kalidoni, Bukit Sangkal, Palembang, Sumatera Selatan",
                "latlng" => [
                    "lat" => null,
                    "lng" => null,
                ],
                'email' => 'mp.pengda.sumsel@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '018',
                        'nama' => 'CABANG BANYUASIN',
                        'wilayah' => '16.07',
                        "alamat_sekretariat" => "Jl. Tegal Binangun lr. Dukabangun Rt.008 RW.03 No.384, Plaju Darat, Plaju, Palembang, Sumatera Selatan",
                        "latlng" => [
                            "lat" => null,
                            "lng" => null,
                        ],
                        'email' => 'mp.banyuasin@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "1801",
                                "nama" => "KOLAT TALANG KERAMAT",
                                "wilayah" => null,
                                "alamat_sekretariat" => "jl.kebun jeruk rt 10 RW 04 lr gotong royong 2 no 14 kelurahan talang keramat kecamatan talang kelapa kabupaten Banyuasin, Talang kelapa, , Talang keramat, Banyuasin, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1802",
                                "nama" => "KOLAT TANJUNG LAGO",
                                "wilayah" => null,
                                "alamat_sekretariat" => "JL. Bangun sari No.53, TANJUNG LAGO , , Bangun sari, TANJUNG LAGO , Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1803",
                                "nama" => "KOLAT VILLA BHAYANGKARA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl.keramat panjang RT 50, Talang kelapa, , Talang keramat, Banyuasin, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "1804",
                                "nama" => "KOLAT TEGAL BINANGUN",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jalan tegal binangun lorong suka bangun rt08 rw 03no384., Plaju, , Plaju Darat, Palembang, Sumatera Selatan",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '019',
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
                'kode' => '18',
                'nama' => 'PENGDA LAMPUNG',
                'wilayah' => '18',
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
                'kode' => '31',
                'nama' => 'PENGDA DKI JAKARTA',
                'wilayah' => '31',
                "alamat_sekretariat" => "Komplek Taman Permata Indah 1 Blok PO No. 7A, Penjaringan, Pejagalan, Jakarta Utara, DKI Jakarta",
                "latlng" => [
                    "lat" => -6.14181690,
                    "lng" => 106.78072810,
                ],
                'email' => 'mp.pengda.dkijakarta@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '020',
                        'nama' => 'CABANG JAKARTA PUSAT',
                        'wilayah' => '31.71',
                        "alamat_sekretariat" => "Jl. Rajawali Selatan XIV No. 7, Jakarta Pusat",
                        "latlng" => [
                            "lat" => -6.1865991,
                            "lng" => 106.8359585,
                        ],
                        'email' => 'mp.jakartapusat@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "2001",
                                "nama" => "KOLAT KEMENTERIAN KEUANGAN",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Gedung Sutikno Slamet, Jl. Dr. Wahidin Raya No.1, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710, Indonesia",
                                "latlng" => [
                                    "lat" => -6.172832,
                                    "lng" => 106.838972,
                                ]
                            ],
                            [
                                "kode" => "2002",
                                "nama" => "KOLAT KEMENDIKBUD",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Gedung ItJen Jl Jend Sudirman no. 1",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2003",
                                "nama" => "KOLAT SMKN 1 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Budi Utomo No.7",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2004",
                                "nama" => "KOLAT SMPN 79",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Galindra No.8, RW.8, Kb. Kosong, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10630",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2005",
                                "nama" => "KOLAT TAMANSISWA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Garuda No 25",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2006",
                                "nama" => "KOLAT SMKN 21 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl kemayoran gempol",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2007",
                                "nama" => "KOLAT BPJS",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Plasa Jamsostek",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2008",
                                "nama" => "KOLAT SMPN 4",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Perwira no. 10",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2009",
                                "nama" => "KOLAT RPTRA KEJORA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Taman Pembangunan 2 Rt9 RW2",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2010",
                                "nama" => "KOLAT SMP 100",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Smp 122",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2011",
                                "nama" => "KOLAT AL KHAIRIYAH",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Mampang Prapatan IV No.74, RT.10RW.2",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2012",
                                "nama" => "KOLAT SMPN 39 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl gajah mada 3-5",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2013",
                                "nama" => "KOLAT SMPN 22 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "2, Jl. Jemb. Batu No.74, RT.2RW.5, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1383714,
                                    "lng" => 106.8160685,
                                ]
                            ],
                            [
                                "kode" => "2014",
                                "nama" => "KOLAT KAMPUNG JAWA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "JALAN KAMPUNG JAWA KEBON SAYUR",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2015",
                                "nama" => "KOLAT MTSN 1 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "6, Jl. Bangka IX B No.26, RT.12RW.10, Pela Mampang, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12720, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2538029,
                                    "lng" => 106.8221523,
                                ]
                            ],
                            [
                                "kode" => "2016",
                                "nama" => "KOLAT SMAN 25 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jalan A.M Sangaji No. 22-24 Petojo Utara Gambir RT.2RW.5 2 5, RT.2RW.5, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1676321,
                                    "lng" => 106.8135251,
                                ]
                            ],
                            [
                                "kode" => "2017",
                                "nama" => "KOLAT RSCM",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Pangeran Diponegoro No.71, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1965079,
                                    "lng" => 106.8471194,
                                ]
                            ],
                            [
                                "kode" => "2018",
                                "nama" => "KOLAT UNIVERSITAS INDONESIA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Pondok Cina, Beji, Depok City, West Java 16424, Indonesia",
                                "latlng" => [
                                    "lat" => -6.3606229,
                                    "lng" => 106.8272343,
                                ]
                            ],
                            [
                                "kode" => "2019",
                                "nama" => "KOLAT KARTINI",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Kalibaru Timur V No.1, RT.1RW.9, Utan Panjang, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1682528,
                                    "lng" => 106.8492936,
                                ]
                            ],
                            [
                                "kode" => "2020",
                                "nama" => "KOLAT SMA 4",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Batu III No.3, RT.7RW.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1787063,
                                    "lng" => 106.8354983,
                                ]
                            ],
                            [
                                "kode" => "2021",
                                "nama" => "KOLAT SMK JP 01",
                                "wilayah" => null,
                                "alamat_sekretariat" => "1, Jl. Abdul Muis No.44, RT.1RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1755573,
                                    "lng" => 106.8201441,
                                ]
                            ],
                            [
                                "kode" => "2022",
                                "nama" => "KOLAT SMPN 47",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Rawasari Timur Dalam No.6, RT.16RW.2, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1830273,
                                    "lng" => 106.8721153,
                                ]
                            ],
                            [
                                "kode" => "2023",
                                "nama" => "KOLAT SMPN 201 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl.Kayu Besar Dalam 2 RT 02RW.11 CENGKARENG \tCengkareng Kapuk, Jakarta Barat, DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2024",
                                "nama" => "KOLAT SMP HARAPAN JAYA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jalan Daan Mogot KM 13 JLN PELITA C4 No.7\tCENGKARENG TIMUR \tCengkareng , Jakarta Barat, DKI Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '021',
                        'nama' => 'CABANG JAKARTA UTARA',
                        'wilayah' => '31.72',
                        "alamat_sekretariat" => "SMP Negeri 261 Jakarta Jl Muara Angke RT 009021, PENJARINGAN\tPLUIT, JAKARTA UTARA, DKI Jakarta",
                        "latlng" => [
                            "lat" => -6.1093573,
                            "lng" => 106.7700947,
                        ],
                        'email' => 'mp.jakartautara@merpatiputih.id',
                        'password' => '12345678',
                        "kolat" => [
                            [
                                "kode" => "2101",
                                "nama" => "KOLAT SDN PLUIT 03",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jalan Komplek Nelayan, RT.11RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2102",
                                "nama" => "KOLAT SDN PLUIT 03",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jalan Komplek Nelayan, RT.11RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2103",
                                "nama" => "KOLAT SDN PLUIT 01",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Pluit Selatan I No.1, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2104",
                                "nama" => "KOLAT SMAN 40",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Budi Mulia no. 8a",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2105",
                                "nama" => "KOLAT SMK REMAJA PLUIT",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Pluit Selatan I No.1, RT.1RW.6, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2106",
                                "nama" => "KOLAT BIRO KLASIFIKASI INDONESIA ( BKI )",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl.Yos Sudarso no.38 -40 Priok Jakarta Utara",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2107",
                                "nama" => "KOLAT M.O.M (Master of the Master)",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Komplek Taman Permata indah 1 blok PO no 7a",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2108",
                                "nama" => "KOLAT SMPN 287 JAKARTA TIMUR",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Sarbini 1",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2109",
                                "nama" => "KOLAT SMPN 42 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Raya 004 002, Jl. Pademangan III No.2, RT.2RW.2, Pademangan Tim., Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14410, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1363599,
                                    "lng" => 106.8431803,
                                ]
                            ],
                            [
                                "kode" => "2110",
                                "nama" => "KOLAT SMPN 275 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Jengki Cipinang Asem No.41, RT.9RW.9, Kb. Pala, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13650, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2596684,
                                    "lng" => 106.8773676,
                                ]
                            ],
                            [
                                "kode" => "2111",
                                "nama" => "KOLAT SDN 03 PENJARINGAN",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Pluit Selatan Raya No.105, RT.16RW.17, Penjaringan, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14440, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1248024,
                                    "lng" => 106.8027555,
                                ]
                            ],
                            [
                                "kode" => "2112",
                                "nama" => "KOLAT MP HUTAMA KARYA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "HK Tower, Jl. Letjen M.T. Haryono No.Kav. 8, RT.12RW.11, Cawang, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13340, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2454771,
                                    "lng" => 106.8732563,
                                ]
                            ],
                            [
                                "kode" => "2113",
                                "nama" => "KOLAT SMPN 244 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Bakti VI No.28, RT.4RW.9, Cilincing, Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1101572,
                                    "lng" => 106.9380925,
                                ]
                            ],
                            [
                                "kode" => "2114",
                                "nama" => "KOLAT PLUIT",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl pluit sakti no.35  ruko sentra bisnis pluit",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ],
                            [
                                "kode" => "2115",
                                "nama" => "KOLAT SMPN 261 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "11, Jl. Muara Angke No.9, RT.11RW.21, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1092813,
                                    "lng" => 106.7706997,
                                ]
                            ],
                            [
                                "kode" => "2116",
                                "nama" => "KOLAT SMPN 21 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "13, Jl. Bandengan Utara Raya No.80, RT.9RW.16, Penjaringan, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14440, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1331778,
                                    "lng" => 106.7963156,
                                ]
                            ],
                            [
                                "kode" => "2117",
                                "nama" => "KOLAT SDN CILINCING 02",
                                "wilayah" => null,
                                "alamat_sekretariat" => "12, Jl. Cilincing Bakti No.21, RT.4RW.9, Cilincing, Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.108924,
                                    "lng" => 106.9386764,
                                ]
                            ],
                            [
                                "kode" => "2118",
                                "nama" => "KOLAT SMPN 34 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "VR9W+H52, Jl. Pademangan IV, RT.4RW.10, Pademangan Tim., Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14410, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1311091,
                                    "lng" => 106.8453774,
                                ]
                            ],
                            [
                                "kode" => "2119",
                                "nama" => "KOLAT SMPN 29",
                                "wilayah" => null,
                                "alamat_sekretariat" => "13, Jl. Bumi E No.21, RT.13RW.2, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120, Indonesia",
                                "latlng" => [
                                    "lat" => -6.2405884,
                                    "lng" => 106.7896333,
                                ]
                            ],
                            [
                                "kode" => "2120",
                                "nama" => "KOLAT SMPN 122 JAKARTA UTARA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "1, Jl. SMPN 122 No.3, RT.1RW.3, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1384789,
                                    "lng" => 106.7633517,
                                ]
                            ],
                            [
                                "kode" => "2121",
                                "nama" => "KOLAT RPTRA SUNGAI BAMBU",
                                "wilayah" => null,
                                "alamat_sekretariat" => "10, Jl. Jati Raya, RT.10RW.6, Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14330, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1303164,
                                    "lng" => 106.8907977,
                                ]
                            ],
                            [
                                "kode" => "2122",
                                "nama" => "KOLAT SMPN 82 JAKARTA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "RQRF+MCV, Jl. Raya Daan Mogot, RT.6RW.4, Jelambar, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460, Indonesia",
                                "latlng" => [
                                    "lat" => -6.1582628,
                                    "lng" => 106.7735458,
                                ]
                            ],
                            [
                                "kode" => "2123",
                                "nama" => "KOLAT SMKN 56 JAKARTA UTARA",
                                "wilayah" => null,
                                "alamat_sekretariat" => "Jl. Pluit Timur Raya No.1, RT.10RW.9, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450\n2,7 km",
                                "latlng" => [
                                    "lat" => null,
                                    "lng" => null,
                                ]
                            ]
                        ]
                    ],
                    [
                        'kode' => '022',
                        'nama' => 'CABANG JAKARTA BARAT',
                        'wilayah' => '31.73',
                        'email' => 'mp.jakartabarat@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '023',
                        'nama' => 'CABANG JAKARTA SELATAN',
                        'wilayah' => '31.74',
                        'email' => 'mp.jakartaselatan@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '024',
                        'nama' => 'CABANG JAKARTA TIMUR',
                        'wilayah' => '31.75',
                        'email' => 'mp.jakartatimur@merpatiputih.id',
                        'password' => '12345678',
                    ]
                ]
            ],
            [
                'kode' => '32',
                'nama' => 'PENGDA JAWA BARAT',
                'wilayah' => '32',
                'email' => 'mp.pengda.jabar@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '025',
                        'nama' => 'CABANG BOGOR',
                        'wilayah' => '32.01',
                        'email' => 'mp.bogor@merpatiputih.id',
                        'password' => '12345678'
                    ],
                    [
                        'kode' => '026',
                        'nama' => 'CABANG SUKABUMI',
                        'wilayah' => '32.02',
                        'email' => 'mp.sukabumi@merpatiputih.id',
                        'password' => '12345678'
                    ],
                    [
                        'kode' => '027',
                        'nama' => 'CABANG BANDUNG',
                        'wilayah' => '32.04',
                        'email' => 'mp.bandung@merpatiputih.id',
                        'password' => '12345678'
                    ],
                    [
                        'kode' => '028',
                        'nama' => 'CABANG KUNINGAN',
                        'wilayah' => '32.08',
                        'email' => 'mp.kuningan@merpatiputih.id',
                        'password' => '12345678'
                    ],
                    [
                        'kode' => '029',
                        'nama' => 'CABANG CIREBON',
                        'wilayah' => '32.09',
                        'email' => 'mp.cirebon@merpatiputih.id',
                        'password' => '12345678'
                    ],
                    [
                        'kode' => '030',
                        'nama' => 'CABANG MAJALENGKA',
                        'wilayah' => '32.10',
                        'email' => 'mp.majalengka@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '031',
                        'nama' => 'CABANG SUMEDANG',
                        'wilayah' => '32.11',
                        'email' => 'mp.sumedang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '032',
                        'nama' => 'CABANG INDRAMAYU',
                        'wilayah' => '32.12',
                        'email' => 'mp.indramayu@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '033',
                        'nama' => 'CABANG SUBANG',
                        'wilayah' => '32.13',
                        'email' => 'mp.subang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '034',
                        'nama' => 'CABANG PURWAKARTA',
                        'wilayah' => '32.14',
                        'email' => 'mp.purwakarta@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '035',
                        'nama' => 'CABANG KARAWANG',
                        'wilayah' => '32.15',
                        'email' => 'mp.karawang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '036',
                        'nama' => 'CABANG BEKASI',
                        'wilayah' => '32.16',
                        'email' => 'mp.bekasi@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '037',
                        'nama' => 'CABANG BANDUNG BARAT',
                        'wilayah' => '32.17',
                        'email' => 'mp.bandungbarat@merpatiputih.id',
                        'password' => '12345678',
                    ],

                    [
                        'kode' => '038',
                        'nama' => 'CABANG KOTA BOGOR',
                        'wilayah' => '32.71',
                        'email' => 'mp.kotabogor@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '039',
                        'nama' => 'CABANG KOTA BANDUNG',
                        'wilayah' => '32.73',
                        'email' => 'mp.kotabandung@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '040',
                        'nama' => 'CABANG KOTA BEKASI',
                        'wilayah' => '32.75',
                        'email' => 'mp.kotabekasi@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '041',
                        'nama' => 'CABANG KOTA DEPOK',
                        'wilayah' => '32.76',
                        'email' => 'mp.kotadepok@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '042',
                        'nama' => 'CABANG KOTA CIMAHI',
                        'wilayah' => '32.77',
                        'email' => 'mp.kotacimahi@merpatiputih.id',
                        'password' => '12345678',
                    ]
                ]
            ],
            [
                'kode' => '33',
                'nama' => 'PENGDA JAWA TENGAH',
                'wilayah' => '33',
                'email' => 'mp.pengda.jateng@merpatiputih.id',
                'password' => '12345678',
                'cabang' => [
                    [
                        'kode' => '043',
                        'nama' => 'CABANG CILACAP',
                        'wilayah' => '33.01',
                        'email' => 'mp.cilacap@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '044',
                        'nama' => 'CABANG BANYUMAS',
                        'wilayah' => '33.02',
                        'email' => 'mp.banyumas@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '045',
                        'nama' => 'CABANG PURBALINGGA',
                        'wilayah' => '33.03',
                        'email' => 'mp.purbalingga@merpatiputih.id',
                        'password' => '12345678',
                        'kolat' => [
                            [
                                'kode' => '4501',
                                'nama' => 'SMA NEGERI 1 BOBOTSARI',
                                'wilayah' => '33.03.09',
                            ],
                            [
                                'kode' => "4502",
                                'nama' => 'SMA NEGERI 1 PURBALINGGA',
                                'wilayah' => '33.03.05',
                            ],
                        ]
                    ],
                    [
                        'kode' => '046',
                        'nama' => 'CABANG BANJARNEGARA',
                        'wilayah' => '33.04',
                        'email' => 'mp.banjarnegara@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '047',
                        'nama' => 'CABANG KEBUMEN',
                        'wilayah' => '33.05',
                        'email' => 'mp.kebumen@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '048',
                        'nama' => 'CABANG PURWOREJO',
                        'wilayah' => '33.06',
                        'email' => 'mp.purworejo@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '049',
                        'nama' => 'CABANG WONOSOBO',
                        'wilayah' => '33.07',
                        'email' => 'mp.wonosobo@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '050',
                        'nama' => 'CABANG MAGELANG',
                        'wilayah' => '33.08',
                        'email' => 'mp.magelang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '051',
                        'nama' => 'CABANG KLATEN',
                        'wilayah' => '33.10',
                        'email' => 'mp.klaten@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '052',
                        'nama' => 'CABANG KARTASURA',
                        'wilayah' => '33.11',
                        'email' => 'mp.kartasura@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '053',
                        'nama' => 'CABANG WONOGIRI',
                        'wilayah' => '33.12',
                        'email' => 'mp.wonogiri@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '054',
                        'nama' => 'CABANG BLORA',
                        'wilayah' => '33.16',
                        'email' => 'mp.blora@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '055',
                        'nama' => 'CABANG SEMARANG',
                        'wilayah' => '33.22',
                        'email' => 'mp.semarang@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '056',
                        'nama' => 'CABANG TEMANGGUNG',
                        'wilayah' => '33.23',
                        'email' => 'mp.temanggung@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '057',
                        'nama' => 'CABANG PEKALONGAN',
                        'wilayah' => '33.26',
                        'email' => 'mp.pekalongan@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '058',
                        'nama' => 'CABANG TEGAL',
                        'wilayah' => '33.28',
                        'email' => 'mp.tegal@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '059',
                        'nama' => 'CABANG BREBES',
                        'wilayah' => '33.29',
                        'email' => 'mp.brebes@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '060',
                        'nama' => 'CABANG KOTA SURAKARTA',
                        'wilayah' => '33.72',
                        'email' => 'mp.kotasurakarta@merpatiputih.id',
                        'password' => '12345678',
                    ],
                    [
                        'kode' => '061',
                        'nama' => 'CABANG KOTA SEMARANG',
                        'wilayah' => '33.74',
                        'email' => 'mp.kotasemarang@merpatiputih.id',
                        'password' => '12345678',
                    ]
                ]
            ],
            [
                'kode' => '34',
                'nama' => 'PENGDA DI YOGYAKARTA',
                'wilayah' => '34',
                'email' => 'mp.pengda.diy@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '35',
                'nama' => 'PENGDA JAWA TIMUR',
                'wilayah' => '35',
                'email' => 'mp.pengda.jatim@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '36',
                'nama' => 'PENGDA BANTEN',
                'wilayah' => '36',
                'email' => 'mp.pengda.banten@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '51',
                'nama' => 'PENGDA BALI',
                'wilayah' => '51',
                'email' => 'mp.pengda.bali@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '52',
                'nama' => 'PENGDA NUSA TENGGARA BARAT',
                'wilayah' => '52',
                'email' => 'mp.pengda.ntb@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '64',
                'nama' => 'PENGDA KALIMANTAN TIMUR',
                'wilayah' => '64',
                'email' => 'mp.pengda.ntt@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '00',
                'nama' => 'PENGDA NON PENGDA',
                'wilayah' => '00',
                'email' => 'mp.nonpengda@merpatiputih.id',
                'password' => '12345678',
            ],
            [
                'kode' => '01',
                'nama' => 'PENGDA CABANG KHUSUS',
                'wilayah' => '99',
                'email' => 'mp.cabsus@merpatiputih.id',
                'password' => '12345678',
            ],
        ];

        foreach($data as $item) {
            $pengda = MDaerah::create([
                'kode' => $item['kode'],
                'nama' => $item['nama'],
                'email' => $item['email'],
                'password' => $item['password'],
            ]);

            if (isset($item['cabang'])) {
                foreach ($item['cabang'] as $cabang) {
                    $pengcab = MCabang::create([
                        'daerah_id' => $pengda->id,
                        'kode' => $cabang['kode'],
                        'nama' => $cabang['nama'],
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
                            ]);
                        }
                    }
                }
            }
        }
    }
}
