<?php get_header(); ?>

<div class="col-md-12">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="col-md-12 post-center">
            <div class="medium-font"><?php the_title(); ?></div>
            <div class="time"><em><?php the_time('l, F jS, Y'); ?></em></div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>


        <p><?php _e('Got nothin for you! Try later.'); ?></p>

    <?php endif; ?>

</div>

<?php get_footer(); ?>
