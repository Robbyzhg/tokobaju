<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="<?php echo base_url('assets/') ?>stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url('assets/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/cart.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/cart_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Women</a></li>
			<li><a href="#">Men</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Home Deco</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+1 912-252-7350</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">
		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->

<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cart_container">
					
					<!-- Cart Bar -->
					<div class="cart_bar">
						<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
							<li class="mr-auto">Product</li>
							<li>Size</li>
							<li>Price</li>
							<li></li>
							<li>Total</li>
						</ul>
					</div>

<!-- Cart Items -->
<div class="cart_items">
	<ul class="cart_items_list">
		<?php $total = 0; ?>
		<?php foreach($cart as $cart) : ?>
		<?php 
			$this->db->where('id_product', $cart->id_product);
			$product = $this->db->get('product')->result()[0];
		?>

		<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
			<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
				<div><div class="product_image"><img src="images/cart_item_1.jpg" alt=""></div></div>
				<div class="product_name_container">
					<div class="product_name "><?= $product->nama_product ?></div>
				</div>
			</div>
			<div class="product_size product_text"><span>Size: </span>L</div>
			<div class="product_price product_text"><span>Price: </span>Rp.<?= $product->harga_product ?></div>
			<div class="product_quantity_container">
			</div>
			<div class="product_total product_text"><span>Total: </span>Rp.<?= $product->harga_product ?> </div>
		<?php $total += $product->harga_product ?>
		</li>
	</ul>
</div>
		<?php endforeach; ?>

							<!-- Cart Buttons -->
				<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
					<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
						<div class="button button_continue trans_200"><a href="<?= base_url("category") ?>">continue shopping</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="col-lg-12 cart_extra_col">
			<div class="cart_extra cart_extra_2">
				<div class="cart_extra_content cart_extra_total">
					<div class="cart_extra_title">Cart Total</div>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<div class="cart_extra_total_title">Total</div>
							<div class="cart_extra_total_value ml-auto">Rp.<?= $total ?></div>
						</li>
					</ul>
					<div class="checkout_button trans_200"><a href="<?= base_url("cart/checkout/" . $this->session->id_users) ?>">Checkout</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
