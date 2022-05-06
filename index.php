<?php
/*
Plugin Name: Gap Fill Applet
Description: This plugin will provide an applet to fill gaps by placing words using drag and drop
Author: Muhammad Bilal ( bilal.scientist@gmail.com )
Version: 1.0.0
*/


add_filter('the_content', 'MBK_Gap_Fill_Plugin');
function MBK_Gap_Fill_Plugin($content) {
    $content .= file_get_contents (plugin_dir_path( __FILE__ ) . "page.txt");
    return $content;
}


add_action('wp_enqueue_scripts', 'pwwp_enqueue_bootstrap4_gap');
function pwwp_enqueue_bootstrap4_gap() {
    wp_enqueue_style( 'bootstrap-gap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'popper-gap','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_style('main-styles-gap', plugins_url( 'css/style.css' , __FILE__ ), array(), rand(), false);
	wp_register_style('fontawesome-gap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array());
    wp_enqueue_style('fontawesome-gap');
}

function speed_reader_scripts_gap() {
    wp_enqueue_script( 'frontend-ajax-gap', plugins_url( 'js/demo.js?x=' . rand(), __FILE__ ), array('jquery'), null, true );
    wp_localize_script( 'frontend-ajax-gap', 'frontend_ajax_object',
        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ))
    	);
	wp_enqueue_script('bootstrap-js-gap', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script('bootstrap-js2-gap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
	wp_enqueue_script('bootstrap-js3-gap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
	wp_enqueue_script('jquery1-gap', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script('jquery-gap', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script('jquery2-gap', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
	wp_enqueue_script('bootstrap-jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'speed_reader_scripts_gap' );



?>