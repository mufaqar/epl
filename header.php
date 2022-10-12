<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
  <?php } ?>
  <title>
    <?php
    /*
				 * Print the <title> tag based on what is being viewed.
				 */
    global $page, $paged, $post;

    wp_title('|', true, 'right');

    // Add the blog name.
    bloginfo('name');

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
      echo " | $site_description";

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2)
      echo ' | ' . sprintf(__('Page %s', 'wpv'), max($paged, $page));
    ?>
  </title>
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
  <!-- fontawsome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header class="header headermain mt-0">
      <div class="px-5">
        <div class="d-flex justify-content-between padding py-0">
          <!-- logo  -->
          <div class="_logo ">
            <div class="logo">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></a>
            </div>
          </div>

          <div class="d-flex justidy-content-between align-items-center">
            <!-- mobile No#  -->
            <div class="number mbl-none mr-55">
              <a href="tel:<?php the_field('tel_info_top', 'option'); ?>"><?php the_field('tel_info_top', 'option'); ?></a>
            </div>

            <!-- login  -->
            <div class="login_btn ">
              <div class="login_btn ">
                <?php the_field('login__sign_up_link', 'option'); ?>
              </div>
            </div>

            <!-- nav  -->
            <div class="hamburger ml-55">
              <div class="d-flex align-items-center">
                <nav class="navbar">
                  <button aria-label="Open Mobile Menu" class="open-mobile-menu">
                    <i class="fa-solid fa-bars"></i>
                  </button>
                  <div class="top-menu-wrapper">
                    <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'primary',
                      'container'       => '',
                      'menu_class'      => 'top-menu',
                    ));
                    ?>
                  </div>
                </nav>

              </div>
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