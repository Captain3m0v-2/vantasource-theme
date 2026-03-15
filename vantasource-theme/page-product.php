<?php
/**
 * Template Name: Product Catalog
 * The Template for displaying a product catalog page (separate from the default shop).
 *
 * @package Vantasource Theme
 */

defined('ABSPATH') || exit;

global $wp_query;

get_header('shop');

// Build a dedicated product query for this page.
$paged = max(1, get_query_var('paged'), get_query_var('page'));
$products_query = new WP_Query([
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'paged'          => $paged,
    'posts_per_page' => get_option('posts_per_page'),
]);

// Temporarily swap the global query so WooCommerce helper functions (ordering/result count) work.
$original_wp_query = $wp_query;
$wp_query = $products_query;

$product_count = isset($products_query->found_posts) ? (int) $products_query->found_posts : 0;
$shop_title    = get_the_title();
?>

<header class="position-relative overflow-hidden" style="background: radial-gradient(circle at 12% 18%, rgba(59,130,246,0.28), transparent 26%), radial-gradient(circle at 88% 12%, rgba(16,185,129,0.18), transparent 24%), linear-gradient(115deg, #0a1226 0%, #0f1f3d 60%, #0a1226 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(7,11,24,0.78) 0%, rgba(7,11,24,0.65) 60%, rgba(7,11,24,0.85) 100%);"></div>
    <div class="container py-5 position-relative" style="z-index: 1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-white">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.1);">
                    <span class="badge bg-primary rounded-pill">Products</span>
                    <span class="small text-white-50">Curated manufacturing-ready catalog</span>
                </div>
                <h1 class="display-4 fw-bold mb-3" style="color: #ffffff;"><?php echo esc_html($shop_title); ?></h1>
                <p class="lead mb-0" style="color: rgba(255,255,255,0.9);">Factory-vetted SKUs with transparent pricing, quality checkpoints, and logistics support.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-white-50">
                <div class="d-inline-flex flex-column align-items-lg-end align-items-start gap-1 px-3 py-2 rounded-3" style="background: rgba(255,255,255,0.06);">
                    <span class="small text-uppercase fw-semibold">Available products</span>
                    <span class="h3 fw-bold text-white mb-0"><?php echo esc_html($product_count); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<?php do_action('woocommerce_before_main_content'); ?>

<section class="py-5" style="background: #f7f9fc;">
    <div class="container">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div class="text-muted small">Browse vetted SKUs ready for sampling and scale.</div>
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <?php woocommerce_result_count(); ?>
                    <?php woocommerce_catalog_ordering(); ?>
                </div>
            </div>
        </div>

        <?php if ($products_query->have_posts()) : ?>
            <?php woocommerce_product_loop_start(); ?>

            <?php while ($products_query->have_posts()) : ?>
                <?php $products_query->the_post(); ?>
                <?php do_action('woocommerce_shop_loop'); ?>
                <?php wc_get_template_part('content', 'product'); ?>
            <?php endwhile; ?>

            <?php woocommerce_product_loop_end(); ?>

            <div class="mt-4">
                <?php do_action('woocommerce_after_shop_loop'); ?>
            </div>
        <?php else : ?>
            <div class="card border-0 shadow-sm">
                <div class="card-body py-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7">
                            <p class="text-primary fw-semibold text-uppercase small mb-2">Store update</p>
                            <h3 class="fw-bold mb-3">Great things are on the horizon.</h3>
                            <p class="text-muted mb-4">We are curating our manufacturing-ready catalog. Tell us what you are looking for and we will source it for you.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a class="btn btn-primary rounded-pill" href="<?php echo esc_url( home_url('/quote/') ); ?>">Request a quote</a>
                                <a class="btn btn-outline-secondary rounded-pill" href="<?php echo esc_url( home_url('/contact/') ); ?>">Talk to our team</a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-4 bg-light rounded-4 h-100">
                                <p class="fw-semibold mb-3">Popular categories we can source:</p>
                                <ul class="list-unstyled text-muted mb-0">
                                    <li class="mb-2"><i class="bi bi-box-seam text-primary me-2"></i>Consumer electronics</li>
                                    <li class="mb-2"><i class="bi bi-bag-check text-primary me-2"></i>Apparel & accessories</li>
                                    <li class="mb-2"><i class="bi bi-house-door text-primary me-2"></i>Home & lifestyle</li>
                                    <li class="mb-2"><i class="bi bi-truck text-primary me-2"></i>Logistics & packaging</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php do_action('woocommerce_after_main_content'); ?>

<?php do_action('woocommerce_sidebar'); ?>

<?php get_footer('shop'); ?>

<?php
// Restore original query state.
$wp_query = $original_wp_query;
wp_reset_postdata();
?>
