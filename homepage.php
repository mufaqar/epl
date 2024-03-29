<?php

/**
 * Template Name: Home 
 */
get_header();
$studio = get_field('our_studios');
$workshops = get_field('our_workshops');

$more_info_link = get_field('more_info_link');

$join_a_class_text = get_field('join_a_class_text', 'option');
$join_a_class_link = get_field('join_a_class_link', 'option');
$become_an_instructor_text = get_field('become_an_instructor_text', 'option');
$become_an_instructor_link = get_field('become_an_instructor_link', 'option');

?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<!-- video  -->
<?php get_template_part('template-parts/videobanner') ?>

<!-- btns  -->
<div class="class-instructor grid ">
    <div class="class col-md-6">
        <div class="">
            <a href="<?php echo $join_a_class_link; ?>"><?php echo $join_a_class_text ?></a>
        </div>
    </div>
    <div class="instructor col-md-6">
        <div class="">
            <a href="<?php echo $become_an_instructor_link; ?>"><?php echo $become_an_instructor_text; ?></a>
        </div>
    </div>
</div>


<!-- WELCOME TO EXHALE PILATES -->
<div class="exhale-pilates">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="padding">
                    <div class="welcome-text">
                        <h1><?php echo get_post_meta(get_the_ID(), 'heading',  true); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="padding">
                    <div class="">
                        <p><?php echo get_post_meta(get_the_ID(), 'short_instructions',  true); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our studios  -->
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
            <div class="col-md-6 p1">
                <div class="images">
                    <img src="<?php echo $studio['studio_image_1'] ?>" alt="primsore-hall">
                </div>
                <div class="vist_btn">
                    <p>
                        <a href="<?php echo $studio['studio_ulr_1'] ?>"> <?php echo $studio['studio_title_1'] ?> </a>
                        <span class="ml4"><i class="fa-solid fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 p2">
                <div class="images">
                    <img src="<?php echo $studio['studio_image_2'] ?>" alt="north">
                </div>
                <div class="vist_btn btnrightside">
                    <p>
                        <a href="<?php echo $studio['studio_ulr_2'] ?>"><?php echo $studio['studio_title_2'] ?></a>
                        <span class="ml4"><i class="fa-solid fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EXHALE EDUCATION -->
<div class="our-studios pb-5">
    <div class="container">
        <div class="title">
            <div class="padding">
                <div class="text-center">
                    <h2><?php echo $workshops['heading'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p1">
                <div class="images">
                    <img src="<?php echo $workshops['workshops_image_1'] ?>" alt="primsore-hall">
                </div>
                <div class="vist_btn">
                    <p>
                        <a href="<?php echo $workshops['workshops_ulr_1'] ?>"> <?php echo $workshops['workshops_title_1'] ?> </a>
                        <span class="ml4"><i class="fa-solid fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 p2">
                <div class="images">
                    <img src="<?php echo $workshops['workshops_image_2'] ?>" alt="north">
                </div>
                <div class="vist_btn btnrightside">
                    <p>
                        <a href="<?php echo $workshops['workshops_ulr_2'] ?>"><?php echo $workshops['workshops_title_2'] ?></a>
                        <span class="ml4"><i class="fa-solid fa-angle-right"></i></span>
                    </p>
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
                                <a href="<?php if ($custom_link == '') {
                                                the_permalink();
                                            } else {
                                                echo $custom_link;
                                            } ?>">
                                    <div class="content">
                                        <?php the_content() ?>
                                    </div>
                                </a>
                            </div>

                            <div class="primary-btn mb4"><a class="btn-border" href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></div>
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

<!-- insta  -->
<div class="instagram-feed">
    <div class="container">
        <div class="padding">
            <div class="text-center">
                <a href="https://instagram.com/exhalepilateslondon" target="_blank" class="hcolor">
                    <h2>@exhalepilates</h2>
                </a>

            </div>
        </div>
        <div class="instagram_feeds">
            <?php echo do_shortcode('[instagram-feed feed=3]') ?>
        </div>
    </div>
</div>

<!-- client logos  -->
<div class="recommended-by">
    <div class="">
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