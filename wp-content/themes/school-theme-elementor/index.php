<?php
/**
 * The main template file
 *
 * @package SchoolTheme
 */

get_header();
?>

<main id="primary" class="site-main max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <?php if ( have_posts() ) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md transition' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="mb-4 rounded-xl overflow-hidden">
                            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
                        </div>
                    <?php endif; ?>
                    <h2 class="text-xl font-bold text-slate-900 mb-2">
                        <a href="<?php the_permalink(); ?>" class="hover:text-indigo-600 transition"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-slate-600 text-sm mb-4">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="text-indigo-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="mt-12">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p class="text-slate-600">No content found.</p>
    <?php endif; ?>
</main>

<?php
get_footer();
