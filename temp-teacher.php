<?php

/**
 * Template Name: Teacher Training 
 */

get_header();
$short_content_video = get_field('short_content_video');

?>




<?php get_template_part('template-parts/banner') ?>


<div class="training-section">
    <div class="container">
        <div class="new-offer">
            <div class="title">
                <h1><?php echo get_post_meta(get_the_ID(), 'sub_heading',  true); ?></h1>
                <p><?php echo get_post_meta(get_the_ID(), 'short_content',  true); ?></p> <br><br>
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="<?php echo $short_content_video; ?>"></iframe>
                </div>
            </div>

            <div class="training-cards">
                <div class="row">



                    <?php
                    if (have_rows('teacher_train_cards')) :
                        while (have_rows('teacher_train_cards')) : the_row();
                    ?>
                            <div class="col-md-4 card-padding">
                                <div class="card-1">
                                    <h2><?php echo get_sub_field('title'); ?></h2>
                                    <div class="para">
                                        <p><?php echo get_sub_field('content'); ?></p>
                                    </div>
                                    <button class="btn btn-buy"><a href="<?php echo get_sub_field('link'); ?>">MORE INFO</a></button>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                    endif;
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="upcoming-course">
    <div class="container">
        <div class="text-center">
            <div class="primary-btn">
                <a href="<?php the_field('view_upcoming_link'); ?>" class="btn-border btn-dark"><?php the_field('view_upcoming_title'); ?></a>
            </div>
        </div>
    </div>
</div>




<?php





get_footer();
