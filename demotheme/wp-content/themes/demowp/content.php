<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<div class="entry-thumbnail">
		<?php demowp_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-header">
		<?php demowp_entry_header(); ?>
		<?php demowp_entry_meta(); ?>
	</div>
	<div class="entry-content">
		<?php demowp_entry_content(); ?>
		<?php demo_entry_tag(); ?>
	</div>
</article>