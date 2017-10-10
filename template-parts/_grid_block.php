<?php
$q = array(
    'post_type'      => 'resources_document',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$resources_document = get_posts($q);

?>
<div class="row resource-content">
  <?php foreach ($resources_document as $key => $resource) { ?>
    <?php if ( has_post_thumbnail($resource->ID) ) :
      $thumbnail_id = get_post_thumbnail_id( $resource->ID );
      $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      $url = wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ); ?>
    <?php endif; ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <?php if($url) : ?>
        <?php
          $doc_url = get_field('resources_document',$resource->ID);
          $permalink_url = get_permalink($resource->ID);
          if($doc_url){
            $permalink_url = $doc_url['url'];
          }
        ?>
        <a href="<?php echo $permalink_url; ?>" <?php echo ($doc_url ? 'target="_blank"' : ''); ?>>
          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
        </a>
      <?php endif; ?>
      <p><?= $resource->post_content ?></p>
      <?php $tags = wp_get_post_tags( $resource->ID );
      // var_dump($tags);
      if($tags) :
        echo '<ul>';
        foreach ($tags as $key => $tag) {
          echo "<li>".$tag->name."</li>";
        }
        echo "</ul>";
      endif;
       ?>
    </div>
  <?php } ?>


</div>
