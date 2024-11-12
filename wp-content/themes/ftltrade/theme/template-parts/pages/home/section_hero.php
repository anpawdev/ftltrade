<?php

$background = get_field('hero_image');

?>

<section class="hero hero--custom pt-[194px] lg:pt-[240px] lg:pb-[200px] relative" style="background: url(<?php echo $background ?> ) center no-repeat;">
  <div id="particles-js" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
  <div class="container flex flex-col lg:flex-row min-h-[360px] lg:justify-between">
    <div class="lg:w-6/12 w-full z-10">
      <?php echo get_field('hero_heading'); ?>
      <div class="">

        <?php
        $link = get_field('hero_cta');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class=" button text-white uppercase text-[17px] flex items-center" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="17" viewBox="0 0 9 17">
              <image id="_22_kopia" data-name="22 kopia" width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
            </svg>
          </a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>