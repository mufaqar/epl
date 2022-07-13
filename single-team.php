<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CT_Custom
 */

get_header();

$insta_link = get_field('instagram_link');
?>

   
   <div class="member-detail">
     <div class="container">
     <?php
							while ( have_posts() ) :
								the_post(); ?>

              <div class="row">
                <div class="col-md-6">
                  <div class="padding">
                    <div class="member-img">
                      <img src="<?php  the_field('team_image'); ?>" alt="<?php the_title()?>" /> 
                      <br/>
                      <br/>
                    

                      <div class="w-100">
							
				                <div class="team-btn">
                    <a class="btn btn-team" href="<?php echo home_url('/our-team'); ?>">BACK TO OUR TEAM </a>
                </div>  
            </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="padding">
                    <h1><?php the_title()?></h1>
                    <?php if ($insta_link != '') {  ?>

                      <h3><a href="<?php the_field('instagram_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="insta" > @<?php the_field('instagram_name'); ?></a></h3>

                      <?php

                    }  ?> 
                   
                    <div class="member-width">
                      <?php the_content()?>
                      <div class="member-btn">
                        <a href="<?php the_field('booking_link'); ?>">BOOK A CLASS WITH <?php the_title()?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

           <?php endwhile; // End of the loop.
            ?>



     </div>
    </div>

   
  

<?php

get_footer();
