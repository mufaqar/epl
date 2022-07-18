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

 

<div class="page-sections pt-5 pb-5 single__events">
           <div class="container">           
                <div class="row single_eventpage p-5">
							<?php
							while ( have_posts() ) : the_post();

								the_content();

							endwhile; // End of the loop.
							?>

				</div><!-- #row -->
			</div><!-- #container -->
	</div><!-- #section -->





<?php
get_footer();
