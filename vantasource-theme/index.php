<?php get_header(); ?>

<div class="container py-5 mt-5">
    <div class="row">
        <div class="col-12">
            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_title('<h1>', '</h1>');
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>