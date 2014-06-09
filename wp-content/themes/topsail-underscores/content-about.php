<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>
		<div id="about" class="about ">
                <div class="container clearfix">
                	<?php the_content(); ?>
					
					<div class="recent-post">
						<p><?php the_field("recent_post"); ?>
						
							<?php $the_query = new WP_Query( 'showposts=1' ); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							<?php endwhile;?>
						</p>
					</div>
                	
                </div>
        </div> <!-- end of about -->

