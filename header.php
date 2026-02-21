<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="visually-hidden-focusable" href="#primary-content">Skip to content</a>

<!-- ================================
     PRIMARY NAVBAR (Corporate)
==================================== -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand fw-bold fs-4 text-dark" href="<?php echo esc_url(home_url('/')); ?>">
      <i class="bi bi-box-seam me-2 text-primary"></i>VANTASOURCE
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo esc_url(home_url('/shop/')); ?>">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle" href="#" id="moreDropdown" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="moreDropdown">
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/quote/')); ?>">Get Quote</a></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/services/')); ?>">All Services</a></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/service-sourcing/')); ?>">Product Sourcing</a></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/service-logistics/')); ?>">Logistics</a></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/service-quality/')); ?>">Quality Control</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Sales</a></li>
          </ul>
        </li>

        <!-- Sign in -->
        <li class="nav-item ms-lg-2">
          <a class="btn btn-outline-secondary rounded-pill px-3 py-2" href="<?php echo esc_url( home_url( '/login/' ) ); ?>">
            <i class="bi bi-person me-2"></i>Sign in
          </a>
        </li>

        <!-- Language Dropdown -->
        <li class="nav-item dropdown ms-lg-3">
          <a class="btn btn-outline-secondary rounded-pill px-3 py-2 dropdown-toggle" href="#"
             id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-globe me-1"></i>EN
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
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

<!-- Page content wrapper target for skip-link -->
<main id="primary-content">
