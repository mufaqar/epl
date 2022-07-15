
  <?php
        $testimonial = get_field('testimonial_hide_show'); 
        $testimonial_heading = get_field('testimonial_heading'); 
        $testimonial_short_code = get_field('testimonial_short_code');
        $enroll_btn = get_field('enroll_button_hide_show');
        $enroll_button_heading = get_field('enroll_button_heading');
        $enroll_button_link = get_field('enroll_button_link');
  ?>



  <?php if($testimonial == 'Show') { ?>
    
          <div class="testimonial" style="margin-bottom: 2rem;">
            <div class="container">
                <div class="title">
                    <div class="padding">
                      <h1><?php echo $testimonial_heading ?></h1>
                    </div>
                </div>
                <div class="row g-0">
                  <?php echo do_shortcode($testimonial_short_code);?>
                </div>
                <?php if($enroll_btn == 'Show') { ?>
                    <div class="primary-btn">          
                            <a href="<?php echo $enroll_button_link ?>" class="btn-border btn-dark"><?php echo $enroll_button_heading ?></a>
                            
                    </div>
                <?php } ?>
            </div>
          </div>

  <?php } ?>



