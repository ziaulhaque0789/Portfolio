<?php 
// Enqueue styles and scripts
function merch_web_theme_scripts() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
    // Bootstrap Icons
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.3.0' );
    // Theme style.css (This fetches your main style.css in the theme root)
    wp_enqueue_style( 'merch-web-style', get_stylesheet_uri(), array('bootstrap-css', 'bootstrap-icons'), '1.0' );

    // Your custom script.js
    // We pass the AJAX URL to your script so it knows where to fetch partials
    wp_enqueue_script( 'merch-web-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0', true ); // jQuery is a dependency for Bootstrap's JS and generally useful
    

 wp_enqueue_script(
        'html2pdf',
        'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js',
        array(), // No dependencies
        '0.10.1',
        true // Load in footer
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
    // Localize script to pass PHP variables to JavaScript (e.g., the base URL)
    wp_localize_script( 'merch-web-script', 'MerchWeb', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ), // For future AJAX if needed
        'partials_url' => get_template_directory_uri() . '/partials/', // Base URL for your partials
        'home_partial' => 'home.php' // Default partial to load
    ) );
}
add_action( 'wp_enqueue_scripts', 'merch_web_theme_scripts' );

// Add theme support for various features
function merch_web_theme_setup() {
    add_theme_support( 'title-tag' ); // Let WordPress manage the <title> tag
    add_theme_support( 'post-thumbnails' ); // Enable featured images for posts/pages
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) ); // Enable HTML5 markup for certain elements
}
add_action( 'after_setup_theme', 'merch_web_theme_setup' );

// Function to handle loading partials via AJAX if needed (more robust for dynamic PHP)
// For now, we'll rely on direct fetching of .php files in the partials folder.
// If you want to use WordPress functions (like the_content()) inside your partials,
// you'd need to fetch them via admin-ajax.php and a custom action.
// For simple static HTML or basic PHP, direct fetch is fine for this SPA approach.

?>







