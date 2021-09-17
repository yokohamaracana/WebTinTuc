	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php echo e(asset('/trang-chu')); ?>"><img src="<?php echo e(asset('images/icon.jpg')); ?>" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<!-- <li><a href="<?php echo e(asset('home')); ?>"  class="active">Home</a></li> -->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class="navigation">
					<span class="menu"></span>
					<ul class="navig">
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(url('category/'.$value->id)); ?>"><?php echo e($value->title); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(url('list-category')); ?>">...</a></li>
						<li><a class="red" href="<?php echo e(url('admin')); ?>">login admin</a></li>
					</ul>
				</div>
				<div class="header-right">
					<div class="search-bar">
						<form action="<?php echo e(url('search')); ?>" method="post">
							<?php echo csrf_field(); ?>
							<input type="text" name="keyword" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
					<ul>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function() {
			$(" ul.navig").slideToggle("slow", function() {});
		});
	</script>
<?php /**PATH C:\xampp\htdocs\Coffe\resources\views/pages/layouts/header.blade.php ENDPATH**/ ?>