
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Pizza</h1>
<a class="btn btn-primary" href="<?php echo e(url('resto/pizza/create')); ?>">Tambah</a>
<table class="table">
 <thead><tr><th></th><th>Gambar</th><th>Pizza</th><th>Harga</th></thead>
 <tbody>
 <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td>
 <a class="btn btn-primary"
 href="<?php echo e(url('resto/pizza/edit').'/'.$cur->id); ?>">Edit</a>
 <a class="btn btn-primary"
 href="<?php echo e(url('resto/pizza/image').'/'.$cur->id); ?>">Gambar</a>
 <form method="post"
 action="<?php echo e(url('resto/pizza/destroy').'/'.$cur->id); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <button class="btn btn-danger" style="submit"
 onclick="return confirm('Hapus data?')">
 Hapus
 </button>
 </form>
 </td>
 <td><img src="<?php echo $cur->pizza_url == ''? asset('images/default.jpg') 
 : asset($cur->pizza_url); ?>"
 style="width:60%;height:150px;object-fit:cover"
 alt="<?php echo 'Gambar '.$cur->nama_pizza; ?>" /></td>
 <td><?php echo $cur->nama_pizza; ?></td>
 <td><?php echo $cur->harga_satuan; ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
</table>
<?php echo e($pizzas->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/resto/pizza/index.blade.php ENDPATH**/ ?>