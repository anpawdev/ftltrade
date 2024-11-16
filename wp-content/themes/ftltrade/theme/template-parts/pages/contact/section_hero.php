<?php

$background = get_field('contact_background');

?>

<section class="hero hero--top md:h-[100vh] py-[160px] pt-[194px] mb-[75px] lg:pt-[244px] lg:pb-[200px] relative flex justify-center items-center" style="background: url(<?php echo $background ?> ) no-repeat;">
  <div id="particles-js" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
  <div class="container">
    <div class="w-full z-10 uppercase text-center font-bold" data-aos="zoom-in">
      <?php echo get_field('contact_title'); ?>
    </div>
    <div class="text-center">

      <?php
      $link = get_field('contact_cta');
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a
          class="button text-white uppercase text-base lg:text-[18px] hover:text-green transition-all font-bold inline-block md:mt-[40px] relative z-20 top-[80px] md:top-[127px]"
          href="<?php echo esc_url($link_url); ?>"
          target="<?php echo esc_attr($link_target); ?>">
          <?php echo esc_html($link_title); ?>
          <svg
            class="ml-6 inline-block relative -top-[2px] rotate-90"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="9"
            height="17"
            viewBox="0 0 9 17">
            <image id="arrow" width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
          </svg>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>