<?php
// Template Name: services
?>
<?php locate_template('layouts/header.php', true);  ?>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1><?php echo get_field('herotitle', 18); ?></h1>
					<p class="mb-4"><?php echo get_field('heroparagraph', 18); ?></p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?php echo get_field('heroimage', 18); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">


		<div class="row my-5">
			<?php
			if (have_rows('features', 18)) {
				while (have_rows('features', 18)) {
					the_row();
			?>
					<div class="col-6 col-md-6 col-lg-3 mb-4">
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
</div>
<!-- End Why Choose Us Section -->
<!-- Start Product Section -->
<div class="product-section pt-0">
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
							<img src="<?php echo get_sub_field('image',12) ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?php echo get_sub_field('name',12) ?></h3>
							<strong class="product-price">$<?php echo get_sub_field('price',12) ?></strong>

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

<?php locate_template('layouts/footer.php', true); ?>