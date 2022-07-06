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

$count_blue = 0;
$count_white = 0;

?>


<?php get_template_part('template-parts/banner')?>


<div class="class-detail-1">
  <div class="container">

  <?php
						while ( have_posts() ) : the_post();
							?>

    
<div class="row align-items-center">
      <div class="col-md-6">
        <div class="padding">
          <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="padding">
          <p><?php the_content(); ?></p>        
        </div>
      </div>
    <?php 
        endwhile; // End of the loop.
        ?> 
    </div>
  </div>
</div>




<?php if( have_rows('teacher_traning_child') ): ?>
    <?php while( have_rows('teacher_traning_child') ): the_row(); ?>
        <?php if( get_row_layout() == 'with_blue_background' ): ?>
          

          
          <div class="class-detail-2">
            <div class="row g-0">
              <div class="col-md-6 clr">
              <div class="padding pt-pb">
                <h1><?php  the_sub_field('title'); ?></h1>
                
                  <?php 
                    $count_blue++;
                    $shortinfo = get_sub_field('short_info');
                    $datalength= strlen($shortinfo);
                    if($datalength > 230){ ?>
                        <p class="short_info_more_content<?php echo $count_blue ?> _maxheigh">
                          <?php the_sub_field('short_info'); ?>
                        </p>
                    <?php    
                    }else{ ?>
                        <p class="short_info_less_content _maxheigh">
                            <?php the_sub_field('short_info'); ?>
                        </p>
                    <?php  
                    }

                  ?>
                </p>
                <?php  if($datalength > 230){ ?>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-down.svg" class="_arrow _arrowdown<?php echo $count_blue ?>" alt="arrow-down" onclick="handleHideShowContent_Blue(<?php echo $count_blue ?>);">
                <?php } ?>
                
              </div>
              </div>
              <div class="col-md-6">
                <div class="side-img" style="height: 100%;">
                  <img src="<?php  the_sub_field('image'); ?>" alt="trainer" class="_card_img<?php echo $count_blue ?>">
                </div>
              </div>
            </div>
          </div>
          
        <?php elseif( get_row_layout() == 'with_white_background' ): 
            $image = get_sub_field('image');
            $count_white++;
            ?>
           <div class="class-detail-3">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <div class="side-img" style="height: 100%;">
                        <img src="<?php  the_sub_field('image'); ?>" alt="trainer" class="w_card_img<?php echo $count_white ?>">
                      </div>
                    </div>
                    <div class="col-md-6 clr">
                    <div class="padding pt-pb">

                    <h1><?php  the_sub_field('title'); ?></h1>

                    <?php 
                      
                
                      $shortinfo = get_sub_field('short_info');
                      $datalength= strlen($shortinfo);
                      if($datalength > 230){ ?>
                          <p class="short_info_more_content_w<?php echo $count_white ?> _maxheigh">
                            <?php the_sub_field('short_info'); ?>
                          </p>
                      <?php    
                      }else{ ?>
                          <p class="short_info_less_content _maxheigh">
                              <?php the_sub_field('short_info'); ?>
                          </p>
                      <?php  
                      }

                    ?>
                    <?php  if($datalength > 230){ ?>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-down.svg" class="_arrow _arrowdownwhite<?php echo $count_white ?>" alt="arrow-down" onclick="handleHideShowContent_White(<?php echo $count_white ?>)">
                      <?php } ?>
                  </div>
                    </div>
                  </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<div class="class-detail-2">
  <div class="row g-0">
    <div class="col-md-6 left">
      <div class="padding" style="padding: 3rem;">
        <h1><?php  echo $last_content['left_heading']; ?></h1>
        <p><?php  echo $last_content['left_content']; ?></p>
      </div>
    </div>
    <div class="col-md-6 clr" style="padding: 3rem;">
      <div class="padding">
        <h1><?php  echo $last_content['right_heading']; ?></h1>
        <p><?php  echo $last_content['right_content']; ?></p>
      </div>
    </div>
  </div>
</div>




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

<script>
  function handleHideShowContent_Blue(count){
    var arrowDown = document.querySelector('._arrowdown'.concat(count));
    var content = document.querySelector('.short_info_more_content'.concat(count));
    var img = document.querySelector('._card_img'.concat(count));
    content.style.maxHeight = "100%";
    img.style.height = "100%";
  }

  function handleHideShowContent_White(count){
    var arrowDown = document.querySelector('._arrowdownwhite'.concat(count));
    var content = document.querySelector('.short_info_more_content_w'.concat(count));
    var img = document.querySelector('.w_card_img'.concat(count));
    content.style.maxHeight = "100%";
    img.style.height = "100%";
  }
</script>

<?php


get_footer();
