<?php
/*
 * Template Name: Service – Compliance Checks
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
    <h1>Fire Door Maintenance London for Lasting Protection</h1>
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
    <p class="intro">Ensure your fire doors function properly by utilising our fire door maintenance London services. Our fire door maintenance services will inspect and repair any kind of faults to ensure the proper functioning of your fire doors.</p>

    <p class="intro">Maintaining your fire doors ensures that they will operate as intended while helping them be assured of the safety of people present in the building. Our trained professionals ensure that every important aspect of the door is checked thoroughly and all necessary modifications are made on time. This helps us ensure your doors are compliant with current fire safety standards. </p>

    <p class="intro">No matter whether we are working for individual properties or commercial fire door maintenance, we provide you with the services that cause you minimal disruption. We ensure that everything is done professionally during our visits.</p>

    <h2 class="service-detail-heading">Fire Door Maintenance London You Can Trust</h2>
    <p class="intro">Fire door maintenance is very important in making sure that your fire doors are functioning safely and effectively. As a trusted fire door maintenance company based in London, Griol Fire Protection offers you the best fire door maintenance services.</p> 
    <p class="intro">Maintenance allows the team to notice any signs of wear that could be troublesome in the future. It also ensures that your fire doors have the protection that they are supposed to provide. The team will inspect your doors thoroughly and will make the necessary changes so the doors can work as intended.</p>
    <p class="intro">We follow a thorough fire door maintenance checklist during each visit in order to ensure that there is consistency in the process. </p>
    <p class="intro">No matter if you are looking for maintenance services for one building or need commercial fire door maintenance across multiple sites, we are here to help. We provide an efficient and well organised service. </p>
    <p class="intro">As one of the trusted fire door maintenance company, we make sure that your fire doors stay up to date with the current regulations. However, this not only keeps you away from any sudden expenses related to maintenance, but it also minimizes any risk of unexpected repairs.</p>

    <h3 class="service-detail-heading">Why Fire Door Maintenance Matters</h3>
   <p class="intro">These doors help to reduce the rate at which fire spreads in a building, allowing more time for individuals to exit safely. But to have this benefit, one has to properly maintain and install the fire doors. However, using it daily and accidental damage can affect the overall performance of the fire doors. </p>
    <div class="benefits-grid">
      <?php
      $benefits = [
        'Improves Fire Safety : Maintenance of fire doors guarantees that all components of the door work properly. These include hinges, seals, glazing, locks, and door closers, which combine to offer effective fire safety. Detecting flaws early maintains the performance of the door.',
        'Supports Compliance : Your fire doors must be in compliance with the current fire regulations, and this is achieved through proper fire door maintenance. Our professional team utilizes a comprehensive fire door maintenance checklist on every visit to determine any issues that may exist.',
        'Reduces Long-Term Costs : Smaller problems can easily escalate to cost you more money if they are not addressed. Maintenance services for fire doors serve to ensure that there will be no unnecessary damage to your fire doors, thus saving on unforeseen costs.',
        'Keeps Your Building Protected : A well-organized and systematic procedure is followed to make sure that each fire door gets the proper attention that it requires. Whether it’s the first visit or the final report, our fire door maintenance services are performed with great attention to detail to ensure safety in your property.',
        
        
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

<h3 class="service-detail-heading">Our Fire Door Maintenance Process</h3>

<div class="process-list">
  <?php
  $steps = [
    [
      'title' => 'Step 1: Schedule Your Maintenance Visit',
      'desc'  => 'We will arrange for your facility to be visited at a time that is most convenient for you without creating any inconvenience.',
    ],
    [
      'title' => 'Step 2: Initial Assessment',
      'desc'  => 'The process starts by assessing your fire doors. In order for us to achieve this, we first determine how many doors are affected and their state of repair. Besides, we also ask about the difficulties you have been encountering. This will help us carry out the maintenance process accordingly.',
    ],
    [
      'title' => 'Step 3: Detailed Maintenance Checks',
      'desc'  => 'The process is performed by our highly skilled engineering team following the detailed fire door maintenance checklist. The checklist includes everything, starting from door leaves and door frames to door closers and all other required components of the doors.',
    ],
    [
      'title' => 'Step 4: Repairs and Adjustments',
      'desc'  => 'Any minor repairs and modifications required will be done in just one visit. This can include tightening of the hardware or replacing the door closer. This may also involve fixing anything that may cause impairment to the functioning of the door. If there is anything else to be done, we make sure you are aware of it.',
    ],
    [
      'title' => 'Step 5: Get Your Maintenance Report',
      'desc'  => 'A digital report will be generated after maintenance. Our report will contain all information regarding the maintenance process, the problems detected, and our recommendations.',
    ],
        [
      'title' => 'Step 6: Maintenance Report',
      'desc'  => 'We ensure that after offering our services, we give you a report in digital format. This involves every detail of the problems found and our expert recommendations to fix the issues.',
    ],
    [
      'title' => 'Step 7: Ongoing Support',
      'desc'  => 'The maintenance of fire doors needs constant monitoring to ensure that the doors work effectively. Whether you need help maintaining one building or seeking fire door maintenance for businesses, Griol Fire Protection is there to help you out.',
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

    <h3 class="service-detail-heading">What We Check During Fire Door Maintenance</h3>
    <p class="intro">Fire doors have different components that work together as a team to create a fire protection system. Our fire door maintenance test helps our experts inspect the fire doors to determine any problems that may exist and ensure they are sorted out before they turn into a major problem.</p>

      <div class="benefits-list benefits-grid">
    <?php
      $benefits = [
        'Door Leaf and Frame :The condition of the door leaf and door frame is inspected to know if there is any kind of deformation present. Inspection is also carried out to know if there are any cracks. The door should fit well into the frame and function properly.',
        'Hinges and Ironmongery : The condition of all the hinges, handles, locks, latches, and other fittings is inspected to ensure that there is nothing worn out, loose, or damaged. All those items that affect the safe working of the fire door are determined, and necessary actions are advised.',
        'Intumescent and Smoke Seals : We examine the intumescent and smoke seals to ensure that they are fitted properly and that there is no damage. These are very important components that will help slow down the movement of fire and smoke.',
        'Door Closers and Glazing : The function of the self-closing mechanism of the door will be tested to verify that the door closes completely. Also, the fire rated glazing or the vision panels will be checked to ensure that they are not damaged.', 
        'Final Operational Check : Once the assessment is done, we proceed to conduct one more final detailed test in order to determine whether the fire door is operating efficiently. We look for problems and provide their solutions to keep your fire doors safe and efficient.',
        'Signs Your Fire Door Needs Maintenance : Fire doors can wear out over time due to regular use or accidental damage. Small faults can have an impact on the effectiveness of the doors, and therefore should be fixed at the right time. Fire door maintenance allows you to spot such faults at an early stage.',
        'Door Does Not Close Correctly : The fire door must close and engage completely and effortlessly. If not, it is worth checking, as this can impact the performance of the door during fire.',
        'Damaged Seals or Hinges : Intumescent seals, hinges, and other fastening components must stay in their place and maintain good quality. Old or defective elements lower the quality of the fire door’s operation and must be fixed quickly.',
        'Cracks or Visible Damage : Ensure that the door is not cracked, dented, loose on the glazing, or damaged in any way. Small damages can affect the performance of the entire door if left unnoticed.',
        'Gaps Around the Door : A large or irregular space between the door and its frame might cause poor performance of the door. This can lead to the door not functioning as required. Our checklist for maintaining fire doors ensures they meet all required standards.',
        'Failed Inspection Findings : If any defects are found in the previous inspection, they must be fixed without any delay. Our commercial fire door maintenance service helps your buildings stay compliant with all the required standards while keeping your building safe. ',
        'UK Compliance & Regulations : Fire doors should be maintained in order to meet all the regulations set out in the Regulatory Reform Fire Safety Order 2005 and any other relevant fire safety legislation in the UK. Maintenance of fire doors will ensure that they are operating according to the latest standard.
        As per our industry best practices, our team performs detailed checks each time we visit. This is done in order to ensure that any problems are rectified in order to keep your building safe from any hazard.'
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
        <div class="benefits-grid">
      <?php
      $benefits = [
        'Experienced Fire Door Specialists :The fire door engineers at our company have the expertise to perform maintenance on any fire doors. All maintenance calls made by them are conducted thoroughly with an eye towards even the smallest details.',

        'Thorough Maintenance Checks : We go through a checklist for fire door maintenance that ensures we carry out a thorough testing of all parts of the fire doors. This ensures that any faults that may be within the fire doors are identified.',

        'Minimal Disruption : We make sure our maintenance work does not disrupt your daily operations. It does not matter if you have one building or many commercial sites. We do our job quickly so that we can finish it on time.',

        'Clear Reports & Honest Advice : Once the visit is done, we provide our clients with a detailed report consisting of what we found, what we did, and any needed recommendations.',

        'Compliance-Focused Service : Our maintenance services ensure that your fire doors comply with the requirements for fire safety. Our aim is to ensure that your property is safe and complies with all the requirements.',
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

    <h3 class="service-detail-heading">Frequently Asked Questions</h3>
    <div class="faq-list-wrapper">
      <?php
      $faqs = [
        ['q' => 'Why is fire door maintenance important?',  'a' => 'Fire door maintenance will make sure that the fire doors in your building continue to function properly in case of any fire. Fire door maintenance also prevents the risk of non-compliance and expensive repairs. Proper maintenance will allow for early detection of small problems that may develop into large problems later on. This will ensure that all the fire doors remain in good operating condition.'],
        ['q' => 'How often should fire doors be maintained?',    'a' => 'It all depends on the kind of building and usage of the doors. Fire door maintenance services should be used to ensure that your fire doors are safe and functioning effectively. Property that sees a lot of people may require more maintenance visits. Routine inspections and maintenance will be instrumental in ensuring safety and prevention of unexpected issues.'],
        ['q' => 'What is included in a fire door maintenance checklist?',          'a' => 'A fire door maintenance checklist typically involves testing of hinges, seals, and door clearance. Some other important factors included in the checklist are glazing, signage, and overall condition of the fire door. Everything is examined to ensure that the fire door keeps functioning as it should.'],
        ['q' => 'Do you provide commercial fire door maintenance?',  'a' => 'Yes. We provide commercial fire door maintenance service for office buildings, residential buildings, and healthcare centers. We also provide these services for schools, shops, and all other commercial buildings in London. The maintenance service we provide has been designed in a way that provides the least disruption to your business process. We work in an efficient manner and give you comprehensive reports each time we visit you.'],
        ['q' => 'Why choose Griol as your fire door maintenance company?',  'a' => 'With extensive experience as a fire door maintenance company, we will offer you quality maintenance services along with relevant reports and recommendations. We guarantee you that we will provide you with trusted services. In addition, we will ensure that you adhere to all required regulations.'],
        ['q' => 'Can minor fire door repairs be completed during maintenance?',    'a' => 'Yes. Where possible, our engineers undertake any minor repair works on the spot. This way we can restore your fire doors functionality without further delay. In case this is not sufficient and requires extensive work, we clearly explain the situation to you and offer suitable recommendations. '],
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
      <h2>Take the Next Step Towards Fire Safety</h2>
      <p>Book a professional fire door inspection today. Our experienced team will assess your fire doors, identify any issues, and help you maintain a safe and compliant property.</p>
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
