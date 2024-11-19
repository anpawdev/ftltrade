<section class="border-t border-grey pt-[44px] sm:pt-[23px] pb-[23px] sm:pb-[78px]">
  <div class="container">
    <div class="row">
      <?php
            $logotypes_heading = get_field('logotypes_heading');
            if ($logotypes_heading) : ?>
              <h2 class="text-green uppercase text-center font-bold text-[19px] sm:text-[29px]" data-aos="fade-up">
                <?php echo esc_html($logotypes_heading); ?>
              </h2>
            <?php endif; ?>

            <div id="splide-logo" class="splide my-[38px]" data-aos="fade-up">
              <div class="splide__track">
                <ul class="splide__list items-center">
                  <?php if (have_rows('logotypes')) :
                      while (have_rows('logotypes')) : the_row();
                        $image = get_sub_field('logo');
                        if ($image) : ?>
                          <li class="splide__slide flex justify-center items-center text-center">
                            <div class="overlay-grey relative">
                              <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "h-[105px] object-contain transition-all grayscale-[90%] hover:grayscale-0")); ?>
                            </div>
                          </li>
                  <?php endif;
                    endwhile;
                    endif;
                   ?>
                </ul>
              </div>
            </div>
        <?php  ?>
    </div>
  </div>
</section>