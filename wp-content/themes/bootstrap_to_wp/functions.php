<?php

	function theme_styles() {
		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'cover_bootstrap_css', get_template_directory_uri() . '/css/cover.css' );
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	function theme_js() {

		global $wp_scripts;

		wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','', false);
		wp_register_script('respond.js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','', false);

		$wp_scripts->add_data('html5_shiv','conditional','lt IE 9');
		$wp_scripts->add_data('respond.js','conditional','lt IE 9');

		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true);
		wp_enqueue_script('react_js', get_template_directory_uri() . '/js/build/react.js', '', true);
		wp_enqueue_script('react-dom_js', get_template_directory_uri() . '/js/build/react-dom.js', '', true);
		wp_enqueue_script('babel-core','https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js', '', true);
		// wp_enqueue_script('react_js','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js', '', true);
		wp_enqueue_script('marked','https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js', '', true);

	}
	add_action('wp_enqueue_scripts','theme_js');

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	function register_theme_menus(){
		register_nav_menus(
			array(
				'header-menu' => 'Header Menu'
				)
		);
	}
	add_action('init', 'register_theme_menus');
///new widget function
	function create_widget( $name, $id, $description ){
		register_sidebar(array(
			'name' => __( $name ),
			'id' => $id,
			'description' => __( $description ),
			// 'before_widget' => '<div class="widget">',
			// 'after_widget' => '</div>',
			// 'before_title' => '<h3>',
			// 'after_title' => '</h3>'
			));
	}
	create_widget( 'Top Left', 'top-left', 'portfolio category top-left' );
	create_widget( 'Top Middle', 'top-mid', 'portfolio category top-mid' );
	create_widget( 'Top Right', 'top-right', 'portfolio category top-right' );
	create_widget( 'Bottom Left', 'bot-left', 'portfolio category bot-left' );
	create_widget( 'Bottom Middle', 'bot-mid', 'portfolio category bot-mid' );
	create_widget( 'Bottom Right', 'bot-right', 'portfolio category bot-right' );

///function that adds the logo uploader
	function themeslug_theme_customizer( $wp_customize ) {
		$wp_customize->add_section( 'themeslug_logo_section' , array(
		    'title'       => __( 'Logo', 'themeslug' ),
		    'priority'    => 30,
		    'description' => 'Upload a logo to replace the default site name and description in the header',
		) );
		$wp_customize->add_setting('themeslug_logo');
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
				'label'		=> __( 'Logo', 'themeslug' ),
				'section'	=>'themeslug_logo_section',
				'settings'	=> 'themeslug_logo',
			)));
	}
	add_action('customize_register', 'themeslug_theme_customizer');

///remove the admin toolbar code wordpress adds for some stupid incomprehensible reason fuck
	show_admin_bar(false);
?>