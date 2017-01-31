<?php

// Set up
add_theme_support('menus');

// includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/front/widgets.php');

// Action & Filter hooks
add_action('wp_enqueue_scripts', 'techco_enqueue');
add_action('after_setup_theme', 'techco_setup_theme');
add_action('widgets_init', 'techco_widgets');

// Shortcodes
