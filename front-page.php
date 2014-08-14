<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-12 home-center">
    <p>
        <span class="fancy-font big-font coral">Johanna Cohoon</span><br>
        works at the
        <span class="big-font strong-font">Center for Open Science, <br></span>
        <span class="medium-font strong-font">studied Cognitive Science<br></span>
        <span class="big-font strong-font"> at the University of Virginia, <br></span>
        and is teaching herself about <br>
        <span class="medium-font strong-font">manual software testing</span> and
        <span class="medium-font strong-font">UI. <br></span>
        She has previously <br>interned at
        <span class="big-font strong-font" style="letter-spacing:4px;">NPR </span>
        and will,<br> one day, become
        <span class="fancy-font" id="internet-famous">internet famous.</span>
    </p>
	</div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, seems like you might have gotten lost. Try hitting the back button.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>