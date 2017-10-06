<?php
/**
 * Template Name: Resources
 *
 */

?>
<?php get_header(); ?>
	
	<div class="container"><h1><?php echo get_the_title(); ?></h1><p class="col-md-9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p></div>
	<?php
	
	get_template_part( 'template-parts/_grid_block' );

	?>

<?php
get_sidebar();
get_footer();
?>
