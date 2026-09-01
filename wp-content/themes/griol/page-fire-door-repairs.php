<?php
/*
 * Template Name: Service – Fire Door Repairs
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
    <h1>Fire Door Repair Services in London and Across the UK</h1>
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
    <p class="intro">Faulty fire doors can put danger to your lives as well as your property. Being a trusted fire door repair company, Griol Fire Protection offers fire door repair services in Greater London and other parts of the UK. We can help resolve issues with the door frame, sealing, and other hardware.</p>

    <p class="intro">The inspection we conduct includes diagnosing whether the door can be fixed or needs to be replaced. Those who need commercial fire door repair services can provide us with the report or date of the site inspection. We will evaluate the condition and quote accordingly. We also plan the work to reduce disruption within the building.</p>

    <h2 class="service-detail-heading">Reliable Fire Door Repairs for Safer Buildings</h2>
    <p class="intro">A fire door forms part of the building's fire protection system. It helps slow the movement of fire and smoke between different areas. However, daily use can damage the door or affect how it closes. Small faults can weaken the whole doorset. A doorset means the door leaf plus its frame seals, glazing and hardware.</p> 
    <p class="intro">Our fire door repair services restore suitable fire doors without pushing clients towards avoidable replacement. We review each reported defect and check the condition of the complete doorset. We use repair procedures and parts that will work well with the door’s design.</p>
    <p class="intro">We also help businesses that need reliable commercial fire door repair support. Griol Fire Protection supports landlords, managing agents, facilities teams, schools, care settings, offices, and other duty holders. We can work from an existing inspection report or assess the door on site. You receive clear repair advice and evidence of the completed work for your fire safety records and future property management and compliance record reviews. </p>
    <p class="intro">Clients looking for a trusted fire door repair company can contact our team for a clear assessment and practical recommendations.</p>

    <h3 class="service-detail-heading">Why Timely Fire Door Repairs Matter</h3>
   
    <div class="benefits-grid">
      <?php
      $benefits = [
        '1.  Maintain Proper Door Performance : A fire door must close fully and remain secure within its frame. Damage can prevent this. A weak closure may leave the door open. Worn hinges may change the door gaps. Missing seals may reduce smoke and fire resistance. Unapproved changes may also weaken the complete doorset. Our fire door frame London service can identify frame movement and damaged fixing points.',
        '2. Protect Escape Routes : Fast repairs help protect escape routes. They also support compartmentation. The fire-resistant compartments allow the spread of fire to be slowed down. This allows people more time to evacuate. It can also help emergency teams work more safely.',
        '3. Support Fire Safety Duties: Repairs help the responsible person meet key fire safety duties. The Responsible Person means the individual or organisation that manages fire safety within the premises. UK guidance states that fire doors must remain in good working order. Repair or replacement work should take place as soon as reasonably practicable. Working with an experienced fire door repair company can help the property management team deal with any defects and keep track of repairs.',
        '4. Preventing Additional Damage : Taking proactive steps may help avoid turning small defects into major problems. A small alignment issue can place extra pressure on hinges and closers. Prompt repair can protect the existing door. It can also reduce avoidable costs. Timely action shows that the building follows a responsible approach to fire safety. People searching for fire door repair near me should choose a provider that checks the full doorset rather than fixing only the visible fault.',
        
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="service-detail-heading">Our Fire Door Repair Process</h3>
    <div class="process-list">
      <?php
      $steps = [
        ['title' => 'Review the Reported Defects', 'desc' => 'Reviewing the inspection report and any other available records helps us to understand the problem and to prepare for the inspection. We can also inspect the door when no recent report is available. Our team can review reports for individual properties or larger commercial fire door repair programmes.'],
        ['title' => 'Identify the Source of the Problem',   'desc' => 'We do not just limit ourselves to checking the defect; instead, we check the whole door system to try and trace the root cause of the defect. The root cause may be due to any number of reasons such as wear, installation, or even missing parts. Identifying the source will help ensure that the problem does not recur in the future.'],
        ['title' => 'Confirm Repair Suitability',  'desc' => 'We will evaluate whether the door can be repaired without lowering its performance after testing. We do not use unsuitable filler parts or alterations. When damage is too severe, our team also explain why replacement may offer the safer option.'],
        ['title' => 'Prepare a Clear Quotation',  'desc' => 'The repair scope is clearly defined for you. It will cover the defects that need to be repaired. This gives your team the ability to approve and schedule their work easily. For clients looking for fire door repair near me, the site inspection can precede the approval of repair work.'],
        ['title' => 'Complete the Remedial Work',  'desc' => 'Remedial work consists of repair work intended to solve an identified problem. We use the right technology and components that go well together. The staff in our organization tries their best not to interfere with anything and cause as little disturbance to your daily operations as possible.'],
        ['title' => 'Provide Repair Evidence',  'desc' => 'We make sure that whatever has been done is recorded in detail. This may include notes about any repairs that were done along with pictures before and after the job. This record can be used for future inspections as well as other fire safety records.'],
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

    <h3 class="service-detail-heading">What We Check During Fire Door Repairs</h3>
        <div class="benefits-grid">
      <?php
      $benefits = [
        'Door Leaf and Frame Condition : The door leaf is the movable part of the door set. The inspection carried out on the door leaf is done to determine whether there are any cracks, splits, and inappropriate alterations. Our fire door frame London support can cover local frame damage and poor alignment.',
        'Gaps Around the Door : The gaps between the door leaf and frame affect door performance. We check the top sides and threshold. The threshold refers to the area below the door. Inspection is carried out to determine any uneven areas and excessive gaps.',
        'Hinges and Fixings: The state of the hinges and their position is inspected. Hinges should be able to hold the door and facilitate easy movement. If there is anything wrong with the hinges, the door will fall or touch the frame',
        'Self-Closing Device : A self-closing device pulls the door shut after use. We check whether it closes the door fully from different open positions. Leaks, damage, and incorrect adjustments are also considered during our inspection.',
        'Intumescent and Smoke Seals : Intumescent seals expand when exposed to heat. Smoke seals help restrict the passage of smoke. We will then see if the seals are well-fitted and if there is any damage to the seals. We will also ascertain that the seals are appropriate for the doors.',
        'Final Operation : We verify that the door can be easily opened and properly closed. We also check that wedges, hooks, or obstructions do not prevent safe and normal daily operation. A professional fire door repair company should check door operation after completing every repair.',
       
      ];
      foreach ($benefits as $b): ?>
      <div class="benefit-item">
        <svg class="benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span><?php echo $b; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="intro">Businesses should choose fire door repair services​ that include clear repair scopes and post-work checks and supporting records.</p>

    <h3 class="service-detail-heading">UK Fire Door Compliance and Regulations</h3>
    <p class="intro">Fire door repairs in London must follow fire safety law for England. The Regulatory Reform Fire Safety Order 2005 places duties on the Responsible Person. This means the person or organisation that controls the premises.</p>
    <p class="intro">Buildings above 11 metres also require annual best endeavour checks for flat entrance doors and quarterly checks for communal fire doors.</p> 
    <p class="intro">Repairs should follow the fire risk assessment and British Standard 8214 guidance. A competent specialist should confirm that each repair protects the intended fire performance.</p> 
    <p class="intro">Clients should select a fire door repair company that understands doorset compatibility, repair evidence, and current fire safety responsibilities.</p> 

   <h3 class="service-detail-heading">Why Choose Griol Fire Protection</h3>
        <div class="benefits-grid">
      <?php
      $benefits = [
        'Repair-Focused Recommendations : We assess whether a safe repair can restore the door. We do not recommend full replacement when suitable remedial work can resolve the defect.',

        'Complete Doorset Checks : A fire door works as one system. We review the leaf, frame, seals, closer hinges, glazing, and fitted hardware. It helps us detect related faults.',

        'Clear Repair Scopes : We clarify the problem and its significance. Our quotations set out the planned work so landlords and property teams can make informed decisions.',

        'Suitable Parts and Methods : We use compatible components and controlled repair methods. This serves to protect the integrity of the doorset without affecting its performance under a fire risk scenario.',

        'Support for Occupied Buildings : Repairs will be planned with regard to safety and disruption in mind. This is useful for flats, offices, schools, care settings, hotels, and other active premises.',

        'Evidence for Your Records : Clear records help show what action followed an inspection. We can give you information and photographs if necessary to aid in further checks and fire safety management.',

        'Honest Replacement Advice : Not all doors are able to be fixed if they have suffered serious damage or are not suitable doorsets. We explain this clearly and recommend the next safe step.',

        'Responsive UK Service : Our team provides fire door repair services​ across Greater London and wider UK locations. We can review an existing inspection report or arrange a site assessment. You receive practical guidance from the first enquiry through to completion and final record handover for your internal fire compliance record files.',
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
        ['q' => 'Can every damaged fire door be repaired?',  'a' => 'No. Many faults can be repaired. These include closer issues, damaged seals, minor frame issues, and some gap problems. Replacements may be required if there has been substantial damage done to the door or modifications have been carried out. We assess the complete doorset before recommending the next step.'],
        ['q' => 'How do I know whether my fire door needs repair?',    'a' => 'Common signs include a door that does not close fully. There can also be damaged seals, bent hinges, gaps, or the door is jammed. A professional inspection can confirm the defect and required action'],
        ['q' => 'What fire door components can you repair?',          'a' => 'We can address many faults involving closers, hinges, seals, frames, glazing, and fitted hardware. The exact repair depends on the door type and the available product evidence. We will explain when a component cannot be repaired safely.'],
        ['q' => 'Will I receive evidence after the repair?',  'a' => 'We can provide the relevant repair documentation and pictures when necessary. This would help the landlords, property management firms, and facility managers keep up-to-date on their compliance documentation.'],
        ['q' => 'How quickly should fire door defects be repaired?',  'a' => 'This will depend on the fault that is to be rectified and the complexity of the risk involved. The UK Government’s guidelines stipulate that “any necessary repairs or replacements should be undertaken as soon as reasonably practicable by a competent contractor”. Urgent faults, particularly those involving escape routes or non-closing doors, must be sorted out immediately.'],
        ['q' => 'Do you repair fire door frames in London?',    'a' => 'Yes. Our fire door frame London service covers suitable frame faults, loose fixings, alignment problems, and local damage. We inspect the complete doorset before confirming whether frame repair can restore safe operation.'],
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
      <h2>Repair Today. Protect Tomorrow.</h2>
      <p>Professional fire door repairs that help restore safety, support compliance, and minimise disruption<p>
    </div>
    <div class="cta-actions">
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire">Request a Repair Assessment</a>
      <a href="tel:+447480998546" class="btn-outline-white">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        Call Now
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

get_footer();
