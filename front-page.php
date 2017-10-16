<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div>
				<div class="caption-gallery-disabled">
				</div>
	      <div class="captioned-gallery">
	      	<figure class="slider">
	      		<figure>
	            <div class="figure-overlay"></div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lakesideheader.png" alt="Find">
	            <figcaption>find.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lakesideheader.png" alt="Follow">
	      			<figcaption>follow.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lakesideheader.png" alt="Flavor">
	      			<figcaption>flavor.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lakesideheader.png" alt="Find">
	      			<figcaption>find.</figcaption>
	      		</figure>
	      	</figure>
	      </div>
			</div>

			<div class="location-container">
				<div class="location">
					<h3 class="address suburb">Skokie, Illinois</h3>
					<p class="address">3939 West Howard Street</p>
					<p>
						<span>Worship Service </span><span class="time">10:00am</span>
					</p>
					<p>
						<span>Luncheon </span><span class="time">11:45am</span>
					</p>
				</div>
				<div class="map">
					<div id="map" style="width:100%;height:400px;"></div>
					<script>
						function initMap() {
							var lakeside = {lat: 42.018694, lng: -87.727839};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 13,
								center: lakeside
							});
							var marker = new google.maps.Marker({
								position: lakeside,
								map: map
							});
						}
					</script>
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHtFB_7PJQ3yNN6Wj6pahOXp3zrSEEHV8&callback=initMap">
					</script>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
