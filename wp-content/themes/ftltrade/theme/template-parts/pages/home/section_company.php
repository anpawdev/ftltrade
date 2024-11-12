<section>
  <div class="container">
    <div class="row">
      <?php
      if (get_field('company_blocks')) :
        while (have_rows('company_blocks')) : the_row();
          $image = get_sub_field('company_image'); ?>
          <div class="flex flex-wrap sm:flex-nowrap sm:gap-[169px]">
            <div class="relative">
              <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "")); ?>
              <div class="absolute top-[50%] left-[50%] text-white -translate-x-1/2 -translate-y-1/2">
                <span class="uppercase"><?php echo get_sub_field('company_image_heading'); ?></span>
                <p><?php echo get_sub_field('company_image_text'); ?></p>
              </div>
            </div>
            <div>
              <?php if (get_sub_field('company_heading')): ?>
                <span class="text-green uppercase"><?php echo get_sub_field('company_heading'); ?></span>
              <?php endif; ?>
              <?php echo get_sub_field('company_text'); ?>
              <?php
              $link = get_sub_field('company_cta');
              if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="button text-dark uppercase text-[17px] hover:text-green transition-all" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>