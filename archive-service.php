<?php
/**
 * Services Archive Template
 */
get_header(); ?>

<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="section-title"><?php post_type_archive_title(); ?></h1>
            <p class="section-subtitle">Discover our comprehensive range of sourcing and logistics solutions tailored to your business needs.</p>
        </div>
    </div>

    <div class="row g-4">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="feature-card h-100">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin: -2.5rem -2.5rem 1.5rem -2.5rem; overflow: hidden; border-radius: 12px 12px 0 0;">
                                <?php the_post_thumbnail( 'service-thumb', array( 'class' => 'img-fluid' ) ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="feature-card-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        
                        <h3 class="fw-bold mb-3"><?php the_title(); ?></h3>
                        <p class="text-muted mb-3"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                        
                        <?php
                        $categories = get_the_terms( get_the_ID(), 'service_category' );
                        if ( $categories ) {
                            echo '<div class="mb-3">';
                            foreach ( $categories as $cat ) {
                                echo '<span class="badge bg-light text-dark me-2 mb-2">' . $cat->name . '</span>';
                            }
                            echo '</div>';
                        }
                        ?>
                        
                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<div class="col-12"><p class="text-center text-muted">No services found.</p></div>';
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
