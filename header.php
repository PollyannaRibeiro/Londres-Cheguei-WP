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
<link rel="stylesheet" href="<?= $home;?>/assets/css/header.css">
<link rel="stylesheet" href="<?= $home;?>/assets/css/index.css">
<link rel="stylesheet" href="<?= $home;?>/assets/css/footer.css">


<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-2 header-menu" id="logo-space">
						<img src="<?= $home;?>/assets/images/logo/logo-londres-cheguei.png" id="logo" class="float-right"/>
					</div>
					<div class="col-7 header-menu" id="menu-header">
						<div class="float-right">
							<?php wp_nav_menu(array(
								'menu-header' => 'Menu Header', 

							)); ?>
						</div>	
					</div>
					<div class="col-3 header-menu" id="search-bar">
							<form role="search" class="search-form" method="get" action="http://localhost:1234/">
								<div class="row search-field">
									<input type="text" name="s" class="form-control search-input" placeholder="search">
									<button type="submit" class="btn btn-light search-icon"><i class="fas fa-search"></i>
								</div>
							</form>
					</div>
				</div>
			</div>
	</header>



	<div class="site-content-contain">
		<div id="content" class="site-content">
