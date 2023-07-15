
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Alamat Kirim</h1>
<?php if($is_no_default): ?>
<div class="alert alert-warning">
 Belum ada alamat default
</div>
<?php endif; ?>
<a class="btn btn-primary" href="<?php echo e(url('konsumen/alamatkirim/create')); ?>">Tambah</a>
<table class="table">
 <thead><tr><th></th><th>Nama Penerima</th><th>Alamat</th><th></th></thead>
 <tbody>
 <?php $__currentLoopData = $alamatkirims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td>
 <a class="btn btn-primary"
 href="<?php echo e(url('konsumen/alamatkirim/edit').'/'.$cur->id); ?>">
 Edit</a>
 <form method="post"
 action="<?php echo e(url('konsumen/alamatkirim/default').'/'.$cur->id); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <button class="btn btn-primary" style="submit">
 Default
 </button>
 </form>
 <form method="post"
 action="<?php echo e(url('konsumen/alamatkirim/destroy').'/'.$cur->id); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <button class="btn btn-danger" style="submit"
 onclick="return confirm('Hapus data?')">
 Hapus
 </button>
 </form>
 </td>
 <td><?php echo $cur->nama_penerima; ?></td>
 <td><?php echo $cur->alamat; ?></td>
 <td><?php echo $cur->is_default ? 'Default' : ''; ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
</table>
<?php echo e($alamatkirims->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/alamatkirim/index.blade.php ENDPATH**/ ?>