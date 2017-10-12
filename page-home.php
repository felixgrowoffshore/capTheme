<?php
/**
 * Template Name: Home page
 *
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home-feat-wrap">
				<?php get_template_part( 'template-parts/_get_featured' ); ?>
			</div>
			<div class="container images_map_bldg">
				<div class="row">
					<div class="col-md-6 col">
						<div class="image_wrap_hover">
							<img src="<?php echo IMAGEPATH.'home_images/map.png'?>" />
							<div>
								<p class="lead-text">Interactive map</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col">
						<div class="image_wrap_hover">
							<img src="<?php echo IMAGEPATH.'home_images/bldg.png'?>" />
							<div>
								<p class="lead-text">Membership info:</p>
								<p><a href="#">minutes</a>, test</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'template-parts/_home_news' ); ?>

			<?php get_template_part( 'template-parts/_get_children' ); ?>



		</main><!-- #main -->
	</div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>
