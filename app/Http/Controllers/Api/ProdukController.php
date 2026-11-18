<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // 1. READ: Ambil semua produk
    public function index()
    {
        $produks = Produk::with(['kategori', 'admin'])->latest()->get();

        return response()->json([
            'status' => 'success',
            'data'   => $produks
        ], 200);
    }

    // 2. CREATE: Tambah produk baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_admin'       => 'required|exists:admins,id_admin',
            'id_kategori'    => 'required|exists:kategoris,id_kategori',
            'nama_produk'    => 'required|string|max:100',
            'deskripsi'      => 'nullable|string',
            'harga'          => 'required|numeric',
            'stok'           => 'required|integer',
            'gambar'         => 'nullable|string|max:255',
            'link_eksternal' => 'nullable|string|max:255',
        ]);

        $produk = Produk::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Produk berhasil disimpan ke database',
            'data'    => $produk
        ], 201);
    }

    // 3. READ DETAIL: Ambil 1 produk
    public function show($id)
    {
        $produk = Produk::with(['kategori', 'admin'])->find($id);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return response()->json(['status' => 'success', 'data' => $produk], 200);
    }

    // 4. UPDATE: Ubah data produk (misal ubah stok atau harga)
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $produk->update($request->all());

        return response()->json([
            'status'  => 'success',
            'message' => 'Data produk berhasil diperbarui',
            'data'    => $produk
        ], 200);
    }

    // 5. DELETE: Hapus produk dari database
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $produk->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Produk berhasil dihapus dari database'
        ], 200);
    }
}