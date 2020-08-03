<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WishList</title>
<?php echo $__env->yieldContent('heading'); ?>
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="product-main-display">
		<h3>Products in Wish list</h3>
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table wishlist-table">
						<thead class="table-title">
							<tr>
								<th class="produ">PRODUCT</th>
								<th class="namedes">PRODUCT NAME &amp; DESCRIPTION</th>
								<th class="unit">UNIT PRICE</th>
								<th class="valu">ADD TO CART</th>
								<th class="acti">ACTION</th>
							</tr>													
						</thead>
						<tbody id="wishBody">
							<?php $__currentLoopData = $WishData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
								<td class="valu">
									<a class="add-to-cart"><i class="fa fa-shopping-cart" onclick="AddCart('<?php echo e(csrf_token()); ?>','<?php echo e($dt->prod_id); ?>')"> Add to Cart </i></a>
									<p id="sp-<?php echo e($dt->prod_id); ?>"></p>
								</td>
								<td class="acti">
									<a><i class="fa fa-trash-o" onclick="DelWish('<?php echo e($dt->prod_id); ?>')"></i></a>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>		<!-- /col-sm-12 -->
		</div> 		<!-- /row -->			
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
</html><?php /**PATH F:\Office\Web Development\CartGo\resources\views/wishlist.blade.php ENDPATH**/ ?>