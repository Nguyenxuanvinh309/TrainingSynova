<?php
/**
@Set Value
	@THEME_URL: get url theme folder
	@CORE: get url folder /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );

/****/
require_once(CORE . "/init/init.php");

/** Set up content width **/
if( !isset($content_width) ){
	$content_width = 620;
}

/** Function of Theme **/
if( !function_exists('demo_theme_setup') ){
	function demo_theme_setup(){
		/** Set up textdomain **/
		$language_folder = THEME_URL . './languages';
		load_theme_textdomain( 'demotheme', $language_folder );

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
		register_nav_menu( 'primary-menu', __('Primary Menu','demotheme') );

		/** Theme Sidebar **/
		$sidebar = array(
			'name' => __('Main Sidebar', 'demotheme'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_tiltle' => '</h3>'
		);
		register_sidebar($sidebar);
	}
	add_action('init','demo_theme_setup');
}
?>


<?php
	/**----------------TEMPLATE FUNCTIONS---------------**/
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
/**----------Thumbnail Image Size----------**/
if(!function_exists('demotheme_thumbnail')){
	function demotheme_thumbnail($size){
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
/**----------Readmore of content----------**/
function demotheme_entry_readmore(){
	return '<p><a class="read-more" href="'. get_permalink( get_the_ID()) .'">'.__( 'Read More', 'demotheme' ) . '</a></p>';
}
add_filter('excerpt_more','demotheme_entry_readmore');
?>

<?php
/**----------Import Style----------**/
	function demotheme_style(){
		wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
		wp_enqueue_style( 'main-style' );
		wp_register_style('reset-style', get_template_directory_uri() . '/reset.css' , 'all');
		wp_enqueue_style('reset-style');
	}
	add_action( 'wp_enqueue_scripts', 'demotheme_style' );
?>

<?php
