<?php
$args = array(
  'post_parent' => get_the_ID(),
  'post_type'   => 'page',
  'numberposts' => -1,
  'post_status' => 'any'
);
$children = get_children( $args );
if($children) : ?>
<div class="container"><?php
// var_dump($children);
  foreach ($children as $key => $page) { ?>
    <?php
    $alternative_title = get_field('alternative_title',$page->ID);
    ?>
    <div class="row home-child">
      <div class="col-sm-12 col-md-8">
        <h2><?php echo $alternative_title; ?></h2>
        <p><?php echo $page->post_content; ?></p>

        <p class="child-btn"><a class="btn btn-primary" href="<?= get_permalink($page->ID); ?>"><?= $page->post_title ?></a></p>
      </div>
    </div>
  <?php } ?>
</div>
<?php endif; ?>
