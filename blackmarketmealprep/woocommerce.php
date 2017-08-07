<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="page-content">

  <div class="inner-title">
    <h1><?php the_title(); ?></h1>
  </div>

  <div class="inner-content">

      <?php the_content(); ?>
      
  </div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();