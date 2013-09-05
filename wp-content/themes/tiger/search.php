<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>
	
	<h2 class="pagetitle"><?php _e('Search Results' , THEME_SLUG ); ?></h2>

		<?php while (have_posts()) : the_post(); ?>
			<?php if (is_page()) continue; ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			   	<h2 class="post_title" ><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>		<?php if ( TPO_BLOG_SHOW_COMMENTCOUNT == true ) : ?>		
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
				
				<?php 
							if ( tpo_option('tpo_blog_excerpt_disable') == true ) : 
								the_content('');
							else:
								the_excerpt();
							endif;
							
						?>
                        
				</div>  <!-- Entry End -->
				<div class="readmore"><a href="<?php the_permalink() ?>" ><?php echo TPO_BLOG_READMORE_TEXT; ?></a></div>

			<?php if ( TPO_BLOG_SHOW_TAGS ) : ?>		               
				<?php $post_tags = wp_get_post_tags($post->ID);
				if(!empty($post_tags)) { ?>
					<div class="tag" ><?php the_tags( __('Tags', THEME_SLUG) . ': ', ', ', '<br />'); ?></div>
				<?php }  ?>
			<?php endif; ?>	
	  		</div> <!-- Post End -->
            

		<?php endwhile; ?>

	<div class="navigation">
			<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
				<div class="alignleft"><?php next_posts_link(__('« Older Entries', THEME_SLUG )) ?></div>
				<div class="alignright"><?php previous_posts_link(__('Newer Entries »', THEME_SLUG )) ?></div>
			<?php } ?>
			</div>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found. Try a different search?',THEME_SLUG)?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>
    
<?php get_sidebar(); ?>
<div class="clearboth"></div>
<?php  get_footer(); ?>
