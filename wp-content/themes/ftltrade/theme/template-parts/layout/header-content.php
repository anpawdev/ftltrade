<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */
?>

<header class="header py-6 z-10 fixed top-0 left-0 w-full">
	<div class="container flex justify-between items-center flex-row">
		<div class="lg:w-2/12 w-10/12 lg:ml-0 -ml-[13px]">
			<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>">
				<?php
				$logo = get_field('logo', 'options');

				$size = 'full';
				if ($logo) {
					$attr = array(
						'class' => '',
						'loading' => 'lazy'
					);
					echo wp_get_attachment_image($logo, $size, false, $attr);
				}
				?>
			</a>
		</div>

		<nav class="xl:w-8/12 lg:w-9/12 lg:block hidden" aria-label="<?php esc_attr_e('Menu główne', 'ftl-trade'); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'menu-1',
					'container'     => 'ul',
					'menu_class' => 'header__menu flex flex-row justify-center'
				)
			);
			?>
		</nav>

		<div class="lg:w-2/12 xl:block hidden text-center">
			<a href="" class="btn btn--primary btn--inline-block max-[1100px]:px-6"></a>
		</div>
		<div class="lg:block hidden text-right">
			<ul class="ml-2">
			</ul>
		</div>

		<div class="w-2/12 lg:hidden flex justify-end items-center pr-1">
			<a href="#" class="hamburger-menu">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
					<path d="M15.625 5.625H4.375a.625.625 0 1 1 0-1.25h11.25a.625.625 0 1 1 0 1.25ZM18.75 10a.626.626 0 0 0-.625-.625H1.875a.625.625 0 1 0 0 1.25h16.25A.626.626 0 0 0 18.75 10Zm-2.5 5a.626.626 0 0 0-.625-.625H4.375a.625.625 0 1 0 0 1.25h11.25A.626.626 0 0 0 16.25 15Z" fill="#F5F5F5" stroke="#fff" />
				</svg>
			</a>

			<a href="#" class="hamburger-close-menu">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2 2L14 14" stroke="white" stroke-width="3" stroke-linecap="round" />
					<path d="M2 14L14 2" stroke="white" stroke-width="3" stroke-linecap="round" />
				</svg>

			</a>
		</div>
	</div>
	<div class="floating-header h-0 invisible opacity-0 !p-0 top-0 fixed w-full bg-dark-blue py-6 z-[99]">

		<div class="container flex justify-between items-center flex-row">
			<div class="lg:w-2/12 w-10/12 lg:ml-0 -ml-[13px]">
				<?php get_template_part('template-parts/layout/logo'); ?>
			</div>

			<nav class="lg:w-8/12 lg:block hidden" aria-label="<?php esc_attr_e('Menu główne', 'ftl-trade'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'menu-1-second',
						'container'     => 'ul',
						'menu_class' => 'header__menu flex flex-row justify-center'
					)
				);
				?>
			</nav>

			<div class="lg:w-2/12 lg:block hidden text-right">
				<a href="<?php echo $contact_url; ?>" class="btn btn--primary btn--inline-block max-[1100px]:px-6"></a>
			</div>
			<div class="lg:block hidden text-right">
				<ul class="ml-8">
				</ul>
			</div>

			<div class="w-2/12 lg:hidden flex justify-end items-center pr-1">
				<a href="#" class="hamburger-menu">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
						<path d="M15.625 5.625H4.375a.625.625 0 1 1 0-1.25h11.25a.625.625 0 1 1 0 1.25ZM18.75 10a.626.626 0 0 0-.625-.625H1.875a.625.625 0 1 0 0 1.25h16.25A.626.626 0 0 0 18.75 10Zm-2.5 5a.626.626 0 0 0-.625-.625H4.375a.625.625 0 1 0 0 1.25h11.25A.626.626 0 0 0 16.25 15Z" fill="#F5F5F5" stroke="#fff" />
					</svg>
				</a>

				<a href="#" class="hamburger-close-menu">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 2L14 14" stroke="white" stroke-width="3" stroke-linecap="round" />
						<path d="M2 14L14 2" stroke="white" stroke-width="3" stroke-linecap="round" />
					</svg>

				</a>
			</div>
		</div>
	</div>
</header>