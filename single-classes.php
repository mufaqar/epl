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
    <?php  while( have_rows('classes_feature') ): the_row();  ?>
        <?php  $me = 0; if( get_row_layout() == 'with_blue_background' ):  ?>          
          <div class="class-detail-2">
            <div class="row g-0">
              <div class="col-md-6 clr">
              <div class="padding">
              <h1><?php  the_sub_field('title'); ?></h1>   
              <?php echo $me ?>             
              <?php get_template_part('template-parts/shortlong')?>
              </div>
              </div>
              <div class="col-md-6">
                <div class="side-img">              
                  <img src="<?php  the_sub_field('image'); ?>" alt="trainer" class="_card_img<?php echo $count_blue ?>">
                </div>
              </div>
            </div>
          </div>
          
        <?php  $me++;  $wh = 0; elseif( get_row_layout() == 'with_white_background' ):  
            $image = get_sub_field('image');
            ?>
           <div class="class-detail-3">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <div class="side-img">
                        <img src="<?php  the_sub_field('image'); ?>" alt="trainer">
                      </div>
                    </div>
                    <div class="col-md-6 clr">
                    <div class="padding">
                    <h1><?php  the_sub_field('title'); ?></h1>
                    <?php echo $wh ?>      
                    <?php get_template_part('template-parts/shortlong')?>

                    



                    </div>
                  </div>
            </div>
        <?php $wh++; endif; ?>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(".longcontent").hide();
    $("#showlong").click(function(){
      $(".longcontent" ).show();
      $(".shortcontent").hide();   
      $(".side-img img").css("height","100%");
    });
    $("#showshort").click(function(){
      $(".longcontent").hide();
      $(".shortcontent").show();
      $(".side-img img").css("height","360px");
    });


</script>

<?php
get_footer();
