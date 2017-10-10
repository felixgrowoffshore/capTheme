<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CAP_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content navs">
		<?php
			the_content();?>

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#documents">Documents</a></li>
        <li><a data-toggle="tab" href="#links">Links</a></li>
      </ul>
      <div class="tab-content">
        <div id="documents" class="tab-pane fade in active">
          <?php get_template_part( 'template-parts/_grid_block' ); ?>
        </div>
        <div id="links" class="tab-pane fade">
          <?php get_template_part( 'template-parts/_grid_links' ); ?>
        </div>
      </div>
	</div><!-- .entry-content -->





</article><!-- #post-<?php the_ID(); ?> -->
