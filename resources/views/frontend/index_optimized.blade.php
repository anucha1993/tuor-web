<!DOCTYPE html>
<html lang="th" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    <!-- DNS Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Critical Resource Preloading -->
    <link rel="preload" href="{{asset('frontend/css/layout.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('frontend/css/layout.css')}}"></noscript>
    
    <!-- Preload Critical Images -->
    @if(isset($slide[0]))
    <link rel="preload" href="{{asset($slide[0]->img)}}" as="image" fetchpriority="high">
    @endif
    @if(isset($slide[1]))
    <link rel="preload" href="{{asset($slide[1]->img)}}" as="image" fetchpriority="high">
    @endif
    
    <!-- Critical Inline CSS - Above the Fold -->
    <style>
        /* Critical Reset & Base */
        *,*::before,*::after{box-sizing:border-box}
        html{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;scroll-behavior:smooth}
        body{margin:0;padding:0;font-size:16px;overflow-x:hidden}
        img{max-width:100%;height:auto;display:block;font-display:swap}
        
        /* Critical Layout - Hero Section */
        .hero-container{position:relative;width:100%;height:400px;min-height:400px;max-height:400px;overflow:hidden;contain:layout size style;background:#f5f5f5}
        .hero-slide{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;transition:opacity 0.5s ease;contain:layout}
        .hero-slide.active{opacity:1}
        .hero-slide img{width:100%;height:100%;object-fit:cover;will-change:transform}
        
        /* Critical Layout - Search Box */
        .search-container{position:relative;z-index:10;margin-top:-80px;padding:0 20px;contain:layout}
        .search-box{background:#fff;border-radius:16px;padding:24px;box-shadow:0 4px 20px rgba(0,0,0,0.1);max-width:1200px;margin:0 auto;min-height:180px;contain:layout}
        
        /* Critical Form Elements */
        .form-control{height:48px;border:1px solid #ddd;border-radius:8px;padding:0 16px;font-size:16px;width:100%;contain:layout}
        .btn-primary{background:#f25c05;color:#fff;border:none;border-radius:8px;padding:16px 32px;font-size:16px;cursor:pointer;min-height:48px;contain:layout}
        
        /* Grid System */
        .container{max-width:1200px;margin:0 auto;padding:0 20px;contain:layout}
        .row{display:flex;flex-wrap:wrap;margin:0 -10px;contain:layout}
        .col{flex:1;padding:0 10px;contain:layout}
        .col-6{flex:0 0 50%;contain:layout}
        .col-4{flex:0 0 33.333333%;contain:layout}
        .col-3{flex:0 0 25%;contain:layout}
        
        /* Critical Sections */
        .section{padding:60px 0;contain:layout}
        .card{background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);transition:transform 0.3s ease;contain:layout}
        .card-img{width:100%;height:200px;object-fit:cover;contain:layout}
        
        /* Mobile First */
        @media (max-width: 768px) {
            .hero-container{height:300px;min-height:300px;max-height:300px}
            .col-6,.col-4,.col-3{flex:0 0 100%}
            .search-container{margin-top:-60px;padding:0 15px}
            .search-box{padding:20px}
        }
        
        /* Prevent Layout Shift */
        .loaded{opacity:1!important;visibility:visible!important}
        .loading{opacity:0;visibility:hidden}
    </style>
    
    <!-- SEO Meta Tags -->
    <title>ทัวร์ญี่ปุ่น เกาหลี ไต้หวัน ราคาถูก | Next Trip Holiday</title>
    <meta name="description" content="แพ็กเกจทัวร์ญี่ปุ่น เกาหลี ไต้หวัน ราคาสุดคุ้ม เดินทางง่าย มีไฟลท์ตรง โรงแรมดี ไกด์มืออาชีพ จองกับ Next Trip Holiday">
    <meta name="keywords" content="ทัวร์ญี่ปุ่น, ทัวร์เกาหลี, ทัวร์ไต้หวัน, ทัวร์ต่างประเทศ, แพ็กเกจทัวร์ราคาถูก">
    
    <!-- Open Graph -->
    <meta property="og:title" content="ทัวร์ญี่ปุ่น เกาหลี ไต้หวัน ราคาถูก | Next Trip Holiday">
    <meta property="og:description" content="จองทัวร์กับบริษัททัวร์ชั้นนำ บินตรง โรงแรมดี เที่ยวสนุก ปลอดภัย">
    <meta property="og:image" content="{{asset('frontend/images/logo.png')}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:type" content="website">
    
    <!-- Canonical -->
    <link rel="canonical" href="{{url('/')}}">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "name": "Next Trip Holiday",
        "description": "บริษัททัวร์ชั้นนำของไทย ให้บริการแพ็กเกจทัวร์ญี่ปุ่น เกาหลี ไต้หวัน และทั่วโลก",
        "url": "{{url('/')}}",
        "logo": "{{asset('frontend/images/logo.png')}}",
        "image": "{{asset('frontend/images/logo.png')}}",
        "telephone": "+66-2-xxx-xxxx",
        "email": "info@nexttripholiday.com",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "TH",
            "addressLocality": "Bangkok",
            "addressRegion": "Bangkok"
        },
        "sameAs": [
            "https://www.facebook.com/nexttripholiday",
            "https://www.instagram.com/nexttripholiday",
            "https://line.me/R/ti/p/nexttripholiday"
        ],
        "offers": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "TravelPackage",
                    "name": "ทัวร์ญี่ปุ่น",
                    "description": "แพ็กเกจทัวร์ญี่ปุ่นราคาดี บินตรง โรงแรมคุณภาพ"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "TravelPackage",
                    "name": "ทัวร์เกาหลี",
                    "description": "แพ็กเกจทัวร์เกาหลีใต้ ช้อปปิ้ง ชิมอาหาร เที่ยวครบ"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "TravelPackage",
                    "name": "ทัวร์ไต้หวัน",
                    "description": "แพ็กเกจทัวร์ไต้หวัน อาหารอร่อย ธรรมชาติสวยงาม"
                }
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "แคตตาล็อกทัวร์",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Product",
                        "name": "ทัวร์ต่างประเทศ"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="/public/manifest.json">
    <meta name="theme-color" content="#f25c05">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="NextTrip">
</head>

<body>
    <!-- Header -->
    @include("frontend.layout.inc_topmenu")
    
    <!-- Hero Section -->
    <section class="hero-container" id="hero">
        @if(isset($slide) && count($slide) > 0)
            @foreach($slide as $index => $s)
            <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
                <picture>
                    <source media="(max-width: 768px)" srcset="{{asset($s->img_mobile ?? $s->img)}}">
                    <img src="{{asset($s->img)}}" 
                         alt="{{$s->name ?? 'ทัวร์ต่างประเทศ Next Trip Holiday'}}"
                         width="1200" 
                         height="400"
                         {{ $index === 0 ? 'fetchpriority=high' : 'loading=lazy' }}>
                </picture>
                @if($s->detail)
                <div class="hero-caption">
                    {!! $s->detail !!}
                </div>
                @endif
            </div>
            @endforeach
        @else
            <div class="hero-slide active">
                <img src="{{asset('frontend/images/default-hero.jpg')}}" 
                     alt="Next Trip Holiday" 
                     width="1200" 
                     height="400"
                     fetchpriority="high">
            </div>
        @endif
    </section>
    
    <!-- Search Section -->
    <section class="search-container">
        <div class="search-box loading" id="search-box">
            <h2 style="margin: 0 0 24px 0; font-size: 24px; text-align: center;">ไปเที่ยวที่ไหนดี?</h2>
            <form action="{{url('search-tour')}}" method="POST" id="searchForm">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <input type="text" 
                               class="form-control" 
                               name="search_data" 
                               placeholder="ประเทศ, เมือง, สถานที่ท่องเที่ยว"
                               autocomplete="off">
                    </div>
                    <div class="col-3">
                        <select class="form-control" name="price">
                            <option value="">ช่วงราคา</option>
                            <option value="1">ต่ำกว่า 10,000</option>
                            <option value="2">10,001-20,000</option>
                            <option value="3">20,001-30,000</option>
                            <option value="4">30,001-50,000</option>
                            <option value="5">50,001-80,000</option>
                            <option value="6">80,001 ขึ้นไป</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn-primary" style="width: 100%;">ค้นหาทัวร์</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Promotions Section -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>โปรโมชั่นยอดฮิต</h2>
                <p>ข้อเสนอพิเศษที่คุณไม่ควรพลาด</p>
            </div>
            
            <div class="row" id="promotions-grid">
                @if(isset($ads) && count($ads) > 0)
                    @foreach($ads->take(4) as $index => $ad)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{asset($ad->img)}}" 
                                 alt="{{$ad->name ?? 'โปรโมชั่นทัวร์'}}"
                                 class="card-img"
                                 width="300"
                                 height="200"
                                 {{ $index < 2 ? 'loading=eager' : 'loading=lazy' }}>
                            <div style="padding: 16px;">
                                <h3 style="margin: 0; font-size: 18px;">{{$ad->name ?? 'โปรโมชั่นพิเศษ'}}</h3>
                                @if($ad->link)
                                <a href="{{$ad->link}}" 
                                   target="_blank" 
                                   style="display: inline-block; margin-top: 12px; color: #f25c05;">
                                   ดูรายละเอียด →
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    
    <!-- Popular Countries -->
    <section class="section" style="background: #f8f9fa;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>ประเทศยอดนิยม</h2>
                <p>จุดหมายยอดฮิตที่คุณต้องไปกับเรา</p>
            </div>
            
            <div class="row" id="countries-grid">
                @if(isset($country) && count($country) > 0)
                    @foreach($country->take(6) as $index => $co)
                    <div class="col-4">
                        <div class="card">
                            @if($co->img_banner)
                            <img src="{{asset($co->img_banner)}}" 
                                 alt="ทัวร์ประเทศ{{$co->country_name_th}}"
                                 class="card-img"
                                 width="400"
                                 height="200"
                                 loading="lazy">
                            @endif
                            <div style="padding: 20px;">
                                <h3 style="margin: 0 0 8px 0; font-size: 20px;">{{$co->country_name_th}}</h3>
                                @php
                                    $tour_count = App\Models\Backend\TourModel::where('country_id','like','%"'.$co->id.'"%')->count();
                                @endphp
                                <p style="margin: 0; color: #666;">{{$tour_count}} โปรแกรมทัวร์</p>
                                <a href="{{url('oversea/'.$co->slug)}}" 
                                   style="display: inline-block; margin-top: 12px; color: #f25c05;">
                                   ดูทัวร์ทั้งหมด →
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    
    <!-- Popular Tours -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>ทัวร์สุดฮิต</h2>
                <p>ทัวร์ยอดนิยมที่ลูกค้าเลือกมากที่สุด</p>
            </div>
            
            <div class="row" id="tours-grid">
                @if(isset($tour_views) && count($tour_views) > 0)
                    @foreach($tour_views->take(8) as $index => $tv)
                    @php
                        $tv_country = \App\Models\Backend\CountryModel::whereIn('id',json_decode($tv->country_id,true))->first();
                    @endphp
                    <div class="col-3">
                        <div class="card">
                            <img src="{{asset($tv->image)}}" 
                                 alt="{{$tv->name}}"
                                 class="card-img"
                                 width="300"
                                 height="200"
                                 loading="lazy">
                            <div style="padding: 16px;">
                                <h3 style="margin: 0 0 8px 0; font-size: 16px; line-height: 1.4;">
                                    <a href="{{url('tour/'.$tv->slug)}}" 
                                       style="color: #333; text-decoration: none;">
                                       {{Str::limit($tv->name, 60)}}
                                    </a>
                                </h3>
                                <p style="margin: 4px 0; color: #666; font-size: 14px;">
                                    📍 {{$tv_country->country_name_th ?? ''}} | {{$tv->num_day}}
                                </p>
                                <div style="margin-top: 12px;">
                                    @if($tv->special_price > 0)
                                        @php $final_price = $tv->price - $tv->special_price; @endphp
                                        <span style="color: #f25c05; font-weight: bold; font-size: 18px;">
                                            {{number_format($final_price)}} บาท
                                        </span>
                                        <span style="text-decoration: line-through; color: #999; margin-left: 8px;">
                                            {{number_format($tv->price)}}
                                        </span>
                                    @else
                                        <span style="color: #f25c05; font-weight: bold; font-size: 18px;">
                                            {{number_format($tv->price)}} บาท
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            
            <div style="text-align: center; margin-top: 48px;">
                <a href="{{url('search-tour')}}" 
                   class="btn-primary" 
                   style="display: inline-block; text-decoration: none;">
                   ดูทัวร์ทั้งหมด
                </a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    @include("frontend.layout.inc_footer")
    
    <!-- Critical JavaScript -->
    <script>
        // Critical performance optimizations
        (function() {
            'use strict';
            
            // Immediate optimizations
            const optimize = () => {
                // Show search box
                const searchBox = document.getElementById('search-box');
                if (searchBox) {
                    searchBox.classList.remove('loading');
                    searchBox.classList.add('loaded');
                }
                
                // Force layout calculation
                document.body.offsetHeight;
            };
            
            // Run optimizations
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', optimize);
            } else {
                optimize();
            }
            
            // Hero slider functionality
            const initHeroSlider = () => {
                const slides = document.querySelectorAll('.hero-slide');
                if (slides.length <= 1) return;
                
                let currentSlide = 0;
                
                const showSlide = (index) => {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('active', i === index);
                    });
                };
                
                const nextSlide = () => {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                };
                
                // Auto-advance slides
                setInterval(nextSlide, 5000);
            };
            
            // Initialize slider when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initHeroSlider);
            } else {
                initHeroSlider();
            }
            
            // Lazy load non-critical resources
            const loadNonCritical = () => {
                // Load non-critical CSS
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = '{{asset("frontend/css/non-critical.css")}}';
                document.head.appendChild(link);
                
                // Initialize lazy loading for images
                if ('IntersectionObserver' in window) {
                    const imageObserver = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const img = entry.target;
                                if (img.dataset.src) {
                                    img.src = img.dataset.src;
                                    img.removeAttribute('data-src');
                                }
                                imageObserver.unobserve(img);
                            }
                        });
                    });
                    
                    document.querySelectorAll('img[data-src]').forEach(img => {
                        imageObserver.observe(img);
                    });
                }
            };
            
            // Load non-critical resources after main content
            window.addEventListener('load', () => {
                requestAnimationFrame(loadNonCritical);
            });
            
            // Performance monitoring
            if ('PerformanceObserver' in window) {
                try {
                    const observer = new PerformanceObserver((list) => {
                        for (const entry of list.getEntries()) {
                            if (entry.entryType === 'layout-shift' && !entry.hadRecentInput) {
                                if (entry.value > 0.1) {
                                    console.warn('High CLS detected:', entry.value);
                                }
                            }
                        }
                    });
                    observer.observe({entryTypes: ['layout-shift']});
                } catch (e) {
                    // Performance monitoring not supported
                }
            }
        })();
    </script>
    
    <!-- Additional CSS (loaded asynchronously) -->
    <style>
        /* Additional styles loaded after critical content */
        .hero-caption {
            position: absolute;
            bottom: 40px;
            left: 40px;
            right: 40px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 20px;
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        /* Responsive enhancements */
        @media (max-width: 992px) {
            .col-3 { flex: 0 0 50%; }
        }
        
        @media (max-width: 576px) {
            .section { padding: 40px 0; }
            .hero-caption { left: 20px; right: 20px; bottom: 20px; }
        }
        
        /* Performance optimizations */
        .will-change-transform {
            will-change: transform;
        }
        
        .gpu-accelerated {
            transform: translateZ(0);
        }
    </style>
    
    <!-- Performance Monitoring Script -->
    <script async>
        // Load performance script after page load
        window.addEventListener('load', function() {
            const script = document.createElement('script');
            script.src = '/public/frontend/js/performance.js';
            script.async = true;
            document.head.appendChild(script);
        });
    </script>
</body>
</html>
