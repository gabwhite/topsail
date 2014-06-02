<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>
		<div id="work" class="work mr-d">
            <div class="contact-color">
                <div class="container clearfix">
                    <div class="left work-text">
                        <?php the_content(); ?>
                        <div id="carousel" class="flexslider carousel">
                            <ul class="slides">
                                <?php while(has_sub_field("show_images")) : ?>
                                <?php $img = get_sub_field("image"); ?>
                                <li>
                                    <a class="fancybox" href="<?php echo $img?>">
                                    <img src="<?php echo $img; ?>"></a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div> <!-- end of flexslider --></div>
                    </div> <!-- end of left -->
                
                <div class="right">
                <!-- SLIDER -->
				 <div id="slider" class="flexslider slider small">
                    <ul class="slides">
                        <?php while(has_sub_field("show_images")) : ?>
    					<?php $img = get_sub_field("image"); ?>
    					<li>
    						<img src="<?php echo $img; ?>">
    					</li>
    					<?php endwhile; ?>
    				</ul>
                </div> <!-- end of flexslider -->
                    
             </div>  --><!-- end of right -->
            </div> <!-- end container -->
        </div> <!-- end of trailer park work -->
