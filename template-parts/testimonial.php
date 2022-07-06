
<?php
$testimonial = get_field('testimonial_hide_show'); 
$enroll_btn = get_field('enroll_button_hide_show');


?>



<?php if($testimonial == 'Show') { ?>
<div class="testimonial" style="margin-bottom: 2rem ;">
  <div class="container">
    <div class="title">
      <div class="padding">
        <h1>Testimonial</h1>
      </div>
    </div>
    <div class="row g-0">

      <?php query_posts(array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'desc'

      ));
      if (have_posts()) :  while (have_posts()) : the_post(); 
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

          <div class="col-md-4">
            <img src="<?php echo $url ?>" alt="traainer">
          </div>

        <?php endwhile;
        wp_reset_query();
      else : ?>
        <h2><?php _e('Nothing Found', 'lbt_translate'); ?></h2>
      <?php endif; ?>

    </div>
    <?php if($enroll_btn == 'Show') { ?>
        <div class="enroll">
            <div class="padding">
                <a href="<?php echo home_url('/contact-us'); ?>">Enroll Now</a>
            </div>
        </div>
    <?php } ?>
  </div>
</div>

<?php } ?>



