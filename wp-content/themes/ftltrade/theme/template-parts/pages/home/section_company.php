<section id="ftl-trade" class="py-[64px] md:pt-[147px] sm:pb-[106px]">
  <div class="container">
    <div class="row">
      <?php
      if (get_field('company_blocks')) :
        $row_index = 0;
        while (have_rows('company_blocks')) : the_row();
          $image = get_sub_field('company_image');
          $row_index++;
          $is_even = $row_index % 2 === 0;
      ?>
          <div class="lg:w-11/12 md:justify-center flex flex-wrap md:flex-nowrap sm:gap-[40px] lg:gap-[169px] mb-[76px] mx-auto" <?php if ($is_even): ?>data-aos="fade-right" <?php else: ?>data-aos="fade-left" <?php endif; ?>>
            <?php if ($is_even): ?>
              <div class="relative overlay-blue order-2 sm:order-1 w-full md:w-1/2">
              <?php else: ?>
                <div class="relative overlay-blue order-1 md:-order-1 w-full md:w-1/2">
                <?php endif; ?>
                <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "w-full xl:min-w-[507px] h-full")); ?>
                <div class="absolute top-[50%] left-[50%] text-white -translate-x-1/2 -translate-y-1/2 z-10">
                  <span class="uppercase font-bold text-[32px] lg:text-[45px] leading-none"><?php echo get_sub_field('company_image_heading'); ?></span>
                  <p class="text-[18px] leading-6 lg:text-[25px] relative -top-[5px]"><?php echo get_sub_field('company_image_text'); ?></p>
                </div>
                </div>
                <div class="wysiwyg md:w-1/2 <?php if ($is_even): ?>xl:pr-[30px]<?php endif; ?> mb-[48px] lg:mb-0">
                  <?php if (get_sub_field('company_heading')): ?>
                    <h2 class="text-green uppercase text-[24px] lg:text-[29px] font-bold mb-[20px]"><?php echo get_sub_field('company_heading'); ?></h2>
                  <?php endif; ?>
                  <?php echo get_sub_field('company_text'); ?>
                  <?php
                  $link = get_sub_field('company_cta');
                  if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <a class="button text-dark uppercase text-base lg:text-[18px] hover:text-green transition-all font-bold inline-block mt-[40px]" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                      <svg class="ml-3 inline-block relative -top-[2px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="17" viewBox="0 0 9 17">
                        <image id="arrow" data-name="arrow" width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
                      </svg>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>


          </div>
    </div>
</section>