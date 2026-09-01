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
<section class="container-page" style="padding:5rem 0;display:grid;grid-template-columns:1.4fr 1fr;gap:3rem;">
  <div>
    <p class="eyebrow">Overview</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);"><?php echo $args['service_name']; ?> you can rely on</h2>
    <p style="margin-top:1.25rem;color:var(--muted-fg);font-size:1.125rem;line-height:1.7;"><?php echo $args['intro']; ?></p>

    <h3 style="margin-top:3rem;font-size:1.5rem;font-weight:700;">Key benefits</h3>
    <div style="margin-top:1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
      <?php foreach ($args['benefits'] as $b): ?>
      <div style="display:flex;gap:.75rem;align-items:flex-start;font-size:.9rem;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2" style="flex-shrink:0;margin-top:.15rem;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 style="margin-top:3rem;font-size:1.5rem;font-weight:700;">Our process</h3>
    <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:1rem;">
      <?php foreach ($args['process'] as $i => $step): ?>
      <div style="display:flex;gap:1.25rem;background:var(--card);border:1px solid var(--border);border-radius:.75rem;padding:1.5rem;">
        <div style="width:2.5rem;height:2.5rem;border-radius:.5rem;background:var(--fire);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;flex-shrink:0;"><?php echo $i+1; ?></div>
        <div>
          <h4 style="font-weight:700;"><?php echo $step['title']; ?></h4>
          <p style="margin-top:.25rem;font-size:.875rem;color:var(--muted-fg);"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 style="margin-top:3rem;font-size:1.5rem;font-weight:700;">Common questions</h3>
    <div style="margin-top:1.5rem;">
      <?php foreach ($args['faqs'] as $f): ?>
      <details class="faq-item">
        <summary><?php echo $f['q']; ?><span class="toggle">+</span></summary>
        <p><?php echo $f['a']; ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
  <aside style="position:sticky;top:7rem;align-self:start;">
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
    <img src="<?php echo esc_url($aside_img); ?>" alt="<?php echo esc_attr($args['service_name']); ?>" loading="lazy" style="border-radius:1rem;box-shadow:var(--shadow-elegant);width:100%;margin-bottom:1.5rem;" width="1280">

    <div style="background:var(--charcoal);color:#fff;border-radius:.75rem;padding:1.5rem;margin-bottom:1.5rem;">
      <h3 style="font-size:1.25rem;">Request a quote</h3>
      <p style="margin-top:.5rem;font-size:.875rem;color:rgba(255,255,255,.7);">Tell us about your site — we'll respond within one business day.</p>
    </div>
    <?php get_template_part('template-parts/contact-form', null, ['service' => $args['service_name']]); ?>
    <a href="<?php echo home_url('/services'); ?>" class="link-fire" style="margin-top:1.5rem;display:inline-flex;">
      All services
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left:.5rem;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </aside>
</section>

<?php get_template_part('template-parts/cta'); ?>
