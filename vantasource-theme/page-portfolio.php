<?php
/**
 * Single Portfolio/Case Study Template
 */
get_header(); ?>

<header class="position-relative overflow-hidden" style="background: radial-gradient(circle at 14% 20%, rgba(99,102,241,0.32), transparent 24%), radial-gradient(circle at 85% 12%, rgba(16,185,129,0.18), transparent 24%), linear-gradient(115deg, #0b1226 0%, #101c38 60%, #0b1226 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(7,11,24,0.82) 0%, rgba(7,11,24,0.7) 55%, rgba(7,11,24,0.9) 100%);"></div>
    <div class="container position-relative py-5" style="z-index: 1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-white">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.08);">
                    <span class="badge bg-primary rounded-pill">Portfolio</span>
                    <span class="small text-white-50">Case studies and wins</span>
                </div>
                <h1 class="display-4 fw-bold mb-3" style="color:#ffffff;"><?php the_title(); ?></h1>
                <?php
                $industries = get_the_terms( get_the_ID(), 'industry' );
                if ( $industries ) {
                    echo '<div class="d-flex flex-wrap gap-2 mb-3">';
                    foreach ( $industries as $industry ) {
                        echo '<span class="badge bg-light text-dark fw-semibold">' . esc_html( $industry->name ) . '</span>';
                    }
                    echo '</div>';
                }
                ?>
                <p class="lead mb-0" style="color: rgba(255,255,255,0.9);">A snapshot of how we source, qualify, and ship products with speed and confidence.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-white-50">
                <nav aria-label="breadcrumb" class="d-inline-flex align-items-center">
                    <ol class="breadcrumb breadcrumb-nav mb-0">
                        <li class="breadcrumb-item"><a class="text-white-50" href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white-50" href="<?php echo home_url('/portfolio'); ?>">Portfolio</a></li>
                        <li class="breadcrumb-item active text-white">Current</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="py-5" style="background: #f7f9fc;">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm mb-4">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="ratio ratio-16x9">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 h-100 object-fit-cover' ) ); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-3">Project overview</h3>
                        <div class="text-muted">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 shadow-sm position-sticky" style="top: 90px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3 text-primary">Project details</h5>
                        <?php
                        $client = get_post_meta( get_the_ID(), '_client_name', true );
                        $result = get_post_meta( get_the_ID(), '_project_result', true );
                        $date   = get_post_meta( get_the_ID(), '_project_date', true );
                        if ( $client ) {
                            echo '<div class="mb-3"><small class="text-muted">Client</small><div class="fw-semibold">' . esc_html( $client ) . '</div></div>';
                        }
                        if ( $date ) {
                            echo '<div class="mb-3"><small class="text-muted">Date</small><div class="fw-semibold">' . esc_html( $date ) . '</div></div>';
                        }
                        $industries = get_the_terms( get_the_ID(), 'industry' );
                        if ( $industries ) {
                            echo '<div class="mb-3"><small class="text-muted">Industry</small><div class="d-flex flex-wrap gap-2 mt-1">';
                            foreach ( $industries as $industry ) {
                                echo '<span class="badge bg-primary-subtle text-primary fw-semibold">' . esc_html( $industry->name ) . '</span>';
                            }
                            echo '</div></div>';
                        }
                        if ( $result ) {
                            echo '<hr><h6 class="fw-bold mb-2">Key results</h6><p class="text-muted mb-0">' . wp_kses_post( $result ) . '</p>';
                        }
                        ?>
                        <hr>
                        <a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary w-100 mb-2">Start your project</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline-primary w-100">Get in touch</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body p-4">
                        <h6 class="fw-bold mb-3">Other projects</h6>
                        <?php
                        $related = new WP_Query( array(
                            'post_type'      => 'portfolio',
                            'posts_per_page' => 3,
                            'post__not_in'   => array( get_the_ID() ),
                            'orderby'        => 'rand'
                        ) );
                        if ( $related->have_posts() ) {
                            echo '<ul class="list-unstyled mb-0">';
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

        <div class="row mt-5 pt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm text-center p-5" style="background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 60%, #2563eb 100%); color: #ffffff;">
                    <h3 class="fw-bold mb-2">Ready for your next project?</h3>
                    <p class="mb-4" style="color: rgba(255,255,255,0.9);">Tell us what you need. We will share a sourcing plan within 24 hours.</p>
                    <a href="<?php echo home_url('/quote'); ?>" class="btn btn-light text-primary fw-bold px-4">Request a quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================
    EMPLOYEE PORTFOLIO CARD: QURESHI
====================================-->
<section id="employee-qureshi" class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 shadow-sm border-0 text-center employee-card">
                    <div class="position-relative pt-4">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/4bc1a37e2e9cd228dd2fe7292a549a39-1742978792042/e2c7c5a5-cb5a-42d5-bc12-a895bb10d505.jpg" class="card-img-top rounded-circle mx-auto shadow" alt="Qureshi" style="width:120px;height:120px;object-fit:cover;border:4px solid #fff;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title mb-1">Qureshi</h4>
                        <p class="text-primary mb-2">Product Sourcing Expert & Supply Chain Solutions</p>
                        <p class="text-muted small mb-3">Bangladesh | English, French, Arabic, Hindi</p>
                        <a href="<?php echo home_url('/qureshi'); ?>" class="btn btn-outline-primary btn-sm mb-2 w-100">View Full Profile</a>
                        <a href="https://www.fiverr.com/scm_jasim" target="_blank" class="btn btn-success btn-sm w-100">Hire on Fiverr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
