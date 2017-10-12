<?php
/**
 * Template Name: Organization
 *
 */

?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<div class="home-feat-wrap">
				<?php get_template_part( 'template-parts/_get_featured' ); ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/organisation', 'page' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
			<?php get_template_part( 'template-parts/organisation', 'slider' ); ?>
	</div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>
