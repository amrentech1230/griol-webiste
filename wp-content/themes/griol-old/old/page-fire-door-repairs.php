<?php
/*
 * Template Name: Service – Fire Door Repairs
 */
get_header();
get_template_part('template-parts/service-detail', null, [
  'title'        => 'Fire Door Repairs',
  'subtitle'     => 'Rapid, certified remedial works to restore door compliance.',
  'image'        => 'repairs.jpg',
  'service_name' => 'Fire Door Repairs',
  'intro'        => 'From damaged seals and failed closers to misaligned frames, our team carries out same-week certified repairs that restore your fire doors to a compliant condition — without the cost of full replacement where it isn\'t needed.',
  'benefits'     => [
    'Same-week response across the UK',
    'Certified repair techniques only',
    'Hinges, closers, seals, glazing & ironmongery',
    'Pre-purchased parts to reduce return visits',
    'Photographic before/after evidence',
    'Repair certificates issued',
  ],
  'process'      => [
    ['title'=>'Defect triage','desc'=>'We review your inspection report or carry out a rapid site visit.'],
    ['title'=>'Quote & schedule','desc'=>'Fixed-price quotation delivered within 24-48 hours.'],
    ['title'=>'On-site repairs','desc'=>'Repairs completed using certified components and methods.'],
    ['title'=>'Documentation','desc'=>'Repair record added to your compliance file.'],
  ],
  'faqs'         => [
    ['q'=>'Can every fire door be repaired?','a'=>'Most defects are repairable — but some damage (e.g. core delamination beyond a threshold) requires replacement. We\'ll advise honestly.'],
    ['q'=>'Will the door\'s certification still be valid?','a'=>'Yes, provided certified components and methods are used — which is our standard practice.'],
    ['q'=>'Do you offer emergency call-outs?','a'=>'Yes, 24/7 emergency response is available for critical fire safety failures.'],
  ],
]);
get_footer();
