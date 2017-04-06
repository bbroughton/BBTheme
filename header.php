
<!doctype html>
<html>
	<head class = "no-js" lang = "en">
		<meta charset = "utf-8"/>
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
		<div class ="row">
			<div class = "top"
				<a href = "<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
				<img src = <?php header_image();?>></img>
			</div>

			<div class ="nav-large">
				<?php
				$defaults = array(
						'menu-container' => false,
						'theme_location' => 'primary-menu',
						'menu_class'  =>'nav-large',
						'menu_id' => 'navlist');
				
				wp_nav_menu($defaults);
	
				?>
			</div>
		</div>
</header>
