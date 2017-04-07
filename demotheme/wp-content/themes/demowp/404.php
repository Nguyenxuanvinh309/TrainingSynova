<?php get_header(); ?>

<div class="content">
	<div class="main-content">
	<?php
		_e('<h2>404 NOT FOUND</h2>', 'demotheme');
		_e('<p>The article you were looking for was not found, but maybe try looking again!</p>','demotheme');
		get_search_form();
		_e('<h3>Content category: </h3>', 'demotheme');

		echo '<div class="404-cat-list">';
			wp_list_categories(array('title_li' => '') );
		echo '</div>';
		_e('Tag Cloud','demotheme');
		wp_tag_cloud();
	?>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>