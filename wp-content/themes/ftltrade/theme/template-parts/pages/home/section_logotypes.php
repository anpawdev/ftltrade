<section>
  <div class="container">
    <div class="lg:pt-14 lg:pb-[81px] border-top border-top-white-light">
      <div>
        <h2 class="text-green uppercase text-center font-bold text-[19px]"><?php echo get_sub_field('logotypes_heading');?></h2>
      </div>
      <div id="splide-logo" class="splide">
        <div class="splide__track">
          <ul class="splide__list items-center">
            <?php while (have_rows('logotypes')) : the_row();
              $image = get_sub_field('logo'); ?>
              <li class="splide__slide flex justify-center items-center text-center">
                <?php echo wp_get_attachment_image($image, 'full', '', array("class" => "w-[105px] h-[105px] object-cover")); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>