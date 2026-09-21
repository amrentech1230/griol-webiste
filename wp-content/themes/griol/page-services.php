<?php
/*
 * Template Name: Services
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>
<!-- PAGE HERO -->
<section class="page-hero">
  <img
    class="page-hero-img"
    src="<?php echo esc_url($dir . '/fire-door.jpg'); ?>"
    alt="Fire door services"
  >

  <div class="page-hero-overlay"></div>

  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Services</p>

    <h1>Keep Your Fire Doors Safe, Compliant, and Ready</h1>

    <p>
     We help keep your fire doors safe, working properly, and in line with UK fire safety requirements. From routine inspections to repairs and installation, our experienced engineers provide the right service for your building.

    </p>

    <nav class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span>/</span>
      Services
    </nav>
  </div>
</section>


<!-- SERVICES GRID -->
<section class="container-page" style="padding:5rem 0;">

  <div class="services-grid">

    <?php

    $services = [

      [
        'title' => 'Fire Door Inspections',
        'desc'  => 'A fire door can look fine but still have problems that affect how it performs. Our FDIS-certified inspections follow BS 8214 guidance and come with a clear digital report.',
        'url'   => '/services/fire-door-inspections'
      ],

      [
        'title' => 'Fire Door Maintenance',
        'desc'  => 'We service and maintain components such as hinges, seals, closers, and hardware. This helps keep your fire doors operating correctly over time.',
        'url'   => '/services/fire-door-maintenance'
      ],

      [
        'title' => 'Fire Door Installation',
        'desc'  => 'We install FD30, FD60, and FD90 fire door sets for new and existing buildings. Each door set is fitted correctly to support its intended fire performance.',
        'url'   => '/services/fire-door-installation'
      ],

      [
        'title' => 'Fire Door Repairs',
        'desc'  => 'We fix defects affecting the operation and fire performance of your doors. Repairs can include seals, hinges, closers, latches, and other hardware.',
        'url'   => '/services/fire-door-repairs'
      ],

      [
        'title' => 'Compliance Checks',
        'desc'  => 'Your fire doors are inspected by us to ensure compliance with all fire safety standards. If there are any gaps, we make sure that the team informs you with proper reasoning.',
        'url'   => '/services/compliance-checks'
      ],

      [
        'title' => 'Inspection & Repair Costs',
        'desc'  => 'We review the condition of your fire doors and identify the work required. Our guidance helps you understand the likely inspection, repair, or replacement costs.',
        'url'   => '/services/inspection-repair-cost'
      ],

    ];

    foreach ($services as $s):
    ?>

      <a
        href="<?php echo esc_url(home_url($s['url'])); ?>"
        class="service-card"
      >

        <div class="service-icon">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            aria-hidden="true"
          >
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>

        <h3>
          <?php echo esc_html($s['title']); ?>
        </h3>

        <p>
          <?php echo esc_html($s['desc']); ?>
        </p>

        <span class="learn-more">
          Learn more

          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            aria-hidden="true"
          >
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </span>

      </a>

    <?php endforeach; ?>

  </div>

</section>


<section class="cta-section">
  <div class="container-page cta-inner">
    <div>
      <h2>Need a certified fire door inspection?</h2>
      <p>Book a no-obligation site survey to understand the condition of your fire doors and any work they may require.</p>
    </div>
    <div class="cta-actions">
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire">Request Inspection</a>
      <a href="tel:+447480998546" class="btn-outline-white">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        Call Now
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
