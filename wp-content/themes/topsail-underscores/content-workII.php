<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>
		<div id="work" class="work mr-d">

               <div class="container clearfix">
                    <div class="left work-text">
                        <h2><?php echo get_the_title(); ?></h2>
                        <h3><?php echo get_field('show_dates') ?></h3>
                        <?php the_content(); ?>
                    </div> <!-- end of right -->
                </div>
        </div> <!-- end of Mr d work -->
        <div class="full-width-thumb">
            <ul class="trailer-thumbs">
                <?php while(has_sub_field("show_images")) : ?>
                <?php $img = get_sub_field("image"); ?>
                <li>
                    <a class="fancybox" href="<?php echo $img?>">
                    <img src="<?php echo $img; ?>"></a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div> <!-- end full-width-thumb -->

