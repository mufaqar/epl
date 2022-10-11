<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CT_Custom
 */

get_header();

$count_blue = 0;
$count_white = 0;

$tp = get_template_directory_uri(); 

?>


<?php get_template_part('template-parts/banner')?>

  <!-- <div class="class-detail-1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="padding">
            <?php if (has_post_thumbnail()) { ?>

              <?php //the_post_thumbnail('full'); ?>

            <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="padding">
            <p><?php //the_content() ?>
          </div>
        </div>
      </div>
    </div>
  </div> -->


<?php if( have_rows('classes_feature') ): ?>
    <?php  while( have_rows('classes_feature') ): the_row();   $index = get_row_index(); ?>
        <?php if( get_row_layout() == 'with_blue_background' ):  ?>          
          <div class="class-detail-2 single_class">
            <div class="row g-0">
              <div class="col-md-6 clr">
              <div class="padding">
              <h1><?php  the_sub_field('title'); ?></h1>  
              <div class="class_inner_short"><?php the_sub_field('short_info'); ?></div>      
              
              </div>
              </div>
              <div class="col-md-6">
                <div class="side-img">              
                  <img src="<?php  the_sub_field('image'); ?>" alt="trainer" class="card_img<?php echo $index?>">
                </div>
              </div>
            </div>
          </div>
          
        <?php  elseif( get_row_layout() == 'with_white_background' ): $image = get_sub_field('image');?>
           <div class="class-detail-3 single_class">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <div class="side-img">
                        <img src="<?php  the_sub_field('image'); ?>" alt="trainer" class="card_img<?php echo $index?>">
                      </div>
                    </div>
                    <div class="col-md-6 clr">
                    <div class="padding">
                    <h1><?php  the_sub_field('title'); ?></h1>                     
                    <div class="class_inner_short"><?php the_sub_field('short_info'); ?></div> 
                    </div>
                  </div>
            </div>
        <?php  endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_template_part('template-parts/testimonial')?>


<style>
  .class-detail-2 .left h1 {
    padding: 0% 0% 4% 0%;
    color: #53565a;
    font-family: "Brandon Grotesque Black", Sans-serif;
    font-size: 33px;
    font-weight: 600;
    margin: 0;
  }
  .class-detail-2 .left {
    text-align: center;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .class-detail-2 .left div{
    max-width: 550px;
  }
  ._maxheigh{
    max-height: 105px;
    overflow: hidden;
  }
  ._arrow{
    cursor: pointer;
  }
  ._w100{
    height: 100% !important;
  }
  .pt-pb{
    margin: 2.5rem auto !important;
  }
</style>







<?php
get_footer();
