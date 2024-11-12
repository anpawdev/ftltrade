<section class="pb-[96px]">
  <div class="container-fluid">
    <div class="row">
        <h2 class="text-green uppercase text-center font-bold text-[19px] sm:text-[29px]"><?php echo get_field('news_heading'); ?></h2>
          <div class="mt-[92px] mb-[78px]">
                <?php
                  $args = [
                      'post_type' => 'post',
                      'posts_per_page' => -1,
                  ];

                  $query = new WP_Query($args);

                  if ($query->have_posts()): ?>
                      <div id="splide-news" class="splide">
                          <div class="splide__track">
                              <ul class="splide__list">
                                  <?php while ($query->have_posts()): $query->the_post(); ?>
                                      <li class="splide__slide">
                                        <div class="relative">
                                           <?php the_post_thumbnail('full', ['class' => 'w-full h-[307px] object-cover']); ?>

                                           <div class="absolute top-[50%] left-[50%] text-white -translate-x-1/2 -translate-y-1/2 w-full text-center px-4">
                                            <h3 class="text-white text-[45px] uppercase font-bold"><?php the_title(); ?></h3>
                                            <span class="font-bold text-white uppercase text-base sm:text-[18px]"><?php echo get_field('date');?></span>
                                           </div>
                                        </div>
                                        <div class="bg-blue text-white py-[39px] pl-[30px] pr-[46px]">
                                      <p><?php echo wp_trim_words(get_the_content(), 20, '');  ?></p>
                                      <a href="<?php echo get_permalink();?>" class="text-white text-right hover:text-green uppercase inline-block">Czytaj więcej</a>
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
    <div class="container">
      <div class="row justify-end flex">
                   <?php
        $link = get_field('news_cta');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class=" button text-black hover:text-green transition-all uppercase font-bold text-[17px] flex items-center" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
            <svg class="ml-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="17" viewBox="0 0 9 17">
              <image id="arrow" data-name="arrow" width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
            </svg>
          </a>
        <?php endif; ?>
      </div>
                  </div>
  </div>
</section>