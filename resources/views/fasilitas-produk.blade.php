@extends('layouts.app')
@section('title', 'Fasilitas & Produk - PT. Buana Inovasi Mekanika')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="page-hero" id="fasilitas-produk">
    <div class="page-hero-ornament-left">
        <img src="{{ asset('images/ornament1.svg') }}" alt="">
    </div>
    <div class="page-hero-ornament-right">
        <img src="{{ asset('images/ornament2.svg') }}" alt="">
    </div>
    <div class="page-hero-content">
        <h1 class="page-hero-title">Fasilitas &amp; Produk</h1>
        <p class="page-hero-subtitle">Our Machinery &amp; Our Product</p>
    </div>
</section>

{{-- ===== INTRO TEXT ===== --}}
<section class="fp-intro-section">
    <div class="section-container">
        <div class="fp-intro-text">
            <p>
                Kami menyediakan layanan CNC Machining, Laser Cutting, Bending &amp; Injection untuk memproduksi berbagai produk dan komponen dengan tingkat presisi dan kualitas tinggi sesuai kebutuhan industri. Dengan teknologi mesin modern, kami mampu mengerjakan berbagai bentuk dan tingkat kompleksitas komponen, mulai dari prototype hingga produksi dalam jumlah besar.
            </p>
            <p>
                Material yang dapat kami proses meliputi Nylon, Plastic, HDPE, POM/Delrin, PTFE/Teflon, PVC, Acrylic, Polycarbonate, Aluminium, Brass/Kuningan, Copper/Tembaga, Mild Steel, Carbon Steel, Stainless Steel, serta berbagai material engineering lainnya.
            </p>
        </div>
    </div>
</section>

{{-- ===== OUR MACHINERY ===== --}}
<section class="fp-section" id="our-machinery">
    <div class="section-container">
        <div class="fp-section-header">
            <div class="fp-ornament-left"><img src="{{ asset('images/ornament1.svg') }}" alt=""></div>
            <h2 class="fp-section-title">Our Machinery</h2>
            <div class="fp-ornament-right"><img src="{{ asset('images/ornament2.svg') }}" alt=""></div>
        </div>

        <div class="fp-gallery" id="machinery-gallery">
            @for($i = 1; $i <= 10; $i++)
            <div class="fp-gallery-item" data-index="{{ $i }}">
                <img src="{{ asset('images/mesin-' . $i . '.png') }}" alt="Mesin {{ $i }}" loading="lazy">
                <div class="fp-gallery-overlay">
                    <span class="fp-gallery-icon">
                        <img src="{{ asset('images/x-icon.svg') }}" alt="Lihat" class="invert-icon">
                    </span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- ===== OUR PRODUCT ===== --}}
<section class="fp-section fp-section--dark" id="our-product">
    <div class="section-container">
        <div class="fp-section-header">
            <div class="fp-ornament-left"><img src="{{ asset('images/ornament1.svg') }}" alt=""></div>
            <h2 class="fp-section-title fp-section-title--light">Our Product</h2>
            <div class="fp-ornament-right"><img src="{{ asset('images/ornament2.svg') }}" alt=""></div>
        </div>

        <div class="fp-gallery fp-gallery--light" id="product-gallery">
            @for($i = 1; $i <= 16; $i++)
            <div class="fp-gallery-item" data-index="{{ $i }}">
                <img src="{{ asset('images/produk-' . $i . '.png') }}" alt="Produk {{ $i }}" loading="lazy">
                <div class="fp-gallery-overlay">
                    <span class="fp-gallery-icon">
                        <img src="{{ asset('images/x-icon.svg') }}" alt="Lihat" class="invert-icon">
                    </span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- ===== LIGHTBOX ===== --}}
<div class="lightbox" id="lightbox">
    <div class="lightbox-backdrop" id="lightboxBackdrop"></div>
    <div class="lightbox-container">
        <button class="lightbox-close" id="lightboxClose">
            <img src="{{ asset('images/x-icon.svg') }}" alt="Tutup">
        </button>
        <button class="lightbox-prev" id="lightboxPrev">&#8249;</button>
        <div class="lightbox-img-wrap">
            <img src="" alt="Preview" id="lightboxImg">
        </div>
        <button class="lightbox-next" id="lightboxNext">&#8250;</button>
    </div>
</div>

@endsection

@section('extra-css')
<style>
.fp-gallery-item { cursor: pointer; }
</style>
@endsection
