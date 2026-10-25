<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-header">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="container entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
endif;
get_footer();
