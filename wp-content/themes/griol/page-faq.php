<?php
/*
 * Template Name: FAQ
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/compliance.jpg" alt="Fire door FAQs">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Knowledge</p>
    <h1>Frequently Asked Questions</h1>
    <!-- <p>Fire Door Inspection & Compliance</p> -->
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> FAQ's</nav>
  </div>
</section>

<!-- FAQ GROUPS -->
<section class="container-page" style="padding:5rem 0;max-width:56rem;">
  <?php
  $groups = [
    [
      'title' => 'Fire Door Inspection & Compliance',
      'items' => [
        ['q'=>'How often should fire doors be inspected in the UK?','a'=>'Fire doors require periodic checks so that they always remain compliant and are safe for use. How often the fire door is checked will depend on the type of building as well as the traffic. In cases where there are many visitors in the building, the fire door will be checked more often'],
        ['q'=>'Why are regular fire door inspections important?','a'=>'The fire door is used for controlling the spread of fire and smoke within the building. A regular inspection is conducted in order to find out and fix any problems with sealing and hardware.'],
        ['q'=>'What happens during a fire door inspection?','a'=>'Fire door inspection involves the examination of the fire door and its different components. The components that are inspected include the door panel, door frame, and door hinges. The other components that are examined include the seals, gaps, and door closure system..'],
        ['q'=>'What does a fire door inspection report include?','a'=>'A fire door inspection report provides details about the condition of each door. It shows any faults and the required actions needed to be taken. Reports are useful for property owners and Responsible Person as it supports in managing fire safety requirements.'], ['q'=>'Who is responsible for maintaining fire doors in a building?','a'=>'The person in charge is supposed to ensure that there is compliance with fire safety measures. He could be the owner or the landlord of the premises. Moreover, they can also be an employer or facilities manager depending on the property type.'], ['q'=>'Are fire door inspections a legal requirement in the UK?','a'=>'According to UK fire safety legislation, the duty holder must ensure that the fire safety system inside the building is maintained. Inspection of fire doors helps in ensuring compliance with the above-mentioned responsibilities.'],
        ['q'=>'What standards apply to fire doors?','a'=>'Fire doors need to comply with certain UK fire safety standards. These include BS 476 and BS EN 1634 testing standards. Installation and maintenance should follow recognized guidance such as BS 8214.'],
        ['q'=>'Do all fire doors need to be inspected?','a'=>'Yes. Regular inspection of fire doors is crucial. Problems like damage to seals and gaps may impact the proper functioning of the fire doors. Such problems are likely to pose major threats in an emergency situation.'],
      ],
    ],
  [
    'title' => 'Fire Door Defects & Repairs',
    'items' => [

        [
            'q' => 'What are the most common fire door problems?',
            'a' => 'Some of the most common problems may include leaks in seals, loose hinges, excessive gaps, and doors that do not function correctly. These issues can affect the performance of fire doors and may make them unsafe. Regular inspection is important to identify and address these problems.'
        ],

        [
            'q' => 'Can a damaged fire door be repaired?',
            'a' => 'Many fire doors can be repaired if the damage is suitable for repair. A professional inspection will help determine whether the door can be repaired or needs to be replaced. The inspection identifies the extent of the damage and the appropriate corrective action.'
        ],

        [
            'q' => 'What is the maximum allowable gap around a fire door?',
            'a' => 'The most common requirement for fire doors is a gap of approximately 2mm to 4mm between the edges and the top of the door leaf and the frame. The exact requirement depends on the specifications and certification of the particular door set.'
        ],

        [
            'q' => 'Can painted-over intumescent seals still work?',
            'a' => 'Paint may affect the effectiveness of an intumescent seal. The fire door should be inspected to verify that the seal remains effective and suitable for use. Regular inspection helps ensure that all protective elements continue to function correctly.'
        ],

        [
            'q' => 'Should fire doors be self-closing?',
            'a' => 'Most fire doors in key areas of a building should have suitable self-closing devices. These devices ensure the door closes properly during a fire. A properly closing fire door helps prevent the spread of fire and smoke between areas.'
        ],

        [
            'q' => 'Can fire doors be held open?',
            'a' => 'Fire doors should not be wedged or propped open. Approved hold-open devices linked to the fire alarm system can be used where required. These devices allow controlled access while maintaining fire safety requirements.'
        ],

        [
            'q' => 'How often should fire doors receive maintenance?',
            'a' => 'The maintenance of fire doors depends on their location and use. Moreover, proper maintenance also enables teams to ensure the efficient functioning of the fire doors. Periodic maintenance enables you to avoid problems that might arise with the fire door operation.'
        ],

        [
            'q' => 'What happens if a fire door fails an inspection?',
            'a' => 'If the door fails to pass the test, these issues should be dealt with as soon as possible. Griol Fire Protection has the ability to diagnose all the necessary repairs that need to be made ASAP. By acting promptly, organisations can ensure building safety while meeting fire protection standards.'
        ],

        [
            'q' => 'Can fire doors be painted?',
            'a' => 'Most fire doors can be painted if vital elements remain intact. The intumescent seal and certification information must not be obstructed or damaged. The correct paint application helps maintain the fire door’s appearance without affecting its safety performance. '
        ],

        [
            'q' => 'What information should be available on a fire door?',
            'a' => 'A fire door should include clear identification information. This will allow for easier identification of its quality and suitability. The certification information may include the name of the manufacturer. This may also entail the fire rating and other important details.'
        ],

    ],
],
[
    'title' => 'Fire Door Installation & Replacement',
    'items' => [

        [
            'q' => 'When should a fire door be replaced instead of repaired?',
            'a' => 'Fire doors might require replacement in case of serious damage or inability to fulfill necessary safety standards. Inspection will assist you in finding out the best solution.'
        ],

        [
            'q' => 'What types of fire doors does Griol install?',
            'a' => 'Griol offers installation of fire doors for various commercial and residential buildings. Selecting the right fire door will be determined by the needs of your structure and fire safety strategy.'
        ],

        [
            'q' => 'What is the difference between FD30S and FD60S fire doors?',
            'a' => 'FD30S fire doors feature a fire rating period of 30 minutes together with a smoke resistance feature. FD60S fire doors provide 60 minutes of fire resistance with smoke protection. The required ratings will be based on the building structure. '
        ],

        [
            'q' => 'How long does fire door installation take?',
            'a' => 'The installation time depends on the number of doors as well as the state or condition of the site. Griol can offer you a more specific period once your requirements are assessed. A proper assessment helps determine the installation process and the resources required for the project.'
        ],

        [
            'q' => 'Can fire doors be replaced in occupied buildings?',
            'a' => 'Yes. Griol Fire Protection can schedule the installation of fire doors to coincide with other site works to minimise disruption. Correct planning reduces disruption and makes the procedure safe and efficient.'
        ],

        [
            'q' => 'Do new fire doors need inspection after installation?',
            'a' => 'Yes, indeed. Any new fire doors must be inspected in order to ensure that they have been installed correctly. This ensures that all the safety regulations have been satisfied. Inspection ensures that the fire doors are now ready for use, since they are fireproof.'
        ],

    ],
],
[
    'title' => 'Working With Griol Fire Protection',
    'items' => [

        [
            'q' => 'What areas does Griol Fire Protection cover?',
            'a' => 'Fire door services from Griol Fire Protection are offered throughout Greater London and the Home Counties. Availability can be checked according to the location of the project. This coverage area enables clients in more than one place to have access to our fire door services.'
        ],

        [
            'q' => 'What types of properties does Griol work with?',
            'a' => 'Griol Fire Protection offers numerous property services. This encompasses services for commercial property and residential property. This can also include services for landlords and property managers. The services are customised according to the fire safety requirements of various types of properties.'
        ],

        [
            'q' => 'How quickly can Griol attend a site?',
            'a' => 'Visits to the sites will depend on their location as well as the needs of the project. Griol will help you schedule inspections and services depending on your convenience. The team will try to help you make appropriate appointments.'
        ],

        [
            'q' => 'Will Griol work alongside existing contractors?',
            'a' => 'Yes. It is possible for Griol to assist your current contractors as well as facility personnel with regard to the maintenance of fire doors. This is done in order to make sure that the process goes smoothly.'
        ],

        [
            'q' => 'Does Griol provide inspection reports?',
            'a' => 'Absolutely. The company creates a detailed inspection report for the fire doors that contains information about the current condition of each fire door and the actions needed to fix them'
        ],

        [
            'q' => 'Why choose Griol Fire Protection?',
            'a' => 'Griol makes sure that businesses maintain their fire doors in perfect condition through fire door inspections and servicing. The experts offer realistic solutions based on the specific requirements of each building.'
        ],

    ],
],
  // End of array groups
  ];
  // End of section groups
  foreach ($groups as $group): ?>
  <div style="margin-bottom:3rem;">
    <h2 style="font-size:1.5rem;font-weight:700;margin-bottom:1.5rem;"><?php echo $group['title']; ?></h2>
    <?php foreach ($group['items'] as $f): ?>
    <details class="faq-item">
      <summary><?php echo $f['q']; ?><span class="toggle">+</span></summary>
      <p><?php echo $f['a']; ?></p>
    </details>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>
