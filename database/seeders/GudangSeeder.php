<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gudang;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gudang = [
            [
                'idGudang' => '1',
                'namaGudang' => 'Gudang TAA',
                'lokasi' => 'Jl. xxx'
            ],  [
                'idGudang' => '2',
                'namaGudang' => 'Gudang KM12',
                'lokasi' => 'Jl. xxx'
            ],
            [
                'idGudang' => '3',
                'namaGudang' => 'Gudang Kenten',
                'lokasi' => 'Jl. xxx'
            ],
            [
                'idGudang' => '4',
                'namaGudang' => 'Gudang Perintis',
                'lokasi' => 'Jl. xxx'
            ]
            ];

            foreach ($gudang as $key => $value){
                Gudang::create($value);
            }
    }
}
