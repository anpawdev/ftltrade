<section class="border-t border-grey pt-[44px] sm:pt-[23px] pb-[23px] sm:pb-[78px]">
  <div class="container">
    <div class="row">
      <?php
      $pages = get_posts(array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_status' => 'publish',
      ));

      if ($pages) :
        foreach ($pages as $page) :
          if (have_rows('logotypes_clone', $page->ID)) :
            $logotypes_heading = get_field('logotypes_heading', $page->ID);
            if ($logotypes_heading) : ?>
              <h2 class="text-green uppercase text-center font-bold text-[19px] sm:text-[29px]" data-aos="fade-up">
                <?php echo esc_html($logotypes_heading); ?>
              </h2>
            <?php endif; ?>

            <div id="splide-logo" class="splide my-[38px]" data-aos="fade-up">
              <div class="splide__track">
                <ul class="splide__list items-center">
                  <?php while (have_rows('logotypes_clone', $page->ID)) : the_row();
                    if (have_rows('logotypes')) :
                      while (have_rows('logotypes')) : the_row();
                        $image = get_sub_field('logo');
                        if ($image) : ?>
                          <li class="splide__slide flex justify-center items-center text-center">
                            <div class="overlay-grey relative">
                              <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "h-[105px] object-cover transition-all")); ?>
                            </div>
                          </li>
                  <?php endif;
                      endwhile;
                    endif;
                  endwhile; ?>
                </ul>
              </div>
            </div>
        <?php endif;
        endforeach;?>
      <?php endif; ?>
    </div>
  </div>
</section>