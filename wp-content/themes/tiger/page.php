<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */

get_header(); ?>

	<div id="content" class="narrowcolumn" >

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="post_title"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(''); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
    
	</div>

<?php get_sidebar(); ?>
<div class="clearboth"></div>
<?php  get_footer(); ?>