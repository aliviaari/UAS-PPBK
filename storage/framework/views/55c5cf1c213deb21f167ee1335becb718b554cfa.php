
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>User</h1>
<a class="btn btn-primary" href="<?php echo e(url('resto/user/create')); ?>">Tambah</a>
<table class="table">
 <thead><tr><th></th><th>User Name</th><th>Real Name</th><th>Role</th></thead>
 <tbody>
 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td>
 <a class="btn btn-primary"
href="<?php echo e(url('resto/user/edit').'/'.$cur->id); ?>">Edit</a>
 <form method="post"
 action="<?php echo e(url('resto/user/destroy').'/'.$cur->id); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <button class="btn btn-danger" style="submit"
 onclick="return confirm('Hapus data?')">
 Hapus
 </button>
 </form>
 </td>
 <td><?php echo $cur->email; ?></td>
 <td><?php echo $cur->name; ?></td>
 <td><?php echo $cur->role; ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
</table>
<?php echo e($users->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/resto/user/index.blade.php ENDPATH**/ ?>