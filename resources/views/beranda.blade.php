@extends('layouts.app')
@section('title', 'Beranda - PT. Buana Inovasi Mekanika')

@section('content')

{{-- ===== HERO / BANNER UTAMA ===== --}}
<section class="hero" id="beranda">
    <div class="hero-ornament-left">
        <img src="{{ asset('images/ornament1.svg') }}" alt="">
    </div>
    <div class="hero-ornament-right">
        <img src="{{ asset('images/ornament2.svg') }}" alt="">
    </div>

    <div class="hero-content">
        <div class="hero-text-block">
            <h1 class="hero-title">
                <span class="hero-word hero-word--quality">QUALITY</span>
                <span class="hero-word hero-word--accuracy">ACCURACY</span>
                <span class="hero-word hero-word--reliability">RELIABILITY</span>
            </h1>
        </div>
        <div class="hero-logo-block">
            <img src="{{ asset('images/logo.png') }}" alt="PT. Buana Inovasi Mekanika" class="hero-logo">
        </div>
    </div>

    <div class="hero-scroll-indicator">
        <span></span>
    </div>
</section>

{{-- ===== PROFILE SECTION ===== --}}
<section class="profile-section" id="profile">
    <div class="section-container">
        <div class="profile-content">
            <div class="profile-text">
                <div class="section-label">Profile</div>
                <p class="profile-desc">
                    PT Buana Inovasi Mekanika adalah perusahaan yang bergerak di bidang manufaktur, CNC Machining, Injection serta mekanikal industri dengan fokus memberikan solusi produksi yang berkualitas, presisi dan sesuai dengan kebutuhan pelanggan. Kami hadir sebagai mitra industri yang mengintegrasikan engineering, teknologi manufaktur, proses produksi dan quality control untuk menghasilkan produk serta komponen yang dapat mendukung kebutuhan berbagai sektor industri. Dengan mengedepankan ketepatan, kualitas, efisiensi, dan inovasi, PT Buana Inovasi Mekanika berkomitmen untuk memberikan solusi yang tidak hanya memenuhi spesifikasi teknis, tetapi juga memberikan nilai tambah bagi pelanggan.
                </p>
                <a href="{{ route('tentang-kami') }}" class="btn-lihat-selengkapnya">
                    Lihat Selengkapnya
                </a>
            </div>
            <div class="profile-icon-block">
                <img src="{{ asset('images/icon-injection-machining.svg') }}" alt="Injection &amp; Machining" class="injection-icon">
            </div>
        </div>
    </div>
</section>

{{-- ===== OUR MACHINERY & OUR PRODUCT ===== --}}
<section class="machinery-product-section" id="machinery-product">
    <div class="section-container">
        <div class="mp-header">
            <h2 class="section-title">Our Machinery <span class="amp">&amp;</span> Our Product</h2>
        </div>

        <div class="mp-tabs">
            <button class="mp-tab active" data-tab="machinery" id="tab-machinery">Our Machinery</button>
            <button class="mp-tab" data-tab="product" id="tab-product">Our Product</button>
        </div>

        {{-- Machinery Grid --}}
        <div class="mp-grid" id="panel-machinery">
            @for($i = 1; $i <= 10; $i++)
            <div class="mp-card">
                <img src="{{ asset('images/mesin-' . $i . '.png') }}" alt="Mesin {{ $i }}" loading="lazy">
            </div>
            @endfor
        </div>

        {{-- Product Grid --}}
        <div class="mp-grid hidden" id="panel-product">
            @for($i = 1; $i <= 16; $i++)
            <div class="mp-card">
                <img src="{{ asset('images/produk-' . $i . '.png') }}" alt="Produk {{ $i }}" loading="lazy">
            </div>
            @endfor
        </div>

        <div class="mp-btn-wrap">
            <a href="{{ route('fasilitas-produk') }}" class="btn-lihat-selengkapnya">
                Lihat Selengkapnya
            </a>
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
