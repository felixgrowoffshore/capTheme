<?php
$q = array(
    'post_type'      => 'news_events',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
);

$news_events = get_posts($q);

if($news_events) : ?>

<div class="home-news news_events">
  <div class="container">
    <h2>News and events</h2>
    <div class="row">
      <?php foreach ($news_events as $key => $news) { ?>
        <?php if ( has_post_thumbnail() ) :
          $thumbnail_id = get_post_thumbnail_id( $news->ID );
          $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          $url = wp_get_attachment_url( get_post_thumbnail_id($news->ID) ); ?>
        <?php endif; ?>
        <?php
        $author_id=$news->post_author;

        ?>
        <div class="col-md-4 col-sm-12 col">
          <div class="news-img">
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
          </div>
          <div class="news-info">
            <p class="lead"><?php echo $news->post_title ?></p>
            <p><?php the_author_meta( 'user_nicename' , $author_id ); ?></p>
            <p><?php echo $news->post_date ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php endif; ?>
