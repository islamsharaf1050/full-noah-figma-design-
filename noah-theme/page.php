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
else :
    ?>
    <div class="container entry-content">
        <h2>Nothing found</h2>
        <p><?php esc_html_e('Sorry, but nothing matched your search.', 'noah-theme'); ?></p>
    </div>
<?php
endif;
get_footer();
