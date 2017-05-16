<?php
/*
* Template Name: Posts
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

  <div> <?php echo get_the_title(); ?></div>
  <hr>

<main>
  <div class="container mtb-15">
    <?php the_content(); ?>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
