<?php

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    
    
    register_sidebar( array(
        'name' => __( 'Main Jumbo', 'initializr' ),
        'id' => 'home-1',
        'description' => __( '', 'initializr' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style:none;">',
	'after_widget'  => '</li>',
	'before_title'  => '<h1 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );


    register_sidebar( array(
        'name' => __( 'section1', 'initializr' ),
        'id' => 'section-1',
        'description' => __( '', 'initializr' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style:none;">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'section2', 'initializr' ),
        'id' => 'section-2',
        'description' => __( '', 'initializr' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style:none;">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'section3', 'initializr' ),
        'id' => 'section-3',
        'description' => __( '', 'initializr' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style:none;">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    

}