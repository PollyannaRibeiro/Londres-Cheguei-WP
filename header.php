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

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- font			 -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= $home;?>/style.css">
<link rel="stylesheet" href="<?= $home;?>/assets/css/category.css">
<link rel="stylesheet" href="<?= $home;?>/assets/css/search.css">

<?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>

<div id="page-container" class="site">
	<div id="content-wrap">
		<header id="masthead" class="site-header" role="banner">
				<div class="container-fluid" id=large-menu>
					<div class="row">
						<div class="col-2 header-menu" id="logo-space">
							<a href="https://londrescheguei.com/"><img src="<?= $home;?>/assets/images/logo/logo-londres-cheguei.png" id="logo" class="float-left"/></a>
						</div>

						<div class="col-7 header-menu" id="menu-header">
							<div class="float-right">
								<?php wp_nav_menu(array(
									'theme_location' => 'menu-header', 
								)); ?>
							</div>	
						</div>
						<!-- search bar -->
						<div class="col-3 header-menu" id="search-bar">
								<form role="search" class="search-form" method="get" action="https://londrescheguei.com/">
									<div class="row search-field">
										<input type="text" name="s" class="form-control search-input" placeholder="search" value="<?php the_search_query(); ?>">
										<button type="submit" class="btn btn-light search-icon"><i class="fas fa-search"></i>
									</div>
								</form>
						</div>
					</div>
					<div class="row">
						<!-- menu categories -->
						<div class="col-12" id="menu-cat">
							<div class="float-right">
								<?php wp_nav_menu(array(
									'theme_location' => 'menu-categories', 
								)); ?>
							</div>	
						</div>

					</div>
				</div>
				<!-- tablet menu -->
				<div class="container-fluid" id=tablet-menu>
					<div class="row">
						<div class="col-4 header-menu" id="logo-space">
							<img src="<?= $home;?>/assets/images/logo/logo-londres-cheguei.png" id="logo" class="float-left"/>
						</div>

						<div class="col-5 header-menu" id="menu-header">
							<div class="float-right">
								<?php wp_nav_menu(array(
									'theme_location' => 'menu-header', 
								)); ?>
							</div>	
						</div>
						<div class="col-3 header-menu" id="search-bar">
								<form role="search" class="search-form" method="get" action="https://londrescheguei.com/">
									<div class="row search-field">
										<input type="text" name="s" class="form-control search-input" placeholder="search" value="<?php the_search_query(); ?>">
										<button type="submit" class="btn btn-light search-icon"><i class="fas fa-search"></i>
									</div>
								</form>
						</div>
					</div>
				</div>
				<!-- Burger menu -->
				<nav class="navbar navbar-light" id=burger-menu>
					<a class="navbar-brand" href="#"><img src="<?= $home;?>/assets/images/logo/logo-londres-cheguei.png" id="logo" class="float-right"/></a>
					<button class="navbar-toggler" 
						type="button" data-toggle="collapse" 
						data-target="#navbarTogglerDemo02" 
						aria-controls="navbarTogglerDemo02" 
						aria-expanded="false" 
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<?php wp_nav_menu(array(
										'theme_location' => 'menu-header' 
									)); ?>
							<li>
							<li>
								<?php wp_nav_menu(array(
										'theme_location' => 'menu-categories'
									)); ?>
							<li>
						</ul>
						<form role="search" class="search-form" method="get" action="https://londrescheguei.com/">
							<div class="row search-field">
								<input type="text" name="s" class="form-control search-input" placeholder="search" value="<?php the_search_query(); ?>">
								<button type="submit" class="btn btn-light search-icon"><i class="fas fa-search"></i>
							</div>
						</form>
					</div>
				</nav>
		</header>

