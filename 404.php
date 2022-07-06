<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CT_Custom
 */

get_header();
?>

<div class="team-banner">
       <div class="banner-content">
        <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ct-custom' ); ?></h1>    
       </div>
    </div>

	<div class="page-sections padding pt-5 pb-5">
           <div class="container">           
                <div class="row">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'ct-custom' ); ?></p>
				
				</div><!-- #row -->
			</div><!-- #container -->
	</div><!-- #section -->

<?php

get_footer();
