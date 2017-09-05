<?php

function wpb_adding_styles() {
	wp_register_style('custom', plugins_url('custom', _FILE_));
    wp_register_style('bootstrap', plugins_url('bootstrap-min.css', _FILE_));
    wp_register_style('font-awesome', plugins_url('font-awesome-min.css', _FILE_));
    
	wp_enqueue_style( 'custom' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
}

add_action ('wp_enqueue_scripts', 'wpb_adding_styles');


function wpb_adding_scripts() {
	wp_register_script('custom', plugins_url('custom.js', _FILE_), array('jquery'), '1.1', true);
	wp_enqueue_script('custom');
}

add_action ('wp_enqueue_scripts', 'wpb_adding_scripts');

?>