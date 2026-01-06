<?php
/**
 * Vantasource Theme Functions
 */

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Theme Setup
 */
function vantasource_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vantasource' ),
        'footer' => __( 'Footer Menu', 'vantasource' ),
    ) );
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('service-thumb', 400, 300, true);
    add_image_size('portfolio-thumb', 600, 400, true);
}
add_action('after_setup_theme', 'vantasource_setup');

/**
 * Enqueue Scripts and Styles
 */
function vantasource_enqueue_scripts() {
    // Google Font: Inter
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    
    // Bootstrap 5 CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');
    
    // AOS (Animate On Scroll)
    wp_enqueue_style('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '2.3.4', true);
    
    // Theme's main style.css
    wp_enqueue_style('vantasource-style', get_stylesheet_uri(), array('bootstrap'), '1.3');
    
    // Bootstrap 5 JavaScript Bundle (WITH Popper.js)
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    
    // Custom JavaScript
    wp_enqueue_script('vantasource-custom', get_template_directory_uri() . '/custom.js', array('jquery', 'bootstrap-bundle', 'aos-js'), '1.0', true);
    
    // Inline script for AOS initialization
    wp_add_inline_script('aos-js', 'AOS.init({duration: 800, once: true});');
}
add_action('wp_enqueue_scripts', 'vantasource_enqueue_scripts');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        return;
    }
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Custom Post Types for Services & Portfolio
 */
function vantasource_register_post_types() {
    // Services Post Type
    register_post_type( 'service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => 'services',
        'rewrite' => array( 'slug' => 'service' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-briefcase',
    ) );
    
    // Portfolio Post Type
    register_post_type( 'portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Project',
        ),
        'public' => true,
        'has_archive' => 'portfolio',
        'rewrite' => array( 'slug' => 'project' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-images-alt2',
    ) );
    
    // Testimonials Post Type
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public' => false,
        'show_ui' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => 'dashicons-testimonial',
    ) );
}
add_action( 'init', 'vantasource_register_post_types' );

/**
 * Register Taxonomies
 */
function vantasource_register_taxonomies() {
    register_taxonomy( 'service_category', 'service', array(
        'labels' => array(
            'name' => 'Service Categories',
            'singular_name' => 'Service Category',
        ),
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'service-category' ),
    ) );
    
    register_taxonomy( 'industry', 'portfolio', array(
        'labels' => array(
            'name' => 'Industries',
            'singular_name' => 'Industry',
        ),
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'industry' ),
    ) );
}
add_action( 'init', 'vantasource_register_taxonomies' );

/**
 * Custom Excerpt Length
 */
function vantasource_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'vantasource_excerpt_length' );

/**
 * Custom Excerpt More
 */
function vantasource_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'vantasource_excerpt_more' );

/**
 * Localize Script Data for AJAX
 */
function vantasource_localize_script() {
    wp_localize_script( 'vantasource-custom', 'vantasource_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'vantasource_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'vantasource_localize_script' );

/**
 * Handle RFQ Form Submission
 */
function vantasource_handle_rfq_submission() {
    check_ajax_referer( 'vantasource_nonce', 'nonce' );
    
    if ( ! isset( $_POST['product_name'] ) ) {
        wp_send_json_error( 'Missing required fields' );
    }
    
    $product_name = sanitize_text_field( $_POST['product_name'] );
    $quantity = intval( $_POST['quantity'] );
    $email = sanitize_email( $_POST['email'] );
    $message = sanitize_textarea_field( $_POST['message'] );
    
    $to = get_option( 'admin_email' );
    $subject = 'New RFQ: ' . $product_name;
    $body = "Product: $product_name\nQuantity: $quantity\nEmail: $email\n\nMessage:\n$message";
    
    if ( wp_mail( $to, $subject, $body ) ) {
        wp_send_json_success( 'RFQ submitted successfully' );
    } else {
        wp_send_json_error( 'Failed to submit RFQ' );
    }
}
add_action( 'wp_ajax_vantasource_rfq', 'vantasource_handle_rfq_submission' );
add_action( 'wp_ajax_nopriv_vantasource_rfq', 'vantasource_handle_rfq_submission' );

/**
 * Handle Contact Form Submission
 */
function vantasource_handle_contact_form() {
    check_ajax_referer( 'vantasource_nonce', 'nonce' );
    
    if ( ! isset( $_POST['name'] ) || ! isset( $_POST['email'] ) ) {
        wp_send_json_error( 'Missing required fields' );
    }
    
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $phone = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $company = sanitize_text_field( $_POST['company'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );
    
    $to = get_option( 'admin_email' );
    $email_subject = 'New Contact Form Submission: ' . $subject;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\n\nMessage:\n$message";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: ' . $email );
    
    if ( wp_mail( $to, $email_subject, $body, $headers ) ) {
        // Send confirmation email to user
        $user_subject = 'We received your message - VANTASOURCE';
        $user_message = "Dear $name,\n\nThank you for contacting VANTASOURCE. We have received your message and will get back to you within 24 hours.\n\nBest regards,\nThe VANTASOURCE Team";
        wp_mail( $email, $user_subject, $user_message );
        
        wp_send_json_success( 'Message sent successfully' );
    } else {
        wp_send_json_error( 'Failed to send message' );
    }
}
add_action( 'wp_ajax_vantasource_contact_form', 'vantasource_handle_contact_form' );
add_action( 'wp_ajax_nopriv_vantasource_contact_form', 'vantasource_handle_contact_form' );