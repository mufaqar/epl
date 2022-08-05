<?php

/**
 * Template Name: Teacher Traning Child 
 */

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CT_Custom
 */

get_header();

$last_content = get_field('last_content');
$teacher_inner_page_video = get_field('teacher_inner_page_video');

$hide_last_block = get_field('hide_last_block');

$count_blue = 0;
$count_white = 0;

?>


<?php get_template_part('template-parts/banner') ?>



<?php if ($teacher_inner_page_video != '') { ?>
  <div class="training-section">
    <div class="container">
      <div class="new-offer padding">
        <div class="title ">
         
          <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="<?php echo $teacher_inner_page_video; ?>"></iframe>
                </div>



        </div>
      </div>
    </div>
  </div>
<?php  } ?>




<?php if (have_rows('teacher_traning_child')) : ?>
  <?php while (have_rows('teacher_traning_child')) : the_row();
    $index = get_row_index(); ?>
    <?php if (get_row_layout() == 'with_blue_background') :  ?>
      <div class="class-detail-2 single_class">
        <div class="row g-0">
          <div class="col-md-6 clr">
            <div class="padding">
              <h1><?php the_sub_field('title'); ?></h1>
              <div class="teacher_traning_child_content">
                <p><?php the_sub_field('short_info'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="side-img">
              <img src="<?php the_sub_field('image'); ?>" alt="trainer" class="card_img<?php echo $index ?>">
            </div>
          </div>
        </div>
      </div>

    <?php elseif (get_row_layout() == 'with_white_background') : $image = get_sub_field('image'); ?>
      <div class="class-detail-3 single_class">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="side-img">
              <img src="<?php the_sub_field('image'); ?>" alt="trainer" class="card_img<?php echo $index ?>">
            </div>
          </div>
          <div class="col-md-6 clr ssg_ul">
            <div class="padding">
              <h1><?php the_sub_field('title'); ?></h1>
              <div class="teacher_traning_child_content">
                <p><?php the_sub_field('short_info'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ($hide_last_block == 'No') { ?>

  <div class="class-detail-2">
  <div class="row g-0">
    <div class="col-md-6 left ssg_ul">
      <div class="padding" style="padding: 3rem;">
        <h1><?php echo $last_content['left_heading']; ?></h1>
        <div class="last_content"><p><?php echo $last_content['left_content']; ?></p></div>
      </div>
    </div>
    <div class="col-md-6 clr ssg_ul" style="padding: 3rem;">
      <div class="padding">
        <h1><?php echo $last_content['right_heading']; ?></h1>
        <div class="last_content"><p><?php echo $last_content['right_content']; ?></p></div>
      </div>
    </div>
  </div>
</div>
  
  
  <?php } ?>





<?php get_template_part('template-parts/testimonial') ?>



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

  .class-detail-2 .left div {
    max-width: 550px;
  }

  ._maxheigh {
    max-height: 105px;
    overflow: hidden;
  }

  ._arrow {
    cursor: pointer;
  }

  ._w100 {
    height: 100% !important;
  }

  .pt-pb {
    margin: 2.5rem auto !important;
  }

 
</style>


<?php


get_footer();
