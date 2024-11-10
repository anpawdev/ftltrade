<?php

function gftw_scripts() {
	wp_enqueue_style( 'ftltrade-style', get_stylesheet_uri(), array(), GFTW_VERSION );
	wp_enqueue_script( 'ftltrade-script', get_template_directory_uri() . '/js/script.min.js', array(), GFTW_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gftw_scripts' );
