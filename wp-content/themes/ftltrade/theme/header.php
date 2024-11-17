<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ftl_Trade_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<div id="loader" class="loader">
		<div class="logo">
			<img src='<?php echo get_template_directory_uri(); ?>/images/logo.png' alt='Logo' id='loader-logo' loading='lazy'>
		</div>
	</div>
	<?php echo get_field('head_code', 'options'); ?>
</head>

<body <?php body_class(); ?>>
	<?php echo get_field('body_code', 'options'); ?>

	<?php wp_body_open(); ?>

	<div id="page">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'ftltrade'); ?></a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div id="content">