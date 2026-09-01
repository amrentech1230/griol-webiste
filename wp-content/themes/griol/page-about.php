<?php
/*
 * Template Name: About
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/about.jpg" alt="About Griol">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">About Us</p>
    <h1>Independent UK fire door experts</h1>
    <p>Griol Fire Protection helps responsible persons, facilities teams and contractors meet — and exceed — UK fire safety obligations.</p>
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> About Us</nav>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="container-page about-who-we-are">
  <img class="about-who-we-are-img" src="<?php echo $dir; ?>/fire-door.jpg" alt="Certified fire door" loading="lazy" width="1280" height="896">
  <div>
    <p class="eyebrow">Who We Are</p>
    <h2 class="about-who-we-are-title">Compliance is non-negotiable. We make it manageable.</h2>
    <p class="about-who-we-are-text">Founded by passive fire protection specialists, Griol exists to bridge the gap between regulation and real-world building management. We deliver clear, defensible inspection evidence — and the expert remedial works to close every defect.</p>
    <p class="about-who-we-are-text">Our team operates exclusively in the fire door sector. That focus means deeper technical expertise, better reporting and faster turnaround for our clients across the UK.</p>
  </div>
</section>

<!-- VALUES -->
<section class="about-values">
  <div class="container-page">
    <div class="values-grid">
      <?php
      $values = [
        ['t'=>'Our Mission','d'=>'To protect lives and property by making fire door compliance transparent, accountable and accessible to every UK responsible person.'],
        ['t'=>'Our Values','d'=>'Independence, integrity and technical excellence. We never compromise on standards or rush an inspection.'],
        ['t'=>'Fire Safety Expertise','d'=>'FDIS-certified inspectors with decades of combined field experience across commercial, residential and public sectors.'],
        ['t'=>'UK Compliance Commitment','d'=>'Aligned to BS 8214, BS 9999, the Regulatory Reform Order and the Fire Safety (England) Regulations 2022.'],
      ];
      foreach ($values as $v): ?>
      <div class="value-card">
        <div class="icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
        </div>
        <h3><?php echo $v['t']; ?></h3>
        <p><?php echo $v['d']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PROMISE -->
<section class="about-promise">
  <p class="eyebrow">Our Promise</p>
  <h2>Every door, documented. Every defect, addressed.</h2>
  <p class="about-promise-text">When you partner with Griol, you get more than an inspection — you get a long-term compliance partner.</p>
  <a href="<?php echo home_url('/contact'); ?>" class="btn-fire about-promise-btn">Talk to our team</a>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>
