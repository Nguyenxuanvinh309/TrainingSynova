<?php get_header(); ?>

<div class="content">
	<div class="main-content">
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