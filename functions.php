<?php

function main_function()
{
  wp_enqueue_style('bootstrap-head-support', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-footer-support', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
  wp_enqueue_style('main-css-support', get_theme_file_uri('/assets/styles/main.css'));
  wp_enqueue_script('email-js', '//cdn.emailjs.com/dist/email.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('contact-script', get_theme_file_uri('/assets/scripts/contact.js'), NULL, '1.0', true);
}
;

function support_function()
{
  add_theme_support('title-tag');
}
;

function custom_posttype_generator()
{
  register_post_type('projects', array(
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'author', 'excerpt'),
    'menu_icon' => 'dashicons-admin-customizer',
    'labels' => array('name' => 'Projects')
  ));
}
;

add_action('wp_enqueue_scripts', 'main_function');
add_action('after_setup_theme', 'support_function');
add_action('init', 'custom_posttype_generator');


