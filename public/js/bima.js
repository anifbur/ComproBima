/* ================================================================
   BIMA - JavaScript
   ================================================================ */

document.addEventListener('DOMContentLoaded', function () {

    /* ---- NAVBAR SCROLL ---- */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    /* ---- HAMBURGER MENU ---- */
    const hamburger = document.getElementById('hamburger');
    const navMenu   = document.getElementById('navMenu');
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            navMenu.classList.toggle('open');
        });
        // Close on nav link click
        navMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                hamburger.classList.remove('open');
                navMenu.classList.remove('open');
            });
        });
    }

    /* ---- TABS (Machinery / Product) ---- */
    const tabs = document.querySelectorAll('.mp-tab');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');
            const target = tab.dataset.tab;
            document.getElementById('panel-machinery').classList.add('hidden');
            document.getElementById('panel-product').classList.add('hidden');
            const panel = target === 'machinery'
                ? document.getElementById('panel-machinery')
                : document.getElementById('panel-product');
            if (panel) panel.classList.remove('hidden');
        });
    });

    /* ---- LIGHTBOX ---- */
    const lightbox       = document.getElementById('lightbox');
    const lightboxImg    = document.getElementById('lightboxImg');
    const lightboxClose  = document.getElementById('lightboxClose');
    const lightboxPrev   = document.getElementById('lightboxPrev');
    const lightboxNext   = document.getElementById('lightboxNext');
    const lightboxBackdrop = document.getElementById('lightboxBackdrop');

    if (lightbox) {
        let currentGallery = [];
        let currentIndex   = 0;

        function openLightbox(galleryItems, index) {
            currentGallery = Array.from(galleryItems).map(function (item) {
                return item.querySelector('img').src;
            });
            currentIndex = index;
            lightboxImg.src = currentGallery[currentIndex];
            lightbox.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('open');
            document.body.style.overflow = '';
        }

        function showPrev() {
            currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
            lightboxImg.src = currentGallery[currentIndex];
        }

        function showNext() {
            currentIndex = (currentIndex + 1) % currentGallery.length;
            lightboxImg.src = currentGallery[currentIndex];
        }

        // Attach to machinery gallery
        const machineryGallery = document.getElementById('machinery-gallery');
        if (machineryGallery) {
            const machineryItems = machineryGallery.querySelectorAll('.fp-gallery-item');
            machineryItems.forEach(function (item, idx) {
                item.addEventListener('click', function () {
                    openLightbox(machineryItems, idx);
                });
            });
        }

        // Attach to product gallery
        const productGallery = document.getElementById('product-gallery');
        if (productGallery) {
            const productItems = productGallery.querySelectorAll('.fp-gallery-item');
            productItems.forEach(function (item, idx) {
                item.addEventListener('click', function () {
                    openLightbox(productItems, idx);
                });
            });
        }

        if (lightboxClose)   lightboxClose.addEventListener('click', closeLightbox);
        if (lightboxBackdrop) lightboxBackdrop.addEventListener('click', closeLightbox);
        if (lightboxPrev)    lightboxPrev.addEventListener('click', showPrev);
        if (lightboxNext)    lightboxNext.addEventListener('click', showNext);

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            if (!lightbox.classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showPrev();
            if (e.key === 'ArrowRight') showNext();
        });
    }

    /* ---- SCROLL REVEAL ---- */
    const revealElements = document.querySelectorAll(
        '.profile-content, .mp-header, .mp-tabs, .mp-grid, .client-card, ' +
        '.visi-card, .misi-card, .core-value-card, .fp-intro-text, ' +
        '.fp-gallery-item, .about-grid'
    );

    revealElements.forEach(function (el) {
        el.classList.add('reveal');
    });

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealElements.forEach(function (el) {
        observer.observe(el);
    });

    /* ---- STAGGER ANIMATION for grids ---- */
    function staggerItems(containerSelector, itemSelector) {
        const container = document.querySelector(containerSelector);
        if (!container) return;
        const items = container.querySelectorAll(itemSelector);
        const staggerObserver = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting) {
                items.forEach(function (item, i) {
                    item.style.transitionDelay = (i * 0.06) + 's';
                    item.classList.add('visible');
                });
                staggerObserver.unobserve(container);
            }
        }, { threshold: 0.05 });
        staggerObserver.observe(container);
    }

    staggerItems('.client-grid', '.client-card');
    staggerItems('.core-values-grid', '.core-value-card');
    staggerItems('.mp-grid', '.mp-card');
    staggerItems('#machinery-gallery', '.fp-gallery-item');
    staggerItems('#product-gallery', '.fp-gallery-item');

    /* ---- CONTACT FORM (prevent default, show alert) ---- */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = contactForm.querySelector('.send-btn');
            var originalHTML = btn.innerHTML;
            btn.innerHTML = '<span style="color:#2d6a2d;font-family:Barlow Condensed,sans-serif;font-size:18px;font-weight:700;letter-spacing:2px;">Terkirim ✓</span>';
            setTimeout(function () {
                contactForm.reset();
                btn.innerHTML = originalHTML;
            }, 3000);
        });
    }

});
