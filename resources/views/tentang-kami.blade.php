@extends('layouts.app')
@section('title', 'Tentang Kami - PT. Buana Inovasi Mekanika')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="page-hero" id="tentang-kami">
    <div class="page-hero-ornament-left">
        <img src="{{ asset('images/ornament1.svg') }}" alt="">
    </div>
    <div class="page-hero-ornament-right">
        <img src="{{ asset('images/ornament2.svg') }}" alt="">
    </div>
    <div class="page-hero-content">
        <h1 class="page-hero-title">Tentang Kami</h1>
        <p class="page-hero-subtitle">PT. Buana Inovasi Mekanika</p>
    </div>
</section>

{{-- ===== PROFILE ===== --}}
<section class="about-profile-section">
    <div class="section-container">
        <div class="about-grid">
            <div class="about-logo-col">
                <div class="about-logo-wrap">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo BIMA" class="about-logo">
                    <div class="about-ornament-wrap">
                        <div class="about-red-bar"></div>
                    </div>
                </div>
            </div>
            <div class="about-text-col">
                <div class="section-label">Profile</div>
                <p class="about-desc">
                    PT Buana Inovasi Mekanika adalah perusahaan yang bergerak di bidang manufaktur, CNC Machining, Injection serta mekanikal industri dengan fokus memberikan solusi produksi yang berkualitas, presisi dan sesuai dengan kebutuhan pelanggan. Kami hadir sebagai mitra industri yang mengintegrasikan engineering, teknologi manufaktur, proses produksi dan quality control untuk menghasilkan produk serta komponen yang dapat mendukung kebutuhan berbagai sektor industri. Dengan mengedepankan ketepatan, kualitas, efisiensi, dan inovasi, PT Buana Inovasi Mekanika berkomitmen untuk memberikan solusi yang tidak hanya memenuhi spesifikasi teknis, tetapi juga memberikan nilai tambah bagi pelanggan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ===== VISI & MISI ===== --}}
<section class="visi-misi-section">
    <div class="section-container">
        <div class="visi-misi-grid">
            {{-- VISI --}}
            <div class="visi-card">
                <div class="vm-header">
                    <div class="vm-icon">
                        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="29" stroke="#990000" stroke-width="2"/>
                            <circle cx="30" cy="30" r="18" stroke="#990000" stroke-width="2"/>
                            <circle cx="30" cy="30" r="6" fill="#990000"/>
                        </svg>
                    </div>
                    <h2 class="vm-title">Visi</h2>
                </div>
                <div class="vm-divider"></div>
                <p class="vm-text">
                    Menjadi perusahaan manufaktur dan engineering yang terpercaya, inovatif, dan berdaya saing tinggi di Indonesia.
                </p>
            </div>

            {{-- MISI --}}
            <div class="misi-card">
                <div class="vm-header">
                    <div class="vm-icon">
                        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="29" stroke="#990000" stroke-width="2"/>
                            <path d="M20 30 L28 38 L40 22" stroke="#990000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 class="vm-title">Misi</h2>
                </div>
                <div class="vm-divider"></div>
                <ul class="misi-list">
                    <li>Memberikan produk dan layanan manufaktur dengan kualitas serta presisi yang tinggi.</li>
                    <li>Mengembangkan solusi engineering yang efektif dan sesuai dengan kebutuhan pelanggan.</li>
                    <li>Mengoptimalkan teknologi dan sumber daya manusia untuk meningkatkan produktivitas.</li>
                    <li>Menjaga konsistensi kualitas melalui proses produksi dan quality control yang terstandarisasi.</li>
                    <li>Membangun hubungan jangka panjang dengan pelanggan berdasarkan kepercayaan, profesionalisme, dan komitmen.</li>
                    <li>Mendukung pertumbuhan industri nasional melalui solusi manufaktur dan engineering yang kompetitif.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ===== CORE VALUES ===== --}}
<section class="core-values-section">
    <div class="section-container">
        <h2 class="section-title">Core Value</h2>
        <div class="core-values-grid">
            <div class="core-value-card">
                <div class="cv-number">01</div>
                <div class="cv-content">
                    <h3>Precision</h3>
                    <p>Setiap produk dibuat dengan tingkat akurasi dan ketepatan tertinggi.</p>
                </div>
            </div>
            <div class="core-value-card">
                <div class="cv-number">02</div>
                <div class="cv-content">
                    <h3>Quality</h3>
                    <p>Standar kualitas terjaga di setiap tahap proses produksi.</p>
                </div>
            </div>
            <div class="core-value-card">
                <div class="cv-number">03</div>
                <div class="cv-content">
                    <h3>Innovation</h3>
                    <p>Terus berinovasi dalam teknologi dan solusi manufaktur.</p>
                </div>
            </div>
            <div class="core-value-card">
                <div class="cv-number">04</div>
                <div class="cv-content">
                    <h3>Reliability</h3>
                    <p>Mitra industri yang dapat diandalkan dalam setiap kebutuhan.</p>
                </div>
            </div>
            <div class="core-value-card">
                <div class="cv-number">05</div>
                <div class="cv-content">
                    <h3>Integrity</h3>
                    <p>Transparansi dan kejujuran dalam setiap hubungan bisnis.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== OUR CLIENT ===== --}}
<section class="client-section" id="our-client">
    <div class="section-container">
        <h2 class="section-title">Our Client</h2>
        <div class="client-grid">
            <div class="client-card">
                <img src="{{ asset('images/logo-client-1.png') }}" alt="PT. Ewindo">
                <p>PT. Ewindo</p>
            </div>
            <div class="client-card">
                <img src="{{ asset('images/logo-client-2.png') }}" alt="SL">
                <p>SL</p>
            </div>
            <div class="client-card">
                <img src="{{ asset('images/logo-client-3.png') }}" alt="Dharma Group">
                <p>Dharma Group</p>
            </div>
            <div class="client-card">
                <img src="{{ asset('images/logo-client-4.png') }}" alt="CMW">
                <p>CMW – PT. Cipta Mandiri Wirajakti</p>
            </div>
        </div>
    </div>
</section>

@endsection
