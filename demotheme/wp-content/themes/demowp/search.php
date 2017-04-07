<?php get_header(); ?>

<div class="content">
	<div class="main-content">
		<div class="search-info">
		<?php
			$search_query = new WP_Query('s='.$s.'&showpost=-1');
			$search_keyword = wp_specialchars( $s, 1 );
			$search_count = $search_query->post_count;
			printf(__( 'Result Found: %1$s', 'demotheme' ), $search_count);
		?>	
		</div>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php get_template_part('core/post/content', get_post_format()); ?>
		<?php endwhile ?>
		<?php get_template_part( 'core/pagination/pagination'); ?>
		<?php else: ?>
			<?php get_template_part('core/post/content','non'); ?>
		<?php endif; ?>	
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>