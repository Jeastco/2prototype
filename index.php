<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza</title>
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





<!-- About Start -->
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s" style="font-family: 'Poppins', sans-serif;">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Left Column: Text -->
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-uppercase" style="color: #1e7b34; letter-spacing: 1px; font-weight: 600;">About Us</h5>
                    <h1 class="mb-0" style="color: #2c3e50; font-weight: 700;">Impacting Lives Since 1997</h1>
                </div>
                <p class="mb-4" style="color: #555; line-height: 1.7; font-weight: 400;">
                    ADS–Nyanza is a faith-based organization founded in 1995 and registered as a company in 1997 to 
                    enhance holistic human transformation and sustainable community development, inspired by the 
                    teachings of Christ. Guided by the scripture in <strong style="color: #1e7b34; font-weight: 600;">John 10:10</strong> — 
                    <em>“The thief comes only to steal and kill and destroy; I have come that they may have life, 
                    and have it to the full.”</em> — we are committed to enabling individuals and communities 
                    to experience the fullness of life through empowerment, dignity, and service.
                </p>

                <div class="row g-0 mb-4">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3" style="font-size: 1rem; color: #444; font-weight: 500;">
                            <i class="bi bi-check-circle-fill me-2" style="color: #1e7b34; font-size: 0.9rem;"></i>Faith-Based Development
                        </h5>
                        <h5 class="mb-3" style="font-size: 1rem; color: #444; font-weight: 500;">
                            <i class="bi bi-check-circle-fill me-2" style="color: #1e7b34; font-size: 0.9rem;"></i>Community Empowerment
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3" style="font-size: 1rem; color: #444; font-weight: 500;">
                            <i class="bi bi-check-circle-fill me-2" style="color: #1e7b34; font-size: 0.9rem;"></i>Holistic Transformation
                        </h5>
                        <h5 class="mb-3" style="font-size: 1rem; color: #444; font-weight: 500;">
                            <i class="bi bi-check-circle-fill me-2" style="color: #1e7b34; font-size: 0.9rem;"></i>Sustainable Impact
                        </h5>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s" style="background: #f8f9fa; padding: 1rem; border-radius: 12px;">
                    <div class="d-flex align-items-center justify-content-center rounded" 
                         style="width: 50px; height: 50px; background-color: #e8f5e9;">
                        <i class="bi bi-telephone-fill" style="color: #1e7b34; font-size: 1.2rem;"></i>
                    </div>
                    <div class="ps-3">
                        <h5 class="mb-1" style="color: #666; font-size: 0.85rem; font-weight: 500;">Contact Us</h5>
                        <h4 class="mb-0" style="color: #1e7b34; font-size: 1.3rem; font-weight: 600;">+254 726947044</h4>
                    </div>
                </div>

                <a href="contact" class="btn py-2 px-4 mt-2 wow zoomIn fw-bold" 
                   data-wow-delay="0.9s" 
                   style="background-color: #1e7b34; color: white; border: none; border-radius: 25px; font-size: 0.9rem; transition: 0.3s; display: inline-block; font-weight: 500;"
                   onmouseover="this.style.backgroundColor='#16632a'" 
                   onmouseout="this.style.backgroundColor='#1e7b34'">
                    Get in Touch <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-5" style="min-height: 450px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" 
                         src="img/ecd_elizabeth.jpg" alt="ADS Nyanza Impact" style="object-fit: cover; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="mb-3 d-inline-block" style="font-size: 0.75rem; font-weight: 600; letter-spacing: 2px; color: #2c7a47;">Our Identity</span>
            <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Mission, Vision & Values</h2>
            <div class="mx-auto" style="width: 60px; height: 2px; background: #2c7a47;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="simple-card">
                    <div class="card-accent"></div>
                    <h4>Mission</h4>
                    <p>To enable Dioceses and communities to achieve the fullness of life through sustainable development.</p>
                    <span class="card-tag">What drives us</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="simple-card">
                    <div class="card-accent"></div>
                    <h4>Vision</h4>
                    <p>A dignified, responsible humanity enjoying the fullness of life in a just and sustainable society.</p>
                    <span class="card-tag">Our aspiration</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="simple-card">
                    <div class="card-accent"></div>
                    <h4>Core Values</h4>
                    <div class="value-group">
                        <span>Christ Centered</span>
                        <span>Human Dignity</span>
                        <span>Compassion</span>
                        <span>Excellence</span>
                        <span>Accountability</span>
                        <span>Integrity</span>
                    </div>
                    <span class="card-tag">Guiding principles</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.simple-card {
    background: white;
    padding: 2rem;
    border-radius: 16px;
    height: 100%;
    position: relative;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
}

.simple-card:hover {
    transform: translateY(-5px);
    border-color: #2c7a47;
}

.card-accent {
    width: 40px;
    height: 3px;
    background: #2c7a47;
    margin-bottom: 1.5rem;
}

.simple-card h4 {
    font-size: 1.35rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 1rem;
}

.simple-card p {
    color: #6c757d;
    line-height: 1.6;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.card-tag {
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1px;
    color: #2c7a47;
    text-transform: uppercase;
}

.value-group {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin: 1rem 0;
}

.value-group span {
    background: #f8f9fa;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    color: #2c3e50;
}
</style>




  <!-- ADS Nyanza – Why Choose Us Section Start -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="d-inline-block mb-3" style="font-size: 0.75rem; font-weight: 600; letter-spacing: 2px; color: #2c7a47; text-transform: uppercase;">
                Why Partner With Us
            </span>
            <h2 class="display-6 fw-bold mb-3" style="color: #1a2a3a;">We Empower Communities With<br>Sustainable Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 1rem;">
                For over two decades, we've been transforming lives through faith-driven, community-centered development
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="modern-card">
                    <div class="card-number">01</div>
                    <h4 class="card-title">Community-Driven Impact</h4>
                    <p class="card-text">Programs designed with communities at the center — ensuring relevant, inclusive, and sustainable solutions across Nyanza.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="modern-card">
                    <div class="card-number">02</div>
                    <h4 class="card-title">Integrated Approach</h4>
                    <p class="card-text">Addressing interconnected challenges from food security and water access to health and environmental resilience.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="modern-card">
                    <div class="card-number">03</div>
                    <h4 class="card-title">Accountable Team</h4>
                    <p class="card-text">Technical expertise combined with transparent stewardship of resources to deliver measurable results.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="modern-card">
                    <div class="card-number">04</div>
                    <h4 class="card-title">Faith-Inspired Service</h4>
                    <p class="card-text">Guided by Christian values, restoring dignity, hope, and resilience in every community we serve.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-card {
    background: white;
    padding: 2rem 1.5rem;
    border-radius: 16px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
    height: 100%;
    position: relative;
}

.modern-card:hover {
    transform: translateY(-8px);
    border-color: rgba(44, 122, 71, 0.2);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
}

.card-number {
    font-size: 3rem;
    font-weight: 700;
    color: hsla(141, 80%, 48%, 0.15);
    margin-bottom: 0.75rem;
    line-height: 1;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1a2a3a;
    margin-bottom: 0.75rem;
}

.card-text {
    color: #6c757d;
    line-height: 1.6;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .modern-card {
        padding: 1.5rem;
    }
    .display-6 {
        font-size: 1.75rem;
    }
}
</style>
<!-- ADS Nyanza – Why Choose Us Section End -->




   

<!-- Our Programs - Clean Minimal Version -->
<div class="container-fluid py-5" style="background: #ffffff;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="mb-3 d-inline-block" style="font-size: 0.7rem; font-weight: 600; letter-spacing: 2px; color: hsl(140, 82%, 37%); text-transform: uppercase;">
                Our Strategic Focus
            </span>
            <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Six Pillars of Impact</h2>
            <div class="mx-auto" style="width: 50px; height: 2px; background: hsl(140, 82%, 37%);"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Transforming Governance</h4>
                    <p>Contributing to effective, accountable and responsive governance systems that serve communities with transparency.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Health Systems Development & Delivery</h4>
                    <p>Enhancing community health knowledge, increasing participation in prevention and treatment programs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Child Development, Care & Education</h4>
                    <p>Enabling children to become resilient, self-fulfilled, thrive, and attain their full potential.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Livelihoods, Natural Resources & Climate Action</h4>
                    <p>Empowering communities to become resilient and sustainably manage their natural resources.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Household & Economic Strengthening</h4>
                    <p>Supporting socio-economic initiatives that enhance household productivity and self-reliance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card">
                    <h4>Institutional Development</h4>
                    <p>Enabling ADS-Nyanza to effectively deliver on its mandate and accomplish its mission with excellence.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.clean-card {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 1.5rem;
    height: 100%;
    transition: all 0.3s ease;
    border-left: 3px solid transparent;
}

.clean-card:hover {
    background: white;
    border-left-color: hsl(140, 82%, 37%);
    transform: translateX(5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
}

.clean-card h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 0.5rem;
}

.clean-card p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.5;
    margin-bottom: 0;
}
</style>


<!-- Get Involved / Volunteer Start -->
<!-- Get Involved / Volunteer Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container py-5">
        <div class="row">
            
            <!-- Full Width Content -->
            <div class="col-12">
                <div class="section-title position-relative pb-3 mb-4 text-center">
                    <span class="badge mb-3 px-3 py-2" style="background: hsla(140, 82%, 37%, 0.1); color: hsl(140, 82%, 37%); font-weight: 600; letter-spacing: 1px;">
                        Get Involved
                    </span>
                    <h2 class="fw-bold mb-3" style="color: #1a2a3a;">Join ADS–Nyanza in Transforming Lives and Empowering Communities</h2>
                    <div class="mx-auto rounded-pill" style="width: 60px; height: 3px; background: hsl(140, 82%, 37%);"></div>
                </div>
                
                <div class="row g-4 mb-5 justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="involvement-card text-center">
                            <div class="involvement-icon mx-auto">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <h5>Volunteer Opportunities</h5>
                            <p>Share your skills and time to make a difference in the lives of vulnerable communities across Nyanza.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="involvement-card text-center">
                            <div class="involvement-icon mx-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h5>Community Partnerships</h5>
                            <p>Collaborate with us for greater impact through strategic partnerships and joint initiatives.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="involvement-card text-center">
                            <div class="involvement-icon mx-auto">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h5>Support Our Work</h5>
                            <p>Your support helps us advance food security, health, education, and economic empowerment.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="mb-4" style="line-height: 1.8; color: #555; max-width: 800px; margin: 0 auto;">
                        At ADS–Nyanza, we believe in holistic transformation inspired by faith and community action.  
                        Whether through volunteering, donations, or collaboration, your involvement helps us advance 
                        food security, health, education, environmental conservation, and economic empowerment initiatives 
                        that restore hope and dignity to families across the Nyanza region.
                    </p>
                </div>

                <div class="d-flex align-items-center justify-content-center mt-4 p-3 rounded" style="background: #f8f9fa; max-width: 400px; margin: 0 auto;">
                    <div class="d-flex align-items-center justify-content-center rounded" 
                         style="width: 55px; height: 55px; background-color: hsl(140, 82%, 37%);">
                        <i class="bi bi-telephone-fill text-white fs-5"></i>
                    </div>
                    <div class="ps-3">
                        <h6 class="mb-1" style="color: #666;">Call to learn more</h6>
                        <h4 class="mb-0" style="color: hsl(140, 82%, 37%);">+254 726947044</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.involvement-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
}
.involvement-card:hover {
    background: white;
    border-color: hsl(140, 82%, 37%);
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
}
.involvement-icon {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: rgba(40, 167, 69, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
}
.involvement-icon i {
    font-size: 1.8rem;
    color: hsl(140, 82%, 37%);
}
.involvement-card h5 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
    color: #1a2a3a;
}
.involvement-card p {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 0;
    line-height: 1.6;
}
@media (max-width: 768px) {
    .involvement-card {
        padding: 1.5rem;
    }
    .involvement-icon {
        width: 55px;
        height: 55px;
    }
    .involvement-icon i {
        font-size: 1.5rem;
    }
    .involvement-card h5 {
        font-size: 1rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Get Involved / Volunteer End -->



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase" style="color: hsl(140, 82%, 37%);">Leadership</h5>
            <h1 class="mb-0">Our Senior Management Team</h1>
        </div>

        <div class="row g-5 justify-content-center">
            
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.2s">
    <div class="team-item bg-light rounded shadow-lg overflow-hidden border-0">
        <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100 team-img-fixed" src="img/sam.jpg" alt="Mr. Samuel Omondi">
            
            <div class="team-overlay d-flex align-items-center justify-content-center">
    <a href="Executive Director.php" class="btn px-4 py-2" style="background-color: #2e7d32; color: white; border-radius: 30px; font-weight: 600; text-decoration: none; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px; border: none; cursor: pointer;">
        <i class="bi bi-person-lines-fill"></i> View Profile
    </a>
</div>
        </div>
        
        <div class="team-meta text-center py-4 bg-white">
            <h4 class="mb-1" style="color: #091E3E; font-weight: 700;">Mr. Samuel Omondi</h4>
            <p class="text-uppercase m-0" style="color: #2e7d32; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px;">
                Executive Director
            </p>
        </div>
    </div>
</div>

            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.4s">
                <div class="team-item bg-light rounded shadow-lg overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 team-img-fixed" src="img/Nyesi.JPG" alt="CPA Nicholas Nyesi">
                        <div class="team-overlay d-flex align-items-center justify-content-center">
                <a href="Finance Admin Manager.php" class="btn px-4 py-2" style="background-color: #2e7d32; color: white; border-radius: 30px; font-weight: 600; text-decoration: none; transition: 0.3s;">
                    <i class="bi bi-person-lines-fill me-2"></i>View Profile
                </a>
            </div>
                    </div>
                    <div class="team-meta text-center py-4">
                        <h4 class="mb-1" style="color: #000000; font-weight: 700;">CPA Nicholas Nyesi</h4>
                        <p class="text-uppercase m-0" style="color: hsl(140, 82%, 37%); font-size: 0.85rem; font-weight: 600; letter-spacing: 1px;">
                            Finance & Admin Manager
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded shadow-lg overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 team-img-fixed" src="img/Tobias_pm.JPG" alt="Mr. Tobias Aulo">
                        <div class="team-overlay d-flex align-items-center justify-content-center">
                <a href="Programs Manager.php" class="btn px-4 py-2" style="background-color: #2e7d32; color: white; border-radius: 30px; font-weight: 600; text-decoration: none; transition: 0.3s;">
                    <i class="bi bi-person-lines-fill me-2"></i>View Profile
                </a>
            </div>
                    </div>
                    <div class="team-meta text-center py-4">
                        <h4 class="mb-1" style="color: #000000; font-weight: 700;">Mr. Tobias Aulo</h4>
                        <p class="text-uppercase m-0" style="color: hsl(140, 82%, 37%); font-size: 0.85rem; font-weight: 600; letter-spacing: 1px;">
                            Programs Manager
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="samModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header text-white border-0" style="background-color: hsl(140, 82%, 37%);">
                <h5 class="modal-title fw-bold">Leadership Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-lg-5">
                <div class="row align-items-start">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="img/sam.jpg" alt="Mr. Samuel Omondi" class="img-fluid rounded shadow" style="width: 100%; max-width: 250px; border: 5px solid #f8f9fa;">
                        <h4 class="mt-3 mb-1" style="color: #000;">Mr. Samuel Omondi</h4>
                        <p class="small text-uppercase fw-bold" style="color: hsl(140, 82%, 37%);">Executive Director</p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="border-bottom pb-2 mb-3" style="color: #091E3E;">Professional Biography</h5>
                        <p class="text-muted" style="line-height: 1.8; text-align: justify; font-size: 0.95rem;">
                            Mr. Samwel Omondi Ochieng is the Executive Director & Secretary to the Board at ADS Nyanza, leading strategic growth, governance, and program implementation. With over 20 years of experience in community health, strategy development, and resource mobilization, he drives impactful initiatives that enhance livelihoods and social empowerment. He holds a Master’s in Community Health and Development (Great Lakes University of Kisumu), a Bachelor’s in Sociology (University of Nairobi), and a Higher Diploma in Community Health. He has served on multiple boards, including the Anglican Church of Kenya’s Social Services Board and Kenya Community-Based Health Financing, and has chaired several School Boards of Management. A former Hospital Administrator, Gender Coordinator, and Program Manager, he has led major community interventions. As a researcher and lecturer, he has published on food security and contributed to policy discussions. At ADS Nyanza, he champions organizational development, strategic partnerships, and financial sustainability, ensuring long-term impact in the communities served.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="nyesiModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header text-white border-0" style="background-color: hsl(140, 82%, 37%);">
                <h5 class="modal-title fw-bold">Leadership Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-lg-5">
                <div class="row align-items-start">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="img/Nyesi.JPG" alt="CPA Nicholas Nyesi" class="img-fluid rounded shadow" style="width: 100%; max-width: 250px; border: 5px solid #f8f9fa;">
                        <h4 class="mt-3 mb-1" style="color: #000;">CPA Nicholas Nyesi</h4>
                        <p class="small text-uppercase fw-bold" style="color: hsl(140, 82%, 37%);">Finance & Admin Manager</p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="border-bottom pb-2 mb-3" style="color: #091E3E;">Professional Biography</h5>
                        <p class="text-muted" style="line-height: 1.8; text-align: justify; font-size: 0.95rem;">
                            Nicholas Nyesi is a Certified Public Accountant of Kenya (CPA-K) and a full member in good standing of the Institute of Certified Public Accountants of Kenya (ICPAK), the statutory regulator of the accountancy profession under the Accountants’ Act No. 15 of 2008. He is also a member of the Institute of Human Resource Management (IHRM), established under the HRMP Act No. 52 of 2012. He holds a Master of Science in Entrepreneurship from Jomo Kenyatta University of Agriculture and Technology (JKUAT), a Bachelor of Commerce in Finance (Second Class Upper Division) from The Catholic University of Eastern Africa (CUEA), and a Diploma in Management (HR Option) from the Kenya Institute of Management (KIM). As the Finance and Administration Manager at ADS-Nyanza, Nicholas oversees Financial Management, Human Resource Coordination, Risk Management, Procurement, and Logistics, ensuring organizational efficiency and sustainability. Beyond his managerial role, Nicholas has demonstrated strong governance and leadership through board service at Health Innovations Kenya, the Anglican Diocese of Maseno South, Nyabeda Secondary School, and the National Council of the Faith Leaders ECD Network. With over 21 years of experience in Financial Management and Strategy, and 9 years in Human Resource Management, Nicholas brings a deep commitment to organizational transformation, accountability, and community development.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tobiasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header text-white border-0" style="background-color: hsl(140, 82%, 37%);">
                <h5 class="modal-title fw-bold">Leadership Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-lg-5">
                <div class="row align-items-start">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="img/Tobias_pm.JPG" alt="Mr. Tobias Aulo" class="img-fluid rounded shadow" style="width: 100%; max-width: 250px; border: 5px solid #f8f9fa;">
                        <h4 class="mt-3 mb-1" style="color: #000;">Mr. Tobias Aulo</h4>
                        <p class="small text-uppercase fw-bold" style="color: hsl(140, 82%, 37%);">Programs Manager</p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="border-bottom pb-2 mb-3" style="color: #091E3E;">Professional Biography</h5>
                        <p class="text-muted" style="line-height: 1.8; text-align: justify; font-size: 0.95rem;">
                            Mr. Tobias Aulo serves as the Programs Manager, spearheading multi-sectoral programs in food security, economic empowerment, and health. With a philosophy grounded in transparency and innovation, Tobias ensures that ADS–Nyanza’s initiatives align with its strategic vision. He is dedicated to driving community-driven projects that foster ownership and long-term transformation across the region.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Fix to make all images the same size */
    .team-img-fixed {
        height: 350px; /* Adjust this height as needed */
        object-fit: cover;
        object-position: center top;
    }

    .team-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-bottom: 4px solid transparent;
    }
    
    .team-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border-bottom: 4px solid hsl(140, 82%, 37%);
    }

    .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(9, 30, 62, 0.7); /* Using your Navy Blue with transparency */
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .team-item:hover .team-overlay {
        opacity: 1;
    }

    /* Modal Styling */
    .modal-header-brand {
        background-color: hsl(140, 82%, 37%);
        color: white;
    }
</style>
<section class="py-5 bg-white">
    <div class="container py-4">

        <!-- SECTION HEADER - Animated Newspaper Style -->
        <div class="text-center mb-5 pb-3 mx-auto" style="max-width: 700px; border-bottom: 3px double #2e7d32; animation: fadeInDown 0.8s ease;">
            <div class="small text-uppercase fw-bold mb-2" style="color: #2e7d32; letter-spacing: 4px; font-family: 'Courier New', monospace; animation: pulse 2s infinite;">
                📰 The ADS Dispatch
            </div>
            <h2 class="display-5 fw-bold" style="font-family: 'Playfair Display', serif; color: #1a2a3a; animation: fadeIn 1s ease;">
                The ADS Journal
            </h2>
            <p class="text-muted mt-2" style="font-family: 'Georgia', serif; font-style: italic; animation: fadeInUp 1.2s ease;">
                Stories of impact, hope, and transformation
            </p>
        </div>

        <!-- BLOG GRID -->
        <div class="row g-4">

            <!-- Blog 1: Kaleidoscope Project West Pokot -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/west1.PNG" alt="Kaleidoscope Project West Pokot" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Kaleidoscope+Project'">
                        <span class="journal-badge">Maternal & Adolescent Health</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> West Pokot, Kenya
                        </div>
                        <h3 class="journal-title">Kaleidoscope Project: Transforming Maternal Health</h3>
                        <p class="journal-excerpt">
                            The Kaleidoscope Project is transforming maternal and adolescent healthcare in West Pokot. This four-year initiative, in partnership with the County Government and Ministry of Health, targets maternal deaths, teen pregnancies, and healthcare access for women and girls. Through health system strengthening and community engagement, the project is creating sustainable change — building healthier families and stronger communities across West Pokot.
                        </p>
                        <a href="https://www.facebook.com/share/p/18LNhdLMdf/" class="journal-link">Read Full Story <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 2: World Environment Day -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/env.png" alt="ADS Nyanza World Environment Day" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Environment+Day'">
                        <span class="journal-badge">Climate Action</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Maseno, Kenya
                        </div>
                        <h3 class="journal-title">Faith in Action: Planting Trees, Cleaning Communities</h3>
                        <p class="journal-excerpt">
                            ADS Nyanza partnered with the Diocese of Maseno South and the Green Anglican Movement to mark World Environment Day. Rooted in the theme "Wholesome Ecology," teams planted trees at Sinyolo Girls High School while students led a cleanup at Sinyolo Market. Through nature-based solutions and mobilizing faith leaders, we're stepping up #NowForClimate.
                        </p>
                        <a href="https://www.facebook.com/share/p/1BbJZScsNw/" class="journal-link">Read Full Story <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 3: Lucy Transformation -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/lucy11.png" alt="Lucy Anyango and Reagan Otieno" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Lucy+%26+Reagan'">
                        <span class="journal-badge">Family Transformation</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Siaya County, Kenya
                        </div>
                        <h3 class="journal-title">From Fear to Peace: Lucy & Reagan's Story</h3>
                        <p class="journal-excerpt">
                            Lucy didn't believe play mattered — until MTM taught her nurturing care. With her second-born, she played and talked from pregnancy, and Briannah flourished. Reagan went from absent and violent to present and playful. With a kitchen garden and savings group, Lucy now pays school fees, buys food, and has a voice at home. Their mud hut is now a brick house. When parents thrive, children thrive.
                        </p>
                        <a href="https://www.facebook.com/share/p/1Lkcsatufj/" class="journal-link">Read Full Story <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 4: Keto Mise Caregiver Group -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/keto.jpeg" alt="Keto Mise Caregiver Group" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Keto+Group'">
                        <span class="journal-badge">Caregiver Success</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> North Ugenya, Kenya
                        </div>
                        <h3 class="journal-title">Inspiring Change: Keto Mise Caregiver Group</h3>
                        <p class="journal-excerpt">
                            We celebrate the inspiring journey of the Keto Mise Caregiver Group in Jera Sublocation, North Ugenya. After graduating from the Moments That Matter (MTM) Program in 2025, the group has remained active supporting one another and promoting positive parenting, child wellbeing, and stronger families.
                        </p>
                        <a href="#" class="journal-link">Read Full Story <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 5: National Agricultural Week -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/agriweek.jpg" alt="National Agricultural Week" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Agric+Week'">
                        <span class="journal-badge">Agriculture</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Nationwide, Kenya
                        </div>
                        <h3 class="journal-title">Together We Grow: National Agricultural Week</h3>
                        <p class="journal-excerpt">
                            ADS Nyanza celebrates National Agricultural Week under the theme "Together We Grow." We honor Kenya's farmers and innovators, empowering communities with sustainable techniques and climate-smart agriculture for a food-secure future.
                        </p>
                        <a href="https://www.facebook.com/share/p/1J2uR7tmYg/" class="journal-link">Read Dispatch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 6: Consecration & Enthronement -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/14.jpeg" alt="Bishop Consecration" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=Bishop+Consecration'">
                        <span class="journal-badge">Church Event</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Maseno East, Kenya
                        </div>
                        <h3 class="journal-title">Consecration & Enthronement of Bishop Benard Enos Otieno Owuor</h3>
                        <p class="journal-excerpt">
                            ADS Nyanza warmly congratulates the ACK Diocese of Maseno East on the consecration and enthronement of The Rt. Rev'd CPA. Benard Enos Otieno Owuor as Bishop, marking a blessed milestone for the Diocese and Anglican community.
                        </p>
                        <a href="https://web.facebook.com/share/p/1AJV7pZrs8/" class="journal-link">Read Dispatch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 7: ECDE Summit -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/ecdcounty1.jpeg" alt="ECDE Summit" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=ECDE+Summit'">
                        <span class="journal-badge">Early Childhood</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Kisumu County, Kenya
                        </div>
                        <h3 class="journal-title">ECDE Partner Summit: Progress in Kisumu</h3>
                        <p class="journal-excerpt">
                            Kisumu County recognized ADS Nyanza's "Moments That Matter" program for advancing nurturing care, nutrition, and climate resilience for children aged 0–3 years.
                        </p>
                        <a href="mtm" class="journal-link">Read Dispatch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 8: World AIDS Day -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/nairobi_aids.jpg" alt="World AIDS Day" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=World+AIDS+Day'">
                        <span class="journal-badge">Health</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Nairobi, Kenya
                        </div>
                        <h3 class="journal-title">World AIDS Day: Running for Hope</h3>
                        <p class="journal-excerpt">
                            ADS Nyanza staff joined thousands in the Nairobi Half Marathon to champion awareness and a healthier future for all Kenyans.
                        </p>
                        <a href="https://web.facebook.com/share/p/1HdUDz65x7/" class="journal-link">Read Dispatch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 9: PMTCT Milestone -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                <div class="journal-card">
                    <div class="journal-image">
                        <img src="img/aids.jpg" alt="PMTCT Milestone" onerror="this.src='https://placehold.co/400x250/2e7d32/white?text=PMTCT+Success'">
                        <span class="journal-badge">Clinical Care</span>
                        <div class="image-overlay">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="journal-content">
                        <div class="journal-meta">
                            <i class="bi bi-geo-alt-fill"></i> Nyanza Region, Kenya
                        </div>
                        <h3 class="journal-title">Celebrating a PMTCT Milestone</h3>
                        <p class="journal-excerpt">
                            Over 200 HIV-exposed infants successfully graduated confirmed negative after a dedicated 23-month clinical and psychosocial journey.
                        </p>
                        <a href="https://www.facebook.com/share/p/1Wv1r8os6B/" class="journal-link">Read Dispatch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</section>

<style>
/* Keyframe Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.6;
    }
}

@keyframes shimmer {
    0% {
        background-position: -200% 0;
    }
    100% {
        background-position: 200% 0;
    }
}

/* Journal Card Styles */
.journal-card {
    background: #ffffff;
    border: 1px solid #e8e4e0;
    border-radius: 12px;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    height: 100%;
    display: flex;
    flex-direction: column;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    overflow: hidden;
    position: relative;
}

.journal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #2e7d32, #66bb6a, #2e7d32);
    background-size: 200% 100%;
    animation: shimmer 3s infinite linear;
    z-index: 1;
}

.journal-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
    border-color: #2e7d32;
}

/* Journal Image */
.journal-image {
    position: relative;
    overflow: hidden;
    height: 220px;
    background: #f5f5f5;
}

.journal-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.journal-card:hover .journal-image img {
    transform: scale(1.08);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(46, 125, 50, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.4s ease;
    cursor: pointer;
}

.image-overlay i {
    font-size: 3rem;
    color: white;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    transform: scale(0.5);
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.journal-card:hover .image-overlay {
    opacity: 1;
}

.journal-card:hover .image-overlay i {
    transform: scale(1);
}

.journal-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #2e7d32;
    color: white;
    padding: 5px 14px;
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    z-index: 2;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(46, 125, 50, 0.3);
    backdrop-filter: blur(4px);
    transition: all 0.3s ease;
}

.journal-card:hover .journal-badge {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(46, 125, 50, 0.4);
}

/* Journal Content */
.journal-content {
    padding: 1.5rem 1.5rem 1.75rem;
    flex: 1;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.journal-meta {
    font-size: 0.75rem;
    color: #888;
    margin-bottom: 0.75rem;
    font-family: 'Courier New', monospace;
    letter-spacing: 0.5px;
}

.journal-meta i {
    color: #2e7d32;
    margin-right: 0.4rem;
    font-size: 0.8rem;
}

.journal-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.15rem;
    font-weight: 700;
    color: #1a2a3a;
    margin-bottom: 0.75rem;
    line-height: 1.4;
    transition: color 0.3s ease;
}

.journal-card:hover .journal-title {
    color: #2e7d32;
}

.journal-excerpt {
    font-family: 'Georgia', serif;
    font-size: 0.85rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 1.25rem;
    flex: 1;
}

/* Read More Link */
.journal-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-family: 'Courier New', monospace;
    font-size: 0.7rem;
    font-weight: 700;
    color: #2e7d32;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: auto;
    padding-top: 0.75rem;
    border-top: 1px solid #f0ede8;
    width: 100%;
}

.journal-link i {
    font-size: 0.7rem;
    transition: transform 0.3s ease;
}

.journal-link:hover {
    color: #1b5e20;
    gap: 0.9rem;
}

.journal-link:hover i {
    transform: translateX(6px) scale(1.1);
}

/* Responsive */
@media (max-width: 992px) {
    .journal-image {
        height: 200px;
    }
}

@media (max-width: 768px) {
    .journal-image {
        height: 180px;
    }
    
    .journal-content {
        padding: 1.25rem;
    }
    
    .journal-title {
        font-size: 1rem;
    }
    
    .journal-excerpt {
        font-size: 0.8rem;
        line-height: 1.6;
    }
    
    .display-5 {
        font-size: 1.75rem !important;
    }
}

@media (max-width: 576px) {
    .journal-image {
        height: 160px;
    }
    
    .journal-content {
        padding: 1rem;
    }
    
    .journal-badge {
        font-size: 0.55rem;
        padding: 4px 10px;
        top: 10px;
        left: 10px;
    }
    
    .journal-title {
        font-size: 0.95rem;
    }
    
    .journal-excerpt {
        font-size: 0.75rem;
    }
}
</style>


<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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


