<?php
/**
 * Template Name: Events 
 */

get_header();
?>
  
<?php get_template_part('template-parts/banner')?>
   



        <div class="faqs-accordion epl_events">
              <?php 
                $faqs_tax = get_terms( array('taxonomy' => 'event_sesstion','hide_empty' => false ) ); 
              
              foreach( $faqs_tax as $faq )  {   $faq_slug = $faq->slug ;
                                                          $faq_name = $faq->name ;  ?>

                <div class="faqscat" id="<?php echo $faq_slug ?>" >
                    <div class="graySec">
                            <div class="events-sections">
                                <div class="container">
                                    <div class="event-section">
                                          <h1><?php echo $faq_name ?></h1>
                                          <div class="row gx-5">
                                                <?php query_posts(array(
                                                          'post_type' => 'events',
                                                          'posts_per_page' => -1,
                                                          'order' => 'asc',
                                                          'event_sesstion' => $faq_slug
                                                    
                                                      )); 
                                                      if (have_posts()) :  while (have_posts()) : the_post(); global $post; $post_slug = $post->post_name; 
                                                      
                                                      ?>

                                                                <div class="col-md-4 mb-5 mr-2 ">                                                
                                                                            <div class="card event ">
                                                                                
                                                                                 <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('event-thumbnail');
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/inductions.jpg" alt="Featured Thumbnail" />
                                <?php } ?>
                                                                                 <div class="overlayheading"><strong>Date:</strong> <?php the_field('date'); ?></div>
                                                                                    <div class="card-body">
                                                                                            <h5 class="card-title"><?php the_title()?> </h5>                                                                                 
                                                                                            <p class="card-text"><?php the_field('short_info'); ?></p>

                                                                                            <div style="display:flex"> 
                                                                                                <strong> Cost: </strong>
                                                                                                <p class="cost_data"><?php the_field('cost'); ?></p>
                                                                                            </div>

                                                                                            <div class="footer-btn">
                                                                                            <a href="<?php the_permalink()?>" class="btn btn_info">Info</a>
                                                                                            <a href="<?php the_field('enroll_link'); ?>" class="btn active"> Enroll</a>
                                                                                            </div>
                                                                                    </div>                                                                       

                                                                            </div>
                                                                 </div>


                                                    <?php endwhile; wp_reset_query(); else : ?>
                                                            <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                                                  <?php endif; ?>                
                                          </div>
                                    </div>
                                </div>
                          </div>
                      </div>
                  </div>

                  <?php
                                                  }                                                    
                                        ?>
              
          </div>
  
    </div>







<?php

get_footer();
