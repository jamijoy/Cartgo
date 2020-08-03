<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in</title>
<?php echo $__env->yieldContent('heading'); ?>
</head>
<body>
<div id="Login_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
					<!-- Login Area -->
	<div class="Icon_Holder" viewBox="0 -200 1364 444">
		<div id="Group_13">
			<form method="post"> <?php echo csrf_field(); ?>
				<div class="log-in-div">
					<?php if(session()->has('msg')): ?> <span class="err-msg"><?php echo e(session()->get('msg')); ?></span><br><br><?php echo e(session()->forget('msg')); ?><?php endif; ?>		
					<div class="log-to-div">
						<h3>Account Sign in</h3>
						<input type="text" name="identity" class="login-identity" placeholder="Enter Username or Email here" required><br>
						<input type="password" name="pass" class="login-pass" placeholder="Enter Password" required><br>
						<div class="log-btn-div">
							<input type="Submit" name="Submit" class="log-btn" value="Sign in"><a href="#" class="forgetlink-login">Foget Password ?</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php echo $__env->yieldContent('dashboard'); ?>
	<?php echo $__env->yieldContent('footer-login'); ?>
</div>
</body>
</html><?php /**PATH F:\Office\Web Development\CartGo\resources\views/login.blade.php ENDPATH**/ ?>