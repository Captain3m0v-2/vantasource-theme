<?php
/**
 * Portfolio Archive Template
 */
get_header(); ?>

<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="section-title">Our Portfolio</h1>
            <p class="section-subtitle">Explore our successful projects and case studies showcasing our expertise in global sourcing and logistics.</p>
        </div>
    </div>

    <div class="row g-4">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="portfolio-item h-100">
                        <div class="portfolio-image">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'portfolio-thumb', array( 'class' => 'img-fluid' ) );
                            } else {
                                echo '<img src="https://via.placeholder.com/600x400?text=Portfolio" alt="Portfolio" class="img-fluid">';
                            } ?>
                            <div class="portfolio-overlay">
                                <a href="<?php the_permalink(); ?>" class="btn btn-light btn-sm">
                                    <i class="bi bi-arrow-right me-2"></i>View Project
                                </a>
                            </div>
                        </div>
                        
                        <div class="portfolio-content">
                            <?php
                            $industries = get_the_terms( get_the_ID(), 'industry' );
                            if ( $industries ) {
                                foreach ( $industries as $industry ) {
                                    echo '<span class="portfolio-category">' . $industry->name . '</span>';
                                }
                            }
                            ?>
                            
                            <h4 class="fw-bold mt-2 mb-2"><?php the_title(); ?></h4>
                            <p class="text-muted small"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<div class="col-12"><p class="text-center text-muted">No portfolio items found.</p></div>';
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
