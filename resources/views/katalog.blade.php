@extends('layout')

@section('title', 'Katalog Pakan Surplus - FoodRescue')

@section('content')
@php
    $products = [
        [
            'nama' => 'Wortel',
            'kategori' => 'Sayur & Buah',
            'sisa' => 'Sisa 5 kg',
            'lokasi' => 'Warung Mbah Pijan',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 18:00',
            'gambar' => 'wortel.jpg'
        ],
        [
            'nama' => 'Sawi Putih Layu',
            'kategori' => 'Sayur & Buah',
            'sisa' => 'Sisa 5 kg',
            'lokasi' => 'Warung Mbah Pijan',
            'harga' => 'Rp1.500',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 18:00',
            'gambar' => 'sawi.jpg'
        ],
        [
            'nama' => 'Kangkung Layu',
            'kategori' => 'Sayur & Buah',
            'sisa' => 'Sisa 4 kg',
            'lokasi' => 'Warung Santi',
            'harga' => 'Rp1.500',
            'satuan' => '',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 17:30',
            'gambar' => 'kangkung.jpg'
        ],
        [
            'nama' => 'Pepaya',
            'kategori' => 'Sayur & Buah',
            'sisa' => 'Sisa 10 kg',
            'lokasi' => 'Toko Buah Akbar',
            'harga' => 'Rp3.000',
            'satuan' => '/kg',
            'harga_coret' => 'Rp5.000',
            'batas' => 'Ambil s/d 22:00',
            'gambar' => 'pepaya.jpg'
        ],
        [
            'nama' => 'Ampas Tahu Segar',
            'kategori' => 'Ampas & HO',
            'sisa' => 'Sisa 15 kg',
            'lokasi' => 'Kedai Tahu Yunita',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 16:00',
            'gambar' => 'ampas-tahu.jpg'
        ],
        [
            'nama' => 'Nasi Brsih Blm',
            'kategori' => 'Nasi & Sisa Dapur',
            'sisa' => 'Sisa 8 kg',
            'lokasi' => 'Warung Pojok Cak Lontong',
            'harga' => 'Rp2.500',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 15:30',
            'gambar' => 'nasi.jpg'
        ],
        [
            'nama' => 'Potongan Sayur Dapur',
            'kategori' => 'Nasi & Sisa Dapur',
            'sisa' => 'Sisa 6 kg',
            'lokasi' => 'Resto Warung Padang',
            'harga' => 'Rp1.000',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 19:30',
            'gambar' => 'potongan-sayur.jpg'
        ],
        [
            'nama' => 'Roti Sisa',
            'kategori' => 'Roti & Bakery',
            'sisa' => 'Sisa 4 kg',
            'lokasi' => 'Hollan Bakery',
            'harga' => 'Rp3.000',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 20:00',
            'gambar' => 'roti.jpg'
        ],
        [
            'nama' => 'Dedak Padu',
            'kategori' => 'Ampas & HO',
            'sisa' => 'Sisa 1 kg',
            'lokasi' => 'Daily Bread Cilandak',
            'harga' => 'Rp1.000',
            'satuan' => '/kg',
            'harga_coret' => '',
            'batas' => 'Ambil s/d 21:00',
            'gambar' => 'dedak.jpg'
        ],
        [
            'nama' => 'Pepaya Mentah Afkir',
            'kategori' => 'Sayur & Buah Afkir',
            'sisa' => 'Sisa 4 kg',
            'lokasi' => 'Ladang Amir',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'harga_coret' => 'Rp4.000',
            'batas' => 'Ambil s/d 20:00',
            'gambar' => 'pepaya-mentah.jpg'
        ],
    ];
@endphp

<section class="katalog-section">
    <div class="container">
        
        <!-- Breadcrumb -->
        <div class="katalog-breadcrumb">
            <a href="{{ url('/') }}">🏠 Beranda</a>
            <span>›</span>
            <span class="current">Katalog Pakan</span>
        </div>

        <!-- Header & Urutkan -->
        <div class="katalog-header">
            <div>
                <h1 class="katalog-title">Katalog Pakan Surplus</h1>
                <p class="katalog-subtitle">Menampilkan <strong>1-10</strong> dari <strong>100</strong> produk pakan ternak</p>
            </div>
            <div class="katalog-sort">
                <span>⇅ Urutkan:</span>
                <select class="sort-select">
                    <option>Terbaru Diunggah</option>
                    <option>Harga Terendah</option>
                    <option>Jarak Terdekat</option>
                </select>
            </div>
        </div>

        <!-- Filter Aktif Bar -->
        <div class="active-filter-bar">
            <div class="active-filter-tags">
                <span class="filter-label">FILTER AKTIF:</span>
                <span class="filter-chip">Sayur &amp; Buah <button type="button">×</button></span>
                <span class="filter-chip">Radius 5 km <button type="button">×</button></span>
            </div>
            <button type="button" class="clear-filter-btn">🗑 Hapus Semua Filter</button>
        </div>

        <!-- Layout Grid: Sidebar Kiri + Produk Kanan -->
        <div class="katalog-layout">
            
            <!-- SIDEBAR FILTER -->
            <aside class="katalog-sidebar">
                <div class="sidebar-head">
                    <div>
                        <h3>Filter Pakan &amp; Radius</h3>
                        <p>Sesuaikan pencarian dengan kebutuhan ternak Anda</p>
                    </div>
                    <button type="button" class="reset-link">Reset</button>
                </div>

                <!-- Kategori Pakan -->
                <div class="filter-group">
                    <div class="filter-group-title">
                        <span>❖ Kategori Pakan</span>
                        <span class="badge-count">1 Dipilih</span>
                    </div>
                    <div class="pill-group">
                        <button type="button" class="pill">Ampas Tahu</button>
                        <button type="button" class="pill active">✓ Sayur &amp; Buah</button>
                        <button type="button" class="pill">Roti Kering</button>
                        <button type="button" class="pill">Nasi &amp; Dapur</button>
                        <button type="button" class="pill">Ampas Kelapa</button>
                    </div>
                </div>

                <!-- Radius Jarak -->
                <div class="filter-group">
                    <div class="filter-group-title">
                        <span>◎ Radius Jarak Maksimal</span>
                    </div>
                    <p class="filter-helper">Maksimal 5 km dari lokasi Anda (Bandar Lampung)</p>
                    <div class="pill-grid-3">
                        <button type="button" class="pill">&lt; 2 km</button>
                        <button type="button" class="pill active">✓ 5 km</button>
                        <button type="button" class="pill">10 km</button>
                        <button type="button" class="pill">15 km</button>
                        <button type="button" class="pill">&gt; 20 km</button>
                    </div>
                </div>

                <!-- Tipe Biaya -->
                <div class="filter-group">
                    <div class="filter-group-title">
                        <span>🏷 Tipe Biaya / Status Pakan</span>
                    </div>
                    <div class="pill-group">
                        <button type="button" class="pill active">Semua</button>
                        <button type="button" class="pill">Murah</button>
                        <button type="button" class="pill">Donasi Gratis</button>
                    </div>
                </div>

                <!-- Waktu Siap Ambil -->
                <div class="filter-group">
                    <div class="filter-group-title">
                        <span>🕒 Waktu Siap Ambil</span>
                    </div>
                    <div class="pill-grid-3">
                        <button type="button" class="pill active">Semua</button>
                        <button type="button" class="pill">Pagi</button>
                        <button type="button" class="pill">Sore</button>
                    </div>
                </div>

                <button type="button" class="btn-apply-filter">
                    ☰ Terapkan Filter (4 Hasil Ditemukan)
                </button>
            </aside>

            <!-- GRID KARTU PRODUK -->
            <div class="katalog-main">
                <div class="product-grid">
                    @foreach ($products as $product)
                        <article class="product-card">
                            <div class="product-thumb">
                                <img 
                                    src="{{ asset('images/' . $product['gambar']) }}" 
                                    alt="{{ $product['nama'] }}"
                                    onerror="this.src='https://placehold.co/400x300/e2e8f0/475569?text={{ urlencode($product['nama']) }}'"
                                >
                                <span class="time-badge">{{ $product['batas'] }}</span>
                            </div>

                            <div class="product-body">
                                <div class="product-meta">
                                    <span class="product-cat">{{ $product['kategori'] }}</span>
                                    <span class="product-stock">● {{ $product['sisa'] }}</span>
                                </div>

                                <h3 class="product-name">{{ $product['nama'] }}</h3>
                                <p class="product-vendor">🏪 {{ $product['lokasi'] }}</p>

                                <div class="product-price-row">
                                    <span class="product-price">{{ $product['harga'] }}</span>
                                    @if ($product['satuan'])
                                        <span class="product-unit">{{ $product['satuan'] }}</span>
                                    @endif
                                    @if ($product['harga_coret'])
                                        <span class="product-old-price">{{ $product['harga_coret'] }}</span>
                                    @endif
                                </div>

                                <a href="#" class="btn-detail">Detail →</a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="katalog-pagination">
                    <p>Menampilkan halaman <strong>1</strong> dari <strong>5</strong></p>
                    <div class="page-buttons">
                        <button type="button" class="page-btn">‹</button>
                        <button type="button" class="page-btn active">1</button>
                        <button type="button" class="page-btn">2</button>
                        <button type="button" class="page-btn">3</button>
                        <button type="button" class="page-btn">›</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection