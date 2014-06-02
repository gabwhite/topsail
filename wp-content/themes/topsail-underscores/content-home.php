<?php
/**
 * The template used for displaying page content in page-home.php
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
			<!-- ADD IN ABOUT SECTION -->
			
				<?php $about = new WP_Query(array(
					'post_type' => 'page', 
					'page_id' => 5
				)); ?>

				<?php if($about->have_posts()) while($about->have_posts()) :$about->the_post(); ?>
					<?php get_template_part( 'content', 'about' ); ?>
				<?php endwhile; ?>

			

			<!-- ADD IN WORK SECTION -->
			
					<?php $work = new WP_Query(array(
					'post_type' => 'page', 
					'page_id' => 10
				)); ?>

				<?php if($work->have_posts()) while($work->have_posts()) :$work->the_post(); ?>
					<?php get_template_part( 'content', 'work' ); ?>
				<?php endwhile; ?>
			

			<!-- ADD IN WORKII SECTION -->
			
					<?php $workII = new WP_Query(array(
					'post_type' => 'page', 
					'page_id' => 34
				)); ?>

				<?php if($workII->have_posts()) while($workII->have_posts()) :$workII->the_post(); ?>
					<?php get_template_part( 'content', 'workII' ); ?>
				<?php endwhile; ?>
			
			<!-- ADD IN Contact SECTION -->
					<?php $contact = new WP_Query(array(
						'post_type'=> 'page',
						'page_id'=> 12
					)); ?>
					
					<?php if($contact->have_posts()) while($contact->have_posts()) :$contact->the_post(); ?>
					<?php get_template_part( 'content', 'contact' ); ?>
				<?php endwhile; ?>
	</div> <!-- end entry content -->
	
</article><!-- #post-## -->
