<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS Nyanza - Peoples Empowerment for Sustainable Project</title>
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
<!-- ================= PESP HERO SECTION ================= -->
<section class="pesp-hero-section">
    <div class="pesp-hero-container">
        
        <!-- Hero Background Image -->
        <div class="pesp-hero-image-wrapper">
            <img src="img/3.jpg" alt="Peoples Empowerment for Sustainability Project" class="pesp-hero-image">
            <div class="pesp-hero-overlay"></div>
        </div>
        
        <!-- Hero Content - Left Aligned -->
        <div class="pesp-hero-content">
            <span class="pesp-hero-badge">Empowering Communities</span>
            <h1 class="pesp-hero-title">Peoples Empowerment for Sustainability Project</h1>
            <div class="pesp-hero-divider"></div>
            <p class="pesp-hero-description">
                Building resilient communities through sustainable livelihoods, youth empowerment, and climate-smart agriculture across Western Kenya.
            </p>
            <div class="pesp-hero-buttons">
                <a href="About_Us" class="pesp-btn-primary">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="Contact" class="pesp-btn-secondary">
                    <i class="bi bi-chat-dots me-2"></i> Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="pesp-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="pesp-scroll-line">
                <div class="pesp-scroll-dot"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
/* ===== PESP HERO SECTION ===== */
.pesp-hero-section {
    position: relative;
    width: 100%;
    height: 70vh;
    min-height: 500px;
    max-height: 650px;
    overflow: hidden;
    background: #1a2b3c;
}

.pesp-hero-container {
    position: relative;
    width: 100%;
    height: 100%;
}

/* Hero Image - Fully Visible */
.pesp-hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.pesp-hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 8s ease;
    display: block;
}

.pesp-hero-section:hover .pesp-hero-image {
    transform: scale(1.05);
}

.pesp-hero-overlay {
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

/* Hero Content - Left Aligned */
.pesp-hero-content {
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

.pesp-hero-badge {
    display: inline-block;
    background: rgba(46, 125, 50, 0.85);
    color: white;
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
    backdrop-filter: blur(10px);
}

.pesp-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.1;
    color: #ffffff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
}

.pesp-hero-divider {
    width: 50px;
    height: 3px;
    background: #2ecc71;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

.pesp-hero-description {
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 1.5rem;
    opacity: 0.9;
    max-width: 90%;
    line-height: 1.6;
    color: #ffffff;
}

/* Hero Buttons - Left Aligned */
.pesp-hero-buttons {
    display: flex;
    justify-content: flex-start;
    gap: 1rem;
    flex-wrap: wrap;
}

.pesp-btn-primary {
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

.pesp-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.35);
    color: white;
}

.pesp-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.pesp-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.pesp-btn-secondary {
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

.pesp-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
    color: white;
}

/* Scroll Indicator */
.pesp-scroll-indicator {
    position: absolute;
    bottom: 25px;
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

.pesp-scroll-indicator span {
    font-size: 0.6rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}

.pesp-scroll-line {
    width: 1px;
    height: 25px;
    background: rgba(255, 255, 255, 0.15);
    position: relative;
}

.pesp-scroll-dot {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 3px;
    background: white;
    border-radius: 50%;
    animation: pespScrollDown 1.5s ease-in-out infinite;
}

@keyframes pespScrollDown {
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
    .pesp-hero-content {
        left: 8%;
        width: 60%;
    }
    
    .pesp-hero-title {
        font-size: 2.6rem;
    }
}

@media (max-width: 992px) {
    .pesp-hero-content {
        left: 5%;
        width: 65%;
    }
    
    .pesp-hero-title {
        font-size: 2.2rem;
    }
    
    .pesp-hero-description {
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .pesp-hero-section {
        height: 55vh;
        min-height: 400px;
        max-height: 500px;
    }
    
    .pesp-hero-content {
        left: 5%;
        width: 80%;
    }
    
    .pesp-hero-title {
        font-size: 1.8rem;
    }
    
    .pesp-hero-description {
        font-size: 0.85rem;
        max-width: 100%;
    }
    
    .pesp-btn-primary,
    .pesp-btn-secondary {
        padding: 8px 20px;
        font-size: 0.75rem;
    }
    
    .pesp-hero-badge {
        font-size: 0.6rem;
        padding: 4px 14px;
    }
}

@media (max-width: 576px) {
    .pesp-hero-section {
        height: 50vh;
        min-height: 350px;
        max-height: 420px;
    }
    
    .pesp-hero-content {
        left: 4%;
        width: 92%;
        padding: 0 10px;
    }
    
    .pesp-hero-title {
        font-size: 1.5rem;
    }
    
    .pesp-hero-description {
        font-size: 0.8rem;
    }
    
    .pesp-hero-buttons {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .pesp-btn-primary,
    .pesp-btn-secondary {
        padding: 7px 18px;
        font-size: 0.7rem;
        width: 100%;
        max-width: 200px;
        justify-content: center;
    }
    
    .pesp-hero-badge {
        font-size: 0.55rem;
        padding: 4px 12px;
    }
    
    .pesp-scroll-indicator {
        bottom: 12px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ================= PESP HERO END ================= -->
<!-- ======================= PESP INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="section-badge-pesp">Project Overview</span>
            <h2 class="section-title-pesp">About the <span style="color: hsl(140, 82%, 37%);">PESP Project</span></h2>
            <div class="title-divider-pesp"></div>
            
            <p class="pesp-description">
                The <strong>People's Empowerment and Sustainability Project (PESP)</strong> implemented by ADS Nyanza aims to improve sustainable livelihoods and strengthen the climate resilience of poor communities in Western Kenya. The project seeks to build community capacity for resilience and self-reliance by promoting sustainable food security, environmental management, household economic strengthening, and empowering citizens to claim their rights.
            </p>
            
            <p class="pesp-description">
                Through this holistic approach, PESP contributes to the creation of empowered, climate-smart, and self-sufficient communities. The project focuses on educating households about climate change adaptation and mitigation measures to promote sustainable agricultural practices. This includes promoting crop diversification, the use of drought-tolerant crops, and effective soil and water management techniques such as irrigation.
            </p>
            
            <p class="pesp-description">
                By implementing these strategies, families can enhance their resilience to climate change impacts and secure their livelihoods. In addition, we support youth in generating income through innovative agri-value chain initiatives. By fostering creativity and entrepreneurship in agriculture, we create new economic opportunities for young people.
            </p>
            
            <div class="pesp-highlight-box">
                <i class="bi bi-bullseye"></i>
                <div>
                    <strong>Our Goal:</strong> To build a more resilient, economically vibrant, and equitable community by empowering citizens to claim their rights from local governments and other duty bearers, ensuring they receive the support and services they deserve.
                </div>
            </div>
            
            <div class="pesp-cta-group">
                <a href="#" class="pesp-btn-primary">
                    <i class="bi bi-hand-heart me-2"></i> Get Involved
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#" class="pesp-btn-outline">
                    <i class="bi bi-info-circle me-2"></i> Learn More
                </a>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="pesp-image-wrapper">
                <img 
                    src="img/pesp_1.jpg" 
                    alt="PESP Project" 
                    class="pesp-image"
                    onerror="this.src='https://placehold.co/600x400/2e7d32/white?text=PESP+Project'"
                >
                
            </div>
        </div>
    </div>
</section>

<style>
/* ===== PESP SECTION STYLES ===== */

/* Badge */
.section-badge-pesp {
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
.section-title-pesp {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

/* Divider */
.title-divider-pesp {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    margin: 0 0 1rem 0;
    border-radius: 3px;
}

/* Description */
.pesp-description {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

/* Highlight Box */
.pesp-highlight-box {
    background: rgba(46, 125, 50, 0.05);
    border-left: 4px solid #2e7d32;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin: 1.25rem 0;
}

.pesp-highlight-box i {
    color: #2e7d32;
    font-size: 1.2rem;
    margin-top: 0.1rem;
}

.pesp-highlight-box div {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
}

/* CTA Group */
.pesp-cta-group {
    display: flex;
    gap: 12px;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.pesp-btn-primary {
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

.pesp-btn-primary:hover {
    background: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.25);
    color: white;
}

.pesp-btn-primary i:last-child {
    transition: transform 0.3s ease;
}

.pesp-btn-primary:hover i:last-child {
    transform: translateX(5px);
}

.pesp-btn-outline {
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

.pesp-btn-outline:hover {
    background: #2e7d32;
    color: white;
    transform: translateY(-2px);
}

/* ===== IMAGE WRAPPER ===== */
.pesp-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
}

.pesp-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}

.pesp-image-wrapper:hover .pesp-image {
    transform: scale(1.02);
}

.pesp-image-badge {
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
    .section-title-pesp {
        font-size: 2rem;
    }
    
    .pesp-image {
        height: 350px;
        margin-top: 1.5rem;
    }
}

@media (max-width: 768px) {
    .section-title-pesp {
        font-size: 1.6rem;
    }
    
    .pesp-description {
        font-size: 0.9rem;
    }
    
    .pesp-image {
        height: 280px;
    }
}

@media (max-width: 576px) {
    .section-title-pesp {
        font-size: 1.3rem;
    }
    
    .pesp-image {
        height: 220px;
    }
    
    .pesp-image-badge {
        font-size: 0.65rem;
        padding: 5px 12px;
        top: 12px;
        right: 12px;
    }
    
    .pesp-highlight-box {
        padding: 0.75rem 1rem;
    }
    
    .pesp-highlight-box div {
        font-size: 0.85rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= PESP INTRO END ======================= -->

<!-- ======================= PROJECT GOAL & OBJECTIVES ======================= -->
<section class="container py-5">
    <!-- Project Goal -->
    <div class="text-center mb-5">
        <span class="section-badge-pesp">Our Goal</span>
        <h2 class="section-title-pesp" style="text-align: center;">Project <span style="color: hsl(140, 82%, 37%);">Goal</span></h2>
        <div class="title-divider-pesp center"></div>
        <p class="goal-text">
            Contribute to improved sustainable livelihoods of poor communities in <strong>Siaya</strong> and <strong>Kisumu Counties</strong> in Western Kenya.
        </p>
    </div>

    <!-- Objectives Header -->
    <div class="text-center mb-4">
        <span class="section-badge-pesp">Objectives</span>
        <h3 class="objectives-title">Our <span style="color: hsl(140, 82%, 37%);">Project Objectives</span></h3>
        <div class="title-divider-pesp center"></div>
    </div>

    <!-- Objectives Cards -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-seedling"></i>
                </div>
                <h5>Improved Income & Food Security</h5>
                <p>Strengthening household income through sustainable agricultural practices, crop diversification, and improved food systems.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-person-workspace"></i>
                </div>
                <h5>Sustainable Youth Livelihoods</h5>
                <p>Empowering youth through innovative agri-value chain initiatives and entrepreneurship for long-term economic resilience.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="objective-card">
                <div class="objective-icon">
                    <i class="bi bi-handshake"></i>
                </div>
                <h5>Citizen Empowerment & Rights</h5>
                <p>Enabling communities to claim their rights and engage duty bearers for equitable access to essential services.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== PESP GOAL & OBJECTIVES STYLES ===== */

/* Badge */
.section-badge-pesp {
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
.section-title-pesp {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.objectives-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Divider */
.title-divider-pesp {
    width: 60px;
    height: 3px;
    background: #2e7d32;
    border-radius: 3px;
}

.title-divider-pesp.center {
    margin: 0.5rem auto 1rem auto;
}

/* Goal Text */
.goal-text {
    font-size: 1.2rem;
    color: #444;
    max-width: 750px;
    margin: 0 auto;
    line-height: 1.7;
    font-family: 'Georgia', serif;
}

/* ===== OBJECTIVE CARDS ===== */
.objective-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid #eef2f6;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    height: 100%;
}

.objective-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(46, 125, 50, 0.08);
    border-color: rgba(46, 125, 50, 0.2);
}

.objective-icon {
    width: 70px;
    height: 70px;
    background: rgba(46, 125, 50, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem auto;
    transition: all 0.3s ease;
}

.objective-card:hover .objective-icon {
    background: #2e7d32;
}

.objective-icon i {
    font-size: 1.8rem;
    color: #2e7d32;
    transition: all 0.3s ease;
}

.objective-card:hover .objective-icon i {
    color: white;
    transform: scale(1.1);
}

.objective-card h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-bottom: 0.75rem;
    line-height: 1.4;
}

.objective-card h5 span {
    color: #2e7d32;
}

.objective-card p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .section-title-pesp {
        font-size: 2rem;
    }
    
    .objectives-title {
        font-size: 1.6rem;
    }
    
    .goal-text {
        font-size: 1rem;
        padding: 0 10px;
    }
    
    .objective-card {
        padding: 1.5rem 1.25rem;
    }
    
    .objective-icon {
        width: 60px;
        height: 60px;
    }
    
    .objective-icon i {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    .section-title-pesp {
        font-size: 1.6rem;
    }
    
    .objectives-title {
        font-size: 1.3rem;
    }
    
    .goal-text {
        font-size: 0.95rem;
    }
    
    .objective-card {
        padding: 1.25rem 1rem;
    }
    
    .objective-card h5 {
        font-size: 1rem;
    }
    
    .objective-card p {
        font-size: 0.8rem;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ======================= PROJECT GOAL & OBJECTIVES END ======================= -->

<!-- ======================= WHERE WE WORK ======================= -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-badge-where">Our Footprint</span>
            <h2 class="section-title-where">Where <span style="color: hsl(140, 82%, 37%);">We Work</span></h2>
            <div class="title-divider-where center"></div>
            <p class="section-desc-where">
                The PESP Project by <strong>ADS Nyanza</strong> operates in <strong>Kisumu</strong>, <strong>Siaya</strong>, and <strong>Migori Counties</strong> — key regions in Western Kenya where we promote climate-smart agriculture, youth empowerment, and resilient livelihoods.
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63838.52902491137!2d34.6694!3d-0.0917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa4b0403f36a9%3A0x2a3c2d7d24e2e3b!2sKisumu%20County!5e0!3m2!1sen!2ske!4v1762245015586!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Promoting climate-smart agriculture and resilient livelihoods</span>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510696.4981332249!2d33.92757392256632!3d-0.056336631437746705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d553f53e78e3af%3A0x2e2e93eed67964ec!2sSiaya!5e0!3m2!1sen!2ske!4v1762245358976!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Enhancing climate resilience and sustainable livelihoods</span>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510616.0449127028!2d34.001140054248204!3d-1.0185886139927378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d4ac6f3c232e43%3A0xdda9ed43b855e532!2sMigori%20County!5e0!3m2!1sen!2ske!4v1762245428864!5m2!1sen!2ske" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="location-footer">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Building sustainable livelihoods and climate resilience</span>
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
     PESP IMPACT STORIES - LAST IMAGE SMALL & LEFT
============================= -->
<section class="py-5 bg-white" id="pesp-full-stories" style="color: #1a1a1a; max-width: 1200px; margin: auto;">
    <div class="container">
        
        <!-- Newspaper Masthead -->
        <div class="text-center mb-5 pb-3" style="border-bottom: 3px double #2e7d32;">
            <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                <span style="font-family: 'Courier New', monospace; font-size: 0.7rem; letter-spacing: 3px; color: #2e7d32;">✦ EST. 1997 ✦</span>
            </div>
            <h5 class="fw-bold text-uppercase mb-1" style="color: #2e7d32; font-family: 'Courier New', monospace; letter-spacing: 4px; font-size: 0.8rem;">
                Livelihood & Economic Empowerment
            </h5>
            <h1 class="display-4 fw-bold mt-2" style="font-family: 'Playfair Display', serif; color: #1a1a1a; letter-spacing: -1px;">
                Human Interest: <span style="color: #2e7d32;">Transforming Families</span>
            </h1>
            <div class="d-flex justify-content-center align-items-center gap-3 mt-2">
                <div style="width: 80px; height: 2px; background: #2e7d32;"></div>
                <i class="bi bi-newspaper" style="color: #2e7d32; font-size: 1.5rem;"></i>
                <div style="width: 80px; height: 2px; background: #2e7d32;"></div>
            </div>
            <p class="text-muted mt-2" style="font-family: 'Georgia', serif; font-style: italic; font-size: 1rem;">
                Documenting the PESP project impact across the Nyanza Region
            </p>
            <div class="d-flex justify-content-center gap-4 mt-2 flex-wrap">
                <small style="font-family: 'Courier New', monospace; color: #666;">📍 NYANZA REGION</small>
                <small style="font-family: 'Courier New', monospace; color: #666;">📅 2025 EDITION</small>
                <small style="font-family: 'Courier New', monospace; color: #666;">✍️ IMPACT REPORT</small>
            </div>
        </div>

        <!-- STORY 1: Jane Ochieng -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 order-2 order-lg-1">
                        <div class="story-hero-image">
                            <img src="img/pesp-jane.jpg" alt="Jane Ochieng" onerror="this.src='https://placehold.co/400x400/2e7d32/white?text=Jane+Ochieng'">
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Success Profile</span>
                                <span class="info-value">Jane Ochieng</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Role</span>
                                <span class="info-value">Farmer & Entrepreneur</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Omia Malo, Siaya</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Achievement</span>
                                <span class="info-value success">100% Fees Paid</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">Siaya Mother Turns Struggles Into Success</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                        </div>
                        <p class="story-intro">
                            <span class="drop-cap">J</span>ane Ochieng, a 39-year-old farmer and single mother of three from Omia Malo Sublocation, knows what it means to struggle and to rise. For years, she faced the harsh realities of raising a family with a limited income and no stable support system.
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    School fees were a constant worry, and even basic needs felt out of reach. As a single mother, Jane often found herself torn between putting food on the table and ensuring her children remained in school. The burden of poverty weighed heavily on her shoulders, and there were many nights she lay awake wondering how she would provide for her family.
                </p>
                
                <p>
                    Everything changed when Jane joined the Rariw Youth Group. Through the support of the project, she was not only trained in sustainable farming practices but also received seeds to kick-start her agricultural journey. The training opened her eyes to the potential of the land she had always possessed but never fully utilized.
                </p>

                <div class="story-article-image">
                    <img src="img/pesp1.jpg" alt="Jane's Farm" onerror="this.src='https://placehold.co/800x400/2e7d32/white?text=Jane+Ochieng+Story'">
                    <span class="image-caption">Jane Ochieng in her thriving farm — a testament to hard work and determination</span>
                </div>

                <p>
                    Today, Jane is a thriving farmer whose hard work is bearing fruit literally and figuratively. Her children are back in school, and for the first time in years, she can comfortably pay their fees and buy them the books they need. She no longer relies on handouts or struggles to make ends meet.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>Joining the group was the turning point for me. I found knowledge, support, and the confidence to start something of my own. Now I can take care of my children without worry.</p>
                    <footer>— Jane Ochieng</footer>
                </blockquote>
            </div>
        </div>

        <!-- STORY 2: Rarieda Muslim SwE Group -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 order-2 order-lg-1">
                        <div class="story-hero-image">
                            <img src="img/pesp2.jpg" alt="Rarieda Muslim SwE Group" onerror="this.src='https://placehold.co/400x400/2e7d32/white?text=Rarieda+Group'">
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Group Profile</span>
                                <span class="info-value">Rarieda Muslim SwE</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Ndwara, Mahaya</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Members</span>
                                <span class="info-value success">95 Active</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">From Informal Merry-Go-Round to Climate-Resilient Enterprise</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                        </div>
                        <p class="story-intro">
                            <span class="drop-cap">T</span>he Rarieda Muslim Savings with Education (SwE) Group began in 2013 as a simple merry-go-round with 30 members. At the time, the group operated informally, with rules being made up as issues arose, and trust among members was often strained.
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    Defaulting was common, and with no systems in place for transparency, trust among members was often strained. "Before SwE, we were operating blindly," recalls Rehema Achieng, a founding member. "We didn't keep records, and no one understood accountability."
                </p>

                <div class="story-article-image">
                    <img src="img/pesp2.jpg" alt="Group Meeting" onerror="this.src='https://placehold.co/800x400/2e7d32/white?text=Group+Meeting'">
                    <span class="image-caption">Rarieda Muslim SwE Group members during a training session</span>
                </div>

                <p>
                    A turning point came when ADS-Nyanza introduced the SwE model. Members received comprehensive training on record keeping, leadership, and financial planning. The group launched a tent hire business, a sorghum grinding initiative, and later a poultry project under the Climate Resilience component.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>The poultry project has been a game changer. We sell eggs consistently and have introduced a rotation system so all members gain experience.</p>
                    <footer>— Rahma Musa, Member</footer>
                </blockquote>
            </div>
        </div>

        <!-- STORY 3: Charles Oduogo - Small Image Left -->
        <div class="story-block">
            <div class="story-hero">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 order-2 order-lg-1">
                        <div class="story-hero-image story-hero-image-small">
                            <img src="img/pesp-charles.jpg" alt="Charles Oduogo" onerror="this.src='https://placehold.co/300x350/2e7d32/white?text=Charles+Oduogo'">
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2">
                        <div class="story-info-bar">
                            <div class="story-info-item">
                                <span class="info-label">Mentor Spotlight</span>
                                <span class="info-value">Charles Oduogo</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Location</span>
                                <span class="info-value">Kajulu Koker, Kisumu</span>
                            </div>
                            <div class="story-info-item">
                                <span class="info-label">Venture</span>
                                <span class="info-value success">Poultry & Farming</span>
                            </div>
                        </div>
                        <h3 class="story-article-title">Beyond the Boda Boda: The Rise of a Mentor Farmer</h3>
                        <div class="story-article-meta">
                            <span><i class="bi bi-person"></i> By ADS Nyanza</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                        </div>
                        <p class="story-intro">
                            <span class="drop-cap">A</span>t just 34 years old, Charles Oduogo has transformed his life from a struggling orphan into a respected farmer and community mentor. Passionate about agriculture but lacking knowledge, he initially relied on traditional methods that yielded little, forcing him to depend on boda boda riding for survival.
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-full-text">
                <p>
                    Orphaned at a young age, Charles grew up with a deep desire to make something of himself. He inherited a small piece of land from his father, but without proper agricultural knowledge, he struggled to make it productive. For years, he relied on boda boda riding as his primary source of income, but the work was unpredictable, and the earnings were barely enough to meet his basic needs.
                </p>

                <p>
                    "I used to wake up early to ferry passengers, but deep down I knew I wanted to do something more meaningful with the land my father left me," he recalls. "I wanted to honor his memory by making the land productive, but I didn't know how."
                </p>

                <div class="story-article-image">
                    <img src="img/pesp_charles-farm.png" alt="Charles' Farm" onerror="this.src='https://placehold.co/800x400/2e7d32/white?text=Charles+Farm'">
                    <span class="image-caption">Charles Oduogo's thriving farm — a model for sustainable agriculture</span>
                </div>

                <p>
                    This changed when he joined the Tunaweza group. After comprehensive training by ADS Nyanza, Charles began using techniques like crop diversification, organic composting, and intercropping. These techniques transformed his land from a barren plot into a productive farm.
                </p>

                <p>
                    Soon, his land was producing various vegetables for profit. When the project provided hens, Charles hosted them, and the flock quickly doubled. He later started his own venture with 30 Sasso breed chicks. With the income, he set up a posho mill business for his wife and invested in irrigation.
                </p>

                <p>
                    Today, his farm is a learning space where other farmers come to learn sustainable agricultural practices. He has become a mentor, inspiring others in his community to embrace farming as a viable and dignified livelihood.
                </p>

                <blockquote class="story-quote">
                    <i class="bi bi-quote"></i>
                    <p>I used to be seen as just another rider, but now I'm proud to be called a farmer. Poultry changed everything for me. I never knew this venture could be so lucrative.</p>
                    <footer>— Charles Oduogo</footer>
                </blockquote>
            </div>
        </div>

    </div>
</section>

<style>
/* ===== NEWSPAPER STYLES ===== */

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

/* Hero Image - Standard */
.story-hero-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
    min-height: 350px;
}

.story-hero-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.story-hero-image:hover img {
    transform: scale(1.02);
}

/* Small Image for Last Story */
.story-hero-image-small {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
    min-height: 280px;
    max-height: 320px;
}

.story-hero-image-small img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.story-hero-image-small:hover img {
    transform: scale(1.02);
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

/* Story Image */
.story-article-image {
    margin: 1.25rem 0;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #e0e4e0;
}

.story-article-image img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    display: block;
}

.image-caption {
    display: block;
    padding: 0.4rem 1rem;
    font-size: 0.75rem;
    color: #6c757d;
    font-style: italic;
    background: #f9fbf9;
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
    .story-article-title {
        font-size: 1.8rem;
    }
    
    .story-hero-image {
        min-height: 300px;
    }
    
    .story-hero-image-small {
        min-height: 250px;
        max-height: 300px;
    }
}

@media (max-width: 768px) {
    .story-hero-image {
        min-height: 250px;
        margin-top: 1rem;
    }
    
    .story-hero-image-small {
        min-height: 200px;
        max-height: 250px;
        margin-top: 1rem;
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
    
    .story-article-image img {
        height: 220px;
    }
}

@media (max-width: 576px) {
    .story-hero-image {
        min-height: 200px;
    }
    
    .story-hero-image-small {
        min-height: 180px;
        max-height: 220px;
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
    
    .story-article-image img {
        height: 180px;
    }
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ============================
     END OF PESP IMPACT STORIES
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