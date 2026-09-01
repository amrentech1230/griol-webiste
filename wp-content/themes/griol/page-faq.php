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
    <h1>Frequently asked questions</h1>
    <p>Everything you need to know about UK fire door regulation, inspection and compliance.</p>
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> FAQ's</nav>
  </div>
</section>

<!-- FAQ GROUPS -->
<section class="container-page" style="padding:5rem 0;max-width:56rem;">
  <?php
  $groups = [
    [
      'title' => 'Inspection & Compliance',
      'items' => [
        ['q'=>'How often must fire doors be inspected in the UK?','a'=>'Under the Fire Safety (England) Regulations 2022, communal fire doors in residential buildings over 11m must be inspected quarterly, and flat entrance doors annually. Commercial premises follow the RRO 2005 and BS 9999, typically requiring 6-monthly checks.'],
        ['q'=>'Who is the \'responsible person\' for fire doors?','a'=>'The responsible person is defined under the Regulatory Reform (Fire Safety) Order 2005 — usually the employer, owner or person with control of the premises. They have a legal duty to ensure fire doors are maintained and inspected.'],
        ['q'=>'What standards apply to fire doors?','a'=>'Key standards include BS 8214 (timber fire doors), BS 9999 (fire safety in buildings), BS EN 1634 (fire test) and BM TRADA Q-Mark certification.'],
        ['q'=>'Are FDIS inspectors legally required?','a'=>'Not legally mandated, but FDIS-certified inspectors are widely recognised as the competent benchmark and are recommended by government and industry guidance.'],
      ],
    ],
    [
      'title' => 'Defects & Repairs',
      'items' => [
        ['q'=>'What is the maximum allowable gap around a fire door?','a'=>'Typically 2-4mm consistently around the leaf, and up to 8mm at the threshold (subject to manufacturer specification and intumescent strip placement).'],
        ['q'=>'Can painted-over intumescent seals still work?','a'=>'Light overspray is usually acceptable, but heavy paint build-up can prevent the seal from expanding correctly and may render the door non-compliant.'],
        ['q'=>'Should fire doors be self-closing?','a'=>'Yes — fire doors must close fully into their frames from any open position to maintain compartmentation. Hold-open devices must be linked to the fire alarm system.'],
      ],
    ],
    [
      'title' => 'Working with Griol',
      'items' => [
        ['q'=>'Do you cover Greater London and the Home Counties ?','a'=>'Yes, we operate nationwide with engineers based across Greater London and the Home Counties.'],
        ['q'=>'How quickly can you attend site?','a'=>'Standard surveys are scheduled within 5-10 working days. Emergency call-outs are available 24/7.'],
        ['q'=>'Will you work alongside our existing contractors?','a'=>'Absolutely — we frequently collaborate with FM teams, principal contractors and managing agents.'],
      ],
    ],
  ];
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
