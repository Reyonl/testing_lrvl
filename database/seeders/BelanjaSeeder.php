<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BelanjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            DB::table('belanja')->insert([
                [
                    'kode_barang' => 'LCDOP_A1K',
                    'nama_sparepart' => 'LCD OPPO A1K(CPH1923)/ REALMI C2(RMX1941)',
                    'modal' => 250000,
                    'harga_jual' => 350000,
                    'stok_awal' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A3S',
                    'nama_sparepart' => 'LCD OPPO A3S/ REALME C1/ REALME 2',
                    'modal' => 240000,
                    'harga_jual' => 340000,
                    'stok_awal' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A5_2020',
                    'nama_sparepart' => 'LCD OPPO A5 2020/ A9 2020/ A31/ REALME 5/ 5I/ C3',
                    'modal' => 280000,
                    'harga_jual' => 400000,
                    'stok_awal' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A5S',
                    'nama_sparepart' => 'LCD OPPO A5S/ A7/ A11K/ A12',
                    'modal' => 260000,
                    'harga_jual' => 360000,
                    'stok_awal' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A16',
                    'nama_sparepart' => 'LCD OPPO A16/C25/NARZO 50A CROWN',
                    'modal' => 270000,
                    'harga_jual' => 380000,
                    'stok_awal' => 18,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A17',
                    'nama_sparepart' => 'LCD OPPO A17/ A57 2022/ A17K/ A77S/ A77 5G/ CPH2387',
                    'modal' => 290000,
                    'harga_jual' => 420000,
                    'stok_awal' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A33_W',
                    'nama_sparepart' => 'LCD OPPO A33W/ NEO 7',
                    'modal' => 230000,
                    'harga_jual' => 330000,
                    'stok_awal' => 14,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A37',
                    'nama_sparepart' => 'LCD OPPO A37/ NEO 9 INCELL BLACK',
                    'modal' => 250000,
                    'harga_jual' => 350000,
                    'stok_awal' => 16,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A39',
                    'nama_sparepart' => 'LCD OPPO A39/ NEO11 INCELL BLACK/WHITE',
                    'modal' => 260000,
                    'harga_jual' => 360000,
                    'stok_awal' => 13,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'LCDOP_A53_2020',
                    'nama_sparepart' => 'LCD OPPO A53 2020/ C17/ 7i',
                    'modal' => 270000,
                    'harga_jual' => 370000,
                    'stok_awal' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],


        ]);
    }
}
