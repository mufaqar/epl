<?php


get_header();
?>

<?php get_template_part('template-parts/banner')?>

	<div class="page-sections pt-5 pb-5 ">
           <div class="container">          
                <div class="pagebody">
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
