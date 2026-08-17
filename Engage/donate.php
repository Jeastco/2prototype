<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS NYANZA - Donate</title>
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
<style>
    /* Default link styling - stays professional black */
    .navbar-light .navbar-nav .nav-link {
        color: #333333 !important;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    /* Links turn green on hover/focus instead of blue */
    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .show > .nav-link {
        color: #28A745 !important;
    }

    /* REMOVE BLUE BOX ON CLICK: Targets the dropdown toggles when clicked/focused */
    .navbar-nav .nav-link.dropdown-toggle:focus,
    .navbar-nav .nav-link.dropdown-toggle:active,
    .navbar-nav .dropdown-toggle.show {
        outline: none !important;
        box-shadow: none !important;
        background-color: transparent !important;
    }

    /* Mega Menu Text Content & Underlines change to Green */
    .mega-menu-list a {
        color: #555555 !important;
        text-decoration: underline; 
        text-decoration-color: rgba(40, 167, 69, 0.3) !important; 
        transition: all 0.2s ease;
    }

    /* Active hover state for links inside mega menu drops */
    .mega-menu-list a:hover {
        color: #28A745 !important;
        text-decoration-color: #28A745 !important; 
    }

    /* Changes any custom headings with underlines or borders from blue to green */
    .mega-menu-heading {
        color: #28A745 !important;
        border-color: #28A745 !important;
        text-decoration-color: #28A745 !important;
    }

    /* Global focus override to clean up any remaining default blue rings */
    .navbar-toggler:focus {
        outline: none !important;
        box-shadow: none !important;
    }
</style>

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
                            <a href="/updated/Engage/gallery">Gallery</a>
                            <a href="/updated/Engage/blog">Our Blog</a>
                            <a href="/updated/Engage/publications">Publications</a>
                            <a href="/updated/Engage/testimonials">Testimonials</a>
                        </div>
                        <div class="dropdown-column">
                            <h6 class="dropdown-heading">Get Involved</h6>
                            <a href="/updated/Engage/donate">Donate</a>
                            <a href="/updated/Engage/volunteer">Volunteer</a>
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

<section class="hero-slider position-relative overflow-hidden">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">

            <!-- Slide 1: Child Development -->
            <div class="carousel-item active">
                <div class="hero-image-wrapper">
                    <img src="/updated/img/ecd121212.png" class="hero-image" alt="Moments That Matter">
                    <div class="hero-overlay"></div>
                </div>
                <div class="carousel-caption custom-caption">
                    <span class="hero-badge">Child Development Care & Education</span>
                    <h1>Moments That Matter</h1>
                    <p>Building brighter futures for children, caregivers, and communities through nurturing care and learning.</p>
                    <div class="hero-cta">
                        <a href="/updated/Our%20Projects/ecd" class="hero-btn-primary">Learn More <i class="bi bi-arrow-right"></i></a>
                        <a href="/updated/contact" class="hero-btn-secondary">Get Involved</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Health Systems -->
            <div class="carousel-item">
                <div class="hero-image-wrapper">
                    <img src="/updated/img/gf3.png" class="hero-image" alt="Community Health Empowerment">
                    <div class="hero-overlay"></div>
                </div>
                <div class="carousel-caption custom-caption">
                    <span class="hero-badge">Health Systems Development & Delivery</span>
                    <h1>Empowering Communities Through Health Knowledge</h1>
                    <p>Driving active participation in prevention, treatment, and disease management programs to build healthier, more resilient neighborhoods.</p>
                    <div class="hero-cta">
                        <a href="/updated/Our%20Projects/Global_Fund" class="hero-btn-primary">Learn More <i class="bi bi-arrow-right"></i></a>
                        <a href="/updated/contact" class="hero-btn-secondary">Get Involved</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Livelihoods -->
            <div class="carousel-item">
                <div class="hero-image-wrapper">
                    <img src="/updated/img/livelihood.png" class="hero-image" alt="Livelihoods and Climate Action">
                    <div class="hero-overlay"></div>
                </div>
                <div class="carousel-caption custom-caption">
                    <span class="hero-badge">Livelihoods, Natural Resources Management & Climate Action</span>
                    <h1>Sustainable Livelihoods and Climate Resilience</h1>
                    <p>Empowering communities through sustainable resource management, resilient livelihood strategies, and proactive climate action for a greener tomorrow.</p>
                    <div class="hero-cta">
                        <a href="/updated/Our%20Projects/icrp" class="hero-btn-primary">Learn More <i class="bi bi-arrow-right"></i></a>
                        <a href="/updated/contact" class="hero-btn-secondary">Get Involved</a>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Household Economic Strengthening -->
            <div class="carousel-item">
                <div class="hero-image-wrapper">
                    <img src="/updated/img/household.png" class="hero-image" alt="Household and Economic Strengthening">
                    <div class="hero-overlay"></div>
                </div>
                <div class="carousel-caption custom-caption">
                    <span class="hero-badge">Household & Economic Strengthening</span>
                    <h1>Productive, Self-Reliant, and Resilient Households</h1>
                    <p>Supporting sustainable socio-economic initiatives that drive household productivity, foster independence, and build lasting community economic resilience.</p>
                    <div class="hero-cta">
                        <a href="/updated/Our%20Projects/pesp" class="hero-btn-primary">Learn More <i class="bi bi-arrow-right"></i></a>
                        <a href="/updated/contact" class="hero-btn-secondary">Get Involved</a>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Institutional Development -->
            <div class="carousel-item">
                <div class="hero-image-wrapper">
                    <img src="/updated/img/main.jpg" class="hero-image" alt="Institutional Development">
                    <div class="hero-overlay"></div>
                </div>
                <div class="carousel-caption custom-caption">
                    <span class="hero-badge">Institutional Development</span>
                    <h1>Driven by Mission, Built for Impact</h1>
                    <p>Enhancing the dynamism, effectiveness, and long-term sustainability of ADS-Nyanza to fully deliver on our mandate and transform communities.</p>
                    <div class="hero-cta">
                        <a href="/updated/About_Us" class="hero-btn-primary">Learn More <i class="bi bi-arrow-right"></i></a>
                        <a href="/updated/contact" class="hero-btn-secondary">Get Involved</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<style>
/* ===== HERO SLIDER STYLES ===== */
.hero-slider {
    position: relative;
    background-color: #0f172a;
    overflow: hidden;
}

/* ===== IMAGE WRAPPER ===== */
.hero-image-wrapper {
    position: relative;
    width: 100%;
    height: 75vh;
    overflow: hidden;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transform-origin: center center;
    transition: transform 8s ease;
}

.carousel-item.active .hero-image {
    animation: smoothZoomPan 8s ease-in-out infinite alternate;
}

/* Cinematic Parallax Zoom Effect */
@keyframes smoothZoomPan {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.08);
    }
}

/* ===== OVERLAY ===== */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, 
        rgba(15, 23, 42, 0.8) 0%, 
        rgba(15, 23, 42, 0.4) 50%, 
        rgba(46, 125, 50, 0.2) 100%
    );
    pointer-events: none;
    z-index: 1;
}

/* ===== CAPTION ===== */
.carousel-caption.custom-caption {
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    text-align: left;
    z-index: 2;
    max-width: 650px;
    background: transparent !important;
    padding: 0 !important;
    bottom: auto;
}

/* Badge */
.carousel-caption .hero-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.85);
    backdrop-filter: blur(10px);
    color: #FFFFFF !important;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 0.5rem 1.2rem !important;
    border-radius: 50px;
    margin-bottom: 1rem;
    animation: fadeInDown 0.8s ease;
}

/* Title */
.custom-caption h1 {
    font-size: 3.2rem;
    font-weight: 800;
    color: #FFFFFF;
    line-height: 1.1;
    margin-bottom: 0.75rem;
    animation: fadeInUp 0.8s ease 0.2s both;
}

/* Description */
.custom-caption p {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
    max-width: 560px;
    line-height: 1.6;
    animation: fadeInUp 0.8s ease 0.4s both;
}

/* ===== CTA BUTTONS ===== */
.hero-cta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease 0.6s both;
}

.hero-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #2e7d32;
    color: white;
    padding: 0.7rem 1.8rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.hero-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
    color: white;
}

.hero-btn-primary i {
    transition: transform 0.3s ease;
}

.hero-btn-primary:hover i {
    transform: translateX(5px);
}

.hero-btn-secondary {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: white;
    padding: 0.7rem 1.8rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.hero-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===== INDICATORS ===== */
.carousel-indicators {
    bottom: 30px;
    z-index: 3;
}

.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.4);
    border: none;
    margin: 0 6px;
    transition: all 0.3s ease;
}

.carousel-indicators .active {
    background-color: #2e7d32;
    transform: scale(1.3);
    box-shadow: 0 0 20px rgba(46, 125, 50, 0.4);
}

/* ===== CONTROLS ===== */
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
    z-index: 3;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.hero-slider:hover .carousel-control-prev,
.hero-slider:hover .carousel-control-next {
    opacity: 1;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 40px;
    height: 40px;
    background-size: 60%;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    transition: all 0.3s ease;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: rgba(46, 125, 50, 0.6);
    transform: scale(1.1);
}

/* ===== TEXT SHADOW ===== */
.carousel-caption.custom-caption h1,
.carousel-caption.custom-caption p,
.carousel-caption.custom-caption .hero-badge {
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.4);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .custom-caption h1 {
        font-size: 2.8rem;
    }
}

@media (max-width: 992px) {
    .hero-image-wrapper {
        height: 60vh;
    }
    
    .custom-caption {
        left: 6% !important;
        max-width: 85% !important;
    }
    
    .custom-caption h1 {
        font-size: 2.4rem;
    }
    
    .custom-caption p {
        font-size: 1rem;
        max-width: 100%;
    }
    
    .hero-btn-primary,
    .hero-btn-secondary {
        padding: 0.6rem 1.5rem;
        font-size: 0.8rem;
    }
}

@media (max-width: 768px) {
    .hero-image-wrapper {
        height: 55vh;
    }
    
    .hero-image {
        object-position: center 30%;
    }
    
    .custom-caption {
        left: 5% !important;
        right: 5% !important;
        max-width: 90% !important;
        top: 55%;
    }
    
    .custom-caption h1 {
        font-size: 1.8rem;
    }
    
    .custom-caption p {
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .carousel-caption .hero-badge {
        font-size: 0.6rem;
        padding: 0.3rem 0.8rem !important;
        margin-bottom: 0.5rem;
    }
    
    .hero-cta {
        gap: 0.5rem;
    }
    
    .hero-btn-primary,
    .hero-btn-secondary {
        padding: 0.5rem 1.2rem;
        font-size: 0.75rem;
    }
    
    .carousel-indicators {
        bottom: 15px;
    }
    
    .carousel-indicators button {
        width: 8px;
        height: 8px;
        margin: 0 4px;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 8%;
        opacity: 0.3;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 30px;
        height: 30px;
    }
}

@media (max-width: 480px) {
    .hero-image-wrapper {
        height: 50vh;
    }
    
    .hero-image {
        object-position: center 20%;
    }
    
    .custom-caption h1 {
        font-size: 1.4rem;
    }
    
    .custom-caption p {
        font-size: 0.8rem;
    }
    
    .carousel-caption .hero-badge {
        font-size: 0.5rem;
        padding: 0.2rem 0.6rem !important;
    }
    
    .hero-btn-primary,
    .hero-btn-secondary {
        padding: 0.4rem 1rem;
        font-size: 0.7rem;
    }
    
    .hero-cta {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.4rem;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 25px;
        height: 25px;
    }
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- ======================= 1. HERO SECTION ======================= -->
<section id="donate-hero" style="padding: 80px 0; background: linear-gradient(135deg, #fafbfc 0%, #f0f2f5 100%); position: relative; overflow: hidden;">
    <!-- Background decorative elements - softer -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(46,125,50,0.06) 0%, transparent 70%); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -80px; left: -80px; width: 350px; height: 350px; background: radial-gradient(circle, rgba(46,125,50,0.04) 0%, transparent 70%); border-radius: 50%;"></div>
    
    <div class="container" style="max-width: 1280px; margin: 0 auto; padding: 0 24px; position: relative; z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(46,125,50,0.10); padding: 6px 18px; border-radius: 100px; margin-bottom: 28px;">
                    <span style="display: inline-block; width: 8px; height: 8px; background: #2e7d32; border-radius: 50%; animation: pulse 1.5s infinite;"></span>
                    <span style="font-size: 0.75rem; font-weight: 600; letter-spacing: 1px; color: #2e7d32; text-transform: uppercase;">Join the Movement</span>
                </div>
                
                <h1 style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; color: #1a2a3a;">
                    Your Generosity<br>Transforms Lives
                </h1>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: #4a5568; margin-bottom: 32px; max-width: 90%;">
                    Every contribution fuels our mission to empower families, build resilience, 
                    and drive sustainable community development across the Lake Region.
                </p>
                
                <!-- Impact metrics - cleaner -->
                <div style="display: flex; gap: 40px; margin-bottom: 40px; flex-wrap: wrap;">
                    <div>
                        <span style="font-size: 2rem; font-weight: 800; color: #1a2a3a; display: block; letter-spacing: -0.5px;">50K+</span>
                        <span style="font-size: 0.8rem; color: #6b7a8f; letter-spacing: 0.3px;">Lives Impacted</span>
                    </div>
                    <div>
                        <span style="font-size: 2rem; font-weight: 800; color: #1a2a3a; display: block; letter-spacing: -0.5px;">15+</span>
                        <span style="font-size: 0.8rem; color: #6b7a8f; letter-spacing: 0.3px;">Active Programs</span>
                    </div>
                    <div>
                        <span style="font-size: 2rem; font-weight: 800; color: #1a2a3a; display: block; letter-spacing: -0.5px;">8+</span>
                        <span style="font-size: 0.8rem; color: #6b7a8f; letter-spacing: 0.3px;">Counties Reached</span>
                    </div>
                </div>
                
                <!-- CTA Buttons - refined -->
                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <a href="#" style="display: inline-flex; align-items: center; padding: 14px 34px; background: #2e7d32; color: #fff; font-weight: 600; font-size: 0.9rem; border-radius: 50px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 8px 25px rgba(46,125,50,0.25); border: none; cursor: pointer; letter-spacing: 0.3px;">
                        <i class="bi bi-credit-card me-2"></i> Donate Now
                        <i class="bi bi-arrow-right ms-2" style="transition: transform 0.3s ease;"></i>
                    </a>
                    <a href="https://www.youtube.com/@ads-nyanza" style="display: inline-flex; align-items: center; padding: 14px 32px; background: transparent; color: #1a2a3a; font-weight: 600; font-size: 0.9rem; border-radius: 50px; text-decoration: none; transition: all 0.3s ease; border: 1.5px solid #d1d5db; cursor: pointer; letter-spacing: 0.3px;">
                        <i class="bi bi-play-circle me-2" style="color: #2e7d32;"></i> Watch Impact Story
                    </a>
                </div>
                
                <!-- Trust badges - cleaner -->
                <div style="display: flex; align-items: center; gap: 24px; margin-top: 32px; flex-wrap: wrap;">
                    <span style="display: flex; align-items: center; gap: 6px; font-size: 0.8rem; color: #4a5568;">
                        <i class="bi bi-shield-check" style="color: #2e7d32; font-size: 1rem;"></i> Secure Donation
                    </span>
                    <span style="display: flex; align-items: center; gap: 6px; font-size: 0.8rem; color: #4a5568;">
                        <i class="bi bi-receipt" style="color: #2e7d32; font-size: 1rem;"></i> Tax Receipt
                    </span>
                    <span style="display: flex; align-items: center; gap: 6px; font-size: 0.8rem; color: #4a5568;">
                        <i class="bi bi-people" style="color: #2e7d32; font-size: 1rem;"></i> 100% Impact
                    </span>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div style="position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.08);">
                    <img src="img/3.JPG" alt="Community Impact" style="width: 100%; height: 420px; object-fit: cover; display: block;" onerror="this.src='https://placehold.co/600x500/1a2a3a/white?text=Make+a+Difference'">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 30px; background: linear-gradient(transparent, rgba(26,42,58,0.6));"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Keyframe for pulse animation */
@keyframes pulse {
    0%, 100% {
        opacity: 1;
        transform: scale(1);
    }
    50% {
        opacity: 0.5;
        transform: scale(0.8);
    }
}

/* Hover effects for buttons */
.btn-donate-primary:hover {
    background: #1b5e20 !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(46,125,50,0.35) !important;
}

.btn-donate-primary:hover i.bi-arrow-right {
    transform: translateX(4px);
}

.btn-donate-outline:hover {
    border-color: #2e7d32 !important;
    background: rgba(46,125,50,0.05) !important;
}
</style>

<!-- ======================= 2. IMPACT STATS SECTION ======================= -->
<section style="padding: 60px 0; background: #ffffff;">
    <div class="container" style="max-width: 1280px; margin: 0 auto; padding: 0 24px;">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="impact-stat-card">
                    <div class="impact-stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="impact-stat-number">50,000+</h3>
                    <p class="impact-stat-label">Beneficiaries Served</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="impact-stat-card">
                    <div class="impact-stat-icon">
                        <i class="bi bi-tree-fill"></i>
                    </div>
                    <h3 class="impact-stat-number">15,000+</h3>
                    <p class="impact-stat-label">Trees Planted</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="impact-stat-card">
                    <div class="impact-stat-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3 class="impact-stat-number">10,000+</h3>
                    <p class="impact-stat-label">Children Educated</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="impact-stat-card">
                    <div class="impact-stat-icon">
                        <i class="bi bi-house-heart-fill"></i>
                    </div>
                    <h3 class="impact-stat-number">8,000+</h3>
                    <p class="impact-stat-label">Families Empowered</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= 3. WAYS TO GIVE SECTION ======================= -->
<section style="padding: 80px 0; background: #ffffff;">
    <div class="container" style="max-width: 1280px; margin: 0 auto; padding: 0 24px;">
        <div class="text-center mb-5">
            <span style="display: inline-block; font-size: 0.7rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: #2e7d32; background: rgba(46,125,50,0.08); padding: 6px 20px; border-radius: 100px; margin-bottom: 12px;">
                WAYS TO GIVE
            </span>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; color: #1a2a3a; margin-bottom: 8px;">
                Support Our Mission
            </h2>
            <div style="width: 60px; height: 3px; background: #2e7d32; margin: 12px auto 16px; border-radius: 4px;"></div>
            <p style="font-size: 1rem; color: #6b7a8f; max-width: 500px; margin: 0 auto; font-family: 'Georgia', serif;">
                Choose the giving option that works best for you
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1: One-Time Donation -->
            <div class="col-md-6 col-lg-3">
                <div style="background: #ffffff; padding: 32px 24px 28px; border-radius: 16px; border: 1px solid #eef0f2; text-align: center; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); height: 100%; box-shadow: 0 2px 8px rgba(0,0,0,0.02); position: relative; overflow: hidden;">
                    <!-- Top accent line -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2e7d32, #66bb6a);"></div>
                    
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(46,125,50,0.06); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                        <i class="bi bi-credit-card" style="font-size: 1.6rem; color: #2e7d32;"></i>
                    </div>
                    <h5 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 700; color: #1a2a3a; margin-bottom: 10px;">
                        One-Time Donation
                    </h5>
                    <p style="font-size: 0.85rem; color: #6b7a8f; line-height: 1.6; margin-bottom: 16px; font-family: 'Georgia', serif;">
                        Make a secure one-time contribution to support our immediate community needs.
                    </p>
                    <span style="display: inline-block; font-size: 0.7rem; font-weight: 600; color: #2e7d32; text-transform: uppercase; letter-spacing: 1px; padding: 8px 0; border-top: 1px solid #eef0f2; width: 100%;">
                        Give Now →
                    </span>
                </div>
            </div>

            <!-- Card 2: Monthly Giving -->
            <div class="col-md-6 col-lg-3">
                <div style="background: #ffffff; padding: 32px 24px 28px; border-radius: 16px; border: 1px solid #eef0f2; text-align: center; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); height: 100%; box-shadow: 0 2px 8px rgba(0,0,0,0.02); position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2e7d32, #66bb6a);"></div>
                    
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(46,125,50,0.06); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                        <i class="bi bi-calendar-heart" style="font-size: 1.6rem; color: #2e7d32;"></i>
                    </div>
                    <h5 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 700; color: #1a2a3a; margin-bottom: 10px;">
                        Monthly Giving
                    </h5>
                    <p style="font-size: 0.85rem; color: #6b7a8f; line-height: 1.6; margin-bottom: 16px; font-family: 'Georgia', serif;">
                        Join our monthly giving program for sustainable, long-term impact.
                    </p>
                    <span style="display: inline-block; font-size: 0.7rem; font-weight: 600; color: #2e7d32; text-transform: uppercase; letter-spacing: 1px; padding: 8px 0; border-top: 1px solid #eef0f2; width: 100%;">
                        Become a Partner →
                    </span>
                </div>
            </div>

            <!-- Card 3: Corporate Giving -->
            <div class="col-md-6 col-lg-3">
                <div style="background: #ffffff; padding: 32px 24px 28px; border-radius: 16px; border: 1px solid #eef0f2; text-align: center; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); height: 100%; box-shadow: 0 2px 8px rgba(0,0,0,0.02); position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2e7d32, #66bb6a);"></div>
                    
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(46,125,50,0.06); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                        <i class="bi bi-building" style="font-size: 1.6rem; color: #2e7d32;"></i>
                    </div>
                    <h5 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 700; color: #1a2a3a; margin-bottom: 10px;">
                        Corporate Giving
                    </h5>
                    <p style="font-size: 0.85rem; color: #6b7a8f; line-height: 1.6; margin-bottom: 16px; font-family: 'Georgia', serif;">
                        Partner with us through corporate sponsorships and matching gifts.
                    </p>
                    <span style="display: inline-block; font-size: 0.7rem; font-weight: 600; color: #2e7d32; text-transform: uppercase; letter-spacing: 1px; padding: 8px 0; border-top: 1px solid #eef0f2; width: 100%;">
                        Learn More →
                    </span>
                </div>
            </div>

            <!-- Card 4: In-Kind Donations -->
            <div class="col-md-6 col-lg-3">
                <div style="background: #ffffff; padding: 32px 24px 28px; border-radius: 16px; border: 1px solid #eef0f2; text-align: center; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); height: 100%; box-shadow: 0 2px 8px rgba(0,0,0,0.02); position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2e7d32, #66bb6a);"></div>
                    
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(46,125,50,0.06); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                        <i class="bi bi-gift" style="font-size: 1.6rem; color: #2e7d32;"></i>
                    </div>
                    <h5 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 700; color: #1a2a3a; margin-bottom: 10px;">
                        In-Kind Donations
                    </h5>
                    <p style="font-size: 0.85rem; color: #6b7a8f; line-height: 1.6; margin-bottom: 16px; font-family: 'Georgia', serif;">
                        Donate goods, supplies, or services to support our programs.
                    </p>
                    <span style="display: inline-block; font-size: 0.7rem; font-weight: 600; color: #2e7d32; text-transform: uppercase; letter-spacing: 1px; padding: 8px 0; border-top: 1px solid #eef0f2; width: 100%;">
                        Contact Us →
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Card hover effects */
.give-card-wrapper:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
    border-color: #2e7d32;
}

.give-card-wrapper:hover .give-icon-circle {
    background: rgba(46, 125, 50, 0.12);
    transform: scale(1.05);
}

.give-card-wrapper:hover .give-cta {
    color: #1b5e20;
}
</style><!-- ======================= DONATION PAGE - COMPLETE ======================= -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ===== GLOBAL RESET & BASE ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: #ffffff;
    color: #1a2a3a;
    line-height: 1.6;
}

.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
}

/* ===== SECTION HEADERS ===== */
.section-label {
    display: inline-block;
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #2e7d32;
    background: rgba(46,125,50,0.06);
    padding: 4px 18px;
    border-radius: 100px;
    margin-bottom: 12px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 8px;
}

.section-divider {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 12px auto 20px;
    border-radius: 4px;
}

.section-subtitle {
    color: #6b7a8f;
    max-width: 600px;
    margin: 0 auto;
    font-size: 0.95rem;
}

/* ===== HERO SECTION ===== */
#donate-hero {
    padding: 80px 0;
    background: linear-gradient(135deg, #fafbfc 0%, #f0f2f5 100%);
    position: relative;
    overflow: hidden;
}

.hero-bg-circle {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(46,125,50,0.05) 0%, transparent 70%);
}

.hero-bg-circle:nth-child(1) {
    top: -100px;
    right: -100px;
    width: 400px;
    height: 400px;
}
.hero-bg-circle:nth-child(2) {
    bottom: -80px;
    left: -80px;
    width: 350px;
    height: 350px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(46,125,50,0.10);
    padding: 6px 18px;
    border-radius: 100px;
    margin-bottom: 28px;
}

.hero-badge-dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #2e7d32;
    border-radius: 50%;
    animation: pulse 1.5s infinite;
}

.hero-badge-text {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 1px;
    color: #2e7d32;
    text-transform: uppercase;
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.15;
    color: #1a2a3a;
    margin-bottom: 20px;
}

.hero-description {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 32px;
    max-width: 90%;
}

.hero-metrics {
    display: flex;
    gap: 40px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.hero-metric-number {
    font-size: 2rem;
    font-weight: 800;
    color: #1a2a3a;
    display: block;
    letter-spacing: -0.5px;
}

.hero-metric-label {
    font-size: 0.8rem;
    color: #6b7a8f;
    letter-spacing: 0.3px;
}

.hero-buttons {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.btn-primary {
    display: inline-flex;
    align-items: center;
    padding: 14px 34px;
    background: #1a2a3a;
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    letter-spacing: 0.3px;
}

.btn-primary:hover {
    background: #0f1a26;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(26,42,58,0.25);
    color: #fff;
}

.btn-outline {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    background: transparent;
    color: #1a2a3a;
    font-weight: 600;
    font-size: 0.9rem;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1.5px solid #d1d5db;
    cursor: pointer;
    letter-spacing: 0.3px;
}

.btn-outline:hover {
    border-color: #2e7d32;
    background: rgba(46,125,50,0.04);
    color: #1a2a3a;
}

.hero-trust {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-top: 32px;
    flex-wrap: wrap;
}

.hero-trust-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.8rem;
    color: #4a5568;
}

.hero-trust-item i {
    color: #2e7d32;
    font-size: 1rem;
}

.hero-image-wrapper {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08);
}

.hero-image-wrapper img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
}

/* ===== IMPACT CATEGORIES ===== */
#impact-categories {
    padding: 80px 0;
    background: #f8fafc;
}

.impact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 28px;
    margin-top: 48px;
}

.impact-card {
    background: white;
    border-radius: 20px;
    padding: 28px 28px 32px;
    transition: all 0.35s ease;
    border: 1px solid #eef0f2;
    cursor: default;
    height: 100%;
}

.impact-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.06);
    border-color: #2e7d32;
}

.impact-card-icon {
    width: 56px;
    height: 56px;
    background: rgba(46,125,50,0.06);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
}

.impact-card-icon i {
    color: #2e7d32;
    font-size: 1.5rem;
}

.impact-card h3 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
}

.impact-card p {
    color: #6b7a8f;
    line-height: 1.7;
    margin-bottom: 0;
    font-size: 0.9rem;
}

/* ===== WAYS TO GIVE ===== */
#ways-to-give {
    padding: 80px 0;
    background: #ffffff;
}

.give-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 24px;
    margin-top: 48px;
}

.give-card {
    text-align: center;
    padding: 32px 20px 28px;
    background: #f8fafc;
    border-radius: 20px;
    transition: all 0.35s ease;
    border: 1px solid transparent;
    cursor: default;
}

.give-card:hover {
    transform: translateY(-5px);
    background: white;
    box-shadow: 0 15px 30px rgba(0,0,0,0.06);
    border-color: #eef0f2;
}

.give-card-icon {
    width: 64px;
    height: 64px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.04);
}

.give-card-icon i {
    color: #2e7d32;
    font-size: 1.6rem;
}

.give-card h5 {
    font-size: 1rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 6px;
}

.give-card p {
    color: #6b7a8f;
    font-size: 0.85rem;
    margin-bottom: 0;
    line-height: 1.5;
}

/* ===== DONATION FORM ===== */
#donation-form {
    padding: 80px 0;
    background: #f7f8fa;
}

.form-container {
    background: #ffffff;
    border-radius: 20px;
    padding: 48px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.04);
    border: 1px solid #eef0f2;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-size: 0.8rem;
    font-weight: 600;
    color: #1a2a3a;
    margin-bottom: 6px;
}

.form-input {
    width: 100%;
    padding: 14px 18px;
    border: 1.5px solid #e2e6ea;
    border-radius: 12px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    background: #fafbfc;
    outline: none;
    font-family: inherit;
}

.form-input:focus {
    border-color: #2e7d32;
    background: #ffffff;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.amount-buttons {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 10px;
}

.amount-btn {
    padding: 8px 18px;
    border: 1.5px solid #e2e6ea;
    border-radius: 30px;
    background: #fafbfc;
    font-size: 0.8rem;
    font-weight: 500;
    color: #1a2a3a;
    cursor: pointer;
    transition: all 0.3s ease;
}

.amount-btn:hover {
    border-color: #2e7d32;
    background: rgba(46,125,50,0.04);
}

.custom-amount {
    display: flex;
    align-items: center;
    gap: 10px;
}

.custom-amount span {
    font-size: 0.8rem;
    color: #6b7a8f;
}

.custom-amount input {
    width: 150px;
    padding: 12px 16px;
    border: 1.5px solid #e2e6ea;
    border-radius: 12px;
    font-size: 0.9rem;
    background: #fafbfc;
    outline: none;
    font-family: inherit;
    transition: all 0.3s ease;
}

.custom-amount input:focus {
    border-color: #2e7d32;
    background: #ffffff;
}

.btn-submit {
    width: 100%;
    padding: 16px 32px;
    background: #1a2a3a;
    color: white;
    font-weight: 600;
    font-size: 1rem;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.btn-submit:hover {
    background: #0f1a26;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(26,42,58,0.3);
}

/* ===== SIDEBAR ===== */
.sidebar-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.04);
    border: 1px solid #eef0f2;
    height: 100%;
}

.sidebar-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 20px;
}

.sidebar-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 16px;
}

.sidebar-item:last-child {
    margin-bottom: 0;
}

.sidebar-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(46,125,50,0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.sidebar-icon i {
    color: #2e7d32;
    font-size: 1.2rem;
}

.sidebar-item h4 {
    font-size: 0.9rem;
    font-weight: 700;
    color: #1a2a3a;
    margin: 0 0 4px 0;
}

.sidebar-item p {
    font-size: 0.8rem;
    color: #6b7a8f;
    margin: 0;
    line-height: 1.5;
}

.sidebar-note {
    background: #f8fafc;
    border-radius: 12px;
    padding: 16px 20px;
    border-left: 3px solid #1a2a3a;
    margin: 24px 0 20px;
}

.sidebar-note p {
    font-size: 0.8rem;
    color: #1a2a3a;
    margin: 0;
    line-height: 1.6;
    font-weight: 500;
}

.sidebar-contact {
    padding-top: 20px;
    border-top: 1px solid #eef0f2;
}

.sidebar-contact p {
    font-size: 0.75rem;
    color: #6b7a8f;
    margin: 0;
    line-height: 1.5;
}

.sidebar-contact a {
    color: #1a2a3a;
    text-decoration: none;
    font-weight: 500;
}

/* ===== SUCCESS MODAL ===== */
#successModal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(8px);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: #ffffff;
    border-radius: 24px;
    padding: 48px 40px 40px;
    max-width: 480px;
    width: 90%;
    text-align: center;
    box-shadow: 0 30px 80px rgba(0,0,0,0.2);
    animation: modalFadeIn 0.4s ease;
}

.modal-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(46,125,50,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.modal-icon i {
    font-size: 3rem;
    color: #2e7d32;
}

.modal-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 8px;
}

.modal-text {
    color: #6b7a8f;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 24px;
}

.modal-confirm {
    background: #f8fafc;
    border-radius: 12px;
    padding: 12px 16px;
    margin-bottom: 24px;
    text-align: left;
}

.modal-confirm p {
    font-size: 0.75rem;
    color: #6b7a8f;
    margin: 0 0 4px 0;
}

.modal-confirm strong {
    font-size: 0.9rem;
    color: #1a2a3a;
    word-break: break-all;
}

.modal-btn {
    padding: 12px 40px;
    background: #1a2a3a;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.modal-btn:hover {
    background: #0f1a26;
}

/* ===== CONTACT SECTION ===== */
#contact-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
}

.contact-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.08);
    padding: 6px 18px;
    border-radius: 100px;
    margin-bottom: 24px;
}

.contact-label i {
    color: #2e7d32;
    font-size: 0.8rem;
}

.contact-label span {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 1px;
    color: #94a3b8;
    text-transform: uppercase;
}

.contact-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
}

.contact-text {
    color: #cbd5e1;
    margin-bottom: 32px;
    line-height: 1.6;
}

.contact-details {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
}

.contact-details div {
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-details i {
    color: #2e7d32;
    font-size: 1.1rem;
}

.contact-details span {
    color: #cbd5e1;
}

.contact-card {
    background: white;
    border-radius: 28px;
    padding: 32px;
    text-align: center;
    box-shadow: 0 25px 45px -15px rgba(0,0,0,0.3);
}

.contact-card-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #2e7d32, #1b5e20);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
}

.contact-card-icon i {
    color: white;
    font-size: 1.8rem;
}

.contact-card h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 6px;
}

.contact-card p {
    color: #6b7a8f;
    font-size: 0.85rem;
    margin-bottom: 20px;
}

.contact-buttons {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}

.btn-email {
    background: #2e7d32;
    color: white;
    padding: 10px 24px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.85rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-email:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    color: white;
}

.btn-call {
    background: transparent;
    color: #2e7d32;
    padding: 10px 24px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.85rem;
    border: 2px solid #2e7d32;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-call:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* ===== ANIMATIONS ===== */
@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
}

@keyframes modalFadeIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to { opacity: 1; transform: scale(1) translateY(0); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .hero-title { font-size: 2.8rem; }
    .hero-image-wrapper img { height: 320px; }
    .form-row { grid-template-columns: 1fr; }
    .section-title { font-size: 1.8rem; }
    .impact-grid { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 768px) {
    .hero-title { font-size: 2.2rem; }
    .hero-description { max-width: 100%; }
    .hero-metrics { gap: 24px; }
    .hero-image-wrapper img { height: 250px; }
    .impact-grid { grid-template-columns: 1fr; }
    .give-grid { grid-template-columns: 1fr 1fr; }
    .form-container { padding: 24px; }
    .sidebar-card { padding: 24px; }
    .contact-title { font-size: 1.8rem; }
    .contact-details { flex-direction: column; gap: 12px; }
}

@media (max-width: 576px) {
    .give-grid { grid-template-columns: 1fr; }
    .hero-buttons { flex-direction: column; align-items: stretch; }
    .hero-buttons a { justify-content: center; }
    .hero-trust { flex-direction: column; align-items: flex-start; gap: 10px; }
    .modal-content { padding: 32px 20px 28px; }
}
</style>


<!-- ======================= 1. HERO SECTION ======================= -->
<section id="donate-hero">
    <div class="hero-bg-circle"></div>
    <div class="hero-bg-circle"></div>
    
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    <span class="hero-badge-text">Join the Movement</span>
                </div>
                
                <h1 class="hero-title">Your Generosity<br>Transforms Lives</h1>
                
                <p class="hero-description">
                    Every contribution fuels our mission to empower families, build resilience, 
                    and drive sustainable community development across the Lake Region.
                </p>
                
                <div class="hero-metrics">
                    <div>
                        <span class="hero-metric-number">2M+</span>
                        <span class="hero-metric-label">Lives Impacted</span>
                    </div>
                    <div>
                        <span class="hero-metric-number">7+</span>
                        <span class="hero-metric-label">Active Programs</span>
                    </div>
                    <div>
                        <span class="hero-metric-number">8+</span>
                        <span class="hero-metric-label">Counties Reached</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">
                        <i class="bi bi-credit-card me-2"></i> Donate Now
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="https://www.youtube.com/@ads-nyanza" class="btn-outline">
                        <i class="bi bi-play-circle me-2"></i> Our Impact
                    </a>
                </div>
                
                <div class="hero-trust">
                    <span class="hero-trust-item"><i class="bi bi-shield-check"></i> Secure Donation</span>
                    <span class="hero-trust-item"><i class="bi bi-receipt"></i> Tax Receipt</span>
                    <span class="hero-trust-item"><i class="bi bi-people"></i> 100% Impact</span>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image-wrapper">
                    <img src="img/3.JPG" alt="Community Impact" onerror="this.src='https://placehold.co/600x500/1a2a3a/white?text=Make+a+Difference'">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================= 2. IMPACT CATEGORIES ======================= -->
<section id="impact-categories">
    <div class="container">
        <div style="text-align: center;">
            <span class="section-label">Areas of Impact</span>
            <h2 class="section-title">Where Your Support Makes a Difference</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">Your generosity powers transformative programs across seven key impact areas, creating lasting change in communities.</p>
        </div>

        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-book-heart"></i></div>
                <h3>Early Childhood Development & Education</h3>
                <p>We establish secure, stimulating environments for young minds and empower caregivers to deliver consistent, nurturing care that transforms early learning outcomes.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-seedling"></i></div>
                <h3>Improved Livelihoods & Food Security</h3>
                <p>Empowering over 2 million households through climate-smart agriculture, drought-resistant crops, and sustainable value chains that boost incomes and build lasting resilience.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-heart-pulse"></i></div>
                <h3>Health, HIV Advocacy & Social Change</h3>
                <p>Reaching over 17,000 individuals with life-saving health services, reducing infections and AIDS-related deaths while addressing GBV and supporting vulnerable communities.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-building"></i></div>
                <h3>Household & Economic Strengthening</h3>
                <p>Driving socio-economic initiatives that enhance household productivity, self-reliance, and long-term resilience for vulnerable families across the region.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-arrow-repeat"></i></div>
                <h3>Social Behaviour Change</h3>
                <p>Transforming communities from within — achieving 71% increase in male caregiving, reducing GBV, and eliminating child malnutrition from 14 cases to zero.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-megaphone"></i></div>
                <h3>Civic Engagement & Accountability</h3>
                <p>Empowering communities to influence county budgets, improve public services, and advocate for the rights of marginalized groups, widows, and orphans.</p>
            </div>
            
            <div class="impact-card">
                <div class="impact-card-icon"><i class="bi bi-handshake"></i></div>
                <h3>Peacebuilding & Conflict Resolution</h3>
                <p>Through the Western Kenya Peace Initiative, reaching over 30,000 people with conflict resolution efforts that unite communities and transform harmful practices.</p>
            </div>
        </div>
    </div>
</section>


<!-- ======================= 3. DONATION FORM + SIDEBAR ======================= -->
<section id="donation-form">
    <div class="container">
        <div class="row g-5">
            <!-- Left: Form -->
            <div class="col-lg-7">
                <div class="form-container">
                    <div style="margin-bottom: 32px;">
                        <span class="section-label">MAKE A DONATION</span>
                        <h2 style="font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 700; color: #1a2a3a; margin-bottom: 6px;">
                            Your Gift Matters
                        </h2>
                        <p style="color: #6b7a8f; font-size: 0.9rem; margin: 0;">
                            Fill in the details below to complete your donation.
                        </p>
                    </div>

                    <form id="donationForm" onsubmit="handleDonation(event)">
                        <!-- Full Name -->
                        <div class="form-group">
                            <label class="form-label">Full Name <span style="color: #e74c3c;">*</span></label>
                            <input type="text" id="fullName" required class="form-input" placeholder="Enter your full name">
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="form-label">Email Address <span style="color: #e74c3c;">*</span></label>
                            <input type="email" id="email" required class="form-input" placeholder="you@example.com">
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" id="phone" class="form-input" placeholder="+254 700 000 000">
                        </div>

                        <div class="form-row">
                            <!-- Donation Type -->
                            <div>
                                <label class="form-label">Donation Type <span style="color: #e74c3c;">*</span></label>
                                <select id="donationType" required class="form-input" style="appearance: none; cursor: pointer;">
                                    <option value="">Select type</option>
                                    <option value="One-Time">One-Time</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quarterly">Quarterly</option>
                                </select>
                            </div>

                            <!-- Currency -->
                            <div>
                                <label class="form-label">Currency <span style="color: #e74c3c;">*</span></label>
                                <select id="currency" required class="form-input" style="appearance: none; cursor: pointer;">
                                    <option value="KES">🇰🇪 KES - Kenyan Shilling</option>
                                    <option value="USD">🇺🇸 USD - US Dollar</option>
                                    <option value="EUR">🇪🇺 EUR - Euro</option>
                                    <option value="GBP">🇬🇧 GBP - British Pound</option>
                                </select>
                            </div>
                        </div>

                        <!-- Amount -->
                        <div class="form-group">
                            <label class="form-label">Donation Amount <span style="color: #e74c3c;">*</span></label>
                            <div class="amount-buttons">
                                <button type="button" onclick="setAmount(500, 'KES')" class="amount-btn">KES 500</button>
                                <button type="button" onclick="setAmount(1000, 'KES')" class="amount-btn">KES 1,000</button>
                                <button type="button" onclick="setAmount(2500, 'KES')" class="amount-btn">KES 2,500</button>
                                <button type="button" onclick="setAmount(5000, 'KES')" class="amount-btn">KES 5,000</button>
                                <button type="button" onclick="setAmount(10000, 'KES')" class="amount-btn">KES 10,000</button>
                            </div>
                            <div class="custom-amount">
                                <span>Or enter custom:</span>
                                <input type="number" id="customAmount" min="1" placeholder="Amount">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label class="form-label">Message (Optional)</label>
                            <textarea id="message" rows="3" class="form-input" style="resize: vertical;" placeholder="Leave a message of encouragement..."></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            <i class="bi bi-send"></i> Complete Donation
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <div class="col-lg-5">
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Why Donate?</h3>
                    
                    <div style="border-bottom: 1px solid #eef0f2; padding-bottom: 24px; margin-bottom: 24px;">
                        <div class="sidebar-item">
                            <div class="sidebar-icon"><i class="bi bi-house-heart"></i></div>
                            <div>
                                <h4>Empower Families</h4>
                                <p>Your gift supports nurturing care, parenting, and family resilience programs.</p>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-icon"><i class="bi bi-tree"></i></div>
                            <div>
                                <h4>Climate Resilience</h4>
                                <p>Tree planting, clean energy, and sustainable agriculture initiatives.</p>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-icon"><i class="bi bi-heart-pulse"></i></div>
                            <div>
                                <h4>Maternal & Child Health</h4>
                                <p>Supporting mothers, adolescents, and children with quality healthcare.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-note">
                        <p><i class="bi bi-shield-check" style="color: #2e7d32; margin-right: 8px;"></i>
                        Your donation is secure and tax-deductible. You'll receive a receipt via email.</p>
                    </div>

                    <div class="sidebar-contact">
                        <p><i class="bi bi-envelope" style="margin-right: 6px;"></i> 
                        For questions, contact: <a href="mailto:ads@ads-nyanza.org">ads@ads-nyanza.org</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================= 4. WAYS TO GIVE ======================= -->
<section id="ways-to-give">
    <div class="container">
        <div style="text-align: center;">
            <span class="section-label">Giving Options</span>
            <h2 class="section-title">Flexible Ways to Support</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">Transparency and accountability are at the core of our giving process. Choose the method most convenient for you.</p>
        </div>

        <div class="give-grid">
            <div class="give-card">
                <div class="give-card-icon"><i class="bi bi-globe"></i></div>
                <h5>Online Giving</h5>
                <p>Make an instant contribution via our secure payment link.</p>
            </div>
            
            <div class="give-card">
                <div class="give-card-icon"><i class="bi bi-bank"></i></div>
                <h5>Bank Transfer</h5>
                <p>Send your donation directly to our official account.</p>
            </div>
            
            <div class="give-card">
                <div class="give-card-icon"><i class="bi bi-person-check"></i></div>
                <h5>In-Person Giving</h5>
                <p>Visit our offices to donate and receive a receipt on-site.</p>
            </div>
            
            <div class="give-card">
                <div class="give-card-icon"><i class="bi bi-box-seam"></i></div>
                <h5>In-Kind Support</h5>
                <p>Donate essential goods, materials, or professional services.</p>
            </div>
        </div>
    </div>
</section>


<!-- ======================= 5. CONTACT SECTION ======================= -->
<section id="contact-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="contact-label">
                    <i class="bi bi-chat-heart-fill"></i>
                    <span>Get in Touch</span>
                </div>
                <h2 class="contact-title">Ready to Make a Difference?</h2>
                <p class="contact-text">Reach out to us for guidance on donation options, partnerships, or ongoing initiatives. Our team is here to help.</p>
                
                <div class="contact-details">
                    <div><i class="bi bi-envelope-fill"></i><span>ads@ads-nyanza.org</span></div>
                    <div><i class="bi bi-telephone-fill"></i><span>+254 726 947 044</span></div>
                    <div><i class="bi bi-geo-alt-fill"></i><span>Kisumu, Kenya</span></div>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="contact-card">
                    <div class="contact-card-icon"><i class="bi bi-hand-heart"></i></div>
                    <h5>Need Assistance?</h5>
                    <p>Our donor support team is available Monday-Friday, 8am-5pm</p>
                    <div class="contact-buttons">
                        <a href="mailto:ads@ads-nyanza.org" class="btn-email">
                            <i class="bi bi-envelope"></i> Email Us
                        </a>
                        <a href="tel:+254726947044" class="btn-call">
                            <i class="bi bi-telephone"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================= SUCCESS MODAL ======================= -->
<div id="successModal">
    <div class="modal-content">
        <div class="modal-icon"><i class="bi bi-check-circle-fill"></i></div>
        <h3 class="modal-title">Donation Committed!</h3>
        <p class="modal-text">Thank you for your commitment to making a difference. We have received your donation intent and will reach out shortly with payment instructions.</p>
        <div class="modal-confirm">
            <p>A confirmation email has been sent to:</p>
            <strong id="confirmEmail"></strong>
        </div>
        <button onclick="closeModal()" class="modal-btn">Done</button>
    </div>
</div>


<!-- ======================= SCRIPTS ======================= -->
<script>
// Set predefined amount
function setAmount(amount, currency) {
    document.getElementById('customAmount').value = amount;
    document.getElementById('currency').value = currency;
}

// Handle form submission
function handleDonation(e) {
    e.preventDefault();

    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const donationType = document.getElementById('donationType').value;
    const currency = document.getElementById('currency').value;
    const customAmount = document.getElementById('customAmount').value;
    const message = document.getElementById('message').value.trim();

    if (!fullName || !email || !donationType || !currency || !customAmount) {
        alert('Please fill in all required fields.');
        return;
    }

    if (customAmount <= 0) {
        alert('Please enter a valid donation amount.');
        return;
    }

    const subject = `Donation Commitment - ${fullName}`;
    const body = `
Donation Commitment Details
---------------------------

Full Name: ${fullName}
Email: ${email}
Phone: ${phone || 'Not provided'}
Donation Type: ${donationType}
Currency: ${currency}
Amount: ${currency} ${parseFloat(customAmount).toLocaleString()}
Message: ${message || 'No message provided'}

---------------------------
This person is committed to donate and we proceed.
    `;

    const recipients = 'ads@ads-nyanza.org, easituha@ads-nyanza.org';
    const mailtoLink = `mailto:${recipients}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

    document.getElementById('confirmEmail').textContent = email;
    document.getElementById('successModal').style.display = 'flex';

    window.open(mailtoLink, '_blank');
    document.getElementById('donationForm').reset();

    setTimeout(closeModal, 8000);
}

// Close modal
function closeModal() {
    document.getElementById('successModal').style.display = 'none';
}

// Close modal on click outside
document.getElementById('successModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>


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


