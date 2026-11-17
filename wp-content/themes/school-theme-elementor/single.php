<?php
/**
 * The template for displaying all single posts
 *
 * @package SchoolTheme
 */

get_header();
?>

<main id="primary" class="site-main max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="mb-8">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-3"><?php the_title(); ?></h1>
                <div class="text-sm text-slate-500">
                    Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mb-8 rounded-2xl overflow-hidden shadow-md">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="prose max-w-none text-slate-700 leading-relaxed space-y-4">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
