;
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <a href="<?php echo e(route('home')); ?>">Quay lại</a>
            </div>
            <div class="card-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <form autocomplete="off"  action="<?php echo e(route('category.update',[$category->id])); ?>" method="post">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="<?php echo e($category->title); ?>" class="form-control" name="title" id="" placeholder="tiêu đề...">
                        <input type="submit" class="btn btn-primary mt-2" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/test/show_category.blade.php ENDPATH**/ ?>