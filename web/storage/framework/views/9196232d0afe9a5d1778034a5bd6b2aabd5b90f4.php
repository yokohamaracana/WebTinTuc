<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="<?php echo e(route('category.create')); ?>"><button class="btn btn-primary w-100 mb-2">Thêm danh mục bài viết</button></a>
                    <a href="<?php echo e(route('category.index')); ?>"><button class="btn btn-primary w-100 mb-2">Xem danh mục bài viết</button></a>
                    <a href="<?php echo e(route('post.create')); ?>"><button class="btn btn-primary w-100 mb-2">Thêm danh bài viết</button></a>
                    <a href="<?php echo e(route('post.index')); ?>"><button class="btn btn-primary w-100 mb-2">Xem danh mục bài viết</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/home.blade.php ENDPATH**/ ?>