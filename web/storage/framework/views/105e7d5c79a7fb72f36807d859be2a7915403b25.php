;
<?php $__env->startSection('content'); ?>
<?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="alert alert-success" role="alert">
                                [<?php echo e($notification->created_at); ?>] User <?php echo e($notification->data['name']); ?> (<?php echo e($notification->data['name']); ?>) has just registered.
                            </div>
                            <?php
                            $notification->markAsRead();
                            ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="card-header">
                <a href="<?php echo e(route('home')); ?>">Quay lại</a>
            </div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Danh mục</th>
    </tr>
  </thead>
  <?php
    $count=1;
  ?>
  <tbody>
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($value->title); ?></td>
      <td><a class="btn btn-success" href="<?php echo e(route('category.show',[$value->id])); ?>"><?php echo e('Edit'); ?></a></td>
      <td>
        <form action="<?php echo e(route('category.destroy',[$value->id])); ?>" method="post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <input type="submit" class="btn btn-danger" value="delete">
        </form>
      </td>
    </tr>
    <?php
      $count++;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/test/index_category.blade.php ENDPATH**/ ?>