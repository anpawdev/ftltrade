<section class="border-t border-grey pt-[23px] pb-[78px]">
  <div class="container">
    <div class="row">
      <h2 class="text-green uppercase text-center font-bold text-[19px] sm:text-[29px]"><?php echo get_field('logotypes_heading'); ?></h2>
      <div id="splide-logo" class="splide my-[38px]">
        <div class="splide__track">
          <ul class="splide__list items-center">
            <?php while (have_rows('logotypes')) : the_row();
              $image = get_sub_field('logo'); ?>
              <li class="splide__slide flex justify-center items-center text-center">
                <div class="overlay-grey relative">
                  <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "h-[105px] object-cover transition-all")); ?>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>