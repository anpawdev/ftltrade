<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ftl_Trade_Starter
 */

$background = get_field('footer_background', 'options');
?>

<footer id="footer" class="text-white text-base leading-[18px] pt-[108px] pb-[108px] lg:pb-[191px] relative" style="background: url(<?php echo $background ?> ) center/cover no-repeat;">
	<div id="particles-js3" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
	<div class="container">
		<div class="row flex flex-wrap sm:flex-nowrap sm:gap-6 xl:gap-0" data-aos="fade-left">
			<?php
			$left_column = get_field('left_column', 'options');
			if ($left_column): ?>
				<div class="sm:w-4/12 pr-5 sm:pr-0">
					<span class="mb-[21px] inline-block"><b><?php echo $left_column['title']; ?></b></span>
					<?php echo $left_column['text']; ?>
				</div>
			<?php endif; ?>

			<?php
			$middle_column = get_field('middle_column', 'options');
			if ($middle_column): ?>
				<div class="sm:w-4/12">
					<div>
						<span class="mb-[21px] inline-block"><b><?php echo $middle_column['first_title']; ?></b></span>
						<?php echo $middle_column['first_text']; ?>
					</div>
					<div>
						<span class="mb-[21px] inline-block"><b><?php echo $middle_column['second_title']; ?></b></span>
						<?php echo $middle_column['second_text']; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="sm:w-4/12 sm:mt-[40px]">
				<?php echo get_field('right_column', 'options'); ?>
			</div>

		</div>
		<div class="row">
			<div class="w-full text-center flex justify-center items-center mt-[119px]">
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
		</div>
	</div>
</footer>