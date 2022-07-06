<?php

function cptui_register_my_cpts_faqs() {

	/**
	 * Post Type: Faqs.
	 */

	$labels = [
		"name" => __( "Faqs", "hello-elementor" ),
		"singular_name" => __( "Faq", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Faqs", "hello-elementor" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faqs", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faqs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faqs' );



function cptui_register_my_taxes_faq_cat() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "hello-elementor" ),
		"singular_name" => __( "Category", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Categories", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'faq_cat', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "faq_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "faq_cat", [ "faqs" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_faq_cat' );



function cptui_register_my_cpts_staff_profiles() {

	/**
	 * Post Type: Team.
	 */

	$labels = [
		"name" => __( "Team", "hello-elementor" ),
		"singular_name" => __( "Team", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Team", "hello-elementor" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team", $args );
}

add_action( 'init', 'cptui_register_my_cpts_staff_profiles' );


function cptui_register_my_taxes_staff_departments_taxonomies() {

	/**
	 * Taxonomy: Departments.
	 */

	$labels = [
		"name" => __( "Departments", "hello-elementor" ),
		"singular_name" => __( "Department", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Departments", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'staff_departments_taxonomies', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "staff_departments_taxonomies",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "staff_departments_taxonomies", [ "team" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_staff_departments_taxonomies' );











// Class Post type


function cptui_register_my_cpts_classes() {

	/**
	 * Post Type: Classes.
	 */

	$labels = [
		"name" => __( "Classes", "hello-elementor" ),
		"singular_name" => __( "Class", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Classes", "hello-elementor" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "classes", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "classes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_classes' );

function cptui_register_my_taxes_locations() {

	/**
	 * Taxonomy: Locations.
	 */

	$labels = [
		"name" => __( "Locations", "hello-elementor" ),
		"singular_name" => __( "Location", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Locations", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'locations', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "locations",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "locations", [ "classes" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_locations' );
function cptui_register_my_taxes_instructor() {

	/**
	 * Taxonomy: Instructors.
	 */

	$labels = [
		"name" => __( "Instructors", "hello-elementor" ),
		"singular_name" => __( "Instructor", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Instructors", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'instructor', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "instructor",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "instructor", [ "classes" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_instructor' );


function cptui_register_my_taxes_types() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => __( "Types", "hello-elementor" ),
		"singular_name" => __( "Type", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Types", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'types', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "types", [ "classes" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_types' );




function cptui_register_my_cpts_testimonials() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "hello-elementor" ),
		"singular_name" => __( "Testimonial", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Testimonials", "hello-elementor" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonials' );


function cptui_register_my_cpts() {

	/**
	 * Post Type: Pricing Tables.
	 */

	$labels = [
		"name" => __( "Pricing Tables", "hello-elementor" ),
		"singular_name" => __( "Pricing Table", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Pricing Tables", "hello-elementor" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "pricing_table", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "pricing_table", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => __( "Types", "hello-elementor" ),
		"singular_name" => __( "Types", "hello-elementor" ),
	];

	
	$args = [
		"label" => __( "Types", "hello-elementor" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'pricing_types', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "pricing_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "pricing_types", [ "pricing_table" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );




function cptui_register_my_cpts_client() {

	/**
	 * Post Type: Clients.
	 */

	$labels = [
		"name" => __( "Clients", "epl-theme" ),
		"singular_name" => __( "Client", "epl-theme" ),
	];

	$args = [
		"label" => __( "Clients", "epl-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "client", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "client", $args );
}

add_action( 'init', 'cptui_register_my_cpts_client' );
