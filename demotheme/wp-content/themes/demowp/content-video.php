<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-header">
		<?php demowp_entry_header(); ?>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php demo_entry_tag(); ?>
	</div>
</article>