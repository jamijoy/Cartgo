<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products Cart</title>
<?php echo $__env->yieldContent('heading'); ?>
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="product-main-display">
		<h3>Products in Cart list</h3><hr>
		<div class="cart-area">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table cart-table">
							<thead class="table-title">
								<tr>
									<th class="produ">PRODUCT</th>
									<th class="namedes">PRODUCT NAME &amp; DESCRIPTION</th>
									<th class="unit">UNIT PRICE</th>
									<th class="quantity">QUANTITY</th>
									<th class="valu">VALUE</th>
									<th class="acti">ACTION</th>
								</tr>													
							</thead>
							<tbody id="CartBody">
								<?php ($subtot=0); ?>
								<?php $__currentLoopData = $CartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr class="table-info">
									<td class="produ">
										<?php ($imgCall=0); ?> <?php $__currentLoopData = $imgData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($img->prod_id==$dt->prod_id): ?>
											<a href="/product-details/<?php echo e($dt->prod_id); ?>" class="pro-image fix"><img src="img/shop/<?php echo e($img->image1); ?>" alt="featured" /></a><?php ($imgCall=1); ?> <?php break; ?> <?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php if($imgCall==0): ?> <a href="/product-details/<?php echo e($dt->prod_id); ?>"><img alt="" src="img/cart-1.jpg"></a> <?php endif; ?>
									</td>
									<td class="namedes">
										<h2><a href="/product-details/<?php echo e($dt->prod_id); ?>"><?php echo e($dt->prod_name); ?></a></h2>
										<p><?php echo e($dt->prod_details); ?></p>
									</td>
									<td class="unit">
										<h5>$<?php echo e($dt->prod_MRP_price); ?></h5>
									</td>
									<td class="quantity">
										<div>
											<input type="text" placeholder=" -" id="qtyminus-<?php echo e($dt->prod_id); ?>" onclick="qtyChange('remove','<?php echo e($dt->prod_id); ?>','<?php echo e($dt->prod_MRP_price); ?>')" class="cart-qty-box" readonly>
											<input type="text" value="<?php echo e($dt->prod_quantity); ?>" id="qtytxt-<?php echo e($dt->prod_id); ?>" class="cart-qty-box" readonly disabled>
											<input type="text" placeholder=" +" id="qtyplus-<?php echo e($dt->prod_id); ?>" onclick="qtyChange('add','<?php echo e($dt->prod_id); ?>','<?php echo e($dt->prod_MRP_price); ?>')" class="cart-qty-box" readonly>
										</div>
									</td>
									<td class="valu">
										<h4><span id="val-<?php echo e($dt->prod_id); ?>">$<?php echo e($dt->prod_quantity * $dt->prod_MRP_price); ?><span></h4>
									</td>
									<td class="acti">
										<a><i class="fa fa-trash-o" onclick="DelCart('<?php echo e($dt->prod_id); ?>')"></i></a>
									</td>
								</tr>
								<?php ($subtot=$subtot + $dt->prod_quantity * $dt->prod_MRP_price); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-sm-6 col-md-7">
					<div class="coupon">
						<a href="/">Continue Shopping</a>
						<h3>DISCOUNT COUPON CODE</h3>
						<input type="text" placeholder="DISCOUNT COUPON CODE HERE..." />
						<a href="">Apply Coupon</a>
						<p><span>NOTE :</span> Shipping and Taxes are estimated and updated during checkout based on your billing and shipping information.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-5">
					<div class="proceed fix">
						<a href="/CartClear">CLEAR SHOPPING CART</a>
						<a href="#">UPDATE SHOPPING CART</a>
						<div class="total">
							<h5>Sub Total <span id="subtot">$<?php echo e($subtot); ?></span></h5>
							<h5 id="discount"></h5>
							<h6>Grand Total <span id="tot">$<?php echo e($subtot); ?></span></h6>
							<input type="text" id="subtottxt" value="<?php echo e($subtot); ?>" hidden>
							<input type="text" id="tottxt" value="<?php echo e($subtot); ?>" hidden>
						</div>
						<a id="procedto" href="/checkout">PROCEED TO CHECK OUT</a>
					</div>
				</div>
			</div>
		</div>				
	</div> 		<!-- /Product Main Display -->
	
	
									<!-- Slider 2  -->

	<?php if(isset($historyData)): ?>
	<div class="slider2">
		<div id="Titler4001">
			<span>VISITED PRODUCTS</span>
		</div>
			<div id="Group_111_prod">
				<?php $__currentLoopData = $historyData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="Rectangle_388">
					<div class="front-board">
						<center><a href="/product-details/<?php echo e($dt->prod_id); ?>" class="prod-image-click">
							<?php ($imgCall=0); ?> <?php $__currentLoopData = $imgData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($img->prod_id==$dt->prod_id): ?>
								<a href="/product-details/<?php echo e($dt->prod_id); ?>" class="pro-image fix"><img src="<?php echo e(asset('img/shop/'.$img->image1.'')); ?>" alt="featured" class="prod-image-slide" /></a><?php ($imgCall=1); ?> <?php break; ?> <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($imgCall==0): ?> <a href="/product-details/<?php echo e($dt->prod_id); ?>" class="pro-image fix"><img src="img/featured/1.jpg" alt="Product Not Available" /></a> <?php endif; ?>
						</a></center><br><br>
						<div class="prod-name-divv">
							<a href="/product-details/<?php echo e($dt->prod_id); ?>" class="prod-name-click">
								<?php echo e($dt->prod_name); ?>

							</a><br>
							<span class="sell-data">$<?php echo e($dt->prod_SELLER_price); ?></span> <span class="mrp-data">$<?php echo e($dt->prod_MRP_price); ?></span>
						</div>
					</div>    <!-- /Front Board -->
				</div>  		<!-- /single product rectangle -->
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

		 <!-- Arrow of this slider here -->
		<div id="Arrow_for_slider_prod_page">
			<svg class="Path_55_prod" viewBox="4296.241 734 24.996 49.992">
				<path id="Path_55_prod" d="M 4321.2373046875 734 L 4296.2412109375 758.9961547851563 L 4321.2373046875 783.9923095703125" onclick="moving(-1)">
				</path>
			</svg>
			<svg class="Path_66_prod" viewBox="4296.241 734 24.996 49.992">
				<path id="Path_66_prod" d="M 4296.24072265625 734 L 4321.23681640625 758.9961547851563 L 4296.24072265625 783.9923095703125" onclick="moving(1)">
				</path>
			</svg>
		</div>
	</div>
	<?php endif; ?>
									<!-- Advertisement -->

		<div class="Advertisement_prod">
			<div id="Group_39_prod">
				<div id="Repeat_Grid_1">
					<div id="Repeat_Grid_1_0" class="">
						<svg class="Rectangle_421">
							<rect id="Rectangle_421" rx="2" ry="2" x="0" y="0" width="596" height="256">
							</rect>
						</svg>
					</div>
					<div id="Repeat_Grid_1_1" class="">
						<svg class="Rectangle_421_d">
							<rect id="Rectangle_421_d" rx="2" ry="2" x="0" y="0" width="596" height="256">
							</rect>
						</svg>
					</div>
				</div>
			</div>
		</div>
	
	                                  <!-- Advertise Body 1 2 -->

	<?php echo $__env->yieldContent('dashboard'); ?>
	<?php echo $__env->yieldContent('footer-relate'); ?>
</div> <!-- /Relate Page -->
</body>
</html><?php /**PATH F:\Office\Web Development\CartGo\resources\views/cart.blade.php ENDPATH**/ ?>