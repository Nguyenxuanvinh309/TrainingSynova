<?php 
/**----------Tag in post----------**/
if(is_single()){
	if(has_tag()):
		echo '<div class="entry_tag"';
		printf(__( 'Tagged in %1$s', 'demotheme' ), get_the_tag_list(' ', ','));
		echo '</div>';
	endif;
}
?>