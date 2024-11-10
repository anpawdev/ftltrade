<?php
/**
 * Template Name: Strona główna
 *
 */

get_header();
?>

<?php 
    while ( have_posts() ) : the_post();
        while (have_rows('homepage_content')): the_row();
            $templatePath =  '/template-parts/pages/home/' . get_row_layout();
            $templatePartExists = file_exists(__DIR__ . $templatePath . '.php' );
            if($templatePartExists){
                get_template_part($templatePath);
            }else{
                echo '<div>ERROR: ' . get_row_layout() .' template part not found!</div>';
            }
        endwhile;
    endwhile;
?>

<?php
get_footer();
