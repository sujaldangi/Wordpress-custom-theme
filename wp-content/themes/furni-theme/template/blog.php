<?php
// Template Name: blog
?>
<?php locate_template('layouts/header.php', true);  ?>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1><?php echo get_field('herotitle', 20); ?></h1>
					<p class="mb-4"><?php echo get_field('heroparagraph', 20); ?></p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?php echo get_field('heroimage', 20); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<!-- Start Blog Section -->
<div class="blog-section">
	<div class="container">

		<div class="row">

			<?php
			$wp_new = array(
				'post_type' => 'post',
				'post_status' => 'publish'
			);
			$newsquery = new Wp_Query($wp_new);
			while ($newsquery->have_posts()) {
				$newsquery->the_post();
				$image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

			?>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="<?php echo $image_src[0] ?>" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="meta">
								<span>by <a href="#"><?php echo the_author(); ?></a></span> <span>on <a href="#"><?php echo get_the_date(); ?></a></span>
							</div>
						</div>
					</div>
				</div>
			<?php }
			?>
		</div>
	</div>
	<!-- Start Testimonial Slider -->
	<div class="testimonial-section before-footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="section-title">Testimonials</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider-wrap text-center">

						<div id="testimonial-nav">
							<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
							<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
						</div>

						<?php
						if (have_rows('testinomial', 18)) {
							while (have_rows('testinomial', 18)) {
								the_row();
						?>
								<div class="testimonial-slider">

									<div class="item">
										<div class="row justify-content-center">
											<div class="col-lg-8 mx-auto">

												<div class="testimonial-block text-center">
													<blockquote class="mb-5">
														<p>&ldquo;<?php echo get_sub_field('review', 18) ?>&rdquo;</p>
													</blockquote>

													<div class="author-info">
														<div class="author-pic">
															<img src="<?php echo get_sub_field('imageuser', 18) ?>" alt="Maria Jones" class="img-fluid">
														</div>
														<h3 class="font-weight-bold"><?php echo get_sub_field('name', 18) ?></h3>
														<span class="position d-block mb-3"><?php echo get_sub_field('designation', 18) ?></span>
													</div>
												</div>


											</div>
										</div>
									</div>
									<!-- END item -->


							<?php }
						} ?>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php locate_template('layouts/footer.php', true); ?>