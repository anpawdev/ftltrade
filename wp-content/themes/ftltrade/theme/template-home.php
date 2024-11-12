<?php

/**
 * Template Name: Strona główna
 *
 */

get_header();
?>

<?php
  get_template_part('/template-parts/pages/home/section_hero');
  get_template_part('/template-parts/pages/home/section_company');
  get_template_part('/template-parts/pages/home/section_brans');
  get_template_part('/template-parts/pages/home/section_news');
  get_template_part('/template-parts/pages/home/section_logotypes');

?>

<?php
get_footer();
