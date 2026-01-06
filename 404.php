<?php
/**
 * 404 Error Page Template
 */
get_header(); ?>

<section class="py-5" style="min-height: 600px; display: flex; align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 style="font-size: 6rem; font-weight: 800; color: #667eea; margin-bottom: 1rem;">404</h1>
                <h2 class="section-title mb-3">Page Not Found</h2>
                <p class="text-muted mb-5">
                    Sorry, the page you're looking for doesn't exist or has been moved. Let us help you find what you need.
                </p>
                
                <div class="row g-3 justify-content-center mb-5">
                    <div class="col-auto">
                        <a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg">
                            <i class="bi bi-house me-2"></i>Back to Home
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo home_url('/quote'); ?>" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-file-earmark-text me-2"></i>Get a Quote
                        </a>
                    </div>
                </div>
                
                <hr>
                
                <div class="mt-5">
                    <h4 class="fw-bold mb-3">Popular Pages</h4>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="<?php echo home_url('/about'); ?>" class="text-decoration-none text-primary">
                                <i class="bi bi-info-circle me-2"></i>About Us
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php echo home_url('/services'); ?>" class="text-decoration-none text-primary">
                                <i class="bi bi-briefcase me-2"></i>Services
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php echo home_url('/portfolio'); ?>" class="text-decoration-none text-primary">
                                <i class="bi bi-images me-2"></i>Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
