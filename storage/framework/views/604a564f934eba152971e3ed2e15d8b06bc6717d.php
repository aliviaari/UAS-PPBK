
<?php $__env->startSection('content'); ?>
<div class="container">
 <h1>KURIR</h1>
 <div class="row">
 <div class="col-4 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:20px">
 <div class="col">
 Order bulan ini
 </div>
 <div class="col">
 <?php echo e($order_bulan_ini); ?>

 </div>
 </div>
 </div>
 <div class="col-4 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:20px">
 <div class="col">
 Order minggu terakhir
 </div>
 <div class="col">
 <?php echo e($order_minggu_terakhir); ?>

 </div>
 </div>
 </div>
 <div class="col-4 pizza-card pizza-primary">
 <div class="row" style="padding-left:5px;padding-right:20px">
 <div class="col">
 Rating Kurir
 </div>
 <div class="col">
 <?php echo e($rating_5 == null ? '-' : number_format($rating_5,2)); ?>/<?php echo e(number_format($rating_semua,2)); ?>

 </div>
 </div>
 </div>
 </div>
 <br/>
 <div class="row">
 <div class="col-10">&nbsp;</div>
 <div class="col-2">
 <form>
 <select name="status_jual" class="form-control"
onchange="this.form.submit()">
 <?php $__currentLoopData = $arr_status_jual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($cur); ?>"
<?php if($cur==$status_jual): ?> selected <?php endif; ?>><?php echo e($cur); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 </form>
 </div>
 </div>
 <?php $__empty_1 = true; $__currentLoopData = $juals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 <div class="row">
 <div class="col-12 pizza-card pizza-primary"> 
 Order <?php echo e($cur->id); ?> (<?php echo e($cur->status_jual); ?>) <?php echo e(Carbon\Carbon::parse($cur->waktu_pesan)->format('d-m-Y H:i:s')); ?> <?php echo e(Carbon\Carbon::parse($cur->waktu_pesan)->diffForHumans()); ?> <button type="button"
class="btn btn-light" onclick="toggle_detail(<?php echo e($cur->id); ?>);">>></button>
 </div>
 <div class="col-12" style="display:none" id="detail<?php echo e($cur->id); ?>">
 <p><?php echo e($cur->alamat_kirim->nama_penerima); ?><br/>
<?php echo e($cur->alamat_kirim->alamat); ?></p>
 <ul>
 <?php $__currentLoopData = $cur->jual_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jual_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($jual_detail->qty); ?> <?php echo e($jual_detail->nama_pizza); ?></li> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 <?php if($cur->status_jual=='SIAP'): ?>
 <form style="display:inline" method="POST"
action="<?php echo e(url('kurir/antar').'/'.$cur->id); ?>"><?php echo csrf_field(); ?>
<button class="btn btn-primary">AMBIL ORDER</button></form>
 <?php endif; ?>
 <?php if($cur->status_jual=='ANTAR'): ?>
 <form style="display:inline" method="POST"
action="<?php echo e(url('kurir/tiba').'/'.$cur->id); ?>"><?php echo csrf_field(); ?>
<button class="btn btn-primary">SELESAI ORDER</button></form>
 <?php endif; ?>
 <?php if($cur->status_jual=='TIBA'): ?>
 <form style="display:inline" method="POST"
action="<?php echo e(url('kurir/rate').'/'.$cur->id); ?>">
 <div class="row">
 <?php echo csrf_field(); ?>
 <div class="col-auto">
 <label for="konsumen_rate" class="form-label">Beri rating 
konsumen</label>
 </div>
 <div class="col-auto">
 <select name="konsumen_rate" class="form-select">
 <?php $__currentLoopData = ['1','2','3','4','5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($rate); ?>"
<?php echo e($rate==5 ? 'selected' : ''); ?>><?php echo e($rate); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
 </div>
 <div class="col-auto">
 <button class="btn btn-primary">RATE</button>
 </div>
 </div
 </form>
 <?php endif; ?>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 <p class="pizza-danger">Tidak ada data</p>
 <?php endif; ?>
</div>
<script>
function toggle_detail(id){
 var obj_id = 'detail' + id;
 var x = document.getElementById(obj_id);
 if (x.style.display === "none") {
 x.style.display = "block";
 } else {
 x.style.display = "none";
 }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/kurir/home/index.blade.php ENDPATH**/ ?>