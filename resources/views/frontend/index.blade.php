<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Trip Holiday - จองทัวร์ออนไลน์ ทัวร์ในประเทศ ต่างประเทศ</title>
    <meta name="description" content="จองทัวร์ออนไลน์ ราคาดี บริการดี ทัวร์ในประเทศและต่างประเทศ ญี่ปุ่น เกาหลี ยุโรป อเมริกา">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    
    <!-- DNS Prefetch for External Resources -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <!-- Critical CSS Inline -->
    <style>
        /* Critical Above-the-fold CSS */
        * {
            font-family: 'Kanit', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        body {
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }
        
        .hero-text {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            color: rgba(255,255,255,0.9);
            margin-bottom: 30px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        
        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 15px;
        }
        
        @media (max-width: 768px) {
            .col-lg-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .hero-gradient {
                min-height: 70vh;
            }
        }
        
        .btn-primary-custom {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 500;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            color: white;
        }
    </style>
    
    <!-- Load non-critical CSS asynchronously -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></noscript>
    
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
    
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap"></noscript>
    
    <style>
        * {
            font-family: 'Kanit', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            padding-top: 100px;
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            top: 10%;
            left: 10%;
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            top: 20%;
            right: 10%;
            width: 60px;
            height: 60px;
            background: white;
            transform: rotate(45deg);
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            bottom: 30%;
            left: 5%;
            width: 100px;
            height: 100px;
            background: white;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .search-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin-top: -80px;
            position: relative;
            z-index: 10;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .tour-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .tour-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .tour-image {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .tour-card:hover .tour-image {
            transform: scale(1.1);
        }
        
        .price-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
        }
        
        .btn-primary-custom {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            background: linear-gradient(45deg, #5a6fd8, #6a42a0);
        }
        
        .btn-book {
            background: linear-gradient(45deg, #ff9a9e, #fecfef);
            color: #333;
            border: none;
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.4);
            color: #333;
        }
        
        .feature-box {
            text-align: center;
            padding: 40px 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: white;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 100%;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 80px;
            color: #667eea;
            opacity: 0.3;
            font-family: serif;
        }
        
        .stars {
            color: #ffd700;
            font-size: 18px;
            margin-bottom: 15px;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-text {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 30px;
        }
        
        @media (max-width: 768px) {
            .hero-text {
                font-size: 2.5rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .search-container {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-gradient">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <div class="container hero-content">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="hero-text">เริ่มต้นการเดินทาง<br>ที่ไม่มีวันลืม</h1>
                    <p class="hero-subtitle">ค้นพบโลกใบใหม่กับแพ็กเกจทัวร์ที่ออกแบบมาเพื่อคุณโดยเฉพาะ<br>บริการระดับพรีเมียม ราคาที่คุ้มค่า</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-primary-custom btn-lg">
                            <i class="fas fa-search me-2"></i>เริ่มค้นหาทัวร์
                        </button>
                        <button class="btn btn-outline-light btn-lg">
                            <i class="fas fa-play me-2"></i>ดูวิดีโอ
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 500 400'%3E%3Cdefs%3E%3ClinearGradient id='bg' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23667eea'/%3E%3Cstop offset='100%25' style='stop-color:%23764ba2'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='500' height='400' fill='url(%23bg)' opacity='0.1'/%3E%3Ctext x='250' y='200' text-anchor='middle' fill='white' font-size='24' font-family='Arial'%3ETravel Illustration%3C/text%3E%3C/svg%3E" alt="Travel Hero" class="img-fluid" style="max-height: 400px; border-radius: 20px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <div class="container">
        <div class="search-container">
            <h3 class="text-center mb-4">ค้นหาทัวร์ในฝันของคุณ</h3>
            <form class="row g-3">
                <div class="col-md-3">
                    <label class="form-label fw-semibold">จุดหมายปลายทาง</label>
                    <select class="form-select form-select-lg">
                        <option value="">เลือกประเทศ/เมือง</option>
                        <option value="japan">🇯🇵 ญี่ปุ่น</option>
                        <option value="korea">🇰🇷 เกาหลีใต้</option>
                        <option value="china">🇨🇳 จีน</option>
                        <option value="thailand">🇹🇭 ไทย</option>
                        <option value="singapore">🇸🇬 สิงคโปร์</option>
                        <option value="vietnam">🇻🇳 เวียดนาม</option>
                        <option value="europe">🇪🇺 ยุโรป</option>
                        <option value="usa">🇺🇸 อเมริกา</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">วันที่ออกเดินทาง</label>
                    <input type="date" class="form-control form-control-lg" min="2025-08-08">
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">จำนวนวัน</label>
                    <select class="form-select form-select-lg">
                        <option value="">เลือก</option>
                        <option value="1-3">1-3 วัน</option>
                        <option value="4-6">4-6 วัน</option>
                        <option value="7-10">7-10 วัน</option>
                        <option value="10+">10+ วัน</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">งบประมาณ</label>
                    <select class="form-select form-select-lg">
                        <option value="">เลือกงบ</option>
                        <option value="0-15000">ต่ำกว่า 15,000</option>
                        <option value="15000-30000">15,000-30,000</option>
                        <option value="30000-50000">30,000-50,000</option>
                        <option value="50000-100000">50,000-100,000</option>
                        <option value="100000+">มากกว่า 100,000</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">&nbsp;</label>
                    <button type="submit" class="btn btn-primary-custom btn-lg w-100">
                        <i class="fas fa-search me-2"></i>ค้นหาทัวร์
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Featured Tours -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ทัวร์ยอดนิยม</h2>
                <p class="lead text-muted">แพ็กเกจทัวร์ที่ได้รับความนิยมสูงสุดจากลูกค้า</p>
            </div>
            
            <div class="row g-4">
                <!-- Tour Card 1 - Japan -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='japan' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23ff6b6b'/%3E%3Cstop offset='100%25' style='stop-color:%23ee5a24'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23japan)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇯🇵 ญี่ปุ่น%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์ญี่ปุ่น">
                            <div class="price-badge">฿35,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์ญี่ปุ่น โตเกียว โอซาก้า</h5>
                            <p class="card-text text-muted">6 วัน 4 คืน | ชมซากุระ ช้อปปิ้ง ชิมอาหารญี่ปุ่นแท้ ขึ้นภูเขาไฟฟูจิ</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.8)</small>
                                </div>
                                <small class="text-muted">เหลือ 5 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">วีซ่าฟรี</span>
                                <span class="badge bg-light text-dark">ไกด์ไทย</span>
                                <span class="badge bg-light text-dark">ประกันครอบคลุม</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 2 - Korea -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='korea' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2374b9ff'/%3E%3Cstop offset='100%25' style='stop-color:%230984e3'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23korea)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇰🇷 เกาหลี%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์เกาหลี">
                            <div class="price-badge">฿28,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์เกาหลี โซล ปูซาน</h5>
                            <p class="card-text text-muted">5 วัน 3 คืน | เมียงดง ฮงแด ชมใบไม้เปลี่ยนสี เกาะนามิ</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.9)</small>
                                </div>
                                <small class="text-muted">เหลือ 8 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">K-Pop</span>
                                <span class="badge bg-light text-dark">ช้อปปิ้ง</span>
                                <span class="badge bg-light text-dark">อาหารเกาหลี</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 3 - Europe -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='europe' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2300b894'/%3E%3Cstop offset='100%25' style='stop-color:%2300a085'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23europe)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇪🇺 ยุโรป%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์ยุโรป">
                            <div class="price-badge">฿89,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์ยุโรป 5 ประเทศ</h5>
                            <p class="card-text text-muted">9 วัน 6 คืน | ฝรั่งเศส เยอรมนี อิตาลี สวิตเซอร์แลนด์ ออสเตรีย</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.7)</small>
                                </div>
                                <small class="text-muted">เหลือ 3 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">หอไอเฟล</span>
                                <span class="badge bg-light text-dark">อัลป์ส</span>
                                <span class="badge bg-light text-dark">วีซ่าเชงเก้น</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 4 - Singapore -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='singapore' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23a29bfe'/%3E%3Cstop offset='100%25' style='stop-color:%236c5ce7'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23singapore)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇸🇬 สิงคโปร์%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์สิงคโปร์">
                            <div class="price-badge">฿18,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์สิงคโปร์ มาเลเซีย</h5>
                            <p class="card-text text-muted">4 วัน 3 คืน | USS เซนโตซ่า การ์เด้น บาย เดอะ เบย์ เกนติ้งไฮแลนด์</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.6)</small>
                                </div>
                                <small class="text-muted">เหลือ 12 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">ไม่ต้องวีซ่า</span>
                                <span class="badge bg-light text-dark">สวนสนุก</span>
                                <span class="badge bg-light text-dark">ครอบครัว</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 5 - Thailand -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='thailand' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23fdcb6e'/%3E%3Cstop offset='100%25' style='stop-color:%23e17055'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23thailand)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇹🇭 เชียงใหม่%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์เชียงใหม่">
                            <div class="price-badge">฿8,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์เชียงใหม่ เชียงราย</h5>
                            <p class="card-text text-muted">3 วัน 2 คืน | วัดร่องขุ่น ดอยอินทนนท์ ล่องแก่ง ช้างแคมป์</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.5)</small>
                                </div>
                                <small class="text-muted">เหลือ 15 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">ธรรมชาติ</span>
                                <span class="badge bg-light text-dark">วัฒนธรรม</span>
                                <span class="badge bg-light text-dark">ในประเทศ</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 6 - Vietnam -->
                <div class="col-lg-4 col-md-6">
                    <div class="card tour-card">
                        <div class="position-relative overflow-hidden">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='vietnam' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2355a3ff'/%3E%3Cstop offset='100%25' style='stop-color:%230984e3'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23vietnam)'/%3E%3Ctext x='200' y='125' text-anchor='middle' fill='white' font-size='18' font-family='Arial'%3E🇻🇳 เวียดนาม%3C/text%3E%3C/svg%3E" class="card-img-top tour-image" alt="ทัวร์เวียดนาม">
                            <div class="price-badge">฿14,900</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ทัวร์เวียดนาม ฮานอย ฮาลอง</h5>
                            <p class="card-text text-muted">4 วัน 3 คืน | อ่าวฮาลอง ถ้ำสวรรค์ ถนนรถไฟ โฮจิมินห์</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-warning">★★★★★</small>
                                    <small class="text-muted">(4.4)</small>
                                </div>
                                <small class="text-muted">เหลือ 7 ที่นั่ง</small>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="badge bg-light text-dark">ประหยัด</span>
                                <span class="badge bg-light text-dark">ธรรมชาติ</span>
                                <span class="badge bg-light text-dark">อาหารอร่อย</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-book w-100">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-plus me-2"></i>ดูทัวร์ทั้งหมด (150+ แพ็กเกจ)
                </button>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ทำไมต้องเลือกเรา</h2>
                <p class="lead text-muted">เพราะเราใส่ใจในทุกรายละเอียดของการเดินทางของคุณ</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5 class="fw-bold">ปลอดภัย เชื่อถือได้</h5>
                        <p class="text-muted">ได้รับใบอนุญาตธุรกิจนำเที่ยวอย่างถูกต้อง พร้อมประกันการเดินทางครอบคลุม</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h5 class="fw-bold">ราคาดี โปรโมชั่นพิเศษ</h5>
                        <p class="text-muted">ราคาคุ้มค่าที่สุด มีโปรโมชั่นพิเศษตลอดทั้งปี ไม่มีค่าใช้จ่ายแอบแฝง</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5 class="fw-bold">บริการ 24/7</h5>
                        <p class="text-muted">ทีมงานมืออาชีพพร้อมให้คำปรึกษาและดูแลตลอด 24 ชั่วโมง ทุกวันไม่เว้นวันหยุด</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5 class="fw-bold">ไกด์มืออาชีพ</h5>
                        <p class="text-muted">ไกด์ท้องถิ่นที่มีประสบการณ์สูง พูดภาษาไทยได้ มีความรู้เรื่องวัฒนธรรมและประวัติศาสตร์</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ลูกค้าพูดถึงเรา</h2>
                <p class="lead text-muted">ความประทับใจและรีวิวจริงจากลูกค้าที่เดินทางกับเรา</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="mb-4">"ทริปญี่ปุ่นครั้งนี้ประทับใจมากค่ะ ไกด์พี่เอ๋น่ารักมาก อธิบายชัดเจน พาไปกินของอร่อยๆ ช้อปปิ้งได้เต็มที่ โรงแรมดี ขอบคุณ Next Trip Holiday มากค่ะ"</p>
                        <div class="d-flex align-items-center">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%23ff9a9e'/%3E%3Ctext x='25' y='30' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3E👩%3C/text%3E%3C/svg%3E" alt="ลูกค้า" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">คุณสมใจ ใจดี</h6>
                                <small class="text-muted">ทัวร์ญี่ปุ่น 6 วัน 4 คืน</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="mb-4">"เกาหลีสวยมาก! K-Pop ฟินสุดๆ ได้ไปเมียงดงช้อปปิ้งเต็มที่ ไกด์พาไปกินบาร์บีคิวเกาหลีแท้ๆ อร่อยมาก ราคาคุ้มค่ามากๆ จะกลับมาใช้บริการอีกแน่นอน"</p>
                        <div class="d-flex align-items-center">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%2374b9ff'/%3E%3Ctext x='25' y='30' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3E👨%3C/text%3E%3C/svg%3E" alt="ลูกค้า" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">คุณมานะ รักเที่ยว</h6>
                                <small class="text-muted">ทัวร์เกาหลี 5 วัน 3 คืน</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="mb-4">"ยุโรป 5 ประเทศ ได้เที่ยวครบทุกที่สำคัญ หอไอเฟล เทือกเขาแอลป์ส เวนิส โรม สวยงามมาก ทีมงานดูแลดีตลอดการเดินทาง ไม่มีปัญหาอะไรเลย"</p>
                        <div class="d-flex align-items-center">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%2300b894'/%3E%3Ctext x='25' y='30' text-anchor='middle' fill='white' font-size='14' font-family='Arial'%3E👩%3C/text%3E%3C/svg%3E" alt="ลูกค้า" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">คุณวิมล ชอบเที่ยว</h6>
                                <small class="text-muted">ทัวร์ยุโรป 9 วัน 6 คืน</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">พร้อมเริ่มต้นการเดินทางในฝันแล้วหรือยัง?</h2>
                    <p class="lead mb-4">ติดต่อเราวันนี้ เพื่อวางแผนและจองทัวร์ในฝันของคุณ<br>ทีมงานมืออาชีพพร้อมให้คำปรึกษาฟรี</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="tel:02-123-4567" class="btn btn-light btn-lg">
                            <i class="fas fa-phone me-2"></i>โทร 02-123-4567
                        </a>
                        <a href="https://line.me/ti/p/@nexttripholiday" class="btn btn-success btn-lg">
                            <i class="fab fa-line me-2"></i>Add Line @nexttripholiday
                        </a>
                        <a href="mailto:info@nexttripholiday.com" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope me-2"></i>ส่งอีเมล
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Next Trip Holiday</h5>
                    <p class="text-muted">ผู้นำด้านการท่องเที่ยวที่คุณไว้วางใจ มีประสบการณ์กว่า 10 ปี ในการให้บริการทัวร์คุณภาพ</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-line fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">ทัวร์ยอดนิยม</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">ทัวร์ญี่ปุ่น</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">ทัวร์เกาหลี</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">ทัวร์ยุโรป</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">ทัวร์จีน</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">ทัวร์ไทย</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">บริการ</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">จองทัวร์</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">จองตั้วเครื่องบิน</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">จองโรงแรม</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">ประกันการเดินทาง</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">วีซ่า</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="fw-bold mb-3">ติดต่อเรา</h6>
                    <div class="text-muted">
                        <p><i class="fas fa-map-marker-alt me-2"></i>123 ถนนสุขุมวิท แขวงคลองตัน เขตคลองตัน กรุงเทพฯ 10110</p>
                        <p><i class="fas fa-phone me-2"></i>02-123-4567, 088-123-4567</p>
                        <p><i class="fas fa-envelope me-2"></i>info@nexttripholiday.com</p>
                        <p><i class="fab fa-line me-2"></i>@nexttripholiday</p>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; 2025 Next Trip Holiday. สงวนลิขสิทธิ์.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-muted text-decoration-none me-3">นโยบายความเป็นส่วนตัว</a>
                    <a href="#" class="text-muted text-decoration-none">เงื่อนไขการใช้งาน</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS - Load at bottom for performance -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    
    <!-- Optimized JavaScript -->
    <script>
        // Critical performance optimizations
        
        // 1. Defer non-critical animations
        document.addEventListener('DOMContentLoaded', function() {
            // Set minimum date for date input
            const dateInput = document.querySelector('input[type="date"]');
            if (dateInput) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);
            }
            
            // Lazy load animations after initial render
            setTimeout(function() {
                initAnimations();
            }, 100);
        });
        
        // 2. Optimized smooth scrolling
        function initSmoothScrolling() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }
        
        // 3. Optimized scroll animations with throttling
        function initAnimations() {
            let isThrottled = false;
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                if (isThrottled) return;
                
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target); // Stop observing once animated
                    }
                });
                
                // Throttle observations
                isThrottled = true;
                setTimeout(() => isThrottled = false, 100);
            }, observerOptions);

            // Apply initial styles and observe elements
            document.querySelectorAll('.tour-card, .feature-box, .testimonial-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
            
            // Initialize smooth scrolling
            initSmoothScrolling();
        }
        
        // 4. Preload critical resources
        function preloadCriticalResources() {
            const criticalImages = [
                'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 250\'...'
            ];
            
            criticalImages.forEach(src => {
                const link = document.createElement('link');
                link.rel = 'preload';
                link.as = 'image';
                link.href = src;
                document.head.appendChild(link);
            });
        }
        
        // 5. Image lazy loading with better performance
        function setupLazyLoading() {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy-placeholder');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });
                
                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        }
        
        // Initialize performance optimizations
        window.addEventListener('load', function() {
            preloadCriticalResources();
            setupLazyLoading();
        });
        
        // Service Worker for caching (optional enhancement)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').catch(function() {
                    // Silent fail for service worker
                });
            });
        }
    </script>
    
    <!-- Critical Resource Hints for next page loads -->
    <link rel="prefetch" href="/tour-detail">
    <link rel="prefetch" href="/search-results">
    
</body>
</html>