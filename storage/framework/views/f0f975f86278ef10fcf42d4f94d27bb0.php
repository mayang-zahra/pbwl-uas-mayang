
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PAKET</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/paket/' .$row->paket_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA PAKET</label>
                        <input type="text" name="paket_nama_paket" class="form-control" value="<?php echo e($row->paket_nama_paket); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA PAKET</label>
                        <input type="text" name="paket_harga_paket" class="form-control" value="<?php echo e($row->paket_harga_paket); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-mayang\resources\views/paket/edit.blade.php ENDPATH**/ ?>