<?php
/*
 * Template Name: About
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>
<style>
  .about-values .values-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.about-values .value-card:last-child {
    grid-column: 1 / -1;
}
</style>
<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/about.jpg" alt="About Griol">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">About Us</p>
    <h1>Independent UK Fire Door Compliance Specialists</h1>
    <p>Griol Fire Protection helps building owners, facilities teams and contractors manage fire door compliance with confidence. We provide expert inspections, detailed reporting and remedial solutions that help keep buildings safe and meet UK fire safety requirements.</p>
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> About Us</nav>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="container-page about-who-we-are">
  <img class="about-who-we-are-img" src="<?php echo $dir; ?>/fire-door.jpg" alt="Certified fire door" loading="lazy" width="1280" height="896">
  <div>
    <p class="eyebrow">Who We Are</p>
    <h2 class="about-who-we-are-title">Practical fire safety expertise built around compliance</h2>
    <p class="about-who-we-are-text">Fire door compliance can feel complex. Regulations change, responsibilities increase, and small defects can create serious risks.</p>
    <p class="about-who-we-are-text">Griol Fire Protection was founded by passive fire protection specialists who understand the challenges faced by responsible persons and property teams. We help identify issues early and provide clear evidence that supports effective decision making.</p>
    <p class="about-who-we-are-text">Our specialists focus solely on fire doors. That focus means deeper technical expertise, better reporting and faster turnaround for our clients across the UK.</p>
  </div>
</section>

<!-- VALUES -->
<section class="about-values">
  <div class="container-page">
    <div class="values-grid">
      <?php
          $values = [

              [
                  't' => 'Our Mission',
                  'd' => 'To protect lives and property by making fire door compliance transparent, accountable and accessible to every UK responsible person. We help organisations understand their responsibilities and take the right steps to protect people and property.'
              ],

              [
                  't' => 'Our Values',
                  'd' => 'We believe fire safety assessments should always be honest and evidence based. Our recommendations are based on technical findings rather than unnecessary work. There is no compromising on standards and time limits in any of our inspections.'
              ],

              [
                  't' => 'Fire Safety Expertise',
                  'd' => 'We have a professional team with years of experience, and all of our inspectors are FDIS certified. We can provide our services on any property, whether it is residential, commercial, or public property.'
              ],

              [
                  't' => 'UK Compliance Commitment',
                  'd' => 'Our fire door inspections are carried out in line with recognised UK fire safety standards and guidance, including BS 8214, BS 9999, the Regulatory Reform (Fire Safety) Order 2005 and the Fire Safety (England) Regulations 2022.'
              ],

              [
                  't' => 'Our Promise',
                  'd' => 'Every door inspected. Every issue clearly reported. Griol Fire Protection provides more than fire door inspections. Our clients put their trust in us because we help them minimise risks and protect their properties.'
              ],

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
  <h2>Talk to our team</h2>
  <p class="about-promise-text">When you partner with Griol, you get more than an inspection — you get a long-term compliance partner.</p>
  <a href="<?php echo home_url('/contact'); ?>" class="btn-fire about-promise-btn">Talk to our team</a>
</section>
<?php get_footer(); ?>
