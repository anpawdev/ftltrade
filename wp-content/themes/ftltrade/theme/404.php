<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ftl_Trade_Starter
 */

get_header();
?>

<section id="primary" class="py-[160px] pt-[194px] lg:pt-[244px] lg:pb-[200px]">
	<main id="main">

		<div class="text-center">
			<header class="page-header">
				<h1 class="page-title text-[84px] leading-[100px] text-green"><?php esc_html_e('404', 'ftltrade'); ?></h1>
			</header><!-- .page-header -->

			<div <?php gftw_content_class('page-content'); ?>>
				<p class="text-xl uppercase font-bold text-dark"><?php esc_html_e('Strony nie znaleziono.', 'ftltrade'); ?></p>
				<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>" class="bg-green hover:bg-transparent uppercase no-underline font-bold !text-white hover:!text-green text-[18px] inline-flex font-Barlow hover:border hover:border-green justify-center items-center h-[54px] px-6"><?php _e('Strona główna', 'ftltrade');?></a>
			</div><!-- .page-content -->
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
