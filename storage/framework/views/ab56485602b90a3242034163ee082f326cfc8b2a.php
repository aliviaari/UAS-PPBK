
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Order</h1>
<?php if($is_cart): ?>
<a class="btn btn-primary" href="<?php echo e(url('konsumen/cart')); ?>">Lihat Cart</a>
<?php endif; ?>
<?php $i = 0; $items_per_row = 3; ?>
<?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <?php if($i%$items_per_row==0): ?>
 <?php if($i!=0): ?>
</div>
 <?php endif; ?>
<div class="row mb-4">
 <?php endif; ?>
 <div class="col text-center">
 <form method="post"
 action="<?php echo e(url('konsumen/addtocart').'/'.$cur->id); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <img src="<?php echo $cur->pizza_url == ''? asset('images/default.jpg') 
 : asset($cur->pizza_url); ?>"
 style="width:100%;height:250px;object-fit:cover"
 alt="<?php echo 'Gambar '.$cur->nama_pizza; ?>" /><br/>
 <?php echo $cur->nama_pizza; ?><br/>
 <?php echo $cur->harga_satuan; ?><br/>
 <button class="btn btn-primary" style="submit">
 Order
 </button>
 </form> 
 </div>
<?php $i++; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/jual/order.blade.php ENDPATH**/ ?>