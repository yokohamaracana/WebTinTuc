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

                <form autocomplete="off"  action="<?php echo e(route('post.update',[$post->id])); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="<?php echo e($post->title); ?>" class="form-control" name="title" id="" placeholder="tiêu đề...">
                        <label for="title">Hình ảnh</label>
                        <input type="file" name="image" id="" class="form-control">
                        <label for="title">Mô tả ngắn</label>
                        <textarea name="short_desc" id="ckeditor_shortdesc" cols="30" rows="5" class="form-control" placeholder="Mô tả ngắn..." style="resize:none"><?php echo $post->short_desc; ?></textarea>
                        <label for="title">Nội dung</label>
                        <textarea name="desc" id="ckeditor_desc" cols="30" rows="10 class="form-control" placeholder="Nội dung..." style="resize:none"><?php echo $post->desc; ?></textarea>
                        <label for="title">Danh mục</label>
                        <select name="post_category_id" id="" class="form-control">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($cate->id == $post->post_category_id): ?>
                                <option value="<?php echo e($cate->id); ?>" selected><?php echo e($cate->title); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->title); ?></option>
                            <?php endif; ?>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="submit" class="btn btn-primary mt-2" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/test/PostStories/show.blade.php ENDPATH**/ ?>