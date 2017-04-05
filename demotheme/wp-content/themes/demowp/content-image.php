<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-thumbnail">
		<?php demowp_thumbnail('large'); ?>
	</div>
	<div class="entry-header">
		<?php demowp_entry_header(); ?>
		<?php
			$attachment = get_children(array('post_parent' => $post->ID) );
			$attachment_number = count($attachment);
			printf(__( 'This image post contains %1$s photo', 'demowp' ), $attachment_number);
		?>
	</div>
	<div class="entry-content">
		<?php demowp_entry_content(); ?>
		<?php demo_entry_tag(); ?>
	</div>
</article>