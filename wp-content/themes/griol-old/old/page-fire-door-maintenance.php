<?php
/*
 * Template Name: Service – Fire Door Maintenance
 */
get_header();
get_template_part('template-parts/service-detail', null, [
  'title'        => 'Fire Door Maintenance',
  'subtitle'     => 'Planned preventative maintenance keeping every door compliant year-round.',
  'image'        => 'maintenance.jpg',
  'service_name' => 'Fire Door Maintenance',
  'intro'        => 'Fire doors are mechanical assemblies that wear with use. Our planned maintenance programmes keep your door sets operating to manufacturer specification — preventing failure, reducing reactive costs and providing a continuous compliance audit trail.',
  'benefits'     => [
    'Scheduled quarterly or biannual visits',
    'Asset register with photographic baseline',
    'Hardware lubrication and adjustment',
    'Intumescent and smoke seal replacement',
    'Reduces reactive repair costs',
    'Full service history and certificates',
  ],
  'process'      => [
    ['title'=>'Asset survey & tagging','desc'=>'We build a complete digital register of every door on site.'],
    ['title'=>'Planned visits','desc'=>'Engineers attend on agreed schedule with all consumables.'],
    ['title'=>'Service report','desc'=>'Each visit is logged with works completed and any escalations.'],
    ['title'=>'Continuous compliance','desc'=>'Renewal reminders and updated certificates supplied automatically.'],
  ],
  'faqs'         => [
    ['q'=>'How often should fire doors be maintained?','a'=>'We recommend at least every 6 months in commercial settings, and quarterly in high-traffic or high-risk environments.'],
    ['q'=>'Do you replace damaged components on the visit?','a'=>'Yes — common items like seals, closers and hinges are carried as standard stock.'],
    ['q'=>'Is maintenance covered under our existing FM contract?','a'=>'Often not — most general FM contracts exclude certified passive fire works. We\'d be happy to review yours.'],
  ],
]);
get_footer();
