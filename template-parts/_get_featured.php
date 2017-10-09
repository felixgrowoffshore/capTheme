<?php if ( has_post_thumbnail() ) :
  $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
    <div class="featured_image">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>" />
    </div>
<?php endif; ?>

<?php if(is_front_page()) : ?>
  <?php get_template_part( 'template-parts/search' ); ?>
<?php endif; ?>
