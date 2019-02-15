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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<link rel="stylesheet" href="<?= $home;?>/style.css">

<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4 header-menu" id="logo-space">
						<img src="<?= $home;?>/assets/images/logo/logo-londres-cheguei.png" id="logo" class="center"/>
					</div>
					<div class="col-5 header-menu" >
						<div class="row" id="pages">Pages</div>
						<div class="row" id="menu-categories">Categories</div>
					</div>
				</div>
			</div>
	</header>



	<div class="site-content-contain">
		<div id="content" class="site-content">
