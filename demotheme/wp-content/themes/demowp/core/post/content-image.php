<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-thumbnail">
		<?php demotheme_thumbnail('large'); ?>
	</div>
	<div class="entry-header">
		<?php get_template_part('core/header/header','entry' ); ?>
		<?php
			$attachment = get_children(array('post_parent' => $post->ID) );
			$attachment_number = count($attachment);
			printf(__( 'This image post contains %1$s photo', 'demotheme' ), $attachment_number);
		?>
	</div>
	<div class="entry-content">
		<?php get_template_part( 'core/content/content', 'common-post' ); ?>
		<?php get_template_part( 'core/post/content', 'tag' ); ?>
	</div>
</article>