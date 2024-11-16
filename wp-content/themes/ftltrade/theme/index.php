<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ftl_Trade_Starter
 */

get_header();

get_template_part('/template-parts/pages/global/section_hero');
get_template_part('/template-parts/pages/global/section_news');
get_template_part('/template-parts/pages/global/section_logotypes');

get_footer();
