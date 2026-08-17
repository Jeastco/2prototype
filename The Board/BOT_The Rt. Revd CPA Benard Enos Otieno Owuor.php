<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - About Us</title>
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


    <hr class="my-5 opacity-10">

    <!-- ================= STAFF PROFILE - THE RT. REV'D CPA. BENARD ENOS OTIENO OWUOR ================= -->
    <div class="container-fluid py-5 bg-white position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-5 d-none d-lg-block" style="background-image: radial-gradient(#2e7d32 1px, transparent 1px); background-size: 30px 30px; pointer-events: none;"></div>

        <div class="container py-5 position-relative">
            <div class="row g-5">
                
                <!-- left column : photo + quick info -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <div class="text-center p-5 rounded-4 shadow-sm border-0 position-relative bg-white" 
                             style="border: 1px solid #edf2ef !important; box-shadow: 0 1rem 3rem rgba(0,0,0,.05) !important;">
                            
                            <div class="position-relative mx-auto mb-4" style="width: 240px; height: 240px;">
                                <div class="position-absolute top-50 start-50 translate-middle rounded-circle border border-2" 
                                     style="width: 265px; height: 265px; border-color: #2e7d32 !important; opacity: 0.2;"></div>
                                <img class="img-fluid rounded-circle shadow-lg border border-5 border-white" 
                                     src="img/enos.jpg" 
                                     alt="The Rt. Rev'd CPA. Benard Enos Otieno Owuor" 
                                     style="width: 100%; height: 100%; object-fit: cover; position: relative; z-index: 2;">
                            </div>

                            <h3 class="fw-bold mb-1" style="color: #091E3E; font-family: 'Playfair Display', serif;">The Rt. Rev’d CPA. Benard Enos Otieno Owuor</h3>
                            <p class="text-uppercase fw-bold mb-4" style="color: #2e7d32; letter-spacing: 2px; font-size: 0.8rem;">
                                Member, Board of Trustees | Diocesan Bishop, Maseno East
                            </p>
                            
                            <hr class="w-25 mx-auto mb-4" style="color: #2e7d32; height: 2px; opacity: 1;">

                            <div class="d-flex flex-column gap-2 text-start">
                                <div class="d-flex align-items-center small text-muted"><i class="bi bi-check2-circle text-success me-2"></i>Masters in Theology – Great Lakes University</div>
                                <div class="d-flex align-items-center small text-muted"><i class="bi bi-check2-circle text-success me-2"></i>MBA (Finance) – University of Nairobi</div>
                                <div class="d-flex align-items-center small text-muted"><i class="bi bi-check2-circle text-success me-2"></i>BBA (Accounting) – Maseno University</div>
                                <div class="d-flex align-items-center small text-muted"><i class="bi bi-check2-circle text-success me-2"></i>CPA(K) Finalist | 12+ Years Financial Management</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right column : full biography -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="ps-lg-5">
                        
                        <div class="mb-5">
                           <h6 class="text-uppercase fw-bold mb-2" style="color: #2e7d32; letter-spacing: 4px;">Diocesan Leadership & Financial Stewardship</h6>
                            <h2 class="display-6 fw-bold mb-4" style="color: #091E3E;">Professional Biography</h2>
                            <div style="width: 60px; height: 4px; background: #2e7d32; border-radius: 2px;"></div>
                        </div>
                        
                        <div class="bio-content" style="color: #4a4a4a; line-height: 1.9; font-size: 1.1rem; text-align: justify;">
                            
                            <p class="mb-4">
                                A Certified Public Accountant, he is currently the Diocesan Bishop of the Anglican Diocese of Maseno East and a holder of a Masters in Theology from Great Lakes University, a Masters in Business Administration (MBA) Finance from the University of Nairobi, a Bachelor of Business Administration (Accounting) from Maseno University, and is a CPA(K) finalist. His unique combination of theological training and financial expertise brings a distinctive perspective to both his episcopal ministry and his role on the Board of Trustees.
                            </p>

                            <p class="mb-4">
                                Bishop Benard brings over 12 years of experience in Accounting, Auditing, and Management to his leadership roles. His professional financial background has been instrumental in strengthening church administration, ensuring accountability, and promoting sound stewardship of resources across various church bodies and community initiatives.
                            </p>

                            <p class="mb-4">
                                Throughout his distinguished ministry, Bishop Benard has played various key roles in the church including Bishop's Chaplaincy duties, serving as Provincial Treasurer, and Regional and Diocesan Coordinator for the Kenya Anglican Men's Association (KAMA). In these capacities, he has been responsible for overseeing Parish activities, leading team member schools mission and evangelism efforts, training church leaders and lay readers, and serving as an advisory member to the finance, audit, and general-purpose committee. His balanced approach to spiritual leadership and financial governance has made him a valuable asset in church administration and community development.
                            </p>

                            <p class="mb-4">
                                His leadership extends beyond financial management to active participation in mission work, evangelism, and discipleship. As a trainer of church leaders and lay readers, he has invested significantly in capacity building within the church, equipping others for effective ministry. His advisory role on finance and audit committees demonstrates the trust placed in his judgment and expertise in matters of governance and accountability.
                            </p>

                            <!-- ADS Nyanza partnership note -->
                            <div class="card border-0 bg-light p-4 mb-4 shadow-sm" style="border-left: 5px solid #2e7d32 !important;">
                                <p class="m-0 fst-italic">
                                    As a Member of the Board of Trustees at ADS Nyanza, Bishop Benard brings invaluable financial acumen and spiritual oversight to the organization. His expertise in accounting, auditing, and management, combined with his deep commitment to servant leadership, strengthens the board's capacity for strategic governance, ensuring that resources are managed responsibly to maximize impact for vulnerable communities in the Nyanza region.
                                </p>
                            </div>
                        </div>

                        <!-- selected stats / highlights -->
                        <div class="row g-4 mt-5 pt-5 border-top border-light">
                            <div class="col-sm-4 text-center text-sm-start">
                                <h2 class="display-6 fw-bold mb-0" style="color: #2e7d32;">MBA</h2>
                                <span class="text-uppercase tracking-widest text-muted small fw-bold">Finance - UoN</span>
                            </div>
                            <div class="col-sm-4 text-center text-sm-start">
                                <h2 class="display-6 fw-bold mb-0" style="color: #2e7d32;">12+</h2>
                                <span class="text-uppercase tracking-widest text-muted small fw-bold">Years Financial Management</span>
                            </div>
                            <div class="col-sm-4 text-center text-sm-start">
                                <h2 class="display-6 fw-bold mb-0" style="color: #2e7d32;">CPA</h2>
                                <span class="text-uppercase tracking-widest text-muted small fw-bold">Certified Public Accountant</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End_Staff Profile - Benard Enos Otieno Owuor-->

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


