	<div class="page-content">
		
		<!-- Breadcrumb Section -->
		<section class="breadcrumb-shopping-cart breadcrumb-section section-box" style="background-image: url(images/engine-repair-service-bc.jpg)">
			<div class="container">
				<div class="breadcrumb-inner">
					<h1>SHOPPING CART</h1>
					<ul class="breadcrumbs">
						<li><a class="breadcrumbs-1" href="index.html">Home</a></li>
						<li><p class="breadcrumbs-2">Shopping Cart</p></li>
					</ul>
				</div>	
			</div>
		</section>
		<!-- End Breadcrumb Section -->
		
		<!-- Cart Section -->
		<section class="cart-page section-box">
			<div class="container">
				<div class="woocommerce">
					<form class="woo-cart-form" action="#" method="post">
						<!-- Cart Content -->
						<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
							<thead>
								<tr>
									<th class="product-thumbnail">Preview</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantily</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove"></th>
								</tr>
							</thead>
							<tbody>
								<!-- Cart 1 -->
								<tr class="woocommerce-cart-form__cart-item cart_item">
									<td class="product-thumbnail">
										<a href="#"><img src="images/shopping-cart-product-1.jpg" alt="cart-1"></a>
									</td>
									<td class="product-name" data-title="Product">
										<a href="#">Aenean Pharetra.</a>
									</td>
									<td class="product-price" data-title="Price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											20.00
										</span>
									</td>
									<td class="product-quantity" data-title="Quantity">
										<div class="quantity">
											<input class="qty text" type="number" value="2" data-min="0" data-max="100">
										</div>
									</td>
									<td class="product-subtotal" data-title="Total">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											40.00
										</span>
									</td>
									<td class="product-remove">
										<a href="#" class="remove"><i class="la la-close"></i></a>
									</td>
								</tr>
								<!-- Form Coupon -->
								<tr>
									<td colspan="6" class="actions">
										<div class="coupon">
											<input type="text" name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon Code">
											<input type="submit" class="button au-btn au-btn-green" name="apply_coupon" value="Apply">
										</div>
										<input type="submit" class="button au-btn au-btn-green" name="update_cart" value="Update Cart">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<!-- Cart Total -->
					<div class="cart-collaterals">
						<div class="cart_totals calculated_shipping">
							<h3 class="text-block block-title">CART TOTALS</h3>
							<table class="shop_table shop_table_responsive">
								<tbody>
									<tr class="cart-subtotal">
										<th>Subtotal</th>
										<td>
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												40.00
											</span>
										</td>
									</tr>
									<tr class="shipping">
										<th>Shipping</th>
										<td>
											Etiam auctor metus in hendrerit sollicitudin. Nulla placerat vitae nibh et vehicula ed nunc tellus, tristique.
											<span class="shipping-calculator-button">Calculate Shipping</span>
											<section class="shipping-calculator-form">
												<p class="form-row form-row-wide" id="calc_shipping_country_field">
													<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select select2-hidden-accessible" rel="calc_shipping_state" tabindex="-1" aria-hidden="true">
														<option value="">Select a country…</option>
														<option value="AX">VietNam</option>
														<option value="ZM">Korea</option>		
													</select>
													<span class="select-btn">
														<i class="fas fa-sort-down"></i>
													</span>
												</p>
												<p class="form-row form-row-wide" id="calc_shipping_state_field">
													<input type="text" class="hidden" name="calc_shipping_state" id="calc_shipping_state" value="" placeholder="State / County">
												</p>
												<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
													<input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
												</p>
												<p>
													<button type="submit" name="calc_shipping" value="1" class="button au-btn au-btn-green btn-small">Update Cart</button>
												</p>
											</section>
										</td>
									</tr>
									<tr class="order-total">
										<th>Total</th>
										<td>
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												40.00
											</span>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="wc-proceed-to-checkout">
								<a href="#" class="checkout-button button alt wc-forward au-btn au-btn-green btn-small ">PROCEED TO CHECKOUT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cart Section -->

	</div>