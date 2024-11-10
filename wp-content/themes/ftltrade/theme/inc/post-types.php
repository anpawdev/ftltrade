<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'products_post_type' ) ) {
	/**
	 * Registers a `products` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function products_post_type() {
		register_post_type(
			'products', array(
				'public'      => true,
				'supports'    => array( 'title', 'thumbnail' ),
				'rewrite' => array( 'slug' => 'produkty/%products_category%', 'with_front' => true ),
				'menu_icon' => 'dashicons-products',
				'has_archive' => true,
				'labels'      => array(
					'name'                => _x( 'Produkty', 'Post Type General Name', 'ftltrade' ),
					'singular_name'       => _x( 'Produkty', 'Post Type Singular Name', 'ftltrade' ),
					'menu_name'           => __( 'Produkty', 'ftltrade' ),
					'name_admin_bar'      => __( 'products', 'ftltrade' ),
					'parent_item_colon'   => __( 'Rodzic:', 'ftltrade' ),
					'all_items'           => __( 'Wszystkie', 'ftltrade' ),
					'add_new_item'        => __( 'Dodaj nowy', 'ftltrade' ),
					'add_new'             => __( 'Dodaj nowy', 'ftltrade' ),
					'new_item'            => __( 'Nowy', 'ftltrade' ),
					'edit_item'           => __( 'Edytuj', 'ftltrade' ),
					'update_item'         => __( 'Aktualizuj', 'ftltrade' ),
					'view_item'           => __( 'Zobacz', 'ftltrade' ),
					'search_items'        => __( 'Szukaj', 'ftltrade' ),
					'not_found'           => __( 'Nie znaleziono', 'ftltrade' ),
					'not_found_in_trash'  => __( 'Nie znaleziono w koszu', 'ftltrade' ),
				),
			)
		);
	}
}
add_action( 'init', 'products_post_type' );

?>