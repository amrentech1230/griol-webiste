<?php
/*
 * Template Name: Blog
 */
get_header();

$paged          = get_query_var('paged') ?: 1;
$posts_per_page = 6;

$q = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => $posts_per_page,
    'paged'          => $paged,
]);

// Grab latest post as featured (separate query, page 1 only)
$featured_post = null;
if ($paged === 1) {
    $fq = new WP_Query(['post_type' => 'post', 'posts_per_page' => 1]);
    if ($fq->have_posts()) { $fq->the_post(); $featured_post = get_post(); wp_reset_postdata(); }
}

// Collect all categories from published posts
$all_cats = get_categories(['hide_empty' => true]);
?>

<!-- ── HERO ─────────────────────────────────────────────────────────────── -->
<section class="bl-hero">
  <div class="bl-hero-bg"></div>
  <div class="bl-hero-overlay"></div>
  <div class="container-page bl-hero-inner">
    <span class="bl-eyebrow">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
      Resources &amp; Insights
    </span>
    <h1 class="bl-hero-title">Fire Safety <span class="bl-title-accent">Blog</span></h1>
    <p class="bl-hero-desc">Expert guidance on fire door compliance, inspections, maintenance and UK fire safety regulations.</p>
    <div class="bl-hero-stats">
      <div>
        <span class="bl-stat-num"><?php echo wp_count_posts()->publish; ?>+</span>
        <span class="bl-stat-label">Articles</span>
      </div>
      <div>
        <span class="bl-stat-num"><?php echo count($all_cats); ?></span>
        <span class="bl-stat-label">Topics</span>
      </div>
      <div>
        <span class="bl-stat-num">Free</span>
        <span class="bl-stat-label">Always</span>
      </div>
    </div>
    <nav class="breadcrumb" style="margin-top:2rem;">
      <a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> Blog
    </nav>
  </div>
  <div class="bl-hero-scroll">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
</section>

<?php if ($featured_post && $paged === 1) :
    $fid      = $featured_post->ID;
    $flink    = get_permalink($fid);
    $ftitle   = get_the_title($fid);
    $fexcerpt = wp_trim_words(get_the_excerpt($fid), 28);
    $fdate    = get_the_date('j F Y', $fid);
    $fauthor  = get_the_author_meta('display_name', get_post_field('post_author', $fid));
    $fread    = ceil(str_word_count(strip_tags(get_post_field('post_content', $fid))) / 200);
    $fcats    = get_the_category($fid);
    $fcat     = $fcats ? esc_html($fcats[0]->name) : '';
?>
<!-- ── FEATURED POST ─────────────────────────────────────────────────────── -->
<div class="bl-featured-wrap">
  <div class="container-page">
    <div class="bl-featured">

      <a href="<?php echo esc_url($flink); ?>" class="bl-featured-img-wrap">
        <?php if (has_post_thumbnail($fid)) : ?>
          <?php echo get_the_post_thumbnail($fid, 'large', ['class' => 'bl-featured-img', 'loading' => 'eager']); ?>
        <?php else : ?>
          <div class="bl-featured-img-placeholder">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          </div>
        <?php endif; ?>
        <?php if ($fcat) : ?>
          <span class="bl-featured-cat"><?php echo $fcat; ?></span>
        <?php endif; ?>
      </a>

      <div class="bl-featured-body">
        <span class="bl-featured-badge">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          Featured Article
        </span>
        <h2 class="bl-featured-title"><a href="<?php echo esc_url($flink); ?>"><?php echo esc_html($ftitle); ?></a></h2>
        <p class="bl-featured-excerpt"><?php echo esc_html($fexcerpt); ?></p>
        <div class="bl-featured-meta">
          <span class="bl-meta-author">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            <?php echo esc_html($fauthor); ?>
          </span>
          <span class="bl-meta-date">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php echo esc_html($fdate); ?>
          </span>
          <span class="bl-meta-read">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <?php echo $fread; ?> min read
          </span>
        </div>
        <a href="<?php echo esc_url($flink); ?>" class="bl-featured-btn">
          Read Article
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>

<!-- ── GRID SECTION ──────────────────────────────────────────────────────── -->
<section class="bl-grid-section">
  <div class="container-page">

    <div class="bl-section-header">
      <div>
        <p class="eyebrow">All Articles</p>
        <h2 class="bl-section-title">Latest from the Blog</h2>
      </div>

      <?php if ($all_cats) : ?>
      <div class="bl-cats" role="group" aria-label="Filter by category">
        <button class="bl-cat-btn active" data-cat="all">All</button>
        <?php foreach ($all_cats as $cat) : ?>
          <button class="bl-cat-btn" data-cat="<?php echo esc_attr($cat->slug); ?>">
            <?php echo esc_html($cat->name); ?>
          </button>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>

    <?php if ($q->have_posts()) : ?>

    <div class="bl-grid" id="blog-grid">
      <?php while ($q->have_posts()) : $q->the_post();
        $cats      = get_the_category();
        $cat_slug  = $cats ? $cats[0]->slug  : '';
        $cat_name  = $cats ? esc_html($cats[0]->name) : '';
        $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
      ?>
      <article class="bl-card" data-cat="<?php echo esc_attr($cat_slug); ?>">

        <a href="<?php the_permalink(); ?>" class="bl-card-img-wrap">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', ['class' => 'bl-card-img', 'loading' => 'lazy']); ?>
          <?php else : ?>
            <div class="bl-card-img-placeholder">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            </div>
          <?php endif; ?>
          <?php if ($cat_name) : ?>
            <span class="bl-card-cat-badge"><?php echo $cat_name; ?></span>
          <?php endif; ?>
        </a>

        <div class="bl-card-body">
          <div class="bl-card-meta">
            <span><?php echo get_the_date('j M Y'); ?></span>
            <span class="bl-card-dot"></span>
            <span><?php echo $read_time; ?> min read</span>
          </div>
          <h3 class="bl-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <p class="bl-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
          <div class="bl-card-footer">
            <span class="bl-card-author"><?php echo get_the_author(); ?></span>
            <a href="<?php the_permalink(); ?>" class="bl-card-link">
              Read
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

      </article>
      <?php endwhile; ?>
    </div>

    <div id="bl-no-results" class="bl-no-results" style="display:none;">No articles found in this category.</div>

    <!-- LOAD MORE -->
    <?php if ($q->max_num_pages > 1) : ?>
    <div class="bl-load-more-wrap">
      <div class="bl-spinner" id="blog-spinner"><span></span><span></span><span></span></div>
      <button
        class="bl-load-more-btn"
        id="load-more-btn"
        data-page="<?php echo $paged; ?>"
        data-max="<?php echo $q->max_num_pages; ?>"
        data-nonce="<?php echo wp_create_nonce('griol_load_more'); ?>"
      >
        Load More Articles
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <span class="bl-load-more-hint">Showing <?php echo min($posts_per_page, $q->found_posts); ?> of <?php echo $q->found_posts; ?> articles</span>
    </div>
    <?php endif; ?>

    <!-- PAGINATION (fallback) -->
    <?php if ($q->max_num_pages > 1) : ?>
    <nav class="bl-pagination" aria-label="Blog pagination">
      <?php echo paginate_links([
        'total'     => $q->max_num_pages,
        'current'   => $paged,
        'prev_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
        'next_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>',
      ]); ?>
    </nav>
    <?php endif; ?>

    <?php else : ?>
    <div class="bl-empty">
      <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color:var(--border)"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      <p>No posts found. Check back soon.</p>
    </div>
    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>
