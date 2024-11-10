<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ftl_Trade_Starter
 */

?>

<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$left_column = get_field('left_column', 'options');
			if ($left_column): ?>
				<div>
					<?php echo $left_column['title']; ?>
					<?php echo $left_column['text']; ?>
				</div>
			<?php endif; ?>

			<?php
			$middle_column = get_field('middle_column', 'options');
			if ($middle_column): ?>
				<div>
					<div>
						<?php echo $middle_column['first_title']; ?>
						<?php echo $middle_column['first_text']; ?>
					</div>
					<div>
						<?php echo $middle_column['second_title']; ?>
						<?php echo $middle_column['second_text']; ?>
					</div>
				</div>
			<?php endif; ?>

			<div>
				<?php echo get_field('right_column', 'options'); ?>
			</div>

		</div>
	</div>
</footer>