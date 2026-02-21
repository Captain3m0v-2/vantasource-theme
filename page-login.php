<?php
/**
 * Template Name: Account Login/Register
 * Front-end login/register using WooCommerce My Account
 */

get_header();
?>

<section class="py-5 bg-light border-bottom">
    <div class="container">
        <h1 class="h3 fw-bold mb-1">Account</h1>
        <p class="text-muted mb-0">Sign in or create your account to manage orders and posts.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <?php echo do_shortcode( '[woocommerce_my_account]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
