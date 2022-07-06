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
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    
	
	<?php wp_head(); ?>
</head>

<?php
	/*	global $data;

		$company_logo = $data['company_logo'];
		$company_favicon = $data['company_favicon'];
		$header_tell = $data['header_tell']; 

        $header_tell = $data['header_tell']; 

        $login_info = $data['login_info'];  */
	?>

<body <?php body_class(); ?>>
<div id="page" class="site">	
    <header class="header headermain mt-0">
       <div class="container">
        <div class="row align-items-center padding py-0">
            <div class="col-md-4 col-3">
               <div class="d-flex align-items-center">
                <nav class="navbar">
                    <button aria-label="Open Mobile Menu" class="open-mobile-menu">
                      <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="top-menu-wrapper">                 

                      <?php 
							wp_nav_menu( array(
								'theme_location'  => 'primary',							
								'container'       => '',
								'menu_class'      => 'top-menu',
								
							) );
						?>
                    </div>
                  </nav>
                  <div class="number mbl-none">
                    <a href="tel:+44 (0)207 186 0611">+44 (0)207 186 0611</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-4 mbl-none">
                <div class="sign-up mbl-none">
                    <button class="btn btn-primary"><script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script><healcode-widget data-version="0.2" data-link-class="loginRegister" data-site-id="9898" data-mb-site-id="184303" data-bw-identity-site="false" data-type="account-link" data-inner-html="Login | Register"  /></button>
                </div>
            </div>
        </div>
       </div>
      </header>

      <script>
        //   side menu

                    const pageHeader = document.querySelector(".header");
                    const openMobMenu = document.querySelector(".open-mobile-menu");
                    const closeMobMenu = document.querySelector(".close-mobile-menu");
                    const topMenuWrapper = document.querySelector(".top-menu-wrapper");
                    const isVisible = "is-visible";
                    const showOffCanvas = "show-offcanvas";
                    const noTransition = "no-transition";
                    let resize;

                    // Opening Mobile Menu
                    openMobMenu.addEventListener("click", () => {
                    topMenuWrapper.classList.add(showOffCanvas);
                    });

                    // Closing Mobile Menu
                    closeMobMenu.addEventListener("click", () => {
                    topMenuWrapper.classList.remove(showOffCanvas);
                    });

                    // Resizing Screen
                    window.addEventListener("resize", () => {
                    pageHeader.querySelectorAll("*").forEach(function(el) {
                        el.classList.add(noTransition);
                    });
                    clearTimeout(resize);
                    resize = setTimeout(resizingComplete, 500);
                    });

                    function resizingComplete() {
                    pageHeader.querySelectorAll("*").forEach(function(el) {
                        el.classList.remove(noTransition);
                    });
                    }

    </script>

