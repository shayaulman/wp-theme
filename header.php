<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	

<header class="site-header">
	<h1>Hello</h1>
	<h4>How are you?</h4>
	<nav class="main-navigation">
		<ul class="nav">
			<li>Home</li>
			<li>Shop</li>
			<li>About</li>
		</ul>
	</nav>
</header>

<div id="content" class="site-content">
	
