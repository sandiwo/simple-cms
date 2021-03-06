<?php $__env->startSection('title', 'Daftar Menu'); ?>

<?php $__env->startSection('content_body'); ?>
<div class="col-md-4">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit Daftar Menu</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php echo Form::model($daftarMenu, ['route' => ['daftarMenu-update', request()->segment(3), $daftarMenu->id], 'class' => 'form-horizontal form-label-left']); ?>

            <?php echo $__env->make('admin.daftarMenu.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"> </i> Perbarui</button>
            </div>
 <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Daftar Menu</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php echo $__env->make('admin.daftarMenu.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>