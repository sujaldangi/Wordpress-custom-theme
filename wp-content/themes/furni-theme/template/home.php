<?php
// Template Name: homepage
?>
<?php locate_template('layouts/header.php', true);  ?>

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1><?php echo get_field('herotitle', 10); ?></h1>
					<p class="mb-4"><?php echo get_field('heroparagraph', 10); ?></p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?php echo get_field('heroimage', 10); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<!-- Start Product Section -->
<div class="product-section pt-0" style="margin-top: 8%;">
	<div class="container">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title"><?php echo get_field('serviceproductsectiontitle', 18); ?></h2>
				<p class="mb-4"><?php echo get_field('serviceproductsectiontitlepara', 18); ?></p>
				<p><a href="#" class="btn">Explore</a></p>
			</div>
			<!-- End Column 1 -->
			<?php
			if (have_rows('product', 12)) {
				$i = 0;
				while (have_rows('product', 12)) {
					the_row();
					if ($i >= 3) {
						break;
					}
					$i += 1;
			?>

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="<?php echo get_sub_field('image', 12) ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?php echo get_sub_field('name', 12) ?></h3>
							<strong class="product-price">$<?php echo get_sub_field('price', 12) ?></strong>

							<span class="icon-cross">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross.png" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 2 -->
			<?php }
			} ?>



		</div>
	</div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<h2 class="section-title">Why Choose Us?</h2>

				<p><?php echo get_field('whychooseuspara', 14); ?></p>

				<div class="row my-5">
					<?php
					if (have_rows('features', 18)) {
						$test = get_field('features', 18);

						$i = 0;
						while (have_rows('features', 18)) {
							the_row();
							if ($i >= 4) {
								break;
							}
							$i += 1;

					?>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="<?php echo get_sub_field('icon', 18) ?>" alt="Image" class="imf-fluid">
									</div>
									<h3><?php echo get_sub_field('name', 18) ?></h3>
									<p><?php echo get_sub_field('para', 18) ?></p>
								</div>
							</div>
					<?php }
					} ?>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="<?php echo get_field('displayimage', 14) ?>" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->
<!-- Start We Help Section -->
<div class="we-help-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="<?php echo get_field('img1', 10); ?>" alt="Untree.co"></div>
					<div class="grid grid-2"><img src="<?php echo get_field('img2', 10); ?>"></div>
					<div class="grid grid-3"><img src="<?php echo get_field('img3', 10); ?>"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4"><?php echo get_field('threeimagetext', 10); ?></h2>
				<p><?php echo get_field('threeimagepara', 10); ?></p>

				<ul class="list-unstyled custom-list my-4">
					<?php
					if (have_rows('point', 10)) {
						while (have_rows('point', 10)) {
							the_row();
					?>
							<li><?php echo get_sub_field('keypoints', 10) ?></li>
					<?php }
					} ?>
				</ul>
				<p><a herf="#" class="btn">Explore</a></p>
			</div>
		</div>
	</div>
</div>
<!-- End We Help Section -->
<!-- Start Popular Product -->
<div class="popular-product">
	<div class="container">
		<div class="row">
			<?php
			if (have_rows('product', 12)) {
				$i = 0;
				while (have_rows('product', 12)) {
					the_row();
					if ($i >= 3) {
						break;
					}
					$i += 1;
			?>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="<?php echo get_sub_field('image', 12) ?>" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3><?php echo get_sub_field('name', 12) ?></h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
			<?php }
			} ?>



		</div>
	</div>
</div>
<!-- End Popular Product -->


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
													<span class="position d-block mb-3"><?php echo get_sub_field('designation', 14) ?></span>
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

<!-- Start Blog Section -->
<div class="blog-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<h2 class="section-title">Recent Blog</h2>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<a href="#" class="more">View All Posts</a>
			</div>
		</div>

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

				<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="<?php echo $image_src[0] ?>" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#"><?php the_title(); ?></a></h3>
							<div class="meta">
								<span>by <a href="#"><?php the_author(); ?></a></span> <span>on <a href="#"><?php echo get_the_date(); ?></a></span>
							</div>
						</div>
					</div>
				</div>
			<?php }
			?>

		</div>
	</div>
</div>
<!-- End Blog Section -->

<?php locate_template('layouts/footer.php', true); ?>