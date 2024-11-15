<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */
?>

<header class="header z-50 fixed top-0 left-0 w-full">
	<div class="container-fluid flex justify-between items-center flex-row mx-[33px] border-b border-b-border py-[22px]">
		<div class="lg:w-2/12 w-10/12 lg:ml-0 -ml-[13px] lg:pl-[73px]">
			<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>" id="logo-white">
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
			<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>" class="hidden w-[178px] inline-block" id="logo-scroll">
				<?php
				$logo = get_field('logo_scroll', 'options');

				$size = 'full';
				if ($logo) {
					$attr = array(
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
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-globe" viewBox="0 0 16 16">
				<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
			</svg>
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