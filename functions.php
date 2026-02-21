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
    
    // Theme's main style.css (bump version to bust caches)
    wp_enqueue_style('vantasource-style', get_stylesheet_uri(), array('bootstrap'), '1.4');
    
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
    
    $name         = sanitize_text_field( $_POST['name'] );
    $email        = sanitize_email( $_POST['email'] );
    $phone        = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $company      = sanitize_text_field( $_POST['company'] );
    $subject      = sanitize_text_field( $_POST['subject'] );
    $message      = sanitize_textarea_field( $_POST['message'] );
    $product_link = isset( $_POST['product_link'] ) ? esc_url_raw( $_POST['product_link'] ) : '';

    $attachment_paths = array();
    $attachment_urls  = array();

    if ( ! empty( $_FILES['reference_image']['name'] ) && ! empty( $_FILES['reference_image']['tmp_name'] ) ) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        $upload = wp_handle_upload( $_FILES['reference_image'], array( 'test_form' => false ) );
        if ( isset( $upload['file'], $upload['url'] ) && empty( $upload['error'] ) ) {
            $attachment_paths[] = $upload['file'];
            $attachment_urls[]  = $upload['url'];
        }
    }
    
    $to            = get_option( 'admin_email' );
    $email_subject = 'New Contact Form Submission: ' . $subject;
    
    $body_parts = array(
        "Name: $name",
        "Email: $email",
        "Phone: $phone",
        "Company: $company",
    );

    if ( $product_link ) {
        $body_parts[] = "Product Link: $product_link";
    }

    if ( ! empty( $attachment_urls ) ) {
        $body_parts[] = 'Reference Image: ' . implode( ', ', $attachment_urls );
    }

    $body_parts[] = '';
    $body_parts[] = "Message:\n$message";

    $body    = implode( "\n", $body_parts );
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: ' . $email );
    
    if ( wp_mail( $to, $email_subject, $body, $headers, $attachment_paths ) ) {
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

/**
 * Ensure WooCommerce account registration is enabled and site allows registration.
 */
function vantasource_enable_wc_registration() {
    if ( class_exists( 'WooCommerce' ) ) {
        if ( 'yes' !== get_option( 'woocommerce_enable_myaccount_registration' ) ) {
            update_option( 'woocommerce_enable_myaccount_registration', 'yes' );
        }
        if ( ! get_option( 'users_can_register' ) ) {
            update_option( 'users_can_register', 1 );
        }
    }
}
add_action( 'init', 'vantasource_enable_wc_registration' );

/**
 * Ensure WooCommerce product reviews/ratings are enabled.
 */
function vantasource_enable_product_reviews() {
    if ( class_exists( 'WooCommerce' ) ) {
        update_option( 'woocommerce_enable_reviews', 'yes' );
        update_option( 'woocommerce_enable_review_rating', 'yes' );
        update_option( 'woocommerce_review_rating_verification_required', 'no' );
    }
}
add_action( 'admin_init', 'vantasource_enable_product_reviews' );

/**
 * Seed a few demo products with ratings/reviews (runs once in admin).
 */
function vantasource_seed_demo_products() {
    if ( ! is_admin() ) {
        return;
    }

    if ( get_option( 'vantasource_seed_products_done' ) ) {
        return;
    }

    if ( ! class_exists( 'WC_Product_Simple' ) ) {
        return;
    }

    // Create some base categories if they do not exist.
    $cats = array(
        'Electronics' => 'electronics',
        'Apparel' => 'apparel',
        'Home & Lifestyle' => 'home-lifestyle',
    );

    $cat_ids = array();
    foreach ( $cats as $cat_name => $cat_slug ) {
        $existing = term_exists( $cat_name, 'product_cat' );
        if ( $existing && ! is_wp_error( $existing ) ) {
            $cat_ids[ $cat_name ] = (int) $existing['term_id'];
            continue;
        }
        $created = wp_insert_term( $cat_name, 'product_cat', array( 'slug' => $cat_slug ) );
        if ( ! is_wp_error( $created ) && isset( $created['term_id'] ) ) {
            $cat_ids[ $cat_name ] = (int) $created['term_id'];
        }
    }

    $products = array(
        array(
            'name' => 'Wireless Factory-Tested Earbuds',
            'price' => '49',
            'sku' => 'VS-EB-001',
            'category' => 'Electronics',
            'short' => 'HD audio, QC documentation included, ready for private label.',
            'desc' => 'Factory-vetted TWS earbuds with active noise reduction, CE/FCC ready, and customizable packaging. Includes inline QA snapshots and batch test reports.',
        ),
        array(
            'name' => 'Performance Tech Hoodie',
            'price' => '39',
            'sku' => 'VS-HD-002',
            'category' => 'Apparel',
            'short' => 'Moisture-wicking fabric, size run S-XXL, QC checklist attached.',
            'desc' => 'Lightweight hoodie with reinforced seams, bulk-ready MOQ 200. Includes fabric GSM specs, wash test results, and packaging options.',
        ),
        array(
            'name' => 'Modern Minimal Desk Lamp',
            'price' => '59',
            'sku' => 'VS-DL-003',
            'category' => 'Home & Lifestyle',
            'short' => 'Dimmable LED, matte finish, packaged drop-test certified.',
            'desc' => 'Adjustable LED desk lamp with 3 color temperatures, UL-ready components, and foam-insert packaging tested for last-mile durability.',
        ),
    );

    $created_ids = array();

    foreach ( $products as $data ) {
        $product = new WC_Product_Simple();
        $product->set_name( $data['name'] );
        $product->set_status( 'publish' );
        $product->set_catalog_visibility( 'visible' );
        $product->set_regular_price( $data['price'] );
        $product->set_sku( $data['sku'] );
        $product->set_manage_stock( false );
        $product->set_sold_individually( false );
        $product->set_reviews_allowed( true );
        $product->set_short_description( $data['short'] );
        $product->set_description( $data['desc'] );

        if ( isset( $cat_ids[ $data['category'] ] ) ) {
            $product->set_category_ids( array( $cat_ids[ $data['category'] ] ) );
        }

        $product_id = $product->save();

        if ( $product_id ) {
            $created_ids[] = $product_id;
        }
    }

    // Add a couple of sample reviews/ratings to the first product so stars render.
    if ( ! empty( $created_ids ) ) {
        $target_id = $created_ids[0];

        $reviews = array(
            array(
                'author' => 'Amelia P.',
                'email' => 'demo-amelia@example.com',
                'content' => 'Clarity on QC steps was great. Samples matched production.',
                'rating' => 5,
            ),
            array(
                'author' => 'Rahul S.',
                'email' => 'demo-rahul@example.com',
                'content' => 'Smooth communication with the factory and on-time dispatch.',
                'rating' => 4,
            ),
        );

        foreach ( $reviews as $review ) {
            $comment_id = wp_insert_comment( array(
                'comment_post_ID' => $target_id,
                'comment_author' => $review['author'],
                'comment_author_email' => $review['email'],
                'comment_content' => $review['content'],
                'comment_type' => 'review',
                'comment_approved' => 1,
            ) );

            if ( $comment_id && ! is_wp_error( $comment_id ) ) {
                add_comment_meta( $comment_id, 'rating', (int) $review['rating'], true );
            }
        }

        wc_delete_product_transients( $target_id );
    }

    update_option( 'vantasource_seed_products_done', 1 );
}
add_action( 'admin_init', 'vantasource_seed_demo_products' );