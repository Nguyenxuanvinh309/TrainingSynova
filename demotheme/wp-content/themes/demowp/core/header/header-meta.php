<?php 
/**----------Meta of content(author, date-published, category, comment number)----------**/
	if(!is_page()):{
?>

		<div class="entry-meta">
			<?php
				/**author, date-published, category, comment number**/
				printf(__('<span class="autho">Posted by %1$s</span>', 'demotheme'), get_the_author());
				printf(__('<span class="date-published"> at %1$s</span>', 'demotheme'), get_the_date());
				printf(__('<span class="category"> in %1$s </span>', 'demotheme'), get_the_category_list( ',' ));

				/**Content Number**/
				if(comments_open()):
					echo '<span class="meta-reply">';
						comments_popup_link(
							__( 'Leave a comment', 'demotheme' ),
							__( 'One comment', 'demotheme' ),
							__( '% comment', 'demotheme' ),
							__( 'Read all comment', 'demotheme' )
						);
					echo '</span>';
				endif;
			?>
		</div>
<?php
	}
	endif;
?>