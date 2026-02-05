<?php
session_start();

// فایل‌های جداگانه برای هدر و فوتر
define('HEADER_PATH', 'includes/header.php');
define('FOOTER_PATH', 'includes/footer.php');
define('STYLES_PATH', 'assets/css/styles.css');
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmokeHub | فروشگاه سیگار و لوازم جانبی</title>
    <link rel="stylesheet" href="<?php echo STYLES_PATH; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body class="dark-theme">
    <?php include(HEADER_PATH); ?>

    <main class="container">
        <!-- هیرو سکشن با افکت پویا -->
        <section class="hero-section">
            <div class="hero-background">
                <div class="particles" id="particles-js"></div>
                <div class="smoke-effect"></div>
            </div>
            
            <div class="hero-content">
                <div class="hero-text">
                    <span class="hero-badge">جدیدترین محصولات ۲۰۲۴</span>
                    <h1 class="hero-title">
                        <span class="gradient-text">SMOKE</span>
                        <span class="regular-text">HUB</span>
                    </h1>
                    <h2 class="hero-subtitle">مرکز تخصصی سیگار و لوازم جانبی</h2>
                    <p class="hero-description">
                        کشف مجموعه‌ای منحصربه‌فرد از بهترین برندهای جهانی. از سیگارهای خاص تا لوازم جانبی استایل‌ساز.
                    </p>
                    <div class="hero-cta">
                        <a href="products.php" class="btn btn-glow">
                            <span>مشاهده مجموعه</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="#trending" class="btn btn-outline-glow">
                            <span>محصولات ترند</span>
                            <i class="fas fa-fire"></i>
                        </a>
                    </div>
                </div>
                
                <div class="hero-visual">
                    <div class="floating-products">
                        <div class="product-item" style="--delay: 0s">
                            <div class="product-icon">
                                <i class="fas fa-smoking"></i>
                            </div>
                            <span class="product-label">سیگار</span>
                        </div>
                        <div class="product-item" style="--delay: 0.2s">
                            <div class="product-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <span class="product-label">فندک</span>
                        </div>
                        <div class="product-item" style="--delay: 0.4s">
                            <div class="product-icon">
                                <i class="fas fa-wind"></i>
                            </div>
                            <span class="product-label">گاز</span>
                        </div>
                        <div class="product-item" style="--delay: 0.6s">
                            <div class="product-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            <span class="product-label">اکسسوری</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="scroll-indicator">
                <span>اسکرول کن</span>
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </section>

        <!-- بخش محصولات ترند -->
        <section id="trending" class="trending-section">
            <div class="section-header">
                <h2 class="section-title">
                    <span class="title-accent">ترندترین</span>
                    <span>محصولات هفته</span>
                </h2>
                <p class="section-subtitle">محصولاتی که این روزها طرفداران زیادی دارند</p>
            </div>
            
            <div class="trending-grid">
                <div class="trending-card">
                    <div class="trending-badge">
                        <i class="fas fa-bolt"></i>
                        پرفروش
                    </div>
                    <div class="trending-image">
                        <div class="image-overlay"></div>
                        <i class="fas fa-smoking"></i>
                    </div>
                    <div class="trending-content">
                        <h3>سیگار برند جهانی</h3>
                        <p>با کیفیت و طعم بی‌نظیر</p>
                        <div class="trending-price">
                            <span class="current-price">۱۵۰,۰۰۰ تومان</span>
                            <span class="old-price">۱۷۵,۰۰۰ تومان</span>
                        </div>
                        <a href="#" class="btn btn-small">افزودن به سبد</a>
                    </div>
                </div>
                
                <div class="trending-card">
                    <div class="trending-badge">
                        <i class="fas fa-star"></i>
                        جدید
                    </div>
                    <div class="trending-image">
                        <div class="image-overlay"></div>
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="trending-content">
                        <h3>فندک طرح دار</h3>
                        <p>مقاوم و با طراحی مدرن</p>
                        <div class="trending-price">
                            <span class="current-price">۸۹,۰۰۰ تومان</span>
                        </div>
                        <a href="#" class="btn btn-small">افزودن به سبد</a>
                    </div>
                </div>
                
                <div class="trending-card">
                    <div class="trending-badge">
                        <i class="fas fa-gem"></i>
                        خاص
                    </div>
                    <div class="trending-image">
                        <div class="image-overlay"></div>
                        <i class="fas fa-wind"></i>
                    </div>
                    <div class="trending-content">
                        <h3>گاز درجه یک</h3>
                        <p>با طول عمر بالا</p>
                        <div class="trending-price">
                            <span class="current-price">۴۵,۰۰۰ تومان</span>
                        </div>
                        <a href="#" class="btn btn-small">افزودن به سبد</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- دسته‌بندی محصولات -->
        <section class="categories-section">
            <div class="section-header">
                <h2 class="section-title">
                    <span>دسته‌بندی‌های</span>
                    <span class="title-accent">محصولات</span>
                </h2>
            </div>
            
            <div class="categories-grid">
                <a href="products.php?category=cigarettes" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-smoking"></i>
                    </div>
                    <div class="category-content">
                        <h3>سیگار</h3>
                        <p>انواع برندهای خارجی و داخلی</p>
                        <span class="category-count">۴۲ محصول</span>
                    </div>
                    <div class="category-hover">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </a>
                
                <a href="products.php?category=lighters" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="category-content">
                        <h3>فندک</h3>
                        <p>طرح‌های مدرن و کلاسیک</p>
                        <span class="category-count">۲۸ محصول</span>
                    </div>
                    <div class="category-hover">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </a>
                
                <a href="products.php?category=gas" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-gas-pump"></i>
                    </div>
                    <div class="category-content">
                        <h3>گاز مخصوص</h3>
                        <p>با کیفیت و ایمنی بالا</p>
                        <span class="category-count">۱۵ محصول</span>
                    </div>
                    <div class="category-hover">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </a>
                
                <a href="products.php?category=accessories" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="category-content">
                        <h3>اکسسوری</h3>
                        <p>جاسیگاری و لوازم جانبی</p>
                        <span class="category-count">۳۶ محصول</span>
                    </div>
                    <div class="category-hover">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </a>
            </div>
        </section>

        <!-- بنر تبلیغاتی -->
        <section class="promo-banner">
            <div class="banner-content">
                <h2 class="banner-title">تخفیف‌های ویژه آخر هفته</h2>
                <p class="banner-text">تا ۴۰٪ تخفیف روی محصولات منتخب</p>
                <div class="countdown">
                    <div class="countdown-item">
                        <span class="countdown-number" id="days">۰۲</span>
                        <span class="countdown-label">روز</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="hours">۱۲</span>
                        <span class="countdown-label">ساعت</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="minutes">۴۵</span>
                        <span class="countdown-label">دقیقه</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="seconds">۳۰</span>
                        <span class="countdown-label">ثانیه</span>
                    </div>
                </div>
                <a href="products.php?discount=true" class="btn btn-glow">مشاهده تخفیف‌ها</a>
            </div>
        </section>

        <!-- بخش عضویت -->
        <section class="membership-section">
            <div class="membership-card">
                <div class="membership-content">
                    <h2 class="membership-title">عضو ویژه شوید</h2>
                    <p class="membership-text">
                        با عضویت ویژه از <span class="highlight">۱۰٪ تخفیف دائمی</span>، 
                        <span class="highlight">ارسال رایگان</span> و 
                        <span class="highlight">دسترسی زودتر</span> به محصولات جدید بهره‌مند شوید.
                    </p>
                    <div class="membership-features">
                        <div class="feature">
                            <i class="fas fa-bolt"></i>
                            <span>ارسال سریع</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-gem"></i>
                            <span>تخفیف ویژه</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-crown"></i>
                            <span>پشتیبانی VIP</span>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <div class="user-status">
                            <i class="fas fa-check-circle"></i>
                            <span>شما عضو ویژه هستید!</span>
                        </div>
                    <?php else: ?>
                        <a href="register.php?plan=vip" class="btn btn-glow">
                            <span>عضویت ویژه</span>
                            <i class="fas fa-crown"></i>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="membership-visual">
                    <div class="vip-badge">
                        <i class="fas fa-crown"></i>
                        <span>VIP</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include(FOOTER_PATH); ?>
    
    <!-- کتابخانه Particles.js برای افکت پس‌زمینه -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>