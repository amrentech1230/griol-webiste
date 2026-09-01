<?php
/*
 * Template Name: Service – Compliance Checks
 */
get_header();
get_template_part('template-parts/service-detail', null, [
  'title'        => 'Fire Safety Compliance Checks',
  'subtitle'     => 'Regulatory Reform Order audits with full digital evidence packs.',
  'image'        => 'compliance.jpg',
  'service_name' => 'Compliance Checks',
  'intro'        => 'Compliance checks go beyond the door itself — assessing your wider passive fire protection strategy, documentation and management procedures. We deliver clear, defensible evidence aligned to current UK regulation, so your responsible person can act with confidence.',
  'benefits'     => [
    'Aligned to RRO 2005 & FSEA 2021',
    'Independent third-party audit',
    'Documentation & policy review',
    'Photographic site evidence',
    'Prioritised remediation roadmap',
    'Stakeholder-ready summary',
  ],
  'process'      => [
    ['title'=>'Scoping','desc'=>'We confirm scope, building type and applicable regulation.'],
    ['title'=>'Site audit','desc'=>'Engineer attends to inspect doors, compartmentation and signage.'],
    ['title'=>'Documentation review','desc'=>'We assess your fire safety logbook, policies and prior reports.'],
    ['title'=>'Compliance report','desc'=>'Comprehensive report with risk-rated findings and a roadmap.'],
  ],
  'faqs'         => [
    ['q'=>'Is this the same as a Fire Risk Assessment?','a'=>'No — an FRA is the legal duty of the responsible person and covers the entire premises. Our compliance check focuses specifically on passive fire protection elements.'],
    ['q'=>'Who should commission a compliance check?','a'=>'Building owners, managing agents, responsible persons and FM providers all benefit from independent verification.'],
    ['q'=>'What happens if defects are found?','a'=>'We provide a prioritised remediation plan and can deliver the works ourselves under a single accountable contract.'],
  ],
]);
get_footer();
