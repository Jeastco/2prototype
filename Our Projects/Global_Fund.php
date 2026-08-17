<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Global Fund</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ADS Nyanza - Empowering Communities" name="description">
    <!-- Preconnect to critical third-party domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon - Optimized with early loading -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Critical CSS inlined -->
    <style>
        /* Critical CSS - above the fold */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            font-display: swap;
            visibility: visible;
        }
        
        #spinner { 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        
        .hero-section {
            width: 100%;
            height: 75vh;
            min-height: 500px;
            max-height: 800px;
            position: relative;
            overflow: hidden;
            background: #1a1a2e; /* fallback color */
        }
        
        .hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            color: #fff;
            z-index: 2;
        }
        
        .btn-primary {
            background-color: #28A745;
            border-color: #28A745;
            transition: all 0.3s ease;
            display: inline-block;
            font-weight: 500;
            text-align: center;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: white;
            text-decoration: none;
        }
        
        /* Lazy loading indicator */
        img[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s ease-in;
        }
        
        img[loading="lazy"].loaded {
            opacity: 1;
        }
    </style>

    <!-- Non-critical CSS loaded asynchronously -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"></noscript>
    
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"></noscript>

    <!-- Defer non-critical CSS files -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="lib/animate/animate.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="css/style.css" rel="stylesheet" media="print" onload="this.media='all'">
    
    <!-- Optimized Bootstrap Icons (single version) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"></noscript>

   
<!-- ================= TOPBAR ================= -->
<div class="d-none d-lg-flex topbar align-items-center" style="height: auto; min-height: 36px; background-color: #28A745; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
    <div class="container-fluid">
        <div class="d-flex align-items-center flex-wrap" style="gap: 1.5rem; padding: 5px 15px;">
            <small style="font-size: 11px; color: #ffffff; display: inline-flex; align-items: center;">
                <i class="bi bi-map me-2" style="color: #ffffff;"></i> 
                ACK St. Peters Church Compound, Kisumu
            </small>
            <small style="font-size: 11px; color: #ffffff; display: inline-flex; align-items: center;">
                <i class="bi bi-telephone me-2" style="color: #ffffff;"></i> 
                +254 726947044
            </small>
            <small style="font-size: 11px; color: #ffffff; display: inline-flex; align-items: center;">
                <i class="bi bi-envelope me-2" style="color: #ffffff;"></i> 
                ads@ads-nyanza.org
            </small>
        </div>
    </div>
</div>

<div class="d-lg-none topbar align-items-center" style="height: auto; min-height: auto; padding: 0.5rem 0.75rem; background-color: #28A745; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
    <div class="container-fluid p-0">
        <div class="d-flex flex-row flex-wrap justify-content-center" style="gap: 0.75rem;">
            <small style="font-size: 10px; color: #ffffff; display: inline-flex; align-items: center; white-space: nowrap;">
                <i class="bi bi-map me-1" style="color: #ffffff;"></i> 
                ACK St. Peters, Kisumu
            </small>
            <small style="font-size: 10px; color: #ffffff; display: inline-flex; align-items: center; white-space: nowrap;">
                <i class="bi bi-telephone me-1" style="color: #ffffff;"></i> 
                +254 726947044
            </small>
            <small style="font-size: 10px; color: #ffffff; display: inline-flex; align-items: center; white-space: nowrap;">
                <i class="bi bi-envelope me-1" style="color: #ffffff;"></i> 
                ads@ads-nyanza.org
            </small>
        </div>
    </div>
</div>
<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container-fluid">
        <a href="/updated/index" class="navbar-brand p-0 d-flex align-items-center">
            <img src="/updated/img/ads.png" alt="ADS-NYANZA Logo" height="50" loading="eager" style="height: 50px; width: auto; max-width: 100%;">
        </a>
        
        <button class="navbar-toggler" type="button" onclick="toggleNavbar()" style="border: 1px solid #28A745; padding: 0.25rem 0.5rem; background: transparent;">
            <span class="navbar-toggler-icon" style="background-image: url(&quot;data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%2328A745' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E&quot;);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0 align-items-lg-center" style="gap: 0.25rem;">
                <li class="nav-item"><a href="/updated/index" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/updated/About_Us" class="nav-link">About Us</a></li>
                
                <!-- Our Programs Dropdown - Two Columns -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" onclick="toggleDropdown(event, 'programsDropdown')">Our Programs</a>
                    <div class="dropdown-menu two-column" id="programsDropdown">
                        <div class="dropdown-column">
                            <h6 class="dropdown-heading">Our Projects</h6>
                            <a href="/updated/Our%20Projects/ecd">Early Childhood Development</a>
                            <a href="/updated/Our%20Projects/pesp">Peoples Empowerment for Sustainability Project</a>
                            <a href="/updated/Our%20Projects/icrp">Integrated Climate Resilience Project</a>
                            <a href="/updated/Our%20Projects/kaliedoscope">Kaliedoscope Project</a>
                        </div>
                        <div class="dropdown-column">
                            <h6 class="dropdown-heading">Our Projects</h6>
                            <a href="/updated/Our%20Projects/Global_Fund">Global Fund</a>
                            <a href="/updated/Our%20Projects/wkpi">West Kenya Peace Initiative</a>
                            <a href="/updated/Our%20Projects/emergency">Emergency Response</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="/updated/events" class="nav-link">Our Events</a></li>

                <!-- Engage with Us Dropdown - Two Columns -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" onclick="toggleDropdown(event, 'engageDropdown')">Engage with Us</a>
                    <div class="dropdown-menu two-column" id="engageDropdown">
                        <div class="dropdown-column">
                            <h6 class="dropdown-heading">Media & Resources</h6>
                            <a href="/updated/gallery">Gallery</a>
                            <a href="/updated/Our_Blog">Our Blog</a>
                            <a href="/updated/publications">Publications</a>
                            <a href="/updated/testimonials">Testimonials</a>
                        </div>
                        <div class="dropdown-column">
                            <h6 class="dropdown-heading">Get Involved</h6>
                            <a href="/updated/donate">Donate</a>
                            <a href="/updated/volunteer">Volunteer</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="/updated/careers" class="nav-link">Careers</a></li>
                <li class="nav-item"><a href="/updated/tenders" class="nav-link">Tenders</a></li>
                <li class="nav-item"><a href="/updated/contact" class="nav-link">Contact Us</a></li>
                
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a href="https://ess.ads-nyanza.org/" class="btn btn-sm rounded-pill staff-portal-btn">Staff Portal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* ===== NAVBAR STYLES ===== */
.navbar {
    padding: 0.5rem 1rem;
}

.navbar-light .navbar-nav .nav-link {
    color: #333333 !important;
    font-weight: 500;
    transition: color 0.3s ease;
    font-size: 0.9rem;
    padding: 0.5rem 0.75rem !important;
    cursor: pointer;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    color: #28A745 !important;
}

.navbar-toggler:focus {
    outline: none !important;
    box-shadow: none !important;
}

/* ===== DROPDOWN STYLES ===== */
.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(15px);
    min-width: 580px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
    padding: 1.5rem 2rem;
    z-index: 999;
    border: 1px solid rgba(0, 0, 0, 0.04);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.dropdown-menu.show {
    display: flex !important;
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}

/* Two Column Layout */
.dropdown-menu.two-column {
    display: none;
    gap: 2rem;
}

.dropdown-menu.two-column.show {
    display: flex !important;
}

.dropdown-column {
    flex: 1;
    min-width: 0;
}

.dropdown-heading {
    font-size: 0.7rem;
    font-weight: 700;
    color: #28A745;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 0.75rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid rgba(40, 167, 69, 0.12);
    position: relative;
}

.dropdown-heading::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 30px;
    height: 2px;
    background: #28A745;
}

.dropdown-menu a {
    display: block;
    padding: 0.5rem 0;
    color: #555;
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
    padding-left: 0;
}

/* Underline animation */
.dropdown-menu a::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #28A745;
    transition: width 0.3s ease;
}

.dropdown-menu a:hover {
    color: #28A745;
    padding-left: 12px;
}

.dropdown-menu a:hover::before {
    width: 25px;
}

/* Staggered animation for menu items */
.dropdown-menu.show .dropdown-column:first-child a {
    animation: slideIn 0.4s ease forwards;
}

.dropdown-menu.show .dropdown-column:first-child a:nth-child(1) { animation-delay: 0.05s; }
.dropdown-menu.show .dropdown-column:first-child a:nth-child(2) { animation-delay: 0.10s; }
.dropdown-menu.show .dropdown-column:first-child a:nth-child(3) { animation-delay: 0.15s; }
.dropdown-menu.show .dropdown-column:first-child a:nth-child(4) { animation-delay: 0.20s; }

.dropdown-menu.show .dropdown-column:last-child a {
    animation: slideIn 0.4s ease forwards;
}

.dropdown-menu.show .dropdown-column:last-child a:nth-child(1) { animation-delay: 0.10s; }
.dropdown-menu.show .dropdown-column:last-child a:nth-child(2) { animation-delay: 0.15s; }
.dropdown-menu.show .dropdown-column:last-child a:nth-child(3) { animation-delay: 0.20s; }

/* Dropdown heading animation */
.dropdown-menu.show .dropdown-heading {
    animation: fadeIn 0.4s ease forwards;
}

.dropdown-menu.show .dropdown-heading:nth-child(1) { animation-delay: 0.05s; }
.dropdown-menu.show .dropdown-heading:nth-child(2) { animation-delay: 0.08s; }

@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateX(-15px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-5px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Dropdown Toggle Arrow */
.dropdown-toggle::after {
    content: ' ▾';
    font-size: 0.6rem;
    margin-left: 4px;
    color: #888;
    transition: transform 0.3s ease;
}

.dropdown.open .dropdown-toggle::after {
    transform: rotate(180deg);
}

/* ===== STAFF PORTAL BUTTON ===== */
.staff-portal-btn {
    background: white;
    border: 2px solid #28A745;
    color: #28A745;
    border-radius: 50px;
    padding: 0.35rem 1.25rem;
    transition: all 0.3s ease;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
}

.staff-portal-btn:hover {
    background: #28A745;
    color: white;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.25);
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 992px) {
    .dropdown-menu.two-column {
        position: static !important;
        transform: none !important;
        opacity: 1 !important;
        min-width: unset !important;
        width: 100% !important;
        flex-direction: column !important;
        gap: 0.5rem !important;
        padding: 0.75rem 1rem !important;
        box-shadow: none !important;
        border: none !important;
        background: transparent !important;
        display: none !important;
    }
    
    .dropdown-menu.two-column.show {
        display: block !important;
    }
    
    .dropdown-menu.two-column .dropdown-column {
        flex: none;
    }
    
    .dropdown-heading {
        font-size: 0.65rem;
        margin-bottom: 0.3rem;
        padding-bottom: 0.3rem;
    }
    
    .dropdown-heading::after {
        width: 20px;
    }
    
    .dropdown-menu a {
        font-size: 0.8rem;
        padding: 0.35rem 0;
    }
    
    .dropdown-menu a::before {
        display: none;
    }
    
    .dropdown-menu a:hover {
        padding-left: 10px;
        background: rgba(40, 167, 69, 0.05);
        border-radius: 6px;
    }
    
    .navbar-nav .nav-item {
        width: 100%;
    }
    
    .navbar-nav .nav-link {
        padding: 0.6rem 0.75rem !important;
    }
    
    .dropdown-toggle::after {
        float: right;
        margin-top: 0.4rem;
    }
    
    @keyframes slideIn {
        0% { opacity: 0; transform: translateX(-10px); }
        100% { opacity: 1; transform: translateX(0); }
    }
}

@media (max-width: 576px) {
    .navbar-brand img {
        height: 40px !important;
    }
    
    .dropdown-menu a {
        font-size: 0.75rem;
        padding: 0.3rem 0;
    }
}
</style>

<script>
// ===== TOGGLE NAVBAR =====
function toggleNavbar() {
    var navbar = document.getElementById('navbarCollapse');
    if (navbar.classList.contains('show')) {
        navbar.classList.remove('show');
    } else {
        navbar.classList.add('show');
        closeAllDropdowns();
    }
}

// ===== TOGGLE DROPDOWN =====
function toggleDropdown(event, dropdownId) {
    event.preventDefault();
    event.stopPropagation();
    
    var dropdown = document.getElementById(dropdownId);
    var parentLi = dropdown.closest('.dropdown');
    var isOpen = dropdown.classList.contains('show');
    
    // Close all other dropdowns
    closeAllDropdowns();
    
    // Toggle this dropdown
    if (!isOpen) {
        dropdown.classList.add('show');
        parentLi.classList.add('open');
    }
}

// ===== CLOSE ALL DROPDOWNS =====
function closeAllDropdowns() {
    document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
        menu.classList.remove('show');
    });
    document.querySelectorAll('.dropdown').forEach(function(drop) {
        drop.classList.remove('open');
    });
}

// ===== CLOSE DROPDOWNS WHEN CLICKING OUTSIDE =====
document.addEventListener('click', function(event) {
    var isDropdown = event.target.closest('.dropdown');
    if (!isDropdown) {
        closeAllDropdowns();
    }
});

// ===== DESKTOP HOVER SUPPORT =====
if (window.innerWidth > 992) {
    document.querySelectorAll('.dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('mouseenter', function(e) {
            var toggle = this.querySelector('.dropdown-toggle');
            var menu = this.querySelector('.dropdown-menu');
            if (toggle && menu) {
                closeAllDropdowns();
                menu.classList.add('show');
                this.classList.add('open');
            }
        });
        dropdown.addEventListener('mouseleave', function(e) {
            var menu = this.querySelector('.dropdown-menu');
            if (menu) {
                menu.classList.remove('show');
                this.classList.remove('open');
            }
        });
    });
}

// ===== CLOSE DROPDOWNS ON ESCAPE KEY =====
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeAllDropdowns();
    }
});

// ===== CLOSE MOBILE NAVBAR WHEN CLICKING A LINK =====
document.querySelectorAll('#navbarCollapse .nav-link:not(.dropdown-toggle)').forEach(function(link) {
    link.addEventListener('click', function() {
        var navbar = document.getElementById('navbarCollapse');
        if (navbar.classList.contains('show')) {
            navbar.classList.remove('show');
        }
    });
});
</script>

<!-- ================= GLOBAL FUND HERO ================= -->
<section class="gf-hero-section">
    <div class="gf-hero-container">
        
        <!-- Hero Background Image -->
        <div class="gf-hero-image-wrapper">
            <img src="img/gf_landing.jpeg" alt="Global Fund - Empowering Health & Communities" class="gf-hero-image">
            <div class="gf-hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="gf-hero-content">
            <span class="gf-hero-badge">Global Health Initiative</span>
            <h5 class="gf-hero-subtitle">Empowering Health & Communities</h5>
            <h1 class="gf-hero-title">The Global Fund</h1>
            <div class="gf-hero-divider"></div>
            <p class="gf-hero-description">
                Strengthening health systems and community resilience to combat HIV, TB, and malaria while building a healthier future for all.
            </p>
            <div class="gf-hero-buttons">
                <a href="About_Us" class="gf-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="contact" class="gf-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="gf-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="gf-scroll-line">
                <div class="gf-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== GLOBAL FUND HERO - REDUCED HEIGHT ===== */
.gf-hero-section {
    position: relative;
    width: 100%;
    height: 60vh;
    min-height: 400px;
    max-height: 550px;
    overflow: hidden;
    background: #1a2b3c;
}

.gf-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.gf-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.gf-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 30%;
    transition: transform 8s ease;
}

.gf-hero-section:hover .gf-hero-image {
    transform: scale(1.05);
}

.gf-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        rgba(26, 43, 60, 0.85) 0%, 
        rgba(26, 43, 60, 0.5) 50%, 
        rgba(46, 125, 50, 0.3) 100%
    );
}

/* Hero Content */
.gf-hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 2;
    width: 90%;
    max-width: 850px;
    padding: 0 20px;
}

.gf-hero-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.85);
    color: white;
    padding: 6px 20px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    backdrop-filter: blur(10px);
}

.gf-hero-subtitle {
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    opacity: 0.85;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #ffffff;
}

.gf-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
}

.gf-hero-divider {
    width: 60px;
    height: 3px;
    background: #2ecc71;
    margin: 0 auto 1.25rem auto;
    border-radius: 3px;
}

.gf-hero-description {
    font-size: 1.1rem;
    font-weight: 400;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
    color: #ffffff;
}

.gf-hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.gf-btn-primary {
    display: inline-flex;
    align-items: center;
    background: #2e7d32;
    color: white;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.gf-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.35);
    color: white;
}

.gf-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.gf-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.gf-btn-secondary {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: white;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.4);
}

.gf-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator */
.gf-scroll-indicator {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: rgba(255, 255, 255, 0.6);
    z-index: 2;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}

.gf-scroll-indicator span {
    font-size: 0.7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
}

.gf-scroll-line {
    width: 1px;
    height: 25px;
    background: rgba(255, 255, 255, 0.2);
    position: relative;
}

.gf-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    animation: gfScrollDown 1.5s ease-in-out infinite;
}

@keyframes gfScrollDown {
    0% { top: 0; opacity: 1; }
    100% { top: 100%; opacity: 0; }
}

/* Responsive */
@media (max-width: 992px) {
    .gf-hero-title {
        font-size: 3.2rem;
    }
    
    .gf-hero-description {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .gf-hero-section {
        height: 50vh;
        min-height: 350px;
        max-height: 450px;
    }
    
    .gf-hero-title {
        font-size: 2.5rem;
    }
    
    .gf-hero-subtitle {
        font-size: 0.8rem;
    }
    
    .gf-hero-description {
        font-size: 0.95rem;
        padding: 0 10px;
    }
    
    .gf-hero-badge {
        font-size: 0.6rem;
        padding: 4px 14px;
    }
    
    .gf-btn-primary,
    .gf-btn-secondary {
        padding: 10px 24px;
        font-size: 0.8rem;
    }
}

@media (max-width: 576px) {
    .gf-hero-section {
        height: 45vh;
        min-height: 300px;
        max-height: 380px;
    }
    
    .gf-hero-title {
        font-size: 1.8rem;
    }
    
    .gf-hero-description {
        font-size: 0.85rem;
    }
    
    .gf-hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }
    
    .gf-btn-primary,
    .gf-btn-secondary {
        padding: 8px 20px;
        font-size: 0.75rem;
        width: 100%;
        max-width: 250px;
        justify-content: center;
    }
    
    .gf-hero-divider {
        width: 40px;
        height: 2px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- ======================= INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-gf">Vision 2030 Aligned</span>
            <h2 class="section-title-gf">ADS Nyanza & Kenya Red Cross: <span style="color: hsl(140, 82%, 37%);">Impact in Homa Bay</span></h2>
            <div class="title-divider-gf"></div>
            <p class="gf-description">
                Implemented in collaboration with the Ministry of Health and aligned with the KRCS-GF Performance Framework, our program works toward the realization of Vision 2030. We ensure universal access to comprehensive HIV prevention and treatment for the communities of Homa Bay County.
            </p>
            <div class="gf-highlight-box">
                <i class="bi bi-bullseye"></i>
                <div>
                    <strong>Goal:</strong> To contribute to Universal Health Coverage through comprehensive HIV prevention, treatment, and care for all.
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="gf-image-wrapper">
                <img src="img/gf_landing.jpeg" alt="Community Health Impact" class="img-fluid" onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Global+Fund'">
                <div class="gf-image-badge">
                    <i class="bi bi-star-fill"></i> Homa Bay County
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= STATS SECTION ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge-gf">Our Impact</span>
            <h2 class="section-title-gf" style="text-align: center;">Measurable <span style="color: hsl(140, 82%, 37%);">Results</span></h2>
            <div class="title-divider-gf" style="margin: 0.5rem auto 1rem auto;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px; line-height: 1.7;">
                Through our Global Fund initiatives, we have achieved significant progress in the fight against HIV and AIDS.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="gf-stat-card">
                    <div class="gf-stat-icon">
                        <i class="bi bi-graph-down"></i>
                    </div>
                    <h3 class="gf-stat-number">75%</h3>
                    <p class="gf-stat-label">Reduction in New HIV Infections</p>
                    <div class="gf-stat-description">
                        Significant decline in new HIV cases through prevention and awareness programs.
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gf-stat-card">
                    <div class="gf-stat-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h3 class="gf-stat-number">50%</h3>
                    <p class="gf-stat-label">Reduction in AIDS-Related Mortality</p>
                    <div class="gf-stat-description">
                        Improved access to treatment and care services saving lives.
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gf-stat-card">
                    <div class="gf-stat-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="gf-stat-number">25%</h3>
                    <p class="gf-stat-label">Reduction in Stigma & Discrimination</p>
                    <div class="gf-stat-description">
                        Community engagement and advocacy creating more inclusive societies.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= STRATEGIC INTERVENTIONS ======================= -->
<section class="container py-5">
    <div class="text-center mb-5">
        <span class="section-badge-gf">Our Approach</span>
        <h2 class="section-title-gf" style="text-align: center;">Strategic <span style="color: hsl(140, 82%, 37%);">Interventions</span></h2>
        <div class="title-divider-gf" style="margin: 0.5rem auto 1rem auto;"></div>
        <p class="text-muted mx-auto" style="max-width: 800px; line-height: 1.7;">
            Tailored modules designed to reach the most vulnerable populations across our target sub-counties.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="intervention-card">
                <div class="intervention-icon">
                    <i class="bi bi-ship"></i>
                </div>
                <h5>Fisherfolk Populations</h5>
                <p>Targeting the unique vulnerabilities of the fishing community in Suba West and Rachuonyo North. Our outreach bridges the gap between the shoreline and essential health services.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="intervention-card">
                <div class="intervention-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <h5>Elimination of MTCT</h5>
                <p>Focused on Suba West, Rachuonyo North, and Rangwe. Utilizing 12 Mentor Mothers to provide peer-led support to HIV+ mothers and exposed infants.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="intervention-card">
                <div class="intervention-icon">
                    <i class="bi bi-balance-scale"></i>
                </div>
                <h5>Human Rights & Gender</h5>
                <p>A cross-cutting module across all sub-counties to improve legal literacy, promote access to justice, and foster non-discriminatory healthcare environments.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======================= COMMUNITY REACH ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-badge-gf">Community Reach</span>
                <h2 class="section-title-gf" style="text-align: left;">Our <span style="color: hsl(140, 82%, 37%);">Impact Numbers</span></h2>
                <div class="title-divider-gf" style="margin: 0 0 1rem 0;"></div>
                <p class="gf-description">
                    Through structured community dialogues and psychosocial support, we create enabling environments for those newly diagnosed.
                </p>
                <div class="reach-stats">
                    <div class="reach-item">
                        <span class="reach-number">12</span>
                        <span class="reach-label">Dedicated Mentor Mothers engaged</span>
                    </div>
                    <div class="reach-item">
                        <span class="reach-number">559</span>
                        <span class="reach-label">PMTCT Mothers reached during this period</span>
                    </div>
                    <div class="reach-item">
                        <span class="reach-number">471</span>
                        <span class="reach-label">HEI supported through peer sessions</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127650.0!2d34.4!3d-0.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d554!2sHoma%20Bay%2C%20Kenya!5e0!3m2!1sen!2ske!4v1" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <div class="map-badge">
                        <i class="bi bi-geo-alt-fill"></i> Homa Bay County
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== GLOBAL FUND SECTION STYLES ===== */

/* Badge */
.section-badge-gf {
    display: inline-block;
    background: rgba(46, 125, 50, 0.1);
    color: #2e7d32;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

/* Title */
.section-title-gf {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.title-divider-gf {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
}

/* Description */
.gf-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

/* Highlight Box */
.gf-highlight-box {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.gf-highlight-box i {
    color: #2e7d32;
    font-size: 1.2rem;
    margin-top: 0.1rem;
}

.gf-highlight-box div {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
}

/* Image Wrapper */
.gf-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.gf-image-wrapper img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gf-image-wrapper:hover img {
    transform: scale(1.02);
}

.gf-image-badge {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    backdrop-filter: blur(10px);
}

/* Stats Cards */
.gf-stat-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    height: 100%;
}

.gf-stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(46, 125, 50, 0.08);
    border-color: rgba(46, 125, 50, 0.2);
}

.gf-stat-icon {
    width: 60px;
    height: 60px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.75rem auto;
    transition: all 0.3s ease;
}

.gf-stat-card:hover .gf-stat-icon {
    background: #2e7d32;
}

.gf-stat-icon i {
    font-size: 1.8rem;
    color: #2e7d32;
    transition: all 0.3s ease;
}

.gf-stat-card:hover .gf-stat-icon i {
    color: white;
}

.gf-stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #2e7d32;
    margin-bottom: 0.25rem;
}

.gf-stat-label {
    font-size: 0.9rem;
    font-weight: 600;
    color: #1a2b3c;
    margin-bottom: 0.75rem;
}

.gf-stat-description {
    font-size: 0.8rem;
    color: #6c757d;
    line-height: 1.5;
}

/* Intervention Cards */
.intervention-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    height: 100%;
}

.intervention-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(46, 125, 50, 0.08);
    border-color: rgba(46, 125, 50, 0.2);
}

.intervention-icon {
    width: 70px;
    height: 70px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem auto;
}

.intervention-icon i {
    font-size: 2rem;
    color: #2e7d32;
}

.intervention-card h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-bottom: 0.75rem;
}

.intervention-card p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Reach Stats */
.reach-stats {
    margin-top: 1.5rem;
}

.reach-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid #eef2f6;
}

.reach-item:last-child {
    border-bottom: none;
}

.reach-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: #2e7d32;
    min-width: 60px;
}

.reach-label {
    font-size: 0.9rem;
    color: #555;
}

/* Map Wrapper */
.map-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
    height: 380px;
}

.map-wrapper iframe {
    width: 100%;
    height: 100%;
}

.map-badge {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    backdrop-filter: blur(10px);
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-gf {
        font-size: 2rem;
    }
    
    .gf-image-wrapper img {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .gf-stat-number {
        font-size: 2rem;
    }
    
    .map-wrapper {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .reach-number {
        font-size: 1.2rem;
        min-width: 45px;
    }
}

@media (max-width: 576px) {
    .section-title-gf {
        font-size: 1.6rem;
    }
    
    .gf-stat-card {
        padding: 1.5rem 1rem;
    }
    
    .gf-stat-number {
        font-size: 1.8rem;
    }
    
    .intervention-card {
        padding: 1.5rem 1rem;
    }
    
    .gf-image-wrapper img {
        height: 220px;
    }
    
    .map-wrapper {
        height: 220px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!--End of part 1-->
<!-- ======================= SUCCESS STORIES ======================= -->
<section class="py-5 bg-white" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">

        <!-- ===== STORY 1: World AIDS Day ===== -->
        <div class="text-center mb-5 pb-3">
            <span class="section-badge-success">Global Health & Advocacy</span>
            <h2 class="section-title-success">Leading the Fight: <span style="color: #2e7d32;">World AIDS Day 2025</span></h2>
            <div class="title-divider-success"></div>
        </div>

        <div class="row g-5 align-items-start mb-5 pb-5">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="success-sidebar">
                    <h4 class="sidebar-title">Impact Metric</h4>
                    <div class="sidebar-stat">
                        <span class="sidebar-number">200+</span>
                        <p class="sidebar-label">Infants Graduated HIV-Negative</p>
                    </div>
                    <div class="sidebar-info">
                        <p><i class="bi bi-geo-alt-fill"></i> Mbita, Homa Bay County</p>
                        <p><i class="bi bi-tag-fill"></i> Elimination of Mother-to-Child Transmission (eMTCT)</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-1 order-lg-2">
                <div class="story-content">
                    <h3 class="story-title">A Generation of Hope: Celebrating Victory in Mbita</h3>
                    <div class="story-body">
                        <p>
                            <span class="drop-cap">I</span>n a landmark commemoration in Mbita, ADS Nyanza joined the Homa Bay County Government to celebrate a profound victory for public health and family resilience. The atmosphere was one of jubilation, marked by the Infant Graduation Ceremony, where more than <strong>200 HIV-exposed infants</strong> were officially declared HIV-negative.
                        </p>
                        
                        <div class="story-image-wrapper">
                            <img src="img/aids.jpg" class="story-image" alt="Infant Graduation Ceremony">
                            <span class="story-image-caption">Celebrating the graduation of HIV-exposed infants in Mbita</span>
                        </div>

                        <p>
                            This milestone represents the culmination of a rigorous <strong>23-month journey</strong>. For nearly two years, these families were supported by consistent clinical care, specialized nutritional support, and unwavering monitoring by healthcare professionals and ADS Nyanza teams. It is a victory that proves that with the right intervention, the cycle of transmission can be broken forever.
                        </p>

                        <blockquote class="smart-quote">
                            <i class="bi bi-quote"></i>
                            <p>This success is a testament to the 'Global Fund'—the tireless dedication of PMTCT mothers, the guidance of Mentor Mothers, and the collaborative spirit of the Ministry of Health and ADS Nyanza teams.</p>
                            <footer>— ADS Nyanza Team</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== STORY 2: Half Marathon ===== -->
        <div class="row g-5 align-items-start mb-5 pb-5">
            <div class="col-lg-4">
                <div class="success-sidebar">
                    <h4 class="sidebar-title">Advocacy Sprint</h4>
                    <div class="sidebar-event">
                        <p><strong>Event:</strong> World AIDS Day Half Marathon</p>
                        <p><i class="bi bi-geo-alt-fill"></i> Nairobi, Kenya</p>
                    </div>
                    <div class="sidebar-testimonial">
                        <i class="bi bi-quote"></i>
                        <p>"Every stride represents a commitment to a future free from the burden of AIDS."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="story-content">
                    <h3 class="story-title">Running for a Cause: Advocacy in Action on the Streets of Nairobi</h3>
                    <div class="story-body">
                        <p>
                            <span class="drop-cap">S</span>triving for change, one step at a time, the ADS Nyanza team proudly joined thousands of advocates at the World AIDS Day 2025 Half Marathon in Nairobi. Our participation was more than just a physical race; it was a vibrant declaration of unity and a loud call for continued investment in HIV prevention and treatment.
                        </p>

                        <div class="story-image-wrapper">
                            <img src="img/aids-nairobi.jpg" class="story-image" alt="World AIDS Day Half Marathon" onerror="this.src='https://placehold.co/800x400/2e7d32/white?text=World+AIDS+Day+Marathon'">
                            <span class="story-image-caption">ADS Nyanza team at the World AIDS Day Half Marathon</span>
                        </div>

                        <p>
                            By taking to the streets of the capital, our staff helped amplify the global call to end the HIV epidemic, turning every kilometer into a message of hope and resilience. Whether in the field at Homa Bay or on the tracks in Nairobi, ADS Nyanza remains dedicated to championing the health and dignity of our communities. We run for those we serve, and we run for the generations to come.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== STORY 3: Legal Aid ===== -->
        <div class="text-center mb-5 pb-3">
            <span class="section-badge-success">Legal Aid & Community Justice</span>
            <h2 class="section-title-success">Courage in the <span style="color: #2e7d32;">Courtroom</span></h2>
            <div class="title-divider-success"></div>
        </div>

        <div class="row g-5 align-items-start mb-5 pb-5">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="success-sidebar">
                    <h4 class="sidebar-title">Legal Brief</h4>
                    <div class="sidebar-legal">
                        <p><strong>Case No:</strong> MCCRE253/2024</p>
                        <p><strong>Charge:</strong> Brutal Assault</p>
                        <p><strong>Outcome:</strong> <span class="text-success">10 Years Imprisonment</span></p>
                    </div>
                    <div class="sidebar-testimonial">
                        <i class="bi bi-quote"></i>
                        <p>"This victory proves that no survivor walks alone when paralegals and police stand together."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-1 order-lg-2">
                <div class="story-content">
                    <h3 class="story-title">A Beacon of Justice: Stacy Akoth's Journey from Victim to Victor</h3>
                    <div class="story-body">
                        <p>
                            <span class="drop-cap">I</span>n the quiet village of Seka, Rachuonyo North Sub-County, a young woman's courage ignited a powerful chain of events that would restore faith in justice for an entire community. On 19 November 2024, 24-year-old <strong>Stacy Akoth</strong> suffered a brutal assault at the hands of a neighbor. What could have become another silenced tragedy instead became a landmark victory.
                        </p>
                        
                        <p>
                            The moment Stacy found the strength to speak out, paralegal <strong>Teresa Korinda</strong> of ADS Nyanza was by her side. Teresa offered more than legal advice—she offered hope. She held Stacy's hand through every nerve-wracking court appearance and provided the counselling needed to rebuild a life violence had tried to shatter.
                        </p>
                        
                        <p>
                            On 13 November 2025, the Kendu Bay Law Courts delivered a moment Stacy will never forget. Senior Magistrate Hon. Ezekiel Obina reviewed the overwhelming evidence and convicted the perpetrator, sentencing him to <strong>ten years' imprisonment</strong>. As the verdict was read, tears of relief streamed down Stacy's face—not just for herself, but for every woman who has ever feared her voice would not be heard.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== STORY 4: Justice for Elders ===== -->
        <div class="row g-5 align-items-start">
            <div class="col-lg-4">
                <div class="success-sidebar">
                    <h4 class="sidebar-title">Justice for Elders</h4>
                    <div class="sidebar-legal">
                        <p><strong>Survivor:</strong> Risper A. Omollo (88 yrs)</p>
                        <p><strong>Ward:</strong> Central Karachuonyo</p>
                        <p><strong>Verdict:</strong> <span class="text-success">Guilty (Custodial Sentence)</span></p>
                    </div>
                    <div class="sidebar-testimonial">
                        <i class="bi bi-quote"></i>
                        <p>"Your life still matters. This is a declaration to every elder: you are not invisible."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="story-content">
                    <h3 class="story-title">Justice for Mama Risper: A Victory That Echoes Across Generations</h3>
                    <div class="story-body">
                        <p>
                            <span class="drop-cap">M</span>ama Risper, an 88-year-old matriarch, carried the quiet dignity of nearly a century of life until a neighbor brutally assaulted her in November 2024. For many elderly survivors in rural areas, this would have been a forgotten file. But ADS Nyanza and paralegal <strong>Teresa Korinda</strong> ensured Mama Risper would not walk alone.
                        </p>
                        
                        <p>
                            Teresa became Mama Risper's shield, chasing investigation officers and translating confusing legal terms into gentle Luo during court hearings. On October 27, 2025, Senior Principal Magistrate Hon. Ezekiel Obina delivered the verdict: <strong>Guilty</strong>. The sentence brought tears of joy to a woman who thought she had been forgotten by the world.
                        </p>

                        <p>
                            This victory was never just about one case; it was a declaration to every elder in Karachuonyo: <strong>Your life still matters</strong>. Today, an 88-year-old grandmother walks with her head high again, knowing justice can still find its way to the door of a rural manyatta.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== SECTION STYLES ===== */

.section-badge-success {
    display: inline-block;
    background: rgba(46, 125, 50, 0.1);
    color: #2e7d32;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.section-title-success {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-top: 0.75rem;
    margin-bottom: 0.5rem;
}

.title-divider-success {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0.5rem auto 0 auto;
    border-radius: 3px;
}

/* ===== SIDEBAR ===== */
.success-sidebar {
    background: #f9fbf9;
    border: 1px solid #e0e4e0;
    border-radius: 16px;
    padding: 1.5rem;
    height: 100%;
}

.sidebar-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #e0e4e0;
}

.sidebar-stat {
    text-align: center;
    padding: 1rem 0;
    border-bottom: 1px solid #e0e4e0;
    margin-bottom: 1rem;
}

.sidebar-number {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 800;
    color: #2e7d32;
}

.sidebar-label {
    font-size: 0.8rem;
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0;
}

.sidebar-info p {
    font-size: 0.8rem;
    color: #555;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 6px;
}

.sidebar-info p i {
    color: #2e7d32;
}

.sidebar-event p {
    font-size: 0.85rem;
    color: #555;
    margin-bottom: 0.25rem;
}

.sidebar-event p i {
    color: #2e7d32;
}

.sidebar-testimonial {
    background: #f0f5f0;
    border-left: 3px solid #2e7d32;
    padding: 0.75rem 1rem;
    border-radius: 8px;
    margin-top: 1rem;
}

.sidebar-testimonial i {
    color: #2e7d32;
    font-size: 1.2rem;
    opacity: 0.5;
}

.sidebar-testimonial p {
    font-size: 0.85rem;
    color: #555;
    font-style: italic;
    margin: 0;
}

.sidebar-legal p {
    font-size: 0.85rem;
    color: #555;
    margin-bottom: 0.25rem;
}

.sidebar-legal .text-success {
    font-weight: 700;
}

/* ===== STORY CONTENT ===== */
.story-content {
    padding-left: 1.5rem;
}

.story-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 1.25rem;
    line-height: 1.2;
}

.story-body {
    font-family: 'Georgia', serif;
    line-height: 1.8;
    font-size: 1rem;
    color: #333;
}

.drop-cap {
    float: left;
    font-size: 3.8rem;
    line-height: 1;
    padding-right: 8px;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    color: #2e7d32;
}

.story-image-wrapper {
    margin: 1.5rem 0;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e0e4e0;
}

.story-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.story-image-wrapper:hover .story-image {
    transform: scale(1.01);
}

.story-image-caption {
    display: block;
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
    color: #6c757d;
    font-style: italic;
    background: #f9fbf9;
}

.smart-quote {
    font-family: 'Georgia', serif;
    font-style: italic;
    font-size: 1.1rem;
    border-left: 4px solid #2e7d32;
    padding: 1.25rem 1.5rem;
    margin: 1.5rem 0;
    background: #f9fbf9;
    border-radius: 0 12px 12px 0;
    color: #333;
}

.smart-quote i {
    color: #2e7d32;
    font-size: 1.5rem;
    opacity: 0.3;
    display: block;
    margin-bottom: 0.5rem;
}

.smart-quote p {
    margin-bottom: 0.5rem;
}

.smart-quote footer {
    font-style: normal;
    font-weight: 600;
    color: #2e7d32;
    font-size: 0.85rem;
}

/* Responsive */
@media (max-width: 992px) {
    .story-content {
        padding-left: 0;
    }
    
    .section-title-success {
        font-size: 2rem;
    }
    
    .story-title {
        font-size: 1.6rem;
    }
}

@media (max-width: 768px) {
    .section-title-success {
        font-size: 1.6rem;
    }
    
    .story-title {
        font-size: 1.4rem;
    }
    
    .drop-cap {
        font-size: 3rem;
    }
    
    .success-sidebar {
        margin-top: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-success {
        font-size: 1.3rem;
    }
    
    .story-title {
        font-size: 1.2rem;
    }
    
    .story-body {
        font-size: 0.9rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= SUCCESS STORIES END ======================= -->





<!-- Partners/Vendors Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); overflow: hidden;">
    <div class="container py-4">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h5 class="fw-bold text-uppercase mb-2" style="color: #2E7D32; letter-spacing: 2px;">Our Partners</h5>
            <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Trusted By Leading Organizations</h2>
            <div class="mx-auto rounded-pill mb-3" style="width: 60px; height: 3px; background: #2E7D32;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">We collaborate with esteemed partners to create lasting impact in our communities</p>
        </div>
        
        <!-- Partner Logos Slider - Right to Left -->
        <div class="partner-slider">
            <div class="partner-track">
                <!-- Logo 1 -->
                <div class="partner-slide">
                    <img src="img/epi.jpg" alt="EPI" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=EPI'">
                </div>
                <!-- Logo 2 -->
                <div class="partner-slide">
                    <img src="img/hilton.jpg" alt="Hilton" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Hilton'">
                </div>
                <!-- Logo 3 -->
                <div class="partner-slide">
                    <img src="img/broth.jpg" alt="Broth" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Broth'">
                </div>
                <!-- Logo 4 -->
                <div class="partner-slide">
                    <img src="img/redcross.jpg" alt="Red Cross" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Red+Cross'">
                </div>
                <!-- Logo 5 -->
                <div class="partner-slide">
                    <img src="img/kenya.jpg" alt="Kenya" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Kenya'">
                </div>
                <!-- Logo 6 -->
                <div class="partner-slide">
                    <img src="img/pwrdf.jpg" alt="PWRDF" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=PWRDF'">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="partner-slide">
                    <img src="img/epi.jpg" alt="EPI" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=EPI'">
                </div>
                <div class="partner-slide">
                    <img src="img/hilton.jpg" alt="Hilton" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Hilton'">
                </div>
                <div class="partner-slide">
                    <img src="img/broth.jpg" alt="Broth" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Broth'">
                </div>
                <div class="partner-slide">
                    <img src="img/redcross.jpg" alt="Red Cross" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Red+Cross'">
                </div>
                <div class="partner-slide">
                    <img src="img/kenya.jpg" alt="Kenya" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=Kenya'">
                </div>
                <div class="partner-slide">
                    <img src="img/pwrdf.jpg" alt="PWRDF" class="partner-logo" onerror="this.src='https://placehold.co/200x120/2E7D32/white?text=PWRDF'">
                </div>
            </div>
        </div>
        
    </div>
</div>

<style>
/* Partners Slider - Right to Left Animation */
.partner-slider {
    width: 100%;
    overflow: hidden;
    position: relative;
    background: white;
    padding: 2rem 0;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
    border: 1px solid #eef2f6;
}

.partner-track {
    display: flex;
    gap: 2.5rem;
    animation: scrollRightToLeft 20s linear infinite;
    width: fit-content;
}

.partner-track:hover {
    animation-play-state: paused;
}

.partner-slide {
    flex: 0 0 auto;
    text-align: center;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 16px;
    transition: all 0.3s ease;
    min-width: 200px;
}

.partner-slide:hover {
    background: white;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(46, 125, 50, 0.1);
}

.partner-logo {
    width: 160px;
    height: 120px;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

/* Right to Left Animation */
@keyframes scrollRightToLeft {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Responsive */
@media (max-width: 1200px) {
    .partner-logo {
        width: 140px;
        height: 80px;
    }
    
    .partner-slide {
        min-width: 180px;
    }
    
    .partner-track {
        gap: 2rem;
    }
}

@media (max-width: 992px) {
    .partner-logo {
        width: 120px;
        height: 70px;
    }
    
    .partner-slide {
        min-width: 160px;
        padding: 0.8rem;
    }
}

@media (max-width: 768px) {
    .partner-logo {
        width: 100px;
        height: 60px;
    }
    
    .partner-slide {
        min-width: 140px;
        padding: 0.6rem;
    }
    
    .partner-track {
        gap: 1.5rem;
    }
}

@media (max-width: 576px) {
    .partner-logo {
        width: 80px;
        height: 50px;
    }
    
    .partner-slide {
        min-width: 110px;
        padding: 0.5rem;
    }
    
    .partner-track {
        gap: 1rem;
    }
    
    .partner-slider {
        padding: 1rem 0;
    }
}
</style>
<!-- Partners/Vendors End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-2 px-xl-3">
        <div class="row gx-3 gx-lg-4">
            <!-- Logo & Newsletter Column -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-white text-dark p-3 p-lg-4 rounded shadow-sm">
                    <a href="index" class="navbar-brand mb-3">
                        <img src="/updated/img/ads.png" alt="ADS-NYANZA Logo" style="height: 65px; max-width: 100%;">
                    </a>
                    <p class="mt-2 mb-3 text-muted small" style="font-size: 0.85rem;">
                        Stay updated on our latest programs, success stories, and community initiatives. Join us in empowering lives and promoting sustainable development across Nyanza.
                    </p>
                    <form action="" class="w-100">
                        <div class="input-group input-group-sm">
                            <input type="email" class="form-control p-2 shadow-none" placeholder="Your Email" style="border: 1px solid hsl(140, 82%, 37%); font-size: 0.9rem;">
                            <button type="submit" class="btn text-white px-3" style="background-color: hsl(140, 82%, 37%); border: 1px solid hsl(140, 82%, 37%); font-size: 0.9rem;">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Right Side Columns -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

            <div class="col-lg-8 col-md-12">
                <div class="row gx-3 gx-lg-4">
                    <!-- Contact Info Column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2 align-items-start">
                            <i class="bi bi-geo-alt me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">St. Peters Church Milimani, Along Omolo Agar Road, Kisumu, Kenya</p>
                        </div>
                        <div class="d-flex mb-2 align-items-center">
                            <i class="bi bi-envelope-open me-2" style="color: hsl(140, 82%, 37%); font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">ads@ads-nyanza.org</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <i class="bi bi-telephone me-2" style="color: hsl(140, 82%, 37%); font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">+254 726947044</p>
                        </div>
                        <div class="d-flex align-items-center gap-2 mt-3">
                            <a href="https://twitter.com/ADS_Nyanza" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="https://www.facebook.com/profile" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ads-nyanza/" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/adsnyanza/" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@ADS-NYANZA" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Programs Column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Our Programs</h3>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="/updated/Our%20Projects/ecd" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Early Childhood Development</span>
                            </a>
                            <a href="/updated/Our%20Projects/icrp" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Integrated Climate Resilience Project</span>
                            </a>
                            <a href="/updated/Our%20Projects/pesp" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>People's Empowerment for Sustainability Project</span>
                            </a>
                            <a href="/updated/Our%20Projects/Global_Fund" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Global Fund</span>
                            </a>
                            <a href="/updated/Our%20Projects/kaliedoscope" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Kaleidoscope</span>
                            </a>
                            <a href="/updated/Our%20Projects/wkpi" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>West Kenya Peace Initiative</span>
                            </a>
                            <a href="/updated/Our%20Projects/emergency" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Emergency Response</span>
                            </a>
                        </div>
                    </div>

                    <!-- Popular Links Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Popular Links</h3>
                        </div>
                        <div class="d-flex flex-column">
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="https://ess.ads-nyanza.org" target="_blank" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Staff Portal</span>
                            </a>
                            <!-- Our_Blog - Now points to Engage folder -->
<a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="/updated/Engage/Our_Blog" style="font-size: 0.85rem; padding: 0.15rem 0;">
    <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
    <span>Our Blog</span>
</a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="/updated/careers" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Careers</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="/updated/tenders" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Tenders</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="/updated/About_Us" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>The Leadership</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright Section - Full Width -->
<div class="container-fluid text-white py-3" style="background: hsl(140, 82%, 37%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <p class="mb-0 small" style="font-size: 0.85rem; line-height: 1.1; color: #ffffff;">
                    &copy; <span id="year"></span> <strong>ADS Nyanza</strong>. All Rights Reserved. 
                    <span class="d-none d-sm-inline">|</span> 
                    <span class="d-block d-sm-inline">Maintained by ACK Development Services Nyanza</span>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Social Icons */
    .social-icon {
        width: 40px;
        height: 40px;
        padding: 0;
        font-size: 18px;
        border-color: rgba(255, 255, 255, 0.2);
        color: #ffffff;
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        background: hsl(140, 82%, 37%);
        border-color: hsl(140, 82%, 37%);
        color: #ffffff;
        transform: translateY(-3px);
    }
    
    /* Footer Links */
    .footer-link {
        transition: all 0.3s ease;
        color: #cccccc !important;
        text-decoration: none;
    }
    
    .footer-link:hover {
        color: hsl(140, 82%, 37%) !important;
        transform: translateX(3px);
    }
    
    /* Copyright */
    #year {
        font-weight: 700;
    }
    
    /* Responsive */
    @media (max-width: 576px) {
        .container-fluid.text-white.py-3 {
            padding: 0.75rem 0 !important;
        }
        
        .container-fluid.text-white.py-3 p {
            font-size: 0.7rem !important;
            line-height: 1.5 !important;
        }
        
        .social-icon {
            width: 35px;
            height: 35px;
            font-size: 15px;
        }
    }
</style>

<script>
    // Set current year in copyright
    document.addEventListener('DOMContentLoaded', function() {
        const yearSpan = document.getElementById('year');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    });
</script>

<!-- Bootstrap JS Bundle (Required for Dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


