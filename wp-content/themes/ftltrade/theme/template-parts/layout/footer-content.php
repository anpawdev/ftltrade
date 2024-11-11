<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ftl_Trade_Starter
 */

?>

<footer id="footer" class="bg-blue text-white text-[15px] leading-[18px] lg:pt-[107px] lg:pb-[191px] relative">
	<div id="particles-js3" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
	<div class="container">
		<div class="row flex flex-wrap">
			<?php
			$left_column = get_field('left_column', 'options');
			if ($left_column): ?>
				<div class="sm:w-4/12">
					<b><?php echo $left_column['title']; ?></b>
					<?php echo $left_column['text']; ?>
				</div>
			<?php endif; ?>

			<?php
			$middle_column = get_field('middle_column', 'options');
			if ($middle_column): ?>
				<div class="sm:w-4/12">
					<div>
						<b><?php echo $middle_column['first_title']; ?></b>
						<?php echo $middle_column['first_text']; ?>
					</div>
					<div>
						<b><?php echo $middle_column['second_title']; ?></b>
						<?php echo $middle_column['second_text']; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="sm:w-4/12">
				<?php echo get_field('right_column', 'options'); ?>
			</div>

			<div class="w-full text-center">
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