
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Alamat Kirim</h1>
<form method="post"
 action="<?php echo e(url('konsumen/alamatkirim/store')); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <label for="nama_penerima" class="col-form-label">Nama</label>
 <input type="text" class="form-control"
 name="nama_penerima" value="<?php echo e(old('nama_penerima')); ?>"/>
 <label for="alamat" class="col-form-label">Alamat</label>
 <textarea class="form-control"
 name="alamat"><?php echo e(old('alamat')); ?></textarea>
 <br/>
 <button class="btn btn-primary" style="submit">SIMPAN</button>
 <a href="<?php echo e(url('/konsumen/alamatkirim')); ?>" class="btn">BATAL</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/alamatkirim/create.blade.php ENDPATH**/ ?>