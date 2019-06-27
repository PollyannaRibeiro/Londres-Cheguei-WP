<?php
/**
 * The template for displaying the footer
 */
?>

<?php $home=get_template_directory_uri();?>
<?php wp_footer(); ?>
					
		</div><!-- #content-wrap -->
	<footer id="footer" class="footer mt-auto py-3" role="contentinfo">
			<div class="row" id="footer-links">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center social-media">
						<ul>
							<li class="social-li"><a href="https://www.instagram.com/londrescheguei"><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/instagram.svg" alt="" srcset=""></a></li>
							<li class="social-li"><a href="https://www.facebook.com/londrescheguei/"><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.svg" alt="" srcset=""></a></li>
							<li class="social-li"><a href="https://www.youtube.com/channel/UCbcNsxLxim2bbsgqnaQNswQ"><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/youtube.svg" alt="" srcset=""></a></li>
							<li class="social-li"><a href="https://twitter.com/londrescheguei"><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/twitter.svg" alt="" srcset=""></a></li>
						</ul>
				</div>
				<div class="col-6 col-sm-12 col-md-6 col-lg-6 col-footer" id="foter-1">
					<div class="col-sm-6 col-md-6 col-xl-6">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-footer-1', 
						)); ?>
					</div>	
					<div class="col-sm-6 col-md-6 col-xl-6">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-footer-2', 
						)); ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" id="copyright"><p>2019 @Copyright</p></div>
		</div>
	</footer>	
</div><!-- #page-container -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?= $home;?>/assets/js/index.js"></script>
<script src="<?= $home;?>/assets/myloadmore.js"></script>
<script src="<?= $home;?>/assets/node_modules/bootstrap/js/src/util.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
