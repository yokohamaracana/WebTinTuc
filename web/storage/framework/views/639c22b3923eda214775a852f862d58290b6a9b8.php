

<?php $__env->startSection("content"); ?>
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        <?php $__currentLoopData = $all_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="<?php echo e(url('category/'.$value->id)); ?>"><?php echo e($value->title); ?></a>

						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>	
    				</div>
				</div>	
			</div>					
	</div>
	<!--end-single-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/pages/list_category.blade.php ENDPATH**/ ?>