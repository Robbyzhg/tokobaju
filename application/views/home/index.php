	<style>
		.product_buttons{
			width: 100px;
			height: 50px;
			padding-left: 20px;
			margin-left: 10px;
		}
	</style>



<div class="super_container_inner">
<div class="super_overlay"></div>

<!-- Home -->

<div class="home">
	<!-- Home Slider -->
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">
			
<!-- Slide -->
<div class="owl-item">
	<div class="background_image" style="background-image:url(assets/images/home.jpg)"></div>
	<div class="container fill_height">
		<div class="row fill_height">
			<div class="col fill_height">
				<div class="home_container d-flex flex-column align-items-center justify-content-start">
					<div class="home_content">
						<div class="home_items">
							<div class="row">
								<div class="col-sm-3 offset-lg-1">
									<div class="home_item_side"><a href="product.html">
										<img src=""></a></div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
									<div class="product home_item_large">
										<div class=" flex-column align-items-center justify-content-center">
										</div>
										<div class="product_image"><img src="assets/images/trecora.png"></div>		
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="home_item_side"><a href="product.php"><img src=""></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Products -->

<div class="products">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section_title text-center">New on Trecora</div>
			</div>
		</div>
		<div class="row products_row">
			
			<?php foreach($product as $product) : ?>
			<!-- Product -->
			<div class="col-xl-4 col-md-6">
				<div class="product">
					<div class="product_image text-center"><img width="200" height="auto" src="<?= base_url("assets/product/$product->gambar_product")?>"></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><h3 style="color: black;"><?= $product->nama_product ?></h3></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_price text-right">Rp.<?= $product->harga_product ?></div>
							</div>
						</div>
						<div class="product_buttons">
							<div class="text-right d-flex flex-row align-items-start justify-content-start">
								<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
									<a href="<?= base_url('cart/add_to_cart/'.$this->session->id_users.'/'.$product->id_product)?>">
							<img src="assets/images/cart.svg" class="svg">
						</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>


				</div>
			</div>
		</div>
	</div>
</div>

<!-- Features -->

<div class="features">
	<div class="container">
		<div class="row">
			<!-- Feature -->
			<div class="col-lg-4 feature_col">
				<div class="feature d-flex flex-row align-items-start justify-content-start">
					<div class="feature_left">
						
					</div>
					<div class="feature_right d-flex flex-column align-items-start justify-content-center">
						
					</div>
				</div>
			</div>

			<!-- Feature -->
			<div class="col-lg-4 feature_col">
				<div class="feature d-flex flex-row align-items-start justify-content-start">
					<div class="feature_left">
						<div class="feature_icon ml-auto mr-auto"><img src="assets/images/icon_2.svg" alt=""></div>
					</div>
					<div class="feature_right d-flex flex-column align-items-start justify-content-center">
						<div class="feature_title">Premium Products</div>
					</div>
				</div>
			</div>
			<!-- Feature -->
			<div class="col-lg-4 feature_col">
				<div class="feature d-flex flex-row align-items-start justify-content-start">
					<div class="feature_left">
						
					</div>
					<div class="feature_right d-flex flex-column align-items-start justify-content-center">
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

