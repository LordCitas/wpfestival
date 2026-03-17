<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header position-absolute w-100 py-3" style="z-index: 100;">
      <nav class="navbar navbar-expand-lg px-0 w-100">
        <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none logo-wrapper d-flex align-items-center gap-2">
            <i class="fa-solid fa-compact-disc logo-icon display-4"></i>
            <div class="logo-text d-flex flex-column justify-content-center">
              <span class="logo-title fw-bold text-white mb-0" style="font-size: 2.2rem; line-height: 1;">WP</span>
              <span class="logo-sub fw-bold" style="font-size: 0.7rem; letter-spacing: 2px;">MUSIC FESTIVAL</span>
            </div>
          </a>
        </div>
        <button class="navbar-toggler border-0 shadow-none text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="filter: invert(1) grayscale(100%) brightness(200%);">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end bg-dark bg-lg-transparent p-4 p-lg-0 mt-3 mt-lg-0 rounded shadow-lg shadow-lg-none" id="navbarNav">
          <ul class="navbar-nav gap-4 mb-0 list-unstyled text-center text-lg-start w-100 align-items-center justify-content-lg-end">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white text-decoration-none fw-medium opacity-75 nav-link-custom">WP FESTIVAL</a></li>
            <li><a href="<?php echo esc_url(home_url('/djs')); ?>" class="text-white text-decoration-none fw-medium opacity-75 nav-link-custom">DJS</a></li>
            <li><a href="<?php echo esc_url(home_url('/presentaciones')); ?>" class="text-white text-decoration-none fw-medium opacity-75 nav-link-custom">Presentaciones</a></li>
            <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-white text-decoration-none fw-medium opacity-75 nav-link-custom">Blog</a></li>
            <li><a href="#contacto" class="text-white text-decoration-none fw-medium opacity-75 nav-link-custom">Contacto</a></li>
          </ul>
        </div>
      </div>
      </nav>
    </header>
