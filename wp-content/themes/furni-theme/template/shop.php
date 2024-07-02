<?php
// Template Name: shop
?>

<?php locate_template('layouts/header.php', true);  ?>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1><?php echo get_field('herotitle', 12); ?></h1>
					<p class="mb-4"><?php echo get_field('heroparagraph', 12); ?></p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?php echo get_field('heroimage', 12); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<div class="row">
			<?php 
			if(have_rows('product',12)){
				while(have_rows('product',12)){
					the_row();
			?>
			<!-- Start Column 1 -->
			<div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="<?php echo get_sub_field('image',12) ?>" class="img-fluid product-thumbnail">
					<h3 class="product-title"><?php echo get_sub_field('name',12) ?></h3>
					<strong class="product-price">$<?php echo get_sub_field('price',12) ?></strong>
				 -->
				 
					<span class="icon-cross">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross.png" class="img-fluid">
					</span>
				</a>
			</div>
			<?php }} ?>
		</div>
	</div>
</div>
<?php locate_template('layouts/footer.php', true);  ?>