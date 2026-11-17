<?php
/**
 * The header for our theme
 *
 * @package SchoolTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-slate-50 text-slate-800 antialiased font-sans' ); ?>>
<?php wp_body_open(); ?>

<?php
// Support Elementor Pro Header Location if active
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) :
?>
<header class="bg-white border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        <?php echo esc_html( substr( get_bloginfo( 'name' ), 0, 1 ) ?: 'S' ); ?>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">
                        <?php bloginfo( 'name' ); ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>

        <nav class="hidden md:flex items-center gap-8 font-medium text-slate-600">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex items-center gap-8',
                    'fallback_cb'    => false,
                ) );
            } else {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-indigo-600">Home</a>
                <a href="#about" class="hover:text-indigo-600 transition">About Us</a>
                <a href="#academics" class="hover:text-indigo-600 transition">Academics</a>
                <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
                <?php
            }
            ?>
        </nav>

        <div>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-sm">
                Enroll Now
            </a>
        </div>
    </div>
</header>
<?php endif; ?>
