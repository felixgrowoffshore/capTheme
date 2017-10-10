<?php
$q = array(
    'post_type'      => 'resources_links',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$resources_links = get_posts($q);
$categories = get_categories();
?>
<div class="container for-link">
  <div class="row">
  <?php
  foreach ($categories as $key => $category) {
    $links = get_resources_links($category->slug);

    if($links){
      echo '<div class="col-md-6 col-sm-12">';
      echo '<h3>'.$category->name.'</h3>';
      echo '<ul class="content-links">';
      foreach ($links as $key => $link) {
        $link_ref = get_field('resources_link',$link->ID);
        echo '<li><a href="'.$link_ref.'" target="_blank">'.$link->post_title.'</a></li>';
      }
      echo '</ul>';
      echo '</div>';
    }

  }
  ?>
  </div>
</div>
