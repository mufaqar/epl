<?php
/**
 * Template Name: Team 
 */

get_header();





?>



    <?php get_template_part('template-parts/banner')?>

    

    <div class="team-members">
        <div class="row g-0">


        <?php query_posts(array(
            'post_type' => 'team',
            'posts_per_page' => -1,
			'order' => 'desc'
			
        )); 
		if (have_posts()) :  while (have_posts()) : the_post();
        
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

            <div class="col-md-4 light-clr-gray team-wrapper" style="background-image: url('<?php echo $url ?>');background-size: cover;background-repeat: no-repeat;">
                <div class="member">
                    <a href="<?php the_permalink()?>"><?php the_title()?></a>
                </div>
                <div id="_overlay">
                    <img src="<?php the_field('team_image'); ?>" alt="overlay image">
                </div>
            </div>


            <?php endwhile; wp_reset_query(); else : ?>
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?> 

        </div>
    </div>

<style>



</style>


<?php

get_footer();
