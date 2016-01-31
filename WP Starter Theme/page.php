<?php
/*
* Template Name: Default Page Template
*/
?>

<?php get_header(''); ?>

<div class="container">
        <div class="row">

		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

		<div class="col-md-12">
                <h1><?php the_title(); ?></h1>

				<?php the_content('Read More...'); ?>
		</div>

		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>

	</div>

</div>





<?php get_footer(''); ?>
