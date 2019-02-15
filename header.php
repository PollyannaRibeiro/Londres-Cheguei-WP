<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<?php $home=get_template_directory_uri();?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?= $home;?>/style.css">

<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4" id="logo">Logo</div>
					<div class="col-5" id="menu-categories">Categories</div>
					<div class="col-3" id="search-bar">Search Bar</div>
				</div>
			</div>
	</header>



	<div class="site-content-contain">
		<div id="content" class="site-content">
