<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ftl_Trade_Starter
 */

get_header();
?>

<?php

$background = get_field('banner_background', 49);

?>

<section class="hero hero--custom md:h-[614px] py-[160px] pt-[194px] mb-[75px] lg:pt-[244px] lg:pb-[200px] relative flex justify-center items-center" style="background: url(<?php echo $background ?> ) no-repeat;">
	<div id="particles-js" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
	<div class="container">
		<div class="w-full z-10 uppercase text-center font-bold" data-aos="zoom-in">
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			</header><!-- .entry-header -->

		</div>
	</div>
</section>


<section class="mb-[75px] lg:mb-[200px]">
	<div class="container">

		<div class="row">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content/content', 'single');
			// End the loop.
			endwhile;
			?>

			<div class="row mt-14">
				<h2 class="text-green uppercase text-center font-bold text-[19px] sm:text-[29px]" data-aos="fade-up" data-aos-delay="400">
					<?php _e('Zobacz również', 'ftltrade'); ?>
				</h2>
				<div class="mt-[45px] sm:mt-[92px] mb-[94px] sm:mb-[70px]">
					<?php
					$current_post_id = get_the_ID();
					$args = [
						'post_type' => 'post',
						'posts_per_page' => 3,
						'post__not_in'   => array($current_post_id),
					];

					$query = new WP_Query($args);

					if ($query->have_posts()): ?>
						<div>
							<div>
								<ul class="grid grid-cols-1 lg:grid-cols-3 gap-6">
									<?php while ($query->have_posts()): $query->the_post(); ?>
										<li>
											<div class="overlay-blue relative">
												<?php the_post_thumbnail('full', ['class' => 'w-full h-[307px] object-cover']); ?>
												<img src='<?php echo get_template_directory_uri(); ?>/images/mask.svg' alt='' loading='lazy' class="absolute top-0 z-20">

												<div class="absolute top-[50%] left-[50%] text-white -translate-x-1/2 -translate-y-1/2 w-full text-center px-4 z-10">
													<h3 class="text-white text-[45px] uppercase font-bold"><?php the_title(); ?></h3>
													<span class="font-bold text-white uppercase text-base sm:text-[18px]"><?php echo get_field('date'); ?></span>
												</div>
											</div>
											<div class="bg-blue text-white pb-[27px] pt-[39px] pl-[30px] pr-[46px]">
												<p class="text-base leading-[20px] mb-[59px]"><?php echo wp_trim_words(get_the_content(), 20, '');  ?></p>
												<a href="<?php echo get_permalink(); ?> " class="text-white font-bold text-[18px] text-right hover:text-green uppercase block ml-auto"><?php _e('Czytaj więcej', 'ftl-trade'); ?>
													<svg class="ml-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="17" viewBox="0 0 9 17">
														<image id="arrow" data-name="arrow" width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
													</svg>
												</a>
											</div>


										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					<?php endif;

					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section><!-- #primary -->

<?php
get_footer();
