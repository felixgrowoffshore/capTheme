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
						<li>Contact Information</li>
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
					<div class="row">
						<div class="col-md-5"><img src="<?php echo IMAGEPATH .'artscouncil.png'?>"></div>
						<div class="col-md-4"><img src="<?php echo IMAGEPATH .'policehistory.png'?>"></div>
						<div class="col-md-3">
							<img src="<?php echo IMAGEPATH .'facebook.png'?>">
							<img src="<?php echo IMAGEPATH .'twitter.png'?>">
							<img src="<?php echo IMAGEPATH .'youtube.png'?>">
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
