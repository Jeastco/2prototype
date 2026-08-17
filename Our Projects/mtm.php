<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Moments That Matter ECD</title>
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

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand p-0 d-flex align-items-center">
            <img src="img/ads.png" alt="ADS-NYANZA Logo" height="50" loading="eager" style="height: 50px; width: auto; max-width: 100%;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid #28A745; padding: 0.25rem 0.5rem; background: transparent;">
            <span class="navbar-toggler-icon" style="background-image: url(&quot;data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%2328A745' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E&quot;);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0 align-items-lg-center" style="gap: 0.25rem;">
                <li class="nav-item"><a href="index." class="nav-link">Home</a></li>
                <li class="nav-item"><a href="About_Us.php" class="nav-link">About Us</a></li>

                <li class="nav-item dropdown mega-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Our Programs</a>
                    <div class="dropdown-menu mega-menu border-0 shadow">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h5 class="mega-menu-heading" style="color: #28A745; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem;">Our Projects</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li class="mb-2"><a href="ecd.php">Early Childhood Development</a></li>
                                        <li class="mb-2"><a href="pesp.php">Peoples Empowerment for Sustainability Project</a></li>
                                        <li class="mb-2"><a href="icrp.php">Integrated Climate Resilience Project</a></li>
                                        <li class="mb-1"><a href="kaliedoscope.php">Kaliedoscope Project</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading" style="color: #28A745; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem;">Our Projects</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li class="mb-2"><a href="Global_Fund.php">Global Fund</a></li>
                                        <li class="mb-2"><a href="wkpi.php">West Kenya Peace Initiative</a></li>
                                        <li class="mb-1"><a href="emergency.php">Emergency Response</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="events.php" class="nav-link">Our Events</a></li>

                <li class="nav-item dropdown mega-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Engage with Us</a>
                    <div class="dropdown-menu mega-menu border-0 shadow">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h5 class="mega-menu-heading" style="color: #28A745; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem;">Media & Resources</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li class="mb-2"><a href="gallery.php">Gallery</a></li>
                                        <li class="mb-2"><a href="Our_Blog.php">Our Blog</a></li>
                                        <li class="mb-2"><a href="publications.php">Publications</a></li>
                                        <li class="mb-1"><a href="testimonials.php">Testimonials</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading" style="color: #28A745; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem;">Get Involved</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li class="mb-2"><a href="donate.php">Donate</a></li>
                                        <li class="mb-1"><a href="volunteer.php">Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="careers.php" class="nav-link">Careers</a></li>
                <li class="nav-item"><a href="tenders.php" class="nav-link">Tenders</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a href="https://ess.ads-nyanza.org/" class="btn btn-sm rounded-pill staff-portal-btn" 
                       style="background-color: white; border: 2px solid #28A745; color: #28A745; font-size: 0.85rem; padding: 0.35rem 1rem; transition: all 0.3s ease; white-space: nowrap; display: inline-block;" 
                       onmouseover="this.style.backgroundColor='#28A745'; this.style.color='white';" 
                       onmouseout="this.style.backgroundColor='white'; this.style.color='#28A745';">Staff Portal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JavaScript for performance optimization -->
<!-- ================= SCRIPTS & DEFER MANAGEMENT ================= -->
<script>
    // Remove spinner immediately after content loads
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
    
    // Lazy loading image observer
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('loaded');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Defer non-critical JavaScript loading
    function loadDeferredScripts() {
        var scripts = [
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        ];
        
        var loadedCount = 0;
        scripts.forEach(function(src) {
            var script = document.createElement('script');
            script.src = src;
            script.defer = true;
            script.onload = function() {
                loadedCount++;
                // Initialize custom navbar and dropdown actions once everything is safely in the DOM
                if (loadedCount === scripts.length) {
                    initializeNavigationLogic();
                }
            };
            document.body.appendChild(script);
        });
    }
    
    if (window.requestIdleCallback) {
        requestIdleCallback(loadDeferredScripts);
    } else {
        window.addEventListener('load', function() {
            setTimeout(loadDeferredScripts, 1500);
        });
    }

    // Wrapped to safely run only after jQuery and Bootstrap scripts are verified active
    function initializeNavigationLogic() {
        // Desktop hover for mega-dropdown
        document.querySelectorAll('.mega-dropdown').forEach(drop => {
            if (window.innerWidth > 992) {
                drop.addEventListener('mouseenter', () => {
                    const toggleElement = drop.querySelector('[data-bs-toggle="dropdown"]');
                    if(toggleElement && window.bootstrap) {
                        bootstrap.Dropdown.getOrCreateInstance(toggleElement).show();
                    }
                });
                drop.addEventListener('mouseleave', () => {
                    const toggleElement = drop.querySelector('[data-bs-toggle="dropdown"]');
                    if(toggleElement && window.bootstrap) {
                        bootstrap.Dropdown.getOrCreateInstance(toggleElement).hide();
                    }
                });
            }
        });

        // Mobile: Animate mega-menu links every time dropdown opens
        document.querySelectorAll('.mega-dropdown').forEach(drop => {
            drop.addEventListener('show.bs.dropdown', () => {
                const links = drop.querySelectorAll('.mega-menu-list a');
                links.forEach((link, i) => {
                    link.style.opacity = 0;
                    link.style.transform = 'translateX(-15px)';
                    link.style.transition = `all 0.4s ease ${0.05 * (i + 1)}s`;
                    setTimeout(() => {
                        link.style.opacity = 1;
                        link.style.transform = 'translateX(0)';
                    }, 50);
                });
            });
        });
    }

    // Safety fallback to hide loader spinner
    window.addEventListener('load', () => {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
        }
    });
</script>
<section class="hero-section">
    <div class="hero-container">
        
        <!-- Hero Image -->
        <div class="hero-image-wrapper">
            <img src="img/awiti.png" alt="Moments That Matter" class="hero-main-image">
            <div class="hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="hero-content">
            <span class="hero-badge">Early Childhood Development & Education</span>
            <h1 class="hero-title">Moments That Matter</h1>
            <p class="hero-description">Building brighter futures for children, caregivers, and communities through nurturing care and learning.</p>
            <div class="hero-buttons">
                <a href="#" class="btn-hero-primary">
                    <i class="bi bi-play-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#" class="btn-hero-secondary">
                    <i class="bi bi-heart me-2"></i> Get Involved
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <span>Scroll to explore</span>
            <div class="scroll-line">
                <div class="scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== HERO SECTION ===== */
.hero-section {
    position: relative;
    width: 100%;
    height: 70vh;
    min-height: 500px;
    max-height: 650px;
    overflow: hidden;
    background: #1a2b3c;
}

.hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* Hero Image */
.hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.hero-main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 30%;
    transition: transform 6s ease;
}

.hero-section:hover .hero-main-image {
    transform: scale(1.05);
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 43, 60, 0.75) 0%, rgba(26, 43, 60, 0.4) 50%, rgba(46, 125, 50, 0.3) 100%);
}

/* Hero Content */
.hero-content {
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

.hero-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.85);
    color: white;
    padding: 6px 20px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    backdrop-filter: blur(10px);
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 1rem;
    line-height: 1.1;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
    color: #ffffff;
}

.hero-title span {
    color: #4caf7f;
}

.hero-description {
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
.hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn-hero-primary {
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

.btn-hero-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.35);
    color: white;
}

.btn-hero-primary i {
    transition: transform 0.3s ease;
}

.btn-hero-primary:hover i:last-child {
    transform: translateX(5px);
}

.btn-hero-secondary {
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

.btn-hero-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator */
.scroll-indicator {
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

.scroll-indicator span {
    font-size: 0.7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
}

.scroll-line {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
    position: relative;
}

.scroll-dot {
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
    .hero-title {
        font-size: 3rem;
    }
}

@media (max-width: 768px) {
    .hero-section {
        height: 60vh;
        min-height: 400px;
        max-height: 550px;
    }
    
    .hero-title {
        font-size: 2.2rem;
    }
    
    .hero-description {
        font-size: 1rem;
        padding: 0 10px;
    }
    
    .hero-badge {
        font-size: 0.6rem;
        padding: 4px 14px;
    }
    
    .btn-hero-primary,
    .btn-hero-secondary {
        padding: 10px 24px;
        font-size: 0.8rem;
    }
    
    .hero-content {
        width: 95%;
    }
    
    .scroll-indicator {
        bottom: 15px;
    }
}

@media (max-width: 576px) {
    .hero-section {
        height: 55vh;
        min-height: 350px;
        max-height: 450px;
    }
    
    .hero-title {
        font-size: 1.8rem;
    }
    
    .hero-description {
        font-size: 0.9rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
    }
    
    .btn-hero-primary,
    .btn-hero-secondary {
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
<!-- ======================= MTM PROGRAM INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-mtm">About the Program</span>
            <h2 class="section-title-mtm">Moments That Matter<span style="color: #2e7d32;">®</span></h2>
            <div class="title-divider-mtm"></div>
            <p class="mtm-description">
                We collaborate closely with communities and vulnerable households with children aged <strong>0–3 years</strong> to promote nurturing care for early childhood development. Our focus is on fostering positive parenting practices, promoting social behavior change, and encouraging male involvement in caregiving roles.
            </p>
            <p class="mtm-description">
                We empower primary caregivers with the knowledge and resources needed to support their children's holistic development—ensuring that young children not only survive but thrive during these critical years.
            </p>
            <p class="mtm-description">
                Additionally, we partner with faith leaders and local institutions to enhance psychosocial support for caregivers and advocate for policies that prioritize early childhood development.
            </p>
            
            <div class="mtm-cta-group">
                <a href="#get-involved" class="btn-mtm-primary">
                    <i class="bi bi-hand-heart me-2"></i> Get Involved
                </a>
                <a href="#impact" class="btn-mtm-outline">
                    <i class="bi bi-graph-up me-2"></i> See Our Impact
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mtm-image-wrapper">
                <img src="img/mtm-ecd.jpg" alt="MTM Program" class="img-fluid" onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Moments+That+Matter'">
                
            </div>
        </div>
    </div>
</section>

<!-- ======================= KEY HIGHLIGHTS ======================= -->
<section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge-mtm">Program Highlights</span>
            <h3 class="highlights-title">Key Impact Areas</h3>
            <div class="title-divider-mtm center"></div>
            <p class="text-muted" style="max-width: 650px; margin: 0 auto;">Our MTM program focuses on four critical areas to ensure holistic child development</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h4 class="highlight-number">17,021</h4>
                    <p class="highlight-label">Children Reached</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-person-heart"></i>
                    </div>
                    <h4 class="highlight-number">15,197</h4>
                    <p class="highlight-label">Caregivers Trained</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4 class="highlight-number">1,174</h4>
                    <p class="highlight-label">CORPS</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h4 class="highlight-number">27</h4>
                    <p class="highlight-label">Communities Served</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== SECTION STYLES ===== */

.section-badge-mtm {
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

.highlights-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
}

.title-divider-mtm.center {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
    margin: 0.5rem auto 1rem auto;
}

/* Highlight Cards */
.highlight-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
}

.highlight-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    border-color: #2e7d32;
}

.highlight-icon {
    width: 50px;
    height: 50px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.75rem auto;
}

.highlight-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.highlight-number {
    font-size: 1.8rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 0.25rem;
}

.highlight-label {
    font-size: 0.8rem;
    color: #6c757d;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .highlights-title {
        font-size: 1.6rem;
    }
    
    .highlight-number {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    .highlights-title {
        font-size: 1.4rem;
    }
    
    .highlight-number {
        font-size: 1.2rem;
    }
    
    .highlight-label {
        font-size: 0.7rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ===== MTM SECTION STYLES ===== */

/* Badge */
.section-badge-mtm {
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
.section-title-mtm {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Title Divider - Left Aligned */
.title-divider-mtm {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
    margin: 0 0 1rem 0;
}

/* Title Divider - Center Aligned */
.title-divider-mtm.center {
    margin: 0.5rem auto 1rem auto;
}

/* Description */
.mtm-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

/* Image */
.mtm-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.mtm-image-wrapper img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.mtm-image-wrapper:hover img {
    transform: scale(1.02);
}

.mtm-image-badge {
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
.mtm-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.btn-mtm-primary {
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

.btn-mtm-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.btn-mtm-outline {
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

.btn-mtm-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* Highlight Cards */
.highlight-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
}

.highlight-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    border-color: #2e7d32;
}

.highlight-icon {
    width: 50px;
    height: 50px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.75rem auto;
}

.highlight-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.highlight-number {
    font-size: 1.8rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 0.25rem;
}

.highlight-label {
    font-size: 0.8rem;
    color: #6c757d;
    margin: 0;
}

/* Highlights Title */
.highlights-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-mtm {
        font-size: 2rem;
    }
    
    .highlights-title {
        font-size: 1.6rem;
    }
    
    .mtm-image-wrapper img {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .highlight-number {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-mtm {
        font-size: 1.6rem;
    }
    
    .mtm-image-wrapper img {
        height: 220px;
    }
    
    .mtm-image-badge {
        font-size: 0.65rem;
        padding: 6px 14px;
        bottom: 10px;
    }
    
    .btn-mtm-primary, .btn-mtm-outline {
        padding: 8px 20px;
        font-size: 0.8rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= MTM PROGRAM END ======================= -->

<!-- ======================= PULL QUOTE & STORY ======================= -->
<section class="container py-5">
    <div class="row g-4 align-items-center">
        <div class="col-lg-8">
            <div class="pull-quote-story">
                <i class="bi bi-quote"></i>
                <p style="margin-bottom: 0.5rem; font-size: 1.2rem;">
                    "Moments That Matter transformed how I care for my child. I learned that every moment 
                    is an opportunity for learning and growth. Today, my daughter is thriving."
                </p>
                <footer style="font-style: normal; font-weight: 600; color: #2e7d32;">
                    — Mary Achieng, Caregiver, Kisumu County
                </footer>
            </div>
        </div>
        <div class="col-lg-4">
            <div style="background: #ffffff; border-radius: 16px; padding: 1.5rem; border: 1px solid #eef2f6; text-align: center;">
                <i class="bi bi-journal-richtext" style="font-size: 2.5rem; color: #2e7d32;"></i>
                <h5 style="font-weight: 700; margin-top: 0.5rem;">Annual Report 2024</h5>
                <p class="text-muted small">Download our latest MTM program impact report</p>
                <a href="#" class="btn-mtm-primary" style="padding: 8px 20px; font-size: 0.8rem;">
                    <i class="bi bi-download me-2"></i> Download Report
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== MTM SECTION STYLES ===== */

/* Badge */
.section-badge-mtm {
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
.section-title-mtm {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.title-divider-mtm {
    width: 50px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
    margin: 0 0 1rem 0;
}

/* Description */
.mtm-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

/* Image */
.mtm-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.mtm-image-wrapper img {
    width: 100%;
    height: 380px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.mtm-image-wrapper:hover img {
    transform: scale(1.02);
}

.mtm-image-badge {
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
.mtm-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.btn-mtm-primary {
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

.btn-mtm-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.btn-mtm-outline {
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

.btn-mtm-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* Highlight Cards */
.highlight-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
}

.highlight-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    border-color: #2e7d32;
}

.highlight-icon {
    width: 50px;
    height: 50px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.75rem auto;
}

.highlight-icon i {
    font-size: 1.5rem;
    color: #2e7d32;
}

.highlight-number {
    font-size: 1.8rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 0.25rem;
}

.highlight-label {
    font-size: 0.8rem;
    color: #6c757d;
    margin: 0;
}

/* Pull Quote */
.pull-quote-story {
    border-left: 4px solid #2e7d32;
    background: #f0faf2;
    padding: 1.5rem 2rem;
    border-radius: 12px;
    font-family: 'Georgia', serif;
    font-style: italic;
    font-size: 1.1rem;
    color: #1a1a1a;
}

.pull-quote-story i {
    color: #2e7d32;
    opacity: 0.5;
    font-size: 1.8rem;
    margin-right: 8px;
}

/* Highlights Title */
.highlights-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-mtm {
        font-size: 2rem;
    }
    
    .highlights-title {
        font-size: 1.6rem;
    }
    
    .mtm-image-wrapper img {
        height: 280px;
        margin-top: 1.5rem;
    }
    
    .highlight-number {
        font-size: 1.5rem;
    }
    
    .pull-quote-story {
        padding: 1rem 1.25rem;
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .section-title-mtm {
        font-size: 1.6rem;
    }
    
    .mtm-image-wrapper img {
        height: 220px;
    }
    
    .mtm-image-badge {
        font-size: 0.65rem;
        padding: 6px 14px;
        bottom: 10px;
    }
    
    .btn-mtm-primary, .btn-mtm-outline {
        padding: 8px 20px;
        font-size: 0.8rem;
    }
}
</style><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- ======================= PROGRAM HIGHLIGHTS ======================= -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge-highlight">What We Offer</span>
            <h3 class="section-title-highlight">Moments That Matter <span style="color: hsl(140, 82%, 37%);">Program Highlights</span></h3>
            <div class="title-divider-highlight"></div>
            <p class="section-desc-highlight">
                Innovative, evidence-based tools and approaches, developed in collaboration with Episcopal Relief and Development, that transform caregiving practices and early learning environments in vulnerable communities.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card 1: Babahood Manual -->
            <div class="col-lg-4 col-md-6">
                <div class="highlight-program-card">
                    <div class="highlight-program-icon green">
                        <i class="bi bi-book-heart"></i>
                    </div>
                    <h5>The Babahood Manual</h5>
                    <p>
                        A practical guide that encourages fathers to take a more active role in childcare. It helps families build healthier relationships by promoting shared parenting, emotional support, and positive caregiving at home.
                    </p>
                    <div class="highlight-tag">
                        <span>Parenting Guide</span>
                    </div>
                </div>
            </div>

            <!-- Card 2: Community Caregiver Circles -->
            <div class="col-lg-4 col-md-6">
                <div class="highlight-program-card">
                    <div class="highlight-program-icon gold">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5>Community Caregiver Circles</h5>
                    <p>
                        Safe spaces where caregivers come together to learn, share experiences, and support one another. These circles strengthen parenting skills, reduce stress, and promote better care for children in everyday life.
                    </p>
                    <div class="highlight-tag">
                        <span>Caregiver Support</span>
                    </div>
                </div>
            </div>

            <!-- Card 3: Community Volunteers -->
            <div class="col-lg-4 col-md-6">
                <div class="highlight-program-card">
                    <div class="highlight-program-icon blue">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h5>Community Volunteers & Local Leaders</h5>
                    <p>
                        Working with trusted community volunteers and local leaders to share nurturing care messages, strengthen family support systems, and encourage lasting positive change for children and caregivers.
                    </p>
                    <div class="highlight-tag">
                        <span>Community Engagement</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-5 pt-3">
            <a href="#" class="btn-highlight-cta">
                <i class="bi bi-info-circle me-2"></i> Learn More About Our Approach
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* ===== SECTION STYLES ===== */

.section-badge-highlight {
    display: inline-block;
    background: rgba(40, 167, 69, 0.1);
    color: hsl(140, 82%, 37%);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.section-title-highlight {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a2c1a;
    margin-top: 0.75rem;
    margin-bottom: 0.25rem;
}

.title-divider-highlight {
    width: 60px;
    height: 2px;
    background: hsl(140, 82%, 37%);
    margin: 0.75rem auto 1rem auto;
    border-radius: 2px;
}

.section-desc-highlight {
    color: #6c757d;
    max-width: 750px;
    margin: 0 auto;
    line-height: 1.6;
    font-size: 1rem;
}

/* ===== PROGRAM CARDS ===== */
.highlight-program-card {
    background: #ffffff;
    border-radius: 24px;
    padding: 2rem 1.75rem;
    text-align: center;
    border: 1px solid #eef0ee;
    transition: all 0.35s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.highlight-program-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: hsl(140, 82%, 37%);
    transform: scaleX(0);
    transition: transform 0.4s ease;
    transform-origin: left;
}

.highlight-program-card:hover::before {
    transform: scaleX(1);
}

.highlight-program-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(40, 167, 69, 0.08);
    border-color: rgba(40, 167, 69, 0.15);
}

/* Card Icons */
.highlight-program-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 1.25rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.highlight-program-card:hover .highlight-program-icon {
    transform: scale(1.05);
}

.highlight-program-icon i {
    font-size: 1.8rem;
}

/* Icon Colors */
.highlight-program-icon.green {
    background: #eaf7ef;
}

.highlight-program-icon.green i {
    color: hsl(140, 82%, 37%);
}

.highlight-program-icon.gold {
    background: #fff8e8;
}

.highlight-program-icon.gold i {
    color: #c69214;
}

.highlight-program-icon.blue {
    background: #eaf4ff;
}

.highlight-program-icon.blue i {
    color: #2563eb;
}

/* Card Typography */
.highlight-program-card h5 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: #1a2c1a;
    margin-bottom: 0.75rem;
}

.highlight-program-card p {
    font-size: 0.9rem;
    line-height: 1.7;
    color: #5a6b5a;
    margin-bottom: 1.25rem;
    flex: 1;
}

/* Tag */
.highlight-tag {
    margin-top: auto;
}

.highlight-tag span {
    display: inline-block;
    background: #f8faf8;
    padding: 4px 16px;
    border-radius: 50px;
    font-size: 0.65rem;
    font-weight: 600;
    color: #2d4a2d;
    letter-spacing: 0.5px;
    border: 1px solid #eef0ee;
    transition: all 0.3s ease;
}

.highlight-program-card:hover .highlight-tag span {
    background: rgba(40, 167, 69, 0.08);
    border-color: rgba(40, 167, 69, 0.2);
    color: hsl(140, 82%, 37%);
}

/* Bottom CTA */
.btn-highlight-cta {
    display: inline-flex;
    align-items: center;
    padding: 12px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    background: transparent;
    color: hsl(140, 82%, 37%);
    border: 2px solid hsl(140, 82%, 37%);
    transition: all 0.3s ease;
}

.btn-highlight-cta:hover {
    background: hsl(140, 82%, 37%);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(40, 167, 69, 0.2);
}

.btn-highlight-cta i {
    transition: transform 0.3s ease;
}

.btn-highlight-cta:hover i {
    transform: translateX(5px);
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-highlight {
        font-size: 1.6rem;
    }
    
    .highlight-program-card {
        padding: 1.5rem 1.25rem;
    }
    
    .highlight-program-card h5 {
        font-size: 1.05rem;
    }
    
    .highlight-program-card p {
        font-size: 0.85rem;
    }
    
    .highlight-program-icon {
        width: 60px;
        height: 60px;
    }
    
    .highlight-program-icon i {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-highlight {
        font-size: 1.4rem;
    }
    
    .highlight-program-card {
        padding: 1.25rem 1rem;
    }
}
</style>


<!-- ======================= PROGRAM HIGHLIGHTS END ======================= -->
<!-- ======================= WHERE WE WORK (INTERACTIVE MAP) ======================= -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <span class="text-uppercase small fw-semibold" style="color: var(--primary-green); letter-spacing: 2px;">Our Footprint</span>
      <h2 class="fw-bold mb-3 mt-2" style="color: var(--text-dark); font-size: 2rem;">Where We Work</h2>
      <p class="text-muted mx-auto col-lg-8" style="line-height: 1.6;">
        The Moments That Matter (MTM) program is actively implemented across five counties in Kenya: Homa Bay, Kisumu, Nyamira, Siaya, and Vihiga. We focus on reaching families in remote and underserved areas. Through collaborations with community health volunteers, faith leaders, and early learning centers, we create nurturing environments for children aged 0–3 years.
      </p>
      <p class="text-muted mx-auto col-lg-8 small">
        Our footprint continues to expand as we work with partners to strengthen early childhood systems and community support structures across the region.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden county-card position-relative">
          <div class="card-header fw-bold text-center py-3" style="background-color: #dc3545; color: white;">Homa Bay County</div>
          <div class="card-body p-0" style="height: 250px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021346.1778550475!2d33.814425407017744!3d-0.5514791770228287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b2e0eec3fcb9b%3A0x35dde129cc9b103f!2sHoma%20Bay%20County!5e0!3m2!1sen!2ske!4v1762239912537!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
         
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden county-card position-relative">
          <div class="card-header fw-bold text-center py-3" style="background-color: #0d6efd; color: white;">Kisumu County</div>
          <div class="card-body p-0" style="height: 250px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255348.1558936961!2d34.57335192826967!3d-0.07462917250695443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa437ad4ac81d%3A0x2012a439d6248dd2!2sKisumu!5e0!3m2!1sen!2ske!4v1762239799834!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden county-card position-relative">
          <div class="card-header fw-bold text-center py-3" style="background-color: #198754; color: white;">Nyamira County</div>
          <div class="card-body p-0" style="height: 250px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510663.7680906336!2d34.611137669825254!3d-0.6511235802221003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b16d82e769fc3%3A0x256c2064c6e24d31!2sNyamira%20County!4v1762239771232!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden county-card position-relative">
          <div class="card-header fw-bold text-center py-3" style="background-color: var(--accent-teal); color: white;">Siaya County</div>
          <div class="card-body p-0" style="height: 250px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510696.4981332249!2d33.92757392256632!3d-0.056336631437746705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d553f53e78e3af%3A0x2e2e93eed67964ec!2sSiaya!5e0!3m2!1sen!2ske!4v1762239644557!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
         
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden county-card position-relative">
          <div class="card-header fw-bold text-center py-3" style="background-color: var(--accent-gold); color: var(--text-dark);">Vihiga County</div>
          <div class="card-body p-0" style="height: 250px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255348.10111809088!2d34.56659272554759!3d0.08353397304018038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17800c2778604159%3A0x7e448ddc8e934919!2sVihiga%20County!5e0!3m2!1sen!2ske!4v1762239740922!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================= SUCCESS STORIES ======================= -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
  :root {
    --primary-green: hsl(140, 82%, 37%);
    --primary-light: #f0f7ed;
    --text-dark: #1a2c1a;
    --text-gray: #3a4a3a;
    --border-light: #e8ece8;
  }
  
  body {
    margin: 0;
    padding: 0;
  }
  
  .success-section {
    background-color: #ffffff;
    overflow-x: hidden;
  }
  
  .success-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
  }
  
  .section-header {
    text-align: center;
    margin-bottom: 3rem;
  }
  
  .section-tag {
    color: var(--primary-green);
    letter-spacing: 2px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
  }
  
  .section-title {
    color: var(--text-dark);
    font-size: 2rem;
    font-weight: 700;
    margin: 0.5rem 0;
    font-family: 'Playfair Display', serif;
  }
  
  .section-divider {
    width: 50px;
    height: 2px;
    background: var(--primary-green);
    margin: 0.5rem auto 1rem auto;
  }
  
  .section-subtitle {
    color: #6c757d;
    max-width: 750px;
    margin: 0 auto;
    line-height: 1.6;
    font-family: 'Lora', serif;
  }
  
  .story-card-simple {
    background: #ffffff;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
    border: 1px solid var(--border-light);
  }
  
  .story-card-simple:hover {
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
    border-color: #cddfcd;
  }
  
  .drop-cap {
    float: left;
    font-size: 58px;
    line-height: 48px;
    padding-top: 6px;
    padding-right: 12px;
    font-family: 'Playfair Display', serif;
    font-weight: 800;
    color: var(--primary-green);
  }
  
  .pull-quote {
    background: #f4f7f2;
    border-left: 4px solid var(--primary-green);
    padding: 1rem 1.5rem;
    margin: 1.5rem 0;
    font-style: italic;
    font-size: 1.1rem;
    color: #1a3b2f;
    font-family: 'Playfair Display', serif;
    line-height: 1.4;
  }
  
  .pull-quote i {
    color: var(--primary-green);
    margin-right: 8px;
  }
  
  .story-highlight {
    background: #f8faf6;
    padding: 1rem;
    border-radius: 12px;
    margin: 1rem 0;
    border-left: 3px solid var(--primary-green);
  }
  
  .story-highlight p {
    margin: 0;
    font-size: 0.9rem;
    color: var(--text-gray);
  }
  
  .story-meta-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    padding: 0.6rem 0;
    margin: 0.5rem 0 1rem 0;
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
    color: #6c757d;
    font-size: 0.8rem;
    font-family: 'Inter', sans-serif;
  }
  
  .story-meta-bar i {
    color: var(--primary-green);
    width: 18px;
  }
  
  .feature-tag {
    background: #f0f4f0;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.7rem;
    color: var(--text-gray);
    display: inline-block;
  }
  
  .btn-green {
    display: inline-block;
    padding: 10px 28px;
    border-radius: 40px;
    font-weight: 500;
    font-size: 0.85rem;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
    background-color: var(--primary-green);
    color: white;
    border: none;
    cursor: pointer;
    transition: all 0.25s ease;
  }
  
  .btn-green:hover {
    background-color: #1e7230;
  }
  
  .btn-outline-green {
    display: inline-block;
    padding: 10px 28px;
    border-radius: 40px;
    font-weight: 500;
    font-size: 0.85rem;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
    background-color: transparent;
    color: var(--primary-green);
    border: 1.5px solid var(--primary-green);
    cursor: pointer;
    transition: all 0.25s ease;
  }
  
  .btn-outline-green:hover {
    background-color: var(--primary-green);
    color: white;
  }
  
  .image-caption {
    font-size: 0.7rem;
    color: #888;
    text-align: center;
    margin-top: 6px;
    font-family: 'Inter', sans-serif;
  }
  
  @media (max-width: 768px) {
    .story-card-simple {
      padding: 1rem;
    }
    .pull-quote {
      font-size: 1rem;
      padding: 0.8rem 1rem;
    }
    .section-title {
      font-size: 1.6rem;
    }
    .drop-cap {
      font-size: 44px;
      line-height: 38px;
      padding-right: 8px;
    }
  }
</style>

<section class="success-section">
  <div class="success-container">

    <!-- Section Header -->
    <div class="section-header">
      <span class="section-tag">✦ Success Stories ✦</span>
      <h2 class="section-title">Moments That Matter</h2>
      <div class="section-divider"></div>
      <p class="section-subtitle">
        Real stories of transformation from families across Western Kenya who have experienced the power of nurturing care.
      </p>
    </div>

    <!-- STORY 1: Lucy & Reagan Otieno -->
    <div class="story-card-simple">
      <span class="section-tag" style="font-size: 0.7rem;">From Fear to Peace</span>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">Lucy's Journey Will Inspire You</h3>
      <p class="small text-muted text-uppercase mb-3" style="border-left: 3px solid var(--primary-green); padding-left: 10px;">Nurturing Care & Family Transformation • Siaya County</p>
      
      <div class="row g-4">
        <div class="col-md-8">
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);"><span class="drop-cap">M</span>eet Lucy Anyango who is married to Reagan Otieno from Siaya County. They are parents to Ashley (10) and Briannah (2.5). Before the Moments That Matter program came to their village, Lucy didn't believe play mattered. She kept her firstborn indoors, which she now believes hurt Ashley's social-emotional growth.</p>
          
          <div class="pull-quote">
            <i class="fas fa-quote-left"></i> I didn't even know you could talk to a child in the womb. Then my community health promoter taught me nurturing care.
          </div>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">With her second-born, Briannah, Lucy did things differently. She played, talked, and responded to her needs starting from pregnancy. The result? Briannah hit milestones faster, is physically strong, confident, and now attends a playgroup.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">But the transformation didn't stop there. Reagan was once an absent husband and father gone from morning to night, with violence common when Lucy asked for money. Then the program introduced kitchen gardens. Lucy, who used to buy everything, now grows her own vegetables.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Through the program, Lucy started a kitchen garden where she grows her own vegetables and sells the surplus at the local market. With Savings with Education (SWE), she turned her garden sales into a small business, gaining financial security. She now pays school fees, buys milk, fish, and clothes, and even has health insurance. Their mud grass-thatched house has been replaced by a spacious iron-roofed brick home.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">"I no longer ask my husband for small purchases. I sell surplus from my garden, and harmony has been restored." She has a voice in family decisions. Together with Reagan, they budget and plan something she once thought impossible.</p>
          
          <div class="pull-quote" style="background: #ffffff; border-left: 4px solid var(--primary-green);">
            "This program has brought peace and sanity to our home. I am one of the biggest beneficiaries. When parents thrive, children thrive." — Lucy Anyango
          </div>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Reagan is now present. He plays with the kids, helps with chores, and takes them to the hospital. The family that once lived in fear now lives in peace. The couple that once fought over money now budgets together. Lucy's journey from fear to flourishing is a testament to what happens when mothers are empowered, fathers are invited in, and children are given the gift of nurturing care from the very beginning.</p>
        </div>
        
        <div class="col-md-4">
          <img src="img/lucy.png" alt="Lucy Anyango" style="width: 100%; border-radius: 12px; margin-bottom: 1rem;">
          <p class="image-caption">Lucy Anyango tending to her kitchen garden</p>
          <img src="img/lucy2.png" alt="Lucy Anyango at her shop" style="width: 100%; border-radius: 12px; margin-top: 1rem;">
          <p class="image-caption">Lucy Anyango at her shop</p>
        </div>
      </div>
    </div>

    <!-- STORY 2: Getray Vugutsa -->
    <div class="story-card-simple">
      <span class="section-tag" style="font-size: 0.7rem;">Faith & Parenting</span>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">Getray Vugutsa: From a Parenting Gap to a Light in the Community</h3>
      <p class="small text-muted text-uppercase mb-3" style="border-left: 3px solid var(--primary-green); padding-left: 10px;">Faith Leader & Change Agent • Muluhyia B, Vihiga County</p>
      
      <div class="row g-4">
        <div class="col-md-7 order-md-2">
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Deep in the lively village of Muluhyia B, 32-year-old Getray Vugutsa wears many hats with grace and determination: mother, wife, faith leader, and now a change agent in her community. Married to Charles Amboko and raising two children, Getray's journey with MTM has been one of steady transformation from good to exceptional.</p>
          
          <div class="pull-quote">
            <i class="fas fa-quote-left"></i> I thought I was doing well because my child had food, went to school, and was growing up. What I did not know was that how I was correcting my child was planting seeds of fear rather than understanding.
          </div>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Unlike many caregivers who join the program with little knowledge of responsive caregiving, Getray had a solid foundation. She and her husband provided essential care shelter, food, clothing, school fees. Their firstborn was doing well in school. From the outside, everything looked fine. But something was missing.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">The gap, Getray discovered, was in her approach to discipline. With her firstborn, she had been harsh at times believing that firmness was synonymous with good parenting. She hadn't yet understood the line between discipline and punishment.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Everything began to shift when ECD Promoter John Osome started his home visits. John did not arrive with judgment. He came with knowledge, warmth, and a structured curriculum designed to help caregivers see child development in a new, fuller light.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">The changes were visible. Nutrition became a family priority. Meals are now planned with intention, drawing from their kitchen garden to provide balanced diets. Discipline, once her weakest area, has become her greatest strength. She now practices positive discipline patient explanation over punishment, setting clear boundaries with love.</p>
          
          <div class="story-highlight">
            <p>Parenting Shift: From harsh discipline to positive, loving guidance. Children now respond with understanding, not fear. Nutrition: Family now eats balanced meals from their own kitchen garden produce. Community Impact: As a faith leader, Getray now mentors other parents through her church network, spreading what she has learned.</p>
          </div>
          
          <p class="fst-italic" style="border-top: 1px solid var(--border-light); padding-top: 1rem; color: var(--primary-green);">"I used to think I was a good parent because my children were fed and clothed. Now I know that true parenting is about building character, nurturing spirits, and showing up with love every single day." — Getray Vugutsa</p>
        </div>
        
        <div class="col-md-5 order-md-1">
          <img src="img/vugista.png" alt="Getray Vugutsa" style="width: 100%; border-radius: 12px;">
          <p class="image-caption">Getray Vugutsa with ECD Promoter John Osome during home visits</p>
        </div>
      </div>
    </div>

    <!-- STORY 3: Eglyne Indeku -->
    <div class="story-card-simple">
      <span class="section-tag" style="font-size: 0.7rem;">Inclusive Parenting</span>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">Eglyne Indeku: Transforming Parenting Through Inclusion</h3>
      <p class="small text-muted text-uppercase mb-3" style="border-left: 3px solid var(--primary-green); padding-left: 10px;">Special Needs Caregiving • Emululu Village</p>
      
      <div class="row g-4">
        <div class="col-md-7">
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Deep in Emululu village, Eglyne Indeku is raising her children with renewed purpose and understanding. Among her children is her young son, Ezekiel, a child living with a disability. Before joining the Moments That Matter program, Eglyne's parenting approach lacked the depth of responsive caregiving she practices today.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">With her older children, she did her best with the knowledge she had at the time. But she now recognizes that key aspects of child development inclusion, play-based learning, and shared caregiving were not fully embraced in her home. Her son Ezekiel, because of his disability, was unintentionally kept at a distance.</p>
          
          <div class="pull-quote">
            <i class="fas fa-quote-left"></i> They used to whisper about Ezekiel. Now they ask me questions. They want to learn how to include children with disabilities in their own families. That is the real change not just in my home, but in how our whole village sees children like Ezekiel.
          </div>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Eglyne's transformation began when her ECD Promoter, Beatrice Abiero, warmly welcomed her into the MTM program. Though she joined later than others, Eglyne quickly immersed herself in the peer-to-peer learning spaces, drawing wisdom and encouragement from fellow caregivers.</p>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Through these interactions, she realized something profound: parenting is not just about meeting basic needs. It is about nurturing a child's holistic development body, mind, and spirit regardless of their abilities.</p>
          
          <div class="story-highlight">
            <p>Breakthrough: From unintentional isolation to full family inclusion. Siblings now play with and care for Ezekiel, fostering belonging, dignity, and love.</p>
          </div>
          
          <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Today, Eglyne stands as a proud participant in the MTM project, now in its second cycle. Her journey is about deep, lasting transformation. From limited awareness to informed, inclusive parenting, Eglyne is raising all of her children with intention, love, and dignity.</p>
        </div>
        
        <div class="col-md-5">
          <img src="img/eglyne.JPG" alt="Eglyne Indeku with her son Ezekiel" style="width: 100%; border-radius: 12px;">
          <p class="image-caption">Eglyne Indeku with her son Ezekiel embracing inclusive parenting with love and dignity</p>
        </div>
      </div>
    </div>

    <!-- STORY 4: Daniel Owinga -->
    <div class="story-card-simple">
      <span class="section-tag" style="font-size: 0.7rem;">Child Protection in Action</span>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">The ECD Committee Member Who Saved a Life</h3>
      <div class="story-meta-bar">
        <span><i class="fas fa-map-marker-alt"></i> Border II Sublocation</span>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);"><span class="drop-cap">D</span>aniel Owinga, a 38-year-old human rights advocate and committed ECD Committee member, has turned his lifelong passion for justice into life-saving action. One stormy night, as rain pounded against the tin roofs of Border II sublocation, Daniel received an urgent call that would define his service to the community.</p>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">A two-week-old infant had been found abandoned, left alone in the pouring rain, struggling to survive. Someone had heard the baby's cries, followed the sound, and found the tiny child lying on the wet ground with no blanket, no shelter, no parent in sight.</p>
      
      <div class="pull-quote">
        <i class="fas fa-quote-left"></i> Protecting children is not optional. It is our responsibility. When communities act, children live. We are glad that the community trusts us to safeguard our children and save lives as an ECD committee.
        <div class="mt-2 pt-1 small text-uppercase" style="color: var(--primary-green);">— Daniel Owinga, ECD Committee Member</div>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">The team rushed to the local health facility, where medical staff found the infant in critical condition weak, shivering, barely breathing, dangerously cold. Nurses and doctors worked quickly, stabilizing vital signs. Through the skill of the health workers and a miracle, the infant survived.</p>
      
      <div class="story-highlight">
        <p>Today, that child is alive because Daniel Owinga answered a phone call on a stormy night and refused to look away. "When communities act, children live," Daniel says. "I choose to act, every single time."</p>
      </div>
    </div>

    <!-- STORY 5: Mary Akinyi -->
    <div class="story-card-simple">
      <span class="section-tag" style="font-size: 0.7rem;">Maternal Health & Family Transformation</span>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">A New Beginning for Mary Akinyi and Her Family</h3>
      <div class="story-meta-bar">
        <span><i class="fas fa-map-marker-alt"></i> Lwala Village, Homabay County</span>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);"><span class="drop-cap">I</span>n Lwala village, Kokwanyo East Sub-Location, Homabay County, 49-year-old Mary Akinyi once defined her life by exhaustion and quiet endurance. A mother of seven children, she had carried the weight of pregnancy, childbirth, and childrearing almost entirely alone. Her husband remained distant and uninvolved.</p>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Mary's story began to change when she enrolled in the Moments That Matter program. Through regular home visits, MTM promoter Veronica walked alongside her with guidance, encouragement, and practical support. For the first time in her life, someone saw Mary as a woman with dignity and potential.</p>
      
      <div class="pull-quote">
        <i class="fas fa-quote-left"></i> It feels like a miracle. For the first time, I am not alone. My husband holds our baby, supports me at home, and shows love to our children. I never thought this could be my life.
        <div class="mt-2 pt-1 small text-uppercase" style="color: var(--primary-green);">— Mary Akinyi</div>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Today, Mary's husband holds their baby, supports her with household responsibilities, and shows care toward all of their children. The shift has brought a new sense of peace to their family. Their home, once marked by distance and struggle, is now filled with shared responsibility and growing warmth.</p>
      
      <div class="story-highlight">
        <p>"This baby will not know the suffering I knew," Mary says. "She will know love. She will know that her father holds her. She will see her mother smile. That is the gift that MTM gave us not just health, but hope."</p>
      </div>
    </div>

    <!-- STORY 6: Chief Elijah Arita -->
    <div class="story-card-simple">
      <div class="story-badge-custom" style="display: inline-block; padding: 4px 12px; background: rgba(40, 167, 69, 0.1); color: var(--primary-green); border-radius: 50px; font-size: 0.7rem; font-weight: 600; margin-bottom: 1rem;">
        <i class="fas fa-gavel me-1"></i> Community Transformation
      </div>
      <h3 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: var(--text-dark);">A Chief's Perspective: How MTM Transformed a Community</h3>
      <div class="story-meta-bar">
        <span><i class="fas fa-user-tie"></i> By ADS Nyanza Correspondent</span>
        <span><i class="fas fa-map-marker-alt"></i> Ekerubo Sub Location</span>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);"><span class="drop-cap">C</span>hief Elijah Arita, 37, serves as the administrative leader of Ekerubo Sub Location. From his unique vantage point overseeing community welfare, settling disputes, and witnessing daily struggles, he has seen a remarkable transformation unfold.</p>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">"Before MTM came to our community, my office was often overwhelmed with distressing cases," Chief Arita recalls. "I would regularly receive reports of absentee fathers men who had completely withdrawn from their responsibilities, leaving mothers to raise children alone."</p>
      
      <div class="pull-quote">
        <i class="fas fa-quote-left"></i> Through MTM, our community has begun to heal and rebuild. Families are stronger, children are better cared for, and there is a renewed sense of hope. As a leader, I no longer see only problems coming through my office doors. I now witness progress, resilience, and transformation.
        <div class="mt-2 pt-1 small text-uppercase" style="color: var(--primary-green);">— Chief Elijah Arita, Ekerubo Sub Location</div>
      </div>
      
      <p style="font-family: 'Lora', serif; line-height: 1.7; color: var(--text-gray);">Today, men are present in their homes. Cases of Sexual and Gender-Based Violence have significantly decreased. Reports of abandoned children are becoming rare. One beautiful cultural expression of this change is the phrase <span style="color: var(--primary-green); font-weight: 500;">"Mary Ochire"</span> Gusii for "Mary is coming" a community-wide code for accountability and mindfulness in parenting.</p>
      
      <div class="story-highlight">
        <p>Key Outcomes: Absentee fathers reduced, SGBV cases decreased, child abandonment rare, community accountability strengthened.</p>
      </div>
    </div>

    <!-- Closing Reflection -->
    <div class="story-card-simple" style="background: linear-gradient(135deg, var(--primary-light) 0%, #c8e6c9 100%); text-align: center;">
      <i class="fas fa-quote-left fa-2x" style="color: var(--primary-green); opacity: 0.5; margin-bottom: 1rem;"></i>
      <p style="font-family: 'Lora', serif; font-size: 1.2rem; color: var(--text-dark); max-width: 800px; margin: 0 auto; line-height: 1.6;">
        "When taking a break became the norm for struggling couples, it exposed fragile family structures and left children in uncertainty. Through MTM, we are building stronger, more resilient households, one family at a time."
      </p>
      <div style="width: 50px; height: 2px; background: var(--primary-green); margin: 1rem auto;"></div>
      <p class="fw-bold" style="color: var(--primary-green); margin: 0;">— Chief Elijah Arita, Ekerubo Sub Location</p>
    </div>

  </div>
</section>


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