
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Pizza</h1>
<form method="post"
 style="display:inline" enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
 <label for="pizza_url" class="col-form-label">
 Gambar <?php echo e($pizza->nama_pizza); ?>

 </label>
 <input type="file" class="form-control" name="pizza_url" />
 <br/>
 <button class="btn btn-primary" style="submit">SIMPAN</button>
 <a href="<?php echo e(url('/resto/pizza')); ?>" class="btn">BATAL</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/resto/pizza/image.blade.php ENDPATH**/ ?>