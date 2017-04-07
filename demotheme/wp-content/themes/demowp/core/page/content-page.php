<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-thumbnail">
		<?php demotheme_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-header">
		<?php get_template_part('core/header/header','entry' ); ?>
		<?php get_template_part('core/header/header','meta' ); ?>
	</div>
	<div class="entry-content">
		<?php get_template_part( 'core/content/content', 'common-page' ); ?>
		<?php get_template_part( 'core/post/content', 'tag' ); ?>
	</div>
</article>