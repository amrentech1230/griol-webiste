<?php
/*
 * Template Name: Home
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- HERO -->
<section class="hero split-hero">

  <!-- Background Image -->
  <img class="hero-img" 
       src="<?php echo esc_url($dir . '/hero-inspection.jpg'); ?>" 
       alt="Fire door inspection" 
       width="1920" 
       height="1280">

  <div class="hero-overlay"></div>

  <div class="container-page hero-content fade-up">

    <!-- LEFT CONTENT -->
    <div class="hero-left">

      <div class="hero-badge">
        <span class="hero-badge-dot"></span> UK Certified Specialists
      </div>

      <h1 class="hero-title">
        Stay One Step Ahead with
        <span class="text-fire">Professional Fire</span> &amp; Door Inspections Businesses Trust
        
      </h1>

      <p class="hero-subtitle">
        Protect what matters with trusted fire door services across London. Our FDIS-certified inspections inspect, maintain, install, and replace fire doors to the highest standards.
      </p>

      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-fire">
          Book Your Fire Door Inspection
        </a>

        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-outline">
          Speak to a Fire Safety Expert
        </a>
      </div>

      <div class="hero-stats">
        <div>
          <div class="hero-stat-num">8+</div>
          <div class="hero-stat-label">Years of expertise</div>
        </div>

        <div>
          <div class="hero-stat-num">1000+</div>
          <div class="hero-stat-label">Doors inspected</div>
        </div>

        <div>
          <div class="hero-stat-num">FDIS</div>
          <div class="hero-stat-label">Certified inspectors</div>
        </div>

        <div>
          <div class="hero-stat-num">24/7</div>
          <div class="hero-stat-label">Emergency response</div>
        </div>
      </div>

    </div>

    <!-- RIGHT FORM -->
    <div class="hero-form-wrap">

      <div class="hero-form-card">

        <h3 style="background: #c0392b;padding: 10px;border-radius: var(--radius);color:#fff;text-align:center">Request a Quote</h3>

        <p style="text-align:center">
          Tell us about your project and our team will contact you shortly.
        </p>

        <?php get_template_part('template-parts/contact-form'); ?>

      </div>

    </div>

  </div>

</section>

<!-- TRUST BAR -->
<!--<section class="trust-bar">-->
<!--  <div class="container-page trust-bar-inner">-->
<!--    <?php foreach (['FDIS Certified','ISO 9001','CHAS Accredited','SafeContractor'] as $b): ?>-->
<!--    <div class="trust-item">-->
<!--      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>-->
<!--      <span><?php echo $b; ?></span>-->
<!--    </div>-->
<!--    <?php endforeach; ?>-->
<!--  </div>-->
<!--</section>-->

<!-- ABOUT PREVIEW -->
<section class="container-page about-preview">
  <div class="about-img-wrap">
    <img src="<?php echo $dir; ?>/about.jpg" alt="UK commercial building" loading="lazy" width="1280" height="896">
    <div class="about-badge" style="position:absolute;bottom:-1.5rem;right:-1.5rem;background:var(--fire);color:#fff;padding:1.5rem;border-radius:.75rem;box-shadow:var(--shadow-fire);max-width:200px;">
      <div class="about-badge-num">100%</div>
      <div class="about-badge-text">Compliance pass-rate post remediation</div>
    </div>
  </div>
  <div>
    <p class="eyebrow">About Griol</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Protecting Buildings Starts with Protecting Every Fire Door</h2>
    <p style="margin-top:1.25rem;color:var(--muted-fg);line-height:1.7;">Behind every safe building is a fire door that performs exactly as it should. Griol Fire Protection offers professional fire door inspections London, along with other services like maintenance, installation, and fire door replacements for keeping you compliant and assured.</p>
    <ul class="about-list">
      <?php foreach (['Independently performed with no hidden agenda', 'Evidence-based and compliance-focused reports', 'Fire door services customized for your facility'] as $item): ?>
      <li>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span><?php echo $item; ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
    <a href="<?php echo home_url('/about'); ?>" class="link-fire" style="margin-top:2rem;">
      Learn more about us
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </div>
</section>

<!-- SERVICES -->
<section class="services-section">
  <div class="container-page">
    <div style="max-width:40rem;">
      <p class="eyebrow">Our Services</p>
      <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Complete Fire Door Services, All Under One Roof</h2>
      <p style="margin-top:1rem;color:var(--muted-fg);">Whether it is fire door inspections London or any other service you may require, we can take care of all your requirements in order to ensure successful inspection of your property.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        ['icon'=>'clipboard','title'=>'Fire Door Inspections','desc'=>'Be careful with possible risks that may become serious problems in the future. Our professional fire door inspection service will help you to be assured that your fire doors are working perfectly.','url'=>'/services/fire-door-inspections'],
        ['icon'=>'wrench','title'=>'Fire Door Maintenance','desc'=>'Fire doors should be maintained in good condition through fire door maintenance. Maintenance not only ensures extended service life but also decreased maintenance costs.','url'=>'/services/fire-door-maintenance'],
        ['icon'=>'hammer','title'=>'Fire Door Installation','desc'=>'As a leading fire door installation company, we install approved fire doors accurately. We guarantee your safety and compliance with all rules and regulations.','url'=>'/services/fire-door-installation'],
        ['icon'=>'shield','title'=>'Fire Door Repairs','desc'=>'Whether it is your seals, hardware or other parts that do not work, we can repair your fire doors to make them operational again.','url'=>'/services/fire-door-repairs'],
        ['icon'=>'file','title'=>'Compliance Checks','desc'=>'Don’t fall behind on your fire code regulations. Ensure that you are properly prepared and compliant with our full compliance audits and digital reports.','url'=>'/services/compliance-checks'],
      ];
      foreach ($services as $s): ?>
      <a href="<?php echo home_url($s['url']); ?>" class="service-card">
        <div class="service-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
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
  </div>
</section>

<!-- WHY US -->
<section class="container-page why-us">
  <div>
    <p class="eyebrow">Why Choose Griol</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">More Than Fire Door Services: A Partner You Can Count On</h2>
     <p style="margin-top:1rem;color:var(--muted-fg);">The choice of the right fire door installation company does not just involve meeting your compliance needs alone. This is about dealing with a group of professionals who will offer you complete fire door maintenance and inspection services from beginning to end.</p>
    <div class="why-grid">
      <?php
      $why = [
        ['t'=>'Certified Expertise','d'=>'Our experts execute all fire door inspections with perfection and compliance in mind.'],
        ['t'=>'Digital Reports','d'=>'Get detailed reports online along with photos and recommendations.'],
        ['t'=>'Fire Doors Services','d'=>'We offer services in all phases, such as fire door installation, maintenance, and fire door replacement.'],
        ['t'=>'Fast & Reliable Service','d'=>'We can offer you efficient and reliable fire door services to protect your building.'],
      ];
      foreach ($why as $w): ?>
      <div class="why-item">
        <div class="why-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
        </div>
        <div>
          <h4><?php echo $w['t']; ?></h4>
          <p><?php echo $w['d']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <img src="https://griolfireprotection.co.uk/wp-content/uploads/2026/05/compliance.png" alt="Certified fire door" loading="lazy" style="border-radius:1rem;box-shadow:var(--shadow-elegant);width:100%;" width="1280" >
</section>

<!-- INDUSTRIES -->
<section class="industries">
  <div class="container-page">
    <p class="eyebrow">Industries Served</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Trusted Across Greater London and Home Counties</h2>
    <div class="industries-grid">
      <?php foreach (['Commercial Offices','Hotels & Hospitality','Education','Healthcare','Industrial','Housing Associations'] as $ind): ?>
      <div class="industry-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        <p><?php echo $ind; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="container-page testimonials">
  <div style="max-width:40rem;margin-inline:auto;text-align:center;">
    <p class="eyebrow">Client Trust</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">What our clients say</h2>
  </div>
  <div class="testimonials-grid">
    <?php
    $testimonials = [
      ['name'=>'Sarah Whitfield','role'=>'Facilities Manager, London','text'=>"Griol's quarterly inspections gave us a clear, audit-ready evidence trail. Professional team, on-time every visit."],
      ['name'=>"James O'Connor",'role'=>'Estates Director, Manchester','text'=>'Identified critical defects across 240 doors and managed remediation end-to-end. Outstanding compliance partner.'],
      ['name'=>'Priya Shah','role'=>'Health & Safety Lead, Birmingham','text'=>'The reports are detailed and easy to share with our responsible person. Highly recommended.'],
    ];
    foreach ($testimonials as $t): ?>
    <figure class="testimonial-card">
      <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <blockquote>"<?php echo $t['text']; ?>"</blockquote>
      <figcaption>
        <div class="name"><?php echo $t['name']; ?></div>
        <div class="role"><?php echo $t['role']; ?></div>
      </figcaption>
    </figure>
    <?php endforeach; ?>
  </div>
</section>

<!-- FAQ PREVIEW -->
<section class="faq-section">
  <div class="container-page" style="max-width:48rem;">
    <div style="text-align:center;margin-bottom:3rem;">
      <p class="eyebrow">FAQ</p>
      <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Frequently Asked Questions</h2>
    </div>
    <?php
    $faqs = [
      ['q'=>'How often should a fire door inspection be carried out?','a'=>'Fire doors should usually be inspected every six months. High traffic buildings may need more frequent checks. This includes schools, hospitals, and residential blocks.'],
      ['q'=>'Why are fire door inspections important?','a'=>'During a fire door inspection, it is possible to discover seals that are not working properly, faulty hinges, and hardware problems. All these problems can make a fire door non-operational in case of a fire.'],
      ['q'=>'Do you only provide fire door inspections in London?','a'=>'We provide fire door inspections in London for commercial and residential properties. We can inspect one building or manage a large property portfolio. Our team tailors each service to your needs.'],
      ['q'=>'Can you repair a fire door, or will it need replacing?','a'=>'Not every damaged fire door needs replacement. We first inspect its condition, then recommend a repair or fire door replacement accordingly. Our advice stays clear and practical.'],
      ['q'=>'What fire door services do you provide?','a'=>'We provide fire door inspection and repair services. We also offer installation, maintenance, and replacement of fire doors. We can schedule either a one time inspection or regular maintenance of your fire doors.'],
    ];
    foreach ($faqs as $f): ?>
    <details class="faq-item">
      <summary><?php echo $f['q']; ?><span class="toggle">+</span></summary>
      <p><?php echo $f['a']; ?></p>
    </details>
    <?php endforeach; ?>
    <div style="text-align:center;margin-top:2rem;">
      <a href="<?php echo home_url('/faq'); ?>" class="link-fire">
        View all FAQs
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>
