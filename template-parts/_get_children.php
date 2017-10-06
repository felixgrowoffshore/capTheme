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
    <div class="row home-child">
      <div class="col-sm-12 col-md-8">
        <h3><?php echo $page->post_title; ?></h3>
        <p><?php echo $page->post_content; ?></p>
      </div>
    </div>
  <?php } ?>
</div>
<?php endif; ?>
