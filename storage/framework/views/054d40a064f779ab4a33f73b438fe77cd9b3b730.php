
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Track</h1>
<h2>Penerima</h2>
<table class="table">
 <tbody>
 <tr><td>Nama</td><td><?php echo e($alamat_kirim->nama_penerima); ?></td></tr>
 <tr><td>Alamat</td><td><?php echo e($alamat_kirim->alamat); ?></td></tr>
 </tbody>
</table>
<h2>Order</h2>
<table class="table">
 <tbody>
 <?php $__currentLoopData = $jual_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr> 
 <td><?php echo $cur->nama_pizza; ?></td>
 <td><?php echo e($cur->qty); ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td colspan="2">
 Keterangan:<br/>
 <?php echo e($jual->keterangan); ?>

 </td>
 </tr>
 </tbody>
</table>
<h2>Waktu</h2>
<table class="table">
 <tbody>
 <tr><td>PESAN</td><td><?php echo e($jual->waktu_pesan != null ? 
 Carbon\Carbon::parse($jual->waktu_pesan)->format('d-M-Y H:i:s') : ''); ?></td></tr>
 <tr><td>PROSES</td><td><?php echo e($jual->waktu_proses != null ? 
 Carbon\Carbon::parse($jual->waktu_proses)->format('d-M-Y H:i:s') : ''); ?></td></tr>
 <tr><td>SIAP</td><td><?php echo e($jual->waktu_siap != null ? 
 Carbon\Carbon::parse($jual->waktu_siap)->format('d-M-Y H:i:s').' ('.
 Carbon\Carbon::parse($jual->waktu_siap)->diffForHumans(Carbon\Carbon::parse($jual->waktu_pesan)).')' : ''); ?></td></tr>
 <tr><td>ANTAR</td><td><?php echo e($jual->waktu_antar != null ? 
 Carbon\Carbon::parse($jual->waktu_antar)->format('d-M-Y H:i:s').
 ($kurir == null ? '' : '('.$kurir->name.')') : ''); ?></td></tr>
 <tr><td>TIBA</td><td><?php echo e($jual->waktu_tiba != null ? 
Carbon\Carbon::parse($jual->waktu_tiba)
 ->format('d-M-Y H:i:s').' ('.Carbon\Carbon::parse($jual->waktu_tiba)
 ->diffForHumans(Carbon\Carbon::parse($jual->waktu_pesan)).')' : ''); ?></td></tr>
 </tbody>
</table>
<?php if($jual->status_jual!='TIBA'): ?>
<a class="btn" href="<?php echo e(url('/konsumen/home')); ?>">Kembali</a>
<?php endif; ?>
<?php if($jual->status_jual=='PESAN'): ?>
<form method="post" action="<?php echo e(url('konsumen/cancel').'/'.$jual->id); ?>"
style="display:inline">
 <?php echo csrf_field(); ?>
 <button class="btn btn-danger" onclick="return confirm('Batalkan order?')"
type="submit">Batal</button>
</form><?php endif; ?>
<?php if($jual->status_jual=='TIBA'): ?>
<form method="post" action="<?php echo e(url('konsumen/rate').'/'.$jual->id); ?>"
style="display:inline">
 <?php echo csrf_field(); ?>
 <div class="row">
 <?php echo csrf_field(); ?>
 <div class="col-3">
 <label for="resto_rate" class="form-label">Beri rating restoran</label>
 </div>
 <div class="col-3">
 <select name="resto_rate" class="form-select">
 <?php $__currentLoopData = ['1','2','3','4','5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($rate); ?>" <?php echo e($rate==5 ? 'selected' : ''); ?>><?php echo e($rate); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 </div>
 </div>
 <div class="row">
 <?php echo csrf_field(); ?>
 <div class="col-3">
 <label for="kurir_rate" class="form-label">Beri rating kurir</label>
 </div>
 <div class="col-3">
 <select name="kurir_rate" class="form-select">
 <?php $__currentLoopData = ['1','2','3','4','5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($rate); ?>" <?php echo e($rate==5 ? 'selected' : ''); ?>><?php echo e($rate); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 </div>
 </div>
 <button class="btn btn-primary" type="submit">Simpan</button>
 <a class="btn" href="<?php echo e(url('/konsumen/home')); ?>">Kembali</a>
</form>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/konsumen/jual/track.blade.php ENDPATH**/ ?>