<?php load_theme_textdomain('text_domain'); ?>
<?php
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 140, 140, true );
	add_image_size( 'single-post-thumbnail', 300, 9999 );

	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
		// Declare sidebar widget zone
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'main' => __( 'Main Menu', '' ),
		'footer' => __( 'Footer Menu', '' ),
	) );
}

function fallbackmenu1(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function fallbackmenu2(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'lineheight';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

function add_first_and_last($items) {
    $items[1]->classes[] = 'first-menu-item';
    $items[count($items)]->classes[] = 'last-menu-item';
    return $items;
}
 
add_filter('wp_nav_menu_objects', 'add_first_and_last');




// Theme Options

include_once('inc/cpts.php');



add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_sub_page') ) {
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));

		

        
    }
}





function get_breadcrumb() {

    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';

    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &#187; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}







add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
function add_new_menu_item( $nav, $args ) {
    $newmenuitem = '<li class="mob-block">
	<button aria-label="Close Mobile Menu" class="close-mobile-menu">
		<i class="fa-solid fa-xmark"></i>
	</button>
  </li>';
    $nav = $newmenuitem.$nav;
    return $nav;
}

add_filter( 'woocommerce_add_to_cart_validation', 'bbloomer_only_one_in_cart', 9999, 2 );
   
function bbloomer_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}    
