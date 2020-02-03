<h1>asd</h1>
<br>
<div class="row products_row products_container grid">
<!-- Product -->
		<?php foreach($product as $product) : ?>
	<div class="col-xl-4 col-md-6 grid-item new">
			<div class="product">
				<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html"><?= $product->nama_product ?></a></div>
									<div class="product_category"><?= $product->deskripsi ?></div>
								</div>
							</div>
					<div class="ml-auto text-right">
						<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_price text-right">Rp. <?= $product->harga_product ?></div>
						</div>
					</div>
			<div class="product_buttons">
				<div class="text-right d-flex flex-row align-items-start justify-content-start">
					<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
						<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
					</div>
			<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
			<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
</div>