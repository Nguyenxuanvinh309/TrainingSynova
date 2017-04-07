<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-header">
		<?php get_template_part('core/header/header','entry' ); ?>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php get_template_part( 'core/post/content', 'tag' ); ?>
	</div>
</article>