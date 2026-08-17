<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Emergency Response</title>
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


<!-- ================= EMERGENCY RESPONSE HERO ================= -->
<section class="emergency-hero-section">
    <div class="emergency-hero-container">
        
        <!-- Hero Background Image -->
        <div class="emergency-hero-image-wrapper">
            <img src="img/jon1.jpg" alt="Emergency Response - Rapid Community Action" class="emergency-hero-image">
            <div class="emergency-hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="emergency-hero-content">
            <span class="emergency-hero-badge">Rapid Response</span>
            <h5 class="emergency-hero-subtitle">Rapid Community Action</h5>
            <h1 class="emergency-hero-title">Emergency Response</h1>
            <div class="emergency-hero-divider"></div>
            <p class="emergency-hero-description">
                Delivering life-saving assistance and humanitarian support to communities affected by crises, disasters, and emergencies across the region.
            </p>
            <div class="emergency-hero-buttons">
                <a href="About_Us" class="emergency-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="contact" class="emergency-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="emergency-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="emergency-scroll-line">
                <div class="emergency-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== EMERGENCY RESPONSE HERO ===== */
.emergency-hero-section {
    position: relative;
    width: 100%;
    height: 85vh;
    min-height: 500px;
    max-height: 700px;
    overflow: hidden;
    background: #1a2b3c;
}

.emergency-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* Hero Image */
.emergency-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.emergency-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 8s ease;
}

.emergency-hero-section:hover .emergency-hero-image {
    transform: scale(1.05);
}

.emergency-hero-overlay {
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
.emergency-hero-content {
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

.emergency-hero-badge {
    display: inline-block;
    background: hsla(119, 71%, 54%, 0.85);
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

.emergency-hero-subtitle {
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    opacity: 0.85;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #ffffff;
}

.emergency-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
}

.emergency-hero-divider {
    width: 60px;
    height: 3px;
    background: rgb(75, 220, 53);
    margin: 0 auto 1.25rem auto;
    border-radius: 3px;
}

.emergency-hero-description {
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
.emergency-hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.emergency-btn-primary {
    display: inline-flex;
    align-items: center;
    background: rgb(40, 208, 52);
    color: white;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.emergency-btn-primary:hover {
    background: #b02a37;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(220, 53, 69, 0.35);
    color: white;
}

.emergency-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.emergency-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.emergency-btn-secondary {
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

.emergency-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator */
.emergency-scroll-indicator {
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

.emergency-scroll-indicator span {
    font-size: 0.7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
}

.emergency-scroll-line {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
    position: relative;
}

.emergency-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    animation: emergencyScrollDown 1.5s ease-in-out infinite;
}

@keyframes emergencyScrollDown {
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
    .emergency-hero-title {
        font-size: 3.5rem;
    }
    
    .emergency-hero-description {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .emergency-hero-section {
        height: 60vh;
        min-height: 400px;
        max-height: 550px;
    }
    
    .emergency-hero-title {
        font-size: 2.5rem;
    }
    
    .emergency-hero-subtitle {
        font-size: 0.8rem;
    }
    
    .emergency-hero-description {
        font-size: 0.95rem;
        padding: 0 10px;
    }
    
    .emergency-hero-badge {
        font-size: 0.6rem;
        padding: 4px 14px;
    }
    
    .emergency-btn-primary,
    .emergency-btn-secondary {
        padding: 10px 24px;
        font-size: 0.8rem;
    }
}

@media (max-width: 576px) {
    .emergency-hero-section {
        height: 55vh;
        min-height: 350px;
        max-height: 450px;
    }
    
    .emergency-hero-title {
        font-size: 1.8rem;
    }
    
    .emergency-hero-description {
        font-size: 0.85rem;
    }
    
    .emergency-hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }
    
    .emergency-btn-primary,
    .emergency-btn-secondary {
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
<!-- ================= EMERGENCY RESPONSE HERO END ================= -->

<!-- ======================= EMERGENCY RESPONSE INTRO ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-emergency">Rapid Response</span>
            <h2 class="section-title-emergency">Emergency Response <span style="color: hsl(140, 82%, 37%);">Project</span></h2>
            <div class="title-divider-emergency"></div>
            
            <p class="emergency-description">
                When disaster strikes, vulnerable communities often bear the greatest burden. In the Nyanza region, floods, droughts, and other emergencies disrupt lives, destroy property, and threaten livelihoods. Families are left without shelter, food, or access to basic services, making recovery an uphill battle.
            </p>
            
            <p class="emergency-description">
                ADS Nyanza's Emergency Response Project exists to provide immediate relief and restore hope during these critical moments. Through rapid mobilization of resources, we deliver essential supplies such as food, clean water, clothing, and temporary shelter to affected families. Our team works closely with local authorities and community leaders to ensure aid reaches those who need it most, while also offering psychosocial support to help victims cope with trauma.
            </p>
            
            <p class="emergency-description">
                Beyond immediate relief, we focus on building resilience—training communities on disaster preparedness and supporting recovery efforts that restore dignity and stability. Every intervention is guided by compassion, accountability, and a commitment to saving lives.
            </p>
            
            <div class="emergency-highlight-box">
                <i class="bi bi-bullseye"></i>
                <div>
                    <strong>Together, we can make a difference.</strong> Your support enables us to respond faster, reach farther, and help families rebuild after emergencies. Join us in turning crises into opportunities for hope and renewal.
                </div>
            </div>
            
            <div class="emergency-cta-group">
                <a href="#" class="emergency-btn-primary">
                    <i class="bi bi-heart me-2"></i> Support Our Work
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#" class="emergency-btn-outline">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                </a>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="emergency-image-wrapper">
                <img 
                    src="img/disaster1.jpg" 
                    alt="Emergency Response Project" 
                    class="img-fluid"
                    onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Emergency+Response'"
                >
                <div class="emergency-image-badge">
                    <i class="bi bi-star-fill"></i> Rapid Response Team
                </div>
                <div class="emergency-image-stats">
                    <div class="emergency-stat-item">
                        <span class="emergency-stat-number">24/7</span>
                        <span class="emergency-stat-label">Rapid Response</span>
                    </div>
                    <div class="emergency-stat-divider"></div>
                    <div class="emergency-stat-item">
                        <span class="emergency-stat-number">6</span>
                        <span class="emergency-stat-label">Counties</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= OUR IMPACT ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge-emergency">Our Impact</span>
            <h2 class="section-title-emergency" style="text-align: center;">Measurable <span style="color: hsl(140, 82%, 37%);">Results</span></h2>
            <div class="title-divider-emergency center"></div>
            <p class="text-muted mx-auto" style="max-width: 650px; line-height: 1.7;">
                ADS Nyanza's Emergency Response Project delivers timely support to vulnerable communities in the Nyanza region, helping families recover, rebuild, and thrive.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="emergency-stat-card">
                    <div class="emergency-stat-icon">
                        <i class="bi bi-house-heart"></i>
                    </div>
                    <h3 class="emergency-stat-number">3,500+</h3>
                    <p class="emergency-stat-label">Households Assisted</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="emergency-stat-card">
                    <div class="emergency-stat-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h3 class="emergency-stat-number">7,200+</h3>
                    <p class="emergency-stat-label">Relief Kits Distributed</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="emergency-stat-card">
                    <div class="emergency-stat-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3 class="emergency-stat-number">15</h3>
                    <p class="emergency-stat-label">Temporary Shelters</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="emergency-stat-card">
                    <div class="emergency-stat-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="emergency-stat-number">120+</h3>
                    <p class="emergency-stat-label">Volunteers Trained</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= WHERE WE WORK ======================= -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge-emergency">Our Footprint</span>
            <h2 class="section-title-emergency" style="text-align: center;">Where <span style="color: hsl(140, 82%, 37%);">We Work</span></h2>
            <div class="title-divider-emergency center"></div>
            <p class="text-muted mx-auto" style="max-width: 750px; line-height: 1.7;">
                ADS Nyanza's <strong>Emergency Response Project</strong> operates in <strong>Kisumu</strong>, <strong>Siaya</strong>, <strong>Homa Bay</strong>, <strong>Migori</strong>, <strong>Nyamira</strong>, and <strong>Vihiga Counties</strong>. 
                Through rapid mobilization of resources, community-based response teams, and partnerships with local authorities, we provide essential relief, psychosocial support, and temporary shelter to vulnerable families.
            </p>
        </div>

        <div class="row g-4">
            <!-- Kisumu -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Kisumu County</h4>
                    </div>
                    <div class="location-body">
                        <p>Delivering rapid relief, essential supplies, and temporary shelter to affected families in Kisumu.</p>
                    </div>
                </div>
            </div>

            <!-- Siaya -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Siaya County</h4>
                    </div>
                    <div class="location-body">
                        <p>Supporting disaster-affected communities in Siaya with food, water, temporary shelters, and psychosocial support.</p>
                    </div>
                </div>
            </div>

            <!-- Homa Bay -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Homa Bay County</h4>
                    </div>
                    <div class="location-body">
                        <p>Providing emergency relief and development support in Homa Bay County communities.</p>
                    </div>
                </div>
            </div>

            <!-- Migori -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Migori County</h4>
                    </div>
                    <div class="location-body">
                        <p>Supporting Migori communities with essential relief and recovery programs.</p>
                    </div>
                </div>
            </div>

            <!-- Nyamira -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Nyamira County</h4>
                    </div>
                    <div class="location-body">
                        <p>Providing relief and development support in Nyamira County communities.</p>
                    </div>
                </div>
            </div>

            <!-- Vihiga -->
            <div class="col-lg-4 col-md-6">
                <div class="emergency-location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Vihiga County</h4>
                    </div>
                    <div class="location-body">
                        <p>Providing relief and support to Vihiga County communities during emergencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== EMERGENCY SECTION STYLES - GREEN & WHITE ===== */

/* Badge */
.section-badge-emergency {
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
.section-title-emergency {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Divider */
.title-divider-emergency {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

.title-divider-emergency.center {
    margin: 0.5rem auto 1rem auto;
}

/* Description */
.emergency-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

/* Highlight Box */
.emergency-highlight-box {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin: 1.25rem 0;
}

.emergency-highlight-box i {
    color: #2e7d32;
    font-size: 1.2rem;
    margin-top: 0.1rem;
}

.emergency-highlight-box div {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
}

/* CTA Group */
.emergency-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.emergency-btn-primary {
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

.emergency-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.emergency-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.emergency-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.emergency-btn-outline {
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

.emergency-btn-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* ===== IMAGE WRAPPER ===== */
.emergency-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.emergency-image-wrapper img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.emergency-image-wrapper:hover img {
    transform: scale(1.02);
}

.emergency-image-badge {
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

.emergency-image-stats {
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

.emergency-stat-item {
    text-align: center;
}

.emergency-stat-number {
    display: block;
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
}

.emergency-stat-label {
    display: block;
    font-size: 0.6rem;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.emergency-stat-divider {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
}

/* ===== STAT CARDS ===== */
.emergency-stat-card {
    background: white;
    border-radius: 20px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    height: 100%;
}

.emergency-stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(46, 125, 50, 0.08);
    border-color: rgba(46, 125, 50, 0.2);
}

.emergency-stat-icon {
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

.emergency-stat-card:hover .emergency-stat-icon {
    background: #2e7d32;
}

.emergency-stat-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
    transition: all 0.3s ease;
}

.emergency-stat-card:hover .emergency-stat-icon i {
    color: white;
}

.emergency-stat-number {
    font-size: 1.8rem;
    font-weight: 800;
    color: #1a2b3c;
    margin-bottom: 0.25rem;
}

.emergency-stat-label {
    font-size: 0.8rem;
    color: #6c757d;
    margin: 0;
}

/* ===== LOCATION CARDS ===== */
.emergency-location-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    border: 1px solid #eef2f6;
    height: 100%;
    transition: all 0.3s ease;
}

.emergency-location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
}

.location-header {
    padding: 1rem 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: white;
}

.location-header i {
    font-size: 1.2rem;
}

.location-header h4 {
    font-size: 1rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

.location-body {
    padding: 1.25rem;
}

.location-body p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.6;
    margin: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .section-title-emergency {
        font-size: 2rem;
    }
    
    .emergency-image-wrapper img {
        height: 350px;
        margin-top: 1.5rem;
    }
}

@media (max-width: 768px) {
    .section-title-emergency {
        font-size: 1.6rem;
    }
    
    .emergency-description {
        font-size: 0.9rem;
    }
    
    .emergency-image-wrapper img {
        height: 280px;
    }
    
    .emergency-image-stats {
        padding: 10px 16px;
        gap: 12px;
    }
    
    .emergency-stat-number {
        font-size: 1.8rem;
    }
}

@media (max-width: 576px) {
    .section-title-emergency {
        font-size: 1.3rem;
    }
    
    .emergency-image-wrapper img {
        height: 220px;
    }
    
    .emergency-image-stats {
        padding: 8px 12px;
        gap: 8px;
        bottom: 12px;
    }
    
    .emergency-stat-number {
        font-size: 0.9rem;
    }
    
    .emergency-stat-label {
        font-size: 0.5rem;
    }
    
    .emergency-stat-divider {
        height: 20px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= EMERGENCY RESPONSE END ======================= -->


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
    <div class="container px-lg-2 px-xl-3"> <!-- Added responsive padding -->
        <div class="row gx-3 gx-lg-4"> <!-- Reduced gutter -->
            <!-- Logo & Newsletter Column -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-white text-dark p-3 p-lg-4 rounded shadow-sm"> <!-- Reduced padding -->
                    <a href="Index" class="navbar-brand mb-3">
                        <img src="img/ads.png" alt="ADS-NYANZA Logo" style="height: 65px; max-width: 100%;"> <!-- Reduced height -->
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
                <div class="row gx-3 gx-lg-4"> <!-- Reduced gutter -->
                    <!-- Contact Info Column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Get In Touch</h3> <!-- Reduced font size -->
                        </div>
                        <div class="d-flex mb-2 align-items-start"> <!-- Reduced margin -->
                            <i class="bi bi-geo-alt me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">St. Peters Church Milimani, Along Omolo Agar Road, Kisumu, Kenya</p>
                        </div>
                        <div class="d-flex mb-2 align-items-center"> <!-- Reduced margin -->
                            <i class="bi bi-envelope-open me-2" style="color: hsl(140, 82%, 37%); font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">ads@ads-nyanza.org</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <i class="bi bi-telephone me-2" style="color: hsl(140, 82%, 37%); font-size: 0.9rem;"></i>
                            <p class="mb-0 small" style="font-size: 0.85rem;">+254 726947044</p>
                        </div>
                      <div class="d-flex align-items-center gap-2 mt-3">

    <a href="https://twitter.com/ADS_Nyanza"
   target="_blank"
   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
    <i class="bi bi-twitter-x"></i>
</a>

<a href="https://www.facebook.com/profile.php"
   target="_blank"
   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
   <i class="bi bi-facebook"></i>
</a>

<a href="https://www.linkedin.com/in/ads-nyanza/"
   target="_blank"
   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
    <i class="bi bi-linkedin"></i>
</a>

<a href="https://www.instagram.com/adsnyanza/"
   target="_blank"
   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
   <i class="bi bi-instagram"></i>
</a>

<a href="https://www.youtube.com/@ADS-NYANZA"
   target="_blank"
   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center social-icon">
    <i class="bi bi-youtube"></i>
</a>

</div>

<style>
.social-icon{
    width:40px;
    height:40px;
    padding:0;
    font-size:18px;
}
</style>

                    </div>

                    <!-- Programs Column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Our Programs</h3> <!-- Reduced font size -->
                        </div>
                        <div class="d-flex flex-column">
                            <a href="ecd" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;"> <!-- Reduced font size and padding -->
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Early Childhood Development</span>
                            </a>
                            
                            <a href="icrp" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Integrated Climate Resilience Project</span>
                            </a>
                            
                            <a href="pesp" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>People's Empowerment for Sustainability Project</span>
                            </a>
                            
                            <a href="Global_Fund" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Global Fund</span>
                            </a>
                            
                            <a href="kaliedoscope" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Kaleidoscope</span>
                            </a>
                            
                            <a href="wkpi" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>West Kenya Peace Initiative</span>
                            </a>
                            
                            <a href="emergency" class="footer-link text-light mb-1 text-decoration-none d-flex align-items-start" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Emergency Response</span>
                            </a>
                        </div>
                    </div>

                    <!-- Popular Links Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="section-title section-title-sm position-relative pb-2 mb-3">
                            <h3 class="text-light mb-0" style="font-size: 1.1rem;">Popular Links</h3> <!-- Reduced font size -->
                        </div>
                        <div class="d-flex flex-column">
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="https://ess.ads-nyanza.org" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Staff Portal</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="Our_Blog" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Our Blog</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="careers" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Careers</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="tenders" style="font-size: 0.85rem; padding: 0.15rem 0;">
                                <i class="bi bi-arrow-right me-2 mt-1" style="color: hsl(140, 82%, 37%); flex-shrink: 0; font-size: 0.8rem;"></i>
                                <span>Tenders</span>
                            </a>
                            <a class="text-light mb-1 text-decoration-none footer-link d-flex align-items-start" href="About_Us" style="font-size: 0.85rem; padding: 0.15rem 0;">
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

<!-- Copyright Section -->
<div class="container-fluid text-white py-2" style="background: hsl(140, 82%, 37%);"> <!-- Reduced padding -->
    <div class="container">
        <div class="text-center">
            <p class="mb-0 small" style="font-size: 0.85rem; line-height: 1.4;">
                &copy; <span id="year"></span> <strong class="text-white">ADS Nyanza</strong>. All Rights Reserved.<br class="d-block d-md-none">
                <span class="d-none d-md-inline"> | </span>
                Maintained by ACK Development Services Nyanza
            </p>
        </div>
    </div>
</div>

<style>
    /* Footer responsive fixes - UPDATED */
    .footer-link {
        transition: all 0.3s ease;
    }
    
    .footer-link:hover {
        color: hsl(140, 82%, 37%) !important;
        transform: translateX(3px);
    }
    
    /* Medium laptops (992px - 1199px) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .container {
            max-width: 960px !important;
        }
        
        .bg-white.p-3.p-lg-4 {
            padding: 1rem !important;
        }
        
        .navbar-brand img {
            height: 60px !important;
        }
        
        .col-lg-4 .section-title-sm h3,
        .col-lg-8 .section-title-sm h3 {
            font-size: 1rem !important;
        }
        
        .footer-link {
            font-size: 0.8rem !important;
        }
        
        .small {
            font-size: 0.8rem !important;
        }
    }
    
    /* Large desktops (1200px - 1399px) */
    @media (min-width: 1200px) and (max-width: 1399px) {
        .container {
            max-width: 1140px !important;
        }
    }
    
    /* Extra large desktops (1400px and above) */
    @media (min-width: 1400px) {
        .container {
            max-width: 1320px !important;
        }
    }
    
    /* Tablet and mobile responsive */
    @media (max-width: 991.98px) {
        .row.gx-3.gx-lg-4 {
            --bs-gutter-x: 1rem !important;
        }
        
        .col-lg-4, .col-lg-8 {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .bg-white.p-3.p-lg-4 {
            padding: 1.25rem !important;
            margin-bottom: 1.5rem;
        }
        
        .mb-4.mb-lg-0 {
            margin-bottom: 1.5rem !important;
        }
        
        .section-title-sm {
            margin-top: 0.5rem;
        }
    }
    
    @media (max-width: 767.98px) {
        .bg-white.p-3.p-lg-4 {
            padding: 1rem !important;
        }
        
        .navbar-brand img {
            height: 60px !important;
        }
        
        .small {
            font-size: 0.85rem !important;
        }
        
        .btn-sm-square {
            width: 32px !important;
            height: 32px !important;
        }
        
        .btn-sm-square i {
            font-size: 0.9rem !important;
        }
        
        .input-group-sm .form-control {
            padding: 0.375rem 0.75rem !important;
            font-size: 0.875rem !important;
        }
    }
    
    @media (max-width: 575.98px) {
        .container {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
        
        .row.gx-3.gx-lg-4 {
            --bs-gutter-x: 0.75rem !important;
        }
        
        .col-md-6, .col-md-12 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        
        .bg-white.p-3.p-lg-4 {
            border-radius: 0.5rem !important;
        }
        
        .d-flex.mb-2.align-items-start .small,
        .d-flex.mb-2.align-items-center .small {
            font-size: 0.8rem !important;
        }
        
        .footer-link {
            font-size: 0.8rem !important;
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
<!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>