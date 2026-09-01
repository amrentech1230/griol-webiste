<?php
/*
 * Template Name: Services
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/fire-door.jpg" alt="Fire door services">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Services</p>
    <h1>Fire door services that protect your building</h1>
    <p>A complete portfolio of passive fire protection services delivered by qualified UK engineers.</p>
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> Services</nav>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="container-page" style="padding:5rem 0;">
  <div class="services-grid">
    <?php
    $services = [
      ['title'=>'Fire Door Inspections','desc'=>'FDIS-certified inspections to BS 8214 with full digital reports.','url'=>'/services/fire-door-inspections'],
      ['title'=>'Fire Door Maintenance','desc'=>'Planned preventative maintenance to keep doors in compliant condition.','url'=>'/services/fire-door-maintenance'],
      ['title'=>'Fire Door Installation','desc'=>'Certified installation of FD30, FD60 and FD90 fire door sets.','url'=>'/services/fire-door-installation'],
      ['title'=>'Fire Door Repairs','desc'=>'Same-day remedial works including seals, closers and hardware.','url'=>'/services/fire-door-repairs'],
      ['title'=>'Compliance Checks','desc'=>'Regulatory Reform Order audits with prioritised remediation plans.','url'=>'/services/compliance-checks'],
    ];
    foreach ($services as $s): ?>
    <a href="<?php echo home_url($s['url']); ?>" class="service-card">
      <div class="service-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <h3><?php echo $s['title']; ?></h3>
      <p><?php echo $s['desc']; ?></p>
      <span class="learn-more">
        Learn more
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </span>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>
