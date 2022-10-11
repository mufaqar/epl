<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

	<?php wp_head(); ?>
</head>

<?php
		global $data;

		$company_logo = $data['company_logo'];
		$company_favicon = $data['company_favicon'];
		$header_tell = $data['header_tell']; 

        $header_tell = $data['header_tell']; 

        $login_info = $data['login_info']; 
	?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>

	
	<header>
        <!-- top nav menu  -->
        <div class="top_nav">
            <div class="d-flex container py-1 justify-content-between align-items-center">
                <div class="left mt-2">
                    <h6>CALL US NOW! <span class="text-light ml-1"><?php echo $header_tell ?></span></h6>
                </div>
                <div class="right d-flex">
                <?php echo $login_info ?>
                </div>
            </div>
        </div>
        <!-- main nav menu -->
		<div class="bg-light">
            <nav class="navbar container navbar-expand-lg navbar-light " style="padding:0;">
             <a class="navbar-brand mt-2" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $company_logo ?>" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">				
				<?php 
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav mr-auto',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							) );
						?>
                   
                </div>
            </nav>
        </div>

    </header>
    <section class="container mt-5">


    
                <?php if (!is_home()): ?>
                    <div class="breadcrum">
                    <?php get_breadcrumb(); ?>
                </div>
            <?php endif; ?>

