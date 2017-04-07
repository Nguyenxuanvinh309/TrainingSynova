<?php
/**----------Header Site Name----------**/
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
