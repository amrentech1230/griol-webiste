<?php
/*
 * Template Name: Service – Fire Door Installation
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>
<style>
  .benefits-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.benefits-list .benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    width: 100%;
}

.benefits-list .benefit-icon {
    flex: 0 0 20px;
    margin-top: 3px;
}

.benefits-list .benefit-item span {
    line-height: 1.7;
}
</style>
<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/compliance.jpg" alt="Complete Door Compliance Checks for Safer, Smarter Buildings ">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Service</p>
    <h1>Reliable Fire Door Installation London by Certified Specialists </h1>
    <p>Regulatory Reform Order audits with full digital evidence packs.</p>
    <nav class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span>
      <a href="<?php echo home_url('/services'); ?>">Services</a> <span>/</span>
      Compliance Checks
    </nav>
  </div>
</section>

<!-- DETAIL -->
<section class="container-page service-detail">
  <div>
    <p class="intro">Ensure your buildings are safe by getting fire door installation London from an experienced fire door installer. Regardless of whether you require a new fire door installed or you are in need of a fire door replacement, we will provide you with a range of choices that are in accordance with all the most recent regulations.</p>

    <p class="intro">All the fire doors that we install are installed with great care to ensure proper operation and efficiency in the long term. Having years of experience, our team make sure to follow the current fire door rules when they are installing the doors. This way you can be sure that your property is safe and follows the rules.</p>

    <p class="intro">Our team can help you with all kinds of fire door installation work. We can put in one fire door. We can do big commercial fire door installation projects. Griol Fire Protection is here to help you with anything you need. Our team tries to disrupt your daily work as little as possible. Our goal is simple: we want to do work and provide you with solutions that you can count on for your building.</p>

    <h2 class="service-detail-heading">Fire Door Installation London You Can Trust</h2>
    <p class="intro">Fire door installation that suits your needs is crucial in order to ensure safety and compliance. Our expert team specializes in commercial fire door installation and replacement services, which ensures that all fire doors will be installed to the best possible quality and based on fire door regulations.</p> 
    <p class="intro">When you pick a professional fire door installer, you can be sure that they will do the job as described. We look at your building and figure out what kind of fire door you need. Then we make sure it is installed right. Whether you need a fire door or you need fire door replacement, our team will work quickly so we do not bother you too much.</p>
    <p class="intro">We follow all the standard rules about fire doors so you can be sure your building and the people in it are safe. We put in fire doors in lots of places, like offices, schools, homes, and businesses. Our fire door installation London services are built to last and keep you safe.</p>

    <h3 class="service-detail-heading">Why You Should Get A Professional To Install Your Fire Door?</h3>
   <p class="intro">A fire door is supposed to keep people and things safe during a fire. It will only work if it is put in correctly. When you choose a certified fire door installer, you can be sure that your fire door will be installed right. This gives you peace of mind because you know your building is safe and follows all the rules. Therefore, you should get a professional to install it so you can be sure they will work properly while keeping your building compliant.</p>
    <div class="benefits-grid">
      <?php
      $benefits = [
        'Improves Fire Safety : A fire door that is put in the right way helps to slow down the fire and the smoke. This gives people time to get out of the building safely. It also helps to keep the escape routes safe. It reduces the risk of the fire spreading to other parts of the building. Therefore, it is very important to have a fire door that works properly.',
        'Supports Compliance : Every time you put in a fire door, it should meet all the latest fire door regulations. If you get a professional to install a fire door, it helps to make sure that your fire doors meet all the requirements. It also reduces the risk of having problems during inspections or safety checks',
        'Ensures Reliable Performance : Every single part of a fire door is important. The fire door, the frame, the hinges, and the hardware all have to work properly. Proper fire door installation ensures your fire doors will work efficiently without any disruption every single time.',
        'Reduces Costs In The Long Run : Poor or incorrect installation can cause problems very soon, and you will have to fix it and maybe even replace it sooner than you should. If you get a professional person to install the fire door, it will last longer, and you will not have to spend much money to keep it working.',
        'Suitable for Every Project : Our fire door installation London service is suitable for projects of all sizes. We do everything from putting in a single door to installing fire doors for businesses. Our fire doors are safe and comply with the specified rules. ',
      ];
      $benefitsCount = count($benefits);
      foreach ($benefits as $index => $b):
        $isLastFullWidth = ($benefitsCount === 5 && $index === $benefitsCount - 1);
      ?>
      <div class="benefit-item<?php echo $isLastFullWidth ? ' benefit-item--full' : ''; ?>"<?php echo $isLastFullWidth ? ' style="grid-column: 1 / -1;"' : ''; ?>>
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

<h3 class="service-detail-heading">How Our Fire Door Installation Works</h3>

<div class="process-list">
  <?php
  $steps = [
    [
      'title' => 'Site Assessment',
      'desc'  => 'The needs for fire, premises, and doors are examined. After that, depending on the results obtained, the most suitable option will be recommended to you.',
      'points' => [
        '1. Assess the building layout and fire safety requirements.',
        '2. Recommend the most suitable fire door solution for your premises.'
      ]
    ],
    [
      'title' => 'Expert Installations',
      'desc'  => 'The fire door installation will be undertaken by our professional fire door installer, ensuring that we have followed all the recent fire door regulations.',
      'points' => [
        'Install all fire doors carefully with attention to the finer details.',
        'Make sure that all fitting processes are carried out properly in order to ensure reliability.'
      ]
    ],
    [
      'title' => 'Final Quality Checks',
      'desc'  => 'All tests for the fire doors must be carried out before installing them. It is necessary to do the final quality checks in order to make sure that everything will work correctly.',
      'points' => [
        'Reliability tests on fire doors are performed after their installation.',
        'The testing of the functionality of the fire doors will be done through checking their frame, seal, and operation.'
      ]
    ],
    [
      'title' => 'Certification & Ongoing Support',
      'desc'  => 'You will get certificates of installation, which show that your fire doors have been installed properly and are in compliance with the laws currently enforced. Along with this, you will get guidance about how to maintain your fire doors. In case replacement is required for your fire doors, we can advise you in this regard as well.',
      'points' => [
        'Keep your paperwork organized and up-to-date.',
        'Offer ongoing advice to help keep your fire doors performing effectively.'
      ]
    ],
  ];

  foreach ($steps as $i => $step): ?>
    
    <div class="process-step">
      
      <div class="step-num">
        <?php echo $i + 1; ?>
      </div>

      <div class="step-content">
        
        <h4 class="step-title">
          <?php echo $step['title']; ?>
        </h4>

        <p class="step-desc">
          <?php echo $step['desc']; ?>
        </p>

        <?php if (!empty($step['points'])): ?>
          <ul class="step-points">
            <?php foreach ($step['points'] as $point): ?>
              <li><?php echo $point; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

      </div>

    </div>

  <?php endforeach; ?>
</div>

    <h3 class="service-detail-heading">What We Check During Fire Door Installation</h3>
    <p class="intro">Our team follows the right approach and carefully installs every door to ensure they follow all the latest fire door regulations. We guarantee that all fire doors installed by us are reliable and functional. Moreover, we check all details for proper installation.</p>

        <div class="benefits-grid">
      <?php
      $benefits = [
        'Door Opening & Frame : We examine the fire door frame to ensure that it is appropriate and suitable. It is important that we have the right one in order to ensure it fits the new fire door.',
        'Fire Door Fit : We install the fire door into its rightful place. The fire door installation London team makes sure that it can open and close smoothly and that there are no gaps in the frame.',
        'Hardware and Ironmongery : Hinges, locks, handles, latches, and door closers are all installed correctly. Each component of the fire door is inspected for functionality to ensure that the fire door functions as designed.',
        'Final Installation Compliance Verification : After the installation process, we ensure that there is an examination of all parts of the fire door installation process. The fire door installation expert we have guarantees that everything meets the required standards.',       
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div> 

   <h3 class="service-detail-heading">Who Needs Fire Door Installation Services?</h3>
<div class="benefits-list benefits-grid">
    <?php
        $benefits = [
          'Landlords and Property Managers :Fire door installation for landlords and property managers is very important for their tenants’ safety and regulatory requirements. It is also an easy process when it comes to inspections and compliance.',

          'Commercial Buildings : Office buildings, retail outlets, and the hospitality industry require reliable fire doors. The fire door will assist in controlling fire and smoke while also safeguarding individuals.',

          'Public and Shared Properties : Fire doors are essential for schools and hospitals.  Nursing homes and apartment buildings also need to have fire doors installed. Installation will ensure safe escape for people in case of fire.',

          'New and Existing Buildings :Developers need fire doors in new projects. Owners of older properties may need new doors or fire door replacement when existing doors show damage or fail current standards. Professional installation suits projects of every size. A certified installer can do the full assessment of the property and recommend the right solution. This not only ensures that the building remains safe but is also compliant with required standards.',

          'UK Compliance & Fire Door Regulations : It is important for fire doors to be fitted according to the latest specifications. This not only ensures that they are effective but also complies with the latest specifications. Proper installation of the fire doors would ensure that fire and smoke do not travel beyond the doors. Being a certified fire door installer, Griol Fire Protection takes pride in installing fire doors in compliance with all industry standards. The team checks everything carefully from the start of the installation to ensure every fire door works properly. We also provide you with all the paperwork and help you with any guidance and recommendations needed so you can be sure your building is safe, follows the rules, and has the protection.',
        ];

    foreach ($benefits as $b):
    ?>
        <div class="benefit-item">
            <svg
                class="benefit-icon"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="var(--fire)"
                stroke-width="2"
                aria-hidden="true"
            >
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>

            <span><?php echo $b; ?></span>
        </div>
    <?php endforeach; ?>
</div>

    <h3 class="service-detail-heading">Why Choose Griol Fire Protection</h3>
  <p class="intro">Choosing the right people to install your fire door is just as important as choosing the right fire door. At Griol Fire Protection, we focus on delivering peace of mind by following the right approach and being compliant with all the current regulations.</p>
<div class="process-list">
  <?php
  $steps = [
    [
      'title' => 'Certified Specialists',
      'desc'  => 'Our certified fire door installers do every job carefully and precisely. We make sure every fire door is put in the way it is supposed to be.',
    ],
    [
      'title' => 'Compliant Solutions',
      'desc'  => 'We finish every job according to the current rules for fire doors. We help you keep your building safe and compliant so you can be confident about your fire door installation and your building.',
    ],
    [
      'title' => 'Reliable Service',
      'desc'  => 'We operate with efficiency without causing much disturbance in your work. It does not matter whether you are installing one fire door or several fire doors because you can always count on us to provide the best service.',
    ],
    [
      'title' => 'Ongoing Support',
      'desc'  => 'Help and advice do not end once we have installed your fire doors. We are there to offer you all the help and advice whenever you need them. ',
    ],
  ];

  foreach ($steps as $i => $step): ?>
    
    <div class="process-step">
      
      <div class="step-num">
        <?php echo $i + 1; ?>
      </div>

      <div class="step-content">
        
        <h4 class="step-title">
          <?php echo $step['title']; ?>
        </h4>

        <p class="step-desc">
          <?php echo $step['desc']; ?>
        </p>

        <?php if (!empty($step['points'])): ?>
          <ul class="step-points">
            <?php foreach ($step['points'] as $point): ?>
              <li><?php echo $point; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

      </div>

    </div>

  <?php endforeach; ?>
</div>

    <h3 class="service-detail-heading">Frequently Asked Questions</h3>
    <div class="faq-list-wrapper">
      <?php
      $faqs = [
        ['q' => 'Why should I choose a certified fire door installer?',  'a' => 'Certified fire door installers have the skills to install your fire doors correctly. This way, your fire doors will work properly and will meet all the rules required for your fire doors.'],
        ['q' => 'Do you provide commercial fire door installation?',    'a' => 'Yes. We are experts in fire door installation. We deliver our services to offices, flats, and schools. A few more places we provide our services to include hospitals, retail units, and other commercial buildings in London.'],
        ['q' => 'When is fire door replacement necessary?',          'a' => 'Fire door replacement becomes necessary if there is something wrong with your fire door. It could be because it is damaged or does not meet compliance requirements. Based on that, we will provide you with the appropriate solution. '],
        ['q' => 'Do your installations comply with fire door regulations?',  'a' => 'Yes. Each and every fire door is installed following the fire door standards. This makes sure that your building is safe and complies with the required standards.'],
        ['q' => 'Do you provide fire door installation London for existing buildings?',  'a' => 'Yes, we do provide fire door installation services to new buildings and also to existing buildings all across London.'],
        ['q' => 'How long does fire door installation take?',    'a' => 'The duration for installation will be based on the number of fire doors installed and how complex the installation process is. Our team is fast and efficient. We try to ensure that installation is done with minimal disruption.'],
      ];
      foreach ($faqs as $f): ?>
      <details class="faq-item">
        <summary><?php echo $f['q']; ?><span class="toggle">+</span></summary>
        <p><?php echo $f['a']; ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- SIDEBAR WITH DYNAMIC QUOTE FORM -->
  <aside class="service-sidebar">
    <?php
    $uploads_base = home_url('/wp-content/uploads/2026/05');
    $aside_img    = $uploads_base . '/compliance.png';
    ?>
    <img class="sidebar-image" src="<?php echo esc_url($aside_img); ?>" alt="Compliance Checks" loading="lazy" width="1280">

    <div class="sidebar-header">
      <h3>Request a quote</h3>
      <p>Tell us about your site — we'll respond within one business day.</p>
    </div>

    <?php get_template_part('template-parts/contact-form', null, ['service' => 'Compliance Checks']); ?>

    <a href="<?php echo home_url('/services'); ?>" class="link-fire sidebar-link">
      All services
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </aside>
</section>

<section class="cta-section">
  <div class="container-page cta-inner">
    <div>
      <h2>Protect Your Property with Certified Fire Door Installation</h2>
      <p>Ensure your building meets the latest fire safety standards with expertly installed fire doors. Our certified specialists deliver reliable, compliant installations with minimal disruption. p>
    </div>
    <div class="cta-actions">
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire">Get a Free Quote</a>
      <a href="tel:+447480998546" class="btn-outline-white">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        Call Now
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

get_footer();
