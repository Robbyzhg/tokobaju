<style>
	.product_name{
		color: black;
	}
	.product_category{
		color: black;
	}
</style>		
<h1>asd</h1>
<br>
<div class="row products_row products_container grid">
<!-- Product -->
		<?php foreach($product as $product) : ?>
	<div class="col-xl-4 col-md-6 grid-item new">
			<div class="product">
				<div class="product_image text-center"><img height="500" width="auto" src="<?= base_url("assets/product/$product->gambar_product")?>" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><?= $product->nama_product ?></div>
									<div class="product_category"><?= $product->deskripsi ?></div>
								</div>
							</div>
					<div class="ml-auto text-right">
						<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_price text-right">Rp. <?= $product->harga_product ?></div>
						</div>
					</div>
			<div class="product_buttons">
				<div class="text-center align-items-center justify-content-center">
			<div class="product_button product_cart text-center d-flex align-items-center justify-content-center">
				<div>
					<div>
					<a href="<?= base_url('cart/add_to_cart/'.$this->session->id_users.'/'.$product->id_product)?>">
							<img src="assets/images/cart.svg" class="svg">
						</a>
					<div>
				</div>
				</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
</div>
		


