<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width">
</head>
<!-- body begins below -->
<body <?php body_class(); ?>>
	<!-- header section begins below -->
<header>
	<!-- top section search and facebook -->
	<div class="container top-nav"> 
		<div class="search-share">Search and share comes</div>
		<div class="pin">sdsdsdsd</div>
	</div>
	<!-- top section search and facebook -->
	<!-- header section -->
	<!-- logo begins -->
	<div class="header-center">
		<div class="container logo">
			<?php
			renaissancemensatheme_the_custom_logo();
			?>
		</div>
	<!-- logo ends -->
		<div class="container menu">
			<div id="pattern" class="pattern">
			<!-- toggle nav -->
			<a href="#menu" class="menu-link">Menu</a>
			<!-- menu items -->
				<nav id="menu" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav>
				<!-- <?php //wp_nav_menu(); ?> -->
		</div>
	</div>
	</div>
</header>
        

        
     	
       
