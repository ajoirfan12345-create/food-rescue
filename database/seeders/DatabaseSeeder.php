<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat akun Admin awal
        $admin = Admin::create([
            'username_admin' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        // 2. Buat beberapa Kategori Food Rescue
        $roti = Kategori::create(['nama_kategori' => 'Roti & Kue']);
        $makananBerat = Kategori::create(['nama_kategori' => 'Makanan Berat']);
        $minuman = Kategori::create(['nama_kategori' => 'Minuman']);

        // 3. Buat contoh Produk
        Produk::create([
            'id_admin' => $admin->id_admin,
            'id_kategori' => $roti->id_kategori,
            'nama_produk' => 'Paket Roti Croissant & Donat',
            'deskripsi' => 'Paket hemat roti produksi hari ini, kondisi masih sangat layak konsumsi. Ambil sendiri di toko.',
            'harga' => 15000,
            'stok' => 5,
            'gambar' => 'roti-paket.jpg',
            'link_eksternal' => 'https://play.google.com/store',
        ]);

        Produk::create([
            'id_admin' => $admin->id_admin,
            'id_kategori' => $makananBerat->id_kategori,
            'nama_produk' => 'Nasi Box Ayam Bakar',
            'deskripsi' => 'Sisa katering harian belum tersentuh, kemasan rapi. Pembayaran tunai di lokasi pickup.',
            'harga' => 12000,
            'stok' => 8,
            'gambar' => 'nasi-ayam.jpg',
            'link_eksternal' => 'https://play.google.com/store',
        ]);
    }
}