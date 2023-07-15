
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Cart</h1>
<form method="post" action="<?php echo e(url('konsumen/cart')); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="jual_id" value="<?php echo e($jual->id); ?>"/>
 <table class="table">
 <thead><tr><th></th><th>Pizza</th><th>Qty</th></thead>
 <tbody>
 <?php $__currentLoopData = $jual_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr> 
 <td><button class="btn btn-danger" type="submit"
name="action_button" value="hapus<?php echo e($cur->id); ?>">Hapus</button></td> 
 <td><?php echo $cur->nama_pizza; ?></td>
 <td>
 <input type="hidden" name="jual_detail_ids[]"
value="<?php echo e($cur->id); ?>"/>
 <input type="number" name="qtys[]" value="<?php echo e($cur->qty); ?>"
style="text-align:right"/>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
 </table>
 <label for="keterangan" class="col-form-label">Keterangan</label>
 <textarea name="keterangan" class="form-control">
<?php echo e(old('keterangan', $jual->keterangan)); ?></textarea>
 <br/>
 <button class="btn btn-primary" type="submit" name="action_button"
value="order">Simpan dan order lagi</button>
 <button class="btn btn-primary" type="submit" name="action_button"
value="hapusall">Kosongkan cart</button>
 <button class="btn btn-primary" type="submit" name="action_button"
value="checkout">Simpan dan checkout</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/jual/cart.blade.php ENDPATH**/ ?>