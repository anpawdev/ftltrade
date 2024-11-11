<?php

$background = get_sub_field('hero_image');

?>

<section class="hero hero--custom pt-[194px] lg:pt-[240px] lg:pb-[200px] relative" style="background: url(<?php echo $background ?> ) center no-repeat;">
  <div id="particles-js" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
  <div class="container flex flex-col lg:flex-row min-h-[360px] lg:justify-between">
    <div class="lg:w-6/12 w-full z-10">
      <?php echo get_sub_field('hero_heading'); ?>
      <div class="">

        <?php
        $link = get_sub_field('hero_cta');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="button text-white uppercase text-[17px]" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>