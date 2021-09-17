

<?php $__env->startSection("content"); ?>
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="<?php echo e(url('stories/'.$value->id)); ?>"><img src="<?php echo e(asset('uploads/'.$value->image)); ?>" alt="" /></a>
								<h4><?php echo e($value->title); ?></h4>	
								<p><?php echo $value->short_desc; ?></p>
								<label>###</label>
							</div>
							<div class="clearfix"></div>
						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>	
    				</div>
				</div>	
			</div>					
	</div>
	<!--end-single-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/pages/category_page.blade.php ENDPATH**/ ?>