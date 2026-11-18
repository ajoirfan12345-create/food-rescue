<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FoodRescue - Sisa Pangan Jadi Pakan')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container nav-inner">
            <a href="{{ url('/') }}" class="brand">
                <span class="brand-icon">🌱</span>
                <span class="brand-text">Food<strong>Rescue</strong></span>
            </a>

            <nav class="nav-links">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                <a href="{{ url('/katalog') }}" class="{{ request()->is('katalog') ? 'active' : '' }}">Katalog Pakan</a>
                <a href="#cara-kerja">Tentang Kami</a>
            </nav>

            <div class="nav-actions">
                <form action="{{ url('/katalog') }}" method="GET" class="nav-search">
                    <span class="search-icon">🔍</span>
                    <input type="text" name="q" placeholder="Cari pakan, sayur afkir...">
                </form>
                <a href="#unduh-app" class="btn btn-primary-sm">Unduh Aplikasi</a>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="brand brand-light">
                    <span class="brand-icon">🌱</span>
                    <span class="brand-text">Food<strong>Rescue</strong></span>
                </a>
                <p>
                    Platform penyelamatan sisa pangan di Bandar Lampung yang menghubungkan pasar, toko, dan resto dengan peternak lokal agar sisa pangan layak tidak terbuang ke TPA.
                </p>
            </div>

            <div class="footer-col">
                <h4>TAUTAN CEPAT</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="#cara-kerja">Cara Kerja</a></li>
                    <li><a href="{{ url('/katalog') }}">Katalog Pakan</a></li>
                    <li><a href="#unduh-app">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>KATEGORI PAKAN</h4>
                <ul>
                    <li><a href="{{ url('/katalog') }}">Sayur &amp; Buah Afkir</a></li>
                    <li><a href="{{ url('/katalog') }}">Ampas &amp; Hasil Olahan</a></li>
                    <li><a href="{{ url('/katalog') }}">Roti &amp; Bakery</a></li>
                    <li><a href="{{ url('/katalog') }}">Limbah Dapur</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>HUBUNGI KAMI</h4>
                <p class="footer-contact-desc">Punya pertanyaan atau ingin bergabung menjadi mitra penyuplai?</p>
                <ul class="footer-contact-list">
                    <li>✉️ halo@foodrescue.id</li>
                    <li>📍 Bandar Lampung, Indonesia</li>
                </ul>
                <div class="footer-socials">
                    <a href="#" aria-label="Instagram" class="social-circle ig">IG</a>
                    <a href="#" aria-label="WhatsApp" class="social-circle wa">WA</a>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            <p>&copy; 2026 Food Rescue. Proyek Mahasiswa Bandar Lampung.</p>
            <div class="footer-legal">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat &amp; Ketentuan</a>
                <a href="#">Pedoman Keamanan Pakan</a>
            </div>
        </div>
    </footer>

</body>
</html>