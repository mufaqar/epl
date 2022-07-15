<?php
/**
 * Template Name: Teacher Training 
 */

get_header();
$Teacher_tranning_card_1 = get_field('teacher_tranning_card_1');
$Teacher_tranning_card_2 = get_field('teacher_tranning_card_2');
$Teacher_tranning_card_3 = get_field('teacher_tranning_card_3');

?>
  <?php get_template_part('template-parts/banner')?>
    <div class="training-section">
        <div class="container">
           <div class="new-offer">
               <div class="title">
                   <h1><?php echo get_post_meta( get_the_ID(), 'sub_heading',  true ); ?></h1>
                   <p><?php echo get_post_meta( get_the_ID(), 'short_content',  true ); ?></p> <br><br>
                   <p><?php echo get_post_meta( get_the_ID(), 'short_content_video',  true ); ?></p>
               </div>
               <div class="training-cards">
                   <div class="row">
                       <div class="col-md-4 card-padding">
                           <div class="card-1">
                            <h2><?php echo $Teacher_tranning_card_1['title'] ?></h2>
                            <div class="para">
                                <p><?php echo $Teacher_tranning_card_1['content'] ?></p>
                            </div>
                            <button class="btn btn-buy"><a href="<?php echo $Teacher_tranning_card_1['link'] ?>">MORE INFO</a></button>
                           </div>
                       </div>
                       <div class="col-md-4 card-padding">
                        <div class="card-1 card-2">
                        <h2><?php echo $Teacher_tranning_card_2['title'] ?></h2>
                         <div class="para">
                            <p><?php echo $Teacher_tranning_card_2['content'] ?></p>
                         </div>
                            <button class="btn btn-buy"><a href="<?php echo $Teacher_tranning_card_2['link'] ?>">MORE INFO</a></button>
                        </div>
                    </div>
                    <div class="col-md-4 card-padding">
                        <div class="card-1 card-3">
                            <h2><?php echo $Teacher_tranning_card_3['title'] ?></h2>
                         <div class="para">
                         <p><?php echo $Teacher_tranning_card_3['content'] ?></p>
                         </div>
                            <button class="btn btn-buy"><a href="<?php echo $Teacher_tranning_card_3['link'] ?>">MORE INFO</a></button>
                        </div>
                    </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    <div class="arrow-down">
        <div class="container">
            <div class="text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-down.svg" alt="arrow-down">
            </div>
        </div>
    </div>
    <div class="upcoming-course">
        <div class="container">
            <div class="text-center">
                <div class="padding">
                    <button><a href="#">VIEW UPCOMING COURSE TIMETABLE</a></button>
                </div>
            </div>
        </div>
    </div>

  


<?php

get_footer();
