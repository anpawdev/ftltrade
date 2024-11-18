<?php

$background = get_field('banner_background', 49);

?>

<section class="hero hero--custom md:h-[614px] py-[160px] pt-[194px] mb-[75px] lg:pt-[244px] lg:pb-[200px] relative flex justify-center items-center" style="background: url(<?php echo $background ?> ) no-repeat; background-size:cover;">
  <div id="particles-js" class="absolute top-0 left-0 right-0 bottom-0 z-[2]"></div>
  <div class="container">
    <div class="w-full z-10 uppercase text-center font-bold" data-aos="zoom-in">
      <?php echo get_field('banner_title', 49); ?>
    </div>
  </div>
</section>