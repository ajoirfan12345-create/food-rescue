<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;

class KategoriController extends Controller
{
    // Mengambil semua daftar kategori
    public function index()
    {
        $kategoris = Kategori::all();

        return response()->json([
            'status' => 'success',
            'data'   => $kategoris
        ], 200);
    }

    // Mengambil 1 kategori beserta daftar produk di dalamnya
    public function show($id)
    {
        $kategori = Kategori::with('produks')->find($id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data'   => $kategori
        ], 200);
    }
}