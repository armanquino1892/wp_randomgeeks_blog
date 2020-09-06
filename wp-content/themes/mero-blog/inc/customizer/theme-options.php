<?php
/**
 * Theme Options.
 *
 * @package mero_blog
 */

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'mero-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Sidebar section
$wp_customize->add_section('section_sidebar', array(    
	'title'       => __('Sidebar Options', 'mero-blog'),
	'panel'       => 'theme_option_panel'    
));

// Page Sidebar Option
$wp_customize->add_setting('page_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mero_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('page_sidebar', 
	array(		
	'label' 	=> __('Page Sidebar', 'mero-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'page_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'mero-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'mero-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'mero-blog'),	
		),	
	)
);

// Single Post Sidebar Option
$wp_customize->add_setting('single_post_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mero_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('single_post_sidebar', 
	array(		
	'label' 	=> __('Single Post Sidebar', 'mero-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'single_post_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'mero-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'mero-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'mero-blog'),	
		),	
	)
);

// Blog Sidebar Option
$wp_customize->add_setting('blog_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mero_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('blog_sidebar', 
	array(		
	'label' 	=> __('Blog Sidebar', 'mero-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'blog_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'mero-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'mero-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'mero-blog'),	
		),	
	)
);

// Archive Sidebar Option
$wp_customize->add_setting('archive_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mero_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('archive_sidebar', 
	array(		
	'label' 	=> __('Archive Sidebar', 'mero-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'archive_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'mero-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'mero-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'mero-blog'),	
		),	
	)
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'mero-blog'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'excerpt_length', array(
	'default'           => '15',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mero_blog_sanitize_number_range',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'excerpt_length', array(
	'label'       => __( 'Excerpt Length', 'mero-blog' ),
	'description' => __( 'Note: Min 5 & Max 100.', 'mero-blog' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 5, 'max' => 100, 'style' => 'width: 55px;' ),
) );