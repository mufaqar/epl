<?php

/**
 * Template Name: Home 
 */
get_header();
$studio = get_field('our_studios');
$workshops = get_field('our_workshops');

$more_info_link = get_field('more_info_link');



?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<?php get_template_part('template-parts/banner')?>

<div class="exhale-pilates">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="padding">
                    <div class="welcome-text">
                        <h1><?php echo get_post_meta(get_the_ID(), 'heading',  true); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="padding">
                    <div class="para">
                        <p><?php echo get_post_meta(get_the_ID(), 'short_instructions',  true); ?></p>
                        <div class="time-class">


                        <?php if($more_info_link != '') { ?> <button class="btn btn-buy"><a href="<?php the_field('more_info_link') ?>">MORE INFO</a></button> <?php } ?>
                       
                    </div>
                    </div>                    
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="our-studios pb-0">
    <div class="container">
        <div class="title">
            <div class="padding">
                <div class="text-center">
                    <h2><?php echo $studio['heading'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="images">
                    <img src="<?php echo $studio['studio_image_1'] ?>" alt="primsore-hall">
                    <div class="heading">
                        <p><a href="<?php echo $studio['studio_ulr_1'] ?>"> <?php echo $studio['studio_title_1'] ?> </a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="images">
                    <img src="<?php echo $studio['studio_image_2'] ?>" alt="north">
                    <div class="heading">
                        <p><a href="<?php echo $studio['studio_ulr_2'] ?>"><?php echo $studio['studio_title_2'] ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-studios">
    <div class="container">
        <div class="title">
            <div class="padding">
                <div class="text-center">
                    <h2><?php echo $workshops['heading'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="images">
                    <img src="<?php echo $workshops['workshops_image_1'] ?>" alt="trainer">
                    <div class="heading">
                        <p><a href="<?php echo $workshops['workshops_link_1'] ?>"><?php echo $workshops['workshops_title_1'] ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="images">
                    <img src="<?php echo $workshops['workshops_image_2'] ?>" alt="workshops">
                    <div class="heading">
                        <p><a href="<?php echo $workshops['workshops_link_2'] ?>"><?php echo $workshops['workshops_title_2'] ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-classes">
    <div class="container">
        <div class="padding">
            <div class="title">
                <h1><?php echo get_post_meta(get_the_ID(), 'our_classes_title',  true); ?></h1>
                <P><?php echo get_post_meta(get_the_ID(), 'our_classes_',  true); ?></P>
            </div>
            <div class="upcoming-course">
                <div class="container">
                    <div class="text-center">
                        <div class="primary-btn">
                        <a href="<?php the_field('class_time_table_link') ?>" class="btn-border btn-light">VIEW CLASS TIMETABLE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            <?php query_posts(array(
                'post_type' => 'classes',
                'posts_per_page' => 9,
                'order' => 'desc',
            ));
            if (have_posts()) :  while (have_posts()) : the_post();

            $custom_link = get_field('custom_link');
           

        

            
            
            
            ?>
                    <div class="col-md-4">
                        <div class="padding">

                            <div class="hover-img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('class-thumbnail');
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/inductions.jpg" alt="Featured Thumbnail" />
                                <?php } ?>
                                <h5> <a href="<?php if($custom_link == '') { the_permalink(); } else { echo $custom_link; } ?>"><?php the_title() ?></a></h5>
                                <a href="<?php if($custom_link == '') { the_permalink(); } else { echo $custom_link; } ?>">
                                    <div class="content">
                                        <?php the_content() ?>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                <?php endwhile;
                wp_reset_query();
            else : ?>
                <h2><?php _e('Nothing Found', 'lbt_translate'); ?></h2>
            <?php endif; ?>

        </div>
    </div>
</div>

<div class="instagram-feed">
    <div class="container">
        <div class="padding">
            <div class="text-center">           
            <a href="https://instagram.com/exhalepilateslondon" target="_blank" class="hcolor"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="insta" > <h2>@exhalepilateslondon</h2></a>
                
             </div>
        </div>
        <div class="instagram_feeds">
                     <?php echo do_shortcode('[instagram-feed feed=3]')?>
                </div>
     </div>


     




<div class="recommended-by">
    <div class="container">
        <div class="padding">
            <div class="text-center">
                <h2><?php the_field('recommended_by_title'); ?></h2>
                <div class="padding">
                    <div class="slider">

                        <?php query_posts(array(
                            'post_type' => 'client',
                            'posts_per_page' => -1,
                            'order' => 'desc'
                        ));
                        if (have_posts()) :  while (have_posts()) : the_post();
                                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>

                                <div class="col-md-4 ">
                                    <a href="<?php the_field('client_link'); ?>" style="cursor: pointer;"><img src="<?php echo $url ?>" alt="traainer"></a>
                                </div>

                            <?php endwhile;
                            wp_reset_query();
                        else : ?>
                            <h2><?php _e('Nothing Found', 'lbt_translate');
                                ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php

get_footer();  ?>




<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 3000,
        });
    });
</script>