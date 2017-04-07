<?php
	/*Template Name: Full-width*/
?>

<?php get_header(); ?>
<div class="content" style="background: orange;">
	<div class="main-content" class="full-width">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php get_template_part('core/page/content', 'page'); ?>
		<?php endwhile ?>
		<?php else: ?>
			<?php get_template_part('core/post/content','non'); ?>
		<?php endif; ?>	
	</div>
	<div class="side-bar">
	</div>
</div>
<?php get_footer(); ?>