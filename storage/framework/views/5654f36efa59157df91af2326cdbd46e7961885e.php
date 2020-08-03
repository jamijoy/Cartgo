<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dash Board</title>
<?php echo $__env->yieldContent('heading'); ?>
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="product-main-display">

		<h1><?php echo e(count($users)); ?> <small> Accounts </small><?php echo e(count($prodData)); ?> <small> Accounts </small> <?php echo e(count($OrderData)); ?> <small> Accounts </small></h1><hr>
		<div class="panel-group" id="checkout-progress">
			<div class="panel panel-default">
					<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#checkout-method">
				<div class="panel-heading" >
					<span></span>ACCOUNTS
				</div></a>
				<div id="checkout-method" class="panel-collapse collapse">
					<div class="panel-body">
						<table>
							<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="wally">
							<tr><td > <a href="" class="nam-tab-dash"> <i class="fa fa-user"></i> <?php echo e($dt->username); ?> </a> </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-arrows"></i> <?php echo e($dt->email); ?></td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-phone"></i> <?php echo e($dt->contact); ?></td><td> &nbsp &nbsp &nbsp ( User Type : <?php echo e($dt->type); ?> ) </td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-trash-o"> </i></td></tr>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
					<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#bill-info">
				<div class="panel-heading" >
					<span></span>PRODUCTS
				</div></a>
				<div id="bill-info" class="panel-collapse collapse">
					<div class="panel-body">
						<table>
							<?php $__currentLoopData = $prodData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="wally">
							<tr><td > <a href="/product-details/<?php echo e($dt->prod_id); ?>" class="nam-prod-dash"> <i class="fa fa-archive"></i> <?php echo e($dt->prod_name); ?> ( <?php echo e($dt->prod_shop); ?> ) </a> </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-arrows"></i> $<?php echo e($dt->prod_MRP_price); ?></td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Quantity : <?php echo e($dt->prod_qty); ?></td><td> &nbsp &nbsp &nbsp  <?php echo e($dt->created_date); ?> </td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-trash-o"> </i></td></tr>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
					<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#shipping-info">
				<div class="panel-heading" >
					<span></span>ORDERS
				</div></a>
				<div id="shipping-info" class="panel-collapse collapse">
					<div class="panel-body">
						<table>
							<?php $__currentLoopData = $OrderData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="wally">
							<tr><td > <a href="" class="nam-tab-dash"> <i class="fa fa-ticket"></i> <?php echo e($dt->order_id); ?> </a> </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-arrows"></i> $<?php echo e($dt->total_price); ?></td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-phone"></i>Order By : <?php echo e($dt->username); ?></td><td> &nbsp &nbsp &nbsp  <?php echo e($dt->order_status); ?> </td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-trash-o"> </i></td></tr>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
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
	
	<?php echo $__env->yieldContent('dashboard'); ?>
	<?php echo $__env->yieldContent('footer-relate'); ?>
</div> <!-- /Relate Page -->
</body>
</html><?php /**PATH F:\Office\Web Development\CartGo\resources\views/DashBoard.blade.php ENDPATH**/ ?>