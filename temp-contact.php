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

              <iframe src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyAewMb9ujqjtaC-OO1JmtKzSFb6j1n2_Uc&center=31.483188608687136,74.33438930698001&zoom=11&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0x1d2c4d&style=element:labels.text.fill%7Ccolor:0x8ec3b9&style=element:labels.text.stroke%7Ccolor:0x1a3646&style=feature:administrative.country%7Celement:geometry.stroke%7Ccolor:0x4b6878&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0x64779e&style=feature:administrative.province%7Celement:geometry.stroke%7Ccolor:0x4b6878&style=feature:landscape.man_made%7Celement:geometry.stroke%7Ccolor:0x334e87&style=feature:landscape.natural%7Celement:geometry%7Ccolor:0x023e58&style=feature:poi%7Celement:geometry%7Ccolor:0x283d6a&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x6f9ba5&style=feature:poi%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:poi.park%7Celement:geometry.fill%7Ccolor:0x023e58&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x3C7680&style=feature:road%7Celement:geometry%7Ccolor:0x304a7d&style=feature:road%7Celement:labels.text.fill%7Ccolor:0x98a5be&style=feature:road%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:road.highway%7Celement:geometry%7Ccolor:0x2c6675&style=feature:road.highway%7Celement:geometry.stroke%7Ccolor:0x255763&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0xb0d5ce&style=feature:road.highway%7Celement:labels.text.stroke%7Ccolor:0x023e58&style=feature:transit%7Celement:labels.text.fill%7Ccolor:0x98a5be&style=feature:transit%7Celement:labels.text.stroke%7Ccolor:0x1d2c4d&style=feature:transit.line%7Celement:geometry.fill%7Ccolor:0x283d6a&style=feature:transit.station%7Celement:geometry%7Ccolor:0x3a4762&style=feature:water%7Celement:geometry%7Ccolor:0x0e1626&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x4e6d70&size=480x360"
                width="500" height="500"> </iframe>

           

                
                
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
