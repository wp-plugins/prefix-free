<?php
/*
Plugin Name: -Prefix-Free
Plugin URI: https://github.com/LeaVerou/prefixfree
Description: Eliminates the need for vendor prefixes in CSS by including open source -Prefix-Free.
Author: Greg Sweet
Author URI: http://ccdzine.com
version: 1.0
*/

add_action('wp_enqueue_scripts','prefix_free');

function prefix_free() {
    wp_enqueue_script( 'prefixfree', plugins_url( '/prefixfree.min.js', __FILE__ ));
}

?>