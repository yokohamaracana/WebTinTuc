;
<?php $__env->startSection('content'); ?>
<div class="card-header">
                <a href="<?php echo e(route('home')); ?>">Quay lại</a>
            </div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mô tả ngắn</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Thể loại</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
    $count=1;
  ?>
  <tbody>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      
      <th scope="row"><?php echo e($count); ?></th>
      <th scope="row"><?php echo $value->short_desc; ?></th>
      <th scope="row"><?php echo $value->desc; ?></th>
      <th scope="row"><img width="100px" src="<?php echo e(asset('uploads/'.$value->image)); ?>" alt=""></th>
      <th scope="row"><?php echo e($value->category->title); ?></th>
      <td ><a class="btn btn-success" href="<?php echo e(route('post.show',[$value->id])); ?>"><?php echo e('Edit'); ?></a></td>
      <td>
        <form action="<?php echo e(route('post.destroy',[$value->id])); ?>" method="post">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/test/PostStories/index.blade.php ENDPATH**/ ?>