<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $products = [
            ['kode' => 'P001', 'nama' => 'Pulpen Snowman', 'harga' => 3000, 'stock' => 50],
            ['kode' => 'P002', 'nama' => 'Pensil 2B', 'harga' => 2000, 'stock' => 100],
            ['kode' => 'P003', 'nama' => 'Buku Tulis 40 Lbr', 'harga' => 5000, 'stock' => 75],
            ['kode' => 'P004', 'nama' => 'Penghapus Joyko', 'harga' => 1500, 'stock' => 60],
            ['kode' => 'P005', 'nama' => 'Rautan Pensil', 'harga' => 2500, 'stock' => 40],
            ['kode' => 'P006', 'nama' => 'Penggaris 30cm', 'harga' => 3000, 'stock' => 55],
            ['kode' => 'P007', 'nama' => 'Spidol Warna', 'harga' => 8000, 'stock' => 30],
            ['kode' => 'P008', 'nama' => 'Sticky Notes', 'harga' => 4000, 'stock' => 45],
            ['kode' => 'P009', 'nama' => 'Binder A5', 'harga' => 15000, 'stock' => 25],
            ['kode' => 'P010', 'nama' => 'Kertas Origami', 'harga' => 6000, 'stock' => 80],
            ['kode' => 'P011', 'nama' => 'Tip-Ex Cair', 'harga' => 7000, 'stock' => 35],
            ['kode' => 'P012', 'nama' => 'Map Plastik', 'harga' => 3000, 'stock' => 90],
            ['kode' => 'P013', 'nama' => 'Notebook Spiral', 'harga' => 12000, 'stock' => 20],
            ['kode' => 'P014', 'nama' => 'Double Tape', 'harga' => 4500, 'stock' => 60],
            ['kode' => 'P015', 'nama' => 'Selotip Bening', 'harga' => 3500, 'stock' => 70],
            ['kode' => 'P016', 'nama' => 'Kertas A4 70gsm', 'harga' => 35000, 'stock' => 15],
            ['kode' => 'P017', 'nama' => 'Amplop Coklat', 'harga' => 2000, 'stock' => 40],
            ['kode' => 'P018', 'nama' => 'Clip Kertas', 'harga' => 1500, 'stock' => 100],
            ['kode' => 'P019', 'nama' => 'Stabilo Warna', 'harga' => 9000, 'stock' => 50],
            ['kode' => 'P020', 'nama' => 'Lakban Hitam', 'harga' => 5000, 'stock' => 30],
        ];
        foreach ($products as $item) {
            Product::create($item);
                }
            }
        }