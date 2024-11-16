<?php

/**
 * Template Name: Strona główna
 *
 */

get_header();
?>

<?php
  get_template_part('/template-parts/pages/home/section_hero');
  get_template_part('/template-parts/pages/global/section_company');
  get_template_part('/template-parts/pages/global/section_brand');
  get_template_part('/template-parts/pages/global/section_news');
  get_template_part('/template-parts/pages/global/section_logotypes');

?>

<?php
get_footer();
