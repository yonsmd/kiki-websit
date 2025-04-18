<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg" href="img/logo.svg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title id="title">Kiki</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap');

    /* ================ ROOT VARIABLES ================ */
    :root {
      --primary: #b0f122;
      --primary-dark: #045304;
      --secondary: #212b38;
      --accent: #3e9fff;
      --light: #f5f7fa;
      --dark: #003849;
      --text: #4a5568;
      --white: #ffffff;
      --main3: #fac60b;
      --main4: #b7be00;
      --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      --section-padding: 5rem 0;
      --section-padding-mobile: 3rem 0;
    }

    /* ================ BASE STYLES ================ */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--light);
      color: var(--text);
      line-height: 1.6;
    }

    [dir="rtl"] {
      font-family: 'Noto Kufi Arabic', Tahoma, sans-serif;
    }

    [dir="rtl"] * {
      font-family: inherit !important;
    }

    [dir="rtl"] .contact-icon i {
      font-family: "Font Awesome 6 Free" !important;
    }

    [dir="rtl"] .slider {
      direction: ltr; /* Maintain left-to-right slide order */
    }

    [dir="rtl"] .slider-container i {
      font-family: "Font Awesome 6 Free" !important;
      transform: rotate(180deg);
    }

    [dir="rtl"] .slider-btn.prev {
      left: auto;
      right: 20px;
    }

    [dir="rtl"] .slider-btn.next {
      right: auto;
      left: 20px;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* ================ LANGUAGE SWITCHER ================ */

    .lang-btn {
      background-color: var(--white);
      color: var(--secondary);
      border: 1px solid var(--primary);
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      margin: 0 35px;
    }

    .lang-btn:hover {
      background-color: var(--primary);
      color: var(--white);
    }

    /* ================ NAVBAR STYLES ================ */
    .navbar {
      background-color: var(--white);
      box-shadow: var(--shadow);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
    }

    .navbar-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }

    .logo {
      width: 100px;
      height: 35px;
      margin: 0 20px;
    }

    .nav-links {
      display: flex;
      list-style: none;
    }

    .nav-links li {
      margin-left: 2rem;
    }

    [dir="rtl"] .nav-links li {
      margin-left: 0;
      margin-right: 2rem;
    }

    .nav-links a {
      color: var(--secondary);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .nav-links a.active {
      color: var(--primary);
      position: relative;
    }

    .nav-links a.active::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: var(--primary);
    }

    .hamburger {
      display: none;
      cursor: pointer;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: var(--secondary);
      margin: 0 10px;
    }

    /* ================ HERO SECTION ================ */
    .hero {
      padding: 8rem 0 4rem;
      background: linear-gradient(135deg, var(--primary-dark), var(--primary));
      color: var(--white);
      text-align: center;
      height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      background: linear-gradient(135deg, rgba(4, 83, 4, 0.9), rgba(176, 241, 34, 0.9)),
        url('img/page/p2.jpg') center/cover;
        backdrop-filter: brightness(0.8);
    }

    .hero .container {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto 2.5rem;
    }

    .cta-button {
      display: inline-block;
      background-color: var(--white);
      color: var(--primary-dark);
      padding: 0.8rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 50px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: var(--shadow);
    }

    .cta-button:hover {
      background-color: var(--primary-dark);
      color: var(--white);
      padding: 1rem 2.2rem;
      font-size: 1.2rem;
      font-weight: 700;
      border: 2px solid var(--light);
      border-radius: 40px;
      transition: all 0.3s ease;
    }

    /* ================ ABOUT SECTION ================ */
    .about {
      padding: var(--section-padding);
    }

    .section-title {
      text-align: center;
      margin-bottom: 3.5rem;
      color: var(--secondary);
    }

    .section-title h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }

    .section-title p {
      max-width: 600px;
      margin: 0 auto;
      color: var(--text);
      padding: 0 1rem;
    }

    .about-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: start;
    }

    .about-image {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .about-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .about-text h3 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: var(--secondary);
    }

    .about-text p {
      margin-bottom: 1.5rem;
    }

    .mission-vision {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin-top: 3rem;
    }

    .mission, .vision {
      background-color: var(--white);
      padding: 2rem;
      border-radius: 8px;
      box-shadow: var(--shadow);
    }

    .mission h4, .vision h4 {
      color: var(--primary);
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      font-size: 1.2rem;
    }

    .mission h4:before, .vision h4:before {
      content: "★";
      margin-right: 0.5rem;
      color: var(--primary);
    }

    [dir="rtl"] .mission h4:before, [dir="rtl"] .vision h4:before {
      margin-right: 0;
      margin-left: 0.5rem;
    }

    /* ================ Nums ================ */

    .nums {
      width: 100%;
      padding: 60px 40px 0 40px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      text-align: center;
      background-color: var(--primary-dark);
      color: var(--light);
      font-weight: 800;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .box p {
        text-align: center;
        color: var(--mainColor6);
        font-weight: 600;
        font-size: 18px;
        padding-bottom: 50px;
    }

    .nums .num {
        flex: 1;
        font-size: 40px;
        padding: 0 20px 20px 20px;
    }

    /* ================ FEATURES/PRODUCTS SECTION ================ */
    .features {
  padding: var(--section-padding);
  background-color: #f0f7f4;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  gap: 2rem;
}

.feature-card {
  background-color: var(--white);
  padding: 1.5rem;
  border-radius: 8px;
  height: auto; /* Changed from fixed height */
  min-height: 200px; /* Minimum height */
  box-shadow: var(--shadow);
  transition: transform 0.3s ease;
  display: grid;
  grid-template-columns: 1fr 2fr; /* Left (img) 1fr, right (content) 2fr */
  gap: 1.5rem;
  align-items: center;
}

.feature-card:hover {
  transform: translateY(-5px);
}

.feature-img {
  width: 400px;
  height: auto;
  max-height: 380px;
  object-fit: contain;
  border-radius: 10px;

}

.feature-content {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.feature-card h3 {
  font-size: 1.5rem;
  margin-bottom: 0.75rem;
  color: var(--secondary);
}

.feature-card p {
  margin-bottom: 1rem;
  color: var(--text-color);
  flex-grow: 1;
}

.feature-price {
  font-size: 1.25rem;
  font-weight: bold;
  color: var(--primary);
  margin-top: auto;
}

/* ================ IMAGE SLIDER ================ */
.slider-section {
  padding: var(--section-padding);
  background: transparent;
}

.slider-container {
  position: relative;
  max-width: 1000px;
  margin: 0 auto;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: var(--shadow);
}

.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
  width: 100%;
}

.slide {
  min-width: 100%;
  flex-shrink: 0;
  height: 500px;
  object-fit: cover;
}

.slide.active {
    opacity: 1;
}

.slider-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: var(--primary);
  color: var(--white);
  border: none;
  padding: 1rem;
  cursor: pointer;
  border-radius: 12px;
  transition: all 0.3s ease;
}

.slider-btn:hover {
  background: var(--primary-dark);
}

.slider-btn.prev {
  left: 20px;
}

.slider-btn.next {
  right: 20px;
}

[dir="rtl"] .slider {
    direction: ltr; 
}

[dir="rtl"] .slider-btn.prev {
    left: auto;
    right: 20px;
}

[dir="rtl"] .slider-btn.next {
    right: auto;
    left: 20px;
}

.pagination {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
}

.pagination-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: var(--primary);
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

.pagination-dot.active {
  background: var(--white);
  transform: scale(1.2);
}


    /* ================ CONTACT SECTION ================ */
    .contact {
      padding: var(--section-padding);
      background-color: #f0f7f4;
    }

    .contact-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
    }

    .contact-info {
      padding: 2rem;
      background-color: var(--white);
      border-radius: 8px;
      box-shadow: var(--shadow);
    }

    .contact-info h3 {
      color: var(--secondary);
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .contact-method {
      display: flex;
      align-items: flex-start;
      margin-bottom: 1.5rem;
    }

    [dir="rtl"] .contact-method {
      text-align: right;
    }

    .contact-icon {
      color: var(--primary); 
      font-size: 1.5rem;
      margin-right: 1.5rem;
      min-width: 30px;
      text-align: center;
    }

    .contact-icon i {
      transition: transform 0.3s ease;
    }

    .contact-icon:hover i {
      transform: scale(1.1);
    }

    [dir="rtl"] .contact-icon {
      margin-right: 0;
      margin-left: 1.5rem;
    }

    .contact-details h4 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      color: var(--secondary);
    }

    .contact-details p, .contact-details a {
      color: var(--text);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .contact-details a:hover {
      color: var(--primary);
    }

    .contact-form {
      padding: 2rem;
      background-color: var(--white);
      border-radius: 8px;
      box-shadow: var(--shadow);
    }

    .contact-form h3 {
      color: var(--secondary);
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: var(--secondary);
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #e2e8f0;
      border-radius: 4px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary);
    }

    textarea.form-control {
      min-height: 120px;
      resize: vertical;
    }

    .submit-btn {
      background-color: var(--primary);
      color: var(--white);
      border: none;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: var(--primary-dark);
    }

    /* ================ FOOTER ================ */
    .footer {
      background-color: var(--secondary);
      color: var(--light);
      padding: 4rem 0 2rem;
    }

    .footer-content {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 2rem;
    }

    .footer-logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 1.5rem;
      display: inline-block;
    }

    .footer-about p {
      margin-bottom: 1.5rem;
      opacity: 0.8;
    }

    .footer-links h4 {
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
      color: var(--white);
    }

    .footer-links ul {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 1rem;
    }

    .footer-links a {
      color: var(--light);
      opacity: 0.8;
      text-decoration: none;
      transition: opacity 0.3s ease;
    }

    .footer-links a:hover {
      opacity: 1;
      color: var(--primary);
    }

    /* ================ LOADING ANIMATION ================ */
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: var(--white);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s, visibility 0.5s;
    }

    .loader.hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader-spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #f3f3f3;
      border-top: 5px solid var(--primary);
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* ================ BACK TO TOP BUTTON ================ */
    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 50px;
      height: 50px;
      background-color: var(--primary);
      color: var(--white);
      border: none;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.2rem;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 99;
    }

    [dir="rtl"] .back-to-top {
      right: auto;
      left: 20px;
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      background-color: var(--primary-dark);
    }

    /* ================ RESPONSIVE DESIGN ================ */
    @media (max-width: 992px) {
      
      .footer-content {
        grid-template-columns: 1fr 1fr;
        gap: 3rem 2rem;
      }

      .about-content, .contact-content {
        grid-template-columns: 1fr;
      }

      /* Adjusted padding for medium screens */
      .hero {
        padding: 7rem 0 3.5rem;
      }
      
      .section-title {
        margin-bottom: 3rem;
      }

      .nums {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      /* Mobile menu styles */
      .hamburger {
        display: block;
      }
      
      .feature-card {
        grid-template-columns: 1fr;
      }
      
      .feature-img {
        max-height: 150px;
        justify-self: center;
      }

      .nav-links {
        position: fixed;
        top: 70px;
        left: 0;
        width: 100%;
        flex-direction: column;
        background-color: var(--white);
        box-shadow: var(--shadow);
        padding: 1.5rem 0;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        transition: clip-path 0.4s ease-out;
        z-index: 99;
      }
      
      .nav-links.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      }
      
      .nav-links li {
        margin: 1rem 0;
        text-align: center;
      }

      [dir="rtl"] .nav-links li {
        margin: 1rem 0;
      }
      
      /* Adjusted typography for mobile */
      .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1.2rem;
      }
      
      .hero p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
      }

      .mission-vision {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      /* Section padding adjustment */
      :root {
        --section-padding: var(--section-padding-mobile);
      }
      
      .hero {
        padding: 6rem 0 3rem;
      }

      .slide {
        height: 400px;
      }
      
      .slider-btn {
        padding: 0.8rem;
      }
    }

    @media (max-width: 576px) {
      .footer-content {
        grid-template-columns: 1fr;
        gap: 2.5rem;
      }
      
      /* Further typography adjustments */
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }

      /* Adjusted spacing for small screens */
      .about-content, .contact-content {
        gap: 2rem;
      }
      
      .mission, .vision, .feature-card, .testimonial-card {
        padding: 1.5rem;
      }
      
      .contact-method {
        margin-bottom: 1.2rem;
      }

      .nums {
        grid-template-columns: repeat(1, 1fr);
      }
    }

    /* ================ RTL SUPPORT ================ */
    [dir="rtl"] .navbar-container,
    [dir="rtl"] .about-content {
      flex-direction: row-reverse;
    }

    [dir="rtl"] .text-left {
      text-align: right;
    }

    [dir="rtl"] .text-right {
      text-align: left;
    }


    ::-webkit-scrollbar {
    width: 15px;
}

::-webkit-scrollbar-thumb {
    background-color: var(--primary);
}

::-webkit-scrollbar-track {
    background-color: var(--light);
    width: 30px;
}

*::selection {
    color: var(--light);
    background-color: var(--primary-dark);
}
  </style>
</head>
<body id="page-body">
  <!-- ================ LOADING ANIMATION ================ -->
  <div class="loader" id="page-loader">
    <div class="loader-spinner"></div>
  </div>

  
  <!-- ================ NAVBAR ================ -->
  <nav class="navbar">
    <div class="container navbar-container">
      <img src="img/logo.png" alt="kiki logo" class="logo"></img>
      <button class="hamburger" id="menu-toggle">☰</button>
      <ul class="nav-links" id="nav-links">
        <li><a href="#home" id="nav-home">Home</a></li>
        <li><a href="#about" id="nav-about">About</a></li>
        <li><a href="#products" id="nav-products">Our Products</a></li>
        <li><a href="#contact" id="nav-contact">Contact Us</a></li>
        <li><button class="lang-btn" id="lang-toggle">العربية</button></li>
      </ul>
    </div>
    <!-- ================ LANGUAGE SWITCHER ================ -->
  </nav>

  <!-- ================ HERO SECTION ================ -->
  <section id="home" class="hero">
    <div class="container">
    <h1 id="hero-title">Premium Feed & Agricultural Materials</h1>
      <p id="hero-subtitle">Your trusted partner for high-quality animal feed and agricultural materials import and export.</p>
      <a href="#contact" class="cta-button" id="hero-cta">Contact Us</a>
    </div>
  </section>

  <!-- ================ ABOUT SECTION ================ -->
  <section class="about" id="about">
    <div class="container">
      <div class="section-title">
      <h2 id="about-title">About Our Company</h2>
      <p id="about-subtitle">Learn about our commitment to quality in the feed and agricultural materials trade.</p>
      </div>
      
      <div class="about-content">
        <div class="about-image">
          <img src="img/page/p1.jpeg" alt="Company Team" loading="lazy" />
        </div>
        <div class="about-text">
        <h3 id="about-story-title">Our History</h3>
          <p id="about-story-1">Established in 2010, Kiki Feed & Materials has grown from a local supplier to an international trader of premium animal feed and agricultural materials. We specialize in sourcing and distributing high-quality products to meet the needs of farmers and agricultural businesses worldwide.</p>
          <p id="about-story-2">With years of experience in the industry, we've built strong relationships with producers and suppliers across multiple continents, ensuring reliable supply chains and competitive pricing for our customers.</p>
        </div>
      </div>

      <div class="mission-vision">
        <div class="mission">
        <h4 id="mission-title">Our Mission</h4>
        <p id="mission-text">To provide the highest quality feed and agricultural materials through ethical sourcing, strict quality control, and reliable distribution networks that support the global agricultural community.</p>
        </div>
        <div class="vision">
        <h4 id="vision-title">Our Vision</h4>
        <p id="vision-text">To become the preferred global partner for feed and agricultural materials, recognized for our integrity, product excellence, and commitment to sustainable agricultural practices.</p>
        </div>
      </div>

    </div>
  </section>


  
  <!-- ================ Nums ================ -->
  <section class="nums" id="nums-section">
    <div class="box">
        <div class="num" data-goal="173">0</div>
        <p id="nums-customers">Customers</p>
    </div>
    <div class="box">
        <div class="num" data-goal="44">0</div>
        <p id="nums-experience">Years Of Experienced</p>
    </div>
    <div class="box">
        <div class="num" data-goal="68">0</div>
        <p id="nums-brands">Brands</p>
    </div>
    <div class="box">
        <div class="num" data-goal="3">0</div>
        <p id="nums-regions">Regions</p>
    </div>
  </section>

  <!-- ================ PRODUCTS SECTION ================ -->
  <section class="features" id="products" style="background-color: #f0f7f4;">
  <div class="container">
    <div class="section-title">
    <h2 id="products-title">Our Products</h2>
    <p id="products-subtitle">High-quality feed and agricultural materials for livestock and farming operations.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <img src="img/page/p1.jpeg" alt="Analytics Platform" class="feature-img">
        <div class="feature-content">
          <h3 id="product-1-title">Animal Feed Products</h3>
          <p id="product-1-desc">Premium quality feed for poultry, cattle, swine, and aquaculture, formulated for optimal nutrition and growth.</p>
          <div class="feature-price">50$</div>
        </div>
      </div>
      <div class="feature-card">
        <img src="img/page/p2.jpg" alt="Security Suite" class="feature-img">
        <div class="feature-content">
          <h3 id="product-2-title">Feed Additives</h3>
          <p id="product-2-desc">Nutritional supplements and additives to enhance feed quality and animal health.</p>
          <div class="feature-price">50$</div>
        </div>
      </div>
      <div class="feature-card">
        <img src="img/page/p3.webp" alt="Mobile Solutions" class="feature-img">
        <div class="feature-content">
        <h3 id="product-3-title">Agricultural Materials</h3>
            <p id="product-3-desc">High-quality grains, seeds, and other raw materials for feed production and farming needs.</p>
            <div class="feature-price">50$</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="slider-section" id="gallery">
  <div class="container">
    <div class="slider-container">
      <div class="slider">
        <img src="img/page/p1.jpeg" alt="Gallery 1" class="slide">
        <img src="img/page/p2.jpg" alt="Gallery 2" class="slide">
        <img src="img/page/p3.webp" alt="Gallery 3" class="slide">
        <img src="img/page/p1.jpeg" alt="Gallery 4" class="slide">
        <img src="img/page/p2.jpg" alt="Gallery 5" class="slide">
      </div>
      <button class="slider-btn prev" aria-label="Previous">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button class="slider-btn next" aria-label="Next">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
      <div class="pagination"></div>
    </div>
  </div>
</section>

  <!-- ================ CONTACT SECTION ================ -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="section-title">
        <h2 id="contact-title">Contact Our Team</h2>
        <p id="contact-subtitle">Get in touch for product inquiries, pricing, or to discuss your import/export needs.</p>
      </div>
      
      <div class="contact-content">
        <div class="contact-info">
          <h3 id="contact-info-title">Contact Information</h3>
          
          <div class="contact-method">
            <div class="contact-icon">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="contact-details">
              <h4 id="contact-address-title">Headquarters</h4>
              <p id="contact-address">456 Agriculture Street, Trade City, Country</p>
            </div>
          </div>

          <div class="contact-method">
            <div class="contact-icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="contact-details">
              <h4 id="contact-phone-title">Sales Department</h4>
              <p><a href="tel:+11234567890" id="contact-phone">+1 (123) 456-7890</a></p>
            </div>
          </div>

          <div class="contact-method">
            <div class="contact-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-details">
              <h4 id="contact-email-title">Email</h4>
              <p><a href="mailto:sales@kikifeed.com">sales@kikifeed.com</a></p>
            </div>
          </div>

          <div class="contact-method">
            <div class="contact-icon">
              <i class="fa-solid fa-clock"></i>
            </div>
            <div class="contact-details">
              <h4 id="contact-hours-title">Business Hours</h4>
              <p id="contact-hours-1">Monday - Friday: 8:00 AM - 6:00 PM</p>
              <p id="contact-hours-2">Saturday: 9:00 AM - 1:00 PM</p>
              <p id="contact-hours-3">Sunday: Closed</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <h3 id="contact-form-title">Request a Quote</h3>
          <form id="contactForm">
            <div class="form-group">
              <label for="name" id="form-name-label">Your Name</label>
              <input type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email" id="form-email-label">Email Address</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="subject" id="form-subject-label">Product Interest</label>
              <input type="text" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="message" id="form-message-label">Your Requirements</label>
              <textarea id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="submit-btn" id="form-submit-btn">Submit Inquiry</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ================ FOOTER ================ -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-about">
          <span class="footer-logo" id="footer-logo">Kiki Feed & Materials</span>
          <p id="footer-about-text">Specializing in the import and export of premium animal feed and agricultural materials since 2010.</p>
          <p id="footer-address">456 Agriculture Street, Trade City, Country</p>
        </div>
        <div class="footer-links">
          <h4 id="footer-company-title">Company</h4>
          <ul>
            <li><a href="#about" id="footer-about-link">About Us</a></li>
            <li><a href="#" id="footer-team-link">Our Team</a></li>
            <li><a href="#" id="footer-careers-link">Careers</a></li>
            <li><a href="#" id="footer-news-link">Industry News</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4 id="footer-services-title">Products</h4>
          <ul>
            <li><a href="#products" id="footer-products-link">Our Products</a></li>
            <li><a href="#" id="footer-consulting-link">Sourcing</a></li>
            <li><a href="#" id="footer-support-link">Quality Control</a></li>
            <li><a href="#" id="footer-training-link">Logistics</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4 id="footer-legal-title">Legal</h4>
          <ul>
            <li><a href="#" id="footer-privacy-link">Privacy Policy</a></li>
            <li><a href="#" id="footer-terms-link">Terms of Trade</a></li>
            <li><a href="#" id="footer-cookie-link">Export Compliance</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- ================ BACK TO TOP BUTTON ================ -->
  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- ================ JAVASCRIPT ================ -->
  <script>
    // ================ MULTILINGUAL CONTENT ================
    const translations = {
  en: {
    // Page Title
    'title': "Kiki Feed & Materials",
    
    // Navbar
    'logo': "Kiki Feed & Materials",
    'nav-home': "Home",
    'nav-about': "About",
    'nav-products': "Our Products",
    'nav-contact': "Contact Us",
    'lang-toggle': "العربية",

    // Hero Section
    'hero-title': "Premium Feed & Agricultural Materials",
    'hero-subtitle': "Your trusted partner for high-quality animal feed and agricultural materials import and export.",
    'hero-cta': "Contact Us",

    // About Section
    'about-title': "About Our Company",
    'about-subtitle': "Learn about our commitment to quality in the feed and agricultural materials trade.",
    'about-story-title': "Our History",
    'about-story-1': "Established in 2010, Kiki Feed & Materials has grown from a local supplier to an international trader of premium animal feed and agricultural materials. We specialize in sourcing and distributing high-quality products to meet the needs of farmers and agricultural businesses worldwide.",
    'about-story-2': "With years of experience in the industry, we've built strong relationships with producers and suppliers across multiple continents, ensuring reliable supply chains and competitive pricing for our customers.",
    'mission-title': "Our Mission",
    'mission-text': "To provide the highest quality feed and agricultural materials through ethical sourcing, strict quality control, and reliable distribution networks that support the global agricultural community.",
    'vision-title': "Our Vision",
    'vision-text': "To become the preferred global partner for feed and agricultural materials, recognized for our integrity, product excellence, and commitment to sustainable agricultural practices.",
    
    // Nums Section
    'nums-customers': "Customers",
    'nums-experience': "Years Of Experience",
    'nums-brands': "Brands",
    'nums-regions': "Regions",
    
    // Products Section
    'products-title': "Our Products",
    'products-subtitle': "High-quality feed and agricultural materials for livestock and farming operations.",
    'product-1-title': "Animal Feed Products",
    'product-1-desc': "Premium quality feed for poultry, cattle, swine, and aquaculture, formulated for optimal nutrition and growth.",
    'product-2-title': "Feed Additives",
    'product-2-desc': "Nutritional supplements and additives to enhance feed quality and animal health.",
    'product-3-title': "Agricultural Materials",
    'product-3-desc': "High-quality grains, seeds, and other raw materials for feed production and farming needs.",

    // Contact Section
    'contact-title': "Contact Our Team",
    'contact-subtitle': "Get in touch for product inquiries, pricing, or to discuss your import/export needs.",
    'contact-info-title': "Contact Information",
    'contact-address-title': "Headquarters",
    'contact-address': "456 Agriculture Street, Trade City, Country",
    'contact-phone-title': "Sales Department",
    'contact-phone': "+1 (123) 456-7890",
    'contact-email': "sales@kikifeed.com",
    'contact-hours-title': "Business Hours",
    'contact-hours-1': "Monday - Friday: 8:00 AM - 6:00 PM",
    'contact-hours-2': "Saturday: 9:00 AM - 1:00 PM",
    'contact-hours-3': "Sunday: Closed",
    'contact-form-title': "Request a Quote",
    'form-name-label': "Your Name",
    'form-email-label': "Email Address",
    'form-subject-label': "Product Interest",
    'form-message-label': "Your Requirements",
    'form-submit-btn': "Submit Inquiry",

    // Footer
    'footer-logo': "Kiki Feed & Materials",
    'footer-about-text': "Specializing in the import and export of premium animal feed and agricultural materials since 2010.",
    'footer-address': "456 Agriculture Street, Trade City, Country",
    'footer-company-title': "Company",
    'footer-about-link': "About Us",
    'footer-team-link': "Our Team",
    'footer-careers-link': "Careers",
    'footer-news-link': "Industry News",
    'footer-services-title': "Products",
    'footer-products-link': "Our Products",
    'footer-consulting-link': "Sourcing",
    'footer-support-link': "Quality Control",
    'footer-training-link': "Logistics",
    'footer-legal-title': "Legal",
    'footer-privacy-link': "Privacy Policy",
    'footer-terms-link': "Terms of Trade",
    'footer-cookie-link': "Export Compliance"
  },
  ar: {
    // Page Title
    'title': "كيكي ",
    
    // Navbar
    'logo': "كيكي ",
    'nav-home': "الرئيسية",
    'nav-about': "من نحن",
    'nav-products': "منتجاتنا",
    'nav-contact': "اتصل بنا",
    'lang-toggle': "English",

    // Hero Section
    'hero-title': "أعلاف ومواد زراعية عالية الجودة",
    'hero-subtitle': "شريكك الموثوق في استيراد وتصدير الأعلاف الحيوانية والمواد الزراعية الممتازة.",
    'hero-cta': "اتصل بنا",

    // About Section
    'about-title': "عن شركتنا",
    'about-subtitle': "تعرف على التزامنا بالجودة في تجارة الأعلاف والمواد الزراعية.",
    'about-story-title': "تاريخنا",
    'about-story-1': "تأسست شركة كيكي للأعلاف والمواد الزراعية في عام ٢٠١٠، نمت من مورد محلي إلى تاجر دولي للأعلاف الحيوانية والمواد الزراعية الممتازة. نحن متخصصون في توريد وتوزيع منتجات عالية الجودة لتلبية احتياجات المزارعين والشركات الزراعية حول العالم.",
    'about-story-2': "بفضل سنوات الخبرة في المجال، بنينا علاقات قوية مع المنتجين والموردين عبر قارات متعددة، مما يضمن سلاسل توريد موثوقة وأسعارًا تنافسية لعملائنا.",
    'mission-title': "مهمتنا",
    'mission-text': "توفير أعلى جودة من الأعلاف والمواد الزراعية من خلال مصادر أخلاقية، ومراقبة جودة صارمة، وشبكات توزيع موثوقة تدعم المجتمع الزراعي العالمي.",
    'vision-title': "رؤيتنا",
    'vision-text': "أن نكون الشريك العالمي المفضل في مجال الأعلاف والمواد الزراعية، معترف بنا للنزاهة، وتميز المنتجات، والالتزام بالممارسات الزراعية المستدامة.",

    // Nums Section
    'nums-customers': "عملاء",
    'nums-experience': "سنوات الخبرة",
    'nums-brands': "ماركات",
    'nums-regions': "مناطق",

    // Products Section
    'products-title': "منتجاتنا",
    'products-subtitle': "أعلاف ومواد زراعية عالية الجودة للثروة الحيوانية والعمليات الزراعية.",
    'product-1-title': "منتجات الأعلاف الحيوانية",
    'product-1-desc': "أعلاف عالية الجودة للدواجن والماشية والخنازير والاستزراع المائي، مصممة للتغذية المثلى والنمو.",
    'product-2-title': "إضافات الأعلاف",
    'product-2-desc': "مكملات غذائية وإضافات لتعزيز جودة الأعلاف وصحة الحيوانات.",
    'product-3-title': "المواد الزراعية",
    'product-3-desc': "حبوب وبذور ومواد خام عالية الجودة لإنتاج الأعلاف والاحتياجات الزراعية.",

    // Contact Section
    'contact-title': "اتصل بفريقنا",
    'contact-subtitle': "تواصل معنا للاستفسار عن المنتجات أو الأسعار أو مناقشة احتياجاتك الاستيرادية/التصديرية.",
    'contact-info-title': "معلومات الاتصال",
    'contact-address-title': "المقر الرئيسي",
    'contact-address': "٤٥٦ شارع الزراعة، مدينة التجارة، البلد",
    'contact-phone-title': "قسم المبيعات",
    'contact-phone': "١+ (١٢٣) ٤٥٦-٧٨٩٠",
    'contact-email': "مبيعات@كيكي-فييد.com",
    'contact-hours-title': "ساعات العمل",
    'contact-hours-1': "الإثنين - الجمعة: ٨:٠٠ صباحًا - ٦:٠٠ مساءً",
    'contact-hours-2': "السبت: ٩:٠٠ صباحًا - ١:٠٠ ظهرًا",
    'contact-hours-3': "الأحد: مغلق",
    'contact-form-title': "طلب عرض سعر",
    'form-name-label': "اسمك",
    'form-email-label': "عنوان البريد الإلكتروني",
    'form-subject-label': "المنتج المطلوب",
    'form-message-label': "متطلباتك",
    'form-submit-btn': "إرسال الاستفسار",

    // Footer
    'footer-logo': "كيكي للأعلاف والمواد الزراعية",
    'footer-about-text': "متخصصون في استيراد وتصدير الأعلاف الحيوانية والمواد الزراعية الممتازة منذ عام ٢٠١٠.",
    'footer-address': "٤٥٦ شارع الزراعة، مدينة التجارة، البلد",
    'footer-company-title': "الشركة",
    'footer-about-link': "من نحن",
    'footer-team-link': "فريقنا",
    'footer-careers-link': "وظائف",
    'footer-news-link': "أخبار الصناعة",
    'footer-services-title': "المنتجات",
    'footer-products-link': "منتجاتنا",
    'footer-consulting-link': "التوريد",
    'footer-support-link': "مراقبة الجودة",
    'footer-training-link': "الخدمات اللوجستية",
    'footer-legal-title': "قانوني",
    'footer-privacy-link': "سياسة الخصوصية",
    'footer-terms-link': "شروط التجارة",
    'footer-cookie-link': "الالتزام التصديري"
  }
};

// ================ MAIN SCRIPT ================
document.addEventListener('DOMContentLoaded', function() {
  // ================ LOADER ================
  setTimeout(function() {
    document.getElementById('page-loader').classList.add('hidden');
  }, 500);

  // ================ MOBILE MENU TOGGLE ================
  const menuToggle = document.getElementById('menu-toggle');
  const navLinks = document.getElementById('nav-links');
  
  menuToggle.addEventListener('click', function() {
    navLinks.classList.toggle('active');
  });

  // Close mobile menu when clicking links
  document.querySelectorAll('.nav-links a').forEach(item => {
    item.addEventListener('click', () => navLinks.classList.remove('active'));
  });

  // ================ LANGUAGE MANAGEMENT ================
  const langToggle = document.getElementById('lang-toggle');
  const pageBody = document.getElementById('page-body');
  let currentLang = localStorage.getItem('lang') || 'en';

    function setDirection(lang) {
    const html = document.documentElement;
    html.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    html.style.fontFamily = lang === 'ar' 
      ? "'Noto Kufi Arabic', Tahoma, sans-serif"
      : "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
  }
  
  // Initialize language
  updateTextContent(currentLang);
  setDirection(currentLang);
  langToggle.textContent = translations[currentLang]['lang-toggle'];

  // Language toggle handler
  langToggle.addEventListener('click', function() {
  currentLang = currentLang === 'en' ? 'ar' : 'en';
  localStorage.setItem('lang', currentLang);
  setDirection(currentLang);
  updateTextContent(currentLang);
  langToggle.textContent = translations[currentLang]['lang-toggle'];
  
  // Reinitialize slider after language change
  initializeSlider();
  
  // Dispatch custom event for RTL adjustments
  const langEvent = new Event('langChange');
  document.dispatchEvent(langEvent);
});

  function updateTextContent(lang) {
    const langData = translations[lang];
    
    // Update all translatable elements
    Object.keys(langData).forEach(key => {
      const element = document.getElementById(key);
      if (!element) return;

      if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
        element.placeholder = langData[key];
      } else if (element.tagName === 'A' && element.href.startsWith('mailto:')) {
        element.href = `mailto:${langData[key]}`;
        element.textContent = langData[key];
      } else {
        element.textContent = langData[key];
      }
    });
  }
  
  
  // ================ NAV BAR ================
  // Active nav link functionality
    function setActiveLink() {
      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('.nav-links a');
      const scrollPosition = window.pageYOffset + 100;

      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${section.id}`) {
              link.classList.add('active');
            }
          });
        }
      });
    }

    window.addEventListener('scroll', setActiveLink);
    window.addEventListener('load', setActiveLink);

  // ================ BACK TO TOP BUTTON ================
  const backToTopButton = document.getElementById('back-to-top');
  window.addEventListener('scroll', function() {
    backToTopButton.classList.toggle('visible', window.pageYOffset > 300);
  });
  
  backToTopButton.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // ================ FORM SUBMISSION ================
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = {
      name: document.getElementById('name').value,
      email: document.getElementById('email').value,
      subject: document.getElementById('subject').value,
      message: document.getElementById('message').value
    };
    console.log('Form submitted:', formData);
    alert(currentLang === 'ar' 
      ? 'شكراً لتواصلك معنا! سنرد عليك قريباً.' 
      : 'Thank you for contacting us! We will get back to you soon.');
    this.reset();
  });

  // ================ SMOOTH SCROLLING ================
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 70,
            behavior: 'smooth'
          });
        }
      });
    });
  });
  

  // ================ Nums ================
  // number count
  let nums = document.querySelectorAll(".nums .num");
  let section = document.querySelector(".about");
  let started = false;

  window.onscroll = function () {
      if (window.scrollY >= section.offsetTop) {
          if (!started) {
              nums.forEach((num) => startCount(num));
          }
          started = true;
      }
  };

  function startCount(el) {
      let goal = el.dataset.goal;
      let count = setInterval(() => {
          el.textContent++;
          if (el.textContent == goal) {
              clearInterval(count);
          }
      }, 1500 / goal);
  }

  // ================ IMAGE SLIDER ================
function initializeSlider() {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const pagination = document.querySelector('.pagination');
  let currentIndex = 0;

  // Clear existing pagination and event listeners
  pagination.innerHTML = '';
  prevBtn.replaceWith(prevBtn.cloneNode(true));
  nextBtn.replaceWith(nextBtn.cloneNode(true));

  // Create pagination dots
  slides.forEach((_, index) => {
    const dot = document.createElement('button');
    dot.classList.add('pagination-dot');
    dot.addEventListener('click', () => goToSlide(index));
    pagination.appendChild(dot);
  });

  function updatePagination() {
    document.querySelectorAll('.pagination-dot').forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  }

  function goToSlide(index) {
    currentIndex = (index + slides.length) % slides.length;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    updatePagination();
  }

  function nextSlide() {
    goToSlide(currentIndex + 1);
  }

  function prevSlide() {
    goToSlide(currentIndex - 1);
  }

  // Event listeners for manual controls
  document.querySelector('.prev').addEventListener('click', prevSlide);
  document.querySelector('.next').addEventListener('click', nextSlide);

  // Initialize
  goToSlide(0);
}

// Initialize slider on load and language change
document.addEventListener('DOMContentLoaded', initializeSlider);
document.addEventListener('langChange', initializeSlider);
  </script>
</body>
</html>