<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Integrated Climate Resilience Project</title>
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
<!-- ================= ICRP HERO SECTION ================= -->
<section class="icrp-hero-section">
    <div class="icrp-hero-container">
        
        <!-- Hero Background Image -->
        <div class="icrp-hero-image-wrapper">
            <img src="img/icrp7.jpg" alt="Integrated Climate Resilience Project" class="icrp-hero-image">
            <div class="icrp-hero-overlay"></div>
        </div>
        
        <!-- Hero Content - Left Aligned -->
        <div class="icrp-hero-content">
            <span class="icrp-hero-badge">Climate Action</span>
            <h5 class="icrp-hero-subtitle">Building Resilient Communities</h5>
            <h1 class="icrp-hero-title">Integrated Climate Resilience Project</h1>
            <div class="icrp-hero-divider"></div>
            <p class="icrp-hero-description">
                Empowering communities to adapt, thrive, and build sustainable futures in the face of climate change through innovative agricultural practices and environmental conservation.
            </p>
            <div class="icrp-hero-buttons">
                <a href="About_Us" class="icrp-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="contact" class="icrp-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="icrp-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="icrp-scroll-line">
                <div class="icrp-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== ICRP HERO SECTION - REDUCED HEIGHT ===== */
.icrp-hero-section {
    position: relative;
    width: 100%;
    height: 65vh;
    min-height: 420px;
    max-height: 550px;
    overflow: hidden;
    background: #1a2b3c;
}

.icrp-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* Hero Image */
.icrp-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.icrp-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 30%;
    transition: transform 8s ease;
}

.icrp-hero-section:hover .icrp-hero-image {
    transform: scale(1.05);
}

.icrp-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        rgba(26, 43, 60, 0.88) 0%, 
        rgba(26, 43, 60, 0.5) 50%, 
        rgba(46, 125, 50, 0.3) 100%
    );
}

/* Hero Content - Left Aligned */
.icrp-hero-content {
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
    text-align: left;
    color: white;
    z-index: 2;
    width: 55%;
    max-width: 650px;
    padding: 0 20px;
}

.icrp-hero-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.85);
    color: white;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
    backdrop-filter: blur(10px);
}

.icrp-hero-subtitle {
    font-size: 0.85rem;
    font-weight: 400;
    margin-bottom: 0.3rem;
    opacity: 0.85;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #ffffff;
}

.icrp-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 3.2rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
}

.icrp-hero-divider {
    width: 50px;
    height: 3px;
    background: #2ecc71;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

.icrp-hero-description {
    font-size: 0.95rem;
    font-weight: 400;
    margin-bottom: 1.5rem;
    opacity: 0.9;
    max-width: 90%;
    line-height: 1.6;
    color: #ffffff;
}

/* Hero Buttons - Left Aligned */
.icrp-hero-buttons {
    display: flex;
    justify-content: flex-start;
    gap: 1rem;
    flex-wrap: wrap;
}

.icrp-btn-primary {
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

.icrp-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.35);
    color: white;
}

.icrp-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.icrp-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.icrp-btn-secondary {
    display: inline-flex;
    align-items: center;
    background: transparent;
    color: white;
    padding: 10px 28px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.4);
}

.icrp-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator - Positioned */
.icrp-scroll-indicator {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: rgba(255, 255, 255, 0.5);
    z-index: 2;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
}

.icrp-scroll-indicator span {
    font-size: 0.6rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}

.icrp-scroll-line {
    width: 1px;
    height: 25px;
    background: rgba(255, 255, 255, 0.15);
    position: relative;
}

.icrp-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 3px;
    background: white;
    border-radius: 50%;
    animation: icrpScrollDown 1.5s ease-in-out infinite;
}

@keyframes icrpScrollDown {
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
@media (max-width: 1200px) {
    .icrp-hero-content {
        left: 8%;
        width: 60%;
    }
    
    .icrp-hero-title {
        font-size: 2.8rem;
    }
}

@media (max-width: 992px) {
    .icrp-hero-content {
        left: 5%;
        width: 65%;
    }
    
    .icrp-hero-title {
        font-size: 2.5rem;
    }
    
    .icrp-hero-description {
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .icrp-hero-section {
        height: 55vh;
        min-height: 380px;
        max-height: 480px;
    }
    
    .icrp-hero-content {
        left: 5%;
        width: 80%;
    }
    
    .icrp-hero-title {
        font-size: 2rem;
    }
    
    .icrp-hero-subtitle {
        font-size: 0.75rem;
    }
    
    .icrp-hero-description {
        font-size: 0.85rem;
        max-width: 100%;
    }
    
    .icrp-btn-primary,
    .icrp-btn-secondary {
        padding: 8px 20px;
        font-size: 0.75rem;
    }
}

@media (max-width: 576px) {
    .icrp-hero-section {
        height: 50vh;
        min-height: 340px;
        max-height: 420px;
    }
    
    .icrp-hero-content {
        left: 4%;
        width: 92%;
        padding: 0 10px;
    }
    
    .icrp-hero-title {
        font-size: 1.6rem;
    }
    
    .icrp-hero-description {
        font-size: 0.8rem;
    }
    
    .icrp-hero-buttons {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .icrp-btn-primary,
    .icrp-btn-secondary {
        padding: 7px 18px;
        font-size: 0.7rem;
        width: 100%;
        max-width: 200px;
        justify-content: center;
    }
    
    .icrp-scroll-indicator {
        bottom: 12px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ================= ICRP HERO END ================= -->


<!-- ======================= INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-reach">Our Reach</span>
            <h2 class="section-title-reach">Empowering <span style="color: hsl(140, 82%, 37%);">Vulnerable Households</span></h2>
            <div class="title-divider-reach"></div>
            
            <p class="reach-description">
                We work to sensitize communities on the rights of widows and orphans, aiming to counteract retrogressive cultural practices and create opportunities to address their social needs. By raising awareness about their rights, we empower these vulnerable groups to demand social accountability and access essential services.
            </p>
            
            <p class="reach-description">
                We support financial inclusivity by facilitating the formation of Saving with Education (SWE)groups for vulnerable populations, providing capacity building in leadership, financial and business management, and rights awareness.
            </p>
            
            <p class="reach-description">
                Through these initiatives, we strive to create a supportive and empowering environment for widows and orphans, fostering resilience and self-sufficiency. These groups support members in establishing kitchen gardens, identifying orphans in need, and ensuring school fees are paid.
            </p>
            
            <div class="reach-highlight-box">
                <i class="bi bi-bullseye"></i>
                <div>
                    <strong>Our Goal:</strong> Improved Livelihood of Vulnerable Households.
                </div>
            </div>
            
            <div class="reach-cta-group">
                <a href="#" class="reach-btn-primary">
                    <i class="bi bi-hand-heart me-2"></i> Support Our Work
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#" class="reach-btn-outline">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                </a>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="reach-image-wrapper">
                <img 
                    src="img/icrp1.jpg" 
                    alt="Empowering Widows and Orphans" 
                    class="reach-image"
                    onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Empowering+Widows+%26+Orphans'"
                >
                
            </div>
        </div>
    </div>
</section>

<style>
/* ===== REACH SECTION STYLES ===== */

/* Badge */
.section-badge-reach {
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
.section-title-reach {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

/* Divider */
.title-divider-reach {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

/* Description */
.reach-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

/* Highlight Box */
.reach-highlight-box {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin: 1.25rem 0;
}

.reach-highlight-box i {
    color: #2e7d32;
    font-size: 1.2rem;
    margin-top: 0.1rem;
}

.reach-highlight-box div {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
}

/* CTA Group */
.reach-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.reach-btn-primary {
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

.reach-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.reach-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.reach-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.reach-btn-outline {
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

.reach-btn-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* ===== IMAGE WRAPPER ===== */
.reach-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.reach-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}

.reach-image-wrapper:hover .reach-image {
    transform: scale(1.02);
}

/* Image Badge */
.reach-image-badge {
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
    z-index: 2;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .section-title-reach {
        font-size: 2rem;
    }
    
    .reach-image {
        height: 350px;
        margin-top: 1.5rem;
    }
}

@media (max-width: 768px) {
    .section-title-reach {
        font-size: 1.6rem;
    }
    
    .reach-description {
        font-size: 0.9rem;
    }
    
    .reach-image {
        height: 280px;
    }
}

@media (max-width: 576px) {
    .section-title-reach {
        font-size: 1.3rem;
    }
    
    .reach-image {
        height: 220px;
    }
    
    .reach-image-badge {
        font-size: 0.65rem;
        padding: 5px 12px;
        top: 12px;
        right: 12px;
    }
    
    .reach-highlight-box {
        padding: 0.75rem 1rem;
    }
    
    .reach-highlight-box div {
        font-size: 0.85rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= INTRO & HIGHLIGHTS END ======================= -->





 



<!-- ======================= SAVING WITH EDUCATION (SWE) IMPACT ======================= -->
<section class="container py-5" data-aos="fade-up">
  <div class="text-center mb-4">
    <h3 class="fw-bold text-success mb-3">Our Impact Through Saving with Education (SWE)</h3>
    <p class="text-muted">
      Through the PESP Project, ADS Nyanza promotes household resilience and economic empowerment 
      by forming Saving with Education (SwE) groups, supporting sustainable farming, 
      and improving nutrition through kitchen gardens.
    </p>
  </div>

  <div class="row text-center g-4">
    <div class="col-6 col-md-3">
      <div class="p-3">
        <h4 class="fw-bold" style="color: hsl(140, 82%, 37%);">418+</h4>
        <p class="small text-muted">SwE groups formed across target counties</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="p-3">
        <h4 class="fw-bold" style="color: hsl(140, 82%, 37%);">5,200+</h4>
        <p class="small text-muted">Households engaged in savings and education</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="p-3">
        <h4 class="fw-bold" style="color: hsl(140, 82%, 37%);">1,280+</h4>
        <p class="small text-muted">Kitchen gardens established for nutrition</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="p-3">
        <h4 class="fw-bold" style="color: hsl(140, 82%, 37%);">100%</h4>
        <p class="small text-muted">Community-led sustainability through local partnerships</p>
      </div>
    </div>
</div>
  </div>
</section>



<!-- ======================= WHERE WE WORK ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-badge-where">Our Footprint</span>
            <h2 class="section-title-where">Where <span style="color: hsl(140, 82%, 37%);">We Work</span></h2>
            <div class="title-divider-where center"></div>
            <p class="section-desc-where">
                The PESP Project by ADS Nyanza operates in <strong>Homabay, Kisumu, Siaya, Migori, and Nyamira Counties</strong> — key regions in Western Kenya where we promote climate-smart agriculture, youth empowerment, and resilient livelihoods.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- Kisumu County -->
            <div class="col-lg-4 col-md-6">
                <div class="location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Kisumu County</h4>
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
                        <span>Promoting climate-smart agriculture and youth empowerment</span>
                    </div>
                </div>
            </div>

            <!-- Siaya County -->
            <div class="col-lg-4 col-md-6">
                <div class="location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #198754, #157347);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Siaya County</h4>
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
                        <span>Building resilient livelihoods and sustainable agriculture</span>
                    </div>
                </div>
            </div>

            <!-- Homabay County -->
            <div class="col-lg-4 col-md-6">
                <div class="location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #dc3545, #b02a37);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Homabay County</h4>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510672.9685457397!2d34.1443133673463!3d-0.552880599531242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b2e0eec3fcb9b%3A0x35dde129cc9b103f!2sHoma%20Bay%20County!5e0!3m2!1sen!2ske!4v1762173300511!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Advancing climate resilience and food security</span>
                    </div>
                </div>
            </div>

            <!-- Migori County -->
            <div class="col-lg-4 col-md-6">
                <div class="location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #6f42c1, #5a32a3);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Migori County</h4>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021232.3714426003!2d33.1477172816543!3d-1.0176995665053605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d4ac6f3c232e43%3A0xdda9ed43b855e532!2sMigori%20County!5e0!3m2!1sen!2ske!4v1762245428864!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Empowering communities through sustainable development</span>
                    </div>
                </div>
            </div>

            <!-- Nyamira County -->
            <div class="col-lg-4 col-md-6">
                <div class="location-card">
                    <div class="location-header" style="background: linear-gradient(135deg, #fd7e14, #e06b0a);">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4>Nyamira County</h4>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510663.7680906336!2d34.611137669825254!3d-0.6511235802221003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b16d82e769fc3%3A0x256c2064c6e24d31!2sNyamira%20County!5e0!3m2!1sen!2ske!4v1762249416507!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Strengthening community resilience and livelihoods</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ===== WHERE WE WORK STYLES ===== */

/* Badge */
.section-badge-where {
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
.section-title-where {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Divider */
.title-divider-where {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
}

.title-divider-where.center {
    margin: 0.5rem auto 1rem auto;
}

/* Description */
.section-desc-where {
    color: #6c757d;
    max-width: 750px;
    margin: 0 auto;
    line-height: 1.7;
    font-size: 1rem;
}

/* ===== LOCATION CARD ===== */
.location-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    border: 1px solid #eef2f6;
    height: 100%;
    transition: all 0.3s ease;
}

.location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
}

.location-header {
    padding: 0.75rem 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: white;
}

.location-header i {
    font-size: 1.1rem;
}

.location-header h4 {
    font-size: 1rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

.location-map {
    height: 280px;
    overflow: hidden;
}

.location-map iframe {
    width: 100%;
    height: 100%;
}

.location-footer {
    padding: 0.75rem 1.25rem;
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    background: #f8f9fa;
    border-top: 1px solid #eef2f6;
    font-size: 0.75rem;
    color: #555;
    line-height: 1.5;
}

.location-footer i {
    color: #2e7d32;
    font-size: 0.8rem;
    margin-top: 0.1rem;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .section-title-where {
        font-size: 2rem;
    }
    
    .location-map {
        height: 240px;
    }
}

@media (max-width: 768px) {
    .section-title-where {
        font-size: 1.6rem;
    }
    
    .section-desc-where {
        font-size: 0.9rem;
    }
    
    .location-map {
        height: 220px;
    }
    
    .location-header {
        padding: 0.6rem 1rem;
    }
    
    .location-header h4 {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .section-title-where {
        font-size: 1.3rem;
    }
    
    .location-map {
        height: 200px;
    }
    
    .location-footer {
        font-size: 0.7rem;
        padding: 0.6rem 1rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= WHERE WE WORK END ======================= -->



<!-- ============================
     ICRP IMPACT STORIES - PROFESSIONAL LAYOUT
============================= -->
<section class="py-5 bg-white" id="success-stories" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">
        
        <!-- Newspaper Masthead -->
        <div class="text-center mb-5 pb-3" style="border-bottom: 3px double #2e7d32;">
            <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                <span style="font-family: 'Courier New', monospace; font-size: 0.7rem; letter-spacing: 3px; color: #2e7d32;">✦ EST. 1997 ✦</span>
            </div>
            <h5 class="fw-bold text-uppercase mb-1" style="color: #2e7d32; font-family: 'Courier New', monospace; letter-spacing: 4px; font-size: 0.8rem;">
                Resilience & Climate-Smart Agriculture
            </h5>
            <h1 class="display-4 fw-bold mt-2" style="font-family: 'Playfair Display', serif; color: #1a1a1a; letter-spacing: -1px;">
                ICRP Impact: <span style="color: #2e7d32;">Stories of Change</span>
            </h1>
            <div class="d-flex justify-content-center align-items-center gap-3 mt-2">
                <div style="width: 80px; height: 2px; background: #2e7d32;"></div>
                <i class="bi bi-newspaper" style="color: #2e7d32; font-size: 1.5rem;"></i>
                <div style="width: 80px; height: 2px; background: #2e7d32;"></div>
            </div>
            <p class="text-muted mt-2" style="font-family: 'Georgia', serif; font-style: italic; font-size: 1rem;">
                Documenting local transformations in nutrition, food security, and financial dignity
            </p>
            
        </div>

        <!-- STORY 1: Jacquiline -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Mentor Profile</span>
                                <span class="info-value">Jacquiline Rading</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Role</span>
                                <span class="info-value">Champion for Nutrition</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Kisumu West</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Dietary Score</span>
                                <span class="info-value success">Healthy</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">From Monocrops to a Living Pharmacy</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                        </div>
                        <p class="story-intro">
                            <span class="drop-cap">A</span> 31-year-old mother of four, Jacquiline Atieno Rading has become an essential pillar of health in her community. Before the intervention of the ICRP Project, her household was trapped in the cycle of "monocrop dependency."
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="story-hero-image">
                            <img src="img/crp5.jpeg" alt="Jacquiline's Garden" onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Jacquiline+Story'">
                        </div>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    Her family relied almost exclusively on a single staple crop—maize—a dietary monotony that left her young children vulnerable to recurrent illnesses, stunted growth, and frequent hospital visits that drained their meager income.
                </p>
                
                <p>
                    Jacquiline recalls those difficult days with a heavy heart. "There were weeks when we had nothing but maize meal on the table. My children would fall sick so often, and I knew deep down that it was because they were not getting the nutrients they needed. But I didn't know how to change it. I didn't have the knowledge, and I certainly didn't have the resources to buy the vegetables and fruits that I knew they needed." 
                </p>

                <p>
                    The transformation began when Jacquiline attended ADS Nyanza's smart farming and nutrition workshops. She was challenged to rethink her approach to land use, eventually viewing her small backyard not just as dirt, but as a "living pharmacy" and a "backyard supermarket." The training opened her eyes to the wealth of nutrients that could be grown right outside her door, using simple, sustainable techniques that required minimal investment.
                </p>

                <p>
                    She meticulously established a lush kitchen garden, specializing in nutrient-dense traditional vegetables such as <em>Dek</em> (Spider plant) and <em>Kandhira</em> (African nightshade). These indigenous vegetables, which she had once overlooked, turned out to be nutritional powerhouses—rich in iron, calcium, and vitamins essential for her children's growth and immune systems. By intercropping these with other staples, she ensured a year-round supply of fresh, organic food for her four children.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>After learning about the direct link between the soil and our health, I started a kitchen garden. The change was immediate. My children's health improved significantly, and those frequent, expensive hospital visits that used to drain our small income have finally become a thing of the past. Today, I not only feed my family healthy food, but I also sell surplus vegetables to my neighbors and earn some income.</p>
                    <footer>— Jacquiline Rading</footer>
                </blockquote>

                <p>
                    Today, Jacquiline's influence extends far beyond her own kitchen. As a Mentor Farmer, she hosts local demonstrations, teaching other mothers how to replicate her success. She has also become a fierce advocate for climate action, spearheading village-wide tree-planting initiatives. Her message is clear: the soil is not just dirt—it is the foundation of health, the source of livelihood, and the legacy we leave for our children. For Jacquiline, the goal is simple but profound: ensuring that the environment remains resilient enough to feed her children's children for generations to come.
                </p>
                
                <p>
                    "I want my children to know that we don't have to depend on anyone to feed ourselves. The land is here. It has always been here. All we need is the knowledge to work with it, not against it. ICRP gave me that knowledge, and I will never stop sharing it with every woman who will listen."
                </p>
            </div>
        </div>

        <!-- STORY 2: Dorothy -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Household Impact</span>
                                <span class="info-value">Stepping Stone Group</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Chulaimbo Village, Kisumu</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Key Crops</span>
                                <span class="info-value">Osuga, Boo, Sukuma Wiki</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Status</span>
                                <span class="info-value success">Food Secure</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">Securing the Table: Dorothy's Journey to Food Security</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 5 min read</span>
                        </div>
                        <p class="story-intro">
                            <span class="drop-cap">O</span>nce struggling to afford even two basic meals a day, 40-year-old Dorothy Adhiambo is the definition of a turnaround success. Living in Chulaimbo, she often felt the heavy weight of poverty.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="story-hero-image">
                            <img src="img/dorothy.jpeg" alt="Dorothy's Farm" onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=Dorothy+Story'">
                        </div>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    She often felt the heavy weight of poverty as she watched her neighbors harvest while her own plots yielded little. For years, her efforts were thwarted by a lack of modern agricultural knowledge and the unpredictable shifts in local weather patterns that left her crops parched and her hopes dashed.
                </p>
                
                <p>
                    "I remember the hunger so well. There were days when I had to choose between feeding my children and paying school fees. It was a choice no mother should ever have to make. I felt helpless, trapped in a cycle of poverty that seemed to have no end," Dorothy recalls, her voice carrying the weight of those difficult years.
                </p>

                <p>
                    The turning point arrived when she enrolled in ADS Nyanza's intensive training on climate-smart agriculture and poultry management. Dorothy discovered how to maximize even the smallest plots of land by utilizing organic manure, implementing water-saving irrigation techniques, and diversifying her crops. This knowledge turned her barren soil into a productive asset, and for the first time, she felt a sense of hope that had been absent for far too long.
                </p>

                <p>
                    Today, her farm is a vibrant, year-round patch of <em>Osuga</em>, <em>Boo</em> (Cowpea leaves), and <em>Sukuma Wiki</em>. By diversifying her production, she has eliminated the "hunger gap" that previously plagued her household. The integration of poultry has provided both a source of protein for her children and a steady stream of income from egg and bird sales. "I can now afford to buy maize flour, fish, and even some meat. My children are healthier, and they don't have to worry about where their next meal is coming from," she says with a smile.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>Food security is not just about having enough to eat. It is about dignity. It is about being able to provide for your children without begging. It is about knowing that you can weather any storm because you have the skills and the knowledge to feed yourself and your family. That is what ADS Nyanza gave me—not just seeds and tools, but the confidence to build a better future.</p>
                    <footer>— Dorothy Adhiambo</footer>
                </blockquote>

                <p>
                    Beyond her farm gates, Dorothy has emerged as a formidable leader within the Stepping Stone group. She has transformed from a quiet participant to a beacon of hygiene and nutrition education, mentoring her neighbors on the importance of balanced diets and clean water. With her surplus earnings, she now pays school fees promptly and has begun reinvesting in home improvements, proving that food security is the first step toward true economic independence.
                </p>
            </div>
        </div>

        <!-- STORY 3: Judith - Full Image -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Economic Profile</span>
                                <span class="info-value">Judith Anyango</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Rakwaro Sub-location</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Daily Income</span>
                                <span class="info-value success">KES 700</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Business Units</span>
                                <span class="info-value">Salon, Cassava, Cuttings</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">From Struggle to Stability: Judith Anyango's Enterprise</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                        </div>
                        <div class="article-highlight">
                            <i class="bi bi-quote"></i>
                            <p>"There were nights my children and I slept hungry—but today, we have food, we have hope, and we have our dignity back."</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="story-hero-image story-hero-image-full">
                            <img src="img/icrp_casava.jpg" alt="Judith's Cassava Farm" onerror="this.src='https://placehold.co/600x500/2e7d32/white?text=Judith+Story'">
                        </div>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    <span class="drop-cap">J</span>udith's transformation from a struggling mother to a community pillar began with a fundamental shift in financial literacy. In the quiet village of Rakwaro, opportunities were few until she encountered the Savings With Education (SwE) model facilitated by ADS Nyanza. Through this initiative, she learned the discipline of saving small amounts and the strategic use of credit to spark growth.
                </p>
                
                <p>
                    "Before SwE, I never knew how to save. Money came and went like water through my fingers. But when I joined the group, I learned that even small savings could add up to something meaningful," Judith shares.
                </p>

                <p>
                    After months of diligent saving, Judith accessed a KES 18,000 loan. Rather than spending it on immediate needs, she made a calculated move: she split the capital. A portion was used to modernize her salon business with better equipment, professional products, and a fresh coat of paint. The rest was invested in high-yield, drought-resistant cassava farming—a crop that could thrive even in the increasingly unpredictable weather conditions that had become the new normal in the region.
                </p>

                <p>
                    The results were swift and transformative. Today, Judith is no longer just a farmer; she is a rural entrepreneur earning a steady average of KES 700 daily. Her salon business has grown, attracting clients from neighboring villages who appreciate the quality of her services. Meanwhile, her cassava farm has expanded significantly, with improved cuttings being distributed to other farmers in the community.
                </p>

                <p>
                    "My children are no longer sent home for lack of school fees. They are consistently in class, building their own futures. I can now afford to buy them books, uniforms, and even a little extra to treat them from time to time. That is something I never thought I would be able to do," Judith says with visible pride.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>I used to think that my life would always be a struggle. I thought poverty was my destiny. But ADS Nyanza showed me that I have the power to change my story. Today, I am not just surviving—I am thriving. And I want every woman in Rakwaro to know that they can do the same. All it takes is the right knowledge, a little support, and the courage to take that first step.</p>
                    <footer>— Judith Anyango</footer>
                </blockquote>

                <p>
                    Judith's impact now radiates beyond her own gate. She has personally inspired and mentored the formation of 10 other community groups, teaching them the same financial principles that saved her. By distributing improved cassava cuttings to her neighbors, she is ensuring that her personal success translates into a thriving, food-secure village. She has become a living testament to the power of financial literacy, hard work, and community solidarity.
                </p>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== PROFESSIONAL STYLES ===== */

/* Story Block */
.story-block {
    margin-bottom: 3rem;
    padding-bottom: 3rem;
    border-bottom: 1px solid #e8ece8;
}

.story-block:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

/* ===== STORY HERO ===== */
.story-hero {
    margin-bottom: 1.5rem;
}

.story-hero-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.story-hero-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.story-hero-image:hover img {
    transform: scale(1.02);
}

/* Full Image - Last Story */
.story-hero-image-full {
    height: 100%;
    min-height: 380px;
}

.story-hero-image-full img {
    height: 100%;
    min-height: 380px;
    object-fit: cover;
}

/* Info Bar */
.story-info-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem 1.5rem;
    background: #f9fbf9;
    border: 1px solid #e0e4e0;
    border-radius: 8px;
    padding: 0.6rem 1rem;
    margin-bottom: 1rem;
}

.story-info-item {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.75rem;
}

.story-info-item .info-label {
    color: #888;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.6rem;
    letter-spacing: 0.5px;
}

.story-info-item .info-value {
    color: #333;
    font-weight: 500;
}

.story-info-item .info-value.success {
    color: #2e7d32;
    font-weight: 700;
}

/* Story Title */
.story-article-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 0.3rem;
    line-height: 1.2;
}

/* Meta */
.story-article-meta {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 0.75rem;
    font-size: 0.75rem;
    color: #888;
}

.story-article-meta i {
    margin-right: 4px;
}

/* Intro */
.story-intro {
    font-family: 'Georgia', serif;
    font-size: 1.05rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 0;
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

/* ===== FULL TEXT BELOW ===== */
.story-full-text {
    font-family: 'Georgia', serif;
    line-height: 1.8;
    font-size: 1rem;
    color: #333;
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e8ece8;
}

.story-full-text p {
    margin-bottom: 1rem;
}

/* Article Highlight */
.article-highlight {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 0.6rem 1rem;
    border-radius: 6px;
    margin-bottom: 0.75rem;
}

.article-highlight i {
    color: #2e7d32;
    font-size: 1.2rem;
    opacity: 0.5;
}

.article-highlight p {
    font-size: 1rem;
    color: #333;
    margin: 0;
    font-style: italic;
}

/* Story Quote */
.story-quote {
    font-family: 'Georgia', serif;
    font-style: italic;
    font-size: 1rem;
    border-left: 4px solid #2e7d32;
    padding: 0.75rem 1.25rem;
    margin: 1.25rem 0;
    background: #f9fbf9;
    border-radius: 0 8px 8px 0;
    color: #333;
}

.story-quote i {
    color: #2e7d32;
    font-size: 1.5rem;
    opacity: 0.3;
    display: block;
    margin-bottom: 0.25rem;
}

.story-quote p {
    margin-bottom: 0.25rem;
}

.story-quote footer {
    font-style: normal;
    font-weight: 600;
    color: #2e7d32;
    font-size: 0.8rem;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .story-hero-image img {
        height: 320px;
    }
    
    .story-hero-image-full {
        min-height: 300px;
    }
    
    .story-hero-image-full img {
        min-height: 300px;
    }
    
    .story-article-title {
        font-size: 1.8rem;
    }
}

@media (max-width: 768px) {
    .story-hero-image {
        margin-top: 1rem;
    }
    
    .story-hero-image img {
        height: 280px;
    }
    
    .story-hero-image-full {
        min-height: 250px;
    }
    
    .story-hero-image-full img {
        min-height: 250px;
    }
    
    .story-article-title {
        font-size: 1.4rem;
    }
    
    .drop-cap {
        font-size: 2.8rem;
    }
    
    .story-full-text {
        font-size: 0.9rem;
    }
    
    .story-info-bar {
        flex-direction: column;
        gap: 0.3rem;
        padding: 0.5rem 0.8rem;
    }
    
    .story-info-item {
        font-size: 0.7rem;
    }
    
    .story-block {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
    }
}

@media (max-width: 576px) {
    .story-hero-image img {
        height: 220px;
    }
    
    .story-hero-image-full {
        min-height: 200px;
    }
    
    .story-hero-image-full img {
        min-height: 200px;
    }
    
    .story-article-title {
        font-size: 1.2rem;
    }
    
    .story-full-text {
        font-size: 0.85rem;
    }
    
    .drop-cap {
        font-size: 2.2rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ============================
     END OF ICRP IMPACT STORIES
============================= -->



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