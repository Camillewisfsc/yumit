<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus par notre theme
register_nav_menu('header', 'En tête du menu');

function wpbootstrap_styles_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
}


function theme_types()
{
  register_post_type('commerces', [
    'label' => 'Commerces',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-store',
    'supports' => ['title', 'editor', 'thumbnail'],
    'show_in_rest' => true,
    'has_archive' => true,
  ]);
}
add_action('init', 'theme_types');
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
