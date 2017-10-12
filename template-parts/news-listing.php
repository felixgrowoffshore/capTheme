<?php
$q = array(
    'post_type'      => 'news_events',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$news_events = get_posts($q);

if($news_events) : ?>

<div class="news_listing">
  <div class="container">
    <h1>News</h1>

      <?php foreach ($news_events as $key => $news) { ?>
        <?php if ( has_post_thumbnail($news->ID) ) :
          $thumbnail_id = get_post_thumbnail_id( $news->ID );
          $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          $url = wp_get_attachment_url( get_post_thumbnail_id($news->ID) ); ?>
        <?php endif; ?>
        <?php
        $author_id=$news->post_author;

        ?>
        <div class="row add_space">
          <?php if ( has_post_thumbnail($news->ID) ) : ?>
          <div class="col-md-4 col-sm-12 col-lg-3">
            <div class="news-img">
              <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-8 col-sm-12 col-lg-9">
            <div class="news-info">
              <h3><?php echo $news->post_title ?></h3>
              <p class="bold"><?php echo date('jS M Y',$news->post_date) ?></p>
              <?php
              $post_content = get_post($news->ID);
              $content = $post_content->post_content;
              echo getExcerpt($content,0,200);
              // echo apply_filters('the_content',$content);
              ?>
              <a href="<?php echo get_permalink($news->ID) ?>">Read more</a>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-sm-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
</div>

<?php endif; ?>
