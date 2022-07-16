<?php
/**
 * Template Name: Events 
 */

get_header();
?>
  
<?php get_template_part('template-parts/banner')?>
   



        <div class="faqs-accordion">
              <?php 
                $faqs_tax = get_terms( array('taxonomy' => 'faq_cat','hide_empty' => false ) ); 
              
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
                                                          'post_type' => 'faqs',
                                                          'posts_per_page' => -1,
                                                          'order' => 'asc',
                                                           'faq_cat' => $faq_slug
                                                    
                                                      )); 
                                                      if (have_posts()) :  while (have_posts()) : the_post(); global $post; $post_slug = $post->post_name; ?>

                                                                <div class="col-md-4 mb-5 mr-2">
                                                                                
                                                                                                                                                
                                                                            <div class="card event ">
                                                                                 <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="Event">
                                                                                 <div class="overlayheading">Date : 9th & 10th November 2018</div>
                                                                                    <div class="card-body">
                                                                                            <h5 class="card-title">Brooke Siler </h5>                                                                                 
                                                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus non vitae viverra consectetur. Quam amet, enim at diam rutrum urna,</p>
                                                                                            <p> Cost : workshop £120.00, 1 day £195.00, 2 days £375.00</p>
                                                                                            <div class="footer-btn">
                                                                                            <a href="#" class="btn btn_info">Info</a>
                                                                                            <a href="#" class="btn active"> Enroll</a>
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





   <script
    src="https://code.jquery.com/jquery-3.3.1.js">
    </script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script>
      $('.smooth-goto').on('click', function() {  
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 70}, 1000);
    return false;
});
    </script>





<?php

get_footer();
