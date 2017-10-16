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
	            <img src="https://az616578.vo.msecnd.net/files/2016/10/21/636126250118128281844548477_Worship-Background_crop1.jpg" alt>
	            <figcaption>find.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
	            <img src="https://az616578.vo.msecnd.net/files/2016/10/21/636126250118128281844548477_Worship-Background_crop1.jpg" alt>
	      			<!-- <img src="http://www.brasch-group.com/images/Aug-09-1.jpg" alt> -->
	      			<figcaption>follow.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
	            <img src="https://az616578.vo.msecnd.net/files/2016/10/21/636126250118128281844548477_Worship-Background_crop1.jpg" alt>
	      			<!-- <img src="https://www.loveworldsat.org/wp-content/uploads/2017/05/wcs_zim-1.jpg" alt> -->
	      			<figcaption>flavor.</figcaption>
	      		</figure>
	      		<figure>
	            <div class="figure-overlay"></div>
	      			<img src="https://az616578.vo.msecnd.net/files/2016/10/21/636126250118128281844548477_Worship-Background_crop1.jpg" alt>
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
					<div id="map" style="width:auto;height:400px;"></div>
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



			<!-- <h1><?php the_title(); ?></h1> -->

		<!-- <?php if (have_posts()): while (have_posts()) : the_post(); ?> -->

			<!-- article -->
			<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

				<!-- <?php the_content(); ?> -->

				<!-- <?php comments_template( '', true ); // Remove if you don't want comments ?> -->

				<!-- <br class="clear"> -->

				<!-- <?php edit_post_link(); ?> -->

			<!-- </article> -->
			<!-- /article -->

		<!-- <?php endwhile; ?> -->

		<!-- <?php else: ?> -->

			<!-- article -->
			<!-- <article> -->

				<!-- <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2> -->

			<!-- </article> -->
			<!-- /article -->

		<!-- <?php endif; ?> -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
