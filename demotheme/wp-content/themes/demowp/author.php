<?php get_header(); ?>

<div class="content">
	<div class="main-content">
		<div class="author-box">
			<p>Author Information</p>
			<?php get_template_part( 'author-bio' ); ?>
		</div>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>