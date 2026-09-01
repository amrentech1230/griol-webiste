<?php
/*
 * Template Name: Service – Fire Door Inspections
 */
get_header();
get_template_part('template-parts/service-detail', null, [
  'title'        => 'Fire Door Inspections',
  'subtitle'     => 'FDIS-certified inspections aligned to BS 8214 with full digital evidence.',
  'image'        => 'hero-inspection.jpg',
  'service_name' => 'Fire Door Inspections',
  'intro'        => 'Our certified inspectors carry out detailed, independent fire door inspections across the UK. Every door is assessed against more than 30 compliance criteria — from gaps and seals to hardware, signage and certification — giving your responsible person a complete, audit-ready record.',
  'benefits'     => [
    'FDIS-certified independent inspectors',
    'Photographic evidence on every door',
    'Defect grading with priority levels',
    'Digital report within 48 hours',
    'Aligned to Fire Safety (England) Regulations 2022',
    'Recommended remedial works included',
  ],
  'process'      => [
    ['title'=>'Site survey & access planning','desc'=>'We schedule visits to minimise disruption and confirm access.'],
    ['title'=>'Door-by-door inspection','desc'=>'Each door is assessed and tagged with a unique reference.'],
    ['title'=>'Digital report & evidence pack','desc'=>'Delivered within 48 hours including photographs and prioritised defects.'],
    ['title'=>'Remediation proposal','desc'=>'Optional fixed-price quote to address all identified non-conformities.'],
  ],
  'faqs'         => [
    ['q'=>'How long does an inspection take?','a'=>'Approximately 15-20 minutes per door, depending on complexity and access.'],
    ['q'=>'What standards do you inspect against?','a'=>'BS 8214, BS 9999, BM TRADA Q-Mark guidance and the Fire Safety (England) Regulations 2022.'],
    ['q'=>'Do you cover all UK regions?','a'=>'Yes, we operate nationwide with engineers based across England, Scotland and Wales.'],
  ],
]);
get_footer();
