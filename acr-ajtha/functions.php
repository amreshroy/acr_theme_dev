<?php
function ajtha_bootstraping(){
    load_theme_textdomain("ajtha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("topmenu", __("Top Menu", "ajtha"));
    register_nav_menu("footermenu", __("Footer Menu", "ajtha"));
}
add_action("after_setup_theme", "ajtha_bootstraping");

function ajtha_assets(){
    wp_enqueue_style("ajtha", get_stylesheet_uri());
    // wp_enqueue_style("bootstraping", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style("bootstraping", get_theme_file_uri("/assets/css/bootstrap.min.css") );

    wp_enqueue_script("ajtha-main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), "1.0.0", true);
}
add_action("wp_enqueue_scripts", "ajtha_assets");

function ajtha_sidebar(){
    register_sidebar(
        array(
            'name'          => __('Single Post Sidebar', 'ajtha'),
            'id'            =>'sidebar-1',
            'description'   => __('Right Sidebar', 'ajtha'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Left Sidebar', 'ajtha'),
            'id'            =>'footer-sidebar-left',
            'description'   => __('Footer Left Sidebar', 'ajtha'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Right Sidebar', 'ajtha'),
            'id'            =>'footer-sidebar-right',
            'description'   => __('Footer Right Sidebar', 'ajtha'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action("widgets_init", "ajtha_sidebar");

function ajtha_menu_item_class( $classes, $item ) {
    $classes[] = "list-inline-item";
    return $classes;
}
add_filter("nav_menu_css_class", "ajtha_menu_item_class", 10, 2 );