<?php
  $slider_label = get_field('slider_label');
  $slider_gallery = get_field('slider_gallery');
  // var_dump($slider_gallery);
?>
<div class="org-slider-wrap bg_light_gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?= $slider_label ?></h2>
				<div class="org-slick-slide">
				  <?php foreach ($slider_gallery as $key => $gallery) { ?>
						<div>
							<img src="<?= $gallery['url'] ?>" alt="<?= $gallery['alt'] ?>" title="<?= $gallery['title'] ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
