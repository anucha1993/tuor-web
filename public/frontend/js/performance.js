// Performance Monitoring and Optimization Script
(function() {
    'use strict';

    // Performance metrics tracking
    const performanceMetrics = {
        cls: 0,
        lcp: 0,
        inp: 0,
        fcp: 0,
        ttfb: 0
    };

    // Core Web Vitals monitoring
    function initCoreWebVitals() {
        // Cumulative Layout Shift (CLS)
        if ('PerformanceObserver' in window) {
            const clsObserver = new PerformanceObserver((list) => {
                for (const entry of list.getEntries()) {
                    if (!entry.hadRecentInput) {
                        performanceMetrics.cls += entry.value;
                    }
                }
            });
            clsObserver.observe({ type: 'layout-shift', buffered: true });

            // Largest Contentful Paint (LCP)
            const lcpObserver = new PerformanceObserver((list) => {
                for (const entry of list.getEntries()) {
                    performanceMetrics.lcp = entry.startTime;
                }
            });
            lcpObserver.observe({ type: 'largest-contentful-paint', buffered: true });

            // First Contentful Paint (FCP)
            const fcpObserver = new PerformanceObserver((list) => {
                for (const entry of list.getEntries()) {
                    if (entry.name === 'first-contentful-paint') {
                        performanceMetrics.fcp = entry.startTime;
                    }
                }
            });
            fcpObserver.observe({ type: 'paint', buffered: true });
        }

        // Time to First Byte (TTFB)
        if ('navigation' in performance && 'responseStart' in performance.navigation) {
            performanceMetrics.ttfb = performance.timing.responseStart - performance.timing.requestStart;
        }
    }

    // Lazy loading implementation
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        
                        // Create a new image to preload
                        const newImg = new Image();
                        newImg.onload = function() {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            img.classList.add('lazy-loaded');
                        };
                        newImg.src = img.dataset.src;
                        
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px',
                threshold: 0.01
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        } else {
            // Fallback for browsers without IntersectionObserver
            document.querySelectorAll('img[data-src]').forEach(img => {
                img.src = img.dataset.src;
            });
        }
    }

    // Critical resource preloading
    function preloadCriticalResources() {
        const criticalImages = [
            '/public/frontend/images/hero-bg.jpg',
            '/public/frontend/images/search-bg.jpg'
        ];

        criticalImages.forEach(src => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'image';
            link.href = src;
            document.head.appendChild(link);
        });
    }

    // Optimize carousel performance
    function optimizeCarousel() {
        const carousel = document.querySelector('.hero-carousel');
        if (!carousel) return;

        let isScrolling = false;
        let currentSlide = 0;
        const slides = carousel.querySelectorAll('.carousel-slide');
        const totalSlides = slides.length;

        function updateCarousel() {
            if (!isScrolling) {
                isScrolling = true;
                requestAnimationFrame(() => {
                    slides.forEach((slide, index) => {
                        slide.style.transform = `translateX(${(index - currentSlide) * 100}%)`;
                    });
                    isScrolling = false;
                });
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        // Auto-advance slides
        setInterval(nextSlide, 5000);

        // Touch/swipe support
        let startX = 0;
        let endX = 0;

        carousel.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX;
        });

        carousel.addEventListener('touchend', e => {
            endX = e.changedTouches[0].clientX;
            const diff = startX - endX;
            
            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        });
    }

    // Optimize search form
    function optimizeSearchForm() {
        const searchForm = document.getElementById('search-form');
        if (!searchForm) return;

        // Debounced search suggestions
        let searchTimeout;
        const searchInput = searchForm.querySelector('input[type="text"]');
        
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    // Implement search suggestions here
                    console.log('Search suggestion for:', this.value);
                }, 300);
            });
        }

        // Optimize form submission
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const searchParams = new URLSearchParams(formData);
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.textContent = 'กำลังค้นหา...';
                submitBtn.disabled = true;
            }
            
            // Simulate search (replace with actual search logic)
            setTimeout(() => {
                if (submitBtn) {
                    submitBtn.textContent = 'ค้นหา';
                    submitBtn.disabled = false;
                }
            }, 2000);
        });
    }

    // Image optimization
    function optimizeImages() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            // Add loading="lazy" if not already present
            if (!img.hasAttribute('loading')) {
                img.loading = 'lazy';
            }
            
            // Add error handling
            img.addEventListener('error', function() {
                this.src = '/public/noimage.jpg';
                this.alt = 'ไม่พบรูปภาพ';
            });
            
            // Optimize WebP support
            if ('WebPSupportedImages' in window && window.WebPSupportedImages) {
                const src = img.src;
                if (src && !src.includes('.webp')) {
                    const webpSrc = src.replace(/\.(jpg|jpeg|png)$/, '.webp');
                    
                    // Test if WebP version exists
                    const testImg = new Image();
                    testImg.onload = function() {
                        img.src = webpSrc;
                    };
                    testImg.src = webpSrc;
                }
            }
        });
    }

    // Service Worker registration for caching
    function registerServiceWorker() {
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(registration => {
                    console.log('SW registered:', registration);
                })
                .catch(error => {
                    console.log('SW registration failed:', error);
                });
        }
    }

    // Load non-critical CSS asynchronously
    function loadNonCriticalCSS() {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = '/public/frontend/css/non-critical.css';
        link.media = 'print';
        link.onload = function() {
            this.media = 'all';
        };
        document.head.appendChild(link);
    }

    // Memory management
    function optimizeMemory() {
        // Clean up unused event listeners
        window.addEventListener('beforeunload', function() {
            // Cleanup logic here
        });

        // Optimize DOM queries
        const cache = new Map();
        window.getElementByIdCached = function(id) {
            if (!cache.has(id)) {
                cache.set(id, document.getElementById(id));
            }
            return cache.get(id);
        };
    }

    // Performance reporting
    function reportPerformanceMetrics() {
        setTimeout(() => {
            const metrics = {
                ...performanceMetrics,
                timestamp: Date.now(),
                userAgent: navigator.userAgent,
                url: window.location.href
            };

            // Send metrics to analytics (replace with your analytics endpoint)
            console.log('Performance Metrics:', metrics);
            
            // Optional: Send to Google Analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'page_performance', {
                    custom_parameter_cls: Math.round(metrics.cls * 1000) / 1000,
                    custom_parameter_lcp: Math.round(metrics.lcp),
                    custom_parameter_fcp: Math.round(metrics.fcp)
                });
            }
        }, 5000);
    }

    // Initialize all optimizations
    function init() {
        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
            return;
        }

        // Initialize performance monitoring
        initCoreWebVitals();
        
        // Initialize optimizations
        requestAnimationFrame(() => {
            preloadCriticalResources();
            initLazyLoading();
            optimizeCarousel();
            optimizeSearchForm();
            optimizeImages();
            loadNonCriticalCSS();
            optimizeMemory();
        });

        // Register service worker after initial load
        setTimeout(registerServiceWorker, 1000);
        
        // Report metrics after page is fully loaded
        window.addEventListener('load', reportPerformanceMetrics);
    }

    // Start initialization
    init();

    // Expose performance metrics for debugging
    window.performanceMetrics = performanceMetrics;

})();
