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
        Certified Fire Door 
        <span class="text-fire">Inspection</span> &amp; Compliance Specialists
      </h1>

      <p class="hero-subtitle">
        Protecting people, property and reputation across the UK with 
        FDIS-certified inspections, maintenance and remedial works.
      </p>

      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-fire">
          Request Inspection
        </a>

        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-outline">
          Contact Us
        </a>
      </div>

      <div class="hero-stats">
        <div>
          <div class="hero-stat-num">15+</div>
          <div class="hero-stat-label">Years of expertise</div>
        </div>

        <div>
          <div class="hero-stat-num">50,000+</div>
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

        <h3>Request a Quote</h3>

        <p>
          Tell us about your project and our team will contact you shortly.
        </p>

        <?php get_template_part('template-parts/contact-form'); ?>

      </div>

    </div>

  </div>

</section>

<!-- TRUST BAR -->
<section class="trust-bar">
  <div class="container-page trust-bar-inner">
    <?php foreach (['FDIS Certified','BM TRADA Aligned','ISO 9001','CHAS Accredited','SafeContractor'] as $b): ?>
    <div class="trust-item">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
      <span><?php echo $b; ?></span>
    </div>
    <?php endforeach; ?>
  </div>
</section>

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
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">A trusted UK partner in passive fire protection</h2>
    <p style="margin-top:1.25rem;color:var(--muted-fg);line-height:1.7;">Griol Fire Protection delivers end-to-end fire door services to property managers, contractors and responsible persons across the UK. Our FDIS-qualified team combines technical expertise with auditable digital reporting — so you stay ahead of the Fire Safety Act 2021 and Regulatory Reform Order.</p>
    <ul class="about-list">
      <?php foreach (['Independent, conflict-free inspections','Digital evidence packs delivered within 48 hours','Nationwide coverage with local engineers'] as $item): ?>
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
      <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">End-to-end fire door services</h2>
      <p style="margin-top:1rem;color:var(--muted-fg);">From inspection to installation, we keep your buildings compliant and your occupants safe.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        ['icon'=>'clipboard','title'=>'Fire Door Inspections','desc'=>'BM TRADA-aligned visual inspections and detailed condition reports.','url'=>'/services/fire-door-inspections'],
        ['icon'=>'wrench','title'=>'Fire Door Maintenance','desc'=>'Planned maintenance to keep doors compliant and operational.','url'=>'/services/fire-door-maintenance'],
        ['icon'=>'hammer','title'=>'Fire Door Installation','desc'=>'Certified installation of FD30 / FD60 / FD90 fire door sets.','url'=>'/services/fire-door-installation'],
        ['icon'=>'shield','title'=>'Fire Door Repairs','desc'=>'Rapid remedial works — seals, closers, hinges, hardware.','url'=>'/services/fire-door-repairs'],
        ['icon'=>'file','title'=>'Compliance Checks','desc'=>'Regulatory Reform Order audits with digital evidence packs.','url'=>'/services/compliance-checks'],
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
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Compliance-first. Evidence-driven. Always on time.</h2>
    <div class="why-grid">
      <?php
      $why = [
        ['t'=>'FDIS Certified Team','d'=>'Every inspector is independently certified.'],
        ['t'=>'Audit-Ready Reports','d'=>'Digital records for your responsible person.'],
        ['t'=>'Rapid Response','d'=>'Site visits within 48 hours.'],
        ['t'=>'Independent & Honest','d'=>'No conflict of interest with manufacturers.'],
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
  <img src="<?php echo $dir; ?>/fire-door.jpg" alt="Certified fire door" loading="lazy" style="border-radius:1rem;box-shadow:var(--shadow-elegant);width:100%;" width="1280" >
</section>

<!-- INDUSTRIES -->
<section class="industries">
  <div class="container-page">
    <p class="eyebrow">Industries Served</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Trusted across UK sectors</h2>
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
      <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">Frequently asked questions</h2>
    </div>
    <?php
    $faqs = [
      ['q'=>'How often should fire doors be inspected?','a'=>'Under the Regulatory Reform (Fire Safety) Order 2005 and the Fire Safety (England) Regulations 2022, fire doors in communal areas of high-rise residential buildings must be inspected quarterly, and flat entrance doors annually. Commercial buildings should be inspected at least every 6 months.'],
      ['q'=>'Are your inspectors qualified?','a'=>'Yes — all our inspectors hold recognised UK qualifications including FDIS (Fire Door Inspection Scheme) certification and follow BM TRADA Q-Mark guidance.'],
      ['q'=>'Do you provide a digital report?','a'=>'Every inspection is delivered as a digital report with photographs, defect grading and a prioritised remediation plan.'],
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
