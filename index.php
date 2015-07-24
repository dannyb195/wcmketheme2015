<?php get_header(); ?>

		<?php
		$first_post = new WP_Query( array(
			'posts_per_page' => 1,
		) );
		while( $first_post->have_posts() ) :
			$first_post->the_post(); ?>

			<section class="home-feature">
				<div class="content-area side-padding inner-padding">
					<div class="home-feature-img main-content">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="home-feature-text aside-content">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
					</div>
				</div>
			</section>

		<?php
		endwhile;
		wp_reset_postdata();
		?>

		<section class="home-articles">
			<div class="content-area side-padding inner-padding">
				<?php
				$more_posts = new WP_Query( array(
					'posts_per_page' => 3,
					'offset' => 1,
				) ); ?>
				<?php
				while ( $more_posts->have_posts() ) :
					$more_posts->the_post(); ?>
						<div class="home-single-article">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Read more...</a>
						</div>
				<?php endwhile; ?>
			</div>
		</section>

		<footer class="site-footer">
			<div class="content-area side-padding">
				Footer
			</div>
		</footer>

	</div>

</body>
</html>
