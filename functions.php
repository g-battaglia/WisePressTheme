<?php

// Theme futures:
function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('widgets');

    // Navbar Menu:
    register_nav_menu('navbar_menu', 'Heading navbar menu location');
    }

add_action('after_setup_theme', 'theme_features');



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

// Unregister unused widgets:
function my_widgets_init() {
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Media_Audio' );
    unregister_widget( 'WP_Widget_Media_Image' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Media_Gallery' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_Search' );
}
add_action('widgets_init', 'my_widgets_init');


// Register the footer widget area:
function footer_widgets_init()
{

    register_sidebar(
        array(
            'name' => "Footer",
            'id' => 'footer_widget',
            'description' => __('Add widgets here to appear in your footer.'),
            'before_widget' => '<div class="links-container">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="links-container__title">',
            'after_title' => '</h5>',
        )
    );

}
add_action('widgets_init', 'footer_widgets_init');



// Register the tag-cloud widget area:
function cloudtag_widgets_init()
{

    register_sidebar(
        array(
            'name' => "Tag Cloud",
            'id' => 'sidebar-2',
            'description' => __(' Ad here just the tag cloud'),
            'before_widget' => '<div class="extra-tags">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="extra-title">',
            'after_title' => '</h4>',
        )
    );

}
add_action('widgets_init', 'cloudtag_widgets_init');


// Register the about widget:

function about_widgets_init()
{

    register_sidebar(
        array(
            'name' => "About",
            'id' => 'sidebar-3',
            'description' => __('Ad here the html for about'),
            'before_widget' => '<div class="extra-about">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="extra-title">',
            'after_title' => '</h4>',
        )
    );

}
add_action('widgets_init', 'about_widgets_init');