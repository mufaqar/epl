<?php
/**
 * Template Name: Contact 
 */
  get_header();
  $address = get_field('address');
  ?>

  
    <?php get_template_part('template-parts/banner');?>
    <?php
        if( have_rows('location_address') ): while ( have_rows('location_address') ) : the_row(); 

            if( have_rows('address') ): while ( have_rows('address') ) : the_row();    
            
            $index = get_row_index();
                
                $title =  get_sub_field('title');
                $address =  get_sub_field('address');
                $nearest_tube =  get_sub_field('nearest_tube'); 
                $phone =  get_sub_field('phone');
                $mail =  get_sub_field('mail');
                $lat_lon =  get_sub_field('lat_lon');

                ?>

<div class="address">
      <div class="container">
        <div class="find-us">
          <div class="padding">
            <div class="text-left">
              <h2><?php echo $title ?></h2>
            </div>
          </div>
        </div>
        <div class="address-map">
          <div class="row">
            <div class="col-md-6">
              <div class="padding">
                <div class="heading">
                  <h3>Address</h3>
                  <p><?php echo $address ?></p>                  
                </div>
                <div class="heading mt-4">
                  <h3>NEAREST TUBE</h3>
                  <p><?php echo $nearest_tube; ?></p>
                </div>
                <div class="heading mt-4">
                  <h3>CONTACT</h3>
                  <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                  <p><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="padding">                
              <?php echo $lat_lon ?> 
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

        <?php

    endwhile; endif;

endwhile; endif;

?>
   

   

  
<style>



.container {
  
}

.map{
    height: 0;
    overflow: hidden;
    padding-bottom: 100%;
    position: relative;
}

</style>






<?php

get_footer();
