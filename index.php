<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" >
</head>
<body>

<?php
wp_nav_menu('nav');
?>

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 	
			the_title(); 
			the_content();
		} 
	} 
?>


</body>
</html>
