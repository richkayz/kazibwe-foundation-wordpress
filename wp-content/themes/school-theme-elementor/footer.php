<?php
/**
 * The template for displaying the footer
 *
 * @package SchoolTheme
 */

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) :
?>
<footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <div>
            <span class="text-white font-bold text-xl tracking-tight"><?php bloginfo( 'name' ); ?></span>
            <p class="mt-4 text-sm"><?php bloginfo( 'description' ); ?></p>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Quick Links</h4>
            <?php
            if ( has_nav_menu( 'footer' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'space-y-2 text-sm',
                ) );
            } else {
                ?>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition">Academics</a></li>
                    <li><a href="#" class="hover:text-white transition">Admissions</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Programs</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white transition">Nursery & Kindergarten</a></li>
                <li><a href="#" class="hover:text-white transition">Primary School</a></li>
                <li><a href="#" class="hover:text-white transition">Co-Curricular Activities</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Contact Info</h4>
            <p class="text-sm mb-2">123 Education Lane, Learning City</p>
            <p class="text-sm mb-2">Email: info@schooltheme.edu</p>
            <p class="text-sm">Phone: +1 (555) 123-4567</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
        &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
    </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
