<?php
// Expected $args: title, subtitle, image, intro, benefits[], process[], faqs[], service_name
/** @var array $args */
$args = $args ?? [];
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir . '/' . $args['image']; ?>" alt="<?php echo esc_attr($args['title']); ?>">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Service</p>
    <h1><?php echo $args['title']; ?></h1>
    <p><?php echo $args['subtitle']; ?></p>
    <nav class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span>
      <a href="<?php echo home_url('/services'); ?>">Services</a> <span>/</span>
      <?php echo $args['title']; ?>
    </nav>
  </div>
</section>

<!-- DETAIL -->
<section class="container-page service-detail">
  <div>
    <p class="eyebrow">Overview</p>
    <h2 class="service-detail-title"><?php echo $args['service_name']; ?> you can rely on</h2>
    <p class="intro"><?php echo $args['intro']; ?></p>

    <h3 class="service-detail-heading">Key benefits</h3>
    <div class="benefits-grid">
      <?php foreach ($args['benefits'] as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">Our process</h3>
    <div class="process-list">
      <?php foreach ($args['process'] as $i => $step): ?>
      <div class="process-step">
        <div class="step-num"><?php echo $i+1; ?></div>
        <div>
          <h4 class="step-title"><?php echo $step['title']; ?></h4>
          <p class="step-desc"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">Common questions</h3>
    <div class="faq-list-wrapper">
      <?php foreach ($args['faqs'] as $f): ?>
      <details class="faq-item">
        <summary><?php echo $f['q']; ?><span class="toggle">+</span></summary>
        <p><?php echo $f['a']; ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
  <aside class="service-sidebar">
    <?php
    $current_slug = basename(get_permalink());
    $slug_images = [
        'fire-door-inspections' => 'inspection.png',
        'fire-door-maintenance'  => 'maintamnce.png',
        'fire-door-installation' => 'installation.png',
        'fire-door-repairs'      => 'repair.png',
    ];
    $uploads_base = home_url('/wp-content/uploads/2026/05');
    $aside_img = isset($slug_images[$current_slug])
        ? $uploads_base . '/' . $slug_images[$current_slug]
        : $uploads_base . '/compliance.png';
    ?>
    <img class="sidebar-image" src="<?php echo esc_url($aside_img); ?>" alt="<?php echo esc_attr($args['service_name']); ?>" loading="lazy" width="1280">

    <div class="sidebar-header">
      <h3>Request a quote</h3>
      <p>Tell us about your site — we'll respond within one business day.</p>
    </div>
    <?php get_template_part('template-parts/contact-form', null, ['service' => $args['service_name']]); ?>
    <a href="<?php echo home_url('/services'); ?>" class="link-fire sidebar-link">
      All services
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </aside>
</section>

<?php get_template_part('template-parts/cta'); ?>
