<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Kaleidoscope Project</title>
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


<!-- ================= KALEIDOSCOPE HERO ================= -->
<section class="kaleidoscope-hero-section">
    <div class="kaleidoscope-hero-container">
        
        <!-- Hero Background Image -->
        <div class="kaleidoscope-hero-image-wrapper">
            <img src="img/kaleido_main.png" alt="Kaleidoscope Project - Reclaiming SRHR for All" class="kaleidoscope-hero-image">
            <div class="kaleidoscope-hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="kaleidoscope-hero-content">
            <span class="kaleidoscope-hero-badge">SRHR Initiative</span>
            <h5 class="kaleidoscope-hero-subtitle">Reclaiming SRHR for All</h5>
            <h1 class="kaleidoscope-hero-title">The Kaleidoscope Project</h1>
            <div class="kaleidoscope-hero-divider"></div>
            <p class="kaleidoscope-hero-description">
                Advancing Sexual and Reproductive Health and Rights for women and adolescent girls through integrated health systems and community empowerment.
            </p>
            <div class="kaleidoscope-hero-buttons">
                <a href="About_Us" class="kaleidoscope-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="contact" class="kaleidoscope-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="kaleidoscope-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="kaleidoscope-scroll-line">
                <div class="kaleidoscope-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== KALEIDOSCOPE HERO SECTION ===== */
.kaleidoscope-hero-section {
    position: relative;
    width: 100%;
    height: 85vh;
    min-height: 500px;
    max-height: 700px;
    overflow: hidden;
    background: #1a2b3c;
}

.kaleidoscope-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* Hero Image */
.kaleidoscope-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.kaleidoscope-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 8s ease;
}

.kaleidoscope-hero-section:hover .kaleidoscope-hero-image {
    transform: scale(1.05);
}

.kaleidoscope-hero-overlay {
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
.kaleidoscope-hero-content {
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

.kaleidoscope-hero-badge {
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

.kaleidoscope-hero-subtitle {
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    opacity: 0.85;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #ffffff;
}

.kaleidoscope-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
}

.kaleidoscope-hero-divider {
    width: 60px;
    height: 3px;
    background: #2ecc71;
    margin: 0 auto 1.25rem auto;
    border-radius: 3px;
}

.kaleidoscope-hero-description {
    font-size: 1.15rem;
    font-weight: 400;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
    color: #ffffff;
}

/* Hero Buttons */
.kaleidoscope-hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.kaleidoscope-btn-primary {
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

.kaleidoscope-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.35);
    color: white;
}

.kaleidoscope-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.kaleidoscope-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.kaleidoscope-btn-secondary {
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

.kaleidoscope-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator */
.kaleidoscope-scroll-indicator {
    position: absolute;
    bottom: 30px;
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

.kaleidoscope-scroll-indicator span {
    font-size: 0.7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
}

.kaleidoscope-scroll-line {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
    position: relative;
}

.kaleidoscope-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    animation: kaleidoscopeScrollDown 1.5s ease-in-out infinite;
}

@keyframes kaleidoscopeScrollDown {
    0% {
        top: 0;
        opacity: 1;
    }
    100% {
        top: 100%;
        opacity: 0;
    }
}

/* Responsive */
@media (max-width: 992px) {
    .kaleidoscope-hero-title {
        font-size: 3.5rem;
    }
    
    .kaleidoscope-hero-description {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .kaleidoscope-hero-section {
        height: 60vh;
        min-height: 400px;
        max-height: 550px;
    }
    
    .kaleidoscope-hero-title {
        font-size: 2.5rem;
    }
    
    .kaleidoscope-hero-subtitle {
        font-size: 0.8rem;
    }
    
    .kaleidoscope-hero-description {
        font-size: 0.95rem;
        padding: 0 10px;
    }
    
    .kaleidoscope-hero-badge {
        font-size: 0.6rem;
        padding: 4px 14px;
    }
    
    .kaleidoscope-btn-primary,
    .kaleidoscope-btn-secondary {
        padding: 10px 24px;
        font-size: 0.8rem;
    }
}

@media (max-width: 576px) {
    .kaleidoscope-hero-section {
        height: 55vh;
        min-height: 350px;
        max-height: 450px;
    }
    
    .kaleidoscope-hero-title {
        font-size: 1.8rem;
    }
    
    .kaleidoscope-hero-description {
        font-size: 0.85rem;
    }
    
    .kaleidoscope-hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }
    
    .kaleidoscope-btn-primary,
    .kaleidoscope-btn-secondary {
        padding: 8px 20px;
        font-size: 0.75rem;
        width: 100%;
        max-width: 250px;
        justify-content: center;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ================= KALEIDOSCOPE HERO END ================= -->


<!-- ======================= KALEIDOSCOPE PROJECT INTRO ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <!-- Text Column -->
        <div class="col-lg-6">
            <span class="section-badge-kaleidoscope">Project Overview</span>
            <h2 class="section-title-kaleidoscope">Reclaiming Sexual and Reproductive <span style="color: hsl(140, 82%, 37%);">Health, Rights & Justice</span></h2>
            <div class="title-divider-kaleidoscope"></div>
            
            <p class="kaleidoscope-description">
                The Kaleidoscope Project aims at ensuring equitable and comprehensive access to reproductive health services and information for women of reproductive age, including adolescent girls.
            </p>
            
            <p class="kaleidoscope-description">
                The program is implemented across arid and semi-arid regions, predominantly reaching women in informal settlements, rural areas, and marginalized communities. By focusing on women aged <strong>15–49 years</strong>, the project addresses gaps in healthcare access, education, and empowerment.
            </p>
            
            <p class="kaleidoscope-description">
                Through community engagement, capacity building, and targeted interventions, we provide vital reproductive health services, promote awareness on family planning, maternal and adolescent health, and strengthen local healthcare systems.
            </p>
            
            <div class="kaleidoscope-highlight-box">
                <i class="bi bi-bullseye"></i>
                <div>
                    <strong>Our Goal:</strong> To empower women and adolescent girls to make informed health decisions, improving their well-being and contributing to healthier, more resilient communities.
                </div>
            </div>
            
           
        </div>

        <!-- Image Column -->
        <div class="col-lg-6">
            <div class="kaleidoscope-image-wrapper">
                <img 
                    src="img/kaliedoscope/6.jpg" 
                    alt="Kaleidoscope Project - Reproductive Health" 
                    class="img-fluid"
                    onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Kaleidoscope+Project'"
                >
               
               
            </div>
        </div>
    </div>
</section>

<style>
/* ===== KALEIDOSCOPE SECTION STYLES ===== */

/* Badge */
.section-badge-kaleidoscope {
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
.section-title-kaleidoscope {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

/* Divider */
.title-divider-kaleidoscope {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

/* Description */
.kaleidoscope-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

/* Highlight Box */
.kaleidoscope-highlight-box {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin: 1.25rem 0;
}

.kaleidoscope-highlight-box i {
    color: #2e7d32;
    font-size: 1.2rem;
    margin-top: 0.1rem;
}

.kaleidoscope-highlight-box div {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
}

/* CTA Group */
.kaleidoscope-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.kaleidoscope-btn-primary {
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

.kaleidoscope-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.kaleidoscope-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.kaleidoscope-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.kaleidoscope-btn-outline {
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

.kaleidoscope-btn-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* Image Wrapper */
.kaleidoscope-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.kaleidoscope-image-wrapper img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.kaleidoscope-image-wrapper:hover img {
    transform: scale(1.02);
}

/* Image Badge */
.kaleidoscope-image-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 0.75rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    backdrop-filter: blur(10px);
}

/* Image Stats */
.kaleidoscope-image-stats {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(26, 43, 60, 0.85);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 12px 24px;
    display: flex;
    align-items: center;
    gap: 20px;
}

.kaleidoscope-stat-item {
    text-align: center;
}

.kaleidoscope-stat-number {
    display: block;
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
}

.kaleidoscope-stat-label {
    display: block;
    font-size: 0.6rem;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.kaleidoscope-stat-divider {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
}

/* Responsive */
@media (max-width: 992px) {
    .section-title-kaleidoscope {
        font-size: 2rem;
    }
    
    .kaleidoscope-image-wrapper img {
        height: 350px;
        margin-top: 1.5rem;
    }
}

@media (max-width: 768px) {
    .section-title-kaleidoscope {
        font-size: 1.6rem;
    }
    
    .kaleidoscope-description {
        font-size: 0.9rem;
    }
    
    .kaleidoscope-image-wrapper img {
        height: 280px;
    }
    
    .kaleidoscope-image-stats {
        padding: 10px 16px;
        gap: 12px;
    }
    
    .kaleidoscope-image-badge {
        font-size: 0.65rem;
        padding: 5px 12px;
        top: 12px;
        right: 12px;
    }
}

@media (max-width: 576px) {
    .section-title-kaleidoscope {
        font-size: 1.3rem;
    }
    
    .kaleidoscope-image-wrapper img {
        height: 220px;
    }
    
    .kaleidoscope-image-stats {
        padding: 8px 12px;
        gap: 8px;
        bottom: 12px;
    }
    
    .kaleidoscope-stat-number {
        font-size: 0.9rem;
    }
    
    .kaleidoscope-stat-label {
        font-size: 0.5rem;
    }
    
    .kaleidoscope-stat-divider {
        height: 20px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= KALEIDOSCOPE PROJECT END ======================= -->


<!-- ======================= KALEIDOSCOPE IMPACT ======================= -->
<section class="py-5 bg-white" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5 pb-3">
            <span class="section-badge-kaleidoscope">Reproductive Health & Justice Report</span>
            <h2 class="section-title-kaleidoscope">The Kaleidoscope Initiative: <span style="color: #2e7d32;">Reclaiming Rights</span></h2>
            <div class="title-divider-kaleidoscope center"></div>
            <p class="section-subtitle-kaleidoscope">
                A landmark partnership for health equity and systemic strengthening in Samburu County.
            </p>
        </div>

        <!-- Story 1: MOU Signing -->
        <div class="row g-5 align-items-start mb-5 pb-5">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="impact-sidebar">
                    <h4 class="sidebar-title">Impact Metrics</h4>
                    <div class="sidebar-metric">
                        <h6>Maternal Care</h6>
                        <p>Comprehensive prenatal, skilled delivery, and postnatal service integration.</p>
                    </div>
                    <div class="sidebar-metric">
                        <h6>Clinical Capacity</h6>
                        <p>Advanced training for health workers in neonatal and maternal emergency care.</p>
                    </div>
                    <div class="sidebar-metric">
                        <h6>Community Advocacy</h6>
                        <p>Mobilizing families through nutrition education and birth preparedness.</p>
                    </div>
                    <div class="sidebar-metric">
                        <h6>Emergency Response</h6>
                        <p>Facilitating rapid referrals for high-risk pregnancies to eliminate mortality.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-1 order-lg-2">
                <div class="story-content">
                    <h3 class="story-title">Historic MOU Signed: Reclaiming SRHR Justice in Samburu</h3>
                    <div class="story-body">
                        <p>
                            <span class="drop-cap">A</span>DS Nyanza has taken a monumental step forward for reproductive health and justice in Samburu County. The formal signing of the Memorandum of Understanding (MOU) for the Kaleidoscope Project at the Samburu County Referral Hospital marks the beginning of an at-scale program designed to transform the landscape of Sexual and Reproductive Health and Rights (SRHR).
                        </p>
                        
                        <div class="story-image-wrapper">
                            <img src="img/IMG 1.png" class="story-image" alt="MOU Signing Ceremony">
                            
                        </div>

                        <p>
This initiative represents a strong and transformative partnership with the County Government of Samburu, represented by Dr. Nassir Lekudere and Dr. Josephat Lenguris, founded on a shared vision of improving the health, well-being, and quality of life of communities across the county. Guided by a commitment to equity, inclusion, and sustainable development, the initiative seeks to create meaningful opportunities for individuals and families to access the care, support, and resources they need to lead healthier and more productive lives.
At its core, this effort is driven by the belief that every person deserves the opportunity to achieve their full potential regardless of their circumstances. Particular attention is given to women and underserved communities that have historically faced social, economic, and geographic barriers to essential services. Through collective commitment and local leadership, the initiative aims to foster a future where dignity, opportunity, and improved health outcomes are within reach for all, contributing to stronger, more resilient communities for generations to come.                        </p>
                    </div>
                </div>
            </div>
        </div>

   <!-- Story 2: Governance -->
<div class="story-block-governance">
    <div class="row g-5 align-items-center">
        <div class="col-lg-12">
            <div class="governance-content">
                <span class="governance-badge">Governance & Accountability</span>
                <h3 class="governance-title">Unified Governance: <span style="color: #2e7d32;">Mapping the Path to Success</span></h3>
                <div class="governance-divider"></div>
                
                <div class="governance-body">
                    <p>
                        Success in large-scale health interventions requires more than just funding; it requires a unified structural roadmap. Recently, the Kaleidoscope Project governance committee convened with Samburu County officials to map out the specific deliverables that will drive the project forward. This high-level meeting brought together key stakeholders from both the county government and implementing partners to ensure that every aspect of the project is strategically aligned with the region's broader health goals. The committee established clear benchmarks for monitoring progress, ensuring that the project delivers measurable results for the communities it serves.
                    </p>
                    
                    <!-- Image wrapped between text - Left aligned -->
                    <div class="governance-image-inline">
                        <div class="governance-image-inner">
                            <img src="img/kaliedo.jpg" alt="Governance Committee Meeting" onerror="this.src='https://placehold.co/500x350/2e7d32/white?text=Governance+Committee'">
                            
                        </div>
                    </div>

                    <p>
                        In a unified voice, the committee agreed on key performance frameworks that emphasize accountability and community led health outcomes</strong>. This governance structure ensures that every intervention from clinical training to village-level advocacy is strategically aligned with the county's long-term health goals. The framework is built on three core pillars: transparency, inclusivity, and sustainability. Transparency ensures that all stakeholders have access to information about project progress and resource allocation. Inclusivity guarantees that the voices of the most vulnerable community members are heard in decision-making processes. Sustainability ensures that interventions put in place today will continue to benefit communities long after the project has ended.
                    </p>

                    <p>
                        The committee also prioritized strengthening local health systems by investing in the capacity of healthcare workers and community health volunteers, with a focus on maternal and child health, family planning, and adolescent sexual and reproductive health. Key deliverables include the establishment of community health units in underserved areas, deployment of mobile health clinics to reach remote populations, and integration of mental health services into primary healthcare. This collaborative, data-driven approach has already begun to yield results, with early indicators showing increased community engagement and improved health outcomes in pilot areas.
                    </p>
                    
                    <div class="governance-highlights">
                        <div class="governance-highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Transparency & Accountability</span>
                        </div>
                        <div class="governance-highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Community-Led Health Outcomes</span>
                        </div>
                        <div class="governance-highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Local Capacity Building</span>
                        </div>
                        <div class="governance-highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Data-Driven Decision Making</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ===== GOVERNANCE STYLES ===== */

.governance-content {
    padding-right: 0;
}

.governance-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.1);
    color: #2e7d32;
    padding: 4px 14px;
    border-radius: 50px;
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

.governance-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 0.75rem;
    line-height: 1.2;
}

.governance-divider {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

.governance-body p {
    font-family: 'Georgia', serif;
    font-size: 1rem;
    line-height: 1.9;
    color: #444;
    margin-bottom: 1.2rem;
}

.governance-body p strong {
    color: #2e7d32;
}

/* ===== INLINE IMAGE - WRAPPED BETWEEN TEXT ===== */
.governance-image-inline {
    margin: 1.5rem 0;
}

.governance-image-inner {
    display: flex;
    flex-direction: column;
    max-width: 55%;
    float: left;
    margin-right: 1.5rem;
    margin-bottom: 0.5rem;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e0e4e0;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
}

.governance-image-inner img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.governance-image-inner:hover img {
    transform: scale(1.02);
}

.governance-image-inner .image-caption-inline {
    display: block;
    padding: 0.4rem 0.8rem;
    font-size: 0.7rem;
    color: #6c757d;
    font-style: italic;
    background: #f9fbf9;
    text-align: center;
}

/* Clear float after inline image */
.governance-body::after {
    content: '';
    display: table;
    clear: both;
}

/* ===== HIGHLIGHTS ===== */
.governance-highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem;
    margin: 1.25rem 0;
    clear: both;
}

.governance-highlight-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: #f0f5f0;
    padding: 0.4rem 1rem;
    border-radius: 30px;
    font-size: 0.8rem;
    color: #333;
    font-weight: 500;
}

.governance-highlight-item i {
    color: #2e7d32;
    font-size: 0.8rem;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .governance-title {
        font-size: 1.8rem;
    }
    
    .governance-image-inner {
        max-width: 70%;
    }
    
    .governance-image-inner img {
        height: 280px;
    }
}

@media (max-width: 768px) {
    .governance-title {
        font-size: 1.5rem;
    }
    
    .governance-body p {
        font-size: 0.9rem;
    }
    
    .governance-image-inner {
        max-width: 85%;
        float: none;
        margin-right: 0;
        margin-bottom: 1rem;
    }
    
    .governance-image-inner img {
        height: 240px;
    }
    
    .governance-highlights {
        gap: 0.5rem;
    }
    
    .governance-highlight-item {
        font-size: 0.7rem;
        padding: 0.3rem 0.8rem;
    }
}

@media (max-width: 576px) {
    .governance-title {
        font-size: 1.3rem;
    }
    
    .governance-body p {
        font-size: 0.85rem;
    }
    
    .governance-image-inner {
        max-width: 100%;
    }
    
    .governance-image-inner img {
        height: 200px;
    }
}
</style>

        <!-- Story 3: Where We Work -->
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="section-badge-kaleidoscope" style="margin-bottom: 0.5rem;">Our Footprint</span>
                <h3 class="story-title" style="font-size: 1.8rem; color: #2e7d32;">Where We Work: <span style="color: #1a1a1a;">Samburu County</span></h3>
                <div class="story-body">
                    <p>
                        Led by ADS Nyanza, the Kaleidoscope Project is dedicated to improving health outcomes across the expansive and unique terrain of Samburu. By working closely with local healthcare providers, traditional leaders, and women's groups, we ensure that quality care is not just available, but culturally accessible and sustained by the community.
                    </p>
                </div>
                <div class="location-list">
                    <div class="location-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Samburu County Referral Hospital</span>
                    </div>
                    <div class="location-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Community Health Units</span>
                    </div>
                    <div class="location-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Remote Outreach Points</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021015.1179074778!2d36.53758028978717!3d1.559602950839502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17906d4157e2c6b9%3A0xf59b7a0063013edb!2sSamburu%20County!5e0!3m2!1sen!2ske!4v1762196772167!5m2!1sen!2ske" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" 
                        title="Map of Samburu County">
                    </iframe>
                    <div class="map-badge">
                        <i class="bi bi-geo-alt-fill"></i> Samburu County
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== KALEIDOSCOPE IMPACT STYLES ===== */

/* Section Badge */
.section-badge-kaleidoscope {
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

/* Section Title */
.section-title-kaleidoscope {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-top: 0.75rem;
    margin-bottom: 0.5rem;
}

.title-divider-kaleidoscope {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
}

.title-divider-kaleidoscope.center {
    margin: 0.5rem auto 1rem auto;
}

.section-subtitle-kaleidoscope {
    font-family: 'Georgia', serif;
    font-style: italic;
    font-size: 1.1rem;
    color: #6c757d;
    max-width: 700px;
    margin: 0 auto;
}

/* ===== SIDEBAR ===== */
.impact-sidebar {
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

.sidebar-metric {
    margin-bottom: 1rem;
}

.sidebar-metric:last-child {
    margin-bottom: 0;
}

.sidebar-metric h6 {
    font-size: 0.7rem;
    font-weight: 700;
    color: #2e7d32;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.25rem;
}

.sidebar-metric p {
    font-size: 0.85rem;
    color: #555;
    line-height: 1.5;
    margin: 0;
}

/* ===== STORY CONTENT ===== */
.story-content {
    padding-left: 1.5rem;
}

.story-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
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

/* ===== STORY IMAGE ===== */
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
}

.story-image-caption {
    display: block;
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
    color: #6c757d;
    font-style: italic;
    background: #f9fbf9;
}

/* ===== SMART QUOTE ===== */
.smart-quote {
    font-family: 'Georgia', serif;
    font-style: italic;
    font-size: 1.05rem;
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

/* ===== GOVERNANCE IMAGE ===== */
.governance-image-wrapper {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e0e4e0;
    background: white;
}

.governance-image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
}

.governance-caption {
    display: block;
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
    color: #6c757d;
    font-style: italic;
    text-align: center;
    background: #f9fbf9;
}

/* ===== LOCATION LIST ===== */
.location-list {
    margin-top: 1.25rem;
}

.location-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 0;
    border-bottom: 1px solid #eef2f6;
}

.location-item:last-child {
    border-bottom: none;
}

.location-item i {
    color: #2e7d32;
    font-size: 1rem;
    width: 20px;
}

.location-item span {
    font-size: 0.9rem;
    color: #555;
    font-weight: 500;
}

/* ===== MAP ===== */
.map-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e0e4e0;
    height: 350px;
}

.map-wrapper iframe {
    width: 100%;
    height: 100%;
}

.map-badge {
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 6px 18px;
    border-radius: 30px;
    font-size: 0.75rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    backdrop-filter: blur(10px);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .story-content {
        padding-left: 0;
    }
    
    .section-title-kaleidoscope {
        font-size: 2rem;
    }
    
    .story-title {
        font-size: 1.8rem;
    }
}

@media (max-width: 768px) {
    .section-title-kaleidoscope {
        font-size: 1.6rem;
    }
    
    .story-title {
        font-size: 1.4rem;
    }
    
    .drop-cap {
        font-size: 3rem;
    }
    
    .map-wrapper {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .impact-sidebar {
        margin-top: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-kaleidoscope {
        font-size: 1.3rem;
    }
    
    .story-title {
        font-size: 1.2rem;
    }
    
    .story-body {
        font-size: 0.9rem;
    }
    
    .map-wrapper {
        height: 220px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= KALEIDOSCOPE IMPACT END ======================= -->


<!-- ======================= WEST POKOT COUNTY ENTRY ======================= -->
<section class="py-5 bg-white" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">

        <!-- Newspaper Masthead -->
        

        <!-- Story Content -->
        <div class="story-content-west">
            
            <!-- Block 1: The Inception -->
            <div class="west-text-block">
                <div class="west-meta">
                    
                    <span class="west-badge-label">Setting the Stage</span>
                </div>
                <!-- Option 1: Bold & Strategic -->
<h3 class="west-title">A Bold Step into <span style="color: #2e7d32;">West Pokot</span></h3>
                <div class="west-divider"></div>
                
                <div class="west-body">
                    <p class="west-intro">
                        <span class="drop-cap">I</span>n a significant milestone for the Kaleidoscope Programme, ADS Nyanza, together with consortium partners TICAH, ZAMARA, and KMET , made a formal entry into West Pokot County through the Kaleidoscope inception meeting held on 2nd July 2026 at Kalya Hotel in Kapenguria. This engagement marked an important step in introducing the programme to county leadership and stakeholders, while creating a shared platform for collaboration around reproductive, maternal, newborn, child, and adolescent health priorities.
                    </p>
                    
                    <!-- Image 1 - Left aligned -->
                    <div class="west-image-inline">
                        <div class="west-image-inner">
                            <img src="img/west_pokot1.png" alt="Inception Meeting" onerror="this.src='https://placehold.co/500x320/2e7d32/white?text=Inception+Meeting+%E2%80%A2+Kalya+Hotel+Kapenguria'">
                           
                        </div>
                    </div>

                    <p>
                        The county entry began with a courtesy call to the Ministry of Health, where the County Executive Committee Member (CECM) welcomed the project partners and appreciated their commitment to working with the county. The CECM expressed hope that the collaboration would contribute to changing prevailing negative perceptions and improving reproductive health indicators in West Pokot County. This warm reception set a positive tone for the partnership and underscored the county's readiness to embrace the programme.
                    </p>

                    <p>
                        As part of the courtesy call, the consortium partners provided an overview of the Kaleidoscope programme, its objectives, and the key indicators to be tracked in the county. The discussion positioned the programme within the county's health priorities and helped establish a common understanding ahead of implementation. The engagement also reinforced the importance of coordination, county ownership, and partnership in strengthening access to quality reproductive health information and services for women, adolescent girls, and young people.
                    </p>
                </div>
            </div>

            <!-- Block 2: The Inception Workshop -->
            <div class="west-text-block">
                <div class="west-meta">
                    <span class="west-badge">02</span>
                    <span class="west-badge-label">Stakeholder Engagement</span>
                </div>
                <h3 class="west-title">Inception Workshop: Aligning for <span style="color: #2e7d32;">Impact</span></h3>
                <div class="west-divider"></div>
                
                <div class="west-body">
                    <!-- Image 2 - Right aligned -->
                    <div class="west-image-inline west-image-right">
                        <div class="west-image-inner">
                            <img src="img/west_pokot2.png" alt="Inception Workshop" onerror="this.src='https://placehold.co/500x320/2e7d32/white?text=Inception+Workshop+%E2%80%A2+59+Participants'">
                            <span class="image-caption-inline">County stakeholders and consortium partners during the inception workshop</span>
                        </div>
                    </div>

                    <p>
                        The inception workshop brought together 59 participants, including county and sub-county Ministry of Health officials, the CECM, the County Reproductive Health Coordinator, the Head of DRMNCAH, and consortium partners. The workshop provided space for partners and county stakeholders to align the programme with county priorities, reflect on maternal, newborn, and adolescent health needs, and strengthen collaboration ahead of the project's official implementation in West Pokot County.
                    </p>

                    <p>
                        The workshop featured interactive sessions that allowed participants to delve deeper into the programme's strategic approach and operational framework. Discussions centered on the current state of reproductive health in the county, existing gaps in service delivery, and opportunities for strengthening community-level interventions. The participatory nature of the workshop ensured that all voices were heard, and that the programme's design would be responsive to the unique needs of the county.
                    </p>
                </div>
            </div>

           

            <!-- Block 3: The Way Forward -->
            <div class="west-text-block">
                <div class="west-meta">
                    <span class="west-badge">03</span>
                    <span class="west-badge-label">Looking Ahead</span>
                </div>
                <h3 class="west-title">A Shared Commitment to <span style="color: #2e7d32;">Reproductive Health</span></h3>
                <div class="west-divider"></div>
                
                <div class="west-body">
                    <p>
                        The engagement in West Pokot County represents a significant expansion of the Kaleidoscope Programme's reach and impact. With strong county ownership and a shared commitment to improving reproductive health outcomes, the programme is well-positioned to make a lasting difference in the lives of women, adolescent girls, and young people.
                    </p>
                    
                    <!-- Image 3 - Left aligned -->
                    <div class="west-image-inline">
                        <div class="west-image-inner">
                            <img src="img/west_pokot3.png" alt="Group Photo" onerror="this.src='https://placehold.co/500x320/2e7d32/white?text=Group+Photo+%E2%80%A2+Looking+Ahead'">
                            <span class="image-caption-inline">Consortium partners and county officials committed to transforming reproductive health in West Pokot</span>
                        </div>
                    </div>

                    <p>
                        The consortium partners remain dedicated to <strong>supporting the county</strong> in strengthening health systems, enhancing access to quality reproductive health services, and fostering a culture of accountability and transparency. This partnership is built on a foundation of mutual respect, shared goals, and a collective determination to improve health outcomes for the most vulnerable populations.
                    </p>

                    <p>
                        As the programme moves into implementation, the <strong>collaborative spirit</strong> demonstrated during these initial engagements will serve as a springboard for sustainable impact. The evidence-based approach, combined with the unwavering commitment of all stakeholders, promises to deliver measurable improvements in reproductive health outcomes for the communities of West Pokot County.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* ===== WEST POKOT PROFESSIONAL STYLES ===== */

/* Story Container */
.story-content-west {
    max-width: 1100px;
    margin: 0 auto;
}

/* ===== TEXT BLOCK ===== */
.west-text-block {
    margin-bottom: 3rem;
}

.west-meta {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.5rem;
}

.west-badge {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 800;
    color: rgba(46, 125, 50, 0.15);
    line-height: 1;
}

.west-badge-label {
    font-size: 0.6rem;
    font-weight: 600;
    color: #2e7d32;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    background: rgba(46, 125, 50, 0.08);
    padding: 2px 10px;
    border-radius: 20px;
}

.west-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.west-divider {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1.2rem 0;
    border-radius: 3px;
}

/* ===== BODY TEXT ===== */
.west-body p {
    font-family: 'Georgia', serif;
    font-size: 1rem;
    line-height: 1.9;
    color: #444;
    margin-bottom: 1.2rem;
}

.west-body p strong {
    color: #2e7d32;
}

.west-intro {
    font-size: 1.05rem;
}

.drop-cap {
    float: left;
    font-size: 3.5rem;
    line-height: 1;
    padding-right: 8px;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    color: #2e7d32;
}

/* ===== INLINE IMAGES ===== */
.west-image-inline {
    margin: 1.2rem 0;
}

.west-image-inner {
    display: flex;
    flex-direction: column;
    max-width: 52%;
    float: left;
    margin-right: 1.8rem;
    margin-bottom: 0.5rem;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e8ece8;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.west-image-inner:hover {
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
    transform: translateY(-3px);
}

.west-image-inner img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.west-image-inner:hover img {
    transform: scale(1.02);
}

.image-caption-inline {
    display: block;
    padding: 0.5rem 0.8rem;
    font-size: 0.65rem;
    color: #6c757d;
    font-style: italic;
    background: #f9fbf9;
    text-align: center;
    border-top: 1px solid #e8ece8;
}

/* Right aligned images */
.west-image-right .west-image-inner {
    float: right;
    margin-right: 0;
    margin-left: 1.8rem;
}

/* Clear floats */
.west-body::after {
    content: '';
    display: table;
    clear: both;
}

/* ===== HIGHLIGHTS ===== */
.west-highlights {
    background: #f9fbf9;
    border: 1px solid #e8ece8;
    border-radius: 16px;
    padding: 1.5rem 2rem;
    margin: 2.5rem 0;
    clear: both;
}

.west-highlights-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1.25rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #e8ece8;
}

.west-highlights-header i {
    font-size: 1.2rem;
}

.west-highlights-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
}

.west-highlight-item {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.highlight-icon {
    width: 32px;
    height: 32px;
    background: rgba(46, 125, 50, 0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 0.1rem;
}

.highlight-icon i {
    color: #2e7d32;
    font-size: 0.8rem;
}

.west-highlight-item div {
    display: flex;
    flex-direction: column;
}

.west-highlight-item div strong {
    font-size: 0.85rem;
    color: #1a1a1a;
    font-weight: 700;
}

.west-highlight-item div span {
    font-size: 0.75rem;
    color: #6c757d;
    line-height: 1.4;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .west-title {
        font-size: 1.8rem;
    }
    
    .west-image-inner {
        max-width: 65%;
    }
    
    .west-image-inner img {
        height: 260px;
    }
}

@media (max-width: 768px) {
    .west-title {
        font-size: 1.5rem;
    }
    
    .west-body p {
        font-size: 0.9rem;
    }
    
    .west-image-inner {
        max-width: 85%;
        float: none;
        margin-right: 0;
        margin-left: 0;
        margin-bottom: 1rem;
    }
    
    .west-image-right .west-image-inner {
        float: none;
        margin-right: 0;
        margin-left: 0;
    }
    
    .west-image-inner img {
        height: 220px;
    }
    
    .west-highlights-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .west-highlights {
        padding: 1.25rem;
    }
    
    .drop-cap {
        font-size: 2.8rem;
    }
}

@media (max-width: 576px) {
    .west-title {
        font-size: 1.2rem;
    }
    
    .west-body p {
        font-size: 0.85rem;
    }
    
    .west-image-inner {
        max-width: 100%;
    }
    
    .west-image-inner img {
        height: 180px;
    }
    
    .drop-cap {
        font-size: 2.2rem;
    }
    
    .west-highlights-header {
        font-size: 1rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= WEST POKOT COUNTY END ======================= -->




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

