<?php

$form = get_field('contact_form');

?>

<section class="contact contact-form">
  <div class="container-fluid">
    <div class="row flex flex-wrap">

      <div class="w-1/2">
        <?php
        $contact = get_field('contact_form');
        if ($contact): ?>
          <?php echo do_shortcode($contact['form']); ?>
        <?php endif; ?>
      </div>

      <div class="bg-white w-1/2">
        <div class="w-[134px] lg:w-[310px] inline-block  mb-9">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-[140px] mt-[77px]">
              <div>
                <div class="mb-[66px]">
                  <?php echo $contact['phone']; ?>
                </div>
                <div class="mb-[66px]">
                  <?php echo $contact['hours']; ?>
                </div>
              </div>
              <div>
                <div class="mb-[66px]">
                  <?php echo $contact['email']; ?>
                </div>
                <div class="mb-[66px]">
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