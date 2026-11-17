<?php
/**
 * The front page template file (Elementor Ready with Default Fallback)
 *
 * @package SchoolTheme
 */

get_header();
?>

<main id="primary" class="site-main" data-elementor-type="wp-page">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            // Check if built with Elementor or has custom page content
            if ( ! empty( get_the_content() ) ) :
                the_content();
            else :
                // Default Hero & Features Fallback when page is blank
                ?>
                <!-- Hero Section -->
                <section class="relative bg-slate-900 text-white py-24 lg:py-32 overflow-hidden">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#4f46e5_1px,transparent_1px)] [background-size:16px_16px]"></div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <span class="text-indigo-400 font-semibold tracking-wider uppercase text-sm bg-indigo-950/80 px-3 py-1 rounded-full border border-indigo-800/50">Welcome to Our Institution</span>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mt-4 mb-6 leading-tight">Shaping Futures With Excellence</h1>
                            <p class="text-lg text-slate-300 mb-8 max-w-xl">Providing a dynamic learning environment where students discover their potential, build strong foundations, and prepare for a global future.</p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#academics" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-xl transition shadow-lg shadow-indigo-600/30">Explore Programs</a>
                                <a href="#contact" class="bg-slate-800 hover:bg-slate-700 text-white font-medium px-6 py-3 rounded-xl transition border border-slate-700">Book a Tour</a>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="bg-gradient-to-tr from-indigo-500 to-purple-500 rounded-3xl p-1 shadow-2xl">
                                <div class="bg-slate-900 rounded-[22px] p-6">
                                    <div class="aspect-video bg-slate-800 rounded-xl flex items-center justify-center text-slate-400 font-medium border border-slate-700">
                                        Edit this page with Elementor to customize!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section class="py-20 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center max-w-2xl mx-auto mb-16">
                            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Why Choose Our School</h2>
                            <p class="text-slate-600 mt-3">We blend traditional core values with modern innovative techniques.</p>
                        </div>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:shadow-xl transition duration-300">
                                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-xl mb-6">01</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Creative Learning</h3>
                                <p class="text-slate-600 leading-relaxed">Interactive curricula tailored to spark curiosity, critical thinking, and independent problem-solving skills.</p>
                            </div>
                            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:shadow-xl transition duration-300">
                                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-xl mb-6">02</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Modern Facilities</h3>
                                <p class="text-slate-600 leading-relaxed">State-of-the-art computer labs, extensive libraries, and advanced science facilities to ensure practical exposure.</p>
                            </div>
                            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 hover:shadow-xl transition duration-300">
                                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-xl mb-6">03</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Holistic Development</h3>
                                <p class="text-slate-600 leading-relaxed">Comprehensive co-curricular activities covering sports, arts, debate, and community leadership.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endif;
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
