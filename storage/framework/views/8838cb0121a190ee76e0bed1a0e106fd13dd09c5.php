<?php echo $__env->make('public.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container album-page">
    <div class="row">
      <div class="col-sm-9">
        <center class="title-slide">
          <h2 class="black"><?php echo e(ucfirst(request()->segment(1))); ?></h2>
          <!-- <p><h5 class="grey"><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</i></h5></p> -->
        </center>
	    <?php $__empty_1 = true; $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="left-side-activity">
          <div class="left-side-activity-title"><a class="link" href="<?php echo e(route('berita-detail', $report->slug)); ?>"><?php echo e($report->judul); ?></a></div>
          <div class="left-side-activity-datetime"><?php echo e(substr($report->created_at, 11)); ?> | <?php echo e(carbonHumanDate(null, $report->tanggal_posting)); ?> | <?php echo e($report->dibuat_oleh); ?></div>
          <div class="left-side-activity-text">
            <div class="row">
              <div class="col-sm-4"><img src="<?php echo e($report->gambar); ?>"></div>
              <div class="col-sm-8">
			    <?php echo content($report->isi, 350, '<a href="'.route(request()->segment(1).'-detail', $report->slug).'">Selengkapnya <i class="fa fa-angle-double-right"></i></a>'); ?>

              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p>Tidak ada berita untuk ditampilkan pada bulan ini!</p>
	    <?php endif; ?>
        <div class="pull-right">
            <?php echo e($reports->links()); ?>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="right-side-top">
            <?php echo $__env->make('public.berita', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="right-side">
            <?php echo $__env->make('public.kegiatan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    </div>
  </div>
<?php $__env->startPush('public-script'); ?>
  <script>
    function changeTahunBulan() {
      var tahun = $('#tahun option:selected').val();
      var bulan = $('#bulan option:selected').val();

      $('.btn-filter').attr('href', '<?php echo e(asset(request()->segment(1))); ?>/'+tahun+'/'+bulan);
    }
    changeTahunBulan();
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('public.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
