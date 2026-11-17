<?php
/**
 * Template Name: Elementor Full Width
 * Template Post Type: page, post
 *
 * @package SchoolTheme
 */

get_header();
?>

<main id="primary" class="site-main w-full">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
