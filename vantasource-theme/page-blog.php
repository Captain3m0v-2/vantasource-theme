<?php
/**
 * Template Name: Blog
 * Blog index styled similar to TrickBD
 */

get_header();

$paged = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

$featured = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 2,
    'ignore_sticky_posts' => false,
) );

$featured_ids = wp_list_pluck( $featured->posts, 'ID' );

$main_query = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 8,
    'paged'               => $paged,
    'post__not_in'        => $featured_ids,
    'ignore_sticky_posts' => true,
) );
?>

<section class="bg-light border-bottom py-4">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 justify-content-between">
            <div>
                <h1 class="h3 mb-1 fw-bold">Vantasource Blog</h1>
                <p class="text-muted mb-0">Latest posts, tricks, and sourcing stories.</p>
            </div>
            <form class="w-100 w-md-50" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-group">
                    <input type="search" class="form-control" name="s" placeholder="Search posts..." aria-label="Search posts" value="<?php echo esc_attr( get_search_query() ); ?>">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <?php if ( $featured->have_posts() ) : ?>
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="h5 fw-bold mb-0">Featured posts</h2>
                        </div>
                        <div class="row g-3">
                            <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>" class="ratio ratio-16x9">
                                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'card-img-top object-fit-cover' ) ); ?>
                                            </a>
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center text-muted small mb-2 gap-2">
                                                <span><?php echo esc_html( get_the_date() ); ?></span>
                                                <span class="text-muted">•</span>
                                                <span><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
                                            </div>
                                            <h3 class="h6 fw-bold"><a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="d-flex align-items-center mb-3">
                    <h2 class="h5 fw-bold mb-0">Recent posts</h2>
                </div>

                <?php if ( $main_query->have_posts() ) : ?>
                    <?php while ( $main_query->have_posts() ) : $main_query->the_post(); ?>
                        <article class="card border-0 border-bottom rounded-0 mb-3 pb-3">
                            <div class="row g-3">
                                <div class="col-4 col-md-3">
                                    <a href="<?php the_permalink(); ?>" class="d-block ratio ratio-4x3 bg-light rounded overflow-hidden">
                                        <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'medium', array( 'class' => 'w-100 h-100 object-fit-cover' ) );
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="d-flex align-items-center gap-2 small text-muted mb-1">
                                        <?php
                                        $cats = get_the_category();
                                        if ( $cats ) {
                                            echo '<span class="badge bg-light text-dark border">' . esc_html( $cats[0]->name ) . '</span>';
                                        }
                                        ?>
                                        <span><?php echo esc_html( get_the_date() ); ?></span>
                                        <span>•</span>
                                        <span><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
                                    </div>
                                    <h3 class="h6 fw-bold mb-1"><a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="text-muted small mb-2"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '...' ) ); ?></p>
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <span><i class="bi bi-person"></i> <?php the_author(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="alert alert-light border">No posts found.</div>
                <?php endif; ?>

                <?php
                $pagination = paginate_links( array(
                    'total'   => $main_query->max_num_pages,
                    'current' => $paged,
                    'type'    => 'array',
                    'prev_text' => '<i class="bi bi-arrow-left"></i>',
                    'next_text' => '<i class="bi bi-arrow-right"></i>',
                ) );
                ?>
                <?php if ( $pagination ) : ?>
                    <nav class="mt-4" aria-label="Pagination">
                        <ul class="pagination justify-content-center gap-2">
                            <?php foreach ( $pagination as $page_link ) : ?>
                                <li class="page-item <?php echo strpos( $page_link, 'current' ) !== false ? 'active' : ''; ?>">
                                    <?php echo str_replace( 'page-numbers', 'page-link', $page_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>

            <aside class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled mb-0">
                            <?php
                            wp_list_categories( array(
                                'title_li' => '',
                                'show_count' => true,
                                'hide_empty' => false,
                            ) );
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Tags</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <?php wp_tag_cloud( array( 'smallest' => 10, 'largest' => 12, 'unit' => 'px' ) ); ?>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Follow</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-outline-secondary btn-sm" href="#">Facebook</a>
                            <a class="btn btn-outline-secondary btn-sm" href="#">Twitter</a>
                            <a class="btn btn-outline-secondary btn-sm" href="#">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
wp_reset_postdata();
get_footer();
