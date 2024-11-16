<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                'idBarang' => '1',
                'namaBarang' => 'Semen Baturaja',
                'hargaBarangCash' => 62000,
                'hargaBarangTempo' => 63000
            ], [
                'idBarang' => '2',
                'namaBarang' => 'Semen Dynamix',
                'hargaBarangCash' => 58000,
                'hargaBarangTempo' => 59000
            ], [
                'idBarang' => '3',
                'namaBarang' => 'Semen Merdeka',
                'hargaBarangCash' => 54000,
                'hargaBarangTempo' => 55000
            ]
            ];

            foreach ($barang as $key => $value){
                Barang::create($value);
            }
    }
}
