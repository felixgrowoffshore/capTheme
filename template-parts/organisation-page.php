<!--organization-->

<div class="container organisation-content">

		<div class="row">
			<div class="col-md-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="bg-white">
					<?php //the_content(); ?>
					<p>Organisation: Museum</p>
					<p>Collection: Police, Court</p>
					<p>Dates: 1700 - 1950</p>

					<p>A number of interesting displays of photographs and equipment and show the history of policing. Our resident sergeant is always on duty in the station watching over the prisoners</p>

					<p> <i class="fa fa-map-marker"></i> 63 Long St, Tetbury GL8 8AA</p>
					<p> <i class="fa fa-envelope"></i> Contact: John Silvester</p>
					<p>Any publications or other relevant material about the collection / history of the organisation?</p>
					<p>Yes</p>

					<p>Historic Buildings</p>
					<p>Yes - we have an old courtroom</p>

					<p>Who can access the collection?</p>
					<p>Registered users</p>

					<p>How big is the collection?</p>
					<ul class="col-md-2 list">
						<li>Documents</li>
						<li>Photographs</li>
						<li>Objects</li>
					</ul>
					<ul class="col-md-2 list">
						<li>11-100</li>
						<li>101-505</li>
						<li>Unknown</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<?php
					$map = get_field('images_map');
					$church = get_field('image_church');
				?>
				<div class="bg-white rounded-corner">
					<img src="<?= $map['url'] ?>" alt="<?= $map['alt'] ?>"/>
					<img src="<?= $church['url'] ?>" alt="<?= $church['alt'] ?>"/>
				</div>
			</div>
		</div>

</div>
