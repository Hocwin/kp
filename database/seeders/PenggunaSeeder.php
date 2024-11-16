<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna = [
            [
                'idPengguna' => '1',
                'namaPengguna' => 'Rayy',
                'emailPengguna' => 'rayy@gmail.com',
                'password' => Hash::make('123456'),
                'alamatPengguna' => 'Jalan Bunga 123',
                'nomorTelepon' => '08123456789',
                'is_admin' => true,
            ],  [
                'idPengguna' => '2',
                'namaPengguna' => 'Hocwin',
                'emailPengguna' => 'hocwin@gmail.com',
                'password' => Hash::make('123456'),
                'alamatPengguna' => 'Jalan Bunga 123',
                'nomorTelepon' => '08123456789',
                'is_admin' => false,
            ]
        ];

        foreach ($pengguna as $key => $value){
            Pengguna::create($value);
        }
    }
}
