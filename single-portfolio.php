<?php
/**
 * Single Portfolio/Case Study Template
 */
get_header(); ?>

<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo home_url('/portfolio'); ?>">Portfolio</a></li>
                    <li class="breadcrumb-item active"><?php the_title(); ?></li>
                </ol>
            </nav>
            
            <h1 class="section-title"><?php the_title(); ?></h1>
            
            <?php
            $industries = get_the_terms( get_the_ID(), 'industry' );
            if ( $industries ) {
                echo '<div class="mb-4">';
                foreach ( $industries as $industry ) {
                    echo '<span class="badge bg-primary me-2">' . $industry->name . '</span>';
                }
                echo '</div>';
            }
            ?>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin: 2rem 0;">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded-3' ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-lg-7">
            <div class="content-section">
                <h3 class="fw-bold mb-3">Project Overview</h3>
                <?php the_content(); ?>
            </div>
        </div>
        
        <div class="col-lg-5">
            <div class="position-sticky" style="top: 100px;">
                <div class="feature-card bg-light">
                    <h5 class="fw-bold mb-3 text-primary">Project Details</h5>
                    
                    <?php
                    // Display custom fields if available
                    $client = get_post_meta( get_the_ID(), '_client_name', true );
                    $result = get_post_meta( get_the_ID(), '_project_result', true );
                    $date = get_post_meta( get_the_ID(), '_project_date', true );
                    
                    if ( $client ) {
                        echo '<div class="mb-3"><strong>Client:</strong><br>' . esc_html( $client ) . '</div>';
                    }
                    
                    if ( $date ) {
                        echo '<div class="mb-3"><strong>Date:</strong><br>' . esc_html( $date ) . '</div>';
                    }
                    ?>
                    
                    <?php
                    $industries = get_the_terms( get_the_ID(), 'industry' );
                    if ( $industries ) {
                        echo '<div class="mb-3"><strong>Industry:</strong><br>';
                        foreach ( $industries as $industry ) {
                            echo '<span class="badge bg-primary">' . $industry->name . '</span>';
                        }
                        echo '</div>';
                    }
                    ?>
                    
                    <?php if ( $result ) : ?>
                        <hr>
                        <h6 class="fw-bold mb-3">Key Results</h6>
                        <p><?php echo wp_kses_post( $result ); ?></p>
                    <?php endif; ?>
                    
                    <hr>
                    
                    <a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary w-100 mb-2">Start Your Project</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline-primary w-100">Get in Touch</a>
                </div>
                
                <div class="feature-card mt-4">
                    <h6 class="fw-bold mb-3">Other Projects</h6>
                    <?php
                    $related = new WP_Query( array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 3,
                        'post__not_in' => array( get_the_ID() ),
                        'orderby' => 'rand'
                    ) );
                    
                    if ( $related->have_posts() ) {
                        echo '<ul class="list-unstyled">';
                        while ( $related->have_posts() ) {
                            $related->the_post();
                            echo '<li class="mb-2"><a href="' . get_permalink() . '" class="text-decoration-none">' . get_the_title() . '</a></li>';
                        }
                        echo '</ul>';
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5 pt-5 border-top">
        <div class="col-12">
            <div class="text-center">
                <h3 class="fw-bold mb-3">Ready for Your Next Project?</h3>
                <p class="text-muted mb-4">Let us help you source, verify, and deliver with confidence.</p>
                <a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary btn-lg">Request a Quote</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
