
<?php
/*
 * Template Name: Service – Fire Door Inspections 
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/compliance.jpg" alt="Complete Door Compliance Checks for Safer, Smarter Buildings ">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Service</p>
    <h1>Fire Door Inspections London That Put Safety & Compliance First</h1>
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
    <p class="intro">Have your property checked for fire doors by professional fire door inspection services in London. We will ensure that your fire doors are checked thoroughly and will identify any compliance issues, if there are any. You will get an extensive digital report of clear findings and recommendations.</p>

    <p class="intro">Our fire door inspections London services can be used in both domestic and commercial premises regardless of the size. Our inspections are done in a very careful manner. We ensure that we keep you well informed about your fire doors and the maintenance needed to ensure compliance.</p>

    <h2 class="service-detail-heading">Fire Door Inspections London Teams Can Use</h2>
    <p class="intro">Our team can help conduct comprehensive fire door inspections London to ensure that your building remains safe at all times. We conduct an inspection on each and every door using 30+ compliance standards, keeping in mind the BS 8214 guidance.</p> 
    <p class="intro">All our inspections are performed with great precision and attention to detail. We assess the condition of all fire doors, and our team puts in every effort to identify if there are any issues that might affect their functionality in case of any emergencies.</p>
    <p class="intro">We give you clear feedback and practical suggestions. Whether you own one building or more buildings, Griol Fire Protection will provide you with a trustworthy service that will help you to be safe and compliant.</p>

    <h3 class="service-detail-heading">Why Fire Door Inspections Matter</h3>
   <p class="intro">Fire doors form the primary defence during a fire. Routine inspections will ensure that they work effectively and remain up-to-date with all fire safety standards. At Griol Fire Protection, we conduct detailed inspections on each fire door in your property. This ensures a safer and more compliant property.</p>
    <div class="benefits-grid">
      <?php
      $benefits = [
        'Improve Building Safety : Fire doors can serve as a protective barrier for people only when all elements work properly. Malfunctioning seals and gaps can negatively influence their effectiveness. Regular inspections are needed to detect those problems',
        'Stay Compliant : Routine commercial fire door inspections help ensure compliance with the latest fire safety standards. These inspections will also serve as evidence documentation that your fire doors are being inspected as required.',
        'Reduce Future Costs : Identifying any defects in the early stages will reduce the chance of having expensive repairs in the future. It will also ensure that the lifespan of your fire doors is extended while helping avoid any unnecessary disruption to your building',
        'Expert Support You Can Trust : All the inspections performed by Griol Fire Protection provide detailed observations and recommendations. We assist you in identifying issues that need to be addressed, thus allowing you to take appropriate measures and maintain your building safely.',
        
        
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

<h3 class="service-detail-heading">How Our Fire Door Inspection Works</h3>
<p class="intro">Every property is different, but our method remains thorough and consistent. We aim to make all processes from booking the appointment through to the report as simple as possible for you.</p>
<div class="process-list">
  <?php
  $steps = [
    [
      'title' => 'Schedule Your Inspection',
      'desc'  => 'We will arrange for a suitable appointment to carry out the inspection that will cause the least disruption for you. From the first booking until the date of the inspection, our team ensures that the procedure is simple and well-coordinated. Moreover, we also consider your operational needs to make sure that all goes according to plan.',
    ],
    [
      'title' => 'Detailed Inspection from Door to Door',
      'desc'  => 'The testing for every fire door involves over 30 tests as per the requirements of BS 8214. This helps us understand the door conditions in detail. Moreover, recording the information also ensures that no important things are missed during the inspection process.',
    ],
    [
      'title' => 'Get Your Digital Report',
      'desc'  => 'A full report including pictures and observations will be provided to you. The report is designed to be clear and practical. The purpose of our detailed report is to assist you in identifying the current status of your fire doors, making decision-making a lot simpler. Moreover, you will receive prioritised recommendations from us within 48 hours.',
    ],
    [
      'title' => 'Take Required Remedial Measures',
      'desc'  => 'If there is anything wrong, you will be offered a fixed price quotation to restore compliance and fire safety. You will not be pressured to go ahead. We’ll just explain what your options are, and let you pick the one that works best for you.',
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

    <h3 class="service-detail-heading">What We Check During a Fire Door Inspection</h3>
    <p class="intro">Fire doors consist of a number of parts working together to provide effective fire protection. In our fire door inspection services, every part is individually evaluated to make sure that the door will perform as intended and meets the relevant standards as well.</p>

        <div class="benefits-grid">
      <?php
      $benefits = [
        'Door Leaf & Frame :We check the doors and the frame for any signs of deterioration or damage. The area around the door is measured in order to ensure that it is within the acceptable tolerance limits. This also makes sure that the fire door functions effectively during a fire outbreak.',
        'Hinges & Ironmongery : Hinges are inspected thoroughly. Other types of hardware such as handles and locks are also inspected. This check ensures that all components perform effectively with the fire door. The hardware should be appropriate and in good working condition in order to provide improved performance.',
        'Seals & Glazing : Damage and wrong installations of the smoke seals and intumescent strips are checked. When there is any glazing involved, the glass is inspected and evaluated to ensure it is suitable for use.',
        'Self-Closing Devices : The self-closing mechanisms are put under inspection to guarantee that they close effectively without any obstruction. The door must never be left half-open. Fire doors must not leave any gaps between themselves and the frame. This will make sure that the door will work effectively when it is needed the most.', 
        'Signage & Certification : We also verify the presence of proper signs on the fire door and the presence of any certification marks. This is important for confirming the right installation of the door. This is an effective way of ensuring that the fire door meets the relevant standards.',
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

   <h3 class="service-detail-heading">Who Needs Fire Door Inspection Services?</h3>
   <p class="intro">Fire protection requirements differ from property to property; however, the significance of periodic inspection remains the same. The services offered by our company are aimed at providing support for different properties located in London. Whether you own one building or several buildings, we will help you with all your fire door requirements.</p>
        <div class="benefits-grid">
      <?php
      $benefits = [
        'Commercial Buildings : Fireproof doors are essential for offices, retail stores, and industrial units. Inspection on a regular basis helps identify any defects or problems and also ensures the proper functioning of the fire doors. This leads to higher compliance levels and improved safety conditions at work.',

        'Residential Properties : Those who manage agents, landlords, and housing associations have a responsibility to keep residents safe. Inspection is a way of ensuring that all the fire doors are maintained. It is important to keep a clear record of the condition of fire doors for future compliance.',

        'Education & Healthcare : Fire protection is essential in educational institutions, colleges, hospitals, and care homes on a daily basis. Inspection of these structures guarantees that their fire doors will work effectively. This not only ensures the safety of staff and students but also of parents and visitors.',

        'Public & Multi-Site Buildings : Inspection services are needed in hotels, recreational centres, municipal properties, and multiple site enterprises. Our inspection services provided by Griol Fire Protection will make it very convenient to arrange routine inspections without any difficulty.',
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">UK Fire Door Compliance & Regulations</h3>
    <p class="intro">Fire door inspection is a key component towards ensuring compliance with fire safety standards in the UK. Property owners and those responsible for managing buildings have an obligation to maintain the proper functioning of the fire doors. Inspection helps to highlight any problems that may affect the function of a fire door in the event of an emergency.</p>
    <p class="intro">In our London Fire Door Inspections, we follow industry guidelines such as BS 8214, while inspecting each fire door in relation to over 30 compliance criteria. The Regulatory Reform (Fire Safety) Order 2005 and other related fire safety regulations will also be reviewed to meet the necessary criteria. This helps us give you a better insight into the state of your fire doors and any possible remedial actions that might be needed.</p>
    <p class="intro">Inspection record keeping is equally critical. An inspection report is a document that proves that all the required actions have been taken in order to make sure that fire doors are in good condition. Such documents help you maintain your compliance and conduct future audits.</p>
    <p class="intro">Whether your business is a commercial space, apartment building, or some other type of premises, fire door inspections can help you meet the necessary requirements and ensure that all the people in the building remain safe.</p>

    <h3 class="service-detail-heading">Why Choose Griol Fire Protection</h3>
   <p class="intro">At Griol Fire Protection, we focus on providing our customers with quality, accuracy, and compliance. We help the owners/managers of the properties understand the condition of their fire doors through inspections and practical recommendations.</p>
    <div class="benefits-grid">
      <?php
      $benefits = [
        'Experienced Inspection Team : Our expert inspectors perform detailed inspections in an accurate manner. All of the fire doors are assessed properly in order to find any defects.',
        'Comprehensive Compliance Checks : Our assessments involve more than 30 checks per inspection following the guidance of BS 8214. This helps the team ensure all parts or components of the fire door are assessed properly.',
        'Detailed Digital Reporting : An online report will be provided to you along with pictures and solutions that our team would suggest after carrying out the assessment. This will help you understand what is wrong with your fire doors and how things can be fixed',
        'Minimal Disruption : We carry out our inspection procedures to fit your needs. We have an organised and effective system for inspecting. This will ensure that all fire doors are examined without causing unnecessary disturbances.',
        
        
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">Frequently Asked Questions</h3>
    <div class="faq-list-wrapper">
      <?php
      $faqs = [
        ['q' => 'What does the inspection report include?',  'a' => 'All doors are inspected, along with their reference pictures, their defect level, and recommendations on what to do next, and all required things are recorded in the report.'],
        ['q' => 'What does a fire-rated door inspection include?',    'a' => 'A fire-rated door is designed to resist fire for a stated period. Inspectors check the moving panel frame gaps and seals. They examine hinges and glazing. They also check signage and certifications. Whether the self-closing mechanism works automatically to close the door is also examined in the process.'],
        ['q' => 'Who should arrange fire door inspection services?',          'a' => 'Property managers and landlords often arrange the service. It also suits housing associations, facilities teams, and developers. Contractors, responsible persons, education providers, and healthcare estates teams can also arrange fire door inspection services.'],
        ['q' => 'Are annual fire door inspections always required?',  'a' => 'The frequency of inspections will vary based on the nature of the building. Communal fire doors must be inspected every three months. Flat entrance doors must be inspected annually in residential buildings over 11 metres high.'],
        ['q' => 'Can inspections be completed in occupied or multi-site buildings?',  'a' => 'Yes. Access planning helps to cause no disturbance to the residents, employees, patients, students, and contractors.'],
        ['q' => 'Need a commercial fire door inspections company?',    'a' => 'Get clear evidence, prioritised defects, and practical next steps for your London or Greater London property with Griol fire protection.'],
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
