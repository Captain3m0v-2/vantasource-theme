<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: transparent; transition: 0.3s;">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="<?php echo home_url(); ?>">
        <i class="bi bi-box-seam me-2"></i>VANTASOURCE
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link text-white px-3" href="<?php echo home_url('/about'); ?>">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white px-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo home_url('/services'); ?>">All Services</a></li>
            <li><a class="dropdown-item" href="<?php echo home_url('/service-sourcing'); ?>">Product Sourcing</a></li>
            <li><a class="dropdown-item" href="<?php echo home_url('/service-logistics'); ?>">Logistics</a></li>
            <li><a class="dropdown-item" href="<?php echo home_url('/service-quality'); ?>">Quality Control</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white px-3" href="<?php echo home_url('/portfolio'); ?>">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white px-3" href="<?php echo home_url('/contact'); ?>">Contact</a>
        </li>
        
        <li class="nav-item ms-lg-2">
          <a class="nav-link btn btn-primary rounded-pill text-white px-4 py-2" href="<?php echo home_url('/quote'); ?>">
            <i class="bi bi-file-earmark-text me-2"></i>Get Quote
          </a>
        </li>
        
        <li class="nav-item dropdown ms-lg-3">
            <a class="nav-link dropdown-toggle btn btn-outline-light rounded-pill px-3 py-1" href="#" role="button" data-bs-toggle="dropdown">
                <i class="bi bi-globe me-1"></i>EN
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">EN (English)</a></li>
                <li><a class="dropdown-item" href="#">FR (Français)</a></li>
                <li><a class="dropdown-item" href="#">AR (العربية)</a></li>
                <li><a class="dropdown-item" href="#">HI (हिंदी)</a></li>
                <li><a class="dropdown-item" href="#">ZH (中文)</a></li>
                <li><a class="dropdown-item" href="#">ES (Español)</a></li>
            </ul>
        </li> 
      </ul>
    </div>
  </div>
</nav>

<script>
  // Navbar background on scroll
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>