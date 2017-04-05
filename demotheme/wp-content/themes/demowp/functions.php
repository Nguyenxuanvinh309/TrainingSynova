<?php
/**
@Set Value
	@THEME_URL: get url theme folder
	@CORE: get url folder /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );

/** Set up content width **/
if( !isset($content_width) ){
	$content_width = 620;
}

/** Function of Theme **/
if( !function_exists('demo_theme_setup') ){
	function demo_theme_setup(){
		/** Set up textdomain **/
		$language_folder = THEME_URL . './languages';
		load_theme_textdomain( 'demowp', $language_folder );

		/** Auto add link RSS in <head> **/
		add_theme_support( 'automatic_feed_links' );

		/** Add Post Thumbnail **/
		add_theme_support( 'post-thumbnails' );

		/** Post Format **/
		add_theme_support( 'post-formats', array( 
			'image', 
			'video', 
			'gallery',
			'quote',
			'link' 
		) );

		/** Theme title-tag **/
		add_theme_support( 'title-tag' );

		/** Theme custom background **/
		$default_background = array(
			'default-color' => 'e8e8e8'
		);
		add_theme_support('custom-background', $default_background);

		/** Theme Menu **/
		register_nav_menu( 'primary-menu', __('Primary Menu','demowp') );

		/** Theme Sidebar **/
		$sidebar = array(
			'name' => __('Main Sidebar', 'demowp'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_tiltle' => '</h3>'
		);
		register_sidebar($sidebar);
	}
}
?>


<?php
	/**----------------TEMPLATE FUNCTIONS---------------**/
?>
<?php
/**----------Header Site Name----------**/
if(!function_exists('demo_header_content')){
	function demo_header_content(){ 
?>
		<div class="site-name">
			<?php
				if(is_home()){
					printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename'));
				}else{
					printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename'));
				}
			?>
		</div>
		<div class="site-description">
			<?php bloginfo('description'); ?>
		</div>
<?php
	}
}
?>

<?php
/**----------Header of content----------**/
if(!function_exists('demowp_entry_header')){
	function demowp_entry_header(){
?>

		<?php if(is_single()): ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<?php else:?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
<?php 
	}
}
?>
<?php 
/**----------Meta of content(author, date-published, category, comment number)----------**/
if(!function_exists('demowp_entry_meta')){
	function demowp_entry_meta(){
		if(!is_page()):{
?>

			<div class="entry-meta">
				<?php
					/**author, date-published, category, comment number**/
					printf(__('<span class="autho">Posted by %1$s</span>', 'demowp'), get_the_author());
					printf(__('<span class="date-published"> at %1$s</span>', 'demowp'), get_the_date());
					printf(__('<span class="category"> in %1$s </span>', 'demowp'), get_the_category_list( ',' ));

					/**Content Number**/
					if(comments_open()):
						echo '<span class="meta-reply">';
							comments_popup_link(
								__( 'Leave a comment', 'demowp' ),
								__( 'One comment', 'demowp' ),
								__( '% comment', 'demowp' ),
								__( 'Read all comment', 'demowp' )
							);
						echo '</span>';
					endif;
				?>
			</div>
<?php
		}
		endif;
	}
}
?>

<?php
/**----------Menu----------**/
if(!function_exists('demo_menu')){
	function demo_menu($menu){
		$menu = array(
			'theme_location' => $menu,
			'container' => 'nav',
			'container_class' => $menu
		);
		wp_nav_menu( $menu );
	}
}
?>

<?php 
/**----------Pagination----------**/
if(!function_exists('demo_pagination')){
	function demo_pagination(){
		if($GLOBALS['wp_query'] -> max_num_pages < 2){
			return '';
		}
?>

		<nav class="pagination" role="navigation">
			<?php if(next_posts_link()) : ?>
				<div class="prev">
					<?php next_posts_link(__('Older Posts', 'demowp') ); ?>
				</div>
			<?php endif; ?>

			<?php if(previous_posts_link()) : ?>
				<div class="next"> 
						<?php previous_posts_link(__('Newest Posts', 'demowp') ); ?>
				</div>
			?>
			<?php endif; ?>
		</nav>
<?php
	}
}
?>


<?php 
/**----------Thumbnail Image Size----------**/
if(!function_exists('demowp_thumbnail')){
	function demowp_thumbnail($size){
		if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')):
?>
		<figure class="post-thumbnails">
			<?php the_post_thumbnail($size); ?>
		</figure>
		<?php endif; ?>
		
<?php 
	}
}
?>

<?php
/**----------Content of content----------**/
if(!function_exists('demowp_entry_content')){
	function demowp_entry_content(){
		if(!is_single() && !is_page()){
			the_excerpt();
		}else{
			the_content();

			/*Paging in single*/
			$link_pages = array(
				'before' => __( '<p>Page: ', 'demowp' ),
				'after' => __( '</p', 'demowp' ),
				'nextpagelink' => __( 'Next Page', 'demowp' ),
				'previouspagelink' => __( 'Previous Page', 'demowp' )
			);
			wp_link_pages( $link_pages );
		}
	}
}
?>

<?php
/**----------Readmore of content----------**/
function demowp_entry_readmore(){
	return '<p><a class="read-more" href="'. get_permalink( get_the_ID()) .'">'.__( 'Read More', 'demowp' ) . '</a></p>';
}
add_filter('excerpt_more','demowp_entry_readmore');
?>

<?php 
/**----------Tag in post----------**/
if(!function_exists('demo_entry_tag')){
	function demo_entry_tag(){
		if(is_single()){
			if(has_tag()):
				echo '<div class="entry_tag"';
				printf(__( 'Tagged in %1$s', 'demowp' ), get_the_tag_list(' ', ','));
				echo '</div>';
			endif;
		}
	}
}
?>
<?php
