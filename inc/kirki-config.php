<?php  

/*
 Customizer Config
*/

Kirki::add_config( 'wplearning', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'header_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Header & Menu Layout', 'kirki' ),
) );


Kirki::add_section( 'header_layout_settings', array(
    'title'          => esc_html__( 'Header Settings', 'kirki' ),
    'description'    => esc_html__( 'Manage Header layout.', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_settings', array(
    'title'          => esc_html__( 'Typography', 'kirki' ),
    'description'    => esc_html__( 'Text Style and Options.', 'kirki' ),
    'priority'       => 10,
	'icon' 			 => 'dashicons-editor-spellcheck'
) );


Kirki::add_section( 'menu_setting', array(
    'title'          => esc_html__( 'Menu Settings', 'kirki' ),
    'description'    => esc_html__( 'Manage Menu layout and Setting.', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );


Kirki::add_field( 'wplearning', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'header_layout_settings',
	'default'     => [
		'background-color'      => 'rgba(255,255,255,1)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#header',
		],
	],
] );

Kirki::add_field( 'wplearning', [
	'type'        => 'background',
	'settings'    => 'menu_background_setting',
	'label'       => esc_html__( 'Menu Background', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'menu_setting',
	'default'     => [
		'background-color'      => 'rgba(255,255,255,1)',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#nav',
		],
	],
] );
Kirki::add_field( 'wplearning', [
	'type'        => 'background',
	'settings'    => 'menu_active_background_setting',
	'label'       => esc_html__( 'Menu Active and Hover', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'menu_setting',
	'default'     => [
		'background-color'      => '#ff3d3d',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#nav > ul > li > a:hover, #nav >ul > li.current-menu-item > a',
		],
	],
] );

Kirki::add_field( 'wplearning', [
	'type'        => 'typography',
	'settings'    => 'heading_setting',
	'label'       => esc_html__( 'Heading', 'kirki' ),
	'section'     => 'typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '48px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],

	'choices' => [
		'fonts' => [
			'google'   => [ 'popularity', 50 ],
			'standard' => [
				'Georgia,Times,"Times New Roman",serif',
				'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			],
		],
	],

	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2',
		],
	],
] );

// ========== Banner On Off Method start ==============
Kirki::add_section( 'homepage_settings', array(
    'title'          => esc_html__( 'Homepage Layout', 'kirki' ),
    'description'    => esc_html__( 'Manage Homepage layout', 'kirki' ),
    'priority'       => 20,
	'icon' 			 => 'dashicons-layout'
) );

Kirki::add_field( 'wplearning', [
	'type'        => 'switch',
	'settings'    => 'toggle_home_banner',
	'label'       => esc_html__( 'Homepage Banner', 'kirki' ),
	'section'     => 'homepage_settings',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );
// ========== Banner On Off Method close ==============

// ========== Intro Section On Off Method start ==============
Kirki::add_section( 'homepage_settings', array(
    'title'          => esc_html__( 'Homepage Layout', 'kirki' ),
    'description'    => esc_html__( 'Manage Homepage layout', 'kirki' ),
    'priority'       => 20,
	'icon' 			 => 'dashicons-layout'
) );

Kirki::add_field( 'wplearning', [
	'type'        => 'switch',
	'settings'    => 'toggle_home_intro',
	'label'       => esc_html__( 'Homepage Intro Section', 'kirki' ),
	'section'     => 'homepage_settings',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );

Kirki::add_field( 'wplearning', [
	'type'        => 'text',
	'settings'    => 'home_banner_heading_text',
	'label'       => esc_html__( 'Banner Heading Text', 'kirki' ),
	'section'     => 'homepage_settings',
	'default'     => esc_html__( 'WP Learning', 'kirki' ),
	'priority'    => 10,
] );

Kirki::add_field( 'wplearning', [
	'type'        => 'text',
	'settings'    => 'home_banner_paragraph_text',
	'label'       => esc_html__( 'Banner Pagagraph Text', 'kirki' ),
	'section'     => 'homepage_settings',
	'default'     => esc_html__( 'Wordpress Theme For Learning Purpose', 'kirki' ),
	'priority'    => 10,
] );

// ==== Intro Section Icons Start =====
Kirki::add_field( 'wplearning', [
	'type'     => 'dashicons',
	'settings' => 'intro_box_1_icon',
	'label'    => esc_html__( 'Box 1 Icon', 'kirki' ),
	'section'  => 'homepage_settings',
	'default'  => 'admin-generic',
	'priority' => 10,
] );
Kirki::add_field( 'wplearning', [
	'type'     => 'dashicons',
	'settings' => 'intro_box_2_icon',
	'label'    => esc_html__( 'Box 2 Icon', 'kirki' ),
	'section'  => 'homepage_settings',
	'default'  => 'admin-settings',
	'priority' => 10,
] );
Kirki::add_field( 'wplearning', [
	'type'     => 'dashicons',
	'settings' => 'intro_box_3_icon',
	'label'    => esc_html__( 'Box 3 Icon', 'kirki' ),
	'section'  => 'homepage_settings',
	'default'  => 'star-filled',
	'priority' => 10,
] );
// ==== Intro Section Icons close ======
// ========== Intro Section On Off Method close ==============

// Footer
Kirki::add_panel( 'footer_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Footer Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Footer layout', 'kirki' ),
) );


Kirki::add_section( 'header_layout_settings', array(
    'title'          => esc_html__( 'Footer Settings', 'kirki' ),
    'description'    => esc_html__( 'Manage Footer layout etc.', 'kirki' ),
    'panel'          => 'footer_settings',
    'priority'       => 50,
) );

Kirki::add_field( 'wplearning', [
	'type'        => 'text',
	'settings'    => 'footer-copyright-text',
	'label'       => esc_html__( 'Footer Copyright Text', 'kirki' ),
	'section'     => 'header_layout_settings',
	'default'     => esc_html__( 'Copyright WP-learning.com Theme For Learning Purpose', 'kirki' ),
	'priority'    => 10,
] );
// Footer

