<?php
/*
 * Template Name: Service – Fire Door Installation
 */
get_header();
get_template_part('template-parts/service-detail', null, [
  'title'        => 'Fire Door Installation',
  'subtitle'     => 'Certified installation of FD30, FD60 and FD90 fire door sets.',
  'image'        => 'installation.jpg',
  'service_name' => 'Fire Door Installation',
  'intro'        => 'Whether replacing a single door or fitting out an entire building, our certified installers deliver complete fire door sets to manufacturer specification — so the integrity of the rated assembly is preserved on day one and every day after.',
  'benefits'     => [
    'Certified installers (FIRAS / BM TRADA)',
    'FD30, FD60 and FD90 rated door sets',
    'Complete with frames, seals and hardware',
    'Installation certificates supplied',
    'Compatible with access control & door automation',
    'Disposal of legacy doors handled',
  ],
  'process'      => [
    ['title'=>'Specification & survey','desc'=>'We confirm correct rating, hardware and frame requirements on site.'],
    ['title'=>'Manufacture & supply','desc'=>'Door sets ordered from accredited UK manufacturers.'],
    ['title'=>'Certified installation','desc'=>'Installed by FIRAS-registered fitters to maintain certification chain.'],
    ['title'=>'Sign-off & documentation','desc'=>'Installation certificate and labelling for your compliance file.'],
  ],
  'faqs'         => [
    ['q'=>'Why do installers need certification?','a'=>'An incorrectly fitted fire door — even if certified at manufacture — will not perform under fire. Certified installation preserves the tested assembly performance.'],
    ['q'=>'Can you match existing aesthetics?','a'=>'Yes, we offer a wide range of veneers, finishes and vision panels to match your décor.'],
    ['q'=>'What lead times should we expect?','a'=>'Typically 3-5 weeks for standard door sets; bespoke configurations may take longer.'],
  ],
]);
get_footer();
