<?php get_header(); ?>
<div class="container-page" style="padding:5rem 0;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div style="margin-top:1.5rem;"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
