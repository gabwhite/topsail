<?php
/**
 * The template used for displaying page content in page-contact.php
 *
 * @package _s
 */
?>
<div id="contact" class="contact clearfix">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="contact-color">
		<div class="entry-content">
            <div class="container clearfix">
                <div class="right">
                	<h2><?php echo get_the_title(); ?></h2>
					<p><?php the_field('phone_number'); ?></p>
					<p><?php the_field('email'); ?></p>
                </div> <!-- end of right -->
                <div class="left">
                    <?php the_content(); ?>
                </div> <!-- end left -->
            </div> <!-- end the container -->		
        </div> <!-- .entry-content -->
    </div> <!-- end of contact color -->
		
		
	</article><!-- #post-## -->
</div> <!-- end #contact -->