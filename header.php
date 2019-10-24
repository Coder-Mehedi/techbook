<!DOCTYPE html>
<html ⚡ lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>Techbook</title>
<link href="" rel="stylesheet">

<?php wp_head() ?>
</head>
<body id="main">
	<header class="header">
	    <div class="container">
	        <div class="hdrIn">
	        	<button onclick="openNav()" class="togglarBtn">&#9776;</button>
	            <a class="logo" href="#">
			  		<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
			  	</a>
	            	
	            	<?php wp_nav_menu( array(
	            		'theme_location'  => 'menu-1',
	            		'container'       => 'nav',
	            		'container_class' => 'nav',
	            		'container_id'    => 'mySidenav',
	            		'menu_class'      => 'menu',
	            		'items_wrap'      => '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#8594;</a><ul id = "%1$s" class = "%2$s">%3$s</ul>',
	            	) ); ?>
	        </div>
	    </div>
	</header>