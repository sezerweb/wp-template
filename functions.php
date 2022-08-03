<?php

function sezerweb_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'sezerweb_assets' );


	
function wpb_custom_top_menu() {
  register_nav_menu('my-custom-top-menu',__( 'Top Nav' ));
}
add_action( 'init', 'wpb_custom_top_menu' );

?>