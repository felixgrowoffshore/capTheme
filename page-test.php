<?php
/**
 * Template Name: test page
 *
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<div class="home-feat-wrap">
				<?php get_template_part( 'template-parts/_get_featured' ); ?>
			</div>
			<div class="test-con">
							<?php get_template_part( 'template-parts/test', 'content' ); ?>		
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>
