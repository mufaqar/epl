<?php


 
//KIRKI CONFIGURATION
 
Kirki::add_config( 'theme_config_id', [ //Make sure to change the theme_config_id
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
] );
 
add_filter( 'kirki_telemetry', '__return_false' );


//Section
Kirki::add_section( 'section_slug', [
    'priority'    => 4,
    'title'       => esc_html__( 'Mufaqar', 'text-domain' ),
] );
 
//Typography control
Kirki::add_field( 'theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'field_slug', //Can be used to retrieve value
    'label'       => esc_html__( 'Automatic Google Fonts control', 'text-domain' ),
    'section'     => 'rjs_demo',
    'default'     => [
        'font-family'    => 'Noto Serif',
        'variant'        => '400',
        'font-size'      => '14px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'color'          => '#333333',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'priority'    => 10,
    'transport'    => 'auto',
] );