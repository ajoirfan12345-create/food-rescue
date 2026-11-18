@extends('layout')

@section('title', 'Beranda - FoodRescue')

@section('content')

@php
    $products = [
        [
            'nama' => 'Wortel Afkir',
            'kategori' => 'Sayur Afkir',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Pasar Tamin, B. Lampung',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 18:00',
            'gambar' => 'wortel.jpg'
        ],
        [
            'nama' => 'Sawi Putih Layu',
            'kategori' => 'Sayur Afkir',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Pasar Pasir Gintung',
            'harga' => 'Rp1.500',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 17:00',
            'gambar' => 'sawi.jpg'
        ],
        [
            'nama' => 'Kangkung Layu',
            'kategori' => 'Sayur Afkir',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Pasar Way Halim',
            'harga' => 'Rp1.500',
            'satuan' => '',
            'batas' => 'AMBIL S/D 16:30',
            'gambar' => 'kangkung.jpg'
        ],
        [
            'nama' => 'Pepaya Terlalu Matang',
            'kategori' => 'Buah Afkir',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Toko Buah Kedaton',
            'harga' => 'Rp3.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 19:00',
            'gambar' => 'pepaya-matang.jpg'
        ],
        [
            'nama' => 'Pepaya Mentah Afkir',
            'kategori' => 'Buah Afkir',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Pasar Bambu Kuning',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 18:00',
            'gambar' => 'pepaya-mentah.jpg'
        ],
        [
            'nama' => 'Ampas Tahu Segar',
            'kategori' => 'Olahan Kedelai',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Pabrik Tahu Sukarame',
            'harga' => 'Rp2.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 15:00',
            'gambar' => 'ampas-tahu.jpg'
        ],
        [
            'nama' => 'Nasi Sisa Siap Disajikan',
            'kategori' => 'Sisa Resto',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'RM Padang Antasari',
            'harga' => 'Rp2.500',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 21:00',
            'gambar' => 'nasi-sisa.jpg'
        ],
        [
            'nama' => 'Potongan Sayur Dapur',
            'kategori' => 'Limbah Dapur',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Katering Rajabasa',
            'harga' => 'Rp1.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 17:00',
            'gambar' => 'potongan-sayur.jpg'
        ],
        [
            'nama' => 'Roti Sisa',
            'kategori' => 'Sisa Bakery',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Bakery Tanjung Karang',
            'harga' => 'Rp3.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 20:00',
            'gambar' => 'roti-sisa.jpg'
        ],
        [
            'nama' => 'Dedak Padi',
            'kategori' => 'Pakan Kering',
            'status' => 'LAYAK PAKAN',
            'lokasi' => 'Penggilingan Natar',
            'harga' => 'Rp1.000',
            'satuan' => '/kg',
            'batas' => 'AMBIL S/D 18:00',
            'gambar' => 'dedak.jpg'
        ],
    ];
@endphp

<!-- 1. HERO BANNER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-card" style="background-image: linear-gradient(90deg, #0D4224 0%, #0D4224 48%, rgba(13, 66, 36, 0.25) 100%), url('{{ asset('images/hero-sayur.jpg') }}');">
            <div class="hero-content">
                <span class="hero-badge">🌿 HEMAT PAKAN HINGGA 70%</span>
                <h1>
                    Sisa Pangan Jadi Pakan,<br>
                    <span class="text-gold">Hemat Biaya Ternak</span>
                </h1>
                <p>
                    Temukan sayur afkir, ampas tahu, roti tawar, dan bahan pakan lain dari pasar, toko, dan resto terdekat sebelum terbuang ke TPA. Mudah, cepat, dan ramah di kantong peternak.
                </p>
                <div class="hero-buttons">
                    <a href="{{ url('/katalog') }}" class="btn btn-white">Mulai Katalog &rarr;</a>
                    <a href="#unduh-app" class="btn btn-outline-light">⬇ Unduh APK</a>
                </div>
            </div>

            <div class="hero-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

        <!-- 2. STATS STRIP -->
        <div class="stats-card">
            <div class="stat-item">
                <div class="stat-icon icon-amber">🥕</div>
                <div class="stat-info">
                    <h3>100+ kg</h3>
                    <strong>Sisa Pangan Diselamatkan</strong>
                    <span>Dari 20+ mitra pasar &amp; resto di Bandar Lampung</span>
                </div>
            </div>

            <div class="stat-divider"></div>

            <div class="stat-item">
                <div class="stat-icon icon-green">🏪</div>
                <div class="stat-info">
                    <h3>20 Mitra</h3>
                    <strong>Penyuplai Sisa Pangan</strong>
                    <span>Pasar tradisional, warung, &amp; toko sayur di Bandar Lampung</span>
                </div>
            </div>

            <div class="stat-divider"></div>

            <div class="stat-item">
                <div class="stat-icon icon-blue">🐓</div>
                <div class="stat-info">
                    <h3>15+</h3>
                    <strong>Peternak Terbantu</strong>
                    <span>Ayam, bebek, ikan, &amp; kambing di Lampung Selatan dan sekitarnya</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. PAKAN TERSEDIA HARI INI -->
<section class="catalog-section">
    <div class="container">
        <div class="section-header-left">
            <span class="live-tag"><span class="pulse-dot"></span> STOK TERBARU &amp; SIAP DIAMBIL</span>
            <h2>Pakan Tersedia Hari Ini</h2>
        </div>

        <div class="product-grid">
            @foreach ($products as $item)
                <article class="product-card">
                    <div class="product-thumb">
                        <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" onerror="this.style.display='none'">
                        <span class="time-badge">{{ $item['batas'] }}</span>
                    </div>

                    <div class="product-body">
                        <div class="product-meta">
                            <span class="meta-cat">{{ $item['kategori'] }}</span>
                            <span class="meta-status">{{ $item['status'] }}</span>
                        </div>

                        <h3 class="product-title">{{ $item['nama'] }}</h3>
                        <p class="product-loc">📍 {{ $item['lokasi'] }}</p>

                        <div class="product-price">
                            <strong>{{ $item['harga'] }}</strong><span>{{ $item['satuan'] }}</span>
                        </div>

                        <a href="{{ url('/katalog') }}" class="btn-card-detail">Detail &rarr;</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<!-- 4. CARA KERJA FOOD RESCUE -->
<section id="cara-kerja" class="steps-section">
    <div class="container">
        <div class="section-header-center">
            <h2>Cara Kerja Food Rescue</h2>
            <p>Langkah mudah menyelamatkan sisa pangan menjadi pakan ternak, sambil menjaga lingkungan tetap bersih dan hijau.</p>
        </div>

        <div class="steps-grid">
            <!-- Langkah 01 -->
            <div class="step-card step-dark-green">
                <span class="step-watermark">01</span>
                <div class="step-icon-box">📱</div>
                <span class="step-label">LANGKAH 1</span>
                <h3>Unduh &amp; Daftar</h3>
                <p>Instal aplikasi Food Rescue dan daftar sebagai mitra penyuplai pangan atau peternak pembeli.</p>
                <div class="step-tags">
                    <span class="pill-gold">Mitra Penjual</span>
                    <span class="pill-glass">Peternak / Pembeli</span>
                </div>
            </div>

            <!-- Langkah 02 -->
            <div class="step-card step-white">
                <span class="step-watermark">02</span>
                <div class="step-icon-box light">🔍</div>
                <span class="step-label">LANGKAH 2</span>
                <h3>Temukan Pakan Surplus</h3>
                <p>Jelajahi katalog sisa pangan di sekitar Bandar Lampung, lalu filter sesuai kategori pakan ternakmu.</p>
                <div class="step-tags">
                    <span class="pill-outline">Sayur &amp; Buah</span>
                    <span class="pill-outline">Roti</span>
                    <span class="pill-outline">Nasi</span>
                </div>
            </div>

            <!-- Langkah 03 -->
            <div class="step-card step-amber">
                <span class="step-watermark">03</span>
                <div class="step-icon-box dark-amber">🛒</div>
                <span class="step-label">LANGKAH 3</span>
                <h3>Pesan Lewat Aplikasi</h3>
                <p>Pilih porsi atau berat bahan pakan yang diinginkan dan kunci stok sebelum kehabisan.</p>
                <div class="step-tags">
                    <span class="pill-dark">Cepat &amp; Mudah</span>
                </div>
            </div>

            <!-- Langkah 04 -->
            <div class="step-card step-mint">
                <span class="step-watermark">04</span>
                <div class="step-icon-box mint-icon">🧾</div>
                <span class="step-label">LANGKAH 4</span>
                <h3>Pesan &amp; Checkout</h3>
                <p>Selesaikan pemesanan secara langsung dengan metode pembayaran yang praktis dan transparan.</p>
                <div class="step-tags">
                    <span class="pill-white-soft">10 kg &bull; Rp20.000</span>
                </div>
            </div>

            <!-- Langkah 05 -->
            <div class="step-card step-dark-green relative-qr">
                <span class="step-watermark">05</span>
                <div class="step-icon-box">📷</div>
                <span class="step-label">LANGKAH 5</span>
                <h3>Ambil dengan Kode QR</h3>
                <p>Datangi lokasi mitra sebelum batas waktu dan tunjukkan kode QR pesananmu untuk serah terima.</p>
                <div class="qr-box" aria-hidden="true">
                    <div class="qr-pattern"></div>
                </div>
            </div>

            <!-- Langkah 06 -->
            <div class="step-card step-ice">
                <span class="step-watermark">06</span>
                <div class="step-icon-box blue-icon">📊</div>
                <span class="step-label">LANGKAH 6</span>
                <h3>Pantau Riwayat Transaksi</h3>
                <p>Lihat status pengambilan pakan yang sedang diproses maupun riwayat pakan yang sudah diselamatkan.</p>
                <div class="status-track">
                    <span class="track-done">● Dipesan</span>
                    <span class="track-line"></span>
                    <span class="track-next">○ Selesai</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. BANNER UNDUH APLIKASI -->
<section id="unduh-app" class="app-banner-section">
    <div class="container">
        <div class="app-banner">
            <div class="app-banner-text">
                <span class="hero-badge">📲 TERSEDIA UNTUK ANDROID &amp; IOS</span>
                <h2>Makin Mudah Dapat Pakan Hemat Langsung dari Ponselmu</h2>
                <p>Temukan pakan surplus terdekat, terima pengingat stok baru secara real-time, dan ambil pesanan dengan kode QR.</p>
                <div class="store-buttons">
                    <a href="#" class="store-btn">
                        <span>▶</span>
                        <div>
                            <small>GET IT ON</small>
                            <strong>Google Play</strong>
                        </div>
                    </a>
                    <a href="#" class="store-btn">
                        <span></span>
                        <div>
                            <small>Download on the</small>
                            <strong>App Store</strong>
                        </div>
                    </a>
                </div>
            </div>

            <div class="app-banner-mockup">
                <div class="phone-frame">
                    <div class="phone-notch"></div>
                    <div class="phone-screen">
                        <div class="phone-header">
                            <small>LOKASI ANDA</small>
                            <strong>📍 Bandar Lampung</strong>
                        </div>
                        <div class="phone-placeholder-body">
                            <div class="skeleton-card"></div>
                            <div class="skeleton-row"></div>
                            <div class="skeleton-row short"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection