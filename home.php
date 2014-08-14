<?php get_header(); ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 post-center">
            <div class="medium-font"><?php the_title(); ?></div>
            <div class="time"><em><?php the_time('l, F jS, Y'); ?></em></div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>

        <p><?php _e('Sorry, seems like nothing is here.'); ?></p>

    <?php endif; ?>

<?php get_footer(); ?>