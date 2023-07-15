
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Checkout</h1>
<form method="post" action="<?php echo e(url('konsumen/checkout')); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="jual_id" value="<?php echo e($jual->id); ?>"/>
 <h2>Alamat Kirim</h2>
 <?php if(count($alamat_kirims)==0): ?>
 Tidak ada alamat kirim. Silakan tambah alamat kirim melalui link 
<a href="<?php echo e(url('konsumen/alamatkirim')); ?>">berikut</a>.
 <?php else: ?>
 <select name="alamat_kirim_id" class="form-control">
 <?php $__currentLoopData = $alamat_kirims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat_kirim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($alamat_kirim->id); ?>"
<?php echo e($alamat_kirim->id==$jual->alamat_kirim_id ? 'selected' :''); ?>>
<?php echo e($alamat_kirim->nama_penerima.' - '.$alamat_kirim->alamat); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 <?php endif; ?>
 <h2>Pesanan</h2>
 <table class="table">
 <thead>
 <tr><th>Qty</th><th>Pizza</th><th>Harga Satuan</th><th>Sub Total</th></tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $jual_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr> 
 <td><?php echo $cur->qty; ?></td>
 <td><?php echo $cur->nama_pizza; ?></td>
 <td style="text-align:right"><?php echo $cur->harga_satuan; ?></td>
 <td style="text-align:right"><?php echo $cur->sub_total; ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td colspan="3">Total</td>
 <td style="text-align:right"><?php echo e($jual->total_harga); ?></td>
 </tr>
 </tbody>
 </table>
 <p><?php echo e($jual->keterangan); ?></p>
 <a class="btn" href="<?php echo e(url('konsumen/cart')); ?>">Kembali ke Cart</a>
 <button class="btn btn-primary" type="submit">Bayar</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/jual/checkout.blade.php ENDPATH**/ ?>