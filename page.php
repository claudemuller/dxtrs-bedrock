<?php

/**
 * Page page of Bedrock
 */

get_header();

?>

<div class="content">
    <div class="row">
        <div class="large-12 columns">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer();

