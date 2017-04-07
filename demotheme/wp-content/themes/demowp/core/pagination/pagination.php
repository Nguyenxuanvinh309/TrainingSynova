<?php 
/**----------Pagination----------**/
if($GLOBALS['wp_query'] -> max_num_pages < 2){
	return '';
}else{
?>
	<nav class="pagination" role="navigation">
		<?php if(next_posts_link()) : ?>
			<div class="prev">
				<?php next_posts_link(__('Older Posts', 'demotheme') ); ?>
			</div>
		<?php endif; ?>

		<?php if(previous_posts_link()) : ?>
			<div class="next"> 
					<?php previous_posts_link(__('Newest Posts', 'demotheme') ); ?>
			</div>
		?>
		<?php endif; ?>
	</nav>
<?php
}
?>