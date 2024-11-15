<section id="ftl-trade">
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
          <div class="sm:w-10/12 justify-center flex flex-wrap sm:flex-nowrap sm:gap-[169px] mx-auto">
            <?php if ($is_even): ?>
              <div class="relative overlay-blue order-2 sm:order-1">
              <?php else: ?>
                <div class="relative overlay-blue order-1 sm:-order-1">
                <?php endif; ?>
                <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "w-full")); ?>
                <div class="absolute top-[50%] left-[50%] text-white -translate-x-1/2 -translate-y-1/2 z-10">
                  <span class="uppercase font-bold text-[45px] leading-none"><?php echo get_sub_field('company_image_heading'); ?></span>
                  <p class="text-[25px]"><?php echo get_sub_field('company_image_text'); ?></p>
                </div>
                </div>
                <div>
                  <?php if (get_sub_field('company_heading')): ?>
                    <span class="text-green uppercase text-[20px] font-bold"><?php echo get_sub_field('company_heading'); ?></span>
                  <?php endif; ?>
                  <?php echo get_sub_field('company_text'); ?>
                  <?php
                  $link = get_sub_field('company_cta');
                  if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <a class="button text-dark uppercase text-[16px] hover:text-green transition-all font-bold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                      <svg class="ml-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="17" viewBox="0 0 9 17">
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