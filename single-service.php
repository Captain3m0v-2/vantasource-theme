<?php
/**
 * Single Service Template
 */
get_header(); ?>

<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                    <li class="breadcrumb-item active"><?php the_title(); ?></li>
                </ol>
            </nav>
            
            <h1 class="section-title"><?php the_title(); ?></h1>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin: 2rem 0;">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-3' ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-lg-8">
            <div class="content-section">
                <?php the_content(); ?>
            </div>
            
            <div class="mt-5 pt-5 border-top">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-card-icon mx-auto">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <h5 class="fw-bold">Verified Results</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-card-icon mx-auto">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h5 class="fw-bold">Fast Turnaround</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-card-icon mx-auto">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h5 class="fw-bold">Expert Support</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 pt-5 text-center border-top">
                <h3 class="fw-bold mb-3">Ready to Get Started?</h3>
                <a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary btn-lg">Request a Quote</a>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="position-sticky" style="top: 100px;">
                <div class="feature-card bg-light">
                    <h5 class="fw-bold mb-3">Service Details</h5>
                    
                    <?php
                    $categories = get_the_terms( get_the_ID(), 'service_category' );
                    if ( $categories ) {
                        echo '<div class="mb-3"><strong>Category:</strong><br>';
                        foreach ( $categories as $cat ) {
                            echo '<span class="badge bg-primary me-2">' . $cat->name . '</span>';
                        }
                        echo '</div>';
                    }
                    ?>
                    
                    <hr>
                    
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled space-y-2">
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-decoration-none">Back to Services</a></li>
                        <li><a href="<?php echo home_url('/portfolio'); ?>" class="text-decoration-none">See Our Portfolio</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-decoration-none">Contact Us</a></li>
                        <li><a href="<?php echo home_url('/quote'); ?>" class="text-decoration-none">Request a Quote</a></li>
                    </ul>
                    
                    <hr>
                    
                    <a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary w-100">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
