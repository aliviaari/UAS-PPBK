
<?php $__env->startSection('content'); ?>
<div class="container">
 <h1>Konsumen</h1>
 <div class="row">
 <div class="col-3 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:20px">
 <div class="col">
 Order bulan ini
 </div>
 <div class="col">
 <?php echo e($order_bulan_ini); ?>

 </div>
 </div>
 </div>
 <div class="col-3 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:0px">
 <div class="col">
 Order minggu ini
 </div>
 <div class="col">
 <?php echo e($order_minggu_terakhir); ?>

 </div>
 </div>
 </div>
 <div class="col-3 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:0px">
 <div class="col">
 Order Kemarin
 </div>
 <div class="col">
 <?php echo e($order_kemarin); ?>

 </div>
 </div>
 </div>
 <div class="col-3 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:0px">
 <div class="col">
 Rating Konsumen
 </div>
 <div class="col">
 <?php echo e($rating_5 == null ? '-' : number_format($rating_5,2)); ?>/<?php echo e(number_format($rating_semua,2)); ?>

 </div>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col-9 pizza-card pizza-primary">
 <?php if($jual==null): ?>
 Silakan pesan pizza kesukaanmu! Klik di <a href="<?php echo e(url('/konsumen/order')); ?>">sini</a>.
 <?php elseif($jual->status_jual=='CART'): ?>
 Selesaikan ordermu di <a href="<?php echo e(url('/konsumen/checkout')); ?>">sini</a>.
 <?php elseif($jual->status_jual=='PESAN'): ?>
 Restoran akan segera merespon ordermu. Track di <a href="<?php echo e(url('/konsumen/track').'/'.$jual->id); ?>">sini</a>.
 <?php elseif($jual->status_jual=='PROSES'): ?>
 Restoran sedang menyiapkan makananmu. Track di <a href="<?php echo e(url('/konsumen/track').'/'.$jual->id); ?>">sini</a>.
 <?php elseif($jual->status_jual=='SIAP'): ?>
 Kurir sedang mengambil ordermu. Track di <a href="<?php echo e(url('/konsumen/track').'/'.$jual->id); ?>">sini</a>.
 <?php elseif($jual->status_jual=='ANTAR'): ?>
 Kurir sedang mengirim ordermu. Track di <a href="<?php echo e(url('/konsumen/track').'/'.$jual->id); ?>">sini</a>.
 <?php elseif($jual->status_jual=='TIBA'): ?>
 Silakan beri rating ordermu di <a href="<?php echo e(url('/konsumen/track').'/'.$jual->id); ?>">sini</a>.
 <?php endif; ?>
 </div>
 <div class="col-3 pizza-card pizza-primary">
 Atur alamat kirim di <a href="<?php echo e(url('/konsumen/alamatkirim')); ?>">sini</a>.
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/home/index.blade.php ENDPATH**/ ?>