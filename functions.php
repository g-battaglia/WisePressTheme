<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



add_theme_support('title-tag');
add_theme_support('widgets');


/** 
 * Unregister unused widgets.
 */

function my_widgets_init() {
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Media_Audio' );
    unregister_widget( 'WP_Widget_Media_Image' );
    unregister_widget( 'WP_Widget_Media_Video' );
    unregister_widget( 'WP_Widget_Media_Gallery' );
    unregister_widget( 'WP_Widget_Meta' );
}
add_action('widgets_init', 'my_widgets_init');


function footer_widgets_init()
{

    register_sidebar(
        array(
            'name' => "Footer",
            'id' => 'sidebar-1',
            'description' => __('Add widgets here to appear in your footer.'),
            'before_widget' => '<div class="links-container">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="links-container__title">',
            'after_title' => '</h5>',
        )
    );

}

add_action('widgets_init', 'footer_widgets_init');



######

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

