<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            "hargaJual" => "150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"baju kaos",
            "kd_barang"=>"B0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"baju kaos",
            "kd_barang"=>"B0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"celana pendek",
            "kd_barang"=>"C0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"celana panjang",
            "kd_barang"=>"C0002",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"rok pendek",
            "kd_barang"=>"R0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"rok panjang",
            "kd_barang"=>"R0002",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"100000",
            "hargaBeli"=>"90000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"outer",
            "kd_barang"=>"O0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"900000",
            "hargaBeli"=>"800000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"boots",
            "kd_barang"=>"BO001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"150000",
            "hargaBeli"=>"140000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"kemeja",
            "kd_barang"=>"K0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"88000",
            "hargaBeli"=>"77000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"mantel",
            "kd_barang"=>"M0001",
        ]);
        DB::table('barangs')->insert([
            "hargaJual"=>"125000",
            "hargaBeli"=>"115000",
            "stok"=>"20",
            "status"=>"tersedia",
            "nama_barang"=>"sepatu",
            "kd_barang"=>"S0001",
        ]);
        //
    }
}
