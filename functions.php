<?php

function sezerweb_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'sezerweb_assets' );

?>