<?php
function meridian_studio_scripts() {
    // Google Fonts ലോഡ് ചെയ്യുന്നു
    wp_enqueue_style('meridian-fonts', 'https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=IBM+Plex+Mono&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;1,6..72,400&display=swap', array(), null);

    // main style.css ലോഡ് ചെയ്യുന്നു
    // നിങ്ങളുടെ functions.php-ൽ ഇതിനോട് സമാനമായ വരി ഉണ്ടാകും, അത് മാറ്റി ഇങ്ങനെയാക്കുക:
wp_enqueue_style( 'meridian-style', get_stylesheet_uri(), array(), time() );
}
add_action('wp_enqueue_scripts', 'meridian_studio_scripts');

function meridian_studio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'meridian_studio_setup');

function register_meridian_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'meridian-studio' )
        )
    );
}
add_action( 'init', 'register_meridian_menus' );