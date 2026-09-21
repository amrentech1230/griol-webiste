<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

<!-- POST HERO -->
<section class="page-hero">
  <?php if (has_post_thumbnail()): ?>
  <?php the_post_thumbnail('full', ['class' => 'page-hero-img', 'alt' => get_the_title()]); ?>
  <?php else: ?>
  <div style="position:absolute;inset:0;background:var(--charcoal);"></div>
  <?php endif; ?>
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up" style="position:relative;">
    <?php $cats = get_the_category(); if ($cats): ?>
    <p class="eyebrow"><?php echo esc_html($cats[0]->name); ?></p>
    <?php endif; ?>
    <h1 style="font-size:clamp(1.5rem,4vw,3rem);"><?php the_title(); ?></h1>
    <div style="margin-top:.75rem;display:flex;gap:1.25rem;flex-wrap:wrap;font-size:.875rem;color:rgba(255,255,255,.7);">
      <span><?php echo get_the_date('j F Y'); ?></span>
      <span><?php echo get_the_author(); ?></span>
      <span><?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min read</span>
    </div>
    <nav class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span>
      <a href="<?php echo home_url('/blog'); ?>">Blog</a> <span>/</span>
      <?php the_title(); ?>
    </nav>
  </div>
</section>

<!-- CONTENT + SIDEBAR -->
<div class="container-page single-layout">

  <!-- MAIN CONTENT -->
  <article class="single-content">
    <div class="post-body">
    <?php
    $post_id = get_the_ID();
    $gbf_intro = get_post_meta($post_id, '_gbf_intro', true);

    if ($gbf_intro) :
        // Helper: render stored content.
        // Rich-text fields now store real HTML (from TinyMCE); output it safely
        // with wp_kses_post so bullet lists etc. are not double-escaped. Fall back
        // to the legacy newline/"- " bullet parsing for older plain-text posts.
        function gbf_render_text($text) {
            if ($text !== strip_tags($text)) {
                return wp_kses_post($text);
            }
            $lines = explode("\n", trim($text));
            $out = ''; $in_ul = false;
            foreach ($lines as $line) {
                $line = trim($line);
                if (!$line) { if ($in_ul) { $out .= '</ul>'; $in_ul = false; } $out .= '<br>'; continue; }
                if (str_starts_with($line, '- ')) {
                    if (!$in_ul) { $out .= '<ul>'; $in_ul = true; }
                    $out .= '<li>' . esc_html(substr($line, 2)) . '</li>';
                } else {
                    if ($in_ul) { $out .= '</ul>'; $in_ul = false; }
                    $out .= '<p>' . esc_html($line) . '</p>';
                }
            }
            if ($in_ul) $out .= '</ul>';
            return $out;
        }

        $g = function($key) use ($post_id) { return get_post_meta($post_id, '_gbf_' . $key, true); };

        // Table of Contents
        $toc = [
            'why'        => 'Why Is ' . get_the_title() . ' Important?',
            'understand' => 'Understanding ' . get_the_title(),
            'factors'    => 'Key Factors to Consider',
            'issues'     => 'Common Issues',
            'practices'  => 'Best Practices',
            'griol'      => 'Why Choose Griol?',
            'conclusion' => 'Conclusion',
            'faq'        => 'Frequently Asked Questions',
        ];
        echo '<nav class="gbf-toc"><p class="gbf-toc-title">On This Page</p><ol>';
        $i = 1;
        foreach ($toc as $anchor => $label) {
            echo '<li><a href="#gbf-' . $anchor . '">' . esc_html($label) . '</a></li>';
        }
        echo '</ol></nav>';

        // Introduction
        echo gbf_render_text($gbf_intro);

        // Why Important
        if ($g('why_important')) :
            echo '<h2 id="gbf-why">Why Is ' . esc_html(get_the_title()) . ' Important?</h2>';
            echo gbf_render_text($g('why_important'));
        endif;

        // Understanding
        if ($g('understanding')) :
            echo '<h2 id="gbf-understand">Understanding ' . esc_html(get_the_title()) . '</h2>';
            echo gbf_render_text($g('understanding'));
        endif;

        // Key Factors
        if ($g('key_factors')) :
            echo '<h2 id="gbf-factors">Key Factors to Consider</h2>';
            echo gbf_render_text($g('key_factors'));
        endif;

        // Inline CTA
        if ($g('cta_heading')) :
            $btn_label = $g('cta_button_label') ?: 'Contact Griol';
            $btn_url   = $g('cta_button_url')   ?: home_url('/contact');
            echo '<div class="gbf-cta-block">';
            echo '<h3>' . esc_html($g('cta_heading')) . '</h3>';
            if ($g('cta_text')) echo '<div class="gbf-cta-text">' . wp_kses_post($g('cta_text')) . '</div>';
            echo '<a href="' . esc_url($btn_url) . '" class="btn-fire">' . esc_html($btn_label) . '</a>';
            echo '</div>';
        endif;

        // Common Issues
        if ($g('common_issues')) :
            echo '<h2 id="gbf-issues">Common Issues</h2>';
            echo gbf_render_text($g('common_issues'));
        endif;

        // Best Practices
        if ($g('best_practices')) :
            echo '<h2 id="gbf-practices">Best Practices</h2>';
            echo gbf_render_text($g('best_practices'));
        endif;

        // Why Choose Griol
        echo '<h2 id="gbf-griol">Why Choose Griol?</h2>';
        echo '<ul>';
        foreach ([
            'Professional, certified service',
            'London-focused — Greater London & Home Counties',
            'Experienced, FDIS-certified team',
            'Reliable, responsive support',
            'Inspection, installation, maintenance and repair services',
        ] as $item) echo '<li>' . esc_html($item) . '</li>';
        echo '</ul>';

        // Conclusion
        if ($g('conclusion')) :
            echo '<h2 id="gbf-conclusion">Conclusion</h2>';
            echo gbf_render_text($g('conclusion'));
        endif;

        // FAQ Accordion
        $faq_raw = $g('faq');
        if ($faq_raw) :
            $faqs = json_decode($faq_raw, true);
            if (is_array($faqs) && $faqs) :
                echo '<h2 id="gbf-faq">Frequently Asked Questions</h2>';
                echo '<div class="gbf-faq-accordion">';
                foreach ($faqs as $i => $item) :
                    if (empty($item['q'])) continue;
                    $num = $i + 1;
                    echo '<div class="gbf-acc-item" id="gbf-acc-' . $num . '">';
                    echo '<button class="gbf-acc-trigger" aria-expanded="false">';
                    echo '<span class="gbf-acc-num">' . $num . '</span>';
                    echo '<span class="gbf-acc-q">' . esc_html($item['q']) . '</span>';
                    echo '<span class="gbf-acc-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>';
                    echo '</button>';
                    echo '<div class="gbf-acc-panel">';
                    $answer = $item['a'] ?? '';
                    if ($answer !== strip_tags($answer)) {
                        echo '<div class="gbf-acc-a">' . wp_kses_post($answer) . '</div>';
                    } else {
                        echo '<p class="gbf-acc-a">' . esc_html($answer) . '</p>';
                    }
                    echo '</div>';
                    echo '</div>';
                endforeach;
                echo '</div>';
            endif;
        endif;

    else :
        the_content();
    endif;
    ?>
    </div>

    <!-- TAGS -->
    <?php $tags = get_the_tags(); if ($tags): ?>
    <div class="post-tags">
      <?php foreach ($tags as $tag): ?>
      <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- BACK LINK -->
    <a href="<?php echo home_url('/blog'); ?>" class="post-back-link">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
      Back to Blog
    </a>
  </article>

  <!-- SIDEBAR -->
  <aside class="single-sidebar">

    <!-- CTA CARD -->
    <div class="sidebar-header" style="margin-bottom:1.5rem;">
      <h3>Need a Fire Door Inspection?</h3>
      <p>Our FDIS-certified specialists cover Greater London and the Home Counties.</p>
      <a href="<?php echo home_url('/contact'); ?>" class="btn-fire sidebar-link" style="margin-top:1rem;width:100%;justify-content:center;">
        Request Inspection
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>

    <!-- RECENT POSTS -->
    <div class="sidebar-recent">
      <h4 class="sidebar-recent-title">Recent Articles</h4>
      <?php
      $recent = new WP_Query(['posts_per_page' => 4, 'post__not_in' => [get_the_ID()]]);
      while ($recent->have_posts()): $recent->the_post();
      ?>
      <a href="<?php the_permalink(); ?>" class="sidebar-post">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('thumbnail', ['class' => 'sidebar-post-img', 'loading' => 'lazy']); ?>
        <?php endif; ?>
        <div>
          <p class="sidebar-post-title"><?php the_title(); ?></p>
          <span class="sidebar-post-date"><?php echo get_the_date('j M Y'); ?></span>
        </div>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- SERVICES LINKS -->
    <div class="sidebar-services">
      <h4 class="sidebar-recent-title">Our Services</h4>
      <?php
      $services = [
        'Fire Door Inspections'  => '/fire-door-inspections',
        'Fire Door Maintenance'  => '/fire-door-maintenance',
        'Fire Door Installation' => '/fire-door-installation',
        'Fire Door Repairs'      => '/fire-door-repairs',
        'Compliance Checks'      => '/compliance-checks',
      ];
      foreach ($services as $label => $url): ?>
      <a href="<?php echo home_url($url); ?>" class="sidebar-service-link">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        <?php echo $label; ?>
      </a>
      <?php endforeach; ?>
    </div>

  </aside>
</div>

<?php endwhile; ?>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>
