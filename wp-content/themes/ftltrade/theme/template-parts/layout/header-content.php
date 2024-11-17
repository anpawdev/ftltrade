<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */
?>

<header class="top-0 left-0 w-full fixed z-50 h-[130px] <?php echo is_404() ? 'bg-blue' : ''; ?>">
	<nav class="nav lg:mx-[33px] border-b border-b-border py-[25px] max-w-[100vw] h-full">
		<div class="nav-wrapper px-6 flex justify-between items-center">
			<div>
				<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>" id="logo-white" data-aos="zoom-in">
					<?php
					$logo = get_field('logo', 'options');

					$size = 'full';
					if ($logo) {
						$attr = array(
							'class' => 'w-[134px] sm:w-auto',
							'loading' => 'lazy'
						);
						echo wp_get_attachment_image($logo, $size, false, $attr);
					}
					?>
				</a>
				<a aria-label="ftl-trade" href="<?php echo bloginfo('url'); ?>" class="hidden w-[134px] lg:w-[178px] inline-block max-h-[85px]" id="logo-scroll">
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

			<nav class="lg:w-8/12 lg:block hidden" aria-label="<?php esc_attr_e('Menu główne', 'ftl-trade'); ?>">
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

			<div class="lg:flex items-center hidden text-right">
				<?php if (get_field('facebook_link', 'options')): ?>
					<a href="<?php echo esc_attr(get_field('facebook_link', 'options')); ?>" target="_blank" rel="nofollow noopener noreferrer">
						<svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M30.4998 14.75C30.4998 14.5953 30.4384 14.4469 30.329 14.3375C30.2196 14.2281 30.0712 14.1667 29.9165 14.1667H26.9998C25.5311 14.0935 24.0932 14.6046 23.0002 15.5884C21.9072 16.5721 21.2479 17.9484 21.1665 19.4167V22.5667H18.2498C18.0951 22.5667 17.9468 22.6281 17.8374 22.7375C17.728 22.8469 17.6665 22.9953 17.6665 23.15V26.1834C17.6665 26.3381 17.728 26.4864 17.8374 26.5958C17.9468 26.7052 18.0951 26.7667 18.2498 26.7667H21.1665V34.5834C21.1665 34.7381 21.228 34.8864 21.3374 34.9958C21.4468 35.1052 21.5951 35.1667 21.7498 35.1667H25.2498C25.4045 35.1667 25.5529 35.1052 25.6623 34.9958C25.7717 34.8864 25.8332 34.7381 25.8332 34.5834V26.7667H28.8898C29.0196 26.7686 29.1462 26.7271 29.2497 26.6489C29.3533 26.5708 29.4278 26.4603 29.4615 26.335L30.3015 23.3017C30.3247 23.2155 30.3278 23.1251 30.3106 23.0375C30.2934 22.95 30.2563 22.8675 30.2022 22.7965C30.1481 22.7255 30.0785 22.6678 29.9986 22.628C29.9187 22.5882 29.8308 22.5672 29.7415 22.5667H25.8332V19.4167C25.8622 19.1279 25.9978 18.8603 26.2135 18.6662C26.4293 18.472 26.7096 18.3652 26.9998 18.3667H29.9165C30.0712 18.3667 30.2196 18.3052 30.329 18.1958C30.4384 18.0864 30.4998 17.9381 30.4998 17.7834V14.75Z" fill="#fff" />
						</svg>
					</a>
				<?php endif; ?>
				<?php if (get_field('linkedin_link', 'options')): ?>
					<a href="<?php echo esc_attr(get_field('linkedin_link', 'options')); ?>" target="_blank" rel="nofollow noopener noreferrer">
						<svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M21.1431 20.9656H25.2698V23.0211C25.8642 21.8389 27.3887 20.7767 29.6787 20.7767C34.0687 20.7767 35.1109 23.13 35.1109 27.4478V35.4445H30.6664V28.4311C30.6664 25.9722 30.072 24.5856 28.5587 24.5856C26.4598 24.5856 25.5876 26.08 25.5876 28.43V35.4445H21.1431V20.9656ZM13.522 35.2556H17.9664V20.7767H13.522V35.2556ZM18.6031 16.0556C18.6033 16.4281 18.5294 16.7969 18.3858 17.1407C18.2421 17.4844 18.0316 17.7961 17.7664 18.0578C17.2291 18.5918 16.5018 18.8907 15.7442 18.8889C14.988 18.8884 14.2624 18.5902 13.7242 18.0589C13.46 17.7964 13.2502 17.4843 13.1068 17.1405C12.9635 16.7967 12.8893 16.428 12.8887 16.0556C12.8887 15.3033 13.1887 14.5833 13.7253 14.0522C14.263 13.5202 14.9889 13.2219 15.7453 13.2222C16.5031 13.2222 17.2298 13.5211 17.7664 14.0522C18.302 14.5833 18.6031 15.3033 18.6031 16.0556Z" fill="#fff" />
						</svg>
					</a>
				<?php endif; ?>
				<div class="ml-[24px] flex items-center text-whit uppercase font-bold">
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="#fff" class="bi bi-globe" viewBox="0 0 16 16" class="relative top-[2px]">
						<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
					</svg>
					<ul>
						<?php
						pll_the_languages(array(
							'dropdown' => 1,
							'show_flags' => 0,
							'show_names' => 0,
							'hide_current' => 1,
							'display_names_as' => 'slug'
						));
						?>
					</ul>

				</div>
			</div>


			<div class="nav-toggle lg:hidden">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="nav-content">
				<nav aria-label="<?php esc_attr_e('Menu główne', 'ftl-trade'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'menu-1',
							'container'     => 'ul',
							'menu_class' => 'flex flex-col justify-start items-stretch'
						)
					);
					?>
				</nav>
			</div>

		</div>
	</nav>
</header>