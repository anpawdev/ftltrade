<?php

$form = get_field('contact_form');
$contact = get_field('contact_form');
$backgroundForm = isset($contact['background']['url']) ? $contact['background']['url'] : '';

?>

<section class="contact contact-form overflow-hidden" id="formularz">

  <div class="container-fluid position-relative">
    <div class="row flex flex-wrap xl:flex-nowrap">

      <!-- Image -->
      <div class="xl:w-1/2 min-h-[400px] pt-[77px] pb-[54px] sm:pb-0 xl:min-h-[885px] w-full h-full" style="background: url('<?php echo esc_url($backgroundForm); ?>') no-repeat; background-size:cover; background-position: center;">
        <div class="contact-form__form w-full xl:pl-[100px] xl:pr-[75px] px-6 text-white z-10">
          <?php
          if ($contact): ?>
            <?php echo do_shortcode($contact['form']); ?>
          <?php endif; ?>
          <div class="pb-5 sm:pb-14">
            <div id="rodo-content">
              <?php echo $contact['rodo']; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Text -->
      <div class="xl:w-1/2 bg-white xl:pl-[118px] pt-[71px] px-6">
        <div class="w-[174px] sm:w-[310px] inline-block mb-9">
          <?php
          $logo = get_field('logo_scroll', 'options');

          $size = 'full';
          if ($logo) {
            $attr = array(
              'loading' => 'lazy'
            );
            echo wp_get_attachment_image($logo, $size, false, $attr);
          }
          ?>
        </div>

        <?php
        $contact = get_field('contact');
        if ($contact): ?>
          <div class="contact__content">
            <?php echo $contact['text']; ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-[140px] xl:gap-[80px] 2xl:gap-[140px] mt-6 sm:mt-[77px]">
              <div>
                <div class="mb-8 sm:mb-[66px]">
                  <?php echo $contact['phone']; ?>
                </div>
                <div class="mb-8 sm:mb-[66px]">
                  <?php echo $contact['hours']; ?>
                </div>
              </div>
              <div>
                <div class="mb-8 sm:mb-[66px]">
                  <?php echo $contact['email']; ?>
                </div>
                <div class="mb-8 sm:mb-[66px]">
                  <?php echo $contact['opening_hours']; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

</section>