<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('site-wrapper'); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container-page header-inner">

    <a href="<?php echo home_url('/'); ?>" class="site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Griol Fire Protection" width="120" height="48">
    </a>

    <nav class="main-nav">
      <a href="<?php echo home_url('/'); ?>">Home</a>
      <a href="<?php echo home_url('/about'); ?>">About Us</a>
      <div class="nav-dropdown">
        <a href="<?php echo home_url('/services'); ?>">
          Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </a>
        <div class="dropdown-menu">
          <div class="dropdown-inner">
            <a href="<?php echo home_url('/services'); ?>">All Services</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo home_url('/services/fire-door-inspections'); ?>">Fire Door Inspections</a>
            <a href="<?php echo home_url('/services/fire-door-maintenance'); ?>">Fire Door Maintenance</a>
            <a href="<?php echo home_url('/services/fire-door-installation'); ?>">Fire Door Installation</a>
            <a href="<?php echo home_url('/services/fire-door-repairs'); ?>">Fire Door Repairs</a>
            <a href="<?php echo home_url('/services/compliance-checks'); ?>">Compliance Checks</a>
            <a href="<?php echo home_url('/services/inspection-repair-cost'); ?>">Inspection & Repair Costs</a>
          </div>
        </div>
      </div>
      <a href="<?php echo home_url('/faq'); ?>">FAQ's</a>
      <a href="<?php echo home_url('/contact'); ?>">Contact Us</a>
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire nav-cta">Request Inspection</a>
    </nav>

    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
      <svg id="icon-menu" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
      </svg>
      <svg id="icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:none">
        <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </button>

  </div>

  <div class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav-inner container-page">
      <a href="<?php echo home_url('/'); ?>">Home</a>
      <a href="<?php echo home_url('/about'); ?>">About Us</a>
      <button class="mobile-services-toggle" id="mobile-services-toggle">
        Services
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="mobile-services-list" id="mobile-services-list">
        <a href="<?php echo home_url('/services'); ?>">All Services</a>
        <a href="<?php echo home_url('/services/fire-door-inspections'); ?>">Fire Door Inspections</a>
        <a href="<?php echo home_url('/services/fire-door-maintenance'); ?>">Fire Door Maintenance</a>
        <a href="<?php echo home_url('/services/fire-door-installation'); ?>">Fire Door Installation</a>
        <a href="<?php echo home_url('/services/fire-door-repairs'); ?>">Fire Door Repairs</a>
        <a href="<?php echo home_url('/services/compliance-checks'); ?>">Compliance Checks</a>
        <a href="<?php echo home_url('/services/inspection-repair-cost'); ?>">Inspection & Repair Costs</a>
      </div>
      <a href="<?php echo home_url('/faq'); ?>">FAQ's</a>
      <a href="<?php echo home_url('/contact'); ?>">Contact Us</a>
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire" style="margin-top:.75rem;text-align:center;">Request Inspection</a>
    </div>
  </div>
</header>

<main>
