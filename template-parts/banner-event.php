

<div class="pricing-banner" style="background-color:#66cbd9;background-image: url('<?php the_field('banner_background_image'); ?>');">
		<div class="banner-content">       
			
         <h1><?php echo the_title(); ?> </h1> 
         		
			<p><?php the_field('short_info'); ?></p> 
			
			<div class="event-banner-content">

    
    <div class="cost"> 
        <strong> Date: </strong>
        <div><?php the_field('date'); ?></div>
    </div>
    <div class="cost"> 
        <strong> Cost: </strong>
        <div><?php the_field('cost'); ?></div>
    </div>
    <div class="primary-btn">
        <a href="<?php the_field('enroll_link'); ?>" class="btn-border btn-light"> Enrol</a>
    </div>

</div>

		</div>
	</div>





