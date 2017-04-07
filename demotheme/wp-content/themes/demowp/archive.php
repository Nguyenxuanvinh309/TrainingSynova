<?php get_header(); ?>

<div class="content">
	<div class="main-content">
		<div class="archive-title">
		<hr>
		<?php
			if(is_tag()):
				printf(__( 'Posts tagged: %1$s', 'demotheme' ), single_tag_title('', false));
			elseif(is_category()):
				printf(__( 'Posts categorized: %1$s', 'demotheme' ), single_cat_title('', false));
			elseif(is_day()):
				printf(__( 'Daily Archives: %1$s', 'demotheme' ), get_the_time('l, F, j, Y'));
			elseif(is_month()):
				printf(__( 'Monthly Archives: %1$s', 'demotheme' ), get_the_time('F Y'));
			elseif(is_year()):
				printf(__('Yearly Archives: %1$s', 'demotheme'), get_the_time('Y'));
			endif;
		?>
		</div>
		<div class="archive-description">
			<?php 
				if(is_tag() || is_category()):
					printf(__('<h4>Description:</h4><span>%1$s</span>','demotheme'),term_description());
				endif;
			?>
			<hr>	
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