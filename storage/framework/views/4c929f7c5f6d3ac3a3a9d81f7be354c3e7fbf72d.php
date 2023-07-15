
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Pizza</h1>
<form method="post"
 action="<?php echo e(url('resto/pizza/store')); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <label for="nama_pizza" class="col-form-label">Nama</label>
 <input type="text" class="form-control"
 name="nama_pizza" value="<?php echo e(old('nama_pizza')); ?>"/>
 <label for="harga_satuan" class="col-form-label">Harga Satuan</label>
 <input type="text" class="form-control"
 name="harga_satuan" value="<?php echo e(old('harga_satuan')); ?>"/>
 <br/>
 <button class="btn btn-primary" style="submit">SIMPAN</button>
 <a href="<?php echo e(url('/resto/pizza')); ?>" class="btn">BATAL</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/resto/pizza/create.blade.php ENDPATH**/ ?>