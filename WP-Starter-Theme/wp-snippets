<?php if (have_posts()) :  while (have_posts()) : the_post(); ?> <!-- LOADS WP POSTS AND STARTS A WHILE LOOP-->

   <?php echo the_content(); ?> <!-- LOADS CONTENT WITHIN THE POST -->
   <?php echo get_the_title(); ?><!-- LOADS TITLE OF THE POST -->

 <?php endwhile; else: ?> <!-- ENDS THE WHILE LOOP OF THE WP POSTS -->
     <p><?php _e('No posts were found. Sorry!'); ?></p> <!-- IF THERE AREN'T ANY POSTS, TELL THE USER THIS -->
 <?php endif; ?> <!-- ENDS THE LOADING OF WP POSTS -->

 <img src="<?php bloginfo('template_directory'); ?>/img/img01.jpg"> <!-- TELLS WP TO LOOK IN THE TEMPLATE DIRECTORY -->

<?php include('inc/inc-nav.php'); ?> <!-- PHP INSERT CODE FROM ANOTHER FILE -->

<?php
  $the_query = new WP_Query( array('category_name' => 'Resource', 'order' => DESC,  'posts_per_page'=>-1) ); //PULLS ALL POSTS WITH THE CATEGORY NAME STATED AND SETS TO VARIABLE
  if ( $the_query->have_posts() ) { //LOADS ALL THE POSTS WITHIN THAT VARIABLE

      while ( $the_query->have_posts() ) { //FOR EACH POST THAT HAS BEEN LOADED...
          $the_query->the_post(); //GRAB THE POST
          echo  '
                <div class="post">
                    <div class="post-title">', get_the_title(), '</div>
                    <div class="post-content">',the_content(), '</div>
                </div>'; //WRITE OUT IN HTML FIRST THE TTILE, THEN THE CONTENT OF THE POST
      }
  } else { //IF THERE ARE NO POSTS WITHIN THE "$the_query" VARIABLE, LOAD THIS
      echo 'no posts found';
  }
 ?>
