
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="a-1">
    <div class="col-md-12 abt-left">
        <a href="<?php echo e(url('stories/'.$value->id)); ?>"><img src="<?php echo e(asset('uploads/'.$value->image)); ?>" alt="" /></a>
        <h6>Find The Most</h6>
        <h3><a href="single.html"><?php echo e($value->title); ?></a></h3>
        <p><?php echo $value->short_desc; ?></p>
        <label>###</label>
    </div>
    <div class="clearfix"></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/pages/search_page.blade.php ENDPATH**/ ?>