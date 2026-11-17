<?php
/**
 * The template for displaying all pages (Elementor Full-Width Ready)
 *
 * @package SchoolTheme
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        // Check if built with Elementor
        $is_elementor = get_post_meta( get_the_ID(), '_elementor_edit_mode', true );
        if ( $is_elementor ) :
            the_content();
        else :
            ?>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-8"><?php the_title(); ?></h1>
                <div class="prose max-w-none text-slate-700 leading-relaxed">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        endif;
    endwhile;
    ?>
</main>

<?php
get_footer();
