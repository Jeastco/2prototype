<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - West Kenya Peace Initiative</title>
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
<!-- ================= WKPI HERO SECTION ================= -->
<!-- ================= WKPI HERO SECTION ================= -->
<section class="wkpi-hero-section">
    <div class="wkpi-hero-container">
        
        <!-- Hero Background Image -->
        <div class="wkpi-hero-image-wrapper">
            <img src="img/wkpi.jpeg" alt="West Kenya Peace Initiative" class="wkpi-hero-image">
            <div class="wkpi-hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="wkpi-hero-content">
            <span class="wkpi-hero-badge">
                <i class="bi bi-handshake"></i> Peace Initiative
            </span>
            <h5 class="wkpi-hero-subtitle">Promoting Peace & Community Cohesion</h5>
            <h1 class="wkpi-hero-title">West Kenya Peace Initiative</span></h1>
            <div class="wkpi-hero-divider"></div>
            <p class="wkpi-hero-description">
                Building bridges, fostering dialogue, and creating lasting peace across communities in Western Kenya.
            </p>
            <div class="wkpi-hero-buttons">
                <a href="About_Us" class="wkpi-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="contact" class="wkpi-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="wkpi-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="wkpi-scroll-line">
                <div class="wkpi-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== WKPI HERO SECTION ===== */
.wkpi-hero-section {
    position: relative;
    width: 100%;
    height: 75vh;
    min-height: 500px;
    max-height: 700px;
    overflow: hidden;
    background: #1a2b3c;
}

.wkpi-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* ===== HERO IMAGE ===== */
.wkpi-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.wkpi-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 10s ease;
}

.wkpi-hero-section:hover .wkpi-hero-image {
    transform: scale(1.08);
}

/* ===== OVERLAY ===== */
.wkpi-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        rgba(15, 23, 42, 0.85) 0%, 
        rgba(15, 23, 42, 0.5) 50%, 
        rgba(46, 125, 50, 0.25) 100%
    );
    z-index: 1;
}

/* ===== HERO CONTENT ===== */
.wkpi-hero-content {
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

/* ===== BADGE ===== */
.wkpi-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    backdrop-filter: blur(12px);
    animation: fadeInDown 0.8s ease;
}

.wkpi-hero-badge i {
    font-size: 0.8rem;
}

/* ===== SUBTITLE ===== */
.wkpi-hero-subtitle {
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    opacity: 0.85;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #ffffff;
    animation: fadeInDown 0.8s ease 0.1s both;
}

/* ===== TITLE ===== */
.wkpi-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 30px rgba(0, 0, 0, 0.3);
    animation: fadeInUp 0.8s ease 0.2s both;
}

.wkpi-hero-title span {
    color: #4caf7f;
    position: relative;
}

.wkpi-hero-title span::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 0;
    right: 0;
    height: 4px;
    background: #4caf7f;
    border-radius: 2px;
    opacity: 0.4;
}

/* ===== DIVIDER ===== */
.wkpi-hero-divider {
    width: 60px;
    height: 3px;
    background: #4caf7f;
    margin: 0 auto 1.25rem auto;
    border-radius: 3px;
    animation: fadeInUp 0.8s ease 0.3s both;
}

/* ===== DESCRIPTION ===== */
.wkpi-hero-description {
    font-size: 1.15rem;
    font-weight: 400;
    margin-bottom: 2rem;
    opacity: 0.92;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    animation: fadeInUp 0.8s ease 0.4s both;
}

/* ===== BUTTONS ===== */
.wkpi-hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease 0.5s both;
}

.wkpi-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #2e7d32;
    color: white;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 4px 20px rgba(46, 125, 50, 0.3);
}

.wkpi-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(46, 125, 50, 0.4);
    color: white;
}

.wkpi-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.wkpi-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.wkpi-btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    color: white;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.wkpi-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-3px);
    color: white;
}

/* ===== SCROLL INDICATOR ===== */
.wkpi-scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: rgba(255, 255, 255, 0.5);
    z-index: 2;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    animation: fadeInUp 0.8s ease 0.8s both;
}

.wkpi-scroll-indicator span {
    font-size: 0.7rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}

.wkpi-scroll-line {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.15);
    position: relative;
}

.wkpi-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    animation: scrollDown 1.5s ease-in-out infinite;
}

@keyframes scrollDown {
    0% { top: 0; opacity: 1; }
    100% { top: 100%; opacity: 0; }
}

/* ===== ANIMATIONS ===== */
@keyframes fadeInDown {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .wkpi-hero-title {
        font-size: 3.5rem;
    }
    
    .wkpi-hero-description {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .wkpi-hero-section {
        height: 60vh;
        min-height: 400px;
        max-height: 550px;
    }
    
    .wkpi-hero-title {
        font-size: 2.5rem;
    }
    
    .wkpi-hero-subtitle {
        font-size: 0.8rem;
        letter-spacing: 2px;
    }
    
    .wkpi-hero-description {
        font-size: 0.95rem;
        padding: 0 10px;
    }
    
    .wkpi-hero-badge {
        font-size: 0.6rem;
        padding: 0.4rem 1.2rem;
    }
    
    .wkpi-btn-primary,
    .wkpi-btn-secondary {
        padding: 10px 24px;
        font-size: 0.8rem;
    }
    
    .wkpi-hero-content {
        width: 95%;
    }
    
    .wkpi-scroll-indicator {
        bottom: 15px;
    }
}

@media (max-width: 576px) {
    .wkpi-hero-section {
        height: 50vh;
        min-height: 350px;
        max-height: 450px;
    }
    
    .wkpi-hero-title {
        font-size: 1.8rem;
    }
    
    .wkpi-hero-description {
        font-size: 0.85rem;
    }
    
    .wkpi-hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }
    
    .wkpi-btn-primary,
    .wkpi-btn-secondary {
        padding: 8px 20px;
        font-size: 0.75rem;
        width: 100%;
        max-width: 220px;
        justify-content: center;
    }
    
    .wkpi-hero-divider {
        width: 40px;
        height: 2px;
    }
}
</style>

<!-- Bootstrap Icons (if not already loaded) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- ================= SCRIPTS ================= -->
<script>
    // Remove spinner
    document.addEventListener('DOMContentLoaded', function() {
        var spinner = document.getElementById('spinner');
        if (spinner) {
            setTimeout(function() {
                spinner.style.opacity = '0';
                setTimeout(function() {
                    spinner.style.display = 'none';
                }, 300);
            }, 100);
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ================= WKPI HERO END ================= -->


<!-- ======================= WKPI INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-wkpi">About the Initiative</span>
            <h2 class="section-title-wkpi">Our Reach</h2>
            <div class="title-divider-wkpi"></div>
            <p class="wkpi-description">
                The Western Kenya Peace Initiative is dedicated to fostering peaceful coexistence among diverse ethnic communities in the region. 
                By identifying conflict hotspots and working closely with local leaders and influencers, the Initiative proactively addresses emerging tensions. 
                Their efforts include supporting victims of conflict through capacity building to reduce disparities that often lead to unrest.
            </p>
            <p class="wkpi-description">
                Through collaboration with local and international partners, the Initiative strengthens its peacebuilding efforts and creates cultural exchange opportunities to promote mutual respect and understanding. 
                All this is done with the aim to build a harmonious and inclusive society where peace and unity prevail.
            </p>
            <div class="wkpi-cta-group">
                <a href="#" class="btn-wkpi-primary">
                    <i class="bi bi-handshake me-2"></i> Partner With Us
                </a>
                <a href="#" class="btn-wkpi-outline">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="wkpi-image-wrapper">
                <img src="img/wkpi_sporting1.jpg" alt="Western Kenya Peace Initiative" class="img-fluid" onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=WKPI'">
                
            </div>
        </div>
    </div>
</section>

<!-- ======================= WKPI OBJECTIVES ======================= -->
<section class="container py-5" style="background: #f8fafc; border-radius: 24px; padding: 3rem 2rem;">
    <div class="text-center mb-5">
        <span class="section-badge-wkpi">Our Goals</span>
        <h3 class="section-subtitle-wkpi">Our <span style="color: hsl(140, 82%, 37%);">Objectives</span></h3>
        <div class="title-divider-wkpi center"></div>
        <p class="text-muted" style="max-width: 650px; margin: 0 auto;">
            To promote peaceful coexistence between and among communities in Western Kenya
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-handshake"></i>
                </div>
                <h5>Non-Violent Conflict Resolution</h5>
                <p>Support communities in Western Kenya to use non-violent means to resolve their disputes.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-arrow-repeat"></i>
                </div>
                <h5>Post-Conflict Recovery</h5>
                <p>Support groups to sustainably recover from the effects of conflicts and rebuild livelihoods.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-person-up"></i>
                </div>
                <h5>Peacebuilding Capacity</h5>
                <p>Strengthen the capacities of WKPI peace officers and local actors to effectively facilitate conflict transformation.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== WKPI SECTION STYLES ===== */

/* Badge */
.section-badge-wkpi {
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
.section-title-wkpi {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.section-subtitle-wkpi {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a2b3c;
}

/* Title Divider */
.title-divider-wkpi {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
    margin: 0 0 1rem 0;
}

.title-divider-wkpi.center {
    margin: 0.5rem auto 1rem auto;
}

/* Description */
.wkpi-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

/* Image */
.wkpi-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.wkpi-image-wrapper img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.wkpi-image-wrapper:hover img {
    transform: scale(1.02);
}

.wkpi-image-badge {
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

/* Buttons */
.wkpi-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.btn-wkpi-primary {
    display: inline-flex;
    align-items: center;
    background: #2e7d32;
    color: white;
    padding: 10px 28px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.btn-wkpi-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.btn-wkpi-outline {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: #2e7d32;
    padding: 10px 28px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #2e7d32;
}

.btn-wkpi-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* Objective Cards */
.objective-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid #eef2f6;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.objective-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #2e7d32, #4caf7f);
    transform: scaleX(0);
    transition: transform 0.4s ease;
    transform-origin: left;
}

.objective-card:hover::before {
    transform: scaleX(1);
}

.objective-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
    border-color: rgba(46, 125, 50, 0.15);
}

.objective-icon {
    width: 60px;
    height: 60px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem auto;
}

.objective-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.objective-card h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-bottom: 0.75rem;
}

.objective-card p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-wkpi {
        font-size: 2rem;
    }
    
    .section-subtitle-wkpi {
        font-size: 1.6rem;
    }
    
    .wkpi-image-wrapper img {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .objective-card {
        padding: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-wkpi {
        font-size: 1.6rem;
    }
    
    .section-subtitle-wkpi {
        font-size: 1.4rem;
    }
    
    .wkpi-image-wrapper img {
        height: 220px;
    }
    
    .wkpi-image-badge {
        font-size: 0.65rem;
        padding: 6px 14px;
        bottom: 10px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= WKPI END ======================= -->
<!-- ======================= SUCCESSES MADE ======================= -->
<section class="py-5 bg-white" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5 pb-3">
            <span class="section-badge-success">Community Governance & Grassroots Advocacy</span>
            <h2 class="section-title-success">Voices of West Sakwa: <span style="color: #2e7d32;">Strengthening Social Fabrics</span></h2>
            <div class="title-divider-success"></div>
        </div>

        <!-- Main Content -->
        <div class="row g-5 align-items-start mb-5 pb-5">
            
            <!-- Left Column - Agenda -->
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="agenda-card">
                    <h4 class="agenda-title">Forum Agenda</h4>
                    <ul class="agenda-list">
                        <li>
                            <i class="bi bi-shield-check"></i>
                            <span>Security Mitigation</span>
                        </li>
                        <li>
                            <i class="bi bi-exclamation-triangle"></i>
                            <span>Drug & Alcohol Abuse</span>
                        </li>
                        <li>
                            <i class="bi bi-paw"></i>
                            <span>Wildlife Conflict (Hyenas)</span>
                        </li>
                        <li>
                            <i class="bi bi-people"></i>
                            <span>Public Participation</span>
                        </li>
                    </ul>
                    <div class="agenda-footer">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Utonga Sub-location Assistant Chief's Camp</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Article -->
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="article-content">
                    <h3 class="article-title">Successes in Solidarity: ADS Nyanza Facilitates Vital Community Dialogue</h3>
                    
                    <div class="article-body">
                        <p>
                            <span class="drop-cap">I</span>n a critical move toward localized problem-solving, a Community Dialogue Meeting was convened at the Utonga Sub-location Assistant Chief's Camp in West Sakwa. Supported by ADS Nyanza, this forum served as a democratic platform, bringing together local administration, elders, and community members to confront the multifaceted challenges threatening the sub-location's peace and prosperity.
                        </p>
                        
                        <div class="article-image-wrapper">
                            <img src="img/WKPI (1).jpg" class="article-image" alt="Community dialogue at Utonga">
                            <p class="image-caption">Local residents and leaders in deep discussion during the West Sakwa baraza.</p>
                        </div>

                        <p>
                            The discourse was both candid and urgent, focusing heavily on the rising insecurity and the alarming trend of substance abuse among the youth. Furthermore, residents highlighted a unique and devastating challenge: the rampant destruction of property and livestock by hyenas, a conflict between humans and wildlife that requires immediate intervention from both community and conservation authorities.
                        </p>

                        <blockquote class="smart-quote">
                            <i class="bi bi-quote"></i>
                            <p>Change begins when the community moves from observation to participation. By strengthening our barazas, we ensure that the voices of the people directly shape the policies of the land.</p>
                            <footer>— Community Leader, West Sakwa</footer>
                        </blockquote>

                        <p>
                            ADS Nyanza continues to champion these public participation processes, encouraging every citizen to take an active role in collective decision-making. These meetings are the bedrock of local governance, ensuring that the future of West Sakwa is built on the shared wisdom and cooperation of its people.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== SECTION STYLES ===== */

/* Section Badge */
.section-badge-success {
    display: inline-block;
    background: rgba(46, 125, 50, 0.1);
    color: #2e7d32;
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

/* Section Title */
.section-title-success {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-top: 0.75rem;
    margin-bottom: 0.5rem;
}

/* Title Divider */
.title-divider-success {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0.5rem auto 0 auto;
    border-radius: 3px;
}

/* ===== AGENDA CARD ===== */
.agenda-card {
    background: #f9fbf9;
    border: 1px solid #e0e4e0;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    height: 100%;
    transition: all 0.3s ease;
}

.agenda-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    border-color: #2e7d32;
}

.agenda-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #e0e4e0;
}

.agenda-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
}

.agenda-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #f0f2f0;
    font-weight: 500;
    color: #444;
    transition: all 0.3s ease;
}

.agenda-list li:hover {
    padding-left: 8px;
    color: #2e7d32;
}

.agenda-list li i {
    font-size: 1.2rem;
    color: #2e7d32;
    width: 24px;
}

.agenda-footer {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 2px solid #e0e4e0;
    font-size: 0.85rem;
    color: #555;
}

.agenda-footer i {
    color: #2e7d32;
    font-size: 1rem;
}

/* ===== ARTICLE CONTENT ===== */
.article-content {
    padding-left: 1.5rem;
}

.article-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.article-body {
    font-family: 'Georgia', serif;
    line-height: 1.8;
    font-size: 1rem;
    color: #333;
}

.drop-cap {
    float: left;
    font-size: 4rem;
    line-height: 1;
    padding-right: 8px;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    color: #2e7d32;
}

/* Article Image */
.article-image-wrapper {
    margin: 1.5rem 0;
    border-radius: 16px;
    overflow: hidden;
    background: #f9fbf9;
    border: 1px solid #e0e4e0;
}

.article-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.article-image-wrapper:hover .article-image {
    transform: scale(1.01);
}

.image-caption {
    padding: 0.75rem 1rem;
    font-size: 0.8rem;
    color: #6c757d;
    font-style: italic;
    margin: 0;
    background: #f9fbf9;
}

/* Smart Quote */
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
    position: relative;
}

.smart-quote i {
    color: #2e7d32;
    font-size: 1.8rem;
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
    .article-content {
        padding-left: 0;
    }
    
    .section-title-success {
        font-size: 2rem;
    }
    
    .article-title {
        font-size: 1.8rem;
    }
}

@media (max-width: 768px) {
    .section-title-success {
        font-size: 1.6rem;
    }
    
    .article-title {
        font-size: 1.5rem;
    }
    
    .drop-cap {
        font-size: 3rem;
    }
    
    .agenda-card {
        padding: 1.5rem;
    }
    
    .smart-quote {
        font-size: 1rem;
        padding: 1rem;
    }
}

@media (max-width: 576px) {
    .section-title-success {
        font-size: 1.3rem;
    }
    
    .article-title {
        font-size: 1.3rem;
    }
    
    .article-body {
        font-size: 0.9rem;
    }
    
    .drop-cap {
        font-size: 2.5rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= SUCCESSES MADE END ======================= -->


<!-- ======================= WHERE WE WORK ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-badge-wkpi">Our Footprint</span>
            <h2 class="section-title-wkpi">Where <span style="color: hsl(140, 82%, 37%);">We Work</span></h2>
            <div class="title-divider-wkpi center"></div>
            <p class="text-muted mx-auto" style="max-width: 750px; line-height: 1.7;">
                The <strong>Western Kenya Peace Initiative</strong> operates in <strong>Kisumu</strong> and <strong>Siaya Counties</strong> — key regions in Western Kenya 
                where we foster peaceful coexistence, social cohesion, and inclusive community development. 
                Through partnerships with local leaders, youth, and grassroots organizations, we work to prevent conflicts and promote harmony among diverse communities.
            </p>
        </div>

        <div class="row g-5">
            
            <!-- Kisumu County -->
            <div class="col-lg-6">
                <div class="wkpi-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
                        <div class="location-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3>Kisumu County</h3>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255348.15389589057!2d34.57335237849533!3d-0.07497253980993539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa437ad4ac81d%3A0x2012a439d6248dd2!2sKisumu!5e0!3m2!1sen!2ske!4v1762169502694!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Supporting peace dialogues and youth-led reconciliation efforts to strengthen unity in Kisumu communities.</span>
                    </div>
                    <div class="location-stats">
                        <span><i class="bi bi-people-fill"></i> 15+ Communities</span>
                        <span><i class="bi bi-chat-dots-fill"></i> 50+ Dialogues</span>
                        <span><i class="bi bi-handshake"></i> 20+ Partners</span>
                    </div>
                </div>
            </div>

            <!-- Siaya County -->
            <div class="col-lg-6">
                <div class="wkpi-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <div class="location-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3>Siaya County</h3>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.526417375426!2d34.26910370514093!3d0.06437299583946317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177fe331c8a0ace3%3A0xb1bd1eba163ad235!2sSiaya!5e0!3m2!1sen!2ske!4v1762169791997!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Building community resilience through peace education, women's leadership, and inclusive dialogue in Siaya.</span>
                    </div>
                    <div class="location-stats">
                        <span><i class="bi bi-people-fill"></i> 12+ Communities</span>
                        <span><i class="bi bi-chat-dots-fill"></i> 40+ Dialogues</span>
                        <span><i class="bi bi-handshake"></i> 15+ Partners</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-5 pt-3">
            <a href="contact" class="btn-wkpi-primary">
                <i class="bi bi-chat-heart me-2"></i> Partner With Us
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* ===== WKPI LOCATION CARD ===== */
.wkpi-location-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #eef2f6;
    height: 100%;
    transition: all 0.35s ease;
}

.wkpi-location-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    border-color: rgba(46, 125, 50, 0.2);
}

/* Location Header */
.location-header {
    padding: 1.25rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    color: white;
}

.location-icon {
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.location-icon i {
    font-size: 1.3rem;
    color: white;
}

.location-header h3 {
    font-size: 1.3rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

/* Location Map */
.location-map {
    height: 280px;
    overflow: hidden;
}

.location-map iframe {
    width: 100%;
    height: 100%;
}

/* Location Footer */
.location-footer {
    padding: 1rem 1.5rem;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    background: #f8f9fa;
    border-top: 1px solid #eef2f6;
    font-size: 0.85rem;
    color: #555;
    line-height: 1.5;
}

.location-footer i {
    color: #2e7d32;
    font-size: 1rem;
    margin-top: 0.1rem;
}

/* Location Stats */
.location-stats {
    display: flex;
    justify-content: space-around;
    padding: 0.75rem 1.5rem;
    background: white;
    border-top: 1px solid #eef2f6;
}

.location-stats span {
    font-size: 0.7rem;
    font-weight: 600;
    color: #555;
    display: flex;
    align-items: center;
    gap: 6px;
}

.location-stats span i {
    color: #2e7d32;
    font-size: 0.8rem;
}

/* Buttons */
.btn-wkpi-primary {
    display: inline-flex;
    align-items: center;
    background: #2e7d32;
    color: white;
    padding: 10px 28px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.btn-wkpi-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.btn-wkpi-primary i:last-child {
    transition: transform 0.3s ease;
}

.btn-wkpi-primary:hover i:last-child {
    transform: translateX(5px);
}

/* Section Styles */
.section-badge-wkpi {
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

.section-title-wkpi {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.title-divider-wkpi.center {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
    margin: 0.5rem auto 1rem auto;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-wkpi {
        font-size: 2rem;
    }
    
    .location-map {
        height: 220px;
    }
    
    .location-stats {
        flex-wrap: wrap;
        gap: 0.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-wkpi {
        font-size: 1.6rem;
    }
    
    .location-header {
        padding: 1rem;
    }
    
    .location-header h3 {
        font-size: 1.1rem;
    }
    
    .location-footer {
        padding: 0.75rem 1rem;
        font-size: 0.8rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= WHERE WE WORK END ======================= -->



<!-- ======================= PHOTO GALLERY ======================= -->
<section id="gallery" class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-badge-gallery">Moments of Impact</span>
            <h2 class="section-title-gallery">Photo <span style="color: hsl(140, 82%, 37%);">Gallery</span></h2>
            <div class="title-divider-gallery"></div>
            <p class="text-muted mx-auto" style="max-width: 650px; line-height: 1.7;">
                A glimpse into our peacebuilding, dialogue, and community empowerment activities across Kisumu and Siaya Counties.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- Photo 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/wkpi_preist.jpg" alt="Community Peace Dialogue" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Community Peace Dialogue</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/wkpi_sporting 3.jpg" alt="Youth Leadership Forum" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Youth Leadership Forum</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/wkpi_sporting.jpg" alt="Women Empowerment Workshop" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Women Empowerment Workshop</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/WKPI (1).jpg" alt="Community Dialogue" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Community Dialogue Session</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/WKPI (2).jpg" alt="Peacebuilding Activity" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Peacebuilding Activity</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="img/WKPI (4).jpg" alt="Community Engagement" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <i class="bi bi-search"></i>
                            <span>Community Engagement</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

   <!-- Gallery View All Button -->
<div class="text-center mt-5 pt-3">
    <a href="/updated/Engage/gallery" class="btn-gallery-primary">
        <i class="bi bi-images me-2"></i> View Full Gallery
        <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>
</section>

<style>
/* ===== GALLERY SECTION STYLES ===== */

/* Badge */
.section-badge-gallery {
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
.section-title-gallery {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Divider */
.title-divider-gallery {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0.5rem auto 1rem auto;
    border-radius: 3px;
}

/* ===== GALLERY ITEMS ===== */
.gallery-item {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    cursor: pointer;
}

.gallery-img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}

.gallery-item:hover .gallery-img {
    transform: scale(1.08);
}

/* Gallery Overlay */
.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(46, 125, 50, 0.85), rgba(27, 94, 32, 0.9));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay-content {
    text-align: center;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-overlay-content {
    transform: translateY(0);
}

.gallery-overlay-content i {
    font-size: 2.5rem;
    display: block;
    margin-bottom: 0.75rem;
    opacity: 0.8;
}

.gallery-overlay-content span {
    font-size: 0.9rem;
    font-weight: 500;
    letter-spacing: 0.5px;
    display: block;
}

/* ===== VIEW ALL BUTTON ===== */
.btn-gallery-primary {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: #2e7d32;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #2e7d32;
}

.btn-gallery-primary:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.2);
}

.btn-gallery-primary i:last-child {
    transition: transform 0.3s ease;
}

.btn-gallery-primary:hover i:last-child {
    transform: translateX(5px);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .section-title-gallery {
        font-size: 2rem;
    }
    
    .gallery-img {
        height: 220px;
    }
}

@media (max-width: 576px) {
    .section-title-gallery {
        font-size: 1.6rem;
    }
    
    .gallery-img {
        height: 200px;
    }
    
    .gallery-overlay-content i {
        font-size: 2rem;
    }
    
    .gallery-overlay-content span {
        font-size: 0.8rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= GALLERY END ======================= -->




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


