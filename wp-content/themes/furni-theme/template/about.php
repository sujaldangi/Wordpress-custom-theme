<?php
// Template Name: about
?>
<?php locate_template('layouts/header.php', true);  ?>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1><?php echo get_field('herotitle', 14); ?></h1>
					<p class="mb-4"><?php echo get_field('heroparagraph', 14); ?></p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?php echo get_field('heroimage', 14); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
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
							if ($i>=4){
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

<!-- Start Team Section -->
<div class="untree_co-section">
	<div class="container">

		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center">
				<h2 class="section-title">Our Team</h2>
			</div>
		</div>

		<div class="row">
			<?php
			if (have_rows('team', 14)) {
				while (have_rows('team', 14)) {
					the_row();
			?>

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="<?php echo get_sub_field('image',14) ?>" class="img-fluid mb-5">
						<h3 clas><a href="#"><?php echo get_sub_field('name',14) ?></a></h3>
						<span class="d-block position mb-4"><?php echo get_sub_field('title',14) ?></span>
						<p><?php echo get_sub_field('para',14) ?></p>
						<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div>
					<!-- End Column 1 -->
			<?php }
			} ?>





		</div>
	</div>
</div>
<!-- End Team Section -->

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