<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/brand-logo-removebg-preview.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ================= HEADER / NAV ================= -->
  <header class="header-nav" id="header">
    <div class="nav-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrapper" aria-label="The Grit Project Home">
        <div class="logo-icon-container">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/brand-logo-removebg-preview.png" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img logo-img-animated">
        </div>
      </a>
      
      <button class="mobile-menu-btn" aria-label="Toggle Navigation Menu" aria-expanded="false">☰</button>
      
      <nav class="nav-links-wrapper">
        <ul class="nav-links">
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/the-grit/' ) ); ?>">The Grit</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/the-problem/' ) ); ?>">The Problem</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/what-you-get/' ) ); ?>">What You Get</a></li>
          <li class="nav-item"><a href="<?php echo esc_url( home_url( '/join-now/' ) ); ?>" class="nav-cta">Join Now</a></li>
        </ul>
      </nav>
    </div>
  </header>
