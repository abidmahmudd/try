<?php
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-boot', get_template_directory_uri() ."./assets/css/bootstrap.min.css" );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . "./assets/js/bootstrap.bundle.min.js", array(), '1.0.0', true );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' );

    register_sidebar( array(
        'name'=>'top right logo',
        'id'=>'bdlogo',
        'before_widget' => '',
		'after_widget'  => ''
    ) );


    register_nav_menus( array(
        'tm'=>'primary',

    ) );

    register_sidebar( array(
        'name'=>'well',
        'id'=>'well',
        'before_widget' => '',
		'after_widget'  => ''
    ) );

    register_sidebar( array(
        'name'=>'hero bottom image',
        'id'=>'hbimg',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'hero bottom body',
        'id'=>'hbbody',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'hero bottom image2',
        'id'=>'hbimg2',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'hero bottom body2',
        'id'=>'hbbody2',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'hero bottom image3',
        'id'=>'hbimg3',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'hero bottom body3',
        'id'=>'hbbody3',
        'before_widget' => '',
		'after_widget'  => ''
    ) );

    register_sidebar( array(
        'name'=>'pimg1',
        'id'=>'pimg1',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pbody1',
        'id'=>'pbody1',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pimg2',
        'id'=>'pimg2',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pbody2',
        'id'=>'pbody2',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pimg3',
        'id'=>'pimg3',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pbody3',
        'id'=>'pbody3',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pimg4',
        'id'=>'pimg4',
        'before_widget' => '',
		'after_widget'  => ''
    ) );
    register_sidebar( array(
        'name'=>'pbody4',
        'id'=>'pbody4',
        'before_widget' => '',
		'after_widget'  => ''
    ) );

?>