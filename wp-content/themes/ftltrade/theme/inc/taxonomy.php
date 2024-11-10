<?php
// hook into the init action and call mentors_taxonomies when it fires
add_action('init', 'products_taxonomies', 0);

function products_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x('Kategorie', 'taxonomy general name', 'ftltrade'),
    'singular_name'     => _x('Kategorie', 'taxonomy singular name', 'ftltrade'),
    'search_items'      => __('Szukaj', 'ftltrade'),
    'all_items'         => __('Wszystkie', 'ftltrade'),
    'parent_item'       => __('Rodzic', 'ftltrade'),
    'parent_item_colon' => __('Rodzic:', 'ftltrade'),
    'edit_item'         => __('Edytuj', 'ftltrade'),
    'update_item'       => __('Aktualizuj', 'ftltrade'),
    'add_new_item'      => __('Dodaj nową', 'ftltrade'),
    'new_item_name'     => __('Nowa pozycja', 'ftltrade'),
    'menu_name'         => __('Kategorie', 'ftltrade'),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'produkty', 'with_front' => false),
  );

  register_taxonomy('products_category', array('products'), $args);
}
