

<?php $__env->startSection("content"); ?>
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
						<a href="#"><img class="img-responsive" src="<?php echo e(asset('uploads/'.$data->image)); ?>" alt=" "></a>
					<div class=" single-grid">
						<h4><?php echo e($data->title); ?></h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i>###</span></li>		  						 	
		  					</ul>		  						
							<?php echo $data->desc; ?>

					</div>
					<div class="comments heading">
						<h3>Comments</h3>
						<?php
							$count = 1;
						?>
					  <?php $__currentLoopData = $viewer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  <div class="media">
					      <div class="media-left">
					        <a href="#">
					        	<img src="" alt="">
					        </a>
					      </div>
					      <div class="media-body">
					        <h4 class="media-heading"><?php echo e('#'.$count); ?></h4>
					        <p><?php echo e($value->title); ?></p>
					      </div>
					    </div>
						<?php
							$count++;
						?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="comment-bottom heading">
    					<h3>Leave a Comment</h3>
					<form action="<?php echo e(url('/stories/'.$data->id.'/store')); ?>" method="post">
					<?php echo csrf_field(); ?>
						<textarea name="message" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Send">
					</form>
    				</div>
    				</div>
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        <?php $__currentLoopData = $relative_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="<?php echo e(url('stories/'.$value->id)); ?>"><img src="<?php echo e(asset('uploads/'.$value->image)); ?>" alt="" /></a>
								<h4><?php echo e($data->title); ?></h4>	
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/pages/single.blade.php ENDPATH**/ ?>