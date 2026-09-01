<?php
/*
 * Template Name: Service – Compliance Checks
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
    <h1>Complete Door Compliance Checks for Safer, Smarter Buildings </h1>
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
    <p class="intro">Fire doors protect escape routes and slow the spread of fire and smoke. They must work correctly every day. Griol Fire Protection delivers fire door compliance services for residential and commercial buildings across London. Each fire compliance inspection is conducted on the complete set of doors and lists the possible problems. Our professionals present the findings and practical recommendations.</p>

    <p class="intro">The fire door compliance London service helps building owners and responsible persons understand what needs attention. We also carry out commercial fire door compliance checks with minimal disruption. Book a professional check and keep your building ready for its next safety review.</p>

    <h2 class="service-detail-heading">Reliable Compliance Checks for Safer Buildings</h2>
    <p class="intro">A fire door can look secure but still have hidden faults. Loose hinges and damaged seals can reduce its performance. Poor gaps or a weak closer can also stop the door from closing fully. Our fire door compliance services help you find these issues before they become serious risks.</p> 
    <p class="intro">Every fire compliance inspection follows a clear approach. We examine the full door set and not only the door leaf. We also review records when they form part of the agreed scope. You receive a clear report with evidence and recommended actions.</p>
    <p class="intro">Our fire door compliance London team supports landlords, managing agents, facilities teams, and business owners. The service works for one building or a wider property portfolio. We also provide commercial fire door compliance checks for offices and schools, shops, and healthcare sites. The goal is simple. Find the risk. Explain the issue. Help you take the right action.</p>

    <h3 class="service-detail-heading">Why Fire Door Compliance Checks Matter</h3>
    <p class="intro">Fire doors form a vital part of building safety. They slow the spread of fire and smoke. They also protect escape routes. Fire door compliance services are performed regularly to detect any faults before the situation poses a major danger.</p>
    <div class="benefits-grid">
      <?php
      $benefits = [
        'Protects Exit Points : An effective fire door will guarantee that all exit paths are safeguarded. This gives individuals more time to escape from the premises during emergencies.',
        'Discovery of Hidden Issues : It is not always easy to know every minor defect. For instance, defective seals and loose hinges can create inefficiency in fire doors. The fire compliance inspection assists in such situations.',
        'Fulfill Legal Responsibilities: Issues of fire safety should be sorted out by the building owners and people who are responsible for protecting the building. Regular inspections help in ensuring that appropriate safety measures are being followed.',
        'Prevents Fire from Spreading : When used correctly, the fire door prevents the spread of the fire to other areas. Not only does this limit damage, but it also protects other areas of the building.',
        'Saves on High Repair Costs : A regular inspection can also detect even the slightest problems to ensure that these don’t turn into big problems. This saves costs on having to replace doors completely later on.',
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

    <h3 class="service-detail-heading">Our Fire Door Compliance Check Process</h3>
    <div class="process-list">
      <?php
      $steps = [
        ['title' => 'Initial Scope Review', 'desc' => 'The initial thing to do is to assess the building. We determine what kind of building it is and how many fire doors there are in the building that need servicing. If there is a previous assessment, we look at it so we can plan further accordingly.'],
        ['title' => 'On-Site Inspection',   'desc' => 'The specialist visits the site and conducts a formal fire compliance inspection. This includes inspection of all the fire doors agreed upon along with their essential elements. We work carefully around residents and staff and daily operations. Each finding links to the door location.'],
        ['title' => 'Evidence Collection',  'desc' => 'We maintain proper documentation of any defects in clear notes as well as photographs if necessary. This is an important document for the responsible person and others involved in the project. We do not use vague terms in our fire door compliance London reports. It explains what is wrong and why the issue matters.'],
        ['title' => 'Risk-Based Findings',  'desc' => 'Findings can be categorised in terms of risks and urgency. Risks that require urgent attention are prioritised. The low-priority risks are identified for further planned maintenance activities. Commercial Fire Door Compliance Inspection can also help in ensuring correct reporting of multiple sites or fire doors.'],
        ['title' => 'Practical Recommendations',  'desc' => 'You receive a clear action plan after the inspection. It may include adjustment, repair, maintenance, or replacement. We do not assume that every failed door needs replacement. The right action depends on the defect and the condition of the full door set.'],
        ['title' => 'Follow-Up Support',  'desc' => 'The team is always available for any assistance regarding the findings and to advise on the next step to take. If necessary, we will also discuss what should be done next.'],
      ];
      foreach ($steps as $i => $step): ?>
      <div class="process-step">
        <div class="step-num"><?php echo $i + 1; ?></div>
        <div>
          <h4 class="step-title"><?php echo $step['title']; ?></h4>
          <p class="step-desc"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">What We Check During a Compliance Inspection</h3>
<div class="benefits-grid">
    <?php
    $benefits = [
        'Door Leaf and Frame : The door and the frame around it will be inspected for any sign of damage or alteration. Moreover, it will also be confirmed that the door frame is well aligned. Both the door and door frame need to work together as a unit.',
        'Door Gaps : Fire door gaps can have a major impact on its performance. Therefore, the gaps in the top and sides are carefully examined. The team also checks if the door is positioned right inside the frame.',
        'Hinges and Fixings: We examine the door hinges and screws. The condition of these items could affect the normal operation of the door. Moreover, they could affect the stability of the door frame.',
        'Seals & Glazing : The intumescent seals expand when heated. The smoke seals reduce the smoke flow. We check their condition and position. We also inspect fire rated glazing where it forms part of the door.',
        'Closer and Latch : The closer should shut the door fully from an open position. The latch should engage without force. Our fire door compliance services check this operation and record any failure.',
        'Signs and Hardware : We inspect signs, handles, locks, and other ironmongery. Ironmongery means the metal hardware fitted to the door. A fire compliance inspection also considers whether these parts appear suitable and secure.',
        'Evidence and Identification : The fire door compliance London inspections document the position and condition of the inspected door. The compliance checklist may include the door numbers, photographs of the doors, and the defects observed or found.',
    ];

    $benefitsCount = count($benefits);

    foreach ($benefits as $index => $b):

        // Make the last item full-width when total count is odd
        $isLastFullWidth = ($benefitsCount % 2 !== 0 && $index === $benefitsCount - 1);
    ?>

        <div
            class="benefit-item<?php echo $isLastFullWidth ? ' benefit-item--full' : ''; ?>"
            <?php echo $isLastFullWidth ? 'style="grid-column: 1 / -1;"' : ''; ?>
        >
            <svg
                class="benefit-icon"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="var(--fire)"
                stroke-width="2"
            >
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>

            <span><?php echo $b; ?></span>
        </div>

    <?php endforeach; ?>
</div>

    <h3 class="service-detail-heading">Who Needs This Service?</h3>
    <div class="process-list">
      <?php
      $steps = [
        ['title' => 'Landlords and Freeholders', 'desc' => 'Data concerning common area doors and flats’ entrance doors is essential to landlords. Inspection will help landlords identify defects and make decisions on further steps.'],
        ['title' => 'Managing Agents',   'desc' => 'Managing agents often coordinate safety work across occupied buildings. A structured inspection gives them consistent records and clear priorities.'],
        ['title' => 'Responsible Persons',  'desc' => 'The Responsible Person is expected to be responsible for all fire safety responsibilities within the premises. Compliance service helps in making informed decisions.'],
        ['title' => 'Facilities Management Staffs',  'desc' => 'The staff working in facilities management require reports to link defects and maintenance work. Clear findings help them plan repairs and keep records accordingly'],
        ['title' => 'Commercial Property Owners',  'desc' => 'Commercial inspections help in controlling offices, retail stores, and hospitality services. The inspections will check whether the doors remain fit for what they have been designed to.'],
        ['title' => 'School and Health Care Facilities',  'desc' => 'The occupied buildings create extra pressure on the closers and latches. Regular inspections enable team members to identify wear issues before it becomes a bigger safety problem.'],
        ['title' => 'Flat Block Managers',  'desc' => 'Flat blocks need good access planning and identification of doors. An organized inspection will make it easier for residents and site teams.'],
        ['title' => 'Multi-Site Organizations',  'desc' => 'Firms that have several facilities need a standard monitoring process. In this way, they can easily assess the risks involved and plan for them accordingly.'],
      ];
      foreach ($steps as $i => $step): ?>
      <div class="process-step">
        <div class="step-num"><?php echo $i + 1; ?></div>
        <div>
          <h4 class="step-title"><?php echo $step['title']; ?></h4>
          <p class="step-desc"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  <h3 class="service-detail-heading">UK Fire Door Compliance and Regulations</h3>
  <p class="intro">Fire door duties depend on the building type and its use. The Regulatory Reform (Fire Safety) Order 2005 places duties on the Responsible Person for relevant premises. The Fire Safety (England) Regulations 2022 require annual checks of flat entrance doors and quarterly checks of communal fire doors in multi occupied residential buildings above 11 metres. Approved Document B provides fire safety guidance for work covered by the Building Regulations. </p> 

  <p class="intro">Professional compliance checks help you understand the condition of your doors. They do not replace a full Fire Risk Assessment. Each building still needs a risk based approach and suitable records.</p> 

   <h3 class="service-detail-heading">Why Choose Griol Fire Protection?</h3>
        <div class="benefits-grid">
      <?php
      $benefits = [
        '1. Clear Inspection Scope : TThe inspection coverage is agreed before starting. We analyze and inform you what doors and components will be checked.',

        '2. Complete Door Components Inspection : It is not only some components of the door that we analyze. The team moves further to carry out a detailed analysis of all the major components of the door.',

        '3. Simple Reports: You receive findings in clear language. Each defect links to a door location and a recommended next step. The report supports discussions with contractors and managers.',

        '4. Helpful site evidence : This may involve taking pictures and noting any damage. It will help you and your team to know the state without necessarily depending on what they remember.',

        '5. Practical Priorities : Our report covers critical issues and scheduled maintenance. This will help you to prioritize the important risks and proceed gradually with your tasks.',

        '6. Commercial Experience : We cater to various kinds of properties. They include offices, residential buildings, and schools.',

        '7. Support After the Check : The service does not end when you receive the report. Our team can explain the findings and discuss suitable remedial options. This gives you a route from inspection to action.',

        '8. One Trusted Team : Griol Fire Protection also supports fire door inspections, repairs, maintenance, and installation. You can manage related work through one experienced provider.',
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
        ['q' => 'What is a fire door compliance check?',  'a' => 'Inspection of the doors is carried out to confirm that the doors are in perfect working order. This involves checking such parts of the door. They include door panels, seals, and other vital parts.'],
        ['q' => 'Is a compliance check the same as a Fire Risk Assessment?',    'a' => 'No. A Fire Risk Assessment is an assessment of wider fire risks in the premises. A fire door inspection only inspects the state and functioning of the fire doors agreed.'],
        ['q' => 'How often should fire doors be checked?',          'a' => 'The required frequency depends on the building and the level of use and the findings of the Fire Risk Assessment. For residential buildings above 11 metres in England, the law requires quarterly checks of communal fire doors and annual checks of flat entrance doors.'],
        ['q' => 'What if a fire door fails the check?',  'a' => 'The defect and its severity will be explained through the report. Some of these faults may need adjusting or even repairing. Other doors may need replacement. The correct action depends on the type of fault and the condition of the full door set.'],
        ['q' => 'Is it possible to inspect fire doors in occupied buildings?',  'a' => 'Yes. The inspection can be planned around residents and staff and normal site activity. Access arrangements should be agreed in advance.'],
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
