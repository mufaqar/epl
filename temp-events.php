<?php
/**
 * Template Name: Events 
 */

get_header();
?>


  
<?php get_template_part('template-parts/banner')?>

new asdfasf 


    <div class="faqHead">
        <div class="container">
              <div class="row">
                        
                                        <?php   
                                              $faqs_tax = get_terms( array('taxonomy' => 'faq_cat','hide_empty' => false ) ); 
                                              foreach( $faqs_tax as $faq )  {
                                                          $faq_slug = $faq->slug ;
                                                          $faq_name = $faq->name ; ?>  
                                                          <div class="col-lg-3 col-md-4 p-0">
                                                            <div class="box">                          
                                                               <a class="smooth-goto" href="#<?php echo $faq_slug?>" ><?php echo $faq_name?></a>
                                                            </div>
                                                          </div>   
                                                              <?php
                                                  }                                                    
                                        ?>
                                       
              </div>
            </div>
        </div>



        <div class="faqs-accordion">
              <?php   foreach( $faqs_tax as $faq )  {   $faq_slug = $faq->slug ;
                                                          $faq_name = $faq->name ;  ?>

                <div class="faqscat" id="<?php echo $faq_slug ?>" >
                    <div class="graySec smooth-goto">
                            <div class="accordion-sections">
                                <div class="container">
                                    <div class="accordion-section">
                                          <h1><?php echo $faq_name ?></h1>
                                          <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <?php query_posts(array(
                                                          'post_type' => 'faqs',
                                                          'posts_per_page' => -1,
                                                          'order' => 'asc',
                                                           'faq_cat' => $faq_slug
                                                    
                                                      )); 
                                                      if (have_posts()) :  while (have_posts()) : the_post(); global $post; $post_slug = $post->post_name; ?>

                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?php echo $post_slug?>" aria-expanded="false" aria-controls="flush-<?php echo $post_slug?>">
                                                                                <?php the_title(); ?>
                                                                                </button>
                                                                            </h2>
                                                                            <div id="flush-<?php echo $post_slug?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                                  <div class="accordion-body">
                                                                                    <p><?php the_content()?></p>
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
