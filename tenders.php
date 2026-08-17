<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Tenders</title>
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
                            <a href="/updated/Engage/Our_Blog">Our Blog</a>
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




<!-- =======================
     Tenders Page Start
======================= -->

<!-- Hero Section -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <span class="badge mb-3 px-3 py-2" style="background: hsla(140, 82%, 37%, 0.1); color: hsl(140, 82%, 37%); font-weight: 600; letter-spacing: 1px;">
                        Procurement & Tenders
                    </span>
                    <h1 class="mb-3" style="color: #1a2a3a;">Promoting Transparency, Fairness & Accountability</h1>
                    <div class="rounded-pill" style="width: 60px; height: 3px; background: hsl(140, 82%, 37%);"></div>
                </div>
                <p class="mb-4" style="line-height: 1.8; color: #555;">
                    ADS–Nyanza upholds integrity and fairness in all procurement processes.  
                    Our tendering procedures promote transparency, accountability, and equal opportunity 
                    for all eligible suppliers and contractors.  
                    We welcome partnerships that advance sustainable community transformation 
                    through ethical business practices.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#active-tenders" class="btn-tender-primary">
                        <i class="bi bi-file-text me-2"></i> View Open Tenders
                    </a>
                    <a href="#guidelines" class="btn-tender-outline">
                        <i class="bi bi-journal-bookmark-fill me-2"></i> Procurement Guidelines
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="tender-stats-cards">
                    <div class="stat-card active">
                        <div class="stat-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number" id="activeCount">0</span>
                            <span class="stat-label">Active Tenders</span>
                        </div>
                    </div>
                    <div class="stat-card closed">
                        <div class="stat-icon">
                            <i class="bi bi-archive"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number" id="closedCount">0</span>
                            <span class="stat-label">Closed Tenders</span>
                        </div>
                    </div>
                    <div class="stat-card total">
                        <div class="stat-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number" id="totalCount">0</span>
                            <span class="stat-label">Total Tenders</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Active Tenders Section -->
<div id="active-tenders" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2" style="color: #1a2a3a; font-size: 1.8rem;">Open Tenders</h2>
            <div style="width: 40px; height: 2px; background: #cbd5e0; margin: 0 auto;"></div>
            <p class="text-muted mt-2" style="font-size: 0.85rem;">Click the download icon to view the full tender document</p>
        </div>

        <div class="table-responsive">
            <table class="tenders-table">
                <thead>
                    <tr>
                        <th style="width: 55%;">Tender Title</th>
                        <th style="width: 20%;">Closing Date</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 10%; text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody id="activeTendersBody">
                    <!-- Active tenders will be dynamically inserted here -->
                </tbody>
            </table>
        </div>

        <!-- No Active Tenders Message -->
        <div id="noActiveTenders" class="text-center mt-4" style="display: none;">
            <div class="no-tenders-card">
                <div class="no-tenders-icon">
                    <i class="bi bi-folder2-open"></i>
                </div>
                <h4>No Active Tenders at the Moment</h4>
                <p>There are currently no open procurement opportunities. Please check back later or follow our updates for upcoming tenders.</p>
            </div>
        </div>
    </div>
</div>

<!-- Closed / Awarded Tenders Section -->
<div id="closed-tenders" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.3s" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container py-5">
        <div class="text-center mb-5 mx-auto" style="max-width: 700px;">
            <span class="badge mb-3 px-3 py-2" style="background: rgba(0,0,0,0.04); color: #555; font-weight: 600; letter-spacing: 1px; border: 1px solid #e8ece8;">
                Past Opportunities
            </span>
            <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Closed Tenders</h2>
            <div class="mx-auto rounded-pill mb-3" style="width: 40px; height: 2px; background: #cbd5e0;"></div>
            <p class="text-muted" style="color: #6c757d;">Transparency in procurement outcomes</p>
        </div>

        <div class="table-responsive">
            <table class="closed-table">
                <thead>
                    <tr>
                        <th style="width: 60%;">Tender Title</th>
                        <th style="width: 25%;">Closing Date</th>
                        <th style="width: 15%;">Status</th>
                    </tr>
                </thead>
                <tbody id="closedTendersBody">
                    <!-- Closed tenders will be dynamically inserted here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tender Guidelines & Policies Section -->
<div id="guidelines" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.4s" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="text-center mb-5 mx-auto" style="max-width: 700px;">
            <span class="badge mb-3 px-3 py-2" style="background: rgba(0,0,0,0.04); color: #555; font-weight: 600; letter-spacing: 1px; border: 1px solid #e8ece8;">
                Guidelines & Policies
            </span>
            <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Our Commitment to Ethical Procurement</h2>
            <div class="mx-auto rounded-pill mb-3" style="width: 40px; height: 2px; background: #cbd5e0;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>Procurement Ethics</h4>
                    <p>Upholding highest standards of integrity and fairness in all procurement activities.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                    <h4>Eligibility Criteria</h4>
                    <p>Legally registered entities with demonstrable experience and capacity.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-bar-chart-steps"></i>
                    </div>
                    <h4>Evaluation Process</h4>
                    <p>Competitive, transparent, criteria-based evaluation framework.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                    <h4>Confidentiality</h4>
                    <p>Strict confidentiality maintained throughout procurement lifecycle.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h4>Appeals Process</h4>
                    <p>Structured mechanism for lodging appeals or complaints.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <i class="bi bi-handshake"></i>
                    </div>
                    <h4>Conflict of Interest</h4>
                    <p>Mandatory disclosure of any potential conflicts of interest.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ===== BUTTON STYLES ===== */
.btn-tender-primary {
    display: inline-flex;
    align-items: center;
    background: #2e7d32;
    color: white;
    padding: 12px 28px;
    border-radius: 40px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.btn-tender-primary:hover {
    background: #1b5e20;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
}

.btn-tender-outline {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: #2e7d32;
    padding: 12px 28px;
    border-radius: 40px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #2e7d32;
}

.btn-tender-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* ===== STATS CARDS ===== */
.tender-stats-cards {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.25rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
}

.stat-card:hover {
    transform: translateX(5px);
    border-color: #2e7d32;
}

.stat-icon {
    width: 55px;
    height: 55px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.stat-info {
    flex: 1;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 800;
    color: #1a2a3a;
    line-height: 1;
}

.stat-label {
    font-size: 0.7rem;
    color: #6c757d;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ===== ACTIVE TENDERS TABLE ===== */
.tenders-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #eef2f6;
}

.tenders-table thead tr {
    background: #f8f9fa;
    border-bottom: 1px solid #eef2f6;
}

.tenders-table th {
    padding: 0.8rem 1rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #888;
}

.tenders-table td {
    padding: 0.7rem 1rem;
    border-bottom: 1px solid #f0f2f5;
    color: #1a2a3a;
    font-size: 0.85rem;
    vertical-align: middle;
}

.tenders-table tbody tr:hover {
    background: #fafbfc;
}

.tenders-table tbody tr:last-child td {
    border-bottom: none;
}

.tender-title-text {
    font-weight: 500;
    color: #1a2a3a;
}

.tender-date {
    color: #555;
    font-size: 0.8rem;
}

.tender-status {
    display: inline-block;
    padding: 2px 10px;
    border-radius: 20px;
    font-size: 0.65rem;
    font-weight: 600;
}

.tender-status.open {
    background: #e8f5e9;
    color: #2e7d32;
}

.tender-status.closed {
    background: #fce4ec;
    color: #c62828;
}

.action-cell {
    text-align: center !important;
}

.btn-download {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: transparent;
    color: #555;
    border: 1px solid #e8ece8;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.25s ease;
}

.btn-download:hover {
    background: #1a2a3a;
    color: white;
    border-color: #1a2a3a;
    transform: translateY(-2px);
}

.btn-download i {
    font-size: 0.8rem;
}

/* ===== CLOSED TENDERS TABLE ===== */
.closed-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #eef2f6;
}

.closed-table thead tr {
    background: #f8f9fa;
    border-bottom: 1px solid #eef2f6;
}

.closed-table th {
    padding: 0.8rem 1rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #888;
}

.closed-table td {
    padding: 0.7rem 1rem;
    border-bottom: 1px solid #f0f2f5;
    color: #1a2a3a;
    font-size: 0.85rem;
    vertical-align: middle;
}

.closed-table tbody tr:hover {
    background: #fafbfc;
}

.closed-table tbody tr:last-child td {
    border-bottom: none;
}

.status-badge {
    display: inline-block;
    padding: 3px 12px;
    border-radius: 20px;
    font-size: 0.65rem;
    font-weight: 600;
}

.status-badge.closed {
    background: #e8ece8;
    color: #555;
}

/* ===== NO TENDERS CARD ===== */
.no-tenders-card {
    background: white;
    border-radius: 16px;
    padding: 2.5rem 2rem;
    text-align: center;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
}

.no-tenders-icon {
    width: 70px;
    height: 70px;
    background: rgba(46, 125, 50, 0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem auto;
}

.no-tenders-icon i {
    font-size: 2rem;
    color: #2e7d32;
}

.no-tenders-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 0.5rem;
}

.no-tenders-card p {
    color: #6c757d;
    margin-bottom: 0;
    font-size: 0.9rem;
}

/* ===== GUIDELINE CARDS ===== */
.guideline-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
    height: 100%;
}

.guideline-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    border-color: #2e7d32;
}

.guideline-icon {
    width: 60px;
    height: 60px;
    background: rgba(46, 125, 50, 0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem auto;
}

.guideline-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.guideline-card h4 {
    font-size: 1rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 0.5rem;
}

.guideline-card p {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 0;
    line-height: 1.5;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .tender-stats-cards {
        margin-top: 2rem;
    }
}

@media (max-width: 768px) {
    .btn-tender-primary,
    .btn-tender-outline {
        padding: 10px 20px;
        font-size: 0.75rem;
    }
    
    .stat-card {
        padding: 1rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .stat-icon {
        width: 45px;
        height: 45px;
    }
    
    .stat-icon i {
        font-size: 1.2rem;
    }
    
    .tenders-table th,
    .tenders-table td,
    .closed-table th,
    .closed-table td {
        padding: 0.5rem 0.6rem;
        font-size: 0.75rem;
    }
    
    .tender-title-text {
        font-size: 0.8rem;
    }
    
    .tender-date {
        font-size: 0.7rem;
    }
    
    .btn-download {
        width: 28px;
        height: 28px;
    }
    
    .btn-download i {
        font-size: 0.7rem;
    }
    
    .guideline-card {
        padding: 1.25rem;
    }
    
    .no-tenders-card {
        padding: 2rem 1.5rem;
    }
}

@media (max-width: 576px) {
    .tenders-table thead,
    .closed-table thead {
        display: none;
    }
    
    .tenders-table tbody tr,
    .closed-table tbody tr {
        display: block;
        padding: 0.75rem;
        border: 1px solid #eef2f6;
        border-radius: 10px;
        margin-bottom: 0.75rem;
        background: white;
    }
    
    .tenders-table td,
    .closed-table td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.3rem 0;
        border-bottom: 1px solid #f5f5f5;
        font-size: 0.75rem;
    }
    
    .tenders-table td:last-child,
    .closed-table td:last-child {
        border-bottom: none;
    }
    
    .tenders-table td::before,
    .closed-table td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #888;
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }
    
    .action-cell {
        justify-content: flex-end !important;
    }
}
</style>

<script>
// ===== TENDERS DATA =====
const activeTenders = [];

const closedTenders = [
    {
        title: "Terms of Reference (TOR) for the People's Empowerment and Sustainability Project in Siaya and Kisumu Counties, Kenya, for the Provision of a Legal Aid Clinic on Land Rights.",
        closingDate: "Nov 30, 2025",
        status: "Closed"
    },
    {
        title: "E.O.I – Moments that Matter® Project: For supply of project items for community level change agents and identified primary caregiver households",
        closingDate: "Oct 17, 2025",
        status: "Closed"
    },
    {
        title: "E.O.I REQUEST FOR PROPOSAL For the construction of Kangore Water Pan in Nyatike Migori County",
        closingDate: "Oct 17, 2025",
        status: "Closed"
    }
];

// ===== RENDER FUNCTIONS =====
function renderActiveTenders() {
    const tbody = document.getElementById('activeTendersBody');
    const noActiveDiv = document.getElementById('noActiveTenders');
    
    if (activeTenders.length === 0) {
        tbody.innerHTML = '';
        noActiveDiv.style.display = 'block';
        return;
    }
    
    noActiveDiv.style.display = 'none';
    tbody.innerHTML = activeTenders.map(tender => `
        <tr>
            <td><span class="tender-title-text">${tender.title}</span></td>
            <td><span class="tender-date">${tender.closingDate}</span></td>
            <td><span class="tender-status open">Open</span></td>
            <td class="action-cell">
                <a href="${tender.downloadLink}" class="btn-download" target="_blank">
                    <i class="bi bi-download"></i>
                </a>
            </td>
        </tr>
    `).join('');
}

function renderClosedTenders() {
    const tbody = document.getElementById('closedTendersBody');
    tbody.innerHTML = closedTenders.map(tender => `
        <tr>
            <td>${tender.title}</td>
            <td>${tender.closingDate}</td>
            <td><span class="status-badge closed">${tender.status}</span></td>
        </tr>
    `).join('');
}

function updateCounters() {
    document.getElementById('activeCount').innerText = activeTenders.length;
    document.getElementById('closedCount').innerText = closedTenders.length;
    document.getElementById('totalCount').innerText = activeTenders.length + closedTenders.length;
}

function animateCounters() {
    animateValue('activeCount', 0, activeTenders.length, 1000);
    animateValue('closedCount', 0, closedTenders.length, 1000);
    animateValue('totalCount', 0, activeTenders.length + closedTenders.length, 1000);
}

function animateValue(elementId, start, end, duration) {
    const element = document.getElementById(elementId);
    if (!element) return;
    if (end === 0) { element.innerText = 0; return; }
    
    const range = end - start;
    const increment = range / (duration / 16);
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= end) {
            element.innerText = end;
            clearInterval(timer);
        } else {
            element.innerText = Math.floor(current);
        }
    }, 16);
}

document.addEventListener('DOMContentLoaded', function() {
    renderActiveTenders();
    renderClosedTenders();
    updateCounters();
    animateCounters();
});
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- =======================
     Tenders Page End
======================= -->




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


