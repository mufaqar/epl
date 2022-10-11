<?php
add_action('init', 'of_options');

if (!function_exists('of_options'))
	{
	function of_options()
		{

		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
			
		    $of_categories[$of_cat->slug] = $of_cat->name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		
		$google_fonts = array();

		$home_layout_block = array();

		// Stylesheets Reader

		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		if (is_dir($alt_stylesheet_path))
			{
			if ($alt_stylesheet_dir = opendir($alt_stylesheet_path))
				{
				while (($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false)
					{
					if (stristr($alt_stylesheet_file, ".css") !== false)
						{
						$alt_stylesheets[] = $alt_stylesheet_file;
						}
					}
				}
			}

		// More Options

		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array();
		$body_repeat = array();
		$body_pos = array();

		// Image Alignment radio box

		$of_options_thumb_align = array(
			"alignleft" => "Left",
			"alignright" => "Right",
			"aligncenter" => "Center"
		);

		// Image Links to Options

		$of_options_image_link_to = array(
			"image" => "The Image",
			"post" => "The Post"
		);
		/*-----------------------------------------------------------------------------------*/
		/* The Options Array */
		/*-----------------------------------------------------------------------------------*/

		// Set the Options Array

		global $of_options;
		$of_options = array();
		$url = ADMIN_DIR . 'assets/images/';
		$themepath = get_template_directory_uri();
		
		
		
		
		
		
		
			// Header Options

		$of_options[] = array(
			"name"   => __( "Header", 'author-ts' ),
			"type" => "heading"
		);
		
		
	
		
		
			
		$of_options[] = array(
			'id' => 'ew_facebook',
			'type' => 'text',
			'name' => __('Facebook Profile', 'author_ts') ,
			'std' => 'http://facebook.com'
		);
		
		$of_options[] = array(
			'id' => 'ew_twitter',
			'type' => 'text',
			'name' => __('Twitter Profile', 'author_ts') ,
			'std' => 'http://twitter.com'
		);
		
		$of_options[] = array(
			'id' => 'ew_instragram',
			'type' => 'text',
			'name' => __('Instagram Profile', 'author_ts') ,
			'std' => 'https://www.instagram.com'
		);
		
		$of_options[] = array(
			'id' => 'ew_linkedin',
			'type' => 'text',
			'name' => __('LinkedIn Profile', 'author_ts') ,
			'std' => 'http://linkedin.com'
		);
		
	
		
			// Header Options

		$of_options[] = array(
			"name"   => __( "Footer", 'author-ts' ),
			"type" => "heading"
		);
		
		
		
		
		
		$of_options[] = array(
			'id' => 'copyright_text',
			'type' => 'textarea',
			'name' => __('Copyright Text', 'author_ts') ,
			'std' => '© 2016 Volkert. All rights reserved.'
		);
		
		
		
	
		// Backup Options

		$of_options[] = array(
			"name"   => __( "Backup Options", 'author-ts' ),
			"type" => "heading"
		);
		
		$of_options[] = array(
			"name"   => __( "Info", 'author-ts' ),
			"id" => "introduction",
			"std" => "Options for \"Backup\", \"Restore\" and \"Transfer\" of \"Theme Options\".",
			"icon" => true,
			"type" => "info"
		);
		
		$of_options[] = array(
			"name"   => __( "Backup and Restore Options", 'author-ts' ),
			"id" => "of_backup",
			"std" => "",
			"type" => "backup",
			'desc'   => __( 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.', 'author-ts' ),
		);
		$of_options[] = array(
			"name"   => __( "Transfer Theme Options Data", 'author-ts' ),
			"id" => "of_transfer",
			"std" => "",
			"type" => "transfer",
			'desc'   => __( 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".', 'author-ts' ),
						
		);
				
		}
				
	}

?>