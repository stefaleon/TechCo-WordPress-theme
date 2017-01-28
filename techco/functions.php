<?php

// Set up

// includes
include(get_template_directory() . '/includes/front/enqueue.php');


// Action & Filter hooks
add_action('wp_enqueue_scripts', 'techco_enqueue');


// Shortcodes
