<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

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

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
