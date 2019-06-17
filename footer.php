<?php
/**
 * The template for displaying the footer
 */
?>

<?php $home=get_template_directory_uri();?>

<?php wp_footer(); ?>

	<footer id="footer" class="footer mt-auto py-3" role="contentinfo">
			<div class="row">
				<div class="col-3 col-footer">
					<div class="float-right">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-footer-1', 
						)); ?>
					</div>	
				</div>
				<div class="col-3 col-footer">
					<div class="float-right">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-footer-2', 
						)); ?>
					</div>	
				</div>
				<div class="col-6 social-media">
						<ul class="float-right">
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
							<li><a href=""><img class="social-media-icon" src="<?= $home;?>/assets/images/social-media/facebook.png" alt="" srcset=""></a></li>
						</ul>
				</div>
			</div>
		</div>
	</footer>	
</div><!-- #page -->



<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?= $home;?>/assets/js/index.js"></script>
<script src="<?= $home;?>/assets/myloadmore.js"></script>
<script src="<?= $home;?>/assets/node_modules/bootstrap/js/src/util.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->


</body>
</html>
