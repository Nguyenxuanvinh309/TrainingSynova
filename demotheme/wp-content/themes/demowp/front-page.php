<?php get_header(); ?>
<div class="content">
	<div class="main-content nnn">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/page/content', 'front-page'); ?>
		<?php endwhile ?>
		<?php else: ?>
			<?php get_template_part('content','none'); ?>
		<?php endif; ?>	
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>