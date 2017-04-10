<?php
/**----------Content of post, page and Paging----------**/
if(is_single()){
	the_content();

	/*Paging in single*/
	$link_pages = array(
		'before' => __( '<p>Page: ', 'demotheme' ),
		'after' => __( '</p', 'demotheme' ),
		'nextpagelink' => __( 'Next Page', 'demotheme' ),
		'previouspagelink' => __( 'Previous Page', 'demotheme' )
		);
	wp_link_pages( $link_pages );
}else{
	the_excerpt();
}
?>