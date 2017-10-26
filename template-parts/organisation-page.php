<!--organization-->
<div class="container organisation-content">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="bg-white org-content">
					<?php //the_content(); ?>
					<p class="bold">Organisation: Museum</p>
					<p class="bold">Collection: Police, Court</p>
					<p class="bold">Dates: 1700 - 1950</p>
					<p class="spacing bold"><span>CaP </span> CaP member</p>

					<p>A number of interesting displays of photographs and equipment and show the history of policing. Our resident sergeant is always on duty in the station watching over the prisoners.</p>

					<p> <i class="fa fa-map-marker"></i> 63 Long St, Tetbury GL8 8AA</p>
					<p> <i class="fa fa-envelope"></i> Contact: John Silvester</p>
					<p class="bold">Any publications or other relevant material about the collection / history of the organisation?</p>
					<p class="spacing">Yes</p>

					<p class="bold">Historic Buildings?</p>
					<p class="spacing">Yes - we have an old courtroom</p>

					<p class="bold">Who can access the collection?</p>
					<p class="spacing">Registered users</p>

					<p class="bold">How big is the collection?</p>
					<table>
					  <tr>
					    <td>Documents</td>
					    <td>11-100</td>
					  </tr>
					  <tr>
					    <td>Photographs</td>
					    <td>101-505</td>
					  </tr>
					  <tr>
					    <td>Objects</td>
					    <td>Unknown</td>
					  </tr>
					</table>
				</div>
			</div>

			<div class="col-md-4">
				<?php
					$map = get_field('images_map');
					$church = get_field('image_church');
					// var_dump($slider_gallery);
				?>
				<div class="bg-white organisation-image">
					<img src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>"/>
					<img src="<?php echo $church['url']; ?>" alt="<?php echo $church['alt']; ?>"/>
				</div>
			</div>
		</div>
</div>
