<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header();
?>
	<div id="content" class="narrowcolumn" >

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			   	<h2 class="post_title" ><?php the_title(); ?><?php if ( TPO_BLOG_SHOW_COMMENTCOUNT == true ) : ?>		
               		<div class="metacomment" ><?php comments_popup_link(__('0',THEME_SLUG),__( '1',THEME_SLUG),__( '%',THEME_SLUG)); ?></div>
        <?php endif;   ?></h2>
			<div class="entry" >
                <div class="entry_meta">
                    <?php if ( TPO_BLOG_SHOW_DATE == true ) : ?>
                                <span class="datetime" datetime="<?php echo get_the_time('F j, Y') ?>" ><?php echo get_the_time('F j, Y') ?></span>
                    <?php endif; ?>

                    <?php if ( TPO_BLOG_SHOW_CATEGORIES == true ) : ?>
                        <?php if (count( get_the_category())) :   ?>
                                <span  class="category"  ><?php _e('Posted In',THEME_SLUG);?>
                                <?php echo get_the_category_list( ', ' ) ; ?>
                                </span>
                        <?php endif;   ?>
                    <?php endif;   ?>
                 </div>		
			
				<?php 
					if ( tpo_option('tpo_blog_cat_thumbnail') == true ) :
						$width = tpo_option('tpo_blog_cat_thumbnail_width');
						$height = tpo_option('tpo_blog_cat_thumbnail_height');	
						if (!$width) $width = THUMB_WIDTH;
						if (!$height) $height = THUMB_HEIGHT;
						$postimage = get_post_meta($post->ID, '_post_image', true);
							if ($postimage) : 
								$postimg = tpo_image_resize( $height, $width, $postimage); ?>
									 <div class="feature_image">
										<a class="load_blog_img" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
											<img src="<?php echo $postimg; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
										</a>
									</div>
							<?php 
							endif; 
					endif; ?>
					<?php the_content(''); ?>
					<?php if (get_option('tpo_blog_single_tags') == true ) : ?>		               
								<?php $post_tags = wp_get_post_tags($post->ID);
								if(!empty($post_tags)) { ?>
									<div class="tag" ><?php the_tags( __('Tags', THEME_SLUG) . ': ', ', ', '<br />'); ?></div>
								<?php }  ?>
							<?php endif; ?>	
                            </div>
						</div>   <!-- End Post  -->										
							
								
			
			
					<?php //comments_template(); ?> 
					
	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.',  THEME_SLUG ); ?></p>

<?php endif; ?>

		</div> <!-- End content  -->
        
<?php get_sidebar(); ?>
<div class="clearboth"></div>
<?php  get_footer(); ?>
