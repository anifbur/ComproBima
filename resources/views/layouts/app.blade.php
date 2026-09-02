<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT. Buana Inovasi Mekanika - Perusahaan manufaktur, CNC Machining, Injection dan mekanikal industri terpercaya di Indonesia.">
    <title>@yield('title', 'PT. Buana Inovasi Mekanika')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800;900&family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bima.css') }}">

    @yield('extra-css')
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ route('beranda') }}" class="nav-logo">
                <img src="{{ asset('images/logo.png') }}" alt="PT. Buana Inovasi Mekanika" class="logo-img">
            </a>
            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('tentang-kami') }}" class="{{ request()->routeIs('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('fasilitas-produk') }}" class="{{ request()->routeIs('fasilitas-produk') ? 'active' : '' }}">Fasilitas &amp; Produk</a></li>
            </ul>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="{{ asset('images/logo.png') }}" alt="BIMA Logo" class="footer-logo">
                <p class="footer-tagline">Precision. Quality. Innovation.</p>
            </div>

            <div class="footer-col">
                <h4>Alamat</h4>
                <p><strong>Head Office Utama</strong></p>
                <p>Jl. Karimun Jawa, Banjardawa,<br>Kec. Taman, Kabupaten Pemalang.</p>
                <br>
                <p><strong>Summarecon Emerald Karawang</strong></p>
                <p>Cluster: Sapphire Comercial<br>
                Blok/Nomor: BA / 016<br>
                Kelurahan: Kondangjaya<br>
                Kota: Karawang</p>
            </div>

            <div class="footer-col">
                <h4>Kontak</h4>
                <div class="footer-contact-item">
                    <img src="{{ asset('images/icon-whatsapp.svg') }}" alt="WhatsApp" class="footer-icon">
                    <a href="https://wa.me/6287794260155" target="_blank">087794260155</a>
                </div>
                <div class="footer-contact-item">
                    <img src="{{ asset('images/icon-email.svg') }}" alt="Email" class="footer-icon">
                    <a href="mailto:buanainovasimekanika@gmail.com">buanainovasimekanika@gmail.com</a>
                </div>
                <div class="footer-contact-item">
                    <img src="{{ asset('images/icon-map.svg') }}" alt="Lokasi" class="footer-icon">
                    <span>Pemalang &amp; Karawang</span>
                </div>
                <div class="footer-socials">
                    <a href="#" class="social-link" aria-label="Instagram">
                        <img src="{{ asset('images/icon-instagram.png') }}" alt="Instagram">
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <img src="{{ asset('images/icon-linkedin.svg') }}" alt="LinkedIn">
                    </a>
                    <a href="#" class="social-link" aria-label="Facebook">
                        <img src="{{ asset('images/icon-facebook.svg') }}" alt="Facebook">
                    </a>
                </div>
            </div>

            <div class="footer-col footer-form-col">
                <h4>Hubungi Kami</h4>
                <form class="footer-form" id="contactForm" action="#" method="POST">
                    @csrf
                    <input type="text" name="nama" placeholder="NAMA" required>
                    <input type="email" name="email" placeholder="EMAIL" required>
                    <textarea name="pesan" placeholder="MESSAGE" rows="3" required></textarea>
                    <button type="submit" class="send-btn" aria-label="Kirim">
                        <img src="{{ asset('images/send-button.svg') }}" alt="Send">
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} PT. Buana Inovasi Mekanika. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/bima.js') }}"></script>
</body>
</html>
