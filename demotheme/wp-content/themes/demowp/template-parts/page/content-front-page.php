<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-thumbnail">
		<?php demowp_thumbnail('large'); ?>
	</div>
	<div class="entry-header">
		<?php demowp_entry_header(); ?>
	</div>
	<div class="entry-content">
		<?php demowp_entry_content(); ?>
	</div>
</article>