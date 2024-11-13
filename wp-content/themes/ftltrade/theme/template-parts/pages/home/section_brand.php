<?php

$background = get_field('brand_background');

?>

<section class="relative mb-[82px] lg:min-h-[899px] flex justify-center items-center" style="background: url(<?php echo $background ?> ) center no-repeat;">
  <div id="particles-js2" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
  <div class="container">
    <div class="flex justify-end">
      <div id="splide-ttb" class="splide">
        <div class="splide__track">
          <ul class="splide__list items-center">
            <?php while (have_rows('brand_slider')) : the_row();
              $text = get_sub_field('brand_text'); ?>
              <li class="splide__slide flex justify-center items-center text-center">
                <p class="text-white xl:text-[66px] uppercase font-Barlow font-bold"><?php echo $text; ?></p>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>