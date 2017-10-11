<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CAP_Theme
 */

?>

		</div><!-- #content -->
	</div><!-- #page -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<ul class="footer-links">
						<li>Contact information</li>
						<li>Copyright notice</li>
						<li>
							<ul>
								<li><a href="#">Footer Links</a></li>
								<li><a href="#">Footer Links</a></li>
								<li><a href="#">Footer Links</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="row footer-banner">
						<div class="col-md-8 col-sm-8 footer-banner-img"><img src="<?php echo IMAGEPATH .'artscouncil.png'?>"><img src="<?php echo IMAGEPATH .'policehistory.png'?>"></div>

						<div class="col-md-4 col-sm-4">
							<a href=""><img src="<?php echo IMAGEPATH .'facebook.png'?>"></a>
							<a href=""><img src="<?php echo IMAGEPATH .'twitter.png'?>"></a>
							<a href=""><img src="<?php echo IMAGEPATH .'youtube.png'?>"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
