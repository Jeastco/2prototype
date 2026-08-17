<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/updated/">
    <meta charset="utf-8">
    <title>ADS NYANZA - Strengthening Early Childhood Development</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ADS Nyanza - Empowering Communities" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* ---------------- BASE FONT CONTROL ---------------- */
        :root {
            font-size: 16px;
        }

        html {
            font-size: 100%;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #1c1c1c;
            font-size: 1rem;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        .btn-primary {
            background-color: hsl(140, 82%, 37%);
            border-color: hsl(140, 82%, 37%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: hsl(140, 82%, 30%);
            border-color: hsl(140, 82%, 30%);
        }

        .btn-outline-light {
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: hsl(140, 82%, 37%);
        }

        /* ---------------- TOPBAR ---------------- */
        .topbar {
            background-color: #28A745;
            height: 45px;
            padding: 0 2rem;
        }

        .topbar small,
        .topbar a {
            color: #fff;
            font-size: 14px;
        }

        /* ---------------- NAVBAR ---------------- */
        .navbar {
            font-size: 15px; /* Reduced from 17px */
            font-weight: 500;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .navbar .nav-link {
            color: #091E3E !important;
            padding: 0.4rem 0.6rem !important; /* Reduced padding */
            white-space: nowrap;
            font-size: 0.95rem; /* Slightly smaller font */
        }

        .navbar .nav-link:hover {
            color: hsl(140, 82%, 37%) !important;
        }

        .navbar-brand img {
            height: 65px; /* Reduced from 70px */
            margin-right: 0.5rem;
        }

        /* Reduce spacing between navbar items */
        .navbar-nav.ms-auto {
            gap: 0.2rem !important; /* Minimal gap */
            flex-wrap: nowrap;
        }

        /* Style for Staff Portal link */
        .staff-portal-link {
            padding: 0.4rem 0.6rem !important;
            color: #091E3E !important;
            white-space: nowrap;
            font-size: 0.95rem;
            margin-left: 0.2rem !important;
        }

        .staff-portal-link:hover {
            color: hsl(140, 82%, 37%) !important;
        }

        /* Style for search button */
        .search-btn {
            padding: 0.4rem !important;
            margin-right: 0.2rem !important;
            font-size: 0.9rem;
        }

        @media (max-width: 1200px) {
            .navbar .nav-link {
                padding: 0.4rem 0.5rem !important;
                font-size: 0.9rem;
            }
            
            .staff-portal-link {
                font-size: 0.9rem;
                padding: 0.4rem 0.5rem !important;
            }
            
            .navbar-brand img {
                height: 60px;
            }
        }

        @media (max-width: 992px) {
            .navbar {
                font-size: 16px;
            }
            
            .navbar-nav.ms-auto {
                gap: 0 !important;
            }
            
            .navbar .nav-link {
                padding: 0.5rem 1rem !important;
            }
        }

        /* ---------------- MEGA MENU ---------------- */
        .mega-menu {
            width: 650px;
            max-width: 90vw;
            left: 50% !important;
            transform: translateX(-50%) translateY(10px);
            background-color: #fefefe;
            opacity: 0;
            transition: all 0.3s ease-out;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            padding: 1.5rem;
            z-index: 999;
            border: none;
        }

        .mega-dropdown.show .mega-menu {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        .mega-menu-heading {
            font-size: 1.2rem;
            font-weight: 700;
            color: #091E3E;
            border-bottom: 2px solid hsl(140, 82%, 37%);
            margin-bottom: 1rem;
        }

        .mega-menu-list a {
            display: block;
            padding: 8px 0;
            font-weight: 500;
            color: #333;
            transition: all 0.25s ease;
        }

        .mega-menu-list a:hover {
            color: hsl(140, 82%, 37%);
            padding-left: 10px;
            background-color: rgba(0, 123, 255, 0.05);
            border-radius: 5px;
        }

        /* Remove default blue highlight on click/focus */
        .mega-menu-list a:focus,
        .mega-menu-list a:active {
            background-color: transparent !important;
            outline: none !important;
            box-shadow: none !important;
        }

        /* Animate hover/focus with light green */
        .mega-menu-list a:hover,
        .mega-menu-list a:focus {
            background-color: rgba(72, 211, 129, 0.2);
            color: hsl(140, 82%, 37%);
            padding-left: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* ---------------- MOBILE MEGA MENU FIX ---------------- */
        @media (max-width: 992px) {
            .mega-menu .row {
                flex-direction: column;
                gap: 1rem;
            }

            .mega-menu .col-md-6 {
                flex: 1 1 100%;
                max-width: 100%;
            }

            .mega-menu {
                position: static !important;
                transform: none !important;
                opacity: 1 !important;
                width: 100% !important;
                padding: 1rem !important;
                box-shadow: none !important;
                border-radius: 0 !important;
            }

            .mega-menu-list a {
                font-size: 16px;
                padding: 10px 15px;
                color: #091E3E !important;
                opacity: 0;
                transform: translateX(-15px);
                transition: all 0.3s ease;
            }

            /* Hover/active effect for links */
            .mega-dropdown.show .mega-menu-list a {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ---------------- HERO SECTION ---------------- */
        .hero-section {
            width: 100%;
            height: 75vh;
            min-height: 500px;
            max-height: 800px;
            position: relative;
            overflow: hidden;
        }

        .hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: heroZoom 20s ease-in-out infinite;
        }

        @keyframes heroZoom {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }

            100% {
                transform: scale(1);
            }
        }

        .hero-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            color: #fff;
        }

        .hero-caption h5 {
            font-size: 1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1rem;
            animation: fadeDown 1.2s ease both;
        }

        .hero-caption h1 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            animation: fadeZoom 1s ease both 0.3s;
        }

        .hero-caption a {
            animation: fadeUp 1.3s ease both 0.8s;
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeZoom {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments for Hero */
        @media (min-width: 576px) {
            .hero-caption h1 {
                font-size: 2.5rem;
            }
        }

        @media (min-width: 768px) {
            .hero-caption h5 {
                font-size: 1.2rem;
                letter-spacing: 3px;
            }

            .hero-caption h1 {
                font-size: 3rem;
            }
        }

        @media (min-width: 992px) {
            .hero-caption h1 {
                font-size: 3.5rem;
            }
        }

        @media (min-width: 1200px) {
            .hero-caption h1 {
                font-size: 4rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 60vh;
                min-height: 400px;
            }

            .hero-caption h1 {
                font-size: 2rem;
            }

            .hero-caption h5 {
                font-size: 0.9rem;
                letter-spacing: 1px;
            }
        }

        /* Very small screens */
        @media (max-width: 400px) {
            .hero-caption h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- ================= SPINNER ================= -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>

    <!-- ================= TOPBAR ================= -->
    <div class="d-none d-lg-flex topbar align-items-center">
        <div class="container-fluid d-flex justify-content-between">
            <div>
                <small class="me-4"><i class="fa fa-map-marker-alt me-2"></i>ACK St. Peters Church Compound, Kisumu</small>
                <small class="me-4"><i class="fa fa-phone-alt me-2"></i>+254 726947044</small>
                <small><i class="fa fa-envelope me-2"></i>ads@ads-nyanza.org</small>
            </div>
            <div class="d-flex align-items-center">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/ADS_Nyanza">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61579377541927">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/ads-nyanza/">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square me-2 rounded-circle" href="https://www.instagram.com/adsnyanza/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="http://www.youtube.com/@ADS-NYANZA">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container-fluid">
            <a href="index" class="navbar-brand p-0">
                <img src="img/ads.png" alt="ADS-NYANZA Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0 align-items-center">
                    <li class="nav-item"><a href="index" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="About_Us" class="nav-link">About Us</a></li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Programs</a>
                        <div class="dropdown-menu mega-menu p-4">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading">Programs</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li><a href="ecd">Early Childhood Development</a></li>
                                        <li><a href="pesp">Peoples Empowerment Project</a></li>
                                        <li><a href="icrp">Integrated Climate Resilience</a></li>
                                        <li><a href="kaliedoscope">Kaleidoscope</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading">Programs</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li><a href="Global_Fund">Global Fund</a></li>
                                        <li><a href="wkpi">West Kenya Peace Initiative</a></li>
                                        <li><a href="emergency">Emergency Response</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item"><a href="events" class="nav-link">Our Events</a></li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Engage with Us</a>
                        <div class="dropdown-menu mega-menu p-4">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading">Media</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li><a href="gallery">Gallery</a></li>
                                        <li><a href="Our_Blog">Our Blog</a></li>
                                        <li><a href="publications">Publications</a></li>
                                        <li><a href="testimonials">Testimonials</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mega-menu-heading">Get Involved</h5>
                                    <ul class="list-unstyled mega-menu-list">
                                        <li><a href="donate">Donate</a></li>
                                        <li><a href="volunteer">Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item"><a href="careers" class="nav-link">Careers</a></li>
                    <li class="nav-item"><a href="tenders" class="nav-link">Tenders</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">Contact Us</a></li>
                    
                    <!-- Search button and Staff Portal in the same ul -->
                    <li class="nav-item d-flex align-items-center">
                        <button type="button" class="btn search-btn" data-bs-toggle="modal" data-bs-target="#searchModal" style="color:#091E3E;">
                            <i class="fa fa-search"></i>
                        </button>
                        <a href="https://ess.ads-nyanza.org/" class="staff-portal-link">Staff Portal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ================= HERO ================= -->
     <div class="hero-section position-relative overflow-hidden" style="max-height: 600px;">
    <img src="img/secd3.jpg" alt="ADS Nyanza SECD Hero Banner" class="img-fluid w-100 object-fit-cover" style="height: 600px; filter: brightness(0.7);">
    
    <div class="hero-caption position-absolute top-50 start-50 translate-middle text-center w-100 px-3">
        <h5 class="text-uppercase text-white fw-bold mb-2" style="letter-spacing: 2px; font-size: 0.9rem;">Early Childhood Development & Education</h5>
        <h1 class="display-3 fw-bold text-white mb-4">SECD</h1>
        
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="About_Us" class="btn btn-lg px-4 py-2 fw-bold text-white border-0" 
               style="background-color: hsl(140, 82%, 37%); border-radius: 30px;">
               Learn More
            </a>
            <a href="Contact" class="btn btn-lg btn-outline-light px-4 py-2 fw-bold" 
               style="border-radius: 30px; border-width: 2px;">
               Get In Touch
            </a>
        </div>
    </div>
</div>

    <!-- ================= SCRIPTS ================= -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Desktop hover for mega-dropdown
        document.querySelectorAll('.mega-dropdown').forEach(drop => {
            if (window.innerWidth > 992) {
                drop.addEventListener('mouseenter', () => {
                    bootstrap.Dropdown.getOrCreateInstance(drop.querySelector('[data-bs-toggle="dropdown"]')).show();
                });
                drop.addEventListener('mouseleave', () => {
                    bootstrap.Dropdown.getOrCreateInstance(drop.querySelector('[data-bs-toggle="dropdown"]')).hide();
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
                    link.style.transition = `all 0.5s ease ${0.1 * (i + 1)}s`;
                    setTimeout(() => {
                        link.style.opacity = 1;
                        link.style.transform = 'translateX(0)';
                    }, 50);
                });
            });
        });

        // Hide spinner on load
        window.addEventListener('load', () => {
            const spinner = document.getElementById('spinner');
            spinner.classList.remove('show');
        });
    </script>


<!-- ======================= INTRO & HIGHLIGHTS ======================= -->
<section class="container py-5">
  <div class="row align-items-center mb-5">
    <div class="col-lg-6">
      <h2 class="fw-bold mb-3" style="color: hsl(140, 82%, 37%);">Strengthening Early Childhood Development (SECD)</h2>
      <p class="text-muted">
        We work hand-in-hand with communities and households with children aged 0–5 years to promote nurturing care and optimal early childhood development. 
        Our efforts focus on fostering positive parenting, enhancing social-emotional learning, and encouraging male engagement in caregiving roles.
      </p>
      <p class="text-muted">
        The program empowers primary caregivers with practical knowledge, tools, and resources to support children’s holistic growth—ensuring that children not only survive but thrive during these formative years.
      </p>
      <p class="text-muted">
        Through partnerships with faith-based organizations, community leaders, and local stakeholders, we provide psychosocial support, advocate for inclusive policies, and strengthen community systems that prioritize early childhood development. 
        Our goal is to create an enabling environment where every child has access to quality care, learning opportunities, and the foundation to reach their full potential.
      </p>
    </div>
    <div class="col-lg-6 text-center">
      <img src="img/secd4.jpg" alt="Strengthening Early Childhood Development" class="img-fluid rounded-4 shadow-lg">
    </div>
  </div>
</section>

<!-- Our Approach -->
<!--
<section class="container py-5" data-aos="fade-up">
  <div class="text-center mb-4">
    <h3 class="fw-bold text-success mb-3">Our Commitments</h3>
    <p class="text-muted">We support resilient households across selected counties through livelihood, health, and community programs.</p>
  </div>

  <div class="row text-center g-3">
    <div class="col-6 col-md-3">
      <h4 class="fw-bold text-primary">5,200+</h4>
      <p class="small text-muted">Households reached (target)</p>
    </div>
    <div class="col-6 col-md-3">
      <h4 class="fw-bold text-primary">418</h4>
      <p class="small text-muted">Community groups supported</p>
    </div>
    <div class="col-6 col-md-3">
      <h4 class="fw-bold text-primary">1,280+</h4>
      <p class="small text-muted">Participants with improved health awareness</p>
    </div>
    <div class="col-6 col-md-3">
      <h4 class="fw-bold text-primary">Partner-driven</h4>
      <p class="small text-muted">Work with local leaders and institutions</p>
    </div>
  </div>
</section>
-->

<!-- ======================= WHERE WE WORK ======================= -->
<section class="bg-light py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="fw-bold mb-3" style="color: hsl(140, 82%, 37%);">Where We Work</h2>
      <p class="text-muted">
        The SECD Project is implemented in Nyamira and Vihiga Counties — key regions in Western Kenya
        where we promote climate-smart agriculture, youth empowerment, and resilient livelihoods.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Nyamira County -->
      <div class="col-lg-6 col-md-6 text-center" data-aos="fade-right">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
          <div class="card-header bg-primary text-white fw-bold">
            Nyamira County
          </div>
          <div class="card-body p-0" style="height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510663.7680906336!2d34.611137669825254!3d-0.6511235802221003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b16d82e769fc3%3A0x256c2064c6e24d31!2sNyamira%20County!5e0!3m2!1sen!2ske!4v1762232801070!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <!-- Vihiga County -->
      <div class="col-lg-6 col-md-6 text-center" data-aos="fade-left">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
          <div class="card-header bg-success text-white fw-bold">
            Vihiga County
          </div>
          <div class="card-body p-0" style="height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255348.10111809088!2d34.56659272554759!3d0.08353397304018038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17800c2778604159%3A0x7e448ddc8e934919!2sVihiga%20County!5e0!3m2!1sen!2ske!4v1762232768694!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ======================= AOS ANIMATION LIBRARY ======================= -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Animation speed (ms)
    once: true,     // Run animation only once
    offset: 120     // Trigger point
  });
</script>





<!-- ============================
     OUR IMPACT STORIES SECTION
============================= --
<!-- ======================= SUCCESS STORIES ======================= --
<section class="container py-5" id="success-stories">
  <div class="text-center mb-5">
    <h2 class="fw-bold text-primary">Success Stories</h2>
    <p class="text-muted">
      Inspiring transformations of resilience, empowerment, and sustainable livelihoods through ADS Nyanza’s impactful community programs.
    </p>
  </div>

  <style>
    /* Make all story images uniform in height and maintain rounded edges */
    .story-img {
      width: 100%;
      height: 350px; /* fixed height for uniformity */
      object-fit: cover; /* ensures images fill nicely without distortion */
      border-radius: 1rem;
    }

    /* Add slight shadow and smooth transitions */
    .story-img:hover {
      transform: scale(1.02);
      transition: all 0.3s ease;
    }
  </style>

  <!-- Story 1 --
  <div class="row g-4 align-items-center mb-5 story-row" data-aos="fade-right">
    <div class="col-md-5">
      <img src="img/crp5.jpeg" alt="Jacquiline Atieno Rading" class="img-fluid story-img shadow">
    </div>
    <div class="col-md-7">
      <div class="p-4 rounded-4 shadow-sm bg-white">
        <h5 class="fw-bold text-primary">Story of Jacquiline Atieno Rading — The Champion for Balanced Diet</h5>
        <p class="fst-italic text-secondary mb-1"><strong>Jacquiline Atieno Rading</strong></p>
        <p class="text-muted mb-2">
          <i class="fa fa-map-marker-alt text-danger me-1"></i> Bar Odingo Village, Marera Sub-location, North West Ward, Kisumu West Sub County, Kisumu County
        </p>
        <p class="small text-muted mb-3">
          <strong>Jacquiline</strong>, a 31-year-old mother of four, is a mentor farmer and community health volunteer under the ICRP Project. Through ADS Nyanza’s nutrition and smart farming training, she transformed her family’s health and diet.
        </p>
        <p class="small text-muted mb-3">
          <strong>“After learning about nutrition, I started a kitchen garden and changed our meals. My child’s health improved, and our family now eats balanced diets,”</strong> she shares. She grows <em>Dek</em>, <em>Kandhira</em>, <em>Sukuma</em>, and <em>Dhania</em>, saving money and aspiring to start an Mpesa shop.
        </p>
        <p class="small text-muted mb-0">
          As a member of <strong>Hill of Hope Group</strong>, Jacquiline promotes shared farming, savings, and tree planting to combat climate change — a true champion of health and sustainability.
        </p>
      </div>
    </div>
  </div>

  <!-- Story 2 --
  <div class="row g-4 align-items-center mb-5 story-row flex-md-row-reverse" data-aos="fade-left">
    <div class="col-md-5">
      <img src="img/dorothy.jpeg" alt="Dorothy Adhiambo" class="img-fluid story-img shadow">
    </div>
    <div class="col-md-7">
      <div class="p-4 rounded-4 shadow-sm bg-white">
        <h5 class="fw-bold text-primary">From Struggles to Strength: Dorothy’s Journey to Food Security</h5>
        <p class="fst-italic text-secondary mb-1"><strong>Dorothy Adhiambo</strong></p>
        <p class="text-muted mb-2">
          <i class="fa fa-map-marker-alt text-danger me-1"></i> Chulaimbo Village, Marera Sub-location, North West Ward, Kisumu West Sub County, Kisumu County
        </p>
        <p class="small text-muted mb-3">
          Dorothy, a 40-year-old mother of four, turned her household around through ADS Nyanza’s training in nutrition and climate-smart agriculture. Once struggling to afford food, she now produces her own vegetables and poultry.
        </p>
        <p class="small text-muted mb-3">
          She cultivates <em>Dek</em>, <em>Osuga</em>, <em>Boo</em>, <em>Kandhira</em>, and <em>Sukuma</em>, using the harvest to feed her family and pay school fees. She also educates her children and neighbors on healthy cooking and hygiene.
        </p>
        <p class="small text-muted mb-0">
          Through her group <strong>Stepping Stone</strong>, Dorothy empowers others to grow their own food and embrace balanced diets — proving that knowledge and community support can end hunger.
        </p>
      </div>
    </div>
  </div>

  <!-- Story 3 --
  <div class="row g-4 align-items-center mb-5 story-row" data-aos="fade-right">
    <div class="col-md-5 d-flex align-items-center justify-content-center">
  <img src="img/icrp_casava.jpg"
       alt="Judith Anyango"
       class="img-fluid shadow rounded-4"
       style="width: 100%; height: auto; max-height: 420px; object-fit: contain; object-position: center; background-color: #f8f9fa;">
</div>


    <div class="col-md-7">
      <div class="p-4 rounded-4 shadow-sm bg-white">
        <h5 class="fw-bold text-primary">Resilience and Renewal: Judith’s Journey from Struggle to Stability</h5>
        <p class="fst-italic text-secondary mb-1"><strong>Judith Anyango</strong></p>
        <p class="text-muted mb-2">
          <i class="fa fa-map-marker-alt text-danger me-1"></i> Rakwaro Sub-location, Lake Victoria Region, Kisumu County
        </p>
        <p class="text-muted mb-2">
          <strong>“There were nights my children and I slept hungry — but today, we have food, dignity, and hope.”</strong>
        </p>
        <p class="small text-muted mb-3">
          After losing her husband, Judith struggled to feed her five children through a small salon. Through ADS Nyanza’s <strong>Savings With Education (SwE)</strong> and climate resilience training, she became a volunteer replicator, training 10 groups and taking a KES 18,000 loan to grow her business and farm cassava.
        </p>
        <p class="small text-muted mb-3">
          She adopted drought-tolerant crops, kitchen gardening, and tree planting — transforming her land and inspiring her neighbors. Today, Judith earns KES 700 daily, provides for her children, and shares cassava cuttings to help others thrive.
        </p>
        <p class="small text-muted mb-0">
          <strong>“My home is full of life again,”</strong> Judith says gratefully. “May the Church be blessed for walking with us.”
        </p>
      </div>
    </div>
  </div>
</section>



<!-- ============================
     STYLES
============================= --
<style>
.story-img {
  height: 100%;
  object-fit: cover;
  max-height: 320px;
  transition: transform 0.4s ease;
}
.story-img:hover {
  transform: scale(1.03);
}
.story-content {
  background: #fff;
  transition: all 0.3s ease;
}
.story-content:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}
.story-content h5 {
  font-size: 1.25rem;
}
.story-content p.fst-italic {
  font-size: 0.9rem;
}
.object-cover {
  object-fit: cover;
  height: 100%;
  width: 100%;
}
@media (max-width: 767.98px) {
  .story-img {
    max-height: 220px;
  }
}
</style>

<!-- ============================
     AOS ANIMATION LIBRARY
============================= --
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true, offset: 100 });
</script>

-->



   <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/epi.jpg" alt="">
                    <img src="img/hilton.jpg" alt="">
                    <img src="img/broth.jpg" alt="">
                    <img src="img/redcross.jpg" alt="">
                    <img src="img/kenya.jpg" alt="">
                    <img src="img/pwrdf.jpg" alt="">
                
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    
<!-- Footer Start -->
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
                        <div class="d-flex align-items-center mt-3" style="height: 35px;"> <!-- Reduced height -->
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-1" href="https://twitter.com/ADS_Nyanza" style="width: 32px; height: 32px; padding: 0;">
                                <i class="fab fa-twitter fw-normal" style="font-size: 0.9rem;"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-1" href="https://www.facebook.com/profile.php" style="width: 32px; height: 32px; padding: 0;">
                                <i class="fab fa-facebook-f fw-normal" style="font-size: 0.9rem;"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-1" href="https://www.linkedin.com/in/ads-nyanza/" style="width: 32px; height: 32px; padding: 0;">
                                <i class="fab fa-linkedin-in fw-normal" style="font-size: 0.9rem;"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-1" href="https://www.instagram.com/adsnyanza/" style="width: 32px; height: 32px; padding: 0;">
                                <i class="fab fa-instagram fw-normal" style="font-size: 0.9rem;"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="http://www.youtube.com/@ADS-NYANZA" style="width: 32px; height: 32px; padding: 0;">
                                <i class="fab fa-youtube fw-normal" style="font-size: 0.9rem;"></i>
                            </a>
                        </div>
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