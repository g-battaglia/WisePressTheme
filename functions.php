<?php

/**
 * Theme functions.
 * 
 * @package SimpleWise
 */

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


// Register the about widget:

function social_nav_widgets_init() {
    $exeple_url_string = htmlspecialchars('<a href="#"><i class="fab fa-instagram"></i></a>');
    register_sidebar(
        array(
            'name' => "Navbar Social Icons",
            'id' => 'navbar_social_icons',
            'description' => __('Ad here the HTML of just the social icon wraped
                                 insiede an anchor <a></a> tag. Eg:
                                 '.$exeple_url_string ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<span class="hidde-title" style="display: none;">',
            'after_title' => '</span>',
        )
    );

}
add_action('widgets_init', 'social_nav_widgets_init');






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
            'description' => __('Ad here a text description of your site,
                                use just Costume HTML or Text widgets.'),
            'before_widget' => '<div class="extra-about">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="extra-title">',
            'after_title' => '</h4>',
        )
    );

}
add_action('widgets_init', 'about_widgets_init');

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